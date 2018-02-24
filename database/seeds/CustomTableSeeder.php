<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use BeyondPlus\CmsLibrary\Models\Bp_custom;

class CustomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bp_custom::truncate();
     	Bp_custom::create([
     		'custom_name' => 'Test',
            'custom_link' => 'test',
            'custom_weight' => '0',
     		'created_at'    => '2016-06-3 00:36:29'
     		]);
    }
}
