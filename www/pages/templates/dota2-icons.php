<?
$current_version = $GLOBALS['dota2-icons']['versions'][0];
$current_version['preview'] = 'images/'.$GLOBALS['category']['slug'].'/'.$GLOBALS['page']['slug'].'/icons-preview-'.$current_version['version'].'.png';
if(file_exists($current_version['preview'])) {
    list($current_version_width, $current_version_height) = getimagesize($current_version['preview']);
    $current_version['dimensions'] = 'width:'.$current_version_width * 0.908.'px !important;height:'.$current_version_height * 0.908.'px !important;';
    $current_version['preview'] = ' style="background-image:url(\''.$GLOBALS['base_url'].$current_version['preview'].'\') !important;'.$current_version['dimensions'].'"';
} else {
    $current_version['preview'] = '';
    $current_version['dimensions'] = '';
}
$version_count = COUNT($GLOBALS['dota2-icons']['versions']);
?>
<?php if(COUNT($GLOBALS['dota2-icons']['versions']) > 1) { ?>
<script>
    $(document).ready(function() {
        var body = $('body');
        var pageContainer = $('#<?=$GLOBALS['page']['slug']?>');
        var selectorTitle = $('#version-selector-title');
        var selectorOptions = $('#version-selector-options');
        var iconsPreview = $('#icons-preview');
        var downloadButton = $('#download-button');
        body.on('click', '#version-selector-title', function() {
            selectorOptions.toggleClass('expanded');
            if(selectorOptions.hasClass('expanded'))
                selectorTitle.html('v' + pageContainer.data('version') + ' <span class="icon-up-open"></span>');
            else
                selectorTitle.html('v' + pageContainer.data('version') + ' <span class="icon-down-open"></span>');
        });
        selectorOptions.on('click', '.version-selector-option', function() {
            var option = $(this);
            pageContainer.data('version', option.data('version'));
            downloadButton.html('<span class="icon-download"></span> Download v' + option.data('version'));
            downloadButton.attr('href', option.data('link'))
            if(option.data('preview') != '')
                iconsPreview.attr('style', "background-image:url('" + option.data('preview') + "') !important;<?=$current_version['dimensions'];?>");
            else
                iconsPreview.attr('style', "");
            selectorOptions.removeClass('expanded');
            selectorTitle.html('v' + option.data('version') + ' <span class="icon-down-open"></span>');
        });
    });
</script>
<? }
$background = 'images/'.$GLOBALS['category']['slug'].'/'.$GLOBALS['page']['slug'].'/background.png';
if(file_exists($background)) $background = ' style="background-image:url(\''.$GLOBALS['base_url'].$background.'\')"';
else $background = '';
?>
<div id="<?=$GLOBALS['page']['slug']?>" class="page-inside <?=$GLOBALS['category']['slug']?>" data-version="<?=$current_version['version'];?>"<?=$background;?>>

    <div class="content-default">

        <div class="<?=$GLOBALS['category']['slug']?>-title">
            <?=$GLOBALS['dota2-icons']['name'];?>
            <?php if(COUNT($GLOBALS['dota2-icons']['versions']) > 0) { ?>
            <div id="version-selector" class="<?=$GLOBALS['category']['slug']?>-version-selector<? if($version_count > 1) echo ' version-dropdown'; ?>">

                <div id="version-selector-title" class="<?=$GLOBALS['category']['slug']?>-version-selector-title">v<?=$current_version['version'];?><? if($version_count > 1) echo ' <span class="icon-down-open"></span>'; ?></div>

                <?php if($version_count > 1) { ?>
                <div id="version-selector-options" class="<?=$GLOBALS['category']['slug']?>-version-selector-options"><?
                foreach($GLOBALS['dota2-icons']['versions'] as $version) {
                    $preview = 'images/'.$GLOBALS['category']['slug'].'/'.$GLOBALS['page']['slug'].'/icons-preview-'.$version['version'].'.png';
                    if(file_exists($preview)) $preview = $GLOBALS['base_url'].$preview;
                    else $preview = '';
                    echo '<div class="'.$GLOBALS['category']['slug'].'-version-selector-option version-selector-option" data-version="'.$version['version'].'" data-link="'.$version['link'].'" data-preview="'.$preview.'">v'.$version['version'].' <span class="icon-right"></span></div>';
                }
                ?></div>
                <? } ?>

            </div>
            <? } ?>
        </div>
        <div id="icons-preview" class="<?=$GLOBALS['category']['slug']?>-icons-preview"<?=$current_version['preview'];?>></div>

        <div class="<?=$GLOBALS['category']['slug']?>-buttons">

            <a href="<?=$GLOBALS['base_url']?>#<?=$GLOBALS['section']['slug'];?>" class="load-page"><span class="icon-left"></span> Back to <?=$GLOBALS['section']['name'];?></a><!--

         --><?php if($version_count > 0) { ?><a id="download-button" href="<?=$current_version['link'];?>" target="_blank"><span class="icon-download"></span> Download v<?=$current_version['version'];?></a><? } ?>

        </div>

        <div class="<?=$GLOBALS['category']['slug']?>-info">

            <h1>Description</h1><!--

         --><div><p><?=$GLOBALS['dota2-icons']['description'];?></p></div>

            <h1>Installation</h1><!--

         --><div><ol>
                    <li>Open your Steam Library, right-click on Dota 2, choose "Properties" and add <code>-override_vpk</code> to the launch options.</li>
                    <li>Drag & drop <code>resource</code> folder from the archive into <code>Your_Steam_Directory/SteamApps/common/dota 2 beta/dota</code>.</code></li>
                    <li>Enjoy <?=$GLOBALS['dota2-icons']['name'];?>.</li>
                </ol></div>

        </div>

    </div>

</div>