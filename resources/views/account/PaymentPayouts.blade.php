@extends('layouts.App')

@section('title') Account @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/payments.css') }}" rel="stylesheet"/>

@endsection

@section('content')

    <section class="entero">
        <div class="medio-two">
            <div class="section-payments">
                <main class="section-payments_main">
                    <div class="_flex-right16">
                        <a href="account.php" class="_txtec16">Account</a><i class="fas fa-chevron-right"></i><span class="_txtecbold16">Payments & payouts</span>
                    </div>
                    <h2 class="h2-guests_bold35">Payments & payouts</h2>

                    <div class="content-scroll-local">
                        <div class="_block">
                            <div class="tabs_items_group">
                                <h3 class="tabs_items active_tabs">Payments</h3>
                                <h3 class="tabs_items">Payouts</h3>
                                <h3 class="tabs_items">Taxes</h3>
                                <h3 class="tabs_items">Service fee</h3>
                                <h3 class="tabs_items">Guest Contributions</h3>
                            </div>
                        </div>

                        <div class="btn-right-scroll">
                            <span class="bg-btn-right">
                                <i class="fas fa-chevron-right"></i>
                            </span>
                        </div>
                    </div>

                    {{-- Payments --}}
                        {{-- @livewire('account.payments.content.payments') --}}

                    {{-- Payouts --}}
                        {{-- @livewire('account.payments.content.payouts') --}}

                    {{-- Taxes --}}
                        @livewire('account.payments.content.taxes')

                    {{-- Service fee --}}
                        {{-- @livewire('account.payments.content.service-fee') --}}

                    {{-- Guest Contrib--}}
                        {{-- @livewire('account.payments.content.guest-contrib') --}}

                </main>

                <aside class="section-payments_aside">

                    {{-- Payments --}}
                        {{-- @livewire('account.payments.info.payments') --}}

                    {{-- Payouts --}}
                        {{-- @livewire('account.payments.info.payouts') --}}

                    {{-- Taxes --}}
                        @livewire('account.payments.info.taxes')

                    {{-- Service fee --}}
                        {{-- @livewire('account.payments.info.service-fee') --}}

                    {{-- Guest Contrib--}}
                        {{-- @livewire('account.payments.info.guest-contrib') --}}

                </aside>
            </div>
        </div>
    </section>



@endsection


@section('script')

@endsection
