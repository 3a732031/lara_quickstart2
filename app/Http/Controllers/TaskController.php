<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        //return view('tasks.index');
        $tasks = Task::where('user_id', $request->user()->id)->get();
        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        Auth::user()->tasks()->create([
            'name' => $request->name,
        ]);

        return redirect('/tasks');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy(Request $request, Task $task)
    {
        //授權
        $this->authorize('destroy', $task);

        //刪除任務
        $task->delete();
        return redirect('/tasks');
    }

    public function __construct()
    {
        $this->middleware('auth');

    }

}
