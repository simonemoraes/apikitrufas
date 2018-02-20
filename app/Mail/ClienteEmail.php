<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ClienteEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $dados;
    private $tipo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($tipo, $dados)
    {
        $this->tipo = $tipo;
        $this->dados = $dados;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->tipo === 'CLIENTE'){

            return $this->from($this->dados['email'], $this->dados['nome'])
                ->subject("Cadastro de Cliente")
                ->view('emailCliente',compact('dados',$this->dados));

        }

        return null;
    }
}
