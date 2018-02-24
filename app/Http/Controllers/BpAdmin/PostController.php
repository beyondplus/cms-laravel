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
use BeyondPlus\CmsLibrary\Models\Bp_category;
use BeyondPlus\CmsLibrary\Models\Bp_term;
use BeyondPlus\CmsLibrary\Models\Bp_post;
use BeyondPlus\CmsLibrary\Models\Bp_relationship;
use BeyondPlus\CmsLibrary\Models\User;
use Auth;

class PostController extends Controller
{
    var $categories;
    public function __construct()
    {
       $this->middleware('admins');
       $this->categories=  Bp_category::all();
    }

    public function index(){
        $post = Bp_post::where('post_type','=', 'post')->orderBy('updated_at','desc')->paginate(13);
        return view('bp-admin.post.index', array('post' => $post));
    }

    public function create(){
        $categories= Bp_category::all();
       return view('bp-admin.post.add', array('categories' => $this->categories));

    }

    public function store(Request $request){
        // $this->validate($request, [
        // 'title' => 'required',
        // 'description' => 'required'
        // ]);

        $inputs = $request->all();
        $inputs['post_link'] = str_replace(' ', '-', strtolower($request->input('title')));
        $inputs['post_type'] = 'post';
        $inputs['post_created'] = Auth::guard('admins')->user()->id;
        Bp_post::create($inputs);

        $update_id = Bp_post::orderBy('id', 'desc')->first();
       // echo $update_id->id;
        //print_r($update_id->id);
        $categories  = $request->get('categories');
        for( $i=0; $i<sizeof($categories); $i++){
            $cat['term_id'] = $categories[$i];
            $cat['post_id'] = $update_id->id;
            $cat['type']    = 'cat';
            Bp_relationship::create($cat);
        }

        return redirect()->to('bp-admin/post');
    }

    public function edit($id)
    {
        try {
            $post = Bp_post::findOrFail($id);
            $term_cat = Bp_relationship::where('post_id',$id)->where('type','cat')->lists('term_id')->toArray();
            //$term_cat = Bp_relationship::where('post_id',$id)->where('type','cat')->get();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return 'Post Not Found';
        }
        return view('bp-admin.post.edit', array('post' => $post, 'categories' => $this->categories , 'term_cat' => $term_cat));

    }

    public function update($id, Request $request)
    {
        $inputs = $request->all();
        $inputs['post_link'] = str_replace(' ', '-', strtolower($request->input('title')));
        if ($request->file('category_icon') && $request->file('category_icon')->isValid()) {
            $destinationPath = uploadPath();
            $extension = $request->file('category_icon')->getClientOriginalExtension(); // getting image extension
            $fileName = 'catmk'.md5(microtime().rand()).'.'.$extension; // renameing image
            $request->file('category_icon')->move($destinationPath, $fileName); // uploading file to given path
            $inputs['category_icon'] = $fileName;
        }

        Bp_post::findOrFail($id)->update($inputs);

        $categories  = $request->get('categories');
        //Deleteing Term
        if(sizeof($categories)>0){
            Bp_relationship::where('post_id',$id)->where('type','cat')->delete();
        }
        //Recreating New Term
        for( $i=0; $i<sizeof($categories); $i++){
            $cat['term_id'] = $categories[$i];
            $cat['post_id'] = $id;
            $cat['type']    = 'cat';
            Bp_relationship::create($cat);
        }
        return redirect()->to('bp-admin/post');
    }

    public function destroy($id)
    {
        Bp_post::find($id)->delete();
        return redirect()->back();
    }

}
