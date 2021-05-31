@extends('layouts.app', ["current" => "produtos" ])

@section('body')
    <h4>Nova Produto</h4>

    <form action="/produtos" method="POST">
        @csrf
        <div class="form-group mt-3">
            <label for="nomeProduto mt-3 ">Nome do Produto</label>
            <input style="margin-bottom: 10px" id="nomeProduto" class="form-control" name="nomeProduto" 
                type="text" placeholder="Categoria">

            <label for="preco mt-3">Peço</label>
            <input style="margin-bottom: 10px" id="preco" class="form-control" name="precoProduto" 
                type="text" placeholder="Categoria">

            <label for="estoque mt-3">Quatidade em estoque</label>
            <input style="margin-bottom: 10px" id="estoque" class="form-control" name="estoqueProdutos" 
                type="text" placeholder="Categoria">
            
            <label for="departamento mt-3">Departamento</label>

            <select class="form-select" id="departamento" name="categoria" aria-label="Default select example"  placeholder="Selecione uma categoria">
                <option selected value="0">Selecione a categoria do produto</option>

                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                @endforeach
            </select>
                    
        </div>
        <button type="submit" class="btn btn-primary btn-sm mt-3">Salvar</button>
        <button type="submit" class="btn btn-danger btn-sm mt-3">Deletar</button>
    </form>
@endsection