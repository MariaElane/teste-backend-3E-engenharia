@include('pages.includes.alerts')
<div class="row ">
    <div class="input-field col l12 m12 s12">
        <input  type="text"
                name="name" 
                value="{{ $category->name ?? old('name') }}"
                class="validate" 
                placeholder="Nome:">
        <label for="name">Nome</label>
    </div>

    <div class="input-field col l12 m12 s12">
        <textarea        
                        name="description" 
                        class="materialize-textarea" 
                        placeholder="Descrição:">
         {{ $category->description ?? old('description') }}
        </textarea >
        <label for="description">Descrição</label>

    </div>
    
</div>

