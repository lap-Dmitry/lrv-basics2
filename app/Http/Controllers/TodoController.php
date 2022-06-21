<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function todo()
    {
        $todo = new Todos();
        return view('todo', ['todo' => $todo->all()]);
    }

    public function todo_search($id = null)
    {
        $todo = new Todos();
        return view('todo_search', ['todo_search' => $todo::find($id)]);
    }

    public function add_task(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:3|max:100'
        ]);

        $todo = new Todos();
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');

        $todo->save();

        return redirect()->route('todo');
    }
}
