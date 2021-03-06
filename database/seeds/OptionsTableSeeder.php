<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bp_options;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bp_options::truncate();
        $option_name = array('siteurl', 'home', 'blogname', 'blogdescription', 'theme','mobile_theme', 'admin_email', 'version');
        $option_value = array('http://beyondpluscms.com', 'http://beyondpluscms.com', 'CMS', 'Beyond Plus CMS', 'bptheme1', 'framework7', 'superadmin@email.com' , '2.2.0');
        for ($i=0; $i < 7; $i++) {
            $Bp_options = [
                'option_name'       => $option_name[$i],
                'option_value'      => $option_value[$i],
                'autoload'          => 'yes',
                'created_at'        => '2016-06-3 00:36:29'
            ];
            Bp_options::insert($Bp_options);
        }
    }
}
