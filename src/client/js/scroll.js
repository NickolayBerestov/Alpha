function slide() {
    h = document.documentElement.clientHeight
    $(".first-screen, .screen-about-company, .news").css('height', h);
};
$(window).resize(slide);
$(document).ready(slide);


$(document).bind('mousewheel DOMMouseScroll', function (event) {
    scroll(event);
});

var num = 1;
var scrolling = false;

function scroll(event) {
    event.preventDefault();
    if (!scrolling) {
        scrolling = true;
        if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
            num--;
            num = num < 1 ? 1 : num;
        } else {
            num++;
            num = num > 3 ? 3 : num;
        }

        $('html, body').animate({
            scrollTop: $(".num" + num).offset().top
        }, 500, "linear", function () {
            scrolling = false;
        });
    }
}