@extends('pages.templates.template')

@section('content')
    <h4>Detalhes da Categoria <b>{{ $product->name }}</b></h4>
    <div class="card">
        @include('pages.includes.alerts')
            <ul>
                <li><blockquote><strong>Nome:</strong>{{ $product->name }}</blockquote></li>
                <li><blockquote><strong>Preço:</strong>{{ $product->price }}</blockquote></li>
                <li><blockquote><strong>Descrição:</strong>{{ $product->description }}</blockquote></li>
            </ul>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn red darken-4"> Deletar Categoria: {{ $product->name }}</button>
            </form>
    </div>
@endsection