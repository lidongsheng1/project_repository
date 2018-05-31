<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::group([
    'namespace' => 'Api',
], function () {
    // Route::post('/verificationcodes',"VerificationcodesController@store");
    Route::post('verificationcodes',"VerificationCodesController@store");

   	Route::post('send',"MailController@send");

   	Route::get('topic',function(Request $request){
   		$result=App\Topic::select(["topic","id"])->where("topic","like","%".$request->get("query")."%")->get();
   		return $result;
   	});

});