<div class="page-wrapper">
<div class="page-inside">

    <div class="index-sections">

        <?
        $categories = DB::query('SELECT * FROM categories ORDER BY id ASC');
        $sections = DB::query('SELECT * FROM sections ORDER BY id ASC');
        foreach($sections as $section) {
        ?><div id="section-<?=$section['id'];?>" data-id="<?=$section['id'];?>" class="index-section-wrapper"><div data-id="<?=$section['id'];?>" data-slug="<?=$section['slug'];?>" class="index-section">

                <div class="index-section-title"><?=$section['name'];?></div>

        </div></div>

        <?
        }
        ?>

    </div>

    <div class="index-sections-content">

        <?
        $sections = DB::query('SELECT * FROM sections ORDER BY id ASC');
        foreach($sections as $section) {
            ?><div id="section-<?=$section['id'];?>-content" data-id="<?=$section['id'];?>" class="index-section-content-wrapper"><div class="index-section-content"><div class="index-section-content-inside">

                    <div class="index-section-content-bar">

                        <div id="index-section-back" class="index-section-content-bar-back"><div>Go Back</div></div><!--

                     --><div class="index-section-content-bar-tools"><div><?=$section['name'];?></div></div>

                    </div>

            <!--<?
                $items = DB::query('SELECT * FROM items WHERE section = %i ORDER BY id ASC', $section['id']);
                foreach($items as $item) {
                $thumbnail = 'images/'.$categories[$item['category'] - 1]['slug'].'/'.$item['slug'].'.png';
                if(file_exists($thumbnail)){
                    $thumbnail = ' style="background-image:url(\''.$GLOBALS['base_url'].$thumbnail.'\')"';
                } else {
                    $thumbnail = '';
                }
                $name_parts = explode(' ', $item['name']);
                $name = '';
                foreach($name_parts as $name_part) {
                    $name .= '<div><span>'.$name_part.'</span></div>';
                }
                ?>--><div class="index-section-content-item"><a href="<?=$GLOBALS['base_url'].$section['uri'].$item['slug'];?>/" class="<? if($section['use_ajax']) echo 'load-page ' ;?>index-section-content-item-link"<? if(!$section['use_ajax']) echo ' target="_blank"' ;?>><div class="index-section-content-item-link-inside">

                    <div class="index-section-content-item-title"><?=$name;?></div>

                    <div class="index-section-content-item-thumbnail"<?=$thumbnail;?>></div>

                </div></a></div><!--

                <?
                }
                ?>-->

            </div></div></div>

        <?
        }
        ?>

    </div>

</div>
</div>
<script>
    var loaded = false;
    var sections_container = $('.index-sections');
    var content_container = $('.index-sections-content');
    var sections = [$('#section-1'), $('#section-2'), $('#section-3')];
    var sections_content = [$('#section-1-content'), $('#section-2-content'), $('#section-3-content')];
    var current_section_content = null;
    var hash = window.location.hash;
    if(hash) {
        slug = hash.substr(1);
        fade_out(sections_container);
        var trigger = $('.index-section[data-slug="' + slug + '"]');
        var content_id = trigger.data('id');
        $.each(sections_content, function(i, section_content) {
            if(i == content_id - 1)
                current_section_content = section_content;
            else
                fade_out(section_content);
        });
        current_section_content.addClass('loaded').removeClass('loading');
        fade_in(current_section_content.find('.index-section-content'));
    }
    $(document).on('page_load', function() {
        setTimeout(function() {
            sections[0].animate({
                marginTop: -240,
                marginLeft: -240
            }, 1000);
            sections[2].animate({
                marginTop: 240,
                marginLeft: 240
            }, 1000);
            setTimeout(function() {
                content_container.addClass('loaded-sections');
                sections_container.addClass('loaded-sections');
                sections_container.addClass('loaded');
                loaded = true;
            }, 1000);
        }, 250);
    });
    $(document).on('click', '.index-section', function() {
        if(!loaded)
            return;
        fade_out(sections_container);
        var trigger = $(this);
        var content_id = trigger.data('id');
        $.each(sections_content, function(i, section_content) {
            if(i == content_id - 1)
                current_section_content = section_content;
            else
                fade_out(section_content);
        });
        current_section_content.addClass('loading');
        setTimeout(function() {
            current_section_content.addClass('loaded').removeClass('loading');
            fade_in(current_section_content.find('.index-section-content'));
        }, 500);
    });
    $(document).on('click', '#index-section-back', function() {
        fade_out(current_section_content.find('.index-section-content'))
        setTimeout(function() {
            current_section_content.removeClass('loaded').addClass('loading');
            fade_in(sections_container);
            setTimeout(function() {
                current_section_content.removeClass('loading');
                $.each(sections_content, function(i, section_content) {
                    if(section_content != current_section_content)
                        fade_in(section_content);
                });
            }, 500);
        }, 500);
    });
</script>