<?php 
namespace App\Http\Controllers\Backend;

// Include file app\Http\Controllers\Controller.php
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Comment;
use DB, Mail, Cart;
use View;
/**
 * summary
 */
class HomeController extends Controller
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
    {
        
         $model = User::all();
$comments = DB::table("comment")->where('status',1)->get();
        return view('backend.home.index',[
            'model' => $model,
 'comments' => $comments,
        ]);
    }
}
?> 