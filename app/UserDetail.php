<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = [
        'user_id','sex','birthday','description','avatar'
    ];

    public function user(){
    	$this->hasOne('App\User');
    }
}
