<?php

use Illuminate\Database\Seeder;

class ClienteTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\model\Cliente::class, 5)
            ->create()
            ->each(function ($cliente) {
                $model = \App\model\Cliente::create([
                    'nome' => $cliente->nome,
                    'email' => $cliente->email,
                    'telefone' => $cliente->telefone,
                    'mensagem' => $cliente->mensagem
                ]);
                $cliente->save();
                $model->save();

            });
    }
}
