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
use App\Models\Bp_media;
use App\Models\User;
use Auth;

class MediaController extends Controller
{
    public function __construct()
    {
       $this->middleware('admins');
    }

    public function index(){

        $media = Bp_media::where('media_type','=', 'media')->orderBy('updated_at','desc')->paginate(13);
        return view('bp-admin.media.index', array('media' => $media));
    }


    public function create(){

        return view('bp-admin.media.add');

    }

    public function store(Request $request){
        // $this->validate($request, [
        // 'title' => 'required',
        // 'description' => 'required'
        // ]);
        $inputs = $request->all();

        if ($request->file('media_link') && $request->file('media_link')->isValid()) {
            $destinationPath = uploadPath();
            $extension = $request->file('media_link')->getClientOriginalExtension(); // getting image extension
            $fileName = 'mediamk'.md5(microtime().rand()).'.'.$extension; // renameing image
            $request->file('media_link')->move($destinationPath, $fileName); // uploading file to given path
            $inputs['media_link'] = $fileName;
        }



        $inputs['media_type'] = 'media';
        $inputs['user_id'] = Auth::guard('admins')->user()->id;
        Bp_media::create($inputs);
        return redirect()->to('bp-admin/media');
    }

    public function edit($id)
    {
        try {
            $media = Bp_media::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return 'Category Not Found';
        }
        return view('bp-admin.media.edit', array('media' => $media));

    }

    public function update($id, Request $request)
    {
        $inputs = $request->all();
     //   $inputs = $request->except('_token', '_method');

        if ($request->file('media_link') && $request->file('media_link')->isValid()) {
            $destinationPath = uploadPath();
            $extension = $request->file('media_link')->getClientOriginalExtension(); // getting image extension
            $fileName = 'mediamk'.md5(microtime().rand()).'.'.$extension; // renameing image
            $request->file('media_link')->move($destinationPath, $fileName); // uploading file to given path
            $inputs['media_link'] = $fileName;
        }

        Bp_media::findOrFail($id)->update($inputs);
        return redirect()->to('bp-admin/media');
    }

    public function destroy($id)
    {
        Bp_media::find($id)->delete();
        return redirect()->back();
    }

}
