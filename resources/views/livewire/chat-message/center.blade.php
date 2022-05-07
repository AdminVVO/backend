<div class="medio_msg_user">
    <div class="content1 ht-p100 bkg_celest30 br10 pn-r">
        <div class="pn-a inset0 mxh100v inset0">
            <div class="_z4lmgp">
                <div class="pn-r fx fx-fd-c wh-p100 ht-p100">
                    <div>
                        <div class="header_msg_lateral_restime">
                            <div class="pd32-35 bd_b_celest2">
                                @if ( count( $content ) != 0 )
                                    <div class="fx fx-ai-c fx-jc-sb gp13">
                                        <div class="mxw-p100 dc">
                                            <div class="btn_circle_flecha click_behind_mesg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="8.378" height="14.652" viewBox="0 0 8.378 14.652">
                                                    <path id="Icon_ionic-ios-arrow-down" data-name="Icon ionic-ios-arrow-down" d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(19.624 -6.188) rotate(90)" fill="#00b5dd"/>
                                                </svg>
                                            </div>

                                            <div class="wh-p100 fx fx-fd-c">
                                                <h2 class="h2-guests _txtcapit">{{ $content['name'] }}</h2>
                                                <span
                                                    class="_txtec16 text_tm1"
                                                    @if ( !$content['offline'] )
                                                        style="color: #ff4545"
                                                    @endif
                                                >{{ $content['offline'] ? 'Response time: 15min' : 'Offline User' }}</span>
                                            </div>
                                        </div>
                                        @if ( $content['onChat'] !== '' )
                                            <div class="mxw-p100 fx fx-ai-c fx-jc-sb flex-0 gp22">
                                                <div class="fx fx-ai-c gp9">
                                                    <button type="button" class="btnOptionsChats {{ $content['unread'] ? 'active' : '' }}" wire:click="unreadRoom">

                                                        <div class="btn_circle_7d">
                                                            <i class="far fa-comment-alt _i-griswhite22"></i>
                                                        </div>
                                                    </button>

                                                    <button type="button" class="btnOptionsChats {{ $content['favority'] ? 'active' : '' }}" wire:click="favorityRoom">
                                                        <div class="btn_circle_7d">
                                                            <i class="far fa-star _i-griswhite22"></i>
                                                        </div>
                                                    </button>

                                                    <button type="button" class="btnOptionsChats {{ $content['archive'] ? 'active' : '' }}" wire:click="archiveRoom">
                                                        <div class="btn_circle_7d">
                                                            <i class="far fa-folder _i-griswhite22"></i>
                                                        </div>
                                                    </button>
                                                </div>

                                                <button class="btn-celest click_hide_details_mesg">Hide details</button>
                                            </div>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="c-msg-chat ow-a ht-p100 mr-t23 mr-l35 mr-r35">
                        <div class="c-msg-chat-pd pd-r15 pd16-0">
                            <div class="fx fx-fd-c gp18 scroll_chat">
                                @if ( count( $content ) != 0 )
                                    @foreach ( $content['messages'] as $key => $element )
                                        @if ( ShowDateMessageChats( $content['messages'], $key ) === true || $element['type'] === 'OnListing' )
                                            <div>
                                                <div class="_txtec16 txt-center mr-b6">{{ Carbon\Carbon::parse( $element['created_at'], 'UTC')->locale('en')->isoFormat('ll') }}</div>
                                                @if ( $element['type'] === 'OnListing' )
                                                    <div class="txt-center">
                                                        <div class="bkg_c pd9-12 br5 dis_ib">
                                                            <span class="_txtb16">{{ $element['message'] }}</span>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        @endif

                                        @if ( $element['type'] !== 'OnListing' )
                                            @if ( $element['user_id'] === Auth::id() )
                                                <div class="box_msg_user_send">
                                                    <div class="fx fx-jc-e">
                                                        <div class="mxw487 fx fx-jc-e">
                                                            <div class="bx_chat fx fx-fd-c gp6 bkg_c br10 pd19-24">
                                                                <div class="fx fx-ai-c fx-jc-sb gp16">
                                                                    <span class="_txteh _txtcapit mr0">{{ $element['user']['name'] }}</span>
                                                                    <span class="_txtec14">{{ Carbon\Carbon::parse( $element['created_at'], 'UTC')->locale('en')->isoFormat('h:mm A') }}</span>
                                                                </div>
                                                                @if ( $element['type'] === 'message' )
                                                                    <p class="_txtec">{{ $element['message'] }}</p>
                                                                @endif
                                                                
                                                                @if ( $element['type'] === 'OnUrl' )
                                                                    <p class="_txtec">Enter the link to make your reservation. <a href="{{ route('ReservCreate', ['reservation' => $element['message']] ) }}" target="_blank">Click Me!</a></p>
                                                                @endif

                                                                @if ( $element['type'] === 'OnImagen' )
                                                                    <span class="">
                                                                        <a href="{{ URL::asset('storage/imagenChat/' . $element['chats_id'] . '/' . $element['message'] ) }}" target="_blank">
                                                                            <img src="{{ URL::asset('storage/imagenChat/' . $element['chats_id'] . '/' . $element['message'] ) }}" alt="" width="380" height="240">
                                                                        </a>
                                                                    </span>
                                                                @endif

                                                                @if ( $element['type'] === 'OnFile' )
                                                                    <span class="">
                                                                        <a href="javascript: void(0)" style="text-align: center" wire:click="downloadFile('{{ $element['message'] }}')">
                                                                            <img src="{{ URL::asset('assets/img/document.png') }}" alt="" width="120" height="100" style="display:block;margin:auto;">
                                                                            <p class="_txtec">{{ ucfirst(strtolower( $element['original_name'] )) }}</p>
                                                                        </a>
                                                                    </span>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="box_msg_user">
                                                    <div class="fx gp8">
                                                        <div class="fx gp6">
                                                            <span class="_pf-msg mr0">
                                                                <img src="{{ URL::asset('assets/img/avatar/' . '/' . $element['user']['avatar']) }}" alt="">
                                                            </span>
                                                            <div class="bx_chat fx fx-fd-c gp6 bkg_white br10 bd_celest2 pd19-24 mxw487 mnw200">
                                                                <div class="fx fx-ai-c fx-jc-sb gp16">
                                                                    <span class="_txteh _txtcapit mr0">{{ $element['user']['name'] }}</span>
                                                                    <span class="_txtec14">{{ Carbon\Carbon::parse( $element['created_at'], 'UTC')->locale('en')->isoFormat('h:mm A') }}</span>
                                                                </div>

                                                                @if ( $element['type'] === 'message' )
                                                                    <p class="_txtec">{{ $element['message'] }}</p>
                                                                @endif

                                                                @if ( $element['type'] === 'OnUrl' )
                                                                    <p class="_txtec">Enter the link to make your reservation. Link: <a href="{{ $element['message'] }}">Click Me!</a></p>
                                                                @endif

                                                                @if ( $element['type'] === 'OnImagen' )
                                                                    <span class="">
                                                                        <a href="{{ URL::asset('storage/imagenChat/' . $element['chats_id'] . '/' . $element['message'] ) }}" target="_blank">
                                                                            <img src="{{ URL::asset('storage/imagenChat/' . $element['chats_id'] . '/' . $element['message'] ) }}" alt="" width="380" height="240">
                                                                        </a>
                                                                    </span>
                                                                @endif

                                                                @if ( $element['type'] === 'OnFile' )
                                                                    <span class="">
                                                                        <a href="javascript: void(0)" style="text-align: center" wire:click="downloadFile('{{ $element['message'] }}')">
                                                                            <img src="{{ URL::asset('assets/img/document.png') }}" alt="" width="120" height="100" style="display:block;margin:auto;">
                                                                            <p class="_txtec">{{ ucfirst(strtolower( $element['original_name'] )) }}</p>
                                                                        </a>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                            
                                                        @if ( $element['report'] )
                                                            <p>
                                                                <span class="btn_circle_7d">
                                                                    <i class="far fa-flag _i-griswhite18" style="color: #dd0013"></i>
                                                                </span>
                                                            </p>
                                                        @else
                                                            <span 
                                                                class="btn_circle_7d {{ $element['report'] ? '' : 'click_msg_icon_denuncia' }}" 
                                                                wire:click="$emitTo('chat-message.report-message', 'eventReportMessage', {{ $element['id_message_chats'] }})"
                                                            >
                                                                <i class="far fa-flag _i-griswhite18"></i>
                                                            </span>
                                                        @endif

                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                    @livewire('chat-message.input-message', [ 'onListing' => $mountListing ? $listing : '' ])

                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')

    <script>
        window.addEventListener('eventTyping', event => {
            const inputTyping = document.querySelector('#input-typing');
            const userTyping = document.querySelector('#user-typing');
            var content = event.detail;

            inputTyping.addEventListener('keyup', (event) => {
                const typing = Echo.private(`chat.${content.userId}`);
                
                setTimeout(() => {
                    typing.whisper('typing', {
                        typing: true,
                        chatID: content.chatId,
                        userID: content.userId
                    });
                }, 500);
            })
        })

        Echo.private(`chat.{!! Auth::id() !!}`).listenForWhisper('typing', (e) => {
            if ( e.typing ) {
                $(`#user-message-${e.chatID}`).css("display", "none");
                $(`#user-typing-${e.chatID}`).css("display", "block");
            }else{
                $(`#user-message-${e.chatID}`).css("display", "block");
                $(`#user-typing-${e.chatID}`).css("display", "none");
            }

            setTimeout(() => {
                $(`#user-message-${e.chatID}`).css("display", "block");
                $(`#user-typing-${e.chatID}`).css("display", "none");
            }, 1500)
        });
    </script>

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        var pusher = new Pusher('d5cfb3ba4deba9ec0333', {
          cluster: 'us2'
        });
        var channel = pusher.subscribe('liveChatMessage-channel');
        channel.bind('liveChatMessage-event', function(data) {
            if ( data.onReceived == {!! Auth::id() !!} ) {
                window.livewire.emitTo('chat-message.center', 'reloadRoom', data.onChat );
                window.livewire.emitTo('chat-message.left', 'reloadRooms');
            }
        });

        Livewire.hook('message.processed', (message, component) => {
            $(".c-msg-chat").scrollTop( $(".scroll_chat").height() );

            $(".click_behind_mesg").on("click", function() {
                $(this).parents(".section_messages_user").removeClass("is-message-open");
                $(this).parents("body").removeClass("is-message-open-nav");
            });
                
            $(".click_msg_icon_denuncia").on("click", function(){
                $('html, body').animate({
                    scrollTop: $("body").offset().top
                }, 0);
                $(".page-category").css({'overflow': 'hidden'});
                $(".container_user_f_p").show();
            });
        })
    </script>
@endpush