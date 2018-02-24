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
use App\Http\Controllers\Controller;
use App\Models\Bp_slider;
use App\Models\User;
use Auth;

class SliderController extends Controller
{
    public function __construct()
    {
       $this->middleware('admins');
    }

    public function index(){

        $slider = Bp_slider::where('slider_type','=', 'slider')->orderBy('updated_at','desc')->paginate(13);
        return view('bp-admin.slider.index', array('slider' => $slider));
    }


    public function create(){

        return view('bp-admin.slider.add');

    }

    public function store(Request $request){
        // $this->validate($request, [
        // 'title' => 'required',
        // 'description' => 'required'
        // ]);
        $inputs = $request->all();

        if ($request->file('slider_link') && $request->file('slider_link')->isValid()) {
            $destinationPath = uploadPath();
            $extension = $request->file('slider_link')->getClientOriginalExtension(); // getting image extension
            $fileName = 'slidermk'.md5(microtime().rand()).'.'.$extension; // renameing image
            $request->file('slider_link')->move($destinationPath, $fileName); // uploading file to given path
            $inputs['slider_link'] = $fileName;
        }



        $inputs['slider_type'] = 'slider';
        $inputs['user_id'] = Auth::guard('admins')->user()->id;
        Bp_slider::create($inputs);
        return redirect()->to('bp-admin/slider');
    }

    public function edit($id)
    {
        try {
            $slider = Bp_slider::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return 'Category Not Found';
        }
        return view('bp-admin.slider.edit', array('slider' => $slider));

    }

    public function update($id, Request $request)
    {
        $inputs = $request->all();
     //   $inputs = $request->except('_token', '_method');

        if ($request->file('slider_link') && $request->file('slider_link')->isValid()) {
            $destinationPath = uploadPath();
            $extension = $request->file('slider_link')->getClientOriginalExtension(); // getting image extension
            $fileName = 'slidermk'.md5(microtime().rand()).'.'.$extension; // renameing image
            $request->file('slider_link')->move($destinationPath, $fileName); // uploading file to given path
            $inputs['slider_link'] = $fileName;
        }

        Bp_slider::findOrFail($id)->update($inputs);
        return redirect()->to('bp-admin/slider');
    }

    public function destroy($id)
    {
        Bp_slider::find($id)->delete();
        return redirect()->back();
    }

}
