<div>
    @if (session()->has('message'))
        <p>{{ session('message') }}</p>
    @endif

    @foreach ($tasks as $t)
        @livewire('list-task', ['task' => $t], key($t->id))
    @endforeach

    <hr>

    <p>{{ $name }}</p>

    <input wire:model.="name" type="text">

    @error('name')
        <span class="error">{{ $message }}</span>
    @enderror

    <button wire:click="addTask">Agregar</button>
</div>
