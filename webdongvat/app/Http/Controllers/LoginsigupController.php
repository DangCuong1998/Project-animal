<?php 
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash;

class LoginsigupController
{
    public function loginmain(){
      return view('frontend.login');
    }
    public function postLoginmain(Request $request){
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
     if (Auth::attempt($login)) {
      return redirect()->route('backend')->with('success','Chao mung tro lai');
    }elseif (Auth::attempt($login2)) {
      return redirect()->route('home')->with('success','Chao mung tro lai');

    }{
      return redirect()->back()->with('error','Không có quền truy cập or tk mk ko đúng');
    }
  }
  public function logoutmain(){
   Auth::logout();
   return redirect()->route('home');

 } 
 public function signup(){

   return view('frontend.signup');
 }
 public function postSignup(Request $request){
  //  $this->validate(
  //   $request,
  //   [
  //     'username' => 'required|min:3|max:20|unique:users,username',
  //     'email' => 'required|email|unique:users,email',
  //     'password' => 'required',
  //     'confirm_password' => 'required|same:password',
  //     'phone' => 'required|min:8|max:12|unique:users,phone',
  //     'address' => 'required|min:5|max:10000',
  //     'full_name' => 'required',

  //   ],
  //   [
  //     'username.required' => 'Tên tài khoản không được để rông',
  //     'confirm_password.same' => 'Nhập lại mật khẩu không đúng',
  //     'username.unique' => 'Tên tài khoản <b>'.$request->username.'</b> đã tồn tại trong data',
  //     'phone.unique' => 'SDT <b>'.$request->phone.'</b> đã được sử dụng',
  //     'phone.required' => 'Số điện thoại phải 8-12 kí tự',
  //     'address.required' => 'Địa chỉ không hợp lệ or quá ngắn',
  //     'email.unique' => 'Email <b>'.$request->email.'</b> đã tồn tại trong data',
  //     'email.required' => 'Email không được để trống',
  //     'full_name.required' => 'Họ và tên không được để trống',

  //   ]
  // );
//dd($request);
    /*$image = '';
    if($request->has('file')){
      $file = $request->file;
      $file->move(base_path('/uploads'),$file->getClientOriginalName());
      $image = $file->getClientOriginalName();
    }*/
    User::create([
      'full_name' => $request->full_name,
      'username' => $request->username,
      //'imageuser' => $image,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'group'=> 'customer',
      'phone' => $request->phone,
      'address' => $request->address,

    ]);
    return view('frontend.signup')->with('ok','Đăng kí thành công');
  }
  public function getSearch(Request $request){
    $product = Product::where('name','like','%'.$request->key.'%')
    ->orWhere('price',$request->key)
    ->get();
    return view('frontend.search',compact('product'));
  }
}