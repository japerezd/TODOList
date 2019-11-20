<?php

namespace App\Http\Controllers\User;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CalendarUserController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id','=',Auth::user()->id);
        return view('user.calendar.index', compact('tasks'));
    }
}
