@extends('layouts.App')

@section('title') Search @endsection

@section('css')
    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/location.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/dates-location.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/search-flexible.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/modals-user.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderHome')

@endsection


@section('content')

    <section class="location"> 
        @livewire('search.search', ['request' => $request])
    </section>

    <section class="dates-location">
        <div class="content_dates-local">
            <h3>Are your dates flexible?</h3>
            <p class="_txtec mr-t11 mr-b42">These stays are available within +/- 3 days of your current dates</p>

            @livewire('search.search-flexible')

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
    <script src="{{ URL::asset('assets/js/slider_home.js') }}"></script>
    <script src="{{ URL::asset('assets/js/modals-min.js') }}"></script>

    <script>
        window.addEventListener('closedModalFavority', event => {
            $(".container_user-host, .container_admin-host, .container_preview_guests_pay").hide();
            $(".page-category").css({'overflow': 'auto'});
        })
    </script>
@endsection
