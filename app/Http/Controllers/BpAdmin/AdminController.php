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
use App\Models\Bp_post;
use App\Admin;
use App\User;

class AdminController extends Controller
{
	public function __construct()
    {
       $this->middleware('admins');
    }

    public function index()
    {
    	$post = Bp_post::where('post_type','post')->orderBy('created_at','DESC')->paginate(5);
        $totalPost= Bp_post::where('post_type','post')->get()->count();
    	$allUser=Admin::get()->count();

        $latestUser= User::get();
        return view('/bp-admin/home', array('post' => $post , 'allUser' => $allUser, 'latestUser' => $latestUser ,'totalPost' => $totalPost));
    }



}
