<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     /**
	* Khai báo bảng
    */

    protected  $table = 'product';

    protected $fillable = [
    	'name','price','status','sale_price','cat_id','image','content','slug','info_product'
    ];


    /*
		Thực hiện Llaravel Eloque ORM (Object relation Maping )
		Mot san pham nam trong mot danh muc
    */
    public function cat(){
    	return $this->hasOne('\App\Models\Category','id','cat_id');
    }
    public function com(){
        return $this->hasMany('\App\Models\Comment','id','id_pro');
    }
}
