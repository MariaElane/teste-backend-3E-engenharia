@extends('pages.templates.template')

@section('content')
   <div class="card">
        <h4 class="header center-align">Vincular Categoria para o Produto: {{$product->name}}</h4>
        @include('pages.includes.alerts')
       
        <form action="{{ route('products.categories.attach', $product->id) }}" method="POST" class="container">
            <h5>Nome:</h5>
            @csrf

            @foreach ($categories as $category)
                <p>
                    <label>
                    <input type="checkbox" name="categories[]" value="{{ $category->id }}"/>
                    <span>{{ $category->name}}</span>
                    </label>
                </p>
            @endforeach
            <button type="submit" class="btn btn-success">Vincular</button>
           
        </form>
       </div>
   </div>
   <div>
       @if (@isset($filters))
         {!! $categories->appends($filters)->links() !!}
       @else
         {!! $categories->links() !!}
       @endif
    
   </div>
</div>
@endsection