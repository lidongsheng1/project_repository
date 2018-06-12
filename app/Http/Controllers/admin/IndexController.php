<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Handlers\CurlRequestHandler;
use App\Http\Controllers\Controller;
use App\User;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CurlRequestHandler $curl)
    {
        $weather=JSON_decode($curl->curl('http://v.juhe.cn/weather/index',["format"=>2,"cityname"=>"北京","key"=>"6301f9f58815154eee4be2a491829c78"]));
        $user=User::find(session('user_id'));
        // $weather='{"resultcode":"200","reason":"successed!","result":{"sk":{"temp":"23","wind_direction":"南风","wind_strength":"2级","humidity":"50%","time":"08:25"},"today":{"temperature":"20℃~35℃","weather":"晴","weather_id":{"fa":"00","fb":"00"},"wind":"西南风3-5级","week":"星期一","city":"北京","date_y":"2018年06月04日","dressing_index":"炎热","dressing_advice":"天气炎热，建议着短衫、短裙、短裤、薄型T恤衫等清凉夏季服装。","uv_index":"中等","comfort_index":"","wash_index":"较适宜","travel_index":"较适宜","exercise_index":"较适宜","drying_index":""},"future":[{"temperature":"20℃~35℃","weather":"晴","weather_id":{"fa":"00","fb":"00"},"wind":"西南风3-5级","week":"星期一","date":"20180604"},{"temperature":"23℃~37℃","weather":"多云","weather_id":{"fa":"01","fb":"01"},"wind":"西南风3-5级","week":"星期二","date":"20180605"},{"temperature":"25℃~36℃","weather":"多云","weather_id":{"fa":"01","fb":"01"},"wind":"东北风微风","week":"星期三","date":"20180606"},{"temperature":"21℃~31℃","weather":"阴转多云","weather_id":{"fa":"02","fb":"01"},"wind":"北风3-5级","week":"星期四","date":"20180607"},{"temperature":"20℃~31℃","weather":"多云转阴","weather_id":{"fa":"01","fb":"02"},"wind":"西南风3-5级","week":"星期五","date":"20180608"},{"temperature":"23℃~37℃","weather":"多云","weather_id":{"fa":"01","fb":"01"},"wind":"西南风3-5级","week":"星期六","date":"20180609"},{"temperature":"21℃~31℃","weather":"阴转多云","weather_id":{"fa":"02","fb":"01"},"wind":"北风3-5级","week":"星期日","date":"20180610"}]},"error_code":0}';

        // $weather=JSON_decode($weather);
        return view('admin.index.index',compact('weather','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
