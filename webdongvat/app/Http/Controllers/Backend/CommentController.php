<?php 
namespace App\Http\Controllers\Backend;
use View;
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
 
class CommentController extends Controller
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

    public function getList()
    {
        $comments = DB::table("comment")->where('status',1)->get();
        return view("backend.comments.list", compact("comments"));
    }
    public function postList(Request $request)
    {
            $comments = DB::table("comment")->get();   
      $id = $request->id_cmm;
 $id_pro = Comment::all()->where('id',$id)->first();
            //dd($id_pro);

          $model = Comment::find($id);
         $model->update([
            'status' => '0',
        ]);
        return redirect()->route("backend.comments", compact("comments"))->with('success','Update '.$model->name.' thành công');
    }
    public function getComment($id)
    {
        $reply_comments = Comment::find($id)->replies()->get()->toArray();
        $comment = Comment::find($id)->first()->toArray();
        return view("backend.comments.detail", compact("reply_comments","comment"));

    }

    public function getDelete($id)
    {
        $comment_delete = Comment::find($id);
        $comment_delete->delete($id);
        //dd($comment_delete);
        return redirect()->route("backend.comments")->with([
            'flash_message' => 'Xóa thành công comment!',
            'flash_level' => 'success'
        ]);;
    }

 
}
