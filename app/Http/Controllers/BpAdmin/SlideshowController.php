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
use BeyondPlus\CmsLibrary\Models\Bp_slideshow;
use BeyondPlus\CmsLibrary\Models\User;
use Auth;

class SlideshowController extends Controller
{
    public function __construct()
    {
       $this->middleware('admins');
    }

    public function index(){

        $slideshow = Bp_slideshow::where('slideshow_type','=', 'slideshow')->orderBy('updated_at','desc')->paginate(13);
        return view('bp-admin.slideshow.index', array('slideshow' => $slideshow));
    }


    public function create(){

        return view('bp-admin.slideshow.add');

    }

    public function store(Request $request){
        // $this->validate($request, [
        // 'title' => 'required',
        // 'description' => 'required'
        // ]);
        $inputs = $request->all();

        if ($request->file('slideshow_link') && $request->file('slideshow_link')->isValid()) {
            $destinationPath = uploadPath();
            $extension = $request->file('slideshow_link')->getClientOriginalExtension(); // getting image extension
            $fileName = 'slideshowmk'.md5(microtime().rand()).'.'.$extension; // renameing image

            $request->file('slideshow_link')->move($destinationPath, $fileName); // uploading file to given path
            $inputs['slideshow_link'] = $fileName;
        }



        $inputs['slideshow_type'] = 'slideshow';
        $inputs['user_id'] = Auth::guard('admins')->user()->id;
        Bp_slideshow::create($inputs);
        return redirect()->to('bp-admin/slideshow');
    }

    public function edit($id)
    {
        try {
            $slideshow = Bp_slideshow::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return 'Category Not Found';
        }
        return view('bp-admin.slideshow.edit', array('slideshow' => $slideshow));

    }

    public function update($id, Request $request)
    {
        $inputs = $request->all();
     //   $inputs = $request->except('_token', '_method');

        if ($request->file('slideshow_link') && $request->file('slideshow_link')->isValid()) {
            $destinationPath = uploadPath();
            $extension = $request->file('slideshow_link')->getClientOriginalExtension(); // getting image extension
            $fileName = 'slideshowmk'.md5(microtime().rand()).'.'.$extension; // renameing image
            $request->file('slideshow_link')->move($destinationPath, $fileName); // uploading file to given path
            $inputs['slideshow_link'] = $fileName;
        }

        Bp_slideshow::findOrFail($id)->update($inputs);
        return redirect()->to('bp-admin/slideshow');
    }

    public function destroy($id)
    {
        Bp_slideshow::find($id)->delete();
        return redirect()->back();
    }

}
