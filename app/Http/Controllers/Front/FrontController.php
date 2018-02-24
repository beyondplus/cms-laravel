<?php
/**
 * Created by Beyond Plus <bplusmyanmar@hotmail.com>
 * User: Beyond Plus
 * Date: D/M/Y
 * Time: MM:HH PM
 */
namespace App\Http\Controllers\Front;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Bp_post;
use App\Models\Bp_category;
use App\Models\Bp_menu;
use App\Models\Bp_relationship;
use App\Models\Bp_options;
use App\Models\Bp_slider;
use App\Models\User;
use App\Models\Comments;
use App\Http\Requests\PriorityRequest;
use DB;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    var $categories;
    var $post;
    var $menus;
    var $title;
    var $description;
    var $theme;
    var $themes;
    var $sliders;

    public function __construct(){
        $this->themes = Bp_options::where('option_name','theme')->first();
        $this->categories = Bp_category::all($arrayName = array('category_name'));
        $this->post = Bp_post::where('post_type','post')->get();
        $this->sliders= Bp_slider::get();
        $this->post_link = Bp_post::select('post_link','id')->get();
    }

    public function t(){
        return $t = "theme.".$this->themes->option_value.".";
    }

    public function index(){
        return view($this->t().'index', $arrayName = array('title' => 'Welcome', 'page' => 'home' ,  'categories' => $this->categories, 'posts' => $this->post,'post_link'=>$this->post_link  ,'sliders' => $this->sliders ));
    }

    public function menu($name) {
        $query = Bp_menu::where('menu_link', '=', $name)->first();
       // echo $query->post_id;
        $bp_post = Bp_post::where('id','=',$query->post_id)->get();     
        if($bp_post === null){
            abort(404);
        } else {
        $bp_cat=Bp_category::select('*')->get();
        return view($this->t().'single', array('title' => 'Welcome', 'description' => '', 'page' => 'home', 'posts' => $bp_post, 'bp_cat' => $bp_cat, 'post_link'=>$this->post_link ));
        }
    }

    public function post($name) {
        $bp_post = Bp_post::where('post_link', $name)->get();
        if($bp_post === null){
            abort(404);
        } else {
        $bp_cat=Bp_category::select('*')->get();
        return view($this->t().'single', array('title' => 'Welcome', 'description' => '', 'page' => 'home', 'posts' => $bp_post, 'bp_cat' => $bp_cat, 'post_link'=>$this->post_link ));
        }
    }

    public function cat($name){
        $bp_cat=Bp_category::select('*')->get();
        $cat_id=Bp_category::select('category_id')->where('category_link','=', $name)->get()->first();
        if($cat_id === null){
            abort(404);
        } else {
            $term=Bp_relationship::select('post_id')->where('term_id','=', $cat_id->category_id)->get();
            return view($this->t().'post', array('title' => 'Welcome', 'description' => '', 'page' => 'home','bp_cat' => $bp_cat,'post_link'=>$this->post_link , 'term' => $term));
        }

    }

    // public function comment(Request $request){
    //    $this->middleware('auth');
    //    Qanda::where('que_id','=', $request->input('que_id'))->increment('comment_count', 1);
    //    $inputs = $request->all();
    //    $inputs['customer_id'] = Auth::user()->id;
    //    Comments::create($inputs);
    //     return 1;
    // }

    // public function search($q){
    //     $product= Product::where('name','=',$q)->paginate(10);
    //     return view('front.courses' ,$arrayName = array('courses' =>  $product,'mainCategories'=>$this->mainCategories , 'brands' => $this->brands ));
    // }


}
?>
