<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use App\User;
use Session;

class AdminLoginController extends Controller
{
    public function store(AdminLoginRequest $request){
    	Session::put('user_id',User::where(['name'=>$request->name])->first()->id);

    	return redirect(action('admin\IndexController@index'));
    }
}
