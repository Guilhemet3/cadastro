@extends('layout.app', ["current" => "home"])

@section('body')
    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Produtos</h5>
                        <p class="card-text">
                            Aqui você casdastra todos os seus produtos.
                        </p>
                        <a href="{{ route('produtos.index') }}" class="btn btn-primary">Cadastre seus produtos</a>
                    </div>
                </div>
                <div class="card border border-primary">
                        <div class="card-body">
                            <h5 class="card-title">Cadastro de Categorias</h5>
                            <p class="card-text">
                                Cadastre as categorias dos seus produtos.
                            </p>
                            <a href="{{route('categorias.index')}}" class="btn btn-primary">Cadastre de categorias</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection