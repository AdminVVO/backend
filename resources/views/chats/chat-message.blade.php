@extends('layouts.App')

@section('title') Message User @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/messages-user.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/modals-user.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/modals-admin.css') }}" rel="stylesheet"/>


@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')

    <section class="entero section_messages_user show_msg_text">
        <div class="container-medio">
            <div class="fx ht100v pd-130-0-60 ow-h">

                <!-- Content Left Chat -->
                @livewire('chat-message.left')

                <!-- Content Center Chat -->
                @livewire('chat-message.center', ['listing' => isset( $listing ) ? $listing : ''])
                
            </div>
        </div>
    </section>

    @section('modals')
        <div class="container_admin-host container_user_f_p">
            <div class="modal-anhost"></div>

            <div class="pd_anhost-modal">
                <div class="_z4lmgp">
                    <div class="modal_content-anhost">
                        <div class="close" id="closeReportModl">
                            <span>X</span>
                        </div>

                        <div class="modal_block">
                            @livewire('chat-message.report-message')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

@endsection

@section('script')

    <script src="{{ URL::asset('assets/js/modals-min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $(".page-category").addClass('messages-admin');

            const $hamburIconMsg = $(".contentIconHambur3");
            $(document).mouseup(e => {
                if (!$hamburIconMsg.is(e.target) && $hamburIconMsg.has(e.target).length === 0) {
                    $hamburIconMsg.removeClass('active');
                }
            });
            $(".showMdlsHamburMsg").on("click", function() {
                let toggleClass = $(this).parent($hamburIconMsg).hasClass('active') ? true : false;
                $hamburIconMsg.removeClass("active");
            
                if (!toggleClass) {
                    $(this).parent($hamburIconMsg).toggleClass("active");
                }
            });
            $(".popup ul").on("click", function() {
                $(this).siblings("ul.active").removeClass("active");
                $(this).addClass("active");

                $hamburIconMsg.removeClass("active");
            });

            $(".bx_msg_received, .bx_msg").on("click", function() {
                $(this).parents("body").addClass("is-message-open-nav");
                $(this).parents(".section_messages_user").addClass("is-message-open");
            });


        });

        function hideShowJacks(val) {
            val == 'Y' ? $("._txta-modls").show() : $("._txta-modls").hide();
        }

        window.addEventListener('eventCloseReport', event => {
            $('.close span').click();
        })
    </script>

@endsection