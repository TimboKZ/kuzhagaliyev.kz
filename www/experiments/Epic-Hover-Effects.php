<?php
header('Content-Type: text/html; charset=utf-8');
$GLOBALS['experiment']['title'] = 'Epic Hover Effects (with sound)';
$GLOBALS['experiment']['stylesheet'] = 'experiments/Epic-Hover-Effects.css';
include_once 'includes/php/settings.php';
include 'experiments/templates/header.php';
?>
<body>

    <div id="wrapper">

        <div id="button"><div id="inside">Hover Me<span id="comment">and brace yourself</span></div></div>
        
        <audio id="audio">
            <source src="<?=$GLOBALS['base_url'];?>files/Epic-Hover-Effects/Stephen Walking – Top of the World 2.mp3">
            <source src="<?=$GLOBALS['base_url'];?>files/Epic-Hover-Effects/Stephen Walking – Top of the World 2.ogg">
        </audio>

    </div>

    <script>
        var body = $('body');
        var button = $("#button");
        var audio = $("#audio")[0];
        button.mouseenter(function() {
            body.addClass('active');
            button.addClass('active');
            audio.play();
        });
        button.mouseleave(function() {
            body.removeClass('active');
            button.removeClass('active');
            audio.pause();
            audio.currentTime = 0;
        });

    </script>

</body>