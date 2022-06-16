$(document).ready(function() {
    mobiscroll.setOptions({
        locale: mobiscroll.localeEn,
        theme: 'ios',
        themeVariant: 'light'
    });

    var min = new Date(),
    max = new Date(min.getFullYear(), min.getMonth() + 6, min.getDate());
    
    // input cumpleaños
    $(".js__dateBirth").mobiscroll().datepicker({
        controls: ['calendar'],
        dateFormat: 'YYYY/MM/DD'
    });

    // places to stay
    // $(".check_in").mobiscroll().datepicker({
    //     control: ['calendar'],
    //     display: 'anchored',
    //     select: 'range',
    //     pages: 2,
    //     dateFormat: 'MMMM D',
    //     startInput: '.check_in',
    //     endInput: '.check_out',
    //     showRangeLabels: false,
    //     touchUi: true
    // });

    var calendar = $('.check_in').mobiscroll().datepicker({
        controls: ['calendar'],
        select: 'range',
        pages: 2,
        dateFormat: 'MMMM D',
        startInput: '.check_in',
        endInput: '.check_out',
        showRangeLabels: false,
        min: min,
        max: max,
        buttons: [
            {
                text: 'Clear',
                disabled: true,
                handler: function () {
                    var start = calendar.getTempVal()[0];
    
                    calendar.setVal([start, null]);
                    // calendar.close();
                }
            },
            'set'
        ],
        onTempChange: function (event, inst) {
            inst.setOptions({
                buttons: [
                    {
                        text: 'Clear',
                        disabled: !inst.getTempVal()[1],
                        handler: function () {
                            var start = calendar.getTempVal()[0];
    
                            calendar.setVal([null]);
                            // calendar.setVal([end, null]);
                            // calendar.close();
                        }
                    },
                    'set'
                ]
            });
        },
        responsive: {
            xsmall: {
                display: 'center',
                pages: 1,
            },

            custom: {
                breakpoint: 743,
            }
        }
    }).mobiscroll('getInst');
});