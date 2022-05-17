<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use DB, Mail, Cart;
use Illuminate\Http\Request;

class NewsController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$category = Category::select('id','name','cat_p','parent')->get()->toArray();
         $cat = DB::table('category')->where('status',1)->where('cat_p',2)->get();
        $cat2 = DB::table('category')->where('status',1)->where('cat_p',1)->get();
         $cats4 = DB::table('category')
      ->select('category.id', 'category.name as cat_name')
        //->join('catparent', 'catparent.id', '=', 'category.parent')
      ->where('category.parent','<>',0)
      ->where('category.parent','category.id')
      ->get();
        return view('frontend.news',[
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