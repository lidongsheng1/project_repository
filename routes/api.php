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

   	Route::post('topic',function(Request $request){
   		$result=App\Topic::select(["topic","id"])->where("topic","like","%".$request->get("q")."%")->get();
   		return $result;
   	});

   	Route::post('avatar','AvatarController@store');

   	Route::post('questioncontent',function(Request $request){
   		return App\Question::find($request->id);
   	});

   	Route::post('updatecontent',function(Request $request){
   		$question=App\Question::find($request->id);
      $question->content=$request->content;
      if($question->save()){
        return 1;
      }
   	});

});