// DATE RANGE PIKER - 2 CALENDARIOS
/*$(function(){
    var MultiDate = {
      datepickerDiv: "._dateStatusSnooze",
      startDateField: "#start_date",
      endDateField: "#end_date",
      periodField: "#period",
      clearButton: "#clear",
      startDate: null,
      endDate: null,
      clearEndWhenSelectingStart: true,
      disableOutsideDates: false,
      numberOfMonths: 3,
      
      // Set either the start or the end date
      _changeDate: function(){
        var date = this.value;
        var startDate = MultiDate.startDate;
        var endDate = MultiDate.endDate;
        var dateTime = moment(MultiDate._convertStringToJSDate(date));
        if(startDate && dateTime.isSame(startDate)) {
          MultiDate._clearStartDate();
        } else if (endDate && dateTime.isSame(endDate)) {
          MultiDate._clearEndDate();
        } else if(startDate && dateTime.isBefore(startDate)) {
          MultiDate.setStartDate(date);
        } else if (endDate && dateTime.isAfter(endDate)) {
          MultiDate.setEndDate(date);
        } else if (startDate && !endDate) {
          MultiDate.setEndDate(date);
        } else {
          MultiDate.setStartDate(date);
        }
      },
      
      _updateStartDateEvent: function(e) {
        var date = MultiDate._convertStringToJSDate(e.target.value, true);
        if(date !== MultiDate.startDate) {
          MultiDate.startDate = date;
          MultiDate.$datepicker.datepicker("refresh");
          MultiDate.moveToFirstDay();
        }
      },
      
      _updateEndDateEvent: function(e) {
        var date = MultiDate._convertStringToJSDate(e.target.value, true);
        if(date !== MultiDate.endDate) {
          MultiDate.endDate = date;
          MultiDate.$datepicker.datepicker("refresh");
        }
      },
      
      // Clear the end date
      _clearEndDate: function(){
        MultiDate.endDate = null;
        MultiDate.$endDate.val("");
        if(MultiDate.disableOutsideDates) {
          MultiDate.$datepicker.datepicker("option", "maxDate", "");
        }
      },
      
      _clearStartDate: function(){
        MultiDate.startDate = null;
        MultiDate.$startDate.val("");
        if(MultiDate.disableOutsideDates) {
          MultiDate.$datepicker.datepicker("option", "minDate", "");
        }
      },
      
      _convertStringToJSDate: function(date, asMoment) {
        asMoment = asMoment || false;
        if(date) {
          var split = date.split("/");
          var day = split[0];
          var month = split[1] - 1;
          var year = split[2];
          if(asMoment) {
            return moment(new Date(year, month, day));
          } else {
            return new Date(year, month, day);
          }
        } else {
          return null;
        }
      },
      
      _shouldDateBeSelected: function(date){
        var startDate = MultiDate.startDate;
        var endDate = MultiDate.endDate;
        if(!moment.isMoment(date)) {
          date = moment(date);
        }
        if(startDate && endDate && date.isSameOrAfter(startDate) && date.isSameOrBefore(endDate)) {
          return true;
        } else if (startDate && date.isSame(startDate) || endDate && date.isSame(endDate)) {
          return true;
        } else {
          return false;
        }
      },
      
      _disableInputs: function(){
        MultiDate.$startDate[0].disabled = true;
        MultiDate.$endDate[0].disabled = true;
      },
      
      _enableInputs: function(){
        MultiDate.$startDate[0].disabled = false;
        MultiDate.$endDate[0].disabled = false;
      },
      
      _choosePeriodEvent: function(e) {
        var value = e.target.value;
        if(value === "custom") {
          MultiDate._enableInputs();
          MultiDate.$startDate.focus();
        } else {
          MultiDate._disableInputs();
          if(value === "last7") {
            MultiDate.startDate = moment().subtract(7, "days").set("hour", 0).set("minute", 0).set("second", 0).set("millisecond", 0);
            MultiDate.endDate = moment().subtract(1, "days").set("hour", 0).set("minute", 0).set("second", 0).set("millisecond", 0);
          } else if(value === "last30") {
            MultiDate.startDate = moment().subtract(30, "days").set("hour", 0).set("minute", 0).set("second", 0).set("millisecond", 0);
            MultiDate.endDate = moment().subtract(1, "days").set("hour", 0).set("minute", 0).set("second", 0).set("millisecond", 0);
          }
        }
        MultiDate.sendDatesToInputs();
        MultiDate.moveToFirstDay();
        MultiDate.$datepicker.datepicker("refresh");
      },
      
      _clearDatesEvent: function(e){
        e.preventDefault();
        MultiDate._clearStartDate();
        MultiDate._clearEndDate();
        MultiDate.$period.val("custom");
        MultiDate._enableInputs();
        MultiDate.$datepicker.datepicker("refresh");
      },
      
      sendDatesToInputs: function(){
        if(MultiDate.startDate) {
          MultiDate.$startDate.val(MultiDate.startDate.format("DD/MM/YYYY"));
        }
        if(MultiDate.endDate) {
          MultiDate.$endDate.val(MultiDate.endDate.format("DD/MM/YYYY"));
        }
      },
      
      setStartDate: function(value, keepEndDate){
        keepEndDate = keepEndDate || false;
        if(!keepEndDate && MultiDate.clearEndWhenSelectingStart) {
          MultiDate._clearEndDate();
        }
        MultiDate.$period[0].value = "custom";
        MultiDate.startDate = moment(MultiDate._convertStringToJSDate(value));
        MultiDate.sendDatesToInputs();
        if(MultiDate.disableOutsideDates) {
          MultiDate.$datepicker.datepicker("option", "minDate", value);
        }
      },
      
      setEndDate: function(value){
        MultiDate.endDate = moment(MultiDate._convertStringToJSDate(value));
        MultiDate.sendDatesToInputs();
        if(MultiDate.disableOutsideDates) {
          MultiDate.$datepicker.datepicker("option", "maxDate", value);
        }
      },
      
      moveToFirstDay: function(){
        if(MultiDate.startDate) {
          MultiDate.$datepicker.datepicker("setDate", MultiDate.startDate.toDate());
        }
      },
      
      getNumberOfCalendars() {
        var windowWidth = window.innerWidth;
        var numberOfCalendars = 1;
        if(windowWidth >= 800) {
          numberOfCalendars = 2;
        }
        if(windowWidth >= 1100) {
          numberOfCalendars = 3;
        }
        return numberOfCalendars;
      },
      
      resizeCalendar() {
        var currentNumber = MultiDate.numberOfMonths;
        var newNumber = MultiDate.getNumberOfCalendars();
        if(currentNumber !== newNumber) {
          MultiDate.$datepicker.datepicker('option', "numberOfMonths", newNumber);
          MultiDate.numberOfMonths = newNumber;
          MultiDate.moveToFirstDay();
        }
      },
      
      init: function(){
        var numberOfMonths = MultiDate.getNumberOfCalendars();
        MultiDate.datePickerSettings = {
          beforeShowDay: function(date){
            var className = MultiDate._shouldDateBeSelected(date) ? "active" : "";
            return [true, className];
          },
          numberOfMonths: numberOfMonths,
          dateFormat: "dd/mm/yy"
        };
        // Setting elements
        MultiDate.$startDate = $(MultiDate.startDateField);
        MultiDate.$endDate = $(MultiDate.endDateField);
        MultiDate.$period = $(MultiDate.periodField);
        MultiDate.$clear = $(MultiDate.clearButton);
        // Binding Datepicker
        MultiDate.$datepicker = $(MultiDate.datepickerDiv).datepicker(MultiDate.datePickerSettings);
        MultiDate.$datepicker.on("change", MultiDate._changeDate);
        // Binding inputs
        MultiDate.$startDate.on("blur", MultiDate._updateStartDateEvent);
        MultiDate.$endDate.on("blur", MultiDate._updateEndDateEvent);
        // Binding period selector
        MultiDate.$period.on("change", MultiDate._choosePeriodEvent);
        MultiDate.$clear.on("click", MultiDate._clearDatesEvent);
      }
    }
    
    MultiDate.init();
    window.MultiDate = MultiDate;
    window.addEventListener("resize", MultiDate.resizeCalendar);
}); */

$(function() {
    // listing status snooze
    // $("._dateStatusSnooze").daterangepicker({
    //     autoUpdateInput: false,
    // });

    // interna
    $(".show_date_add").daterangepicker({
      autoUpdateInput: false
    });

    $('.show_date_add').on('apply.daterangepicker', function(ev, picker) {
      $('.show_date_add').val(picker.startDate.format('MMM DD') + " - " + picker.endDate.format('MMM DD'));
    });

    $('.show_date_add').on('cancel.daterangepicker', function(ev, picker) {
        $('.show_date_add').val('');
    });

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