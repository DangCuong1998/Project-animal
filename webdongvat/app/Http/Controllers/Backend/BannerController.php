<?php

namespace App\Http\Controllers\Backend;
use App\Models\Comment;
use App\Models\Customer;
use App\Models\Http\Requests\CartRequest;
use App\Models\Product;
use App\Models\ProductCustomer;
use App\Models\ProductImage;
use App\Models\ReplyComment;
use DB, Mail, Cart;
use App\Models\Cate;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Banner;
use View;
class BannerController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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


  public function index()
  {   
   $model = User::all();
   $comments = DB::table("comment")->where('status',1)->get();
   return view('backend.banner.index',[
    'banners' => Banner::paginate(10),
    'model' => $model,
    'comments => $comments'
    ]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.banner.create');
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
        'status' => 'required',
        'link' => 'required',

        ],[]);
         //echo base_path('uploads');die;
      $image = '';
      if($request->has('file')){
        $file = $request->file;
        $file->move(base_path('/uploads'),$file->getClientOriginalName());
        $image = $file->getClientOriginalName();
    }
        // Theem key image vao mang
    // $request->merge(['image'=>$image]);
         //dd($request->all());

    Banner::create([
        'name' => $request->name,
        'status' => $request->status,
        'image' => $image,
        'link' => $request->link,
        ]);

    return redirect()->route('backend.banner')->with('success','Thêm mới banner thành công');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Banner::find($id);
        return view('backend.banner.edit',[
            'model' => $model,
            'cats' => Banner::all()
            ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
     $model = Banner::find($id);
     $this->validate($request,[
        'name' => 'required',
        'link' => 'required',
        'status' => 'required',
        'content' => $request->content,


        ],[]);
     $image = '';
     if($request->has('file')){
        $file = $request->file;
        $file->move(base_path('/uploads'),$file->getClientOriginalName());
        $image = $file->getClientOriginalName();
    }
    $model->update([
        'name' => $request->name,
        'image' => $image,
        'content' => $request->content,
        'linl' => $request->link,
        'status' => $request->status,
        ]);
    return redirect()->route('backend.product')->with('success','Update '.$model->name.' thành công');  
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // Banner::find($id)->delete();
        // Banner::destroy([1,2,3,4,5,6]);
        Banner::destroy($id);
        return redirect()->route('backend.banner')->with('success','Delete thành công');
    }
}
