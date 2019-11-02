<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImpersonateController extends Controller
{
    public function index($id)
    {
        $user = User::where('id',$id)->first();
        //si un usuario ha sido encontrado
        if($user){
            session()->put('impersonate',$user->id);
        }

        return redirect('/user/dashboard');
    }

    public function destroy()
    {
        session()->forget('impersonate');

        return redirect('/admin/dashboard');
    }
}
