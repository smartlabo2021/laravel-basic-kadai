<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;


  class PostController extends Controller {
    public function index() {
        // productsテーブルからすべてのデータを取得し、変数$productsに代入する
        $posts = DB::table('posts')->get();

        // 変数$productsをproducts/index.blade.phpファイルに渡す
        return view('posts.index', compact('posts'));
    }
  public function show($id){
    // URL'/products/{id}'の'{id}'部分と主キー（idカラム）の値が一致するデータをpostsテーブルから取得し、変数$postsに代入する
    $posts = Posts::find($id);

     // 変数$postをposts/show.blade.phpファイルに渡す
     return view('posts.show',compact('posts'));
 }
}
