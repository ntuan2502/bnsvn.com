@extends('layouts.admin')
@section('css')
<title>Danh sách bài viết</title>
@endsection

@section('body')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Bài viết</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/admin">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a>Bài viết</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Bài viết</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
        <h2></h2>
        <a href="/admin/baiviet/them">
            <button class="btn btn-primary pull-right">Thêm bài viết</button>
        </a>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Danh sách bài viết</h5>
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
                                    <th>Tên Bài viết</th>
                                    <th>Chuyên mục</th>
                                    <th>Người tạo</th>
                                    <th>Ảnh</th>
                                    <th>Tóm tắt</th>
                                    <th>Lượt xem</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td><a href="/bai-viet/{{$post->url}}" target="_blank">{{$post->name}}</a></td>
                                    <td>{{$post->category_name}}</td>
                                    <td>{{$post->user_name}}</td>
                                    <td>
                                        <img style="width: 3rem;" src="/{{$post->image_url}}" alt="">
                                    </td>
                                    <td>{{mb_substr(strip_tags($post->abstract), 0, 40)}}{{(strlen($post->abstract) > 40 ? "..." : "")}}</td>
                                    <td>{{$post->views}}</td>
                                    <td>
                                        <a href="/admin/baiviet/sua/{{$post->id}}">
                                            <button class="btn btn-warning">Sửa</button>
                                        </a>
                                        <button class="btn btn-danger btn-delete" data-id="{{$post->id}}">Xóa</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Tên Bài viết</th>
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
                window.location.href = '/admin/baiviet/xoa/' + id;
            });
        });

    });
</script>
@endsection