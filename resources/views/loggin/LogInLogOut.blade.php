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
        let bodyHtmlPg = document.querySelector(".page-category");
        let containerLogin = document.querySelector(".container-welcome");
        let wrapperWelcome = document.querySelector(".content_hidden-welcome");
        let contentWelcome = document.querySelector(".content_welcome");
        let modalLogin = document.querySelector(".modal-welcome");
        let btnLogin = document.getElementById("butnLogin");
        let btnSign = document.getElementById("butnSign");
        let btn_X = document.querySelector(".close-x");

        btnLogin.onclick = (() => {
            containerLogin.style.display = "flex";
            contentWelcome.style.display = "grid";
            wrapperWelcome.style.display = "grid";
            bodyHtmlPg.style.overflow = "hidden";
            window.livewire.emit('eventLoggin') 
        })

        btnSign.onclick = (() => {
            containerLogin.style.display = "flex";
            contentWelcome.style.display = "grid";
            wrapperWelcome.style.display = "grid";
            bodyHtmlPg.style.overflow = "hidden";
            window.livewire.emit('eventLoggin') 
        })

        btn_X.onclick = (() => {
            containerLogin.style.display = "none";
            wrapperWelcome.style.display = "block";
            contentWelcome.style.display = "block";
            bodyHtmlPg.style.overflow = "auto";
        })

        modalLogin.onclick = (() => {
            containerLogin.style.display = "none";
            wrapperWelcome.style.display = "block";
            contentWelcome.style.display = "block";
            bodyHtmlPg.style.overflow = "auto";
        })
    
        function clickEvent(first, last) {
            if (first.value.length) {
                document.getElementById(last).focus();
            }
        }

    </script>

@endpush