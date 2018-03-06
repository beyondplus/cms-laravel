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

class Main extends Controller
{
    public function login_admin_post(Request $request)
    {
        $admin = auth()->guard('admins');

        // $errors = ['email' => 'asdf', 'password' => 'asdf'];
        $validate = Validator::make($request->all(),[
            'email' => 'required', 
            'password' => 'required',
        ]);

        if ($admin->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')]))
        {
            return redirect()->intended('bp-admin');
        } 
        else {
            // Todo 
            // return redirect()->back()->with('msg', 'User created successfully.');
            return redirect()->back()
                    ->withErrors($validate)
                    ->withInput($request->only($request->input('email'), 'remember'));
        }
    }

    public function logout()
    {
        auth()->guard('admins')->logout();
        return redirect('/');
    }

}
