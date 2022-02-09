@extends('layouts.App')

@section('title') Account @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/payments.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')

    <section class="entero">
        <div class="medio-two">
            <div class="section-payments">
                <main class="section-payments_main">
                    <div class="_flex-right16">
                        <a href="{{ route('account') }}" class="_txtec16">Account</a><i class="fas fa-chevron-right"></i><span class="_txtecbold16">Payments & payouts</span>
                    </div>
                    <h2 class="h2-guests_bold35">Payments & payouts</h2>

                    <div class="content-scroll-local">
                        <div class="_block">
                            <div class="tabs_items_group">
                                <h3 class="tabs_items tabs_payments active_tabs">Payments</h3>
                                <h3 class="tabs_items tabs_payouts">Payouts</h3>
                                <h3 class="tabs_items tabs_taxes">Taxes</h3>
                                <h3 class="tabs_items tabs_service-fee">Service fee</h3>
                                <h3 class="tabs_items tabs_guest-contri">Guest Contributions</h3>
                            </div>
                        </div>

                        <div class="btn-right-scroll">
                            <span class="bg-btn-right">
                                <i class="fas fa-chevron-right"></i>
                            </span>
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

                    {{-- Guest Contrib--}}
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

                {{-- Guest Contrib--}}
                <aside class="section-payments_aside _cont-gc" style="display: none;">
                    @livewire('account.payments.info.guest-contrib')
                </aside>

            </div>
        </div>
    </section>



@endsection


@section('script')

@endsection
