<div class="container-welcome log-out-modal-welcome">
    <div class="modal-welcome"></div>

    <div class="pd_login-modal">
        <div class="_z4lmgp">
            <div class="modal_content-welcome">
                <span class="close-x">X</span>
                <div class="img-left">
                    <img src="{{ URL::asset('assets/img/welcome.png') }}">
                </div>
                {{-- Loggin or Register --}}
                @livewire('loggin.steps')

            </div>
        </div>
    </div>
</div>


@push('scripts')
    <script type="text/javascript">
        $( ".butnSignModl, .butnLoginModl" ).click(function() {
            window.livewire.emit('eventLoggin') 
        });    
        
        function clickEvent(first, last) {
            if (first.value.length) {
                document.getElementById(last).focus();
            }
        }
    </script>
@endpush