<?php
include_once 'includes/php/settings.php';
?>
<!--

The MIT License (MIT)

Copyright (c) 2015 Timur Kuzhagaliyev (TimboKZ)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

Source code: https://github.com/TimboKZ/kuzhagaliyev.kz

-->
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" type="text/css" id="main-stylesheet" href="<?=$GLOBALS['base_url'];?>includes/css/stylesheet.css?<?=$GLOBALS['revision'];?>" />
    <link rel="icon" href="<?=$GLOBALS['base_url'];?>images/favicon.png?<?=$GLOBALS['revision'];?>">
    <meta property="og:image" content="<?=$GLOBALS['base_url'];?>images/favicon.png?<?=$GLOBALS['revision'];?>"/>
    <script src="<?=$GLOBALS['base_url'];?>includes/js/jquery-2.1.3.min.js"></script>
    <script src="<?=$GLOBALS['base_url'];?>includes/js/scripts.js?<?=$GLOBALS['revision'];?>"></script>
<!--    <script src="--><?//=$GLOBALS['base_url'];?><!--includes/js/freewall.js"></script>-->
    <script>

        window.onpopstate = function(event) {
            //alert("location: " + document.location + ", state: " + JSON.stringify(event.state));
            if(event.state != null)
                load_page(event.state.url);
        };


        var loading = true;
        var loadingUrl = null;
        var currentUrl = null;
        var previousUrl = null;
        function load_page(url) {
            if(loading)
                return;
            loading = true;
            var urlParts = url.split('#');
            url = urlParts[0];
            var urlHash = '#' + urlParts[1];
            var currentPage = $(".current-page");
            var loadingPage = $(".loading-page");
            $.ajax('<?=$GLOBALS['base_url'];?>pageparser.php', {
                data: { url: url },
                dataType: 'json',
                beforeSend: function() {
                    fade_out(currentPage);
                    setTimeout(function() {
                        toggle_loading_indicator(true);
                    }, 500);
                }
            }).success(function(data) {
                if(data.result == 0) {
                    history.pushState({url:data.url}, data.title, data.url);
                    if(urlParts.length == 2) {
                        window.location.hash = urlHash;
                    }
                    document.title = data.title;
                    loadingPage.html(data.html);
                    setTimeout(function() {
                        setTimeout(function() {
                            currentPage.addClass('ui-hidden');
                            if(data.stylesheet != null)
                                $('<link rel="stylesheet" type="text/css" id="additional-stylesheet" href="' +  data.stylesheet + '?<?=$GLOBALS['revision'];?>" />').insertAfter('#main-stylesheet');
                            else
                                $('#additional-stylesheet').remove();
                            setTimeout(function() {
                                fade_in(loadingPage);
                                loadingPage.removeClass('ui-hidden').removeClass('loading-page').addClass('current-page');
                                currentPage.removeClass('current-page').addClass('loading-page').html('');
                                setTimeout(function() {
                                    $(document).trigger('page_load');
                                }, 500);
                            }, 20);
                        }, 500)
                    }, 500);

                } else {
                    setTimeout(function() {
                        fade_in(currentPage);
                        if(data.result == 400) show_dialog('error', 'Error <strong>#' +  data.result + '</strong>', 'The URL requested by the client does not match the standard pattern.');
                        else if(data.result == 404) show_dialog('warning', 'Error <strong>#' +  data.result + '</strong>', 'Requested page does not exist on the server.');
                        else show_dialog('error', 'Error <strong>#' +  data.result + '</strong>', 'An error occurred while loading the requested page.');
                    }, 500);
                }

            }).error(function() {
                show_dialog('error', 'Error', 'An error occurred while loading the requested page.');
                setTimeout(function() {
                    currentPage.removeClass('zoomOutCurrent');
                }, 1000);
                console.log('An error occurred while loading the page.');
            }).always(function() {
                toggle_loading_indicator(false);
            });
            loading = false;
        }
    </script>
    <title>kuzhagaliyev.kz</title>

</head>

<body>
<div id="body-inside">

    <script>

        var body = $('body');
        var category = false;
        var currentCategory = null;
        var loadingIndicator = $('#loading-indicator');
        $(document).ready(function() {
            $('#no-js').remove();
            setTimeout(function() {
                loading = false;
                load_page(window.location.href);
            }, 100);
        });
        body.on('click', 'a.load-page', function(e) {
            e.preventDefault();
            load_page($(this).attr('href'));
        });
    </script>

    <? include 'pages/dialog.php'; ?>

    <? include 'pages/loading.php'; ?>

    <div id="page-container">

        <div class="current-page page">
        </div>

        <div class="loading-page page ui-hidden">
        </div>

        <div id="no-js">
            <div id="no-js-inside">
                <div id="no-js-title">This website requires JavaScript</div>
                <div id="no-js-comment" class="ui-foreground-content">
                    <p>Please enable JavaScript or install a newer browser.</p>
                </div>
            </div>
        </div>

    </div>

</div>
</body>

</html>
