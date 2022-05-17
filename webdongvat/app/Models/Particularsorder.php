<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Particularsorder extends Model
{
    /**
	* Khai báo bảng
    */

    protected  $table = 'particularsorder';

    protected $fillable = [
    	'id_product','id_order','quatity','phone','price',
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
