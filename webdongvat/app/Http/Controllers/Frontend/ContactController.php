<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Contact;

use DB, Mail, Cart;
use View;

use Illuminate\Http\Request;

class ContactController{
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
    public function contact_user(){
     return view('frontend.contact',[
      'contact' => Contact::all()

    ]);    }

     public function contactstore(Request $request){
      //dd(Auth::user()->email);
      $username = Auth::user()->username;
      $useremail = Auth::user()->email;

      Contact::create([
        'name' => $username,
        'comment' => $request->comment,
        'email' => $useremail,
        'status' =>1,

      ]);
      return redirect()->route('contact')->with('success','Gửi thành công');  


    } 
}