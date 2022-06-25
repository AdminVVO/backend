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
        const picker = new easepick.create({
            element: '#easypickHome',
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
            picker.setStartDate('{{ Carbon::parse( $request['inputDateIn'] )->Format('d-m-y'); }}');
            picker.setEndDate('{{ Carbon::parse( $request['inputDateOut'] )->Format('d-m-y'); }}');
        @endif
    </script>
@endsection
