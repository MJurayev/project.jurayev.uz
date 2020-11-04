<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{

 public function index(){
    $posts = Posts::all()->sortByDesc('created_at');
     return view('admin.posts', ['posts'=>$posts]);
 }
 public function showByTitle( $title){
     $post = Posts::where('post_title', $title)->first();
     return view('admin.singlePost', ['post'=>$post]);
 }
public function addPost(){
     return view('admin.addPost' );
}
 public function removeById($id){
     $stmt = Posts::find($id);
     $stmt->delete();
//     $stmt = DB::table('posts')->where('id', $id)->delete();
     if($stmt){
         session()->flash('success', 'Muvaffaqiyatli o\'chirildi');
     }else{
         session()->flash('error', 'O\'chirishda xato');
     }
     return redirect(route('AdminPosts'));
 }
 public function savePost(Request $request)
 {
     $post = new Posts();
     $post->post_title = $request->post_title;
     $post->post_text = $request->post_text;
     $post->added_user_id = $request->added_user_id;
     $post->save();
     if($post){
         session()->flash('success', 'post muvaffaqiyatli qo\'shildi');
    return redirect(route('AdminPosts'));
     }
     session()->flash('error', 'post qo\'shishda xato');
     return redirect(route('addPost'));
 }
 public function editById($id){
     $post = Posts::find($id);
//     print_r($post);
//     die();
     return view('admin.editPost', ['post'=> $post]);
 }

 public function editAndSave(Request $request){
     $post  = Posts::where('id',$request->post('id'))->update([
         'post_title'=>$request->post('post_title'),
         'post_text'=>$request->post('post_text'),
         'added_user_id'=>$request->post('added_user_id')
     ]);
//     $post->post_title = $request->post_title;
//     $post->post_text = $request->post_text;
//     $post->added_user_id = $request->added_user_id;
//     $post->update();
     if($post){
         session()->flash('success', 'post muvaffaqiyatli yangilandi');
         return redirect(route('AdminPosts'));
     }
     session()->flash('error', 'post yangilashda xato');
     return redirect()->back();
 }
}
