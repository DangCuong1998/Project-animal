<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use View;
use Illuminate\Http\Request;
use Cart;
use App\Models\Product;
use App\Models\Category;

class CartController
{
     public function __construct(Cart $cart){
                $category = Category::select('id','name','cat_p','parent');

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

      $banner = Category::where('status',1)->get();


      View::share([
        'banner' => $banner,
        'parent' => $category,
        'cats4' => $cats4,            
        'catss4' => $catss4,            
        'catss5' => $catss5,            
        'catss6' => $catss6,            
        'catss7' => $catss7,    
        'cats4' => $cats4,            
        'cats5' => $cats5,
        'cats6' => $cats6,
        'cats7' => $cats7,
      ]);


    } 
    
    public function getAddCart($id){
    	$product = Product::find($id);
        $products = Cart::content();
        $total = (Cart::subtotal());
        // dd(Cart::total());
    	Cart::add(array('id'=>$product->id,'name'=>$product->name,'qty'=>1,'price'=>$product->price));
    	return view('frontend.view-cart',[
  'product' => $product,
    'products' => $products,
'total' => $total,
        ]);
    }
    public function listCart()
    {
         $total = (Cart::subtotal());

    	$products = Cart::content();
    	return view('frontend.view-cart',[
            'total' => $total,
            'product' => $product,
        ]);

    }
    public function deleteCart($rowId)
    {
    	Cart::remove($rowId);
    	return redirect()->back();
    }
    public function updateCart(Request $request)
    {
    	Cart::update($request->row_id,$request->quantity);
    	return redirect()->back();
    }
}
