<?php 
namespace App\models

use Illuminate\Database\Eloquent\models

class orderdetail extends Model{
	protected $table='orderdetail';

	protected $fillable=['quantity','price'];

}
 ?>
