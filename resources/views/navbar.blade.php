<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li @if($current == "home")class="nav-item active" @else class="nav-item "@endif>
                <a class="nav-link" href="/">Home </a>
            </li>
            <li @if($current == "produtos")class="nav-item active" @else class="nav-item "@endif>
              <a class="nav-link" href="{{route('produtos.index')}}">Produtos </a>
            </li>
            <li @if($current == "categorias")class="nav-item active" @else class="nav-item "@endif>
                <a class="nav-link" href="{{route('categorias.index')}}">Categorias </a>
            </li>
          </ul>  
        </div>
      </nav>