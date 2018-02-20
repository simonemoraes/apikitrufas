<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="row">
    <div class="col-sm-6 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3>Email de Contato</h3>
            </div>
            <div class="panel-body">
                <p><strong>Nome:&nbsp;&nbsp;</strong>{{$dados['nome']}}</p>
                <p><strong>Telefone:&nbsp;&nbsp;</strong>{{$dados['telefone']}}</p>
                <p><strong>Email:&nbsp;&nbsp;</strong>{{$dados['email']}}</p>
                <p><strong>Mensagem:&nbsp;&nbsp;</strong>{{$dados['mensagem']}}</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

