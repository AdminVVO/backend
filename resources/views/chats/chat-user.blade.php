@extends('layouts.App')

@section('title') Message User @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/messages-user.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')

    <section class="entero section_messages_user is-main-info-open" id="classDetails">
        <div class="container-medio">
            <div class="fx ht100v pd-130-0-60 ow-h">
                
                <!-- Content Left Chat -->
                @livewire('chats.user.left', ['id' => isset( $request ) ? $request : ''])

                <!-- Content Center Chat -->
                @livewire('chats.user.center', ['id' => isset( $request ) ? $request : ''])

                <!-- Content Right Chat -->
                @livewire('chats.user.right', ['id' => isset( $request ) ? $request : ''])

            </div>
        </div>
    </section>

@endsection

@section('script')

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    <script>
        Pusher.logToConsole = true;

        var pusher = new Pusher('d5cfb3ba4deba9ec0333', {
          cluster: 'us2'
        });

        var channel = pusher.subscribe('liveChatMessage-channel');
        channel.bind('liveChatMessage-event', function(data) {
            window.livewire.emit('eventPush');
        });
    </script>

@endsection