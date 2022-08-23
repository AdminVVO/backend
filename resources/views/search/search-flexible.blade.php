@extends('layouts.App')

@section('title') Search Flexible @endsection

@section('css')
    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/search-flexible.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet"/>
@endsection

@section('header')

    @include('layouts.HeaderHome')

@endsection


@section('content')

    @livewire('search-flexible.flexible')

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
        const pickerHome = new easepick.create({
            element: '#easypickHome',
            css: [
                'assets/css/easepick-vvo.css',
                'assets/css/estilos.css'
            ],
            plugins: ['RangePlugin','LockPlugin'],
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
                elementEnd: '#endEasypickHome',
            },
            LockPlugin: {
              minDate: new Date(),
            },
            setup(pickerHome) {
                pickerHome.on('select', (e) => {
                var content = [
                    startDate = pickerHome.getStartDate(),
                    endDate = pickerHome.getEndDate(),
                ];
                Livewire.emitTo('home.search-places', 'selectDate', content )
              });
            },
        });

        $('.endEasypick').click(function(event) {
            pickerHome.show();
        });

        @if ( isset( $request['inputDateIn'] ) && isset( $request['inputDateOut'] ) )
            pickerHome.setStartDate('{{ Carbon::parse( $request['inputDateIn'] )->Format('d-m-y'); }}');
            pickerHome.setEndDate('{{ Carbon::parse( $request['inputDateOut'] )->Format('d-m-y'); }}');
        @endif
    </script>
    <script>window.onload = function () { pickerHeaderPlugin = pickerHome.ui.container; pickerHeaderPlugin.style.marginTop ="1.9rem" }</script>
@endsection
