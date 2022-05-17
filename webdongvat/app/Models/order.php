<?php 
namespace App\models

use Illuminate\Databases\Eloquent\Model;

class order extends Model{
	protected $table='orders';

	protected $fillable=['iduser','date_created','note','payment_method','payment_orders','created_at','updated_at'];
}
 ?>