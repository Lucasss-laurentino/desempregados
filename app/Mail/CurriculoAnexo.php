<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CurriculoAnexo extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public $vagaTitulo, public $vagaId, public $curriculo)
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('lucaselorenzohenrique@gmail.com')
                ->subject('Candidato para a vaga de "'.$this->vagaTitulo.'".')
                ->attach($this->curriculo)
                ->markdown('email.emailCurriculo');
    }
}
