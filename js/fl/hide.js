$(document).ready(function () {
    $('.icon-view').click(function () {

        $(this).toggleClass('hide')
            .parents('.card').toggleClass('expanded')
            .parent().toggleClass('col-sm-12');
    })
});
