@extends('layouts.App')

@section('title') Search @endsection

@section('css')
    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/location.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/dates-location.css') }}" rel="stylesheet"/>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css" rel="stylesheet">

    <style type="text/css">
        .mapboxgl-ctrl-logo {
            display: none !important;
        }
    </style>

@endsection

@section('header')

    @include('layouts.HeaderHome')

@endsection


@section('content')

    <section class="location"> 
        @livewire('search.search', ['request' => $request ])
    </section>

    <section class="dates-location">
        <div class="content_dates-local">
            <h3>Are your dates flexible?</h3>
            <p class="_txtec mr-t11 mr-b42">These stays are available within +/- 3 days of your current dates</p>

            <div class="vvo_cards_items">
                <div class="vvo_nav_fl">
                    <button class="prev" title="Prev">
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                            <g fill="none">
                                <path d="m20 28-11.29289322-11.2928932c-.39052429-.3905243-.39052429-1.0236893 0-1.4142136l11.29289322-11.2928932"></path>
                            </g>
                        </svg>
                    </button>
                </div>

                <div class="card_content">
                    @livewire('search.search-flexible')
                </div>

                <div class="vvo_nav_fl">
                    <button class="next" title="Next">
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                            <g fill="none">
                                <path d="m12 4 11.2928932 11.2928932c.3905243.3905243.3905243 1.0236893 0 1.4142136l-11.2928932 11.2928932"></path>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="block_a">
                <button class="btn-celest">Show All</button>
            </div>
        </div>
    </section>

    @section('modals')

        {{-- Modal Favority --}}
        @include('home.modals.favorite')

    @endsection

@endsection

@section('script')

    <script src="{{ URL::asset('assets/js/card-location.js') }}"></script>
    <script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>

    <script>
        window.addEventListener('closedModalFavority', event => {
            $(".container_user-host, .container_admin-host, .container_preview_guests_pay").hide();
            $(".page-category").css({'overflow': 'auto'});
        })
    </script>
     <script>
        const picker = new easepick.create({
            element: '#easypickHome',
            css: [
                'https://cdn.jsdelivr.net/npm/@easepick/core@1.2.0/dist/index.css',
                'https://cdn.jsdelivr.net/npm/@easepick/range-plugin@1.2.0/dist/index.css',
            ],
            plugins: ['RangePlugin'],
            format: 'DD MMM YYYY',
            calendars: 2,
            grid: 2,
            autoApply: false,
                tooltip: true,
                locale: {
                    one: 'day',
                    other: 'days',
                },
            RangePlugin: {
                elementEnd: '#endEasypickHome',
            },
            setup(picker) {
                picker.on('select', (e) => {
                var content = [
                    startDate = picker.getStartDate(),
                    endDate = picker.getEndDate(),
                ];
                Livewire.emitTo('home.search-places', 'selectDate', content )
              });
            },
        });

        $('.endEasypick').click(function(event) {
            picker.show();
        });

        @if ( isset( $request['inputDateIn'] ) && isset( $request['inputDateOut'] ) )
            const DateTime = easepick.DateTime;
            picker.setStartDate( new DateTime('{{ Carbon::parse( $request['inputDateIn'] )->Format('d-m-Y'); }}', 'DD.MM.YYYY') );
            picker.setEndDate( new DateTime('{{ Carbon::parse( $request['inputDateOut'] )->Format('d-m-Y'); }}', 'DD.MM.YYYY') );
        @endif

    </script>
@endsection
