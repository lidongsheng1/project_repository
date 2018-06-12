@extends('layouts.admin')
@section("content")
<div class="row">
	<style>
		.col-sm-9 a{
			position:relative;
			top:8px;
		}
	</style>
	<div class="page-title"> 
        <h3 class="title">Welcome ! {{session('user_id')}}</h3> 
    </div>
    <div class="col-lg-12">              
        <!-- BEGIN WEATHER WIDGET 1 -->
        <div class="panel bg-success-alt">
            <div class="panel-body">
            
                <div class="row">
                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                            	<h1 class="m-t-0 text-white"><b>{{$weather->result->today->city}}</b></h1>
                            	<br />
                                <canvas id="clear-day" width="115" height="115"></canvas>
                            </div>
                            <div class="col-xs-6">
                                <h2 class="m-t-0 text-white"><b info="temp">{{$weather->result->today->temperature}}</b></h2>
                                <p class="text-white" info="weat">{{$weather->result->today->weather}}</p>
                                <p class="text-white" info="wind">{{$weather->result->today->wind}}</p>
                                <p class="text-white" info="date">
                                	{{$weather->result->today->date_y}}
                                	{{$weather->result->today->week}}
                                </p>
                                <p class="text-white" info="ToDayDescription">天气炎热，建议着短衫、短裙、短裤、薄型T恤衫等清凉夏季服装</p>
                            </div>
                        </div><!-- End row -->
                    </div>
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <h4 class="text-white m-t-0">{{$weather->result->future[1]->week}}</h4>
                                {{$weather->result->future[1]->weather}}
                                <h4 class="text-white">{{$weather->result->future[1]->temperature}}<i class="wi-degrees"></i></h4>
                            </div>
                            <div class="col-xs-4 text-center">
                                <h4 class="text-white m-t-0">{{$weather->result->future[2]->week}}</h4>
                                {{$weather->result->future[2]->weather}}
                                <h4 class="text-white">{{$weather->result->future[2]->temperature}}<i class="wi-degrees"></i></h4>
                            </div>
                            <div class="col-xs-4 text-center">
                                <h4 class="text-white m-t-0">{{$weather->result->future[3]->week}}</h4>
                                {{$weather->result->future[3]->weather}}
                                <h4 class="text-white">{{$weather->result->future[3]->temperature}}<i class="wi-degrees"></i></h4>
                            </div>
                        </div><!-- end row -->
                        <br />	
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <h4 class="text-white m-t-0">{{$weather->result->future[4]->week}}</h4>
                                {{$weather->result->future[4]->weather}}
                                <h4 class="text-white">{{$weather->result->future[4]->temperature}}<i class="wi-degrees"></i></h4>
                            </div>
                            <div class="col-xs-4 text-center">
                                <h4 class="text-white m-t-0">{{$weather->result->future[5]->week}}</h4>
                                {{$weather->result->future[5]->weather}}
                                <h4 class="text-white">{{$weather->result->future[5]->temperature}}<i class="wi-degrees"></i></h4>
                            </div>
                            <div class="col-xs-4 text-center">
                                <h4 class="text-white m-t-0">{{$weather->result->future[6]->week}}</h4>
                                {{$weather->result->future[6]->weather}}
                                <h4 class="text-white">{{$weather->result->future[6]->temperature}}<i class="wi-degrees"></i></h4>
                            </div>
                        </div><!-- end row -->
                    </div>
                </div><!-- end row -->
            </div><!-- panel-body -->
        </div><!-- panel-->
        <!-- END Weather WIDGET 1 -->   
    </div>
	<div class="col-lg-7">
        <div class="panel panel-default">
            <div class="panel-heading"> 
                <h3 class="panel-title">Your Detail</h3> 
            </div> 
            <div class="panel-body"> 
                <form action="{{action('admin\IndexController@store')}}" method="post" class="form-horizontal editor-horizontal">
                    {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-sm-3 control-label">email</label>
                    <div class="col-sm-9">
                        <a href="javascript:;" id="email" data-type="text" data-pk="2" data-title="Update Your Email">{{$user->email}}</a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">username</label>
                    <div class="col-sm-9">
                        <a href="#" id="username" data-type="text" data-pk="1" data-title="Update Your Username">{{$user->name}}</a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">sex</label>
                    <div class="col-sm-9">
                        <a href="#" id="sex" data-type="select" data-pk="1" data-value="1" data-title="Select Your sex"></a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">BirthDay</label>
                    <div class="col-sm-9">
                        <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                        <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter Description">awesome user!</a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Submit</label>
                    <div class="col-sm-9">
                        <input type="submit" class="btn btn-success">
                    </div>
                </div>
            </form>
            </div> 
        </div>
    </div>
    <div class="col-lg-5">
        <div class="panel panel-default">
            <div class="panel-heading"> 
                <h3 class="panel-title">Your Avatar</h3> 
            </div> 
            <div class="panel-body"> 
            	<a id="UploadAvatar" href="javascript:;"><img src="{{$user->image}}" style="width:210px" id="ShowAvatar"></a>
                <form id="raven" enctype="multipart/form-data">
                    <input style="display:none" type="file" name="avatar" id="Upload">
                    <input type="hidden" name="id" value="{{session('user_id')}}">
                </form>
            </div> 
        </div>
    </div>
</div>
@endsection

@section('js')
	<script type="text/javascript" src="admin/js/moment.min.js"></script>    
    <script type="text/javascript" src="admin/js/bootstrap-editable.js"></script>
    <script type="text/javascript" src="admin/js/demo-xeditable.js"></script>
    <script type="text/javascript">
        $('#UploadAvatar').click(function(){
            $('#Upload').trigger('click');
        });
        $('#Upload').change(function(){
            var formData = new FormData($('#raven')[0]);  
            console.log(formData);
            $.ajax({
                type: 'post',  
                url: "api/avatar", 
                data: formData,  
                cache: false,  
                processData: false,  
                contentType: false,
                success:function(obj){
                    if(obj[0]){
                        $('#ShowAvatar').attr('src',obj[0]);
                    } 
                }
            });
        });
    </script>
@endsection