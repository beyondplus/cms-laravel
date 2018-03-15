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
use App\Models\Bp_custom;
use Validator;


class CustomController extends Controller
{
    public function __construct()
    {
       $this->middleware('admins');
    }

	public function index(){

		$custom = Bp_custom::orderBy('custom_name')->paginate(13);
        return view('bp-admin.custom.index', array('custom' => $custom));
	}

	public function create(Request $request){

        $categories= Bp_custom::get()->pluck('custom_name','custom_id');
        
        return view('bp-admin.custom.add', array('categories' => $categories));
	}

	public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'custom_name' => 'required', 
            'custom_link' => 'required',
        ]);

        if ($validator->fails()) {  
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $inputs = $request->all();
        
        if ($request->file('custom_icon') && $request->file('custom_icon')->isValid()) {
            $destinationPath = uploadPath();
            $extension = $request->file('custom_icon')->getClientOriginalExtension(); // getting image extension
            // $fileName = 'catmk'.md5(microtime().rand()).'.'.$extension; // renameing image
            $fileName = $request->file('custom_icon')->getClientOriginalName();
            $request->file('custom_icon')->move($destinationPath, $fileName); // uploading file to given path
            if($request->file('pictures') !=null){
                $inputs['custom_icon'] = $fileName;
            }
        }


		Bp_custom::create($inputs);
        return redirect()->back()->withSuccess(__('message.success'));
	}

	public function edit($id)
    {
        try {
            $custom = Bp_custom::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return 'custom Not Found';
        }
        $categories= Bp_custom::get()->pluck('custom_name','custom_id');
        return view('bp-admin.custom.edit', array('custom' => $custom, 'categories' => $categories));
    }


    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'custom_name' => 'required', 
            'custom_link' => 'required',
        ]);

        if ($validator->fails()) {  
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $inputs = $request->all();

        if ($request->file('custom_icon') && $request->file('custom_icon')->isValid()) {
            $destinationPath = uploadPath();
            $extension = $request->file('custom_icon')->getClientOriginalExtension(); // getting image extension
            $fileName = 'catmk'.md5(microtime().rand()).'.'.$extension; // renameing image
            $request->file('custom_icon')->move($destinationPath, $fileName); // uploading file to given path
            $inputs['custom_icon'] = $fileName;
        }

        Bp_custom::findOrFail($id)->update($inputs);
        return redirect()->back()->withSuccess(__('message.success'));
    }

    public function destroy($id)
    {
        Bp_custom::find($id)->delete();
        return redirect()->back();
    }

}
