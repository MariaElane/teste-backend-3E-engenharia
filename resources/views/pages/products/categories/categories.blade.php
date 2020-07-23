@extends('pages.templates.template')

@section('content')

   <div class="card">
       <h4 class="header center-align">Categorias vinculadas ao produto: {{$product->name}}</h4>
       <div class="center">
           <a href="{{  route('products.categories.available', $product->id) }}" class="btn">Adicionar nova categoria</a>
       </div>

       <div>
        <table class="striped highlight centered responsive-table">
            @include('pages.includes.alerts')
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th width="50">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name}}</td>
                        <td>{{ $category->description}}</td>
                        <td style="width: 10px">
                            <a href=" {{ route('products.category.detach', [$product->id, $category->id]) }}" class="btn btn-danger">Remover</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       </div>
   </div>
   <div>
       @if (@isset($filters))
         {!! $categories->appends($filters)->links() !!}
       @else
         {!! $categories->links() !!}
       @endif
   </div>
@endsection