$(document).ready(function () {
    $('.icon-view').click(function () {
        $(this).toggleClass('hide').parents('.card').toggleClass('expanded');

    })
});
