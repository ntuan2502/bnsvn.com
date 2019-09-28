@extends('layouts.admin')
@section('css')
<title>Danh sách hệ phái</title>
@endsection

@section('body')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Hệ phái</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/admin">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a>Hệ phái</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Hệ phái</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
        <h2></h2>
        <a href="/admin/hephai/them">
            <button class="btn btn-primary pull-right">Thêm hệ phái</button>
        </a>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Danh sách hệ phái</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên hệ phái</th>
                                    <th>Icon</th>
                                    <th>Mô tả</th>
                                    <th>Hệ</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sects_all as $hephai)
                                <tr>
                                    <td>{{$hephai->id}}</td>
                                    <td>{{$hephai->name}}</td>
                                    <td>
                                        <img style="width: 3rem;" src="{{$hephai->icon_url}}" alt="">
                                    </td>
                                    <td>
                                        {{mb_substr(strip_tags($hephai->abstract), 0, 40)}}{{(strlen($hephai->abstract) > 40 ? "..." : "")}}
                                    </td>
                                    <td>{{$hephai->element}}</td>
                                    <td>
                                        <a href="/admin/hephai/sua/{{$hephai->id}}">
                                            <button class="btn btn-warning">Sửa</button>
                                        </a>
                                        <button class="btn btn-danger btn-delete" data-id="{{$hephai->id}}">Xóa</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Tên hệ phái</th>
                                    <th>Icon</th>
                                    <th>Mô tả</th>
                                    <th>Hệ</th>
                                    <th>Thao tác</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [{
                    extend: 'copy'
                },
                {
                    extend: 'csv'
                },
                {
                    extend: 'excel',
                    title: 'ExampleFile'
                },
                {
                    extend: 'pdf',
                    title: 'ExampleFile'
                },

                {
                    extend: 'print',
                    customize: function(win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]
        });

        $('.dataTables-example').on('click', '.btn-delete', function() {
            var id = $(this).data('id');
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function() {
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
                window.location.href = '/admin/hephai/xoa/' + id;
            });
        });

    });
</script>
@endsection