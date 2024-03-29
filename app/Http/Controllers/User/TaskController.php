<?php

namespace App\Http\Controllers\User;

use App\Task;
use App\User;
use DateTime;
use Carbon\Carbon;
use App\Exports\CsvExport;
use App\Imports\CsvImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class TaskController extends Controller
{

    public function index()
    {
        $otherTime = date("Y-m-d");
        $otherTimeFinal = DateTime::createFromFormat('Y-m-d',$otherTime);
        $tasks = Task::where('user_id','=',Auth::user()->id)->get();
        return view('user.tasks.index',compact('tasks','otherTime','otherTimeFinal'));
    }

    public function create()
    {
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

    public function update(Request $request,$id)
    {


        $this->validate($request,[
            'name'     => 'required',
            'notes'    => 'required',
            'schedule' => 'required',
            'status'   => '',
        ]);

        if (isset($request->status)) {
            $status = true;
        } else {
            $status = false;
        }
        $task = Task::find($id);
        $task->name = $request->name;
        $task->user_id = Auth::user()->id;
        $task->notes = $request->notes;
        $task->schedule = $request->schedule;
        $task->status = $status; //false <- thats equals TODO (no done yet)
        // $task->user_id = User::find($id);

        $task->save();

        return redirect()->route('user.tasks.index')->with('successMsg','Taks sucessfully edited.');
    }

    public function destroy($id)
    {
        $tasks = Task::find($id);
        $tasks->delete();

        return redirect()->back()->with('successMsg','Task successfully deleted.');
    }


    public function csv_export()
    {
        // return Excel::download(new CsvExport, 'example.csv');
        return (new CsvExport)->download('tasks.csv');

    }

    public function csv_import()
    {
        Excel::import(new CsvImport, request()->file('file'));
        return redirect()->back()->with('successMsg','Tasks successfully imported.');
    }
} 

