<?php

namespace App\Events;

use App\Coupon;
use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CouponUsed
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * @var Coupon
     */
    public $coupon;
    /**
     * @var User
     */
    public $user;

    /**
     * Create a new event instance.
     *
     * @param Coupon $coupon
     * @param User   $user
     */
    public function __construct(Coupon $coupon, User $user)
    {
        $this->coupon = $coupon;
        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
