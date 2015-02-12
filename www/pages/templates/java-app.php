<div id="<?=$GLOBALS['page']['slug']?>" class="page-inside <?=$GLOBALS['category']['slug']?>">
    <div class="content">
        <div class="content-header">

            <a href="<?=$GLOBALS['base_url']?>#<?=$GLOBALS['section']['slug'];?>" class="load-page">Back to <?=$GLOBALS['section']['name'];?></a><!--

         --><div class="title"><?=$GLOBALS['page']['name']?></div>

        </div>

        <?php if($GLOBALS['data']['preview'] != null) { ?>
        <div class="content-preview">
            <iframe id="ytplayer" type="text/html" width="889" height="505"
                    src="https://www.youtube.com/embed/<?=$GLOBALS['data']['preview']?>"
                    frameborder="0" allowfullscreen></iframe>
        </div>
        <?php } ?>

        <div class="content-info">
        <?php if($GLOBALS['data']['github'] != null) { ?>
        <a class="github" href="<?=$GLOBALS['data']['github'];?>" target="_blank">GitHub</a>
        <?php } ?>
        <?php if($GLOBALS['data']['description'] != null) { ?>
        <div class="description""><?=$GLOBALS['data']['description'];?></div>
        <?php } ?>
        </div>
        <div style="clear:left;"
    </div>
</div>