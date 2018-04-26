<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bp_module;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bp_module::truncate();
        $module = array(
                    array("Dashboard","ျပင္ဆင္သည့္ေနရာ","/",0,"fa fa-dashboard",0,1),
                    array("Post","ပုိစ့္","post",1,"fa fa-edit",0,1),
                    array("Page","စာမ်က္ႏွာ","page",2,"fa fa-edit",0,1),
                    array("Menu","အညြန္းမ်ား","menu",3,"fa fa-table",0,1),
                    array("Media","မီဒီယာ","media",4,"fa fa-desktop",0,1),
                    array("Slider","ေၾကာ္ျငာ","slider",5,"fa fa-image",0,1),
                    array("User Management","အဖြဲ့၀င္မ်ား","user",8,"fa fa-windows",0,1),
                    array("Settings","ထိန္းခ်ဳပ္ေရး","settings",9,"fa fa-bug",0,1),
                    array("Custom","ျပင္ဆင္ျခင္း","custom",0,"fa fa-windows",0,0),
                    array("Add Custom","ထပ္ထည့္ျခင္း","addcustom",0,"fa fa-sitemap",0,0));
        $this->createModule($module);
        $child = array(
                    array("Add Post","ပုိစ့္ထည့္ျခင္း","post/create",2,"fa fa-home",2,0),
                    array("Category","က႑တ","category",2,"fa fa-edit",2,0),
                    array("Taxonomy","က႑တခြဲ","tax",2,"fa fa-table",2,0),
                    array("Account","အေကာင့္","account",0,"fa fa-desktop",8,0),
                    array("Permission","ခြင့္ျပဳခ်က္","permission",0,"fa fa-windows",8,0),
                    array("Generals","အေျခခံ","general",0,"fa fa-bug",8,1)
                );
        $this->createModule($child);
        
    }

    public function createModule($module){
        for ($i=0; $i < count($module); $i++) {
            $Bp_module = [
                'module_name'       => $module[$i][0],
                'module_name_mm'    => $module[$i][1],
                'module_link'       => $module[$i][2],
                'module_weight'     => $module[$i][3],
                'module_icon'       => $module[$i][4],
                'parent_id'         => $module[$i][5],
                'staff_id'          => '1',
                'section'           => $module[$i][6],
                'created_at'        => '2016-06-3 00:36:29'
            ];
            Bp_module::insert($Bp_module);
        }
    }
}