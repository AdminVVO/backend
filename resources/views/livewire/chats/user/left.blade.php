<div class="left_msg_user pd-r26">
    <div class="bkg_white ht-p100 pn-r">
        <div class="pn-a pd-t10 inset0 mxh100v inset0">
            <div class="_z4lmgp">
                <div class="pn-r fx fx-fd-c wh-p100 ht-p100">
                    <div class="_2dcmym fx fx-ai-c fx-jc-sb">
                        <h2 class="h2-guests _txtcapit">messages</h2>

                        <div class="cr-p btn_circle_243-3">
                            <div class="fx">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" class="icon_svg_hamburg">
                                    <g transform="translate(-3973 -89)">
                                        <rect width="20" height="4" rx="2" transform="translate(3973 89)" fill="#333"/>
                                        <rect width="16" height="4" rx="2" transform="translate(3975 96)" fill="#333"/>
                                        <rect width="12" height="4" rx="2" transform="translate(3977 103)" fill="#333"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="ow-a ht-p100 mr-t23">

                        @if ( count( $chats ) == 0 )
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
                            <div class="content_messages_rc">
                                @foreach ( $chats as $key => $element )
                                    <a href="javascript:void(0)" wire:click="$emit('loadChat', '{{$element->id_chats}}' )" wire:click="refreshClass()">
                                    {{-- <a href="javascript:void(0)" wire:click="loadChatMessage('{{ $element->id_chats }}')"> --}}
                                        <div class="bx_msg_received active_msg_received">
                                            <span class="_pf-msg mr0">
                                                <img src="{{ $element->transmitter->id_user === Auth::id() ? URL::asset('assets/img/avatar/') .'/'. $element->receiver->avatar : URL::asset('assets/img/avatar/') .'/'. $element->transmitter->avatar }}" alt="">
                                            </span>

                                            <div class="fx fx-fd-c wh-p100">
                                                <div class="fx fx-ai-c fx-jc-sb gp8">
                                                    <span class="_txteh16 _txtcapit">{{ $element->transmitter->id_user === Auth::id() ? App\Models\User::Name( $element->receiver->id_user ) : App\Models\User::Name( $element->transmitter->id_user ) }}</span>
                                                    <span class="_txtec14 _txtcapit">{{ str_replace('after', 'Ago', Carbon\Carbon::now()->locale('en')->diffForHumans( $element->message[0]->created_at ) ) }}</span>
                                                    {{-- <span class="_txtec14 _txtcapit">{{ count( $element->message ) != 0 ? $element->message[0]->created_at : 'Empty' }}</span> --}}
                                                </div>
                                                <p class="_txtec14 lh20 text_tm1">{{ $element->message[0]->message }}</p>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            @if ( $firstChat != '' )
                // $('#classDetails').removeClass('is-main-info-open')
                // Livewire.emit('loadChat', '{{ $firstChat }}')
            @endif
            
            Livewire.on('refreshClassChats', postId => {
                console.log('A post was added with the id of: ');
            })
        })
    </script>
@endpush