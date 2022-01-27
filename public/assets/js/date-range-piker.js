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

    // $('._date-check').click(function(){
    //     $('.modal_calendary').css({'display': 'block'});
    //     $('.page-category').css({'overflow': 'hidden'});
    // });

    // $('.drp-buttons .cancelBtn').click(function(){
    //     $('.modal_calendary').css({'display': 'none'});
    //     $('.page-category').css({'overflow': 'auto'});
    // });
});