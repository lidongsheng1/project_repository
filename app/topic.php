<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
   protected $fillable = [
        'user_id', 'topic', 'back_img','desc','questions_count','followers_count',
    ];
}
