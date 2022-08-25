<div 
class="" 
wire:ignore 
x-data
x-init="
    pickerLogin = new easepick.create({
        element: '#easypickLogin',
        css: [
            'https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.0/dist/index.css',
            'assets/css/easepick-vvo.css',
            'assets/css/estilos.css'
        ],
        format: 'MM/DD/YYYY',
        calendars: 1,
        {{-- date: '{{ Carbon::now()->subYears(18)->format('d-m-Y') }}', --}}
        grid: 1,
        zIndex: 10,
        autoApply: true,
        tooltip: true,
        LockPlugin:{
            maxDate: '{{ Carbon::now()->subYears(18)->format('m-d-Y') }}',
        },
        AmpPlugin: {
            dropdown: {
                months: true,
                years: true,
                minYear: {{ Carbon::now()->subYears(90)->format('Y') }},
                maxYear: '{{ Carbon::now()->subYears(18)->format('Y') }}'
            },
            darkMode: false
        },
        plugins: ['LockPlugin', 'AmpPlugin'],
        setup(pickerLogin) {
            pickerLogin.on('select', (e) => {
                Livewire.emit('selectDateLogin', pickerLogin.getDate() )
          });
        },
    });
"
>
    <label for="easypickLogin" class="_lbl-date">
        <input type="text" name="calendar" placeholder="mm/dd/yyyy"  maxlength="10" class="input_real placeholdercolor" id="easypickLogin" style="margin: 0 !important;">
        <i class="far fa-calendar flex-centrado" style="top: 0; bottom: 0; display: flex;"></i>
    </label>
</div>
<style>
.placeholdercolor::placeholder {
  color: #C5C5C5;
}
</style>
@push('alpine_scripts')
    @once
    <script src="https://cdn.jsdelivr.net/npm/@easepick/datetime@1.2.0/dist/index.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@easepick/core@1.2.0/dist/index.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@easepick/base-plugin@1.2.0/dist/index.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@easepick/lock-plugin@1.2.0/dist/index.umd.min.js"></script>
    @endonce
@endpush
