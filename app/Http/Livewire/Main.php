<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Main extends Component
{
    public $welcome = "Bienvenid@, estas son tus tareas";

    protected $listeners = ['taskSaved'];

    public function taskSaved($message)
    {
        session()->flash('message', $message);
    }

    public function render()
    {
        return view('livewire.main');
    }
}
