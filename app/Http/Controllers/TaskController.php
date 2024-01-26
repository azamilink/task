<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskRequest;


class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'task' => new Task,
            'tasks' => Task::orderBy('id', 'desc')->paginate(6)
        ]);
    }

    public function store(TaskRequest $request)
    {
        Task::create($request->all());
        return back();
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(TaskRequest $request, $id)
    {
        Task::find($id)->update(['list' => $request->list]);
        return redirect('tasks');
    }

    public function destroy($id)
    {
        Task::find($id)->delete();
        return back();
    }
}
