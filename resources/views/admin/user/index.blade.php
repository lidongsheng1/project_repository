@extends('layouts.admin')
@section("content")
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">UserList</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Phone</th>
                                    <th>Sex</th>
                                    <th>Birthday</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->userDetail['sex']}}</td>
                                    <td>{{$user->userDetail['birthday']}}</td>
                                    <td>{{$user->userDetail['description']}}</td>
                                    <td>
                                        <button class="btn btn-success">Edit</button>
                                        <form style="display:inline" action="{{action('admin\UserController@destroy',['id'=>$user->id])}}" method="POST">
                                            {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<!-- js placed at the end of the document so the pages load faster -->

<script src="{{asset('admin/js/jquery.datatables.min.js')}}"></script>
<script src="{{asset('admin/js/datatables.bootstrap.js')}}"></script>
<script src="{{asset('admin/js/datatables.buttons.min.js')}}"></script>
<script src="{{asset('admin/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/jszip.min.js')}}"></script>
<script src="{{asset('admin/js/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/js/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/js/datatables.fixedheader.min.js')}}"></script>
<script src="{{asset('admin/js/datatables.keytable.min.js')}}"></script>
<script src="{{asset('admin/js/datatables.responsive.min.js')}}"></script>
<script src="{{asset('admin/js/responsive.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/datatables.scroller.min.js')}}"></script>

<script src="{{asset('admin/js/datatables.init.js')}}"></script>

<script type="text/javascript">

    $(document).ready(function() {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable( { keys: true } );
        $('#datatable-responsive').DataTable();
        $('#datatable-scroller').DataTable( { deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
        var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
    } );
    TableManageButtons.init();
</script>
@endsection