<a href="#">
    <div class="content_icon-leng" id="btnLeng">
        <img src="{{ URL::asset('assets/img/logo-leng.png') }}" alt="">
    </div>
</a>
<div class="container_leng_region patlbrzi container_user-host">
    <div class="paz999i0b modal_content-user"></div>

    <div class="fxpaijcpmi">
        <div class="_z4lmgp">
            <div class="fxfbwhmhbrzi">
                <div class="fx fx-jc-e">
                    <button type="button" class="cwhfcbbpfx closeUserModal">X</button>
                </div>

                @livewire('language.language', ['routeRedirect' => Route::current()->getName() ])

            </div>
        </div>
    </div>
</div>