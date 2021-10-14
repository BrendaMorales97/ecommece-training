<div>
    <h2 class="text-center mt-10">Agergar nuevo producto</h2>
    
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <form wire:submit.prevent="save">

                <label for="">Nombre del producto</label>
                <input type="text" wire:model="name" class="form-control mb-2">
                @error('name') <p class="error mb-2">{{ $message }}</p> @enderror

                <label for="">Descripción</label>
                <textarea cols="20" rows="5" wire:model="description" class="form-control mb-2"></textarea>
                @error('description') <p class="error mb-2">{{ $message }}</p> @enderror

                <label for="">Precio</label>
                <input type="text" wire:model="price" class="form-control mb-2">
                @error('price') <p class="error mb-2">{{ $message }}</p> @enderror

                <label for="">Imagen</label>
                <input type="file" wire:model="thumbnail" class="form-control mb-2">
                @if ($thumbnail)
                    <img src="{{ $thumbnail->temporaryUrl() }}" class="img-fluid mb-2" alt="">
                @endif
                @error('thumbnail') <p class="error mb-2">{{ $message }}</p> @enderror

                <button type="submit" class="btn btn-outline-primary btn-blick">Guardar imagen</button>
            </form>
        </div>
    </div>
</div>