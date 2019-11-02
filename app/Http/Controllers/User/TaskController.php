<?php

namespace App\Http\Controllers\User;

use App\Task;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $otherTime = date("Y-m-d");
        $tasks = Task::where('user_id','=',Auth::user()->id)->get();
        return view('user.tasks.index',compact('tasks','otherTime'))->with('tasks',Task::paginate(5));
    }

    public function create()
    {
        // $user = User::all();
        return view('user.tasks.create',compact('user'));
    }

    public function store(Request $request)
    {
       
        $this->validate($request,[
            'name'     => 'required',
            'notes'    => 'required',
            'schedule' => 'required',
        ]);

        $task = new Task();
        $task->name = $request->name;
        $task->user_id = Auth::user()->id;
        $task->notes = $request->notes;
        $task->schedule = $request->schedule;
        $task->status = 0; //false <- thats equals TODO (no done yet)
        // $task->user_id = User::find($id);

        $task->save();

        return redirect()->route('user.tasks.index')->with('successMsg','Taks sucessfully created.');
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('user.tasks.edit',compact('task'));
    }

    public function update($id)
    {
        
    }

    public function destroy($id)
    {
        
    }
} 

