<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Inertia\Inertia;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::where('user_id', auth()->user()->id)->get();

        return Inertia::render('todos/index', compact('todos'));
    }
}
