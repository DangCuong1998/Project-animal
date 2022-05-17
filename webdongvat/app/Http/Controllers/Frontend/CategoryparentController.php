<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Banner;
use App\Models\Product;

use DB, Mail, Cart;
use View;

use Illuminate\Http\Request;

class CategoryController
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
   

public function category($cat_id){
  $products = Product::where(['status'=>1,'cat_id'=>$cat_id])->orderBy('id','DESC')->paginate(8);
  $category = Category::find($cat_id);
  $catss = Category::find($cat_id);
  return view('frontend.category',[
    'products'=> $products,
    'category' => $category,
    'catss' => $catss,
  ]);
} 


}
