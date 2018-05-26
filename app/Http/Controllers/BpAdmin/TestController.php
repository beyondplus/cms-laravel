<?php

namespace App\Http\Controllers\BpAdmin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
	public function __construct()
    {
       $this->middleware('admins');
    }
    
    function custom(){
    	return view('custom/test');
    }
}
