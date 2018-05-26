<?php

namespace App\Http\Controllers\BpAdmin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TemplateController extends Controller
{
	public function __construct()
    {
       $this->middleware('admins');
    }
    
    public function service(){
        return view('theme/compound/layouts/service');
    }
}
