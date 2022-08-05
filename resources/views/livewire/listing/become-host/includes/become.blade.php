<div class="_ctoverlay">
    <div class="content_right">
        @if ( count( $preListing ) != 0 )
            <div class="content_hidden c_h-listing" style="padding-bottom: 48px; padding-top: 0;">
                <div class="content_mr">
                    <div class="content_listing" style="max-width: 700px !important;">
                        <h2 class="h2_publish txt_center">Finish your listing</h2>

                        <div class="_bwidth">
                            <div class="scroll_n">
                                <div class="_gap-flex">
                                    @foreach ( $preListing as $element )
                                        <div class="pd-r13">
                                            <a href="javascript:void(0)" wire:click="continueListing('{{ $element['id_pre_listings'] }}')">
                                                <div class="_cont-list">
                                                    <div class="_img-fondo">
                                                        @if ( $element['photos'] )
                                                            <img src="{{ URL::asset('storage/photos-pre-listing') .'/'. $element['photos'][0] }}" alt="">
                                                        @else
                                                            <span class="_bg-border">
                                                                <i class="far fa-building _i-verde30"></i>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="_block">
                                                        <h3 class="_txteh">{{ \App\Models\RoomsProperty::Property( $element['propery'] ) }}</h3>
                                                        <p class="_txtec14 _txtcapit">{{ Carbon\Carbon::parse( $element['created_at'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="_links">
                            <a href="{{ route('host-listing') }}">
                                <button type="button" class="txtunder__ics">
                                    <div class="fx fx-ai-b gp5">
                                        <span class="">Show all</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                            <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#333"></path>
                                        </svg>
                                    </div>
                                </button>
                            </a>

                            <div class="_txtec14 mr-t21">
                                <p class="_txtec16">We've made it easier to create a listing on Vvoutlet. You'll notice some changes to your in-progress listings.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="content_hidden c_h-listing" style="padding-top: 49px;">
            <div class="content_mr" style="padding: 0 20px;">
                <div class="content_listing">
                    <h2 class="h2_publish txt_center" style="margin-bottom: 33px;">Start a new listing</h2>

                        <div class="_rect-b" wire:click="nextShow">
                            <div class="_img-f">
                                <span class="_bg-border">
                                    <i class="far fa-plus-square _i-verde30"></i>
                                </span>
                            </div>
                            <div class="_block">
                                <h3 class="_txteh">Create a new listing</h3>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>