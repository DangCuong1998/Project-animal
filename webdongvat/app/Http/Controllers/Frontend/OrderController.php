<?php 

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Orders;
use App\Models\Particularsorder;
use Illuminate\Support\Facades\Auth;

use App\Models\Banner;
use App\Models\News;
use App\Models\Category;
use View;
use DB, Mail, Cart;

class OrderController
{

public function order(){
 $ss = (Session('cart'));
         $category = Category::select('id','name','cat_p')->get()->toArray();

  $items = Cart::content();
 $total = (Cart::subtotal());
 //dd($items);
  return view("frontend.order", compact("content", "total"),[
      'products'=> $ss,
'items' => $items,
'total' => $total,
'parent' => $category,
    ]);

}
public function orderstore(Request $req){




 $content = Cart::content();
 $total = (Cart::subtotal());
        //dd($req);
//dd($content);

 $ss = (Session('cart'));
 $auth = (Auth::user());
 $item = (Session('cart'))["default"];
 $items = Cart::content();









 $customer = new Customer;
 $customer->full_name = $req->full_name;
 $customer->email = $req->email;
 $customer->address = $req->address;
 $customer->phone = $req->phone;
 $customer->note = $req->note;
 $customer->status =1;
 $customer->save();




 $order = new Orders;
 $order->id_customer = $customer->id;
 $order->cart_total = Cart::subtotal();
 $order->cart_item = Auth::user()->id;
 $order->save();


 $particularsorder = New Particularsorder;
 foreach (Cart::content() as $value) {
  $particularsorder = New Particularsorder;
  $particularsorder->id_order = $order->id;
  $particularsorder->id_product = $value->id;
  $particularsorder->quatity = $value->qty;
  $particularsorder->phone = $req->phone;


//dd($value->qty);



  $particularsorder->price = $value->price;
  $particularsorder->save();
}
   /*foreach(Cart::content() as $val)
      {{$val->id,}}

   
   endforeach;
        dd($val);

      /* $val->id,
    dd($val->id);
     $val->price,
      $val->qty, 
      $val->options->image };
      dd($items);*/
//$id_customer = $customer->id;
   

      //$order = Orders::find($id_customer);
     


        $category = Category::select('id','name','cat_p')->get()->toArray();

     // event(new Orderinfor($order));
      return view('frontend.order',[
        'parent' => $category,
'ss' => $ss,
'items' => $items,
'total' => $total,
      ])->with('thong bao','Gửi Đơn Hàng Thành Công'.'bên chúng tôi sẽ liên hệ với bạn sớm nhất có thể để xác nhận'); 
    }
    }