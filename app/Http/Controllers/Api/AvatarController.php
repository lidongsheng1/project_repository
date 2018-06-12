<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Handlers\ImageUploadHandler;
use Session;
use App\User;

class AvatarController extends Controller
{
    public function store(Request $request,ImageUploadHandler $uploader){
    	$user=User::find($request->id);

    	$result=$uploader->save($request->avatar,'avatars',300,300);

   		if(!$result){
            return [];
        }



		$user->image=$result['path'];
        if($user->save()){
            return [$result['path']];
        }
        

    
    }
}