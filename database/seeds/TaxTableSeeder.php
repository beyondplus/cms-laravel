<?php

use Illuminate\Database\Seeder;
use ILLuminate\Database\Eloquent\Model;
use App\Models\Bp_tax;

class TaxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	Bp_tax::truncate();
     	Bp_tax::create([
     		'tax_name'      => 'Uncategorized',
     		'parent_id'		=>	'0',
            'tax_link'      => 'uncategorized',
     		'tax_active'    =>	'1',
            'tax_type'      => 'cat',
     		'created_at'    => '2016-06-3 00:36:29'
     		]);
    }
}
