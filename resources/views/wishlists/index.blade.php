@extends('layouts.App')

@section('title') Wishlist @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')

    <div class="entero">
        <div class="medio">
            <section class="section__wishlist">
                <h1 class="h2-guests mr-b25">Wishlist</h1>

                <div class="grid__3cl">
                    @forelse($content as $element)
                        <a href="#">
                            <div class="brbsbcp">
                                <div class="dggtc11g">
                                    <img src="{{ URL::asset('storage/uploadListing/') }}/{{ $element['photos'][0] }}" alt="">
                                    <img src="{{ URL::asset('storage/uploadListing/') }}/{{ $element['photos'][1] }}" alt="">
                                </div>

                                <div class="fxjcgfwpt">
                                    <h2 class="_txteh">{{ $element['name'] }}</h2>
                                    <div class="txtec_nrl">Nov 10 - Dec 08, 2021</div>
                                </div>
                            </div>
                        </a>
                    @empty
                        <p>No have Wishlist</p>
                    @endforelse
                </div>
            </section>
        </div>
    </div>
    

    @section('modals')

    @endsection

@endsection

@section('script')

@endsection
