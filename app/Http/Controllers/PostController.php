<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller{
  public function index(){
    //productsテーブルから全てのデータを取得し、変数$productsに代入する
    $products=DB::table('products')->get();
    //変数$productsをproducts/index.blade.phpファイルに渡す
    return view('posts.index',compact('products'));
    
}
}
