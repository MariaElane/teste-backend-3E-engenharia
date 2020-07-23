@extends('pages.templates.template')

@section('content')

    <h4 class="header center-align">Gestão de Categorias</h4>

    <form action="{{ route('categories.search') }}" method="POST" class="row">
        @csrf
        <div class="input-field col l12 m12 s12">
            <input placeholder="Pesquisar Categoria" 
                    name="filter"  
                    type="text" 
                    class="input-field"
                    value="{{$filters['filter'] ?? '' }}">
            <label for="filter">Pesquisar</label>
           
        </div>
        <div class="input-field col  l4 m4 s12">
            <button type="submit" class=" btn btn-block yellow darken-2"><i class="material-icons left">search</i> Pesquisar</button>
        </div>
        <div class="input-field col l4 m4 s12">
            <a href="{{route('categories.index')}}" class="btn btn-block blue darken-3"><i class="material-icons left">refresh</i>Limpar Filtros</a>
        </div>
        <div class="input-field col  l4 m4 s12">
            <a href="{{route('categories.create')}}" class="btn btn-block  green accent-4"><i class="material-icons left">add</i>Nova Categoria</a>
        </div>
    </form>
    
    <table class="striped highlight centered responsive-table">
        @include('pages.includes.alerts')
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th width="250">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name}}</td>
                    <td>{{ $category->description}}</td>
                    <td style="width: 10px">
                        <a href=" {{ route('categories.edit', $category->id) }}" class="btn green accent-4">Editar</a>
                        <a href=" {{ route('categories.show', $category->id) }}" class="btn yellow darken-2">Ver</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if (@isset($filters))
    {!! $categories->appends($filters)->links() !!}
    @else
        {!! $categories->links() !!}
    @endif

@endsection