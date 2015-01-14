<div id="<?=$GLOBALS['page']['slug']?>" class="page-inside <?=$GLOBALS['category']['slug']?>">

    <div class="content-default">

        <div class="<?=$GLOBALS['category']['slug']?>-title"><?=$GLOBALS['dota2-icons']['name'];?> <span><?=$GLOBALS['dota2-icons']['version'];?></span></div>

        <div class="<?=$GLOBALS['category']['slug']?>-icons-preview"></div>

        <div class="<?=$GLOBALS['category']['slug']?>-buttons">

            <a href="<?=$GLOBALS['base_url']?>#<?=$GLOBALS['category']['slug'];?>" class="load-page"><span class="icon-left"></span> Back to <?=$GLOBALS['category']['name'];?></a><!--

         --><?php if($GLOBALS['dota2-icons']['download'] != null) { ?><a href="<?=$GLOBALS['dota2-icons']['download'];?>" target="_blank"><span class="icon-download"></span> Download <?=$GLOBALS['dota2-icons']['version'];?></a><? } ?>

        </div>

        <div class="<?=$GLOBALS['category']['slug']?>-info">

            <h1>Description</h1><!--

         --><div><p><?=$GLOBALS['dota2-icons']['description'];?></p></div>

            <h1>Installation</h1><!--

         --><div><ol>
                    <li>Open your Steam Library, right-click on Dota 2, choose "Properties" and add <code>-override_vpk</code> to the launch options.</li>
                    <li>Drag & drop <code>resource</code> folder from the archive into <code>Your_Steam_Directory/SteamApps/common/dota 2 beta/dota</code>.</code></li>
                    <li>Enjoy <?=$GLOBALS['dota2-icons']['name'];?> <?=$GLOBALS['dota2-icons']['version'];?>.</li>
                </ol></div>

        </div>

    </div>

</div>