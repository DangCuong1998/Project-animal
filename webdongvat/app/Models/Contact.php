<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
	* Khai báo bảng
    */

    protected  $table = 'contact';

    protected $fillable = [
    	'name','email','comment','status',
    ];       
} 
