<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo; //追記

class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo();  //Modelのインスタンス化
        $todoList = $todo->all();

        return view('todo.index', ['todoList' => $todoList]); // 修正
    }

    public function create()
    {
        // dd('新規作成画面のルート実行！');
        return view('todo.create'); // 追記
    }

    public function store(Request $request)
    {
        // dd('新規作成のルート実行！');
        $content = $request->input('content'); // 追記

         // 1. todosテーブルの1レコードを表すTodoクラスをインスタンス化
    $todo = new Todo(); 
    // 2. Todoインスタンスのカラム名のプロパティに保存したい値を代入
    $todo->content = $content;
    // 3. Todoインスタンスの`->save()`を実行してオブジェクトの状態をDBに保存するINSERT文を実行
    $todo->save();

    return redirect()->route('todo.index'); // 追記

    }
}
