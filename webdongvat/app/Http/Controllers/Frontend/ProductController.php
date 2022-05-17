<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Auth;
use App\Models\Banner;
use App\Models\News;
use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;
use App\Models\Product_images;
use App\Models\Catparent;
use Illuminate\Http\Request;
use View;
use DB, Mail, Cart;

class ProductController
{
  public function __construct(){
   
      $catss4 = DB::table('category')
      ->select('category.id', 'category.name as cat_name')
        //->join('catparent', 'catparent.id', '=', 'category.parent')
      ->where('category.id', 64)
      ->get();
$catss5 = DB::table('category')
      ->select('category.id', 'category.name as cat_name')
        //->join('catparent', 'catparent.id', '=', 'category.parent')
      ->where('category.id', 65)
      ->get();
$catss6 = DB::table('category')
      ->select('category.id', 'category.name as cat_name')
        //->join('catparent', 'catparent.id', '=', 'category.parent')
      ->where('category.id', 66)
      ->get();
$catss7 = DB::table('category')
      ->select('category.id', 'category.name as cat_name')
        //->join('catparent', 'catparent.id', '=', 'category.parent')
      ->where('category.id', 68)
      ->get();

      $cats4 = DB::table('category')
      ->select('category.id', 'category.name as cat_name')
        //->join('catparent', 'catparent.id', '=', 'category.parent')
      ->where('category.parent', 64)
      ->get();
       
      $cats5 = DB::table('category')
      ->select('category.id', 'category.name as cat_name')
        //->join('catparent', 'catparent.id', '=', 'category.parent')
      ->where('category.parent', 65)
      ->get();

      $cats6 = DB::table('category')
      ->select('category.id', 'category.name as cat_name')
//        ->join('catparent', 'catparent.id', '=', 'category.parent')
      ->where('category.parent', 66)
      ->get();
      $cats7 = DB::table('category')
      ->select('category.id', 'category.name as cat_name')
//        ->join('catparent', 'catparent.id', '=', 'category.parent')
      ->where('category.parent', 68)
      ->get();

      $banner = Banner::where('status',1)->get();
$category = Category::select('id','name','cat_p')->get()->toArray();
       
      View::share([
        'banner' => $banner,
        'cats4' => $cats4,            
        'catss4' => $catss4,            
        'catss5' => $catss5,            
        'catss6' => $catss6,            
        'catss7' => $catss7,            
        'cats5' => $cats5,
        'cats6' => $cats6,
        'cats7' => $cats7,
        'parent' => $category,
      ]);

    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
public function product($slug, Request $request){
      //dd($request);
     $product = Product::where('slug',$slug)->first();
     $id_pro = Product::all()->where('slug',$slug)->first();
     $id = $id_pro ->id;
     $comment = Comment::where('product_id',$id)->get();

     $pro_item = Product_images::where('product_id',$id)->where('status',1)->limit(4)->get();

     $catsp = Catparent::all(); 

    $count_comment = count($comment);
//dd($count_comment);
     if ($product) {
        //dd($product);
      $otherProducts = Product::where('cat_id',$product->cat_id)->where('id','<>',$product->id)->limit(6)->get();
      return view('frontend.product',[
        'product' => $product,
        'otherProducts' => $otherProducts,
'count_comment' => $count_comment,
        'comment' => $comment,
        'pro_item' => $pro_item,
      ]); 
    }else{
      return view('frontend.error',[
        'count_comment' => $count_comment,
        'message' => 'Khong tim thay san pham'
      ]);
    }

  }

  public function productcm($slug, Request $request){
   $product = Product::where('slug',$slug)->first();
   $id_pro = Product::all()->where('slug',$slug)->first();
   $id = $id_pro ->id;
   $comment = Comment::where('product_id',$id)->get();
    $count_comment = count($comment);

   $name = (Auth::user()->username);

   $image = (Auth::user()->imageuser);
//dd($image);

//dd($name,$id);
   Comment::create([
     'status' => 1,
     'comm_name' => $name,
     'comm_image' => $image,
     'comm_content' => $request->comm_content,
     'product_id' => $id,
   ]);

   $pro_item = Product_images::where('product_id',$id)->where('status',1)->limit(4)->get();

   $catsp = Catparent::all(); 



   if ($product) {
        //dd($product);
    $otherProducts = Product::where('cat_id',$product->cat_id)->where('id','<>',$product->id)->limit(6)->get();
    return view('frontend.product',[
      'product' => $product,
      'otherProducts' => $otherProducts,
'count_comment' => $count_comment,
      'comment' => $comment,
      'pro_item' => $pro_item,
    ]); 
  }else{
    return view('frontend.error',[
      'message' => 'Khong tim thay san pham'
    ]);
  }

}
 
}