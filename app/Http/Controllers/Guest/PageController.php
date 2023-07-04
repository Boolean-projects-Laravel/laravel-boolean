<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Todolist;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $arrTodos = Todolist::all();
        return view('todolists.index', compact('arrTodos'));
    }
}