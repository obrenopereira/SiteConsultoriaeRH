<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Cases;

class Contato extends Mailable
{
    use Queueable, SerializesModels;
    public $naem;
    public $email;
    public $mensagem;
    public $type;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $mensagem, $type)
    {
        $this->name     = $name;
        $this->email    = $email;
        $this->mensagem = $mensagem;
        $this->type     = $type;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $cases = new Cases();
        $cases = $cases->getCases();
        $view  = 'mails/email-contact';
        if($this->type == 'feedback') {
            $view = 'mails/email-contact-feedback';
        }
        return $this->from('contato@tsconsultoria.com.br', 'Contato')
        ->subject('TS Consultoria - Email de Contato')
        ->view($view)
        ->with([
            'nameUser'  => $this->name,
            'email'     => $this->email,
            'mensagem'  => $this->mensagem,
            'cases'     => $cases,
        ]);
    }
}
