<?php 
namespace App\Http\Controllers\Backend;

use DB, Mail, Cart;
use View;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Models\User;
/**
 * summary
 */
class ContactController extends Controller
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

	public function contact()
	{
 $model = User::all();
$comments = DB::table("comment")->where('status',1)->get();
		$contact = Contact::all();

		$c = Contact::paginate(10);
        return view('backend.contact.index',[
            'cn' => $c,
            'model' => $model,
            'comments' => $comments,
        ]);
	}
	public function unfinished()
	{

		$model = Contact::all();

		return view('backend.contact.unfinished',[
			'model' => $model,
			]);
	}
	public function finished()
	{

		$model = Contact::all();

		return view('backend.contact.finished',[
			'model' => $model,
			]);
	}
      public function destroy($id)
    {
        Contact::destroy($id);
        return redirect()->route('contact.finished',$id)->with('success','Xoa thành công');
    }
}

	?>