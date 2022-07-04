<aside class="content-aside_about">
    <div class="view_port">
        <img src="{{ URL::asset('assets/img/card/c1.jpg') }}" alt="">
        <span class="joind-span">Joined in {{ Carbon::parse( $contentUser['created_at'] )->year  }}</span>
    </div>
    
    <div class="content-img">
        @if ( $idUser == Auth::id() )
            <input type="file" class="front_face" id="fileProfile" style="display: none;" wire:model="inputAvatar">
            <label for="fileProfile" class="cr-p">
                <div class="imagePreview _br-img-perf">
        @else
            <label>
                <div class="_br-img-perf">
        @endif
            @if ( file_exists( storage_path('app/public/uploadAvatar/' . $contentUser['avatar']  ) ) )
                <img src="{{ URL::asset('storage/uploadAvatar/') .'/'. $contentUser['avatar']  }}" alt="">
            @else
                <img src="{{ URL::asset('assets/img/avatar') .'/'. $contentUser['avatar']  }}" alt="">
            @endif
            </div>
        </label>

        <h2 class="h2-guests">{{ $contentUser['name'] }}</h2>
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

                @if ( $contentUser['govermen'] )
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
                @if ( $contentUser['email'] )
                    <div class="s-usr_icons">
                        <div class="_suis">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="_suisinfo">
                            <div class="_txtec">Email address</div>
                        </div>
                    </div>
                @endif

                @if ( $contentUser['phone'] )
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

        <div class="_line-hr mr-t32 mr-b32"></div>
        @if ( $contentProfile || $idUser == Auth::id() )
            <div class="p_interna_none" wire:ignore.self>
                <div class="fx fx-jc-sb fx-fw-w">
                    <h2 class="h2-guests">About</h2>

                    @if ( $idUser == Auth::id() )
                        <button type="button" class="txtunder__ics blue txt16 click_editprofile">Edit profile</button>
                    @endif
                </div>
                
                @if ( $contentProfile )
                    <div class="_about-perfil">
                        <p class="_txtec mr12">{{ $contentProfile['about'] }}</p>
                        <div class="content-user_icons">
                            <div class="s-usr_icons">
                                <div class="_suis">
                                    <img src="{{ URL::asset('assets/img/icons/hotel.png') }}" alt="">
                                </div>
                                <div class="_suisinfo">
                                    <div class="_txtec">Lives in: {{ $contentProfile['location'] }}</div>
                                </div>
                            </div>

                            <div class="s-usr_icons">
                                <div class="_suis">
                                    <img src="{{ URL::asset('assets/img/icons/message.svg') }}" alt="">
                                </div>
                                <div class="_suisinfo">
                                    <div class="_txtec">He speaks: 
                                        @if ( $contentProfile['language'] != null )
                                            @foreach ($contentProfile['language'] as $element)
                                                {{$element}} 
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="s-usr_icons">
                                <div class="_suis">
                                    <img src="{{ URL::asset('assets/img/icons/work.svg') }}" alt="">
                                </div>
                                <div class="_suisinfo">
                                    <div class="_txtec">Works at: {{ $contentProfile['work'] }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @endif

        @if ( $idUser == Auth::id() )
            <form wire:submit.prevent="SubmitProfile" class="_fr-block" style="display: none;" wire:ignore.self>
                <div class="_flfpc">
                    <div class="txt-check-in">About</div>
                    <textarea class="_txta-modls @error('inputAbout') error_input @enderror" style="resize: vertical;" rows="4" wire:model.defer="inputAbout"></textarea>
                    @error('inputAbout')
                        <div class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="_flfpc">
                    <div class="txt-check-in">Location</div>
                    <input type="text" class="_numcard @error('inputLocation') error_input @enderror" wire:model.defer="inputLocation">
                    @error('inputLocation')
                        <div class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <div class="txt-check-in">Languages | Speak</div>
                    <div class="_txtec">
                        @if ( count( $inputLanguage ) != 0 )
                            @foreach ($inputLanguage as $element)
                                {{$element}} 
                            @endforeach
                        @endif
                    </div>
                    <button type="button" class="txtunder__ics blue txt16 js__addMoreLengSpeak">Add more</button>
                </div>

                <div class="_flfpc">
                    <div class="txt-check-in">Work</div>
                    <input type="text" class="_numcard @error('inputWork') error_input @enderror" wire:model.defer="inputWork">
                    @error('inputWork')
                        <div class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="fx fx-fw-w fx-ai-c fx-jc-sb" style="gap: 12px;">
                    <button type="button" class="_fpnigw0 click_cancelprofile" wire:click="reloadInputs()">
                        <span>Cancel</span>
                    </button>

                    <button type="submit" class="btn-celest">Save</button>
                </div>
            </form>
        @endif
    </div>
</aside>