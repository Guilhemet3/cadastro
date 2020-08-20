@extends('layout.app', ["current" => "categorias"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="{{route('categorias.update', $categorias->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <label for="nomeCategoria">Nome da Categoria</label>
                    <input type="text" class="form-control" id="" name="nome" value="{{$categorias->nome}}" placeholder="Departamento">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection