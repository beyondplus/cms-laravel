<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bp_access;

class AccessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Bp_access::truncate();

        for ($i=1; $i <= 16; $i++) {

            $Bp_access = [
                'module_id'		=> $i,
                'user'   		=> 1,
                'staff'   		=> 1,
                'admin'   		=> 1,
                'superadmin'   	=> 1
            ];

            Bp_access::insert($Bp_access);
        }

    }
}
