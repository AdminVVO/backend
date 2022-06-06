<aside class="content-aside_about">
    <div class="view_port">
        <img src="{{ URL::asset('assets/img/card/c1.jpg') }}" alt="">
        <span class="joind-span">Joined in {{ Carbon::parse( $contentUser['created_at'] )->year  }}</span>
    </div>
    <div class="content-img">
        <span class="_br-img-perf">
            <img src="{{ URL::asset('assets/img/avatar') .'/'. $contentUser['avatar']  }}" alt="">
        </span>
        <h2 class="h2-guests">{{ \App\Models\User::Name( $contentUser['id_user'] ) }}</h2>
    </div>
    
    <div class="block_perf">
        <div class="content-user-perf">
            <div class="_fw">
                <div class="s-usr_icons">
                    <div class="_suis">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="_suisinfo">
                        <div class="_txtec">3,986 Reviews</div>
                    </div>
                </div>

                @if ( $contentUser['govermen_id'] != null )
                    <div class="s-usr_icons">
                        <div class="_suis">
                            <i class="fas fa-bookmark"></i>
                        </div>
                        <div class="_suisinfo">
                            <div class="_txtec">Identity Verified</div>
                        </div>
                    </div>
                @endif

                <div class="s-usr_icons">
                    <div class="_suis">
                        <i class="fas fa-gem"></i>
                    </div>
                    <div class="_suisinfo">
                        <div class="_txtec">Superhost</div>
                    </div>
                </div>
            </div>

            <div class="_fw">
                @if ( $contentUser['email'] != null )
                    <div class="s-usr_icons">
                        <div class="_suis">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="_suisinfo">
                            <div class="_txtec">Email address</div>
                        </div>
                    </div>
                @endif

                @if ( $contentUser['phone'] != null )
                    <div class="s-usr_icons">
                        <div class="_suis">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="_suisinfo">
                            <div class="_txtec">Phone number</div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <div class="_line-hr" style="border-top-color: #E3EDF3; margin: 38px 0 32px"></div>

            <div class="p_interna_none">
                <div class="fx fx-jc-sb fx-fw-w">
                    <h2 class="h2-guests">About</h2>

                    @if ( $idUser == Auth::id() )
                        <div class="_flex-sbet click_editprofile">
                            <span class="_txtblu" style="font-weight: normal;">Edit profile</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#00b5dd"></path>
                            </svg>
                        </div>
                    @endif
                </div>
                
                @if ( $contentUser['id_profiles'] != null )
                    <div class="_about-perfil">
                        <p class="_txtec mr12">{{ $contentUser['about'] }}</p>
                        <div class="content-user_icons">
                            <div class="s-usr_icons">
                                <div class="_suis">
                                    <img src="{{ URL::asset('assets/img/icons/hotel.png') }}" alt="">
                                </div>
                                <div class="_suisinfo">
                                    <div class="_txtec">Lives in {{ $contentUser['location'] }}</div>
                                </div>
                            </div>

                            <div class="s-usr_icons">
                                <div class="_suis">
                                    <img src="{{ URL::asset('assets/img/icons/message.svg') }}" alt="">
                                </div>
                                <div class="_suisinfo">
                                    <div class="_txtec">He speaks {{ $contentUser['language'] }}</div>
                                </div>
                            </div>

                            <div class="s-usr_icons">
                                <div class="_suis">
                                    <img src="{{ URL::asset('assets/img/icons/work.svg') }}" alt="">
                                </div>
                                <div class="_suisinfo">
                                    <div class="_txtec">Works at: {{ $contentUser['work'] }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

        @if ( $idUser == Auth::id() )
            <form wire:submit.prevent="SubmitProfile" class="_fr-block" style="display: none;">
                <div class="_flfpc">
                    <div class="txt-check-in">About</div>
                    <textarea class="_txta-modls @error('inputAbout') error_input @enderror" wire:model.defer="inputAbout"></textarea>
                    @error('inputAbout')
                        <div style="display: block;" class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="_flfpc">
                    <div class="txt-check-in">Location</div>
                    <input type="text" class="_numcard @error('inputLocation') error_input @enderror" wire:model.defer="inputLocation">
                    @error('inputLocation')
                        <div style="display: block;" class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <div class="txt-check-in">Languages | Speak</div>
                    <div class="_flex-sbet add_more-leng" style="padding: 0; display: inline-flex; padding-left: 19px; border-bottom: 0;">
                        <span class="_txtblu" style="font-weight: normal;">Add more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                            <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#00b5dd"></path>
                        </svg>
                    </div>

                    <div class="add_more_leng_show fx fx-fw-w" style="gap: 12px; display: none;">
                        <div class="input_border fx" style="width: auto; gap: 22px;">
                            <span class="_txtec">Español</span>
                            <div class="add_more txtred_x">X</div>
                        </div>

                        <div class="input_border fx" style="width: auto; gap: 22px;">
                            <span class="_txtec">English</span>
                            <div class="add_more txtred_x">X</div>
                        </div>
                    </div>
                </div>

                <div class="_flfpc">
                    <div class="txt-check-in">Work</div>
                    <input type="text" class="_numcard @error('inputWork') error_input @enderror" wire:model.defer="inputWork">
                    @error('inputWork')
                        <div style="display: block;" class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                    <div class="_btnsmleft click_cancelprofile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                            <path d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.756.756,0,0,0,1.289,5.826Z" transform="translate(0 10.584) rotate(-90)" fill="#333"></path>
                        </svg>
                        <span>Cancel</span>
                    </div>
                    <button type="submit" class="btn-celest">Save</button>
                </div>
            </form>
        @endif
    </div>
</aside>