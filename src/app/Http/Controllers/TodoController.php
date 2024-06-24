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
}
