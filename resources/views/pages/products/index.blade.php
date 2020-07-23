@extends('pages.templates.template')

@section('content')
<div class="row">
    <h4 class="header center-align">Gestão de Produtos</h4>

    <form action="{{ route('products.search') }}" method="POST" class="row">
        @csrf
        <div class="input-field col l12 m12 s12">
            <input placeholder="Pesquisar Produto" 
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
            <a href="{{route('products.index')}}" class="btn btn-block blue darken-3"><i class="material-icons left">refresh</i>Limpar Filtros</a>
        </div>
        <div class="input-field col  l4 m4 s12">
            <a href="{{route('products.create')}}" class="btn btn-block  green accent-4"><i class="material-icons left">add</i>Novo Produto</a>
        </div>
    </form>
    
    <table class="striped  col l12 m12 s12">
        @include('pages.includes.alerts')
        <thead>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th width="350">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>
                        <img src="{{ url("storage/{$product->image}") }}" alt="{{ $product->title}}" style="max-width: 90px">
                    </td>
                    <td>{{ $product->name}}</td>
                    <td>{{ $product->description}}</td>
                    <td style="width: 10px">
                        <a href=" {{ route('products.categories', $product->id) }}" class="btn blue darken-3">Vincular Categorias</a>
                        <a href=" {{ route('products.edit', $product->id) }}" class="btn green accent-4">Editar</a>
                        <a href=" {{ route('products.show', $product->id) }}" class="btn yellow darken-2">Ver</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if (@isset($filters))
    {!! $products->appends($filters)->links() !!}
    @else
        {!! $products->links() !!}
    @endif
</div>

@endsection