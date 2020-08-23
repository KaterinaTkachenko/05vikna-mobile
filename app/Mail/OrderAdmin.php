<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderAdmin extends Mailable
{
    use Queueable, SerializesModels;
    private $lead;
    private $request;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($lead, $request)
    {
        $this->lead = $lead;
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.order-admin', ['lead' => $this->lead, 'request'=>$this->request])->subject('Заявка с Vikna-mobile');
    }
}
