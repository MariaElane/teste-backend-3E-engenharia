@extends('pages.templates.template')

@section('content')
    <h4 class="center">Cadastrar Novo Produto</h4>
        <div class="card">
            <form class="card-content" action="{{ route('products.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('pages.products._partials.form')
                    <div>
                        <button type="submit" class=" btn green accent-4">Cadastrar</button>
                    </div>
            </form>
        </div>
@endsection