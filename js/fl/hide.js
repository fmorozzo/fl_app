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


    if ($('.fl-toggle-btn').length) {
        $('.fl-toggle-btn').click(function () {
            $('.fl-toggle-btn').toggleClass('active');
            $('.fl-how-diagram .row').toggleClass('active');
        });

    };
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });
});
