<div class="medio_msg_user">
    <div class="content1 ht-p100 bkg_celest30 br10 pn-r">
        <div class="pn-a inset0 mxh100v inset0">
            <div class="_z4lmgp">
                <div class="pn-r fx fx-fd-c wh-p100 ht-p100">
                    <div>
                        <div class="header_msg_lateral_restime">
                            <div class="pd32-35 bd_b_celest2">
                               

                                @if ( $contentChat['name'] != '' && $contentChat['receiver_id'] != '' )
                                    <div class="fx fx-ai-c fx-jc-sb gp13">
                                        <div class="mxw-p100 dc">
                                            <div class="btn_circle_flecha click_behind_mesg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="8.378" height="14.652" viewBox="0 0 8.378 14.652">
                                                    <path id="Icon_ionic-ios-arrow-down" data-name="Icon ionic-ios-arrow-down" d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(19.624 -6.188) rotate(90)" fill="#00b5dd"/>
                                                </svg>
                                            </div>

                                            <div class="wh-p100 fx fx-fd-c">
                                                <h2 class="h2-guests _txtcapit">{{ $contentChat['name'] }}</h2>
                                                <span class="_txtec16 text_tm1">Response time: 15min</span>
                                            </div>
                                        </div>

                                        <div class="mxw-p100 fx fx-ai-c fx-jc-sb flex-0 gp22">
                                            <div class="fx fx-ai-c gp9">
                                                <div class="btn_circle_7d">
                                                    <i class="far fa-comment-alt _i-griswhite22"></i>
                                                </div>

                                                <div class="btn_circle_7d">
                                                    <i class="far fa-star _i-griswhite22"></i>
                                                </div>

                                                <div class="btn_circle_7d">
                                                    <i class="far fa-folder _i-griswhite22"></i>
                                                </div>
                                            </div>

                                            <button class="btn-celest click_hide_details_mesg">Hide details</button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        {{-- MESSAGES SELECT - MOVIL --}}
                   {{--      <div class="header_msg_lateral_gideinfo">
                            <div class="pd-bx bd_b_celest2">
                                <a href="interna.php">
                                    <div class="fx gp13">
                                        <div class="w-img">
                                            <img src="{{ URL::asset('assets/img/card/c1.jpg') }}" alt="">
                                        </div>

                                        <div class="fx fx-fd-c gp3">
                                            <h3 class="_txteh underline text_tm1">INTERNATIONAL dr/UNIVERSAL 2 Bedroom CONDO-HOTEL</h3>
                                            <p class="_txtec12 text_tm1">Inquiry · Aug 5 - 12</p>
                                        </div>
                                    </div>
                                </a>

                                <div class="bk_det_i fx-jc-sb gp10">
                                    <div class="_fbas-det fx-fw-w gp10">
                                        <a href="interna.php" class="btn-bd-white">
                                            <div class="fx fx-ai-c gp6">
                                                <i class="far fa-list-alt _i-red14"></i>

                                                <span class="_txtec12 mr0">Listing</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- MESSAGES SELECT END - MOVIL --}}

                    </div>

                    <div class="c-msg-chat ow-a ht-p100 mr-t23 mr-l35 mr-r35">
                        <div class="c-msg-chat-pd pd-r15 pd16-0">
                        {{-- MESSAGES SHOW  --}}
                            <div class="fx fx-fd-c gp18">
                                @foreach ( $contentChat['messages'] as $key => $element)
                                    @if ( ShowDateMessageChats( $contentChat['messages'], $key ) === true )
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
                                                            <p class="_txtec">{{ $element['message'] }}</p>
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
                                                            <p class="_txtec">{{ $element['message'] }}</p>
                                                        </div>
                                                    </div>

                                                    <span class="btn_circle_7d">
                                                        <i class="far fa-flag _i-griswhite18"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        {{-- MESSAGES SHOW END  --}}
                        </div>
                    </div>
                
                    <div class="type-a-m pd11-35-24">
                        {{-- MESSAGES INPUT  --}}
                        @if ( $contentChat['name'] != '' && $contentChat['receiver_id'] != '' )
                            @if ( Auth::user()->rol_id !== 1)
                                <form wire:submit.prevent="sendMessageInput">
                                    <div class="fx fx-ai-c gp13">
                                            <input type="file" id="message_input__file" style="display: none;">
                                            <label for="message_input__file" class="div_env_img btn_circle_flecha cr-p">
                                                <i class="far fa-image _i-gris35"></i>
                                            </label>

                                            <label class="wh-p100 fx bkg_white br10 sh_celest2 label_click_input pd2">
                                                <input type="text" class="input_msg @error('message') error_input @enderror" placeholder="Type a message" wire:model.defer="message">

                                                <div class="div_env_ch fx pd-r-l16">
                                                    <button type="submit" class="click_envio_chat">
                                                        <i class="far fa-arrow-alt-circle-right _i-celest24"></i>
                                                    </button>
                                                </div>
                                            </label>
                                            @error('message')
                                                <div style="display: block;" class="_txterror">
                                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                    </div>
                                </form>
                            @else
                                <form wire:submit.prevent="sendMessageInput">
                                    <div class="fx fx-ai-fe gp13">
                                        <div class="fx fx-ai-c gp2">
                                            <div class="content_icons_type_msg">
                                                <!-- <div style="width: 50px; height: 50px; background: red;"></div> -->

                                                <div class="btn_circle_flecha cr-p click_icon_msg">
                                                    <span class="_add-icon-gris">
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="content_icons_type_msg">
                                                {{-- <?php include("popup-send-form.php")?> --}}

                                                <div class="btn_circle_flecha cr-p click_icon_msg">
                                                    <i class="far fa-file-alt _i-gris35"></i>
                                                </div>
                                            </div>

                                            <div class="content_icons_type_msg">
                                                {{-- <?php include("modal-icon-msg.php")?> --}}

                                                <div class="btn_circle_flecha cr-p click_icon_msg">
                                                    <i class="far fa-comment-dots _i-gris35"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-type-msg">
                                            <textarea rows="1" placeholder="Type a message" class="w-input-textarea-msg f-input-cont js-msg-type-txt"></textarea>

                                            <div class="div_env_ch fx pd-r-l16">
                                                <button class="click_envio_chat">
                                                    <i class="far fa-arrow-alt-circle-right _i-celest24"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        @endif
                        {{-- MESSAGES INPUT END --}}
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            @if ( $contentChat['name'] != '' && $contentChat['receiver_id'] != '' )
                $('#classDetails').removeClass('is-main-info-open')
            @endif
        })
    </script>
@endpush