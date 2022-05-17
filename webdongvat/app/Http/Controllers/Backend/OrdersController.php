<?php 

namespace App\Http\Controllers\Backend;
use DB, Mail;
use View;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Catparent;
use App\Models\Product;
use App\Models\Orders;
use App\Models\User;
use Cart;
use App\Models\Particularsorder;
use App\Models\Customer;

class OrdersController extends Controller
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
    public function index(Cart $cart)
    { 
        //dd($cart);
       $model = User::all();
       $customer = Customer::all()->where('status',1);
        
       $comments = DB::table("comment")->where('status',1)->get();
       $o = Orders::all();
       return view('backend.orders.index',[
        'orders' => $o,
        'model' => $model,
        'comments' => $comments,
        'customer' => $customer,
    ]);
   }
   public function orderafter(Cart $cart)
    { 
        //dd($cart);
       $model = User::all();
       $customer = Customer::all()->where('status',0);
        
       $comments = DB::table("comment")->where('status',1)->get();
       $o = Orders::all();
       return view('backend.orders.orderafter',[
        'orders' => $o,
        'model' => $model,
        'comments' => $comments,
        'customer' => $customer,
    ]);
   }
   public function ordererror(Cart $cart)
    { 
        //dd($cart);
       $model = User::all();
       $customer = Customer::all()->where('status',2);
        
       $comments = DB::table("comment")->where('status',1)->get();
       $o = Orders::all();
       return view('backend.orders.ordererror',[
        'orders' => $o,
        'model' => $model,
        'comments' => $comments,
        'customer' => $customer,
    ]);
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $Orders
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $model = Orders::find($id);

       return view('backend.orders.edit',[
        'model' => $model,
        'orders' => Orders::all(),
    ]);
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orders  $Orders
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $Orders
     * @return \Illuminate\Http\m_responsekeys(conn, identifier)
     */
    //

    public function destroy($id)
    {
        Orders::find($id);
        return redirect()->route('backend.category',$id)->with('success','Xoa thành công');
    }
    public function getAddCart()
    {
        return 1;
    }
    public function ordersinfor($id){
        $cus = Customer::find($id);
        $order = DB::table('orders')->where('id_customer',$id)->get();
       // foreach ($order as $key => $value) {
//$id_order = $value->id;

               // }    
$customer = DB::table('customer')->where('id',$id)->get();
              //$order->update([
        //'name' => $request->name,
        //'parent' => $request->parent,
        //'status' => $request->status,
   // ]);
               // dd($id_order);
        $detail = DB::table('particularsorder')->where('id_order',$id);
        //dd($order);
        //$order = DB::table('orders')->get();
        //dd($id);
                // dd($order);
        //$customer = DB::table('customer')->where('id',$order->id_customer);
        //dd($customer);
       // $orders = $order->where('id',$id);


//dd($orders);
        //$particularsorder = DB::table('particularsorder')->where('id_order',$id)->get();
        //foreach ($particularsorder as $key => $value) {
              //$particularsorder->id_product = $value->id_product;

        //}
               //foreach ($particularsorder as $key => $value) {
//$id_pro = $value->id_product;

                //}            
                //$product_name = DB::table('product')->where('id',$id_pro)->get();
//dd($id_pro);
        //if ($order) {
            return view('backend.orders.infor',[
'customer' => $cus,
                'order' => $order,
                //'particularsorder' => $particularsorder,
                //'product_name' => $product_name,
            ]);
//}
        //dd($particularsorder);
        //$product = DB::table('product')->where('id',$particularsorder->id_product);
        //$user = DB::User('users')->where('id',$order->cart_item);
        //return view('backend.orders.infor',[
//'customer' => $customer,
            //'particularsorder' => $particularsorder,
        //]);
    }








     public function update($id,Request $request)
    {
       $orders = DB::table('orders')->where('id_customer',$id)->get();
       // foreach ($order as $key => $value) {
//$id_order = $value->id;
      $cus =  Customer::find($id);
      //dd($cus->id);
           // $od =  DB::table('orders')->where('id_customer',$cus->id)->get();
            //$order = Orders::all();

//dd($id);
               // }    
$customer = DB::table('customer')->where('id',$id)->get();
//dd($customer);
//dd($request->status);
$this->validate($request,[
            
            'status' => 'required',
           
        ],[]);
//$order->status = $request->input('status');
     //$order->save();
 $cus->status = $request->status;
     $cus->save();

              //$orders->update([
        //'parent' => $request->parent,
    //]);
          //    $customer->update([
       // 'parent' => $request->parent,
    //]);
       return redirect()->back()->with('success','Update '.' thành công');  
   }











     public function detailorder($id){
        Particularsorder::find($id);
        //dd($id);
        $detail = DB::table('particularsorder')->where('id_order',$id)->get();
         
                //dd($detail);
        //$detail = DB::table('particularsorder')->where('id_order',$id);
         return view('backend.orders.orderorderdetal',[
//'customer' => $customer,
                'particularsorder' => $detail,
                //'particularsorder' => $particularsorder,
                //'product_name' => $product_name,
            ]); }
}

