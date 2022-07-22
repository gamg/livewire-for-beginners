<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task as TaskModel;

class Task extends Component
{
    public $tasks;
    public TaskModel $task;

    protected $rules = ['task.text' => 'required|max:40'];

    public function mount()
    {
        $this->tasks = TaskModel::orderBy('id', 'desc')->get();
        $this->task = new TaskModel();
    }

    public function updatedTaskText()
    {
        $this->validate(['task.text' => 'max:40']);
    }

    public function save()
    {
        $this->validate();

        $this->task->save();

        $this->mount();

        $this->emitUp('taskSaved', 'Tarea guardada correctamente!');
    }

    public function render()
    {
        return view('livewire.task');
    }
}
