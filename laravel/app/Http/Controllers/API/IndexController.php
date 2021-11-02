<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todos;
use App\Http\Resources\TodosCollection;

class IndexController extends Controller
{
    public function index(){
        $todos = Todos::get();
        return TodosCollection::collection($todos);
    }

    public function done_all_todos(Request $req){
        foreach($req->params as $par){
            if($par['todo_check'] === 1){
                Todos::where('todo_id', $par['todo_id'])->update(['todo_complete' => 1]);
            }
        }

        $todos = Todos::get();
        return TodosCollection::collection($todos);
    }

    public function del_todo(Request $req){
        Todos::where('todo_id', $req->id)->delete();
        $todos = Todos::get();
        return TodosCollection::collection($todos);
    }

    public function del_all_todos(Request $req){
        foreach ($req->params as $par){
            Todos::where('todo_id', $par['todo_id'])->delete();
        }
        $todos = Todos::get();
        return TodosCollection::collection($todos);
    }

    public function add_todo(Request $req){
        $todo = new Todos;
        $todo->todo_info = $req->info;
        $todo->todo_check = 0;
        $todo->todo_complete = 0;
        $todo->save();

        $todos = Todos::get();
        return TodosCollection::collection($todos);
    }

    public function edit_todo(Request $req){
        $todo_info = $req->params['info'];
        $todo_id = $req->params['id'];
        Todos::where('todo_id', $todo_id)->update(['todo_info' => $todo_info]);
        
        $todos = Todos::get();
        return TodosCollection::collection($todos);
    }
}
