<div id="index" class="page-inside">

    <script>
        var hash = window.location.hash;
        if(hash != null) {
            hash = hash.substr(1);
            currentCategory = $('div[data-slug="' + hash + '"]');
            currentCategory.addClass('expanding');
            currentCategory.removeClass('clickable');
            category = true;
            document.location.hash = currentCategory.data('slug');
            setTimeout(function() {
                currentCategory.removeClass('expanding');
                currentCategory.addClass('expanded');
            }, 500);
        }
        body.on('click', '.index-category.clickable', function(e) {
            currentCategory = $(this);
            currentCategory.addClass('expanding');
            currentCategory.removeClass('clickable');
            category = true;
            document.location.hash = currentCategory.data('slug');
            setTimeout(function() {
                currentCategory.removeClass('expanding');
                currentCategory.addClass('expanded');
            }, 500);
        });
        body.on('click', 'a.index-category-items-back', function(e) {
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
    $results =  DB::query('SELECT * FROM categories');
    foreach($results as $result) {
    ?>
        <div class="index-category clickable" data-id="<?=$result['id'];?>" data-slug="<?=$result['slug'];?>">

            <div class="index-category-title"><div class="index-category-title-inside">

                <?=$result['name'];?>

                <div class="index-category-title-inside-comment"><div><?=$result['description'];?></div></div>

            </div></div>

            <div class="index-category-items">

                <div class="index-category-items-box">
                    <a href="#" class="index-category-items-back"><span><span class="icon-left"></span> Back</span></a>
                </div><!--<?
                $categories = DB::queryOneColumn('slug', 'SELECT * FROM categories ORDER BY id ASC');
                $items = DB::query('SELECT * FROM items WHERE category = %i ORDER BY id ASC', $result['id']);
                foreach($items as $item) {
                    $thumbnail = '';
                    if(file_exists('images/'.$categories[$item['category'] - 1].'/'.$item['slug'].'.png')){
                        $thumbnail = ' style="background-image:url(\''.$GLOBALS['base_url'].'images/'.$categories[$item['category'] - 1].'/'.$item['slug'].'.png\')"';
                    }
                    ?>
                 --><div class="index-category-items-box">
                        <a href="<?=$GLOBALS['base_url']?><?=$item['slug'];?>/" class="load-page"<?=$thumbnail;?>><span><?=$item['name'];?></span></a>
                    </div><!--
                <?
                }
                ?>-->

            </div>

        </div>
    <?
    }
    ?>

</div>