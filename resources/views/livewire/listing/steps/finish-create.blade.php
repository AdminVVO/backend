<div class="_ctoverlay">
    <div class="content_right">
        @if ( count($pending) != 0 )
            <div class="content_hidden c_h-listing" style="padding-bottom: 48px; padding-top: 0;">
                <div class="content_mr">
                    <div class="content_listing">
                        <h2 class="h2_publish txt_center" style="padding: 0 21px;">Finish your listing</h2>
                        <div class="_bwidth">
                            <div class="scroll_n">
                                <div class="_gap-flex">
                                    @foreach ($pending as $key => $element)
                                        <a href="javascript:void(0)" wire:click="continueListing('{{ $element['listing'] }}')">
                                            <div class="_cont-list">
                                                <div class="_img-fondo">
                                                    @if ( $element['img'] != '' )
                                                        <img src="{{ URL::asset('assets/img/card/') }}/{{ $element['img'] }}" alt="">
                                                    @else
                                                        <span class="_bg-border">
                                                            <i class="far fa-building _i-verde30"></i>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="_block">
                                                    <h3 class="_txteh">{{ ucfirst( $element['host'] ) }}</h3>
                                                    <p class="_txtec14 _txtcapit">{{ Carbon\Carbon::parse( $element['created_at'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>

                            <button>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8.378" height="14.652" viewBox="0 0 8.378 14.652">
                                        <path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-11.246 20.84) rotate(-90)" fill="#00b5dd"/>
                                    </svg>
                                </span>
                            </button>
                        </div>
                            
                        <div class="_links">
                            <div class="_btnsmleft">
                                <span>Show all</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                    <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538a.755.755,0,0,1-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(-11.246 16.772) rotate(-90)" fill="#333"/>
                                </svg>
                            </div>

                            <p class="_txtec14" style="margin-top: 21px;">
                                <p class="_txtec14">We've made it easier to create a listing on Vvoutlet. You'll notice some changes to your in-progress listings.</p>
                                <a href="javascript:void(0)" class="_btnsmblu" style="font-size: 14px;"><span>Learn what's new</span></a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="content_hidden c_h-listing" style="padding-top: 49px;">
            <div class="content_mr">
                <div class="content_listing">
                    <h2 class="h2_publish txt_center" style="margin-bottom: 33px; padding: 0 21px;">Start a new listing</h2>
                    <a href="javascript:void(0)" wire:click="initCreateButton">
                        <div class="_rect-b">
                            <div class="_img-f">
                                <span class="_bg-border">
                                    <i class="far fa-plus-square _i-verde30"></i>
                                </span>
                            </div>
                            <div class="_block">
                                <h3 class="_txteh">Create a new listing</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
