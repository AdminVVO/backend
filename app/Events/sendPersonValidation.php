<?php

namespace App\Events;

use App\Models\UserTemp;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class sendPersonValidation implements
    ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public string $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(string $user)
    {
        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('channelValidation');
    }

    public function broadcastAs()
    {
        $id = UserTemp::where('id', $this->user)->where('type','validated_account')->first('user_id');
        return 'sendEvent' . (int) $id->user_id;
    }
}
