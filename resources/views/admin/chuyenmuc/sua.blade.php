@extends('layouts.admin')
@section('css')
<title>Sửa chuyên mục</title>
@endsection

@section('body')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Sửa chuyên mục</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/admin">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a>Chuyên mục</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Sửa chuyên mục</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Sửa chuyên mục</h5>
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
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="name">Tên chuyên mục</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="name" name="name" value="{{$category->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="url">URL</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="url" name="url" value="{{$category->url}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="background">Background</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input id="background" name="background" type="file" class="custom-file-input">
                                    <label for="background" id="name_background" class="custom-file-label">Choose file...</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="background">Old Background</label>
                            <div class="col-sm-10">
                                <img src="{{$category->background_url}}" style="width: 30rem;" alt="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary pull-right">Xác nhận</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    jQuery(document).ready(function($) {
        $('#icon_url').bind('input', function() {
            $('#preview').attr('src', $(this).val());
        });
    });
    $('#background').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('#name_background').addClass("selected").html(fileName);
    });
</script>
@endsection