@extends('pages.templates.template')

@section('content')
    <h4>Detalhes da Categoria <b>{{ $category->name }}</b></h4>
    <div class="card">
        <div class="card-content">
        @include('pages.includes.alerts')
            <ul>
                <li><blockquote><strong>Nome: </strong>{{ $category->name }}</blockquote></li>
                <li><blockquote><strong>Descrição: </strong>{{ $category->description }}</blockquote></li>
            </ul>
            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn red darken-4"> Deletar Categoria: {{ $category->name }}</button>
            </form>
        </div>
    </div>
@endsection