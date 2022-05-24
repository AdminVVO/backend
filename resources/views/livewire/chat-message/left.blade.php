<div class="left_msg_user pd-r26">
    <div class="bkg_white ht-p100 pn-r">
        <div class="pn-a pd-t10 inset0 mxh100v inset0">
            <div class="_z4lmgp">
                <div class="pn-r fx fx-fd-c wh-p100 ht-p100">
                    <div class="_2dcmym fx fx-ai-c fx-jc-sb">
                        <h2 class="h2-guests _txtcapit">messages</h2>

                        <div class="fx fx-ai-c gp8">
                            <span class="_txtec">{{ $filter }} conversations</span>

                            <div class="contentIconHambur3">
                                <button type="button" class="showMdlsHamburMsg">
                                    <div class="btn_circle_243-3">
                                        <div class="fx pn-r">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" class="icon_svg_hamburg">
                                                <g transform="translate(-3973 -89)">
                                                    <rect width="20" height="4" rx="2" transform="translate(3973 89)" fill="#333"/>
                                                    <rect width="16" height="4" rx="2" transform="translate(3975 96)" fill="#333"/>
                                                    <rect width="12" height="4" rx="2" transform="translate(3977 103)" fill="#333"/>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </button>

                                <div class="popup msgsHamburPopup dn">
                                    <ul class="active" wire:click="applyFilter('all')">
                                        <li class="_txtec">
                                        
                                            All the conversations
                                        </li>
                                    </ul>
                                    

                                    <ul>
                                        <li>
                                            <div class="fx fx-ai-b" wire:click="applyFilter('unread')">
                                                <div class="w">
                                                    <i class="far fa-comment-alt _i-gris16"></i>
                                                </div>
                                                <span class="_txtec">Unread conversations</span>
                                            </div>
                                        </li>
                                    </ul>

                                    <ul>
                                        <li>
                                            <div class="fx fx-ai-b" wire:click="applyFilter('favority')">
                                                <div class="w">
                                                    <i class="far fa-star _i-gris16"></i>
                                                </div>
                                                <span class="_txtec">Favorite conversations</span>
                                            </div>
                                        </li>
                                    </ul>

                                    <ul>
                                        <li>
                                            <div class="fx fx-ai-b" wire:click="applyFilter('archive')">
                                                <div class="w">
                                                    <i class="far fa-folder _i-gris16"></i>
                                                </div>
                                                <span class="_txtec">Archived conversations</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="search_content">
                        <div class="input-wrapper">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Look for a chat" wire:model="search">
                        </div>
                    </div>

                    <div class="ow-a ht-p100 mr-t23">
                        <div class="content_messages_rc">
                           @if ( count( $content ) == 0 )
                                <div class="msg-no-encontrado">
                                    <div class="txt-center">
                                        <div class="not-h">You have no unread messages</div>
                                        <p class="_txtec">When you book a trip or experience, messages from your host will appear here.</p>
                                        <a wire:click="changereloadsss" class="btn-bd-white">
                                            <span class="_txteh mr0">Explore Vvoutlet</span>
                                        </a>
                                    </div>
                                </div>
                           @else
                                @foreach ( $content as $element )
                                    <a href="javascript:void(0)" wire:click.defer="clickLoadRoom('{{ $element['id_chats'] }}')">
                                        @if ( Auth::user()->rol_id != 1 )
                                            <div class="bx_msg_received">
                                                @if ( $element['unread_transm'] )
                                                    <div class="_ck2ag"></div>
                                                @endif
                                                <span class="_pf-msg mr0">
                                                    <img src="{{ $element['transmitter']['id_user'] === Auth::id() ? URL::asset('assets/img/avatar/') .'/'. $element['receiver']['avatar'] : URL::asset('assets/img/avatar/') .'/'. $element['transmitter']['avatar'] }}" alt="">
                                                </span>

                                                <div class="fx fx-fd-c wh-p100">
                                                    <div class="fx fx-ai-c fx-jc-sb gp8">
                                                        <span class="_txteh16 _txtcapit">{{ $element['transmitter']['id_user'] === Auth::id() ? App\Models\User::Name( $element['receiver']['id_user'] ) : App\Models\User::Name( $element['transmitter']['id_user'] ) }}</span>
                                                        <span class="_txtec14 _txtcapit">{{ str_replace('after', 'Ago', Carbon\Carbon::now()->locale('en')->diffForHumans( $element['message'][0]['created_at'] ) ) }}</span>
                                                    </div>
                                                    
                                                    @if ( $element['message'][0]['type'] === 'message' )
                                                        <p class="_txtec14 lh20 text_tm1" id="user-message-{{ $element['id_chats'] }}">{{ $element['message'][0]['message'] }}</p>
                                                    @endif

                                                    @if ( $element['message'][0]['type'] === 'OnFile' )
                                                        <p class="_txtec14 lh20 text_tm1" id="user-message-{{ $element['id_chats'] }}"><i class="fas fa-file"></i> File Type Document</p>
                                                    @endif
                                                    
                                                    @if ( $element['message'][0]['type'] === 'OnImagen' )
                                                        <p class="_txtec14 lh20 text_tm1" id="user-message-{{ $element['id_chats'] }}"><i class="fas fa-image"></i> File Type Imagen</p>
                                                    @endif
                                                    
                                                    <p class="_txtec14 lh20 text_tm1" id="user-typing-{{ $element['id_chats'] }}" style="color: green; display: none;">Typing message...</p>
                                                </div>
                                            </div>
                                        @else
                                            <div class="bx_msg">
                                                @if ( $element['unread_receiv'] )
                                                    <div class="_ck2ag"></div>
                                                @endif
                                                <div class="fx fx-ai-c gp17">
                                                    <span class="_pf-msg mr0">
                                                        <img src="{{ $element['transmitter']['id_user'] === Auth::id() ? URL::asset('assets/img/avatar/') .'/'. $element['receiver']['avatar'] : URL::asset('assets/img/avatar/') .'/'. $element['transmitter']['avatar'] }}" alt="">
                                                    </span>
                                                    <div class="fx fx-fd-c wh-p100">
                                                        <div class="_txt-red12">Request withdrawn</div>
                                                        <div class="fx fx-ai-c fx-jc-sb gp8">
                                                            <span class="_txteh16 _txtcapit">{{ $element['transmitter']['id_user'] === Auth::id() ? App\Models\User::Name( $element['receiver']['id_user'] ) : App\Models\User::Name( $element['transmitter']['id_user'] ) }}</span>
                                                            <span class="_txtec14 _txtcapit">{{ Carbon\CarbonImmutable::parse( $element['message'][0]['created_at'] )->calendar(); }}</span>
                                                        </div>

                                                        <p class="_txtec14 lh20 text_tm1" id="user-message-{{ $element['id_chats'] }}">{{ Carbon\Carbon::parse( $element['listing']['created_at'], 'UTC')->locale('en')->isoFormat('ll') }} | {{ $element['listing']['title'] }}</p>
                                                        <p class="_txtec14 lh20 text_tm1" id="user-typing-{{ $element['id_chats'] }}" style="color: green; display: none;">Typing message...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </a>
                                @endforeach
                           @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')

@endpush