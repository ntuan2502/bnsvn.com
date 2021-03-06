@extends('layouts.admin')
@section('css')
<title>Thêm bài viết</title>
@endsection

@section('body')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Thêm bài viết</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/admin">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a>Bài viết</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Thêm bài viết</strong>
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
                    <h5>Thêm bài viết</h5>
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
                            <label class="col-sm-2 col-form-label" for="category">Chuyên mục</label>
                            <div class="col-sm-10">
                                <select class="select2_demo_1 form-control" name="category" id="category">
                                    @foreach($categories_all as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="name">Tên bài viết</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="name" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="url">URL</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="url" name="url" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="abstract">Tóm tắt</label>
                            <div class="col-sm-10">
                                <textarea name="abstract" id="abstract" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="image">Ảnh bìa</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input id="image" name="image" type="file" class="custom-file-input">
                                    <label for="image" id="name_image" class="custom-file-label">Choose file...</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="keywords">Từ khóa</label>
                            <div class="col-sm-10">
                                <input class="form-control tagsinput" type="text" id="keywords" name="keywords">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="content">Nội dung</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="content" id="content"></textarea>
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
<script src="{{asset('asset/admin/js/post.js')}}"></script>
@endsection