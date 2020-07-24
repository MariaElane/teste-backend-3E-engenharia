@extends('pages.templates.template')

@section('content')
    <h4 class="center">Editar a Categoria {{$category->name}}</h4>
    
    <div class="card">
        <form action="{{ route('categories.update', $category->id)}}" class="form card-content" method="POST">
                @csrf
                @method('PUT')
                    @include('pages.categories._partials.form')
                    <div>
                        <button type="submit" class=" btn green accent-4">Editar</button>
                    </div>
        </form>
    </div>
@stop