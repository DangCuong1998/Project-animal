<?php
namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB, Mail, Cart;
use View;
use Hash;

class UserController extends Controller
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
        // SELECT * FROM users LIMIT 10
 $model = User::all();
$comments = DB::table("comment")->where('status',1)->get();
        $users = User::paginate(10);
       return view('backend.user.index',[
        'users' => $users,
        'model' => $model,
        'comments' => $comments,
               ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('backend.user.add');
    }

    /**
     * Thuwcjn hiện lưu mới một dữ liệu vào bảng users
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $this->validate(
            $request,
            [
                'username' => 'required|min:3|max:20|unique:users,username',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
                'confirm_password' => 'required|same:password',
                'phone' => 'required|min:8|max:12|unique:users,phone',
                                'address' => 'required|min:5|max:10000',
                                'full_name' => 'required',

            ],
            [
                'username.required' => 'Tên tài khoản không được để rông',
                'confirm_password.same' => 'Nhập lại mật khẩu không đúng',
                'username.unique' => 'Tên tài khoản <b>'.$request->username.'</b> đã tồn tại trong data',
                'phone.unique' => 'SDT <b>'.$request->phone.'</b> đã được sử dụng',
                'phone.required' => 'Số điện thoại phải 8-12 kí tự',
                'address.required' => 'Địa chỉ không hợp lệ or quá ngắn',
                'email.unique' => 'Email <b>'.$request->email.'</b> đã tồn tại trong data',
                'email.required' => 'Email không được để trống',
                'full_name.required' => 'Họ và tên không được để trống',

            ]
        );
        User::create([
      'full_name' => $request->full_name,
      'username' => $request->username,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'group'=> 'customer',
      'phone' => $request->phone,
      'address' => $request->address,

    ]);
        // SESSION['success'] = 'Tạo mói tài khoản thành công';
        return redirect()->route('backend.user')->with('success','Tạo mói tài khoản thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
       USer::destroy($id);
        return redirect()->route('backend.user',$id)->with('success','Xoa thành công');
    }
}
