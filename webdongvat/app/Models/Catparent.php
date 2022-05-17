<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catparent extends Model
{
    /**
	* Khai báo bảng
    */

    protected  $table = 'catparent';

    protected $fillable = [
    	'name','status'
    ];

      /*
		Thực hiện Llaravel Eloque ORM (Object relation Maping )
		Mot san pham nam trong mot danh muc
		Select * FROM product Where cat_id = id
		hasMany la ham tra ve nhie ket qua
    */
        
     public function pro(){
        return $this->hasOne('\App\Models\Category','id','parent');
    }

}
