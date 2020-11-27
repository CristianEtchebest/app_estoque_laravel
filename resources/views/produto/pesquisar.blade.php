<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesquisa de Produtos | Laravel</title>

    <link rel="stylesheet" href="../../css/app.css">
</head>
<body>
<div class="container">
    <h1 class="mt-2">Pesquisa de produtos</h1>
    @if(!empty($mensagem))
        <div class="alert alert-success mt-2">{{$mensagem }}</div>
    @endif
    <form action="/produtos/pesquisar" method="post" class="form-inline mt-2">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" class="form-control ml-2" />
        </div>
        <input type="submit" class="btn btn-primary ml-2" value="Pesquisar" />
        <a href="/produtos/inserir" class="btn btn-success">Cadastrar Novo</a>

    </form>


    @if(count($produtos) == 0)
        <div class="alert alert-danger mt-2">Nenhum produto encontrado com essa descrição!</div>
    @else
        <table class="table mt-2 text-center">
            <tr>
                <th>Id</th>
                <th class="text-left">Descrição</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Data de vencimento</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{$produto->id}}</td>
                    <td>{{$produto->descricao}}</td>
                    <td>{{$produto->quantidade }}</td>
                    <td>{{$produto->valor }}</td>
                    <td>{{$produto->data_vencimento }}</td>
                    <td><a href="/produtos/excluir/{{$produto->id}}"><button class="btn btn-danger">Excluir</button></a></td>
                    <td><a href="/produtos/alterar/{{$produto->id}}"><button class="btn btn-warning">Alterar</button></a></td>
                </tr>
            @endforeach
        </table>
    @endif
</div>
</body>
</html>