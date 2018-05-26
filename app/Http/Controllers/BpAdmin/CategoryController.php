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
use App\Models\Bp_tax;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->tax_name = "cat" ;
        $this->middleware('admins');
    }

	public function index(){

		$category = Bp_tax::with('translate')->orderBy('tax_name')->where('tax_type','cat')->where('lang',1)->paginate(13);
        return view('bp-admin.category.index', array('category' => $category));
	}

	public function create(){
        $categories= Bp_tax::get()->pluck('tax_name','tax_id');
        return view('bp-admin.category.add', array('categories' => $categories));
	}

	public function store(Request $request){
        // $this->validate($request, [
        // 'title' => 'required',
        // 'description' => 'required'
        // ]);

        $inputs = $request->all();
        $inputs['tax_link'] = formatUrl($request->input('tax_name'));
        $inputs['tax_type'] = $this->tax_name ;

        if ($request->file('tax_icon') && $request->file('tax_icon')->isValid()) {
        $destinationPath = uploadPath();
            $extension = $request->file('tax_icon')->getClientOriginalExtension(); // getting image extension
            // $fileName = 'catmk'.md5(microtime().rand()).'.'.$extension; // renameing image
            $fileName = $request->file('tax_icon')->getClientOriginalName();
            $request->file('tax_icon')->move($destinationPath, $fileName); // uploading file to given path
            if($request->file('pictures') !=null){
                $inputs['tax_icon'] = $fileName;
            }
        } else {
            $inputs['tax_icon'] = 'fa fa-list';
        }


		Bp_tax::create($inputs);
        return redirect()->to('bp-admin/category');
	}

	public function edit($id)
    {
        try {
            $category = Bp_tax::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return 'Category Not Found';
        }
        $categories= Bp_tax::get()->pluck('tax_name','tax_id');
        return view('bp-admin.category.edit', array('category' => $category, 'categories' => $categories));
    }


    public function update($id, Request $request)
    {
        $inputs = $request->all();
     //   $inputs = $request->except('_token', '_method');
        $inputs['tax_link'] = formatUrl($request->input('tax_name'));
        $inputs['tax_type'] = $this->tax_name ;

        if ($request->file('tax_icon') && $request->file('tax_icon')->isValid()) {
            $destinationPath = uploadPath();
            $extension = $request->file('tax_icon')->getClientOriginalExtension(); // getting image extension
            $fileName = 'catmk'.md5(microtime().rand()).'.'.$extension; // renameing image
            $request->file('tax_icon')->move($destinationPath, $fileName); // uploading file to given path
            $inputs['tax_icon'] = $fileName;
        }

        Bp_tax::findOrFail($id)->update($inputs);
        return redirect()->to('bp-admin/category');
    }

    public function destroy($id)
    {
        Bp_tax::find($id)->delete();
        return redirect()->back();
    }

    public function translate($id) {
        try {
            $tax = Bp_tax::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return 'Tax Not Found';
        }

        return view('bp-admin.category.translate', array('tax' => $tax,'translate_id' => $id));
    }
}
