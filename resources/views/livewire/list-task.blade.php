<div>
    <p>{{ $task->name }}</p>
    <button wire:click="$emit('deleteTask', {{ $task->id }})">Eliminar</button>
</div>
