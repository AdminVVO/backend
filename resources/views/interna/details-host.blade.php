<div class="content-user-if-flex">
    <div class="block-des-if">
        <div class="content-user_inf">
            <span class="_pf-msg fx skeleton">
                <a href="{{ route('profile', $content['user_id']) }}" target="_blank" style="border-radius: 50%;">
                    @if ( file_exists( storage_path('app/public/uploadAvatar/' . \App\Models\User::AvatarInterna( $content['user_id'] )  ) ) )
                        <img src="{{ URL::asset('storage/uploadAvatar/') .'/'. \App\Models\User::AvatarInterna( $content['user_id'] )  }}" alt="">
                    @else
                        <img src="{{ URL::asset('assets/img/avatar') }}/{{ \App\Models\User::AvatarInterna( $content['user_id'] ) }}" alt="">
                    @endif
                </a>
            </span>
            <div>
                <div class="h2-guests skeleton skeleton_txt">Hosted by {{ \App\Models\User::Name( $content['user_id'] ) }}</div>
                <ol class="skeleton skeleton_txt">
                    <li class="_txtec">Joined in {{ Carbon\Carbon::parse( \App\Models\User::CreatedAt( $content['user_id'] ), 'UTC')->locale('en')->isoFormat('MMMM, YYYY') }}</li>
                </ol>
            </div>
        </div>

        <ul class="flex_alg">
            <li class="content-star skeleton">
                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="height: 16px; width: 16px; fill: #FF5A5F;">
                    <path d="M15.094 1.579l-4.124 8.885-9.86 1.27a1 1 0 0 0-.542 1.736l7.293 6.565-1.965 9.852a1 1 0 0 0 1.483 1.061L16 25.951l8.625 4.997a1 1 0 0 0 1.482-1.06l-1.965-9.853 7.293-6.565a1 1 0 0 0-.541-1.735l-9.86-1.271-4.127-8.885a1 1 0 0 0-1.814 0z"></path>
                </svg>
                <span class="_txtec mr-l8">3,986 Reviews</span>
            </li>

            <li class="content-star skeleton">
                <img src="{{ URL::asset('assets/img/icons/identify-v.svg') }}" alt="" style="margin-right: 9px;">
                <span class="_txtec mr-l8">Identify Verified</span>
            </li>

            <li class="content-star skeleton">
                <i class="fas fa-medal"></i>
                <span class="_txtec mr-l8">Superhost</span>
            </li>
        </ul>
        
        @if ( isset( $profile['about'] ) )
            <div class="_txtec skeleton skeleton_txt" style="margin-top: 24px;">{{ $profile['about'] }}</div>
        @endif
    </div>

    <div class="block-cth">
        <ul class="fx fx-fd-c gp16">
            @if ( isset( $profile['language'] ) )
                <li class="f-cth skeleton skeleton_txt">
                    <div class="_txteh">Languages:</div>
                    <div class="_txtec">
                        @foreach ($profile['language'] as $element)
                            {{ $loop->index >= 1 ? ' - ' : '' }}{{ \App\Models\LanguagesRegions::Language( $element ) }}
                        @endforeach
                    </div>
                </li>
            @endif

            <li class="f-cth skeleton skeleton_txt">
                <div class="_txteh">Response rate:</div>
                <div class="_txtec">100%</div>
            </li>

            <li class="f-cth skeleton skeleton_txt">
                <div class="_txteh">Response time:</div>
                <div class="_txtec">Within an hour</div>
            </li>
        </ul>
        
        <div class="block-a fx-jc-c">
            @if ( Auth::check() )
                <button type="button" class="btn-celest ctht skeleton">Contact Host</button>
            @else
                <button type="button" class="btn-celest butnSignModl skeleton">Contact Host</button>
            @endif
        </div>

        <div class="s-pri_icons skeleton">
            <div class="_pri-svg">
                <img src="{{ URL::asset('assets/img/icons/privaty.svg') }}" alt="">
            </div>
            <div class="_txtprivat">To protect your payment, never transfer money or communicate outside of the Vvoutlet website or app.</div>
        </div>
    </div>
</div>