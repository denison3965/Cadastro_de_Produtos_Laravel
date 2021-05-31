@extends("layouts.app", ["current" => "produtos"])

@section('body')
    <form action="/produtos/{{$produto->id}}" method="POST">
        @csrf
        <div class="form-group mt-3">
            <label for="nomeProduto mt-3 ">Nome do Produto</label>
            <input style="margin-bottom: 10px" value={{$produto->nome}} id="nomeProduto" class="form-control" name="nomeProduto" 
                type="text" placeholder="Nome">

            <label for="preco mt-3">Peço</label>
            <input style="margin-bottom: 10px" value={{$produto->preco}} id="preco" class="form-control" name="precoProduto" 
                type="text" placeholder="Peço">

            <label for="estoque mt-3">Quatidade em estoque</label>
            <input style="margin-bottom: 10px" value={{$produto->estoque}} id="estoque" class="form-control" name="estoqueProdutos" 
                type="text" placeholder="Estoque">
            
            <label for="departamento mt-3">Departamento</label>

            <select class="form-select" id="departamento" name="categoria" aria-label="Default select example"  placeholder="Selecione uma categoria">

                @foreach ($categorias as $categoria)
                    <option {{$produto->categoria_id == $categoria->id ? "selected" : null }} value="{{$categoria->id}}">{{$categoria->nome}}</option>
                @endforeach
            </select>
                    
        </div>
        <button type="submit" class="btn btn-primary btn-sm mt-3">Editar</button>
    </form>

    </form>
@endsection