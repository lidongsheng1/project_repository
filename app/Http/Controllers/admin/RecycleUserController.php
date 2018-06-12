<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class RecycleUserController extends Controller
{
    public function index(){
    	$users=User::where('is_status','0')->with('userDetail')->get();

    	return view('admin.user.recycle',compact('users'));
    }

    public function recovery($id){
    	$user=User::find($id);
        $user->is_status='1';
        if($user->save()){
            return redirect(action('admin\RecycleUserController@index'));
        }
    }
}
	