<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Banner;
use App\Models\News;
use App\Models\Category;

use DB, Mail, Cart;
use View;

class AdoptController
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

      $banner = Category::where('status',1)->get();


      View::share([
        'banner' => $banner,
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
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = DB::table('product')
        ->where('status',1)
        ->get(); 
        $category = Category::select('id','name','cat_p','parent')
        ->get()
        ->toArray();
        $img_banner1 = DB::table("banner")
        ->MAX('id');
        $img_banner2 = DB::table("banner")
        ->where('id',$img_banner1)
        ->first();
        $cat = DB::table('category')
        ->where('status',1)
        ->where('cat_p',2)
        ->get();
        $cat2 = DB::table('category')
        ->where('status',1)
        ->where('cat_p',1)
        ->get();
// dd($cat);
        $img_banner = $img_banner2->image;
        $news = DB::table("news")
        ->where('status',1)
        ->orderBy('id','DESC')
        ->limit(4)
        ->get();

        // dd($news);
        return view('frontend.adopt',[
            'img_banner' => $img_banner,
            'news' => $news,
            'cat' => $cat,
            'cat2' => $cat2,
            'parent' => $category,
            'product' => $product,
            // 'imgbn' => $imgbn,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
