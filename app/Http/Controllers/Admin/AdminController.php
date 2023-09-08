<?php

namespace App\Http\Controllers\Admin;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Session;


class AdminController extends Controller
{

    public function dashboard(){
        return view('admin.admin_content');
    }


    public function adminLoginForm(){

        if(!Auth::guard('admin')->check())
        {
            return view('admin.login.login-form');
        }else{
            return redirect('/admin/dashboard');
            
        }

    }

    
    public function adminLogin(Request $request){

        $request->validate([

            'email' => 'required|email',
            'password' => 'required|max:11',

        ]);

    if(Auth::guard('admin')->attempt(['email' => $request->email, 
    'password' => $request->password])){
        // return redirect('/admin/dashboard')->with('status','Admin loggedin successfully');
        return redirect('/admin/dashboard');
    }
    else{

            Session::flash('error-msg', 'Email or Password Incorrect');
            return redirect()->back();

        }

    }

    public function adminLogout(){

        Auth::guard('admin')->logout();
        return redirect('admin/login');
        // return redirect('admin/login')->with('status','Admin Loggedout Successfully');


    }






    // public function adminContent(Request $req){

    //     // return view('admin.admin_content');

    //     $email = $req->input('email') ;
    //     $password =md5($req->input('password'));

    //     $result =Admin::where('email',$email)->where('password',$password)->first();

    //     if($result)
    //     {
    //         Session::put('admin_id', $result->id);
    //         Session::put('admin_name', $result->name);
    //         return redirect('/admin/dashboard')->with(['status'=>'Admin in successfully']);
    //     }
    //     else
    //     {
    //         Session::put('status','Email or Password Invalid');
    //         return redirect('/admin/login');
    //     }

        

    // }

    // public function adminLogout(){

    //     Session::flash();
    //      return redirect('/admin/login');
    // }

   
}
