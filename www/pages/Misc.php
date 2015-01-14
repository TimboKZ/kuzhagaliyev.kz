<?php

$text = '';

if($GLOBALS['page']['slug'] == 'About') {
    ob_start();
    ?>
    <p>First of all, my name is Timur Kuzhagaliyev <ins>(a.k.a. Timbo_KZ)</ins> and, surprisingly, I'm the founder and the developer of kuzhagaliyev.kz (by the way, thanks for stopping by!).</p>

    <p>The primary purpose of this website is to serve as a storage for my projects, most of which can also be found on <a href="https://github.com/TimboKZ" target="_blank">GitHub</a>. I wouldn't say kuzhagaliyev.kz contains only specific types of content but rather anything I happen to work on, whether it is a music visualiser written in Java or a set of photos I took the other day, so please don't expect to find a lot of projects focused around a single topic.</p>

    <p>As you've probably noticed this website relies heavily on JavaScript and especially AJAX, so if your browser is out of date you might experience several issues while browsing the site. On the other hand, I'm trying my best to maintain browser compatibility at a reasonable level (without sacrificing any of the cool features) so hopefully your browsing experience will be smooth as silk. If you're interested in the code behind kuzhagaliyev.kz, whether it is front-end or back-end, you can find the source code on GitHub. More about it on the <a href="http://kuzhagaliyev.kz/Development/" class="load-page">development page</a>.</p>
    <?
    $text = ob_get_clean();
}

if($GLOBALS['page']['slug'] == 'Development') {
    ob_start();
    ?>
    <p>You can find the source code of kuzhagaliyev.kz on <a href="https://github.com/TimboKZ/kuzhagaliyev.kz" target="_blank">its GitHub page</a>. This website utilises PHP as a server side language and jQuery for AJAX dynamic page updates. I personally use Less as a CSS preprocessor but you can find both Less source and compiled CSS on GitHub.</p>

    <p>I chose to display the source code on GitHub not only for version control features but also to give people an opportunity to see how the web site works, therefor I'll be glad to answer any questions but please, if it's a general question about web design that doesn't require my specific opinion, try asking <a href="https://www.google.co.uk/" target="_blank">Google</a> first. I'll also be glad to hear your suggestions, complaints about poor code quality and reports of security flaws.</p>
    <?
    $text = ob_get_clean();
}

$GLOBALS['article'] = array(
    'text' => $text,
);

include 'templates/article.php';