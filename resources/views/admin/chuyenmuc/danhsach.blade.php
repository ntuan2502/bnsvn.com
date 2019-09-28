@extends('layouts.admin')
@section('css')
<title>Danh sách chuyên mục</title>
@endsection

@section('body')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Chuyên mục</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/admin">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a>Chuyên mục</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Chuyên mục</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
        <h2></h2>
        <a href="/admin/chuyenmuc/them">
            <button class="btn btn-primary pull-right">Thêm chuyên mục</button>
        </a>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Danh sách chuyên mục</h5>
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
                                    <th>Tên chuyên mục</th>
                                    <th>Icon</th>
                                    <th>Background</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories_all as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td><a href="/chuyen-muc/{{$category->url}}" target="_blank">{{$category->url}}</a></td>
                                    <td>
                                        <img style="width: 3rem;" src="/{{$category->background_url}}" alt="">
                                    </td>
                                    <td>
                                        <a href="/admin/chuyenmuc/sua/{{$category->id}}">
                                            <button class="btn btn-warning">Sửa</button>
                                        </a>
                                        <button class="btn btn-danger btn-delete" data-id="{{$category->id}}">Xóa</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Tên chuyên mục</th>
                                    <th>Icon</th>
                                    <th>Background</th>
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
                window.location.href = '/admin/chuyenmuc/xoa/' + id;
            });
        });

    });
</script>
@endsection