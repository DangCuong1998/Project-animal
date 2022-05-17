<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    //
    protected $table = 'comment';
    protected $fillable = [
        'comm_name','comm_content','comm_image','product_id','status','created_at','updated_at'
    ];    

    public function replies()
    {
        return $this->hasMany('App\ReplyComment');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public static function saveComment()
    {

    }
}
