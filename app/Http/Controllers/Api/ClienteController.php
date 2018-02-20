<?php

namespace App\Http\Controllers\Api;

use App\Mail\ClienteEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ClienteController extends Controller
{

    public function enviarEmail(Request $request){

        $cliente = $request->all();

        $result = \App\model\Cliente::create($cliente);

        // Enviar o primeiro email
        Mail::to('contato@kitrufas.com.br')->send(new ClienteEmail('CLIENTE',$result));

        return response()->json($result);
    }
}
