@include('pages.includes.alerts')
<div class="row ">
    <div class="input-field col l6 m6 s12">
        <input  type="text"
                name="name" 
                value="{{ $product->name ?? old('name') }}"
                class="validate" 
                placeholder="Nome:">
        <label for="name">Nome</label>
    </div>

    <div class="input-field col l6 m6 s12">
        <label for="price">Preço</label>
        <input type="text" name="price" 
                           value="{{ $product->price ?? old('price') }}"
                           class="validate" 
                           placeholder="Preço:">
    </div>

    <div class="input-field col l12 m12 s12">
        <textarea       
                        name="description" 
                        class="materialize-textarea" 
                        placeholder="Descrição:">
         {{ $product->description ?? old('description') }}
        </textarea >
        <label for="description">Descrição</label>

    </div>

    <div class="l12 m12 s12">
        <label for="image">  imagem do produto:</label>
        <input type="file"
               name="image"
               class="validate"  >
    </div>
    
</div>

