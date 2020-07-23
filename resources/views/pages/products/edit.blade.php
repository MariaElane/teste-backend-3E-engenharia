@extends('pages.templates.template')

@section('content')
    <h4 class="center">Cadastrar Novo Produto</h4>
        <div class="card">
            <form action="{{ route('products.update', $product->id)}}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('pages.products._partials.form')
                    <div>
                        <button type="submit" class=" btn green accent-4">Editar</button>
                    </div>
            </form>
        </div>
@endsection