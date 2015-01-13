<?php
$potm_custom_icons_version = 'v0.1';
$potm_custom_icons_download = 'http://www.mediafire.com/download/545g3122gm7bgrw/PotM_Custom_Icons_0.1.zip';
?><div id="<?=$GLOBALS['page']['slug']?>" class="page-inside">

    <div class="content-default">

        <div id="<?=$GLOBALS['page']['slug']?>-title" class="quicksand-regular">Princess of the Moon Custom Icons <span class="quicksand-light"><?=$potm_custom_icons_version;?></span></div>

        <div id="<?=$GLOBALS['page']['slug']?>-icons-preview"></div>

        <div id="<?=$GLOBALS['page']['slug']?>-buttons">

            <a href="<?=$GLOBALS['base_url']?>#<?=$GLOBALS['category']['slug'];?>" class="load-page quicksand-regular"><span class="icon-left"></span> Back to <?=$GLOBALS['category']['name'];?></a><!--

         --><a href="<?=$potm_custom_icons_download;?>" target="_blank" class="quicksand-regular"><span class="icon-download"></span> Download <?=$potm_custom_icons_version;?></a>

        </div>

        <div id="<?=$GLOBALS['page']['slug']?>-info">

            <h1 class="quicksand-regular">Description</h1><!--

         --><div><p class="quicksand-regular">A set of customised icons for Mirana's spells.</p></div>

            <h1 class="quicksand-regular">Installation</h1><!--

         --><div><ol class="quicksand-regular">
                <li>Open your Steam Library, right-click on Dota 2, choose "Properties" and add <code>-override_vpk</code> to the launch options.</li>
                <li>Drag & drop <code>resource</code> folder from the archive into <code>Your_Steam_Directory/SteamApps/common/dota 2 beta/dota</code>.</code></li>
                <li>Enjoy Princess of the Moon Custom Icons <?=$potm_custom_icons_version;?>.</li>
            </ol></div>

        </div>

    </div>

</div>
<style>
    #<?=$GLOBALS['page']['slug']?> {
        background-image:url('<?=$GLOBALS['base_url']?>images/<?=$GLOBALS['category']['slug']?>/<?=$GLOBALS['page']['slug']?>/background.png');
        background-attachment:fixed;
        background-repeat:no-repeat;
        background-size:cover;
    }
    #<?=$GLOBALS['page']['slug']?>-title {
        text-align:center;
        font-size:36px;
        padding:20px;
        color:#fff;
    }
    #<?=$GLOBALS['page']['slug']?>-icons-preview {
        background-image:url('<?=$GLOBALS['base_url']?>images/<?=$GLOBALS['category']['slug']?>/<?=$GLOBALS['page']['slug']?>/icons-preview.png');
        background-repeat:no-repeat;
        background-size:cover;
        margin:20px auto;
        height:168px;
        width:600px;
    }
    #<?=$GLOBALS['page']['slug']?>-buttons {
        text-align:center;
        padding:10px;
        color:#fff;
    }
    #<?=$GLOBALS['page']['slug']?>-buttons a {
        background-color:rgba(0, 0, 0, 0.4);
        text-decoration:none;
        display:inline-block;
        font-size:24px;
        padding:20px;
        margin:10px;
        color:#fff;
    }
    #<?=$GLOBALS['page']['slug']?>-info {
        padding:20px;
    }
    #<?=$GLOBALS['page']['slug']?>-info h1 {
        margin:10px 0px 0px 0px;
        padding:0px 2% 0px 0px;
        display:inline-block;
        vertical-align:top;
        font-weight:normal;
        text-align:right;
        color:#fff;
        width:24%;
    }
    #<?=$GLOBALS['page']['slug']?>-info div {
        background-color:rgba(0, 0, 0, 0.4);
        margin:0px 0px 20px 0px;
        display:inline-block;
        vertical-align:top;
        padding:0px;
        color:#fff;
        width:74%;
    }
    #<?=$GLOBALS['page']['slug']?>-info p {
        line-height:20px;
        padding:20px;
        margin:0px;
    }
    #<?=$GLOBALS['page']['slug']?>-info ol {
        padding:10px;
        margin:0px;
    }
    #<?=$GLOBALS['page']['slug']?>-info li {
        list-style-position:inside;
        line-height:20px;
        padding:10px;
        margin:0px;
    }
    #<?=$GLOBALS['page']['slug']?>-info li code {
        background-color:rgba(0, 0, 0, 0.4);
        padding:2px 4px;
    }
</style>