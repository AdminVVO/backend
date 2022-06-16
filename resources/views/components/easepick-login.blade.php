<div 
class="" 
wire:ignore 
x-data
x-init="
    pickerLogin = new easepick.create({
        element: '#easypickLogin',
        css: [
            'https://cdn.jsdelivr.net/npm/@easepick/core@1.2.0/dist/index.css',
        ],
        format: 'DD MM YYYY',
        calendars: 1,
        {{-- date: '{{ Carbon::now()->subYears(18)->format('d-m-Y') }}', --}}
        grid: 1,
        zIndex: 10,
        autoApply: true,
        tooltip: true,
        plugins: ['AmpPlugin'],
        AmpPlugin: {
          dropdown: {
            months: true,
            years: true,
            maxYear: '{{ Carbon::now()->subYears(18)->format('Y') }}',
          },
        },
        setup(pickerLogin) {
            pickerLogin.on('select', (e) => {
                Livewire.emit('selectDateLogin', pickerLogin.getDate() )
          });
        },
    });
"
>
    <input type="text" id="easypickLogin">
</div>

@push('alpine_scripts')
    @once
        <script src="https://cdn.jsdelivr.net/npm/@easepick/datetime@1.2.0/dist/index.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@easepick/core@1.2.0/dist/index.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@easepick/base-plugin@1.2.0/dist/index.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@easepick/amp-plugin@1.2.0/dist/index.umd.min.js"></script>
    @endonce
@endpush