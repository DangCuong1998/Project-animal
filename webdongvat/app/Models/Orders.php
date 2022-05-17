<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    /**
	* Khai báo bảng
    */

    protected  $table = 'orders';

    protected $fillable = [
    	'id_customer','cart_item','cart_total',
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
