<?php
/**
 * Created by Beyond Plus <bplusmyanmar@hotmail.com>
 * User: Beyond Plus
 * Date: D/M/Y
 * Time: MM:HH PM
 */
namespace App\Http\Controllers\BpAdmin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;

class AccountController extends Controller
{
    public function __construct()
    {
       $this->middleware('admins');
    }

     public function index(){
        $adminaccounts = Admin:: get();



        return view('bp-admin.account.index')->with(compact('adminaccounts'));
    }

    public function create(){



        //$brand= Brand::lists('brand_name','id');
        //return view('dashboard.create')->with('category',$categories);
        $adminaccounts = Admin::get();
        return view('bp-admin.account.add')->with(compact('adminaccounts'));
    }

    public function store(Request $request){
        // $this->validate($request, [
        // 'title' => 'required',
        // 'description' => 'required'
        // ]);

        $inputs = $request->all();

        $inputs['password'] = bcrypt($request->input('password'));
        Admin::create($inputs);
        return redirect()->to('bp-admin/account');
    }

    public function edit($id)
    {
        try {
            $adminaccounts = Admin::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return 'Product Not Found';
        }
       // $categories= User::lists('name','email');

        return view('bp-admin.account.edit')->with(compact('adminaccounts'));
    }


    public function update($id, Request $request)
    {
        $inputs = $request->all();
     //   $inputs = $request->except('_token', '_method');

        Admin::findOrFail($id)->update($inputs);
        return redirect()->to('bp-admin/account');//return view
    }

    public function destroy($id)
    {
        Admin::find($id)->delete();
        //return 1;
        return redirect()->back();
    }



}
