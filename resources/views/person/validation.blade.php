@extends('layouts.App')

@section('title')
    Validation Account
@endsection

@section('css')
    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/account.css') }}" rel="stylesheet" />
@endsection

@section('header')
    @if (!$user_id)
        @include('layouts.HeaderAuth')
    @endif
@endsection

@section('content')
    <section class="entero">
        <div class="medio">

            @livewire('validation.steps', ['user_id' => $user_id])

        </div>
    </section>

    @if (isset($user_id))
        <button hidden value="{{ $user_id }}" id="user_id"></button>
    @endif
    <button hidden value="{{ Auth::id() }}" id="userAuth"></button>
@endsection


@section('script')
    <script>
        // window.addEventListener('sendValidation', event => {
        //     const typing = Echo.private(`validationUser` + $('#user_id').val());
        //     setTimeout(() => {
        //         typing.whisper('click', {
        //             typing: true,
        //             userID: user_id
        //         });
        //     }, 500);
        // })

        /********************/

        // window.addEventListener('sendValidationFinish', event => {
        //     Echo.private(`validationUser`+$('#userAuth').val()).listenForWhisper('click', (e) => {
        //         alert("hola salida")
        //     });
        // })
    </script>
@endsection
