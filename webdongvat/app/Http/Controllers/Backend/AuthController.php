<?php 
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB, Mail, Cart;
use View;
/**
 * summary
 */
class AuthController extends Controller
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
    public function login()
    {
        return view('backend.auth.login');
    }

    public function postLogin(Request $request)
    { 
        $login = [
        'username' => $request ->username,
        'password' => $request ->password,
        'group' => 'admin',
        ];
        $login2 = [
        'username' => $request ->username,
        'password' => $request ->password,
        'group' => 'customer'
        ];
                 //dd($request->only('username','password','group '));

        if (Auth::attempt($login)) {
        	return redirect()->route('backend.index')->with('success','Chao mung tro lai');
        }elseif (Auth::attempt($login2)) {
            return redirect()->route('home')->with('success','Chao mung tro lai');

        }{
        	return redirect()->back()->with('error','Không có quền truy cập or tk mk ko đúng');
        };
    }

}
?>