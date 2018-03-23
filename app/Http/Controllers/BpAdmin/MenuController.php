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
use App\Models\Bp_menu;
use App\Models\User;
use Auth;

class MenuController extends Controller
{
    var $categories;
    public function __construct()
    {
       $this->middleware('admins');
       $this->menu = Bp_menu::orderBy('menu_weight', 'asc')->get();
       $this->pages=  Bp_post::where('post_type', 'page')->orderBy('id', 'desc')->get();
       $this->posts=  Bp_post::where('post_type', 'post')->orderBy('id', 'desc')->get();
    }


    public function index(){

        return view('bp-admin.menu.index', array('menu' => $this->menu, 'pages' => $this->pages, 'posts' => $this->posts));
    }


    public function create(){
        $categories= Bp_category::get()->pluck('category_name','category_id');
        return view('bp-admin.media.add', array('categories' => $categories));

    }

    public function pageStore(Request $request){
        $pages  = $request->get('pages');
        for( $i=0; $i<sizeof($pages); $i++){
            $page['post_id'] = $pages[$i];
            $getpages = Bp_post::where('id' ,$pages[$i])->first();
            $page_name = $getpages->title;
            $page['menu_name'] = $page_name;
            $page['menu_link'] = formatUrl($page_name);
            $page['menu_created'] = Auth::guard('admins')->user()->id;
            Bp_menu::create($page);
        }

        return redirect()->back();
    }

    public function postStore(Request $request){
        $posts  = $request->get('posts');
        $posts_name  = $request->get('posts_name');
        //print_r($posts_name);
        for( $i=0; $i<sizeof($posts); $i++){
            $post['post_id'] = $posts[$i];
            $getposts = Bp_post::where('id' , $posts[$i])->first();
            $post_name = $getposts->title;
            $post['menu_name'] = $post_name;
            $inputs['menu_created'] = Auth::guard('admins')->user()->id;
            Bp_menu::create($post);
        }

        return redirect()->back();
    }


    public function store(Request $request){
        // $this->validate($request, [
        // 'title' => 'required',
        // 'description' => 'required'
        // ]);
        $inputs = $request->all();
        $inputs['media_name'] = $request->input('title');
        $inputs['media_type'] = 'media';
        $inputs['user_id'] = Auth::guard('admins')->user()->id;
        Bp_media::create($inputs);
        return redirect()->back();
    }

    public function edit($id)
    {
        try {
            $menu = Bp_menu::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return 'Category Not Found';
        }
        return view('bp-admin.menu.edit', array('menu' => $menu));

    }

    public function update($id, Request $request)
    {
        // $inputs = $request->all();
        // $inputs['menu_link'] = str_replace(' ', '-', strtolower($request->input('menu_name')));
    //    print_r($inputs);
        $inputs = $request->all();
        $inputs['menu_link'] = str_replace(' ', '-', strtolower($request->input('menu_name')));
     //   $inputs = $request->except('_token', '_method');

        // if ($request->file('menu_icon') && $request->file('category_icon')->isValid()) {
        //     $destinationPath = uploadPath();
        //     $extension = $request->file('category_icon')->getClientOriginalExtension(); // getting image extension
        //     $fileName = 'menumk'.md5(microtime().rand()).'.'.$extension; // renameing image
        //     $request->file('menu_icon')->move($destinationPath, $fileName); // uploading file to given path
        //     $inputs['menu_icon'] = $fileName;
        // }

        Bp_menu::findOrFail($id)->update($inputs);
        return redirect()->to('bp-admin/menu');
    }

    public function destroy($id)
    {
        Bp_menu::find($id)->delete();
        return redirect()->back();
    }

}
