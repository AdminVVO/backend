<div
    x-data=""
    wire:ignore
    x-init="
        new Pikaday({
            field: $refs.input,
            'format': 'Y-MM-DD',
            firstDay: 1,
            theme: 'triangle-theme',
            minDate: new Date(),
            showDaysInNextAndPreviousMonths: true,
            enableSelectionDaysInNextAndPreviousMonths: true,
            onSelect: function() {
                @this.set('{{ $attributes->get('model') }}', this.getMoment().format('Y-MM-DD'));
            }
        });"
        class="sm:w-27rem sm:w-full">
    <div class="relative mt-2">
        <input
            x-ref="input"
            type="text"
            class="_numcard _txtcapit" placeholder="Example: 1999-12-31"
            {{ $attributes }}
        />
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