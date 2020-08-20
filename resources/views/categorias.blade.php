@extends('layout.app', ["current" => "categorias"])

@section('body')    
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Categorias</h5>
            @if(count($categorias)>0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome da Categoria</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $categoria)
                            <tr>
                                <td> {{$categoria->id}} </td>
                                <td> {{$categoria->nome}} </td>
                                <td> 
                                    <a href="{{route('categorias.destroy', $categoria->id)}}" class="btn btn-sm btn-primary">Apagar</a>
                                    <a href="{{route('categorias.edit', $categoria->id)}}" class="btn btn-sm btn-danger">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="card-footer">
            <a href="{{route('categorias.create')}}" class="btn btn-sm btn-primary" role="button">Nova Categoria</a>
        </div>
    </div>   
@endsection