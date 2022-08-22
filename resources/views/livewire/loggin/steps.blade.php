<div class="content_right">
    {{-- Steps Loggin --}}
    @if ( $step == 'loggin' )
        @include('livewire.loggin.includes.loggin')
    @endif

    {{-- Steps Code Verification --}}
    @if ( $step == 'verification' )
    @include('livewire.loggin.includes.logg-in-out')
    @endif

        {{-- Steps LogInOut --}}
    {{-- @if ( $step == 'loggInOut' )
        @include('livewire.loggin.includes.logg-in-out')
    @endif --}}

    {{-- Steps More Options --}}
    @if ( $step == 'moreOptions' )
        @include('livewire.loggin.includes.more-options')
    @endif

    {{-- Steps Need Helps --}}
    @if ( $step == 'needHelps' )
        @include('livewire.loggin.includes.need-helps')
    @endif

    {{-- Steps Message Send --}}
    @if ( $step == 'messageSend' )
        @include('livewire.loggin.includes.message-send')
    @endif

</div>

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('message.processed', (message, component) => {
                $(".submitLogIn").click(function(event) {
                    Livewire.emit('submitInputPhoneLogIn', $('#phoneLogin').val())
                });
            })
        });

        $("[sendPhoneNumber]").submit(function(event) {
            Livewire.emit('submitInputPhone', $("#phone").val())
        });
    </script>
    <script wire:ignore>
        document.dispatchEvent(new Event('telDOMChanged')); 
    </script>
@endpush