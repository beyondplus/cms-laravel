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
use BeyondPlus\CmsLibrary\Models\Bp_custom;


class CustomController extends Controller
{
    public function __construct()
    {
       $this->middleware('admins');
    }

	public function index(){

		$custom = Bp_custom::orderBy('custom_name')->paginate(13);
		//return view('bp-admin.custom.index')->with(compact('custom'));
        return view('bp-admin.custom.index', array('custom' => $custom));
	}

	public function create(){
        $categories= Bp_custom::lists('custom_name','custom_id');
        return view('bp-admin.custom.add', array('categories' => $categories));
	}

	public function store(Request $request){
        // $this->validate($request, [
        // 'title' => 'required',
        // 'description' => 'required'
        // ]);

        $inputs = $request->all();
        // $inputs['custom_link'] = str_replace(' ', '-', strtolower($request->input('custom_name')));
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
        return redirect()->to('bp-admin/new');
	}

	public function edit($id)
    {
        try {
            $custom = Bp_custom::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return 'custom Not Found';
        }
        $categories= Bp_custom::lists('custom_name','custom_id');
        return view('bp-admin.custom.edit', array('custom' => $custom, 'categories' => $categories));
    }


    public function update($id, Request $request)
    {
        $inputs = $request->all();
     //   $inputs = $request->except('_token', '_method');
        // $inputs['custom_link'] = str_replace(' ', '-', strtolower($request->input('custom_name')));
        if ($request->file('custom_icon') && $request->file('custom_icon')->isValid()) {
            $destinationPath = uploadPath();
            $extension = $request->file('custom_icon')->getClientOriginalExtension(); // getting image extension
            $fileName = 'catmk'.md5(microtime().rand()).'.'.$extension; // renameing image
            $request->file('custom_icon')->move($destinationPath, $fileName); // uploading file to given path
            $inputs['custom_icon'] = $fileName;
        }

        Bp_custom::findOrFail($id)->update($inputs);
        return redirect()->to('bp-admin/new');
    }

    public function destroy($id)
    {
        Bp_custom::find($id)->delete();
        return redirect()->back();
    }

}
