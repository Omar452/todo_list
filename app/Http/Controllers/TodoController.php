<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Inertia\Inertia;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get();

        return Inertia::render('todos/index', compact('todos'));
    }

    public function store(Request $request) {
        $request->validate([
            'content' => ['required', 'max:100'],
            'user_id' => ['exists:user, id']
        ]);
        
        $todo = Todo::create([
            'content' =>  $request['content'],
            'user_id' => auth()->user()->id 
        ]);


        return redirect()->back()->with('success','todo created successfully');
    }

    public function update() {
        
    }

    public function edit() {
        
    }

    public function destroy() {
        
    }
}
