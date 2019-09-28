@extends('layouts.admin')
@section('css')
<title>Thêm hệ phái</title>
@endsection

@section('body')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Thêm hệ phái</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/admin">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a>Hệ phái</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Thêm hệ phái</strong>
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
                    <h5>Thêm hệ phái</h5>
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
                    <form action="" method="POST" class="form form--basic">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="name">Tên hệ phái</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="name" name="name" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="abstract">Mô tả</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="abstract" id="abstract" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="element">Hệ</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="element" name="element" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="icon_url">Icon URL</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="icon_url" name="icon_url" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Hình ảnh</label>
                            <div class="col-sm-10">
                                <img style="width: 9rem;" id="preview" src="">
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
</script>
@endsection