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
use App\Models\Bp_post;
use App\Models\User;
use App\Models\Bp_tax;
use App\Models\Bp_relationship;

class PageController extends Controller
{
    public function __construct()
    {
       $this->middleware('admins');
    }

    public function index(){

        $page = Bp_post::where('post_type','page')->orderBy('updated_at','desc')->where('translate_id',0)->paginate(13);
        return view('bp-admin.page.index', array('page' => $page));
    }


    public function create(){
            $categories= Bp_tax::all();
        //$categories= Bp_tax::lists('category_name','category_id');
        return view('bp-admin.page.add', array('categories' => $categories));

    }

    public function store(Request $request){
        // $this->validate($request, [
        // 'title' => 'required',
        // 'description' => 'required'
        // ]);

        $inputs = $request->all();
        $inputs['post_type'] = 'page';
        $inputs['post_link'] = formatUrl($request->input('title'));
        if ($request->file('category_icon') && $request->file('category_icon')->isValid()) {
            $destinationPath = uploadPath();
            $extension = $request->file('category_icon')->getClientOriginalExtension(); // getting image extension
            // $fileName = 'catmk'.md5(microtime().rand()).'.'.$extension; // renameing image
            $fileName = $request->file('category_icon')->getClientOriginalName();
            $request->file('category_icon')->move($destinationPath, $fileName); // uploading file to given path
            if($request->file('pictures') !=null){
                $inputs['category_icon'] = $fileName;
            }
        }


        Bp_post::create($inputs);
        return redirect()->to('bp-admin/page');
    }

    public function edit($id)
    {
        try {
            $page = Bp_post::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return 'Category Not Found';
        }
        $categories= Bp_tax::get()->pluck('category_name','category_id');
        return view('bp-admin.page.edit', array('page' => $page, 'categories' => $categories));

    }

    public function update($id, Request $request)
    {
        $inputs = $request->all();
     //   $inputs = $request->except('_token', '_method');
        $inputs['post_type'] = 'page';
        $inputs['post_link'] = formatUrl($request->input('title'));
        if ($request->file('category_icon') && $request->file('category_icon')->isValid()) {
            $destinationPath = uploadPath();
            $extension = $request->file('category_icon')->getClientOriginalExtension(); // getting image extension
            $fileName = 'catmk'.md5(microtime().rand()).'.'.$extension; // renameing image
            $request->file('category_icon')->move($destinationPath, $fileName); // uploading file to given path
            $inputs['category_icon'] = $fileName;
        }

        Bp_post::findOrFail($id)->update($inputs);
        return redirect()->to('bp-admin/page');
    }

    public function destroy($id)
    {
        Bp_post::find($id)->delete();
        return redirect()->back();
    }

    
    public function translate($id) {
        try {
            $page = Bp_post::findOrFail($id);
            $tax_type = Bp_relationship::where('post_id',$id)->where('type','page')->pluck('tax_id')->toArray();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return 'Post Not Found';
        }
        return view('bp-admin.page.translate', array('page' => $page,  'tax_type' => $tax_type,'translate_id' => $id));
    }

}
