<?php

namespace App\Http\Controllers\Backend;
use DB, Mail, Cart;
use View;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Catparent;
use App\Models\Product;
use App\Models\User;
class CategoryController extends Controller
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
    {    $model = User::all();
$comments = DB::table("comment")->where('status',1)->get();
$c2 = DB::table('category')->where('cat_p',1);
$ca = DB::table("category")
           ->where('cat_p',2)
           ->get();
           // ->where('id','cat_p')
           // dd($ca);
        $c = DB::table('category')->where('cat_p',1)->paginate(10);
        return view('backend.category.index',[
            'cats' => $c,
            'model' =>$model,
            'comments' => $comments,
            'cats_p' => $ca,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = DB::table('category')->where('cat_p',2)->get();
        $cat1 = DB::table('category')->where('cat_p',1)->get();
// dd($cat);
         return view('backend.category.create',[
            'catsp' => $cat,
            'catsp1' => $cat,
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
            'name' => 'required|unique:category,name'
        ],[
            'name.required' => 'Trường tên không được để trống',
            'name.unique' => 'Trường tên  này đã tồn tại trong CSDL'
        ]);
        $image = '';
        if($request->has('file')){
            $file = $request->file;
            $file->move(base_path('/uploads'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }
        Category::create([
            'name' => $request->name,
            'parent' => $request->parent,
            'status' => $request->status,
            'cat_p' => 1,
            'image' => $image,
        ]);
          return redirect()->route('backend.category')->with('success','Thêm mới thành công'); 
        
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
         $model = Category::find($id);

        return view('backend.category.edit',[
            'model' => $model,
            'cats' => Category::all(),
            'catsp' => DB::table('category')->where('parent',0)->get()
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
         $image = '';
        if($request->has('file')){
            $file = $request->file;
            $file->move(base_path('/uploads'),$file->getClientOriginalName());
            $image = $file->getClientOriginalName();
        }
        $model->update([
            'name' => $request->name,
            'parent' => $request->parent,
            'status' => $request->status,
            'cat_p' => 1,
            'image' => $image,
        ]);
         return redirect()->route('backend.category')->with('success','Update '.$model->name.' thành công');  
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
        Category::destroy($id);
        return redirect()->route('backend.category',$id)->with('success','Xoa thành công');
    }
      
}

