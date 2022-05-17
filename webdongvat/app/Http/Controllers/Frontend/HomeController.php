<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Banner;
use App\Models\News;
use App\Models\Category;
use View;
use DB, Mail, Cart;

class HomeController
{
    public function __construct(){
      $listCat = DB::table('category')->get();
      View::share([
        'listCat' => $listCat,
        
      ]);

    } 
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
      public function index()
      {


        $img_banner1 = DB::table("banner")->MAX('id');
        $img_banner2 = DB::table("banner")
        ->where('id',$img_banner1)
        ->first();
        $category = Category::select('id','name','cat_p')->get()->toArray();
        

        // dd($category);
        $cat = DB::table('category')->where('status',1)->where('cat_p',2)->get();
        $cat2 = DB::table('category')->where('status',1)->where('cat_p',1)->get();
// dd($cat);
        $img_banner = $img_banner2->image;
        $news = DB::table("news")
        ->where('status',1)
        ->orderBy('id','DESC')
        ->limit(4)
        ->get();

        // dd($news);
        return view('frontend.home',[
            'img_banner' => $img_banner,
            'news' => $news,
            'cat' => $cat,
            'cat2' => $cat2,
            'parent' => $category,
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
