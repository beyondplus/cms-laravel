<?php

namespace App\Http\Controllers\BpAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bp_module;
use App\Models\Bp_access;

class PermissonController extends Controller
{
    public function __construct()
    {
       $this->middleware('admins');
    }

    public function index(){

        $module = Bp_access::with('module')->get();
        return view('bp-admin.permission.index', array('module' => $module));
    }


    public function ajaxUpdate(Request $request){
    	#validation require
    	$access = Bp_access::where('module_id',$request->module_id)->update([$request->type => $request->option]);

        return $request->type.'-'.$request->module_id;
    }


}
