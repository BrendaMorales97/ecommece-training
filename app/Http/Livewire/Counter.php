<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class Counter extends Component
{

    public $name;

    public $title;

    protected $listeners = ['deleteTask'];

    public function mount($title)
    {
        $this->title = $title;
    }

    public function addTask()
    {
        Task::create(['name' => $this->name]);
        $this->name = "";
    }

    public function deleteTask($id)
    {
        session()->flash('message', 'La tarea se ha eliminado');
        Task::destroy($id);
    }

    public function render()
    {
        return view('livewire.counter', [
            'tasks' => Task::all()
        ]);
    }
}
