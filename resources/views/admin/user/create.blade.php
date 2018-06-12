@extends('layouts.admin')
@section("content")
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">CreateUser</h3></div>
            <div class="panel-body">
                <form class="form-horizontal p-20" role="form" action="{{action('admin\UserController@store')}}" method="post" enctype="multipart/form-data">    
                 {{ csrf_field() }}                                
                    <div class="form-group">
                        <label class="col-md-2 control-label">Username</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="example-email">Email</label>
                        <div class="col-md-10">
                            <input type="email" id="example-email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Password</label>
                        <div class="col-md-10">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Phone</label>
                        <div class="col-md-10">
                            <input type="tel" class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Create</label>
                        <div class="col-md-10">
                            <input type="submit" class="form-control btn-success">
                        </div>
                    </div>
                </form>
            </div> <!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col -->
</div> <!-- End row -->
@endsection