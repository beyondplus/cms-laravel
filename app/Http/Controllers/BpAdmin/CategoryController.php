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
       $this->middleware('admins');
    }

	public function index(){

		$category = Bp_tax::orderBy('tax_name')->paginate(13);
		//return view('bp-admin.category.index')->with(compact('category'));
        return view('bp-admin.category.index', array('category' => $category));
	}

	public function create(){
        $categories= Bp_tax::get()->pluck('tax_name','category_id');
        return view('bp-admin.category.add', array('categories' => $categories));
	}

	public function store(Request $request){
        // $this->validate($request, [
        // 'title' => 'required',
        // 'description' => 'required'
        // ]);

        $inputs = $request->all();
        $inputs['category_link'] = str_replace(' ', '-', strtolower($request->input('tax_name')));
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
        $categories= Bp_tax::get()->pluck('tax_name','category_id');
        return view('bp-admin.category.edit', array('category' => $category, 'categories' => $categories));
    }


    public function update($id, Request $request)
    {
        $inputs = $request->all();
     //   $inputs = $request->except('_token', '_method');
        $inputs['category_link'] = str_replace(' ', '-', strtolower($request->input('tax_name')));
        if ($request->file('category_icon') && $request->file('category_icon')->isValid()) {
            $destinationPath = uploadPath();
            $extension = $request->file('category_icon')->getClientOriginalExtension(); // getting image extension
            $fileName = 'catmk'.md5(microtime().rand()).'.'.$extension; // renameing image
            $request->file('category_icon')->move($destinationPath, $fileName); // uploading file to given path
            $inputs['category_icon'] = $fileName;
        }

        Bp_tax::findOrFail($id)->update($inputs);
        return redirect()->to('bp-admin/category');
    }

    public function destroy($id)
    {
        Bp_tax::find($id)->delete();
        return redirect()->back();
    }

}
