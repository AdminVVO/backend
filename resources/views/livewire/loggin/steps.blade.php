<div class="content_right">

    {{-- Steps Loggin --}}
    @if ( $step == 'loggin' )
        @livewire('loggin.steps.loggin')
    @endif

    {{-- Steps Code Verification --}}
    @if ( $step == 'verification' )
        @livewire('loggin.steps.verification', ['content' => $content])
    @endif

        {{-- Steps LogInOut --}}
    @if ( $step == 'loggInOut' )
        @livewire('loggin.steps.logg-in-out', ['content' => $content])
    @endif

    {{-- Steps More Options --}}
    @if ( $step == 'moreOptions' )
        @livewire('loggin.steps.more-options', ['content' => $content])
    @endif

    {{-- Steps Need Helps --}}
    @if ( $step == 'needHelps' )
        @livewire('loggin.steps.need-helps')
    @endif

    {{-- Steps Message Send --}}
    @if ( $step == 'messageSend' )
        @livewire('loggin.steps.message-send')
    @endif

</div>

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('component.initialized', (component) => {
            $('.date-v-modals').datepicker({
                dateFormat: "yy/mm/dd",
                autoclose: true,
                todayHighlight: true,
                selectOtherMonths: true,
                changeYear: true,
                yearRange: '-100:+0',
                autoclose: true,
                maxDate: new Date, 
                orientation: "button"
            });
                $(".submitLogIn").click(function(event) {
                    var content = {
                        'date': $('#initDate').val(),
                        'phone': $('#phoneLogin').val(),
                    }
                    Livewire.emit('submitLogIn', content)
                });
            })

            Livewire.hook('element.updated', (el, component) => {
                $('.date-v-modals').datepicker({
                    dateFormat: "yy/mm/dd",
                    autoclose: true,
                    todayHighlight: true,
                    selectOtherMonths: true,
                    changeYear: true,
                    yearRange: '-100:+0',
                    autoclose: true,
                    maxDate: new Date, 
                    orientation: "button"
                });
                $(".submitLogIn").click(function(event) {
                    var content = {
                        'date': $('#initDate').val(),
                        'phone': $('#phoneLogin').val(),
                    }
                    Livewire.emit('submitLogIn', content)
                });
            })
        });

        $("[sendNumber]").submit(function(event) {
            Livewire.emit('submitInputPhone', $("#phone").val())
        });
    </script>
@endpush