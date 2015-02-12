<div id="index" class="page-inside">

    <script>
        var body = $('body');
        var walls = [];
        function initialise_wall(wall) {
            walls[wall] = new freewall('#section-items-' + wall);
            walls[wall].reset({
                selector: '.section-target-' + wall,
                animate: true,
                cellW: 150,
                cellH: 150,
                gutterX: 0,
                gutterY: 0,
                fixSize: 0
            });
            walls[wall].fitWidth();
        }
        body.on('click', '.section-filter', function() {
            var id = $(this).data('section');
            $('.section-filter-' + id).removeClass('active');
            var filter = $(this).addClass('active').data('filter');
            if (filter) {
                walls[id].filter(filter);
            } else {
                walls[id].unFilter();
            }
        });
        var hash = window.location.hash;
        if(hash != null) {
            slug = hash.substr(1);
            currentCategory = $('div[data-slug="' + slug + '"]');
            var id = currentCategory.data('id');
            if(walls == null || walls[id] == null)
                initialise_wall(id);
            currentCategory.addClass('expanding');
            currentCategory.removeClass('clickable');
            category = true;
            setTimeout(function() {
                currentCategory.removeClass('expanding');
                currentCategory.addClass('expanded');
                setTimeout(function() {
                    walls[id].unFilter();
                }, 10);
            }, 500);
        }
        body.on('click', '.index-section.clickable', function(e) {
            currentCategory = $(this);
            var id = currentCategory.data('id');
            if(walls == null || walls[id] == null)
                initialise_wall(id);
            if(walls)
            currentCategory.addClass('expanding');
            currentCategory.removeClass('clickable');
            category = true;
            document.location.hash = currentCategory.data('slug');
            setTimeout(function() {
                currentCategory.removeClass('expanding');
                currentCategory.addClass('expanded');
                setTimeout(function() {
                    walls[id].unFilter();
                }, 100);
            }, 500);
        });
        body.on('click', '#section-back', function(e) {
            e.preventDefault();
            if(category && currentCategory != null) {
                currentCategory.removeClass('expanded');
                currentCategory.addClass('expanding');
                currentCategory.addClass('clickable');
                document.location.hash = '';
                setTimeout(function() {
                    currentCategory.removeClass('expanding');
                    currentCategory = null;
                    category = false;
                }, 500);
            }
        });
        $(document).keyup(function(e) {
            if(e.keyCode == 27) {
                if(category && currentCategory != null) {
                    setTimeout(function() {
                        currentCategory.removeClass('expanded');
                        currentCategory.addClass('expanding');
                        currentCategory.addClass('clickable');
                        setTimeout(function() {
                            currentCategory.removeClass('expanding');
                            currentCategory = null;
                            category = false;
                        }, 500);
                    }, 500);
                }
            }
        });
    </script>

    <?
    $categories = DB::query('SELECT * FROM categories ORDER BY id ASC');
    $sections = DB::query('SELECT * FROM sections ORDER BY id ASC');
    foreach($sections as $section) {?>
        <div class="index-section clickable" data-id="<?=$section['id'];?>" data-slug="<?=$section['slug'];?>">
            <div class="index-section-title"><div class="index-section-title-inside">
                <?=$section['name'];?>
                <div class="index-section-title-inside-description">
                    <?=$section['description'];?>
                </div>
            </div></div>

            <div class="index-section-content"><div class="index-section-content-wrapper"><div class="index-section-content-inside">

                    <div class="index-section-content-bar">

                        <div id="section-back" class="index-section-content-bar-back"><span class="icon-left"></span></div><!--

                     --><div class="index-section-content-bar-title"><?=$section['name'];?></div>

                    </div>

                    <div class="index-section-content-items"><div class="index-section-content-items-inside">

                        <div class="index-section-content-items-categories">

                            <div class="index-section-content-items-categories-category section-filter section-filter-<?=$section['id'];?> active" data-section="<?=$section['id'];?>" data-filter=""><svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                                                                                                                                                           viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
<rect x="11.9" y="15.8" fill="#ED4343" width="30.1" height="21.3"/>
                                    <polygon fill="#ED4343" points="47.2,25 47.2,42.6 21.2,42.6 21.2,46.3 51.3,46.3 51.3,25 "/>
                                    <polygon fill="#ED4343" points="42.9,20.2 42.9,38 16.2,38 16.2,41.5 46.4,41.5 46.4,20.2 "/>
</svg> All <?=$section['name'];?></div><!--<?
                            foreach($categories as $category) {
                                if($category['section'] != $section['id']) continue;
                            ?>
                         --><div class="index-section-content-items-categories-category section-filter section-filter-<?=$section['id'];?>" data-section="<?=$section['id'];?>" data-filter=".<?=$category['slug'];?>"><?=$category['icon'].$category['name'];?></div><!--<? } ?>-->

                        </div><!--

                    --><div class="index-section-content-items-list">

                            <div id="section-items-<?=$section['id'];?>" class="section-items-<?=$section['id'];?>">

                            <!--<?
                                $items = DB::query('SELECT * FROM items WHERE section = %i ORDER BY id ASC', $section['id']);
                                foreach($items as $item) {
                                    $thumbnail = '';
                                    if(file_exists('images/'.$categories[$item['category'] - 1]['slug'].'/'.$item['slug'].'.png')){
                                        $thumbnail = ' style="background-image:url(\''.$GLOBALS['base_url'].'images/'.$categories[$item['category'] - 1]['slug'].'/'.$item['slug'].'.png\')"';
                                    }
                                    $name_parts = explode(' ', $item['name']);
                                    $name = '';
                                    foreach($name_parts as $name_part) {
                                        $name .= '<div><span>'.$name_part.'</span></div>';
                                    }
                                    ?>--><a href="<?=$GLOBALS['base_url'].$section['uri'].$item['slug'];?>/" class="<? if($section['use_ajax']) echo 'load-page ' ;?>index-section-content-items-list-item section-target-<?=$section['id'];?> <?=$categories[$item['category'] - 1]['slug'];?>"<?=$thumbnail;?>><div><?=$name.$categories[$item['category'] - 1]['icon']?></div></a><!--
                                <? } ?>-->

                            </div>

                        </div>

                    </div></div>

                </div></div></div>

        </div>
    <? } ?>

</div>