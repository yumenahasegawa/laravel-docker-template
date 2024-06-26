<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo; 

class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo();  //Modelのインスタンス化
        $todoList = $todo->all();

        return view('todo.index', ['todoList' => $todoList]);
    }

    public function create()
    {
        return view('todo.create'); 
    }

    public function store(Request $request)
    {
        // $content = $request->input('content'); // 追記
        $inputs = $request->all(); 

        // 1. todosテーブルの1レコードを表すTodoクラスをインスタンス化
        $todo = new Todo();
        // 2. Todoインスタンスのカラム名のプロパティに保存したい値を代入
        $todo->fill($inputs);
        // 3. Todoインスタンスの`->save()`を実行してオブジェクトの状態をDBに保存するINSERT文を実行
        $todo->save();

        return redirect()->route('todo.index'); // 追記

    }

    public function show($id)
    {
        $model = new Todo();
        $todo = $model->find($id);

        return view('todo.show', ['todo' => $todo]);
    }
}
