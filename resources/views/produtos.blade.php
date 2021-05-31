@extends('layouts.app', ["current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Categorias</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome do produto</th>
                        <th>Preço</th>
                        <th>Estoque</th>
                        <th>Categoria</th>
                        <th>Ação</th>
                    </tr>

                    
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{$produto->id}}</td>
                                <td>{{$produto->nome}}</td>
                                <td>{{$produto->preco}}</td>
                                <td>{{$produto->estoque}}</td>
                                    @foreach ($categorias as $categoria)
                                        @if ($categoria->id == $produto->categoria_id)
                                            <td>{{$categoria->nome}}</td>
                                        @endif
                                    @endforeach
                                <td>
                                    <a href="/produtos/editar/{{$produto->id}}" class="btn btn-sm btn-primary">Editar</a>
                                    <a href="/produtos/apagar/{{$produto->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                </td>
                            
                            </tr>
                        @endforeach        

                </thead>
            </table>
        </div>
        <div class="card-footer">
            <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
        </div>
    </div>
@endsection()
