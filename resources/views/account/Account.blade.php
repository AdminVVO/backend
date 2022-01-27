@extends('layouts.App')

@section('title') Account @endsection

@section('css')

@endsection

@section('content')

    <section class="entero">
        <div class="medio">
            <div class="section-account">
                <h2 class="h2">Account</h2>
                <p class="span-guests">
                    <span class="_txteh" style="margin-bottom: 0;">{{ $auth['name'] . ' ' . $auth['last_name'] }}</span>, {{ $auth['email'] }}<span class="_p">·</span><span class="_txtblu">Go to profile</span>
                </p>

                <div class="_flex-account">
                    <a href="{{ route('personal_info') }}">
                        <div class="_cont-account">
                            <i class="far fa-address-card"></i>
                            <div class="_txteh" style="margin-bottom: 4px;">Personal info</div>
                            <p class="span-guests">Provide personal details and how we can reach you</p>
                        </div>
                    </a>

                    <a href="{{ route('login_segurity') }}">
                        <div class="_cont-account">
                            <i class="far fa-keyboard"></i>
                            <div class="_txteh" style="margin-bottom: 4px;">Login & security</div>
                            <p class="span-guests">Update your password and secure your account</p>
                        </div>
                    </a>

                    <div class="_cont-account">
                        <i class="far fa-money-bill-alt"></i>
                        <div class="_txteh" style="margin-bottom: 4px;">Payments & payouts</div>
                        <p class="span-guests">Review payments, payouts, coupons, gift cards, and taxes</p>
                    </div>

                    <div class="_cont-account">
                        <i class="far fa-edit"></i>
                        <div class="_txteh" style="margin-bottom: 4px;">Global preferences</div>
                        <p class="span-guests">Set your default language, currency, and timezone</p>
                    </div>
                </div>

                <div class="msgaround">
                    <div class="_wcusermsg">
                        <span class="_txteh" style="display: block; margin-bottom: 0;">Need to deactivate your account?</span>
                    </div>
                    <button class="btn-celest">Take care of that now</button>
                </div>
            </div>
        </div>
    </section>


@endsection


@section('script')

@endsection
