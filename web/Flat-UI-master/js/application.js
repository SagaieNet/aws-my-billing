// Some general UI pack related JS

$(function () {
    // Custom selects
    $("select").dropkick();
});

$(document).ready(function() {
    // Todo list
    $(".todo li").click(function() {
        $(this).toggleClass("todo-done");
    });

    // Init tooltips
    $("[data-toggle=tooltip]").tooltip("show");

    // Init tags input
    $("#tagsinput").tagsInput();

    // Init jQuery UI slider
    (function() {
        var $polaroid = $('#polaroids .img-polaroid'),
            $day1 = $polaroid.find('.day1'),
            $week1 = $polaroid.find('.week1'),
            $week2 = $polaroid.find('.week2'),
            $month1 = $polaroid.find('.month1'),
            $month6 = $polaroid.find('.month6');

        $polaroid.hide();

        $("#slider").slider({
            min: 1,
            max: 5,
            value: 2,
            orientation: "horizontal",
            range: "min",
            change: function(e, ui) {
                $polaroid.hide();

                switch (ui.value) {
                    case 1:
                        $day1.show();

                        break;
                    case 2:
                        $week1.show();

                        break;
                    case 3:
                        $week2.show();

                        break;
                    case 4:
                        $month1.show();

                        break;
                    case 5:
                        $month6.show();

                        break;
                    default:
                        break;
                }
            }
        });
    }());

    // JS input/textarea placeholder
    $("input, textarea").placeholder();

    // Make pagination demo work
    $(".pagination a").click(function() {
        if (!$(this).parent().hasClass("previous") && !$(this).parent().hasClass("next")) {
            $(this).parent().siblings("li").removeClass("active");
            $(this).parent().addClass("active");
        }
    });

    $(".btn-group a").click(function() {
        $(this).siblings().removeClass("active");
        $(this).addClass("active");
    });

    // Disable link click not scroll top
    $("a[href='#']").click(function() {
        return false
    });

});

