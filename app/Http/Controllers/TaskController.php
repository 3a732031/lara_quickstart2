<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    //
    public function index()
    {
        //
        return view('tasks.index');
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
    public function destroy($id)
    {
        //
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
