<?php
/**
 * Created by Beyond Plus <bplusmyanmar@hotmail.com>
 * User: Beyond Plus
 * Date: D/M/Y
 * Time: MM:HH PM
 */
namespace App\Http\Controllers\BpAdmin;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Session;

class Main extends Controller
{

    public function login(Request $request) 
    {
        auth()->guard('admins')->logout();
        return view('auth/adminlogin');
    
    }

    public function loginAdmin(Request $request)
    {

        $admin = auth()->guard('admins');

        $validator = Validator::make($request->all(), [
            'email' => 'required|email', 
            'password' => 'required',
        ]);


        if ($validator->fails()) {  
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        if ($admin->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])) {

            return redirect()->intended('bp-admin');

        }  else {
            $error = 'Username and Passord does not match';
            return view('auth/adminlogin',
                    ['match'=> $error
                    ]); 

        }
    }

    public function logout()
    {
        auth()->guard('admins')->logout();
        return redirect('/');
    }

}
