<div
    x-data=""
    wire:ignore
    x-init="
        new Pikaday({});

        var startDate,
        endDate,
        updateStartDate = function() {
            startPicker.setStartRange(startDate);
            endPicker.setStartRange(startDate);
            endPicker.setMinDate(startDate);
        },
        updateEndDate = function() {
            startPicker.setEndRange(endDate);
            startPicker.setMaxDate(endDate);
            endPicker.setEndRange(endDate);
        },

        startPicker = new Pikaday({
            field: document.getElementById('start'),
            format: 'Y-MM-DD',
            minDate: new Date(),
            theme: 'triangle-theme',
            showDaysInNextAndPreviousMonths: true,
            enableSelectionDaysInNextAndPreviousMonths: true,
            onSelect: function() {
                startDate = this.getDate();
                updateStartDate();
                window.livewire.emit('updateCheckIn', this.getMoment().format('Y-MM-DD') );
            }
        }),
        endPicker = new Pikaday({
            field: document.getElementById('end'),
            format: 'Y-MM-DD',
            minDate: new Date(),
            theme: 'triangle-theme',
            showDaysInNextAndPreviousMonths: true,
            enableSelectionDaysInNextAndPreviousMonths: true,
            onSelect: function() {
                endDate = this.getDate();
                updateEndDate();
                window.livewire.emit('updateCheckOut', this.getMoment().format('Y-MM-DD') );
            }
        }),
        _startDate = startPicker.getDate(),
        _endDate = endPicker.getDate();

        if (_startDate) {
            startDate = _startDate;
            updateStartDate();
        }

        if (_endDate) {
            endDate = _endDate;
            updateEndDate();
        }
    "
    class="content_celest_form"
>
        <div class="block">
            <div class="txt-check-in">Check in:</div>
            <input type="text" class="_numcard _txtcapit" id="start" placeholder="Example: 1994-12-31" 
                {{ $attributes }}
            >
        </div>

        <div class="block">
            <div class="txt-check-in">Check out:</div>
            <input type="text" class="_numcard _txtcapit" id="end" placeholder="Example: 1994-12-31" 
                {{ $attributes }}
            >
        </div>
</div>
@push('style')
    @once
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
        <style type="text/css">
            .triangle-theme .pika-label:after {
                content:" \25be";
            }
        </style>
    @endonce
@endpush

@push('alpine_scripts')
    @once
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    @endonce
@endpush