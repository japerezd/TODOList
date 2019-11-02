<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.manageusers.index',compact('users'))->with('users',User::paginate(10));

    }
  
    public function create()
    {
        return view('admin.manageusers.create');
    }

    public function store(Request $request)
    {   
        $this->validate($request,[
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required',
        ]);
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        
        return redirect()->route('admin.users.index')->with('successMsg','User successfully created.');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        if(Auth::user()->id == $id){
            return redirect()->route('admin.users.index')->with('warning','You are not allowed to edit yourself.');
        }
        return view('admin.manageusers.edit',compact("user",'roles'));
    }


    public function update(Request $request, $id)
    {

        $this->validate($request,[
            "name"     => 'required',
            "email"    => 'required|email',
            "password" => 'required',
        ]);
        if(Auth::user()->id == $id){
            return redirect()->route('admin.users.index')->with('warning','You are not allowed to edit yourself.');;
        }
        $user = User::find($id);
        

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.index')->with('successMsg','User successfully edited.');
    }

    public function destroy($id)
    {
        if(Auth::user()->id == $id){
            return redirect()->route('admin.users.index')->with('warning','You are not allowed to delete yourself.');;
        }

        $user = User::find($id);
        if($user){
            $user->roles()->detach();
            $user->delete();
            return redirect()->route('admin.users.index')->with('successMsg','User successfully deleted.');
        }

        return redirect()->route('admin.users.index')->with('successMsg','This user can not be deleted.');
    }
}
