<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
	* Khai báo bảng
    */

    protected  $table = 'news';

    protected $fillable = [
    	'title','content','id_comment','id_user','content_und','image','parent','status'
    ];

      /*
		Thực hiện Llaravel Eloque ORM (Object relation Maping )
		Mot san pham nam trong mot danh muc
		Select * FROM product Where cat_id = id
		hasMany la ham tra ve nhie ket qua
    
        
     public function cat(){
        return $this->hasOne('\App\Models\Category','id','parent');
    }
*/
}
