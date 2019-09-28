@extends('layouts.page')

@section('header')
<title>{{$category->name}}</title>
@endsection

@section('body')
<div>
  <div class="hero-wrap hero-bread" style="background-image: url({{$category->background_url}});">
    <div class="overlay" style="opacity: .6; width: 100%; background: #000000;"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <!-- <div class="col-md-9 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
          <h1 class="mb-0 bread">Blog</h1>
        </div> -->
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-2 bread">{{$category->name}}</h1>
          <p class="breadcrumbs">
            <span class="mr-2">
              <a href="/">Trang chủ &nbsp;<i class="ion-ios-arrow-forward"></i></a>
            </span>
            <span>{{$category->name}} &nbsp;<i class="ion-ios-arrow-forward"></i></span>
          </p>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">
        @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="col-md-12 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch d-md-flex">
            <a href="/bai-viet/{{$post->url}}" class="block-20" style="background-image: url({{$post->image_url}});">
            </a>
            <div class="text d-block pl-md-4">
              <div class="meta mb-3">
                <div><a>{{$post->day}} Thg {{$post->month}} {{$post->year}}</a></div>
                <div><a>Admin</a></div>
                <div><a class="meta-chat"><span class="fas fa-eye"></span> {{$post->views}}</a></div>
              </div>
              <h3 class="heading"><a href="/bai-viet/{{$post->url}}">{{$post->name}}</a></h3>
              <p>{{$post->abstract}}</p>
              <p><a href="/bai-viet/{{$post->url}}" class="btn btn-primary py-2 px-3">Xem chi tiết</a></p>
            </div>
          </div>
        </div>
        @endforeach
        @else
        <div class="container">
          <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
              <h2 style="color:black;" class="mb-2 bread">Hiện tại không có bài viết nào!</h2>
            </div>
          </div>
        </div>
        @endif
      </div>
      
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              @if ($currPage > 1)
              <li><a href="{{$currUrl}}?page={{$previousPage}}">&lt;</a></li>
              @endif
              @foreach ($listPages as $page)
              @if($page!= '...')
              <li class="{{($page==$currPage) ? 'active':''}}"><a href="{{$currUrl}}?page={{$page}}">{{$page}}</a></li>
              @else
              <li><a>...</a></li>
              @endif
              @endforeach
              @if ($currPage < $totalPage) <li><a href="{{$currUrl}}?page={{$nextPage}}">&gt;</a></li>
                @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection