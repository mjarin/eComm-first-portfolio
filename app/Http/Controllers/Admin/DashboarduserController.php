<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;


class DashboarduserController extends Controller
{
    public function users(){

        $users =User::all();

        return view('admin.users.view-users',compact('users'));
    }

    public function viewUser($id){

        $user=User::find($id);

        Return view('admin.users.view-single-user',compact('user'));

    }
}
