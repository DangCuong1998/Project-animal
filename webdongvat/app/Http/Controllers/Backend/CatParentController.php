<?php 
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Catparent;
use App\Models\Product;
use App\Models\User;
use DB, Mail, Cart;
use View;
/**
 * summary
 */
class CatParentController extends Controller
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
     * summary
     */
    public function index()
    {        $model = User::all();
$comments = DB::table("comment")->where('status',1)->get();
$ca = DB::table("category")
->where('cat_p',2);
        $cp = $ca->paginate(10);
        return view('backend.catparent.index',[
              'catsp' => $cp,
              'codel' => $model,
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
           return view('backend.catparent.create',[
            'cats' => Product::all()
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
            'name' => 'required|unique:catparent,name'
        ],[
            'name.required' => 'Trường tên không được để trống',
            'name.unique' => 'Trường tên  này đã tồn tại trong CSDL'
        ]);
        Category::create([
            'name' => $request->name,
            'status' => $request->status,
            'cat_p' => 2,
            'parent' => 0,
        ]);
          return redirect()->route('backend.catparent')->with('success','Thêm mới thành công');  
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

        return view('backend.catparent.edit',[
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
        ],[]);
        $model->update([
            'name' => $request->name,
            'parent' => 0,
            'status' => $request->status,
            'cat_p' => 2,
        ]);
         return redirect()->route('backend.catparent')->with('success','Update '.$model->name.' thành công');  
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
        return redirect()->route('backend.catparent',$id)->with('success','Xoa thành công');
    }
      
}
?>