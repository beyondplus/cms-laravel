<?php

namespace App;

use Illuminate\Foundation\Auth\User as AdminAuthenticatable;
use App\Models\Bp_access;
use DB;

class Admin extends AdminAuthenticatable
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $primaryKey = 'id';
    protected $table = 'users';
    
    protected $fillable = [
        'name', 'email','role','password'
    ];


    public function access($uri) {
        if($this->role == 1) {
            return $users = DB::table('bp_access')
            ->join('bp_modules', 'bp_access.module_id','bp_modules.module_id')
            ->select('bp_modules.module_link')
            ->where('bp_access.user',1)
            ->where('bp_modules.module_link',$uri.'%')
            ->get();

        }elseif($this->role == 2){
            return $users = DB::table('bp_access')
            ->join('bp_modules', 'bp_access.module_id','bp_modules.module_id')
            ->select('bp_modules.module_link')
            ->where('bp_access.staff',1)
            ->where('bp_modules.module_link',$uri.'%')
            ->get();

        }elseif($this->role == 3){
            return $users = DB::table('bp_access')
            ->join('bp_modules', 'bp_access.module_id','bp_modules.module_id')
            ->select('bp_modules.module_link')
            ->where('bp_access.admin',1)
            ->where('bp_modules.module_link','like',$uri.'%')
            ->get();
            
        }elseif($this->role == 4) {
            return $users = DB::table('bp_access')
            ->join('bp_modules', 'bp_access.module_id','bp_modules.module_id')
            ->select('bp_modules.module_link')
            ->where('bp_access.superadmin',1)
            ->where('bp_modules.module_link',$uri.'%')
            ->get();
        }
        return 0;
    }

}