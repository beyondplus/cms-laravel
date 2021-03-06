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
use App\Models\Bp_tax;
use App\Models\Bp_menu;
use App\Models\Bp_relationship;
use App\Models\Bp_options;
use App\Models\User;
use App\Models\Bp_comment;
use App\Http\Requests\PriorityRequest;
use DB;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(){
        $this->theme = Bp_options::where('option_name','theme')->first();
        $this->mobile_theme = Bp_options::where('option_name','mobile_theme')->first();
        $this->categories = Bp_tax::where('tax_type','category')->get()->all($arrayName = array('tax_name'));
        $this->post_link = Bp_post::select('post_link','id')->get();
    }

    public function t(){

        // if(isset($_COOKIE['screen']) && $this->mobile_theme->option_value != "none") {
        //     if($_COOKIE['screen'] == 'mobile' ) {
        //         return $t = "theme.".$this->mobile_theme->option_value.".";
        //     } 
        // }

        return $t = "theme.".$this->theme->option_value.".";
        
    }

    public function template($query, $templateName) {
        if($query === null){
            abort(404);
        } else {
            $view = ($query->post_template != "default") ? $query->post_template : $templateName; 
            if(view()->exists($this->t().$view)) {
                $view = $this->t().$view;
            } else {
                $view = $this->t().$templateName;
            }
            return $view;
        } 
    }

    public function index(){
        return view($this->t().'index', ['title' => 'home' ,  'categories' => $this->categories,'post_link'=>$this->post_link ]);
    }

    public function menu($name) {
        $query = Bp_menu::where('menu_link',$name)->get();
        if(count($query) > 0){
            $bp_post = Bp_post::where('id',$query[0]->post_id)->first();

            $view = $this->template($bp_post, 'single');
            return view($view, ['title' => 'home', 'post' => $bp_post,'post_link'=>$this->post_link ]);

        } else {
         return  $this->detail($name);
        }
     }

     public function detail($name) {
        $bp_post = Bp_post::with('comment')->with('translate')->where('post_link', $name)->first();

        $view = $this->template($bp_post, 'single');
        return view($view, ['title' => 'home', 'post' => $bp_post,'post_link'=>$this->post_link ]);
    }

    public function cat($name){
        $cat = Bp_tax::select('tax_id','translate_id')->where('tax_type','cat')->where('tax_link',$name)->first();

        if(isset($cat)){

            if($cat->translate_id == 0) {
                $cat->translate_id = $cat->tax_id;
            }

            $posts = Bp_post::where('translate_id',0)->whereHas('categories', function($query) use ($cat) {
                $query->where('bp_relationships.tax_id', $cat->translate_id);
            })->with('translate')->paginate(10);

            return view($this->t().'term', ['title' => 'home', 'posts' => $posts]);

        } else {
            abort(404);
        }

    }

    public function sitemap() {
        $posts = Bp_post::latest()->get();
        return response()->view('sitemap', compact(['posts']))->header('Content-Type', 'text/xml');
    }

    public function rss() {
        $posts = Bp_post::latest()->limit(20)->get();
        return response()->view('rss', compact(['posts']))->header('Content-Type', 'application/rss+xml');
    }

    // To Do Comment and Search

    public function comment(Request $request){
        $this->middleware('auth');
        // Qanda::where('que_id','=', $request->input('que_id'))->increment('comment_count', 1);
        $inputs = $request->all();
        $inputs['user_id'] = Auth::user()->id;
        Bp_comment::create($inputs);
        return 1;
    }

    // public function search($q){
    //     $product= Product::where('name','=',$q)->paginate(10);
    //     return view('front.courses' ,$arrayName = array('courses' =>  $product,'mainCategories'=>$this->mainCategories , 'brands' => $this->brands ));
    // }


}
?>