<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class controllerPost extends Controller
{
    public function addPost(){
        return view('add-post');
    }
    public function savepost(Request $request){

        DB::table('posts')->insert([
     'name'=>$request->name,
     'description'=>$request->description
        ]);
        return back()->with('post_add','Post added successfully');
    }
    public function postlist(){
     
        $posts = DB::table('posts')->get();
        return view('post-list',compact('posts'));

    }
    public function postedit($id){
     $post = DB::table('posts')->where('id',$id)->first();
     return view('edit-post',compact('post'));
    }
    public function updatepost(Request $request){

        DB::table('posts')->where('id',$request->id)->update([
            'name'=>$request->name,
            'description'=>$request->description
            
        ]);
        return back()->with('post_update','Post updated successfully');
    }
    public function postdelete($id){
      DB::table('posts')->where('id',$id)->delete();
      return back()->with('post_deleted','Post deleted successfully');
    }
}
