<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('liveChatMessage', function ($user) {
    return $user;
});

Broadcast::channel('chat.{chat_id}', function ($user) {
    return $user;
});

Broadcast::channel('validationUser.{user_id}', function ($user) {
    return $user;
});