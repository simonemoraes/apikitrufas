<?php

namespace App\Http\Controllers\Api;

use App\Mail\ClienteEmail;

use App\model\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ClienteController extends Controller
{

    public function enviarEmail(Request $request){

        $retorno = 'error';

        $cliente = $request->all();

        if(isset($cliente)){

            $result = \App\model\Cliente::create($cliente);

            if($result['id'] > 0){
                Mail::to('contato@kitrufas.com.br')->send(new ClienteEmail('CLIENTE',$cliente));

                $retorno = "sucesso";
            }

        }

        return response()->json($retorno);
    }
}
