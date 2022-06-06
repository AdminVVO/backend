<a href="#">
    <div class="content_icon-leng" id="btnLeng">
        <img src="{{ URL::asset('assets/img/logo-leng.png') }}" alt="">
    </div>
</a>

<div class="container-leng">
    <div class="modal-lang"></div>

    <div class="pd_leng">
        <div class="_z4lmgp">
            <div class="modal_content">
                <span class="x">X</span>

                @livewire('language.language')

            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
         $('#btnLeng').click(function() {
            $('.container-leng').show();
            $('.page-category').css({'overflow': 'hidden'});
        })

        $('.x').click(function() {
            $('.container-leng').hide();
            $('.page-category').css({'overflow': 'auto'});
        })
    </script>
@endpush