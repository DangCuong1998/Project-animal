<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_images extends Model
{
    /**
	* Khai báo bảng
    */

    protected  $table = 'Product_images';

    protected $fillable = [
    	'id','product_id','image','status'
    ];

      /*
		Thực hiện Llaravel Eloque ORM (Object relation Maping )
		Mot san pham nam trong mot danh muc
		Select * FROM product Where cat_id = id
		hasMany la ham tra ve nhie ket qua
    */
        
     public function pro(){
        return $this->hasOne('\App\Models\Category','product_id','id');
    }

}
