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

    $(".daterangepicker").addClass("fixed");

    // listing-status-popup2.php
    $('._date-check_des').daterangepicker({
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear dates <span class="_svg-asm"><img src="assets/img/icons/down-right.svg" alt=""></span>',
            applyLabel: 'Save'
        }
    });

    $('._date-check_des').on('apply.daterangepicker', function(ev, picker) {
        $('._date-check_des').val(picker.startDate.format('MM/DD/YYYY'));
        $('._date-check-out').val(picker.endDate.format('MM/DD/YYYY'));
    });

    $('._date-check_des').on('cancel.daterangepicker', function(ev, picker) {
        $('._date-check_des').val('');
        $('._date-check-out').val('');
    });

    $(".daterangepicker").append("<div class='pd_c-modal'><div class='modal_content-c'></div></div>");
    // MOVER DIV
    $(".ranges").appendTo(".modal_content-c");
    $(".drp-calendar").appendTo(".modal_content-c");
    $(".drp-buttons").appendTo(".pd_c-modal");

    // $(".check_out").click(function() {
    //     $('.page-category').css({'overflow': 'hidden'});

    //     $('html,body').animate({
    //         scrollTop: $("body").offset().top
    //     }, 10);
    // });
});