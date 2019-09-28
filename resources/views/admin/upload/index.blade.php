@extends('layouts.admin')
@section('css')
<title>Upload</title>
@endsection

@section('body')
<main class="mdl-layout__content ">

    <div class="mdl-grid ui-tables">

        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h1 class="mdl-card__title-text">Danh sách bài viết</h1>
                </div>
                <div class="mdl-card__supporting-text no-padding">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input accept="image/*" type="file" id="image" name="image">
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection

@section('js')

@endsection