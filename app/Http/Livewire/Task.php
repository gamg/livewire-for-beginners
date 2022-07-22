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

    public function edit(TaskModel $task)
    {
        $this->task = $task;
    }

    public function save()
    {
        $this->validate();

        $this->task->save();

        $this->mount();

        $this->emitUp('taskSaved', 'Tarea guardada correctamente!');
    }

    public function delete($id)
    {
        $taskToDelete = TaskModel::find($id);

        if(!is_null($taskToDelete)) {
            $taskToDelete->delete();
            $this->emitUp('taskSaved', 'Tarea eliminada correctamente!');
            $this->mount();
        }
    }

    public function render()
    {
        return view('livewire.task');
    }
}
