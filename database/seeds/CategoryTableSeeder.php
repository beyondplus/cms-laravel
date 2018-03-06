<?php

use Illuminate\Database\Seeder;
use ILLuminate\Database\Eloquent\Model;
use App\Models\Bp_category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	Bp_category::truncate();
     	Bp_category::create([
     		'category_name' => 'Uncategorized',
     		'parent_id'		=>	'0',
            'category_link' => 'uncategorized',
     		'category_active'=>	'yes',
     		'created_at'    => '2016-06-3 00:36:29'
     		]);
    }
}
