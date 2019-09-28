<!DOCTYPE html>
<html lang="en">

<head>
	<title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('asset/page/css/open-iconic-bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset/page/css/animate.css')}}">

	<link rel="stylesheet" href="{{asset('asset/page/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset/page/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset/page/css/magnific-popup.css')}}">

	<link rel="stylesheet" href="{{asset('asset/page/css/aos.css')}}">

	<link rel="stylesheet" href="{{asset('asset/page/css/ionicons.min.css')}}">

	<link rel="stylesheet" href="{{asset('asset/page/css/bootstrap-datepicker.css')}}">
	<link rel="stylesheet" href="{{asset('asset/page/css/jquery.timepicker.css')}}">
	<link rel="stylesheet" href="{{asset('asset/page/css/bootstrap-social.css')}}">


	<link rel="stylesheet" href="{{asset('asset/page/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('asset/page/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('asset/page/css/style.css')}}">
</head>


<body class="goto-here">

	<form id="signout" action="/signout" method="POST">
		@csrf
	</form>

	<!-- <div class="py-1 bg-primary">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<span class="text">+ 1235 2355 98</span>
						</div>
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
							<span class="text">youremail@email.com</span>
						</div>
						<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
							<span class="text">3-5 Business days delivery &amp; Free Returns</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="/">BNSVN</a>
			<div class="time pl-3" id="days"></div>
			<div class="time" id="months"></div>
			<div class="time" id="years"></div>
			<div class="time pl-3" id="hours"></div>
			<div class="time" id="minutes"></div>
			<div class="time" id="seconds"></div>
			<div class="time pl-3"></div>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="/" class="nav-link">Trang chủ</a></li>
					<!-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="shop.html">Shop</a>
							<a class="dropdown-item" href="wishlist.html">Wishlist</a>
							<a class="dropdown-item" href="product-single.html">Single Product</a>
							<a class="dropdown-item" href="cart.html">Cart</a>
							<a class="dropdown-item" href="checkout.html">Checkout</a>
						</div>
					</li> -->
					<li class="nav-item"><a href="{{$facebook->value}}" target="_blank" class="nav-link">Facebook</a></li>
					<li class="nav-item"><a href="{{$youtube->value}}" target="_blank" class="nav-link">Youtube</a></li>
					<li class="nav-item"><a href="https://discord.gg/JtcN8yF" target="_blank" class="nav-link">Discord</a></li>
					@if(!Auth::check())
					<li class="nav-item cta cta-colored">
						<a href="#" class="nav-link" data-toggle="modal" data-target="#loginModal">
							Đăng nhập
						</a>
					</li>
					@else
                    <li class="nav-item"></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="user_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi, {{Auth::user()->name}}!</a>
						<div class="dropdown-menu" aria-labelledby="user_dropdown">
							@if(Auth::user()->role_id == 1)
							<a class="dropdown-item" href="/admin" >Admin Panel</a>
							@endif
							<a class="dropdown-item" href="javascript: $('#signout').submit();">Đăng xuất</a>
						</div>
					</li>
					<li class="nav-item"><a href="#" class="nav-link"><img style="height: 19px; border-radius: 50%;" src="{{$user_now->avatar_url}}"></a></li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Đăng nhập</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login100-form-social flex-c-m">
						<a href="/auth/facebook" class="btn btn-block btn-social btn-facebook">
							<span class="fab fa-facebook-f"></span> Sign in with Facebook
						</a>
						<a href="/auth/google" class="btn btn-block btn-social btn-google">
							<span class="fab fa-google"></span> Sign in with Google
						</a>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
				</div>
			</div>
		</div>
	</div>
	<!-- END nav -->

	@yield('content')

	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row">
				<div class="mouse">
					<a href="#" class="mouse-icon">
						<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
					</a>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Blade & Soul Việt Nam</h2>
						<p>Chơi game theo cách của bạn!</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="{{$facebook->value}}"><span class="fab fa-facebook"></span></a></li>
							<li class="ftco-animate"><a href="{{$youtube->value}}"><span class="fab fa-youtube"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fab fa-discord"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Garena BNS</h2>
						<ul class="list-unstyled">
							<li><a href="https://bns.garena.vn/" class="py-2 d-block">Giới thiệu</a></li>
							<li><a href="https://bns.garena.vn/main" class="py-2 d-block">Trang chủ</a></li>
							<li><a href="https://quatang.bns.garena.vn/" class="py-2 d-block">Quà tặng</a></li>
							<li><a href="https://dovui.bns.garena.vn/" class="py-2 d-block">Đố vui</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Event + Pay</h2>
						<div class="d-flex">
							<ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
								<li><a href="https://vip.bns.garena.vn/" class="py-2 d-block">VIP</a></li>
								<li><a href="https://box.bns.garena.vn/" class="py-2 d-block">Box</a></li>
								<li><a href="https://event.bns.garena.vn/" class="py-2 d-block">Event</a></li>
								<li><a href="https://khuyenmai.bns.garena.vn/" class="py-2 d-block">Khuyến mãi</a></li>
							</ul>
							<ul class="list-unstyled">
								<li><a href="https://shop.bns.garena.vn/" class="py-2 d-block">Shop</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Thời gian cập nhật</h2>
						<div class="block-23 mb-3">
							<!-- <ul>
								<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
							</ul> -->
							<span>Bản mod sẽ được tung ra sau 3-12h kể từ khi bản cập nhật mới được update trên máy chủ chính thức. (chậm nhất là 24h)</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://www.facebook.com/ntuan.2502" target="_blank">NAT - Coder Fix Bug</a>
					</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg>
	</div>


	<script src="{{asset('asset/page/js/jquery.min.js')}}"></script>
	<script src="{{asset('asset/page/js/jquery-migrate-3.0.1.min.js')}}"></script>
	<script src="{{asset('asset/page/js/popper.min.js')}}"></script>
	<script src="{{asset('asset/page/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('asset/page/js/jquery.easing.1.3.js')}}"></script>
	<script src="{{asset('asset/page/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('asset/page/js/jquery.stellar.min.js')}}"></script>
	<script src="{{asset('asset/page/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('asset/page/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('asset/page/js/aos.js')}}"></script>
	<script src="{{asset('asset/page/js/jquery.animateNumber.min.js')}}"></script>
	<script src="{{asset('asset/page/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('asset/page/js/scrollax.min.js')}}"></script>
	<!-- <script src="{{asset('asset/page/js/google-map.js')}}"></script> -->
	<script src="{{asset('asset/page/js/main.js')}}"></script>

</body>

</html>