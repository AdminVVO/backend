<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendMessage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public string $onChat;
    public int $onReceived;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(string $onChat, int $onReceived)
    {
        $this->onChat = $onChat;
        $this->onReceived = $onReceived;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('liveChatMessage-channel');
    }

    public function broadcastAs()
    {
        return 'liveChatMessage-event';
    }
}
