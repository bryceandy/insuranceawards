<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class VoteCasted implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $award, $votes, $names;

    /**
     * VoteCasted constructor.
     * @param $award
     * @param $votes
     * @param $names
     */
    public function __construct($award, $votes, $names)
    {
        $this->award = $award;
        $this->votes = $votes;
        $this->names = $names;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('vote');
        //activity will broadcast via Pusher. See /resources/js/bootstrap.js
    }
}
