<?php

namespace App\Http\Controllers\BpAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bp_module;
use App\Models\Bp_access;

class PermissionController extends Controller
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
        if($request->type) {
            $type = explode(" ", $request->type);
        }
    	#validation require
    	$access = Bp_access::where('module_id',$request->module_id)->update([$type[0] => $request->option]);

        return $type[0].'-'.$request->module_id;
    }


}
