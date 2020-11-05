<?php

namespace App\Mail;
use App\Model\Booking_event;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Event_Ticket extends Mailable
{
    use Queueable, SerializesModels;
      public $event_ticket;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $event_ticket)
    {
        $this->event_ticket=$event_ticket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.booking_confirm');
    }
}
