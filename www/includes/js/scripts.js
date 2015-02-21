function show_dialog(_class, title, comment) {
    var dialog = $('#dialog');
    dialog.attr('class', '');
    dialog.addClass(_class);
    $('#dialog-title').html(title);
    $('#dialog-comment').html('<p>' + comment +'</p>');
    var wrapper = $('#dialog-wrapper');
    fade_in(dialog);
    setTimeout(function() {
        reveal_container(wrapper);
    }, 500);
}
function toggle_loading_indicator(state) {
    var indicator = $('#loading-indicator');
    var wrapper = $('#loading-indicator-wrapper');
    if(state) {
        fade_in(indicator);
        setTimeout(function() {
            reveal_container(wrapper);
        }, 500);
    } else {
        hide_container(wrapper);
        setTimeout(function() {
            fade_out(indicator);
        }, 500);
    }
}
function reveal_container(container) {
    container.css('display', 'block');
    container.css('opacity', '0');
    var height = container.height();
    container.css('height', '1px');
    container.animate({
        opacity: 1,
        height: height + "px"
    }, 500, function() {
        container.attr('style', 'opacity:1;display:block;');
    });
}
function hide_container(container) {
    container.animate({
        opacity: 0,
        height: 0 + "px"
    }, 500, function() {
        container.attr('style', 'opacity:0;display:none;');
    });
}
function fade_in(container) {
    container.css('opacity', 0);
    container.css('display', 'block');
    container.animate({
        opacity: 1
    }, 500);
}
function fade_out(container) {
    container.animate({
        opacity: 0
    }, 500, function() {
        container.attr('style', 'opacity:0;display:none;');
    });
}