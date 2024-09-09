<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = session('todos', []);
        return view('todos.index', compact('todos'));
    }

    public function store(Request $request)
    {
        $todos = session('todos', []);
        $todos[] = $request->input('task');
        session(['todos' => $todos]);
        return redirect()->route('todos.index');
    }

    public function edit($id)
    {
        $todos = session('todos', []);
        $todo = $todos[$id] ?? null;
        return view('todos.edit', compact('todo', 'id'));
    }

    public function update(Request $request, $id)
    {
        $todos = session('todos', []);
        $todos[$id] = $request->input('task');
        session(['todos' => $todos]);
        return redirect()->route('todos.index');
    }

    public function destroy($id)
    {
        $todos = session('todos', []);
        unset($todos[$id]);
        session(['todos' => array_values($todos)]);
        return redirect()->route('todos.index');
    }
}
