@extends('pages.templates.template')

@section('content')
    <h4 class="center">Cadastrar Nova Categoria</h4>
        <div class="card">
            <form action="{{ route('categories.store')}}" method="POST" class="card-content">
                    @csrf
                    @include('pages.categories._partials.form')
                    <div>
                        <button type="submit" class=" btn green accent-4">Cadastrar</button>
                    </div>
            </form>
        </div>
@endsection