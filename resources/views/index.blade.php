@extends('layouts.page')
@section('header')
<title>Blade & Soul VN</title>
@endsection
@section('body')
<div id="page">

	<section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
			<div class="slider-item" style="background-image: url({{$background->value}});">
				<div class="overlay"></div>
				<div class="container">
					<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

						<div class="col-md-12 ftco-animate text-center">
							<h1 class="mb-2">{{$heading->value}}</h1>
							<h2 class="subheading mb-4">Phiên bản {{$version->value}} - Cập nhật {{$update_time->value}}</h2>
							<p><a href="#" class="btn btn-primary">View Details</a></p>
						</div>

					</div>
				</div>
			</div>

			<div class="slider-item" style="background-image: url({{$background->value}});">
				<div class="overlay"></div>
				<div class="container">
					<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

						<div class="col-sm-12 ftco-animate text-center">
							<h1 class="mb-2">{{$heading->value}}</h1>
							<h2 class="subheading mb-4">Phiên bản {{$version->value}} - Cập nhật {{$update_time->value}}</h2>
							<p><a href="#" class="btn btn-primary">View Details</a></p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section" >
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">12 Hệ phái</span>
					<h2 class="mb-4">Trong Blade and Soul</h2>
					<p>Hệ phái ra mắt gần đây: "Cung thủ" <br> (Ngày 24/09/2019 tại máy chủ Garena Blade & Soul Việt Nam)</p>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						@foreach($sects_all as $hephai)
						<div class="item">
							<div class="testimony-wrap p-4 pb-5">
								<div class="user-img mb-5" style="background-image: url({{$hephai->icon_url}}); background-position: bottom;">
								</div>
								<div class="text text-center">
									<p class="mb-5 pl-4 line">{{$hephai->abstract}}</p>
									<p class="name">{{$hephai->name}}</p>
									<span class="position">{{$hephai->element}}</span>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row no-gutters ftco-services">
				<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
							<span class="fas fa-cut"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Phân tách</h3>
							<span>Phân tách vật phẩm không tốn thời gian chờ (ngọc, vệ hồn, trang sức...)</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
							<span class="fas fa-box-open"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Mở vật phẩm</h3>
							<span>Mở vật phẩm không tốn thời gian chờ (tất cả các loại rương)</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
							<span class="fas fa-tv"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Bảng sát thương</h3>
							<span>Hiển thị bảng thông số sát thương (bao gồm tất cả các loại hiệu ứng và kỹ năng đi kèm)</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
							<span class="fas fa-tools"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Tối ưu hoá</h3>
							<span>Hiển thị tính năng tối ưu hoá trong mục cài đặt của game</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-degree-bg">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<h2 class="mb-4">Bài viết gần đây</h2>
				</div>
			</div>
			<div class="row">
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
			</div>
		</div>
	</section>

	<hr>
</div>
@endsection