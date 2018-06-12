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
                                    <th>topic</th>
                                    <th>Username</th>
                                    <th>backImage</th>
                                    <th>description</th>
                                    <th>questions</th>
                                    <th>followers</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($topics as $topic)
                                <tr>
                                    <td>{{$topic->topic}}</td>
                                    <td>{{$topic->user['name']}}</td>
                                    <td>
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#{{$topic->id}}">显示</a>
                                    </td>

                                    <div id="{{$topic->id}}" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="mySmallModalLabel">BackImage</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <img style="width:100%" src="{{$topic->back_img}}">
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    <td>
                                        <button id="{{$topic->id}}" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">点击显示内容</button>
                                    </td>

                                    <td>
                                        <form style="display:inline" action="{{action('admin\QuestionController@destroy',['id'=>$question->id])}}" method="POST">
                                            {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger">Destroy</button>
                                        </form>
                                    </td> 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!--  Modal content for the above example -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button id="closeModel" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myLargeModalLabel">Content</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div id="script" style="overflow:auto;">
                                        </div>
                                        <div id="editorBox" style="min-height:100px">
                                        </div>
                                        <input id="updateContent" type="submit" class="btn btn-info">
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
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
<script src="//unpkg.com/wangeditor/release/wangEditor.min.js"></script>

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