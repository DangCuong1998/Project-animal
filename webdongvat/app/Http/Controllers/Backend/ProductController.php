<?php

namespace App\Http\Controllers\Backend;
use View;
use App\Http\Controllers\Controller;
//use App\Events\Orderinfor;
//use App\Listener\Sendmailafterorder;

use App\Models\Category;
use App\Models\Product;
use Cart;
use Illuminate\Http\Request;
use App\Models\Catparent;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use App\Models\Banner;
use App\Models\Comment;
use App\Models\Orders;
use App\Models\Product_images;
use App\Models\User;
use App\Models\Customer;
use App\Models\Particularsorder;
use Hash;

class ProductController extends Controller
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
         $category2 = DB::table('category')
      ->select('category.id', 'category.name as cat_name')
      ->join('product', 'product.cat_id', '=', 'category.id')
      ->where('category.status', 1)
      ->get();
// dd($category2);
         $model = User::all();
$comments = DB::table("comment")->where('status',1)->get();
        return view('backend.product.index',[
            'products' => Product::paginate(10),
            'model' => $model,
            'comments' => $comments,
            'category2' => $category2,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//dd('ssss');
        return view('backend.product.create',[
            'cats' => DB::table("category")->where('parent','<>',0)->get(),
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
        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required',
            'cat_id' => 'required',
            'price' => 'required',
            'info_product' => 'required',
        ],[]);
         //echo base_path('uploads');die;
        $image = '';
        if($request->has('file')){
            $file = $request->file;
            $file->move(base_path('/uploads'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }

        Product::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $image,
            'cat_id' => $request->cat_id,
            'content' => $request->content,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'status' => $request->status,
            'info_product' => $request->info_product,

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
        $model = Product::find($id);

        return view('backend.product.edit',[
            'model' => $model,
            'cats' => Category::all()
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
        $model = Product::find($id);
        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required',
            'cat_id' => 'required',
            'price' => 'required',
            'info_product' => 'required',

        ],[]);
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
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $image,
            'cat_id' => $request->cat_id,
            'content' => $request->content,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'status' => $request->status,
            'info_product' => $request->info_product,

        ]);
         return redirect()->route('backend.product')->with('success','Update '.$model->name.' thành công');  
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
        return redirect()->route('backend.product')->with('success','Xoa thành công');
    }

 public function sale()
    {
         $model = User::all();
$products = DB::table("product")->where('status',1)->where('sale_price','<>',0)->get();
        return view('backend.product.sale',[
            'products' => Product::paginate(10),
            'model' => $model,
        ]);
    }


}
