<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;
use validate;

class loginController extends Controller
{
    //
    public function loginPage(){
        return view('login');
    }

    public function checkLogin(Request $request)
    {
        //for validation
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|alphaNum|min:4'
        ]);
        //Authendication
        $user_data=array(
        'email'=>$request->get('email'),
        'password'=>$request->get('password')
    );
        if(Auth::attempt($user_data))
        {
            return redirect('success');
        }
        else{
            return back()->with('error','Wrong Login Details');
        }
    }
        //For logout
        function logout()
        {
            Auth::logout();
            return redirect('/');
        }


}