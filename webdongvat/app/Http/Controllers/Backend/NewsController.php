<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use App\Models\Product;
use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use File;
use DB, Mail, Cart;
use View;
class NewsController extends Controller
{
      public function __construct(){
      $model = User::all();
      $comments = DB::table("comment")->where('status',1)->get();
      $orders = DB::table("customer")->where('status',1)->get();
       View::share([
        'model' => $model,
        'comments => $comments',
        'orders' => $orders
        ]);

  }  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $model = User::all();
$comments = DB::table("comment")->where('status',1)->get();
        return view('backend.news.index',[
            'news' => News::paginate(10),
            'model' => $model,
            'comments' => $comments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.News.create',[
              'cats' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // $this->validate($request,[
        //     'title' => 'required',
        //     'content' => 'required',
        //     'content_und' => 'required',
        //     'image' => 'required',
        //     'parent' => 'required',
        //     'status' => 'required',
        // ],[]);
         //echo base_path('uploads');die;
        $image = '';
        if($request->has('file')){
            $file = $request->file;
            $file->move(base_path('/uploads'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }

        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
            'content_und' => $request->content_und,
            'parent' => $request->parent,
            'status' => $request->status,
        ]);
         return redirect()->route('backend.product')->with('success','Thêm mới thành công');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = News::find($id);

        return view('backend.news.edit',[
            'model' => $model,
            'cats' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        // echo $id;die;
        // Select * From product where id = $id limit 1
        // ham find(id) chi chay tren khoa chinh
        // dd($request);
        $model = News::find($id);
        // $this->validate($request,[
        //   'title' => 'required',
        //     'content' => 'required',
        //     'content_und' => 'required',
        //     'image' => 'required',
        //     'parent' => 'required',
        //     'status' => 'required',

        // ],[]);
        // echo $id;die;
        // echo base_path('/uploads/');die;
        // echo $request->slug;die;
        $image = $model->image;
        if($request->has('file')){
            $file = $request->file;
            $file->move(base_path('/uploads'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }
        $model->update([
             'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
            'content_und' => $request->content_und,
            'parent' => $request->parent,
            'status' => $request->status,
        ]);
         return redirect()->route('backend.news')->with('success','Update '.$model->title.' thành công');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Product::destroy($id);
        return redirect()->route('backend.news')->with('success','Xoa thành công');
    }
}
