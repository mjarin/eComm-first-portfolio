<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;

class UserController extends Controller
{
    public function login(Request $req){

// check if user info matches with db info
        
    // $user= User::where(['email'=>$req->email])->first();

    // if(!$user||!Hash::check($req->password,$user->password))
    //   {
    //       return "Username or Password is not matching";
    //   }
    //   else{
         
    //     $req->session()->put('user',$user);
    //     return redirect("/");
    //   }

    }

    public function register(Request $req){

        $user=new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();

     return redirect('/login')->with('status', 'You are registered now');
    }
}
