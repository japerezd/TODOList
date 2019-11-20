<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ImpersonateController extends Controller
{
    public function index($id)
    {
        $user = User::where('id',$id)->first();
        //si un usuario ha sido encontrado
        if($user){
            session()->put('impersonate',$user->id);
        }
        //if user is an admin
        if($user->hasAnyRole('admin') || Auth::user()->hasAnyRole('admin')){
            session()->forget('impersonate');
            return redirect()->route('admin.users.index')->with('warning','You are not allowed to impersonate admins.');
        }

        return redirect('/user/dashboard');
    }

    public function destroy()
    {
        session()->forget('impersonate');

        return redirect('/admin/dashboard');
    }
}
