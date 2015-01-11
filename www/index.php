<?php
include_once 'includes/php/settings.php';
?>

<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" type="text/css" href="<?=$GLOBALS['base_url'];?>includes/css/stylesheet.css" />
    <script src="<?=$GLOBALS['base_url'];?>includes/js/jquery-2.1.3.min.js"></script>
    <script>
        function show_dialog(_class, title, comment) {
            $('body').prepend('<div id="dialog" class="' + _class + '"><div id="dialog-box"><div id="dialog-title"> ' + title + ' </div><div id="dialog-comment">' + comment + '</div></div></div>');
            setTimeout(function() {
                $('#dialog').addClass('loaded');
            }, 100);
        }

        var loading = true;
        var loadingUrl = null;
        var currentUrl = null;
        var previousUrl = null;
        function load_page(url) {
            if(loading)
                return;
            //noinspection JSUnusedAssignment
            loading = true;
            var currentPage = $(".current-page");
            var loadingPage = $(".loading-page");
            $.ajax('<?=$GLOBALS['base_url'];?>' + url, {
                beforeSend: function() {
                    currentPage.addClass('zoomOutCurrent');
                    currentPage.prepend('<div id="loading-indicator"><div id="loading-indicator-inside"><div id="loading-indicator-box"></div></div></div>');
                    setTimeout(function() {
                        $('#loading-indicator').addClass('loaded');
                    }, 100);
                }
            }).success(function(data) {
                loadingPage.html(data);
                setTimeout(function() {
                    currentPage.removeClass('zoomOutCurrent').addClass('flipOut');
                    loadingPage.removeClass('hidden');
                    setTimeout(function() {
                        loadingPage.removeClass('zoomOutLoading').addClass('flipIn');
                        currentPage.removeClass('flipOut').removeClass('current-page').addClass('loading-page').addClass('hidden');
                        setTimeout(function() {
                            loadingPage.removeClass('flipIn').removeClass('loading-page').addClass('current-page');
                        }, 500);
                    }, 500);
                }, 500);
            }).error(function() {
                show_dialog('error', 'Error', 'An error occurred while loading the requested page.');
                setTimeout(function() {
                    currentPage.removeClass('zoomOutCurrent');
                }, 1000);
            }).always(function() {
                setTimeout(function() {
                    $('#loading-indicator').remove();
                }, 1000);
            });
            loading = false;
        }
    </script>
    <title></title>

</head>

<body>

    <script>
        var body = $('body');
        var category = false;
        var currentCategory = null;
        $(document).ready(function() {
            $('#no-js').remove();
            setTimeout(function() {
                $('#loading').addClass('intermediate');
            }, 200);
            setTimeout(function() {
                $('#loading').removeClass('intermediate').addClass('final');
            }, 700);
            setTimeout(function() {
                loading = false;
                load_page('pages/index.php');
            }, 1200);
        });
        body.on('click', 'a.load-page', function(e) {
            e.preventDefault();
            load_page($(this).data('url'));
        });
        body.on('click', '#dialog', function(e) {
            $('#dialog').removeClass('loaded');
            setTimeout(function() {
                $('#dialog').remove();
            }, 500);
        });
        body.on('click', '.index-category.clickable', function(e) {
            currentCategory = $(this);
            currentCategory.addClass('expanding');
            currentCategory.removeClass('clickable');
            category = true;
            document.location.hash = currentCategory.data('slug');
            setTimeout(function() {
                currentCategory.removeClass('expanding');
                currentCategory.addClass('expanded');
            }, 500);
        });
        body.on('click', 'a.index-category-items-back', function(e) {
            e.preventDefault();
            if(category && currentCategory != null) {
                currentCategory.removeClass('expanded');
                currentCategory.addClass('expanding');
                currentCategory.addClass('clickable');
                document.location.hash = '';
                setTimeout(function() {
                    currentCategory.removeClass('expanding');
                    currentCategory = null;
                    category = false;
                }, 500);
            }
        });
        $(document).keyup(function(e) {
            if(e.keyCode == 27) {
                if(category && currentCategory != null) {
                    setTimeout(function() {
                        currentCategory.removeClass('expanded');
                        currentCategory.addClass('expanding');
                        currentCategory.addClass('clickable');
                        setTimeout(function() {
                            currentCategory.removeClass('expanding');
                            currentCategory = null;
                            category = false;
                        }, 500);
                    }, 500);
                }
            }
        });
    </script>

    <div id="page-container">

        <div class="current-page page">
            <? include 'pages/loading.php'; ?>
        </div>

        <div class="loading-page page hidden">

        </div>

        <div id="no-js">
            <div id="no-js-inside">
                <div id="no-js-icon"><span class="icon-frown"></span></div>
                <div id="no-js-title">Your browser doesn't support JavaScript.</div>
                <div id="no-js-comment">Please enable JavaScript or install a newer browser.</div>
            </div>
        </div>

    </div>

</body>

</html>
