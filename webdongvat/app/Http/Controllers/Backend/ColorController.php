<?php

namespace App\Http\Controllers\Backend;
use DB, Mail, Cart;
use View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Color;
use App\Models\User;
class ColorController extends Controller
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
        $c = Color::all();
        return view('color.index',[
            'co' => $c,
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
         return view('color.create',[
            'catsp' => Color::all()
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
            'color' => 'required|unique:category,color'
        ],[
            'color.required' => 'Trường tên không được để trống',
            'color.unique' => 'Trường tên  này đã tồn tại trong CSDL'
        ]);
        Category::create([
            'color' => $request->color,
            'idpro' => $request->parent,
        ]);
          return redirect()->route('backend.color')->with('success','Thêm mới thành công'); 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Color  $Color
     * @return \Illuminate\Http\Response
     */
    public function show(Color $Color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Color  $Color
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $model = Color::find($id);

        return view('Color.edit',[
            'model' => $model,
            'cats' => Color::all(),
            'catsp' => Catparent::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Color  $Color
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
         $model = Color::find($id);
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
         return redirect()->route('backend.Color')->with('success','Update '.$model->name.' thành công');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Color  $Color
     * @return \Illuminate\Http\m_responsekeys(conn, identifier)
     */
    //

    public function destroy($id)
    {
        Color::destroy($id);
        return redirect()->route('backend.Color',$id)->with('success','Xoa thành công');
    }
      
}

