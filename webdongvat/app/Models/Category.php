<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
	* Khai báo bảng
    */

    protected  $table = 'category';

    protected $fillable = [
    	'name','parent','status','cat_p','image','slug'
    ];

      /*
		Thực hiện Llaravel Eloque ORM (Object relation Maping )
		Mot san pham nam trong mot danh muc
		Select * FROM product Where cat_id = id
		hasMany la ham tra ve nhie ket qua
    */
        
     public function products(){
    	return $this->hasMany('\App\Models\Product','cat_id','id');
    }
    public function catsp(){
        return $this->hasOne('\App\Models\Catparent','parent','id');
    }

}
