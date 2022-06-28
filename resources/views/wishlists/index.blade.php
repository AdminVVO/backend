@extends('layouts.App')

@section('title')
    Wishlist
@endsection

@section('css')
    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet" />
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
                    @forelse($content as $key => $element)
                        <a href="wishlist/{{ $key }}">
                            <div class="brbsbcp">
                                <div class="dggtc11g">
                                    @foreach ($element['avatar'] as $avatar)
                                        <img src="{{ URL::asset('storage/uploadListing/') }}/{{ $avatar }}"
                                            alt="">
                                    @endforeach
                                </div>

                                <div class="fxjcgfwpt">
                                    <h2 class="_txteh">{{ $key }}</h2>
                                    <div class="txtec_nrl">
                                        {{ Carbon\Carbon::parse($element['created_at'], 'UTC')->locale('en')->isoFormat('ll') }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    @empty
                        <div class="hidden_galerias">
                            <div class="medio">
                                <div class="now__listabscard">
                                    <p>No Have Listing</p>
                                </div>
                            </div>
                        </div>
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
