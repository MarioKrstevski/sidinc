<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Http\Request;

class Test {
    private  $name;
    public function __construct($a)
    {

        $this->name = $a;

    }
}
class HomeController extends Controller
{
    public function index()
    {
//        $tasks = array();
//        $tasks[0] = new Test('ime');
        $tasks = Task::all();
        return view('user.home')->with('tasks', $tasks);
    }
}
