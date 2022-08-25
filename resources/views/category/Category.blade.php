@extends('layouts.App')

@section('title') Category @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/home.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/category.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderHome')

@endsection

@section('content')

    <div class="tabs_card tabs_card_xxl entero" style="margin: 0 0 100px;">
        <div class="medio">
            <div class="card_items skeleton skeleton_card">
                <div class="card_img">
                    <img src="{{ URL::asset('assets/img/category1.jpg') }}" alt="">
                </div>
                <div class="card_text">
                    <h2 class="skeleton skeleton_txt">Beachfront</h2>
                    <a href="#" class="btn-card-category skeleton">Show all</a>
                </div>
            </div>

            <div class="card_items skeleton skeleton_card">
                <div class="card_img">
                    <img src="{{ URL::asset('assets/img/category2.jpg') }}" alt="">
                </div>
                <div class="card_text">
                    <h2 class="skeleton skeleton_txt">Beachfront</h2>
                    <a href="#" class="btn-card-category skeleton">Show all</a>
                </div>
            </div>

            <div class="card_items skeleton skeleton_card">  
                <div class="card_img">
                    <img src="{{ URL::asset('assets/img/category3.jpg') }}" alt="">
                </div> 
                <div class="card_text">
                    <h2 class="skeleton skeleton_txt">Beachfront</h2>
                    <a href="#" class="btn-card-category skeleton">Show all</a>
                </div> 
            </div>  
        </div>  
    </div>

    <div class="entero">
        <div class="medio">
            <h2 class="h2 skeleton skeleton_txt">Most Popular</h2>
        </div>
    </div> 

    @livewire('category.cardfilter')

    <div class="entero mt-100">
        <div class="medio">
            <h2 class="h2 skeleton skeleton_txt">New Hotel</h2>
        </div>
    </div> 

    <div class="tabs_card tabs_card_xl entero">
        <div class="medio">
            @livewire('category.cardhotel')
        </div> 
    </div> 

    <div class="wo_home entero skeleton">
        <div class="medio">
            <h3 class="skeleton skeleton_txt">Questions about hosting?</h3>
            <div class="block_a">
                <a href="{{ route('/') }}" class="btn-h skeleton">Answers and Tips</a>
            </div>
        </div>
    </div>

    <div class="entero mt-100">
        <div class="medio">
            <h2 class="h2 skeleton skeleton_txt">With Pool</h2> 
        </div>
    </div> 

    <div class="tabs_card entero mt-80">
        <div class="medio"> 
            @livewire('category.cardpool')
        </div>  
    </div> 

    @section('modals')

        {{-- Modal Favority --}}
        @include('home.modals.favorite')

    @endsection
@endsection


@section('script')
     <script>
        const pickerHome = new easepick.create({
            element: '#easypickHome',
            css: [
                'assets/css/easepick-vvo.css',
                'assets/css/estilos.css'
            ],
            plugins: ['RangePlugin','LockPlugin'],
            format: 'DD MMM YYYY',
            calendars: 2,
            grid: 2,
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
            const DateTime = easepick.DateTime;
            pickerHome.setStartDate( new DateTime('{{ Carbon::parse( $request['inputDateIn'] )->Format('d-m-Y'); }}', 'DD.MM.YYYY') );
            pickerHome.setEndDate( new DateTime('{{ Carbon::parse( $request['inputDateOut'] )->Format('d-m-Y'); }}', 'DD.MM.YYYY') );
        @endif

    </script>
    <script>window.onload = function () { pickerHeaderPlugin = pickerHome.ui.container; pickerHeaderPlugin.style.marginTop ="1.9rem" }</script>

@endsection