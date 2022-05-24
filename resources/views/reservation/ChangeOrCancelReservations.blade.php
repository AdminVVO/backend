@extends('layouts.App')

@section('title') Reservations Change or Cancel @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')

    <section class="entero">
        <div class="medio txt_center">
            <h2 class="h2_publish">Change or cancel Jorge's reservation</h2>

            <div class="_w" style="margin: 10px auto 0;">
                <p class="_txtec16">Feb 1st - Feb 7th at <span class="_txtblu none_txt_today txt_upper">qw-kew <span class="_txtblu none_txt_today _txtcapit">lakes studio - </span>studio resort</span></p>
            </div>

            <div class="change_reservation fx fx-ai-c fx-fd-c fx-fw-w">
                <div class="fx m-w">
                    <div class="_rect-b _ajustar">
                        <div class="_img-f">
                            <span class="_bg-border">
                                <i class="far fa-building _i-verde42"></i>
                            </span>
                        </div>
                        <div class="_block">
                            <h3 class="h2-guests" style="margin-bottom: 4px;">Change reservation</h3>
                            <h3 class="_txtec">Change travel dates, number of guests, listing, or price</h3>
                            <div style="margin-top: 20px;">
                                <button class="btn-celest">Change reservation</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fx m-w">
                    <div class="_rect-b _ajustar">
                        <div class="_img-f">
                            <span class="_bg-border">
                                <i class="far fa-window-close _i-verde42"></i>
                            </span>
                        </div>
                        <div class="_block">
                            <h3 class="h2-guests" style="margin-bottom: 4px;">Cancel reservation</h3>
                            <h3 class="_txtec">Only select if changing the reservation isn't an option. Host penalties may apply.</h3>
                            <div style="margin-top: 20px;">
                                <button class="btn-celest">Cancel reservation</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('script')

@endsection
