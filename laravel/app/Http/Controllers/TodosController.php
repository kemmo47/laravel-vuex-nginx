<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;

class TodosController extends Controller
{
    public function home_laravel(){
        $title="Hello World";
        $todos = Todos::orderby('todo_id', 'asc')->get();
        return view('layouts')->with(compact('title'));
    }
}
