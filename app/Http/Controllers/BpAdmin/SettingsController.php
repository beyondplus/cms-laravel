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
use Illuminate\Routing\Controller;
use App\Models\Bp_options;


class SettingsController extends Controller
{
    public function __construct()
    {
       $this->middleware('admins');
    }

    public function index(){

        $options = Bp_options::orderBy('option_id')->paginate(13);
        return view('bp-admin.settings.general', array('options' => $options));
    }

	public function edit($id)
    {
        try {
            $category = Bp_category::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return 'Category Not Found';
        }
        $categories= Bp_category::lists('category_name','category_id');
        return view('bp-admin.settings.edit', array('category' => $category, 'categories' => $categories));
    }


    public function generaledit(Request $request)
    {

        $inputs = $request->except('_token', 'save');
        while ($output = current($inputs)) {
            Bp_options::where('option_name', key($inputs))->update(['option_value' => $inputs[key($inputs)]]);
            next($inputs);
        }

        return redirect()->back()->withSuccess('Successfully edited');
    }


}
