<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
   protected $fillable = [
        'user_id', 'title', 'back_image','content','follows','comments','answers','close_comment','is_hidden',
   ];

   public function user(){
   		return $this->belongsTo('App\User');
   }
}
