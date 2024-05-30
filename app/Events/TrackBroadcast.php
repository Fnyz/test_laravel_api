<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TrackBroadcast implements ShouldBroadcast
{
    use Dispatchable, SerializesModels;

    public $message;
 
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('workwiseChannel');
    }

    /**
     * Get the name of the broadcast event.
     *
     * @return string
     */
    public function broadcastAs(): string
    {
        return 'trackBroadcast';
    }
}
