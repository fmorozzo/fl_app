/*$(document).ready(function () {
    $('.icon-view').click(function () {

        $(this).toggleClass('hide')
            .parents('.card').toggleClass('expanded')
            .parent().toggleClass('col-sm-12');
    })
});
*/

$(document).ready(function () {
    $('.icon-view').click(function () {

        var divCol = $(this).toggleClass('hide')
            .parents('.card').toggleClass('expanded')
            .parent();

        if (divCol.hasClass('col-sm-6')) {
            divCol.removeClass(function (index, className) {
                return (className.match(/(^|\s)col-\S+/g) || []).join(' ');
            });
            divCol.attr('class', 'col-12 col-sm-12 col-lg-12');
        } else {
            divCol.removeClass(function (index, className) {
                return (className.match(/(^|\s)col-\S+/g) || []).join(' ');
            });
            divCol.attr('class', 'col-12 col-sm-6 col-lg-3');
        }
    })
});
