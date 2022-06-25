@extends('layouts.App')

@section('title')
    Wish
@endsection

@section('css')
    <link href="{{ URL::asset('assets/css/home.css') }}" rel="stylesheet" />

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/location.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/dates-location.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/search-flexible.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/modals-user.css') }}" rel="stylesheet" />

    <link href='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.css" type="text/css">

    <style type="text/css">
        .mapboxgl-ctrl-logo {
            display: none !important;
        }
    </style>
@endsection

@section('header')
    @include('layouts.HeaderAuth')
@endsection

@section('content')
    <div class="content_location">
        @livewire('wishlists.wish', ['name' => $name])
    </div>
    <button type="button" class="content_icon-leng" id="btnLeng">
        <img src="{{ URL::asset('assets/img/logo-leng.png') }}" alt="">
    </button>
@section('modals')
@endsection
@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/card-location.js') }}"></script>
    <script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
    {{-- <script src="{{ URL::asset('assets/js/slider_home.js') }}"></script> --}}
    <script src="{{ URL::asset('assets/js/modals-min.js') }}"></script>

    <script>
        window.addEventListener('closedModalFavority', event => {
            $(".container_user-host, .container_admin-host, .container_preview_guests_pay").hide();
            $(".page-category").css({'overflow': 'auto'});
        })
    </script>
     <script>
        const picker = new easepick.create({
            element: '#easypick',
            css: [
                'https://cdn.jsdelivr.net/npm/@easepick/core@1.2.0/dist/index.css',
                'https://cdn.jsdelivr.net/npm/@easepick/range-plugin@1.2.0/dist/index.css',
            ],
            plugins: ['RangePlugin'],
            format: 'DD-MM-YY',
            calendars: 2,
            grid: 2,
            autoApply: false,
                tooltip: true,
                locale: {
                    one: 'day',
                    other: 'days',
                },
            RangePlugin: {
                elementEnd: '#endEasypick',
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
            picker.setStartDate('{{ Carbon::parse( $request['inputDateIn'] )->Format('d-m-y'); }}');
            picker.setEndDate('{{ Carbon::parse( $request['inputDateOut'] )->Format('d-m-y'); }}');
        @endif

    </script>
@endsection
