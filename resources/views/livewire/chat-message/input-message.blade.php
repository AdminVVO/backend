<div class="type-a-m pd11-35-24">
    <form wire:submit.prevent="sendMessageInput">
        @if ( Auth::user()->rol_id !== 1)
            <div class="fx fx-ai-c gp13">
                <input type="file" id="message_input__file" style="display: none;" wire:model="imagen" accept="image/png, image/jpeg">
                <label for="message_input__file" class="div_env_img btn_circle_flecha cr-p">
                    <i class="far fa-image _i-gris35"></i>
                </label>

                <label class="wh-p100 fx bkg_white br10 sh_celest2 label_click_input pd2">
                    <input type="text" id="input-typing" class="input_msg @error('message') error_input @enderror" placeholder="Type a message" wire:model.defer="message">

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
        @else
            <div class="fx fx-ai-fe gp13">
                <div class="fx fx-ai-c gp2">
                    <div class="content_icons_type_msg pr">
                        <div class="popupMsgMore">
                            <div class="fx fx-fd-c gp8 pr">
                                <div class="fx fx-ai-c gp8">
                                    <input type="file" id="message_input__archive" style="display: none;" wire:model="file" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, text/plain, application/pdf">
                                    <label for="message_input__archive" class="moreIconMsg archive">
                                        <i class="fas fa-file-image _i-white20"></i>
                                    </label>

                                    <div class="hvIconTxt">Archive</div>
                                </div>

                                <div class="fx fx-ai-c gp8">
                                    <input type="file" id="message_input__camera" style="display: none;" wire:model="imagen" accept="image/png, image/jpeg">
                                    <label for="message_input__camera" class="moreIconMsg camera">
                                        <i class="fas fa-camera _i-white20"></i>
                                    </label>

                                    <div class="hvIconTxt">Camera</div>
                                </div>
                            </div>
                        </div>

                        <div class="btn_circle_flecha cr-p pr click_icon_msg">
                            <span class="_add-icon-gris">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                    </div>

                    <div class="content_icons_type_msg">
                        <div class="ps_popup_send_form">
                            <div class="ps_popup_send_form_cont">
                                <div class="fx fx-fd-c gp12">
                                    <div class="_txtec">Send reservation form?</div>

                                    <label class="btn-celest-min click_send_archive_msg" wire:click="createReservation">
                                        <i class="far fa-file-alt _i-white14"></i>
                                        Send
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="btn_circle_flecha cr-p click_icon_msg">
                            <i class="far fa-file-alt _i-gris35"></i>
                        </div>
                    </div>

                    <div class="content_icons_type_msg">
                        <div class="ps_abs_modal_icon_msg">
                            <div class="modal_icon_msg">
                                <div class="fx fx-fd-c gp12">
                                    <div class="_txteh">Frequent questions</div>
                                    <ul class="nv">
                                        @foreach ( $questions as $key => $element)
                                        <li class="_txtec option_ic_msg" wire:click="selectQuestions('{{ $element }}')" value="{{ $key }}">{{ $element }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="btn_circle_flecha cr-p click_icon_msg">
                            <i class="far fa-comment-dots _i-gris35"></i>
                        </div>
                    </div>
                </div>

                <div class="input-type-msg">

                    <input type="text" id="input-typing" class="input_msg @error('message') error_input @enderror" placeholder="Type a message" wire:model.defer="message">

                    <div class="div_env_ch fx pd-r-l16">
                        <button class="click_envio_chat">
                            <i class="far fa-arrow-alt-circle-right _i-celest24"></i>
                        </button>
                    </div>
                </div>
            </div>
        @endif
    </form>
</div>