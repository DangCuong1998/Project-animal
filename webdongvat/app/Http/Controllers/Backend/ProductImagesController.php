<?php 
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product_images;
use App\Models\Product;
use File;
use App\Models\User;
use DB, Mail, Cart;
use View;
/**
 * summary
 */
class ProductImagesController extends Controller
{
       public function __construct()
       {
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
     * summary
     */
    public function index()
    {               
        $model = User::all();
        $comments = DB::table("comment")->where('status',1)->get();
        $Pro_img = Product_images::paginate(10);
        return view('backend.product_images.index',[
              'Pro_img' => $Pro_img,
              'model' => $model,
              'comments' => $comments

        ]);
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('backend.product_images.create',[
            'Pro_img' => Product::all()

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
            'product_id' => 'required',
            'status' => 'required',
            //dd($request)->product_id

        ],[]);
         //echo base_path('uploads');die;
          $image = '';
        if($request->has('file')){
            $file = $request->file;
            $file->move(base_path('/uploads/pro-item'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }
        Product_images::create([

            'product_id' => $request->product_id,
            'status' => $request->status,
            'image' => $image


        ]);
         return redirect()->route('backend.product_images')->with('success','Thêm mới thành công');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $model = Product_images::find($id);

        return view('backend.product_images.edit',[
            'model' => $model,
            'cats' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
     public function update($id,Request $request)
     {
         $model = Category::find($id);
        $this->validate($request,[
            'name' => 'required',
            'parent' => 'required',
            'status' => 'required',
        ],[]);
        $model->update([
            'name' => $request->name,
            'parent' => $request->parent,
            'status' => $request->status,
        ]);
         return redirect()->route('backend.product_images')->with('success','Update '.$model->name.' thành công');  
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\m_responsekeys(conn, identifier)
     */
    //

    public function destroy($id)
    {
        product_images::destroy($id);
        return redirect()->route('backend.product_images',$id)->with('success','Xoa thành công');
    }
      
}
?>