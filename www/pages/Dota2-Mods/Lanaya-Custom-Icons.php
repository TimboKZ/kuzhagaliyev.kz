<?php
$custom_icons_version = 'v0.1';
$custom_icons_download = 'http://www.mediafire.com/download/b4p935o7n5dvy43/Lanaya_Custom_Icons_0.1.zip';
?><div id="<?=$GLOBALS['page']['slug']?>" class="page-inside <?=$GLOBALS['category']['slug']?>">

    <div class="content-default">

        <div class="<?=$GLOBALS['category']['slug']?>-title">Lanaya Custom Icons <span><?=$custom_icons_version;?></span></div>

        <div class="<?=$GLOBALS['category']['slug']?>-icons-preview"></div>

        <div class="<?=$GLOBALS['category']['slug']?>-buttons">

            <a href="<?=$GLOBALS['base_url']?>#<?=$GLOBALS['category']['slug'];?>" class="load-page"><span class="icon-left"></span> Back to <?=$GLOBALS['category']['name'];?></a><!--

         --><a href="<?=$custom_icons_download;?>" target="_blank"><span class="icon-download"></span> Download <?=$custom_icons_version;?></a>

        </div>

        <div class="<?=$GLOBALS['category']['slug']?>-info">

            <h1>Description</h1><!--

         --><div><p>A set of customised icons for Templar Assassin's spells.</p></div>

            <h1>Installation</h1><!--

         --><div><ol>
                    <li>Open your Steam Library, right-click on Dota 2, choose "Properties" and add <code>-override_vpk</code> to the launch options.</li>
                    <li>Drag & drop <code>resource</code> folder from the archive into <code>Your_Steam_Directory/SteamApps/common/dota 2 beta/dota</code>.</code></li>
                    <li>Enjoy Lanaya Custom Icons <?=$custom_icons_version;?>.</li>
                </ol></div>

        </div>

    </div>

</div>
<style>

</style>