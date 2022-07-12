@extends('layouts.App')

@section('title')
    Account
@endsection

@section('css')
    <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/modals-user.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/payments.css') }}" rel="stylesheet" />
@endsection

@section('header')
    @include('layouts.HeaderAuth')
@endsection

@section('content')
    <section class="entero">
        <div class="medio-two">
            <div class="section-payments">
                <main class="section-payments_main">
                    <div class="_flex-right16 skeleton skeleton_txt">
                        <a href="{{ route('account') }}" class="_txtec16">Account</a><i
                            class="fas fa-chevron-right"></i><span class="_txtecbold16">Payments & payouts</span>
                    </div>
                    <h2 class="h2-guests_bold35 skeleton skeleton_txt">Payments & payouts</h2>
                    {{--  --}}
                    <div class="content-scroll-local">
                        <div class="navcont__flech-fx">
                            <div class="cont_nav js__cont_nav">
                                <div class="nav__links-txt tab-container">
                                    <button type="button" class="li__links-txt tabs_payments skeleton">
                                        <span class="tabs_items active_tabs">
                                            <span class="skeleton skeleton_txt">Payments</span>
                                        </span>
                                    </button>

                                    <button type="button" class="li__links-txt tabs_payouts skeleton">
                                            <span class="skeleton skeleton_txt tabs_items">Payouts</span>
                                    </button>

                                    <button type="button" class="li__links-txt tabs_taxes skeleton">
                                        <span class="tabs_items">
                                            <span class="skeleton skeleton_txt">Taxes</span>
                                        </span>
                                    </button>

                                    <button type="button" class="li__links-txt tabs_service-fee skeleton">
                                        <span class="tabs_items">
                                            <span class="skeleton skeleton_txt">Service fee</span>
                                        </span>
                                    </button>

                                    <button type="button" class="li__links-txt tabs_guest-contri skeleton">
                                        <span class="tabs_items">
                                            <span class="skeleton skeleton_txt">Guest contributions</span>
                                        </span>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Payments --}}
                    <div class="_cont-payments">
                        @livewire('account.payments.content.payments')
                    </div>

                    {{-- Payouts --}}
                    <div class="_cont-payout" style="display: none;">
                        @livewire('account.payments.content.payouts')
                    </div>

                    {{-- Taxes --}}
                    <div class="_cont-ein" style="display: none;">
                        @livewire('account.payments.content.taxes')
                    </div>

                    {{-- Service fee --}}
                    <div class="_cont-sf" style="display: none;">
                        @livewire('account.payments.content.service-fee')
                    </div>

                    {{-- Guest Contrib --}}
                    <div class="_cont-gc" style="display: none;">
                        @livewire('account.payments.content.guest-contrib')
                    </div>

                </main>

                {{-- Payments --}}
                <aside class="section-payments_aside _cont-payments">
                    @livewire('account.payments.info.payments')
                </aside>

                {{-- Payouts --}}
                <aside class="section-payments_aside _cont-payout" style="display: none;">
                    @livewire('account.payments.info.payouts')
                </aside>

                {{-- Taxes --}}
                <aside class="section-payments_aside _cont-ein" style="display: none;">
                    @livewire('account.payments.info.taxes')
                </aside>

                {{-- Service fee --}}
                <aside class="section-payments_aside _cont-sf" style="display: none;">
                    @livewire('account.payments.info.service-fee')
                </aside>

                {{-- Guest Contrib --}}
                <aside class="section-payments_aside _cont-gc" style="display: none;">
                    @livewire('account.payments.info.guest-contrib')
                </aside>

            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ URL::asset('assets/js/places.js') }}"></script>
    <script src="{{ URL::asset('assets/js/slider_home.js') }}"></script>
    <script src="{{ URL::asset('assets/js/modals-min.js') }}"></script>
@endsection
