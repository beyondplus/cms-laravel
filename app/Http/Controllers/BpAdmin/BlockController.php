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
use App\Models\User;
use App\Models\Bp_block;

class BlockController extends Controller
{
    public function __construct()
    {
       $this->middleware('admins');
    }

    public function index(){
        $block = Bp_block::orderBy('id','desc')->where('translate_id',0)->paginate(13);
        return view('bp-admin.block.index', array('block' => $block));
    }


    public function create(){
        return view('bp-admin.block.add');
    }

    public function store(Request $request){
        // $this->validate($request, [
        // 'title' => 'required',
        // 'description' => 'required'
        // ]);

        $inputs = $request->all();
        $inputs['block_url'] = formatUrl($request->input('title'));

        Bp_block::create($inputs);
        return redirect()->to('bp-admin/block');
    }

    public function edit($id)
    {
        try {
            $block = Bp_block::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return 'Category Not Found';
        }
        return view('bp-admin.block.edit', array('block' => $block));

    }

    public function update($id, Request $request)
    {
        $inputs = $request->all();
        $inputs['block_url'] = formatUrl($request->input('title'));

        Bp_block::findOrFail($id)->update($inputs);
        return redirect()->to('bp-admin/block');
    }

    public function destroy($id)
    {
        Bp_block::find($id)->delete();
        return redirect()->back();
    }

    
    // public function translate($id) {
    //     try {
    //         $block = Bp_block::findOrFail($id);
    //         $tax_type = Bp_relationship::where('post_id',$id)->where('type','block')->pluck('tax_id')->toArray();
    //     } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
    //         return 'Post Not Found';
    //     }
    //     return view('bp-admin.block.translate', array('block' => $block,  'tax_type' => $tax_type,'translate_id' => $id));
    // }

}
