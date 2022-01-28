// DATE RANGE PIKER - 2 CALENDARIOS
$(function() {
    $('._date-check').daterangepicker({
        autoUpdateInput: false,
        // singleDatePicker: true, // Mostrar solo un calendario
        locale: {
            cancelLabel: 'Clear dates <span class="_svg-asm"><img src="assets/img/icons/down-right.svg" alt=""></span>',
            applyLabel: 'Save'
        }
    });

    $('._date-check').on('apply.daterangepicker', function(ev, picker) {
        $('._date-check').val(picker.startDate.format('MMM DD'));
        $('._date-check-out').val(picker.endDate.format('MMM DD'));
    });

    $('._date-check').on('cancel.daterangepicker', function(ev, picker) {
        $('._date-check').val('');
        $('._date-check-out').val('');
    });

    // $(".daterangepicker").append("<div class='pd_c-modal'><div class='_z4lmgp'><div class='modal_content-c'></div></div></div>");
    // // MOVER DIV
    // $(".ranges").appendTo(".modal_content-c");
    // $(".drp-calendar").appendTo(".modal_content-c");
    // $(".drp-buttons").appendTo(".pd_c-modal");

    // $("._btn-check_in").click(function() {
    //     $('.page-category').css({'overflow': 'hidden'});

    //     $('html,body').animate({
    //         scrollTop: $("body").offset().top
    //     }, 10);
    // });

    // $(".check_out").click(function() {
    //     $('.page-category').css({'overflow': 'hidden'});

    //     $('html,body').animate({
    //         scrollTop: $("body").offset().top
    //     }, 10);
    // });
});