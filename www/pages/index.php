<?php
include '../includes/php/settings.php';
?>

<div id="index" class="page-inside">

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
                $items = DB::query('SELECT * FROM items WHERE category = %i', $result['id']);
                foreach($items as $item) {
                    $thumbnail = '';
                    if(file_exists($item['slug'].'/thumbnail.png')){
                        $thumbnail = ' style="background-image:url(\''.$GLOBALS['base_url'].$GLOBALS['pages_base'].$item['slug'].'/thumbnail.png\')"';
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