<?php

namespace App\Http\Controllers\Api\Ver1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\User;

class Posts extends Controller
{
    //http://localhost/beyondplus/api/v1/note/1?api_token=r27bHi9jwClte3W8MypKXXqpMCvIRZErVOttKsz9SNf14xKwtK6J1rjWE9Zc
    public function index(){
        return response()->json(
            User::where('id', Auth::guard('api')->id())
            ->get()
        );
    }

    public function create(){

    }

    public function store(Request $request){
      if (Auth::guard('api')->user()){
            // $song_id = $request->input('song_id');
            // return Request_record::create([
            //     'song_id' => $song_id
            //    // 'user_id' => Auth::guard('api')->id()
            // ]);
        }       
    }

    public function edit($id){

    }

    public function update($id){

    }

    public function destroy($id){
        
    }

}
