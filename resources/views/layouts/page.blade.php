@if($maintenance-> value == 'on')
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Bảo trì</title>
	<link rel="shortcut icon" href="{{asset('asset/favicon.ico')}}">
	<link rel="stylesheet" href="{{ asset('asset/maintenance/style.css')}}">
</head>

<body>

	<body class="permission_denied">
		<div id="particles-js"></div>
		<div class="denied__wrapper">
			<h1>Bảo trì!</h1>
			<h3>Website
				<!-- <span>SPACE</span> -->
				hiện đang bảo trì. Vui lòng quay lại sau!</h3>
			<svg id="astronaut" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
				<style>
					.st0 {
						fill: none;
					}

					.st1 {
						fill: #504E55;
					}

					.st2 {
						fill: #F39E72;
					}

					.st3 {
						fill: #FFFFFF;
					}

					.st4 {
						opacity: 0.24;
					}

					.st5 {
						fill: #77574E;
					}

					.st6 {
						fill: #FBD68D;
					}

					.st7 {
						fill: #ECECEC;
					}

					.st8 {
						fill: #F4A89C;
					}

					.st9 {
						fill: #CFC9E5;
					}

					.st10 {
						opacity: 0.28;
					}

					.st11 {
						opacity: 0.25;
					}

					.st12 {
						fill: #6F635C;
					}

					.st13 {
						fill: #DAE7BE;
					}

					.st14 {
						fill: #FFE0A6;
					}

					.st15 {
						fill: #5F5E60;
					}

					.st16 {
						fill: #CFE1AF;
					}

					.st17 {
						fill: #EBE9F5;
					}

					.st18 {
						fill: #53515A;
					}

					.st19 {
						opacity: 0.42;
					}

					.st20 {
						fill: #53515B;
					}
				</style>
				<circle cx="256.8" cy="255.3" r="247.9" class="st0" />
				<path d="M346.4 475H164.9V244.8c0-14 11.4-25.4 25.4-25.4H321c14 0 25.4 11.4 25.4 25.4V475z" class="st2" />
				<path d="M346.4 470H165l5 5V349.9v-80-21.4c0-10.3 3.9-20.3 15-23.3 6.4-1.8 14.2-.7 20.7-.7h112.4c3.3 0 6.5 0 9.7 1.1 8.3 2.9 13.5 10.7 13.7 19.3.1 4.1 0 8.3 0 12.5v217.7c0 6.4 10 6.4 10 0v-130-79.5-19.1c-.1-13.8-7.6-26-21-30.5-7.2-2.4-15.8-1.5-23.3-1.5H192.9c-14.8 0-28.7 8.4-32 23.6-1.1 5.2-.8 10.8-.8 16.1V475c0 2.7 2.3 5 5 5h181.4c6.3 0 6.3-10-.1-10z" class="st1" />
				<path d="M164.9 250.3v120.3c0 6-4.9 11-11 11-17.6 0-31.9-14.4-31.9-31.9v-78.3c0-17.6 14.4-31.9 31.9-31.9 3 0 5.8 1.2 7.7 3.2 2.1 1.8 3.3 4.5 3.3 7.6z" class="st3" />
				<path d="M159.9 250.3v109.1c0 3.9 1.3 10.8-1 14.3-4.4 7-17.5.4-22.1-3.4-6.2-5.2-9.7-12.7-9.8-20.8-.3-17.8 0-35.6 0-53.3 0-8.3-.1-16.5 0-24.8.1-7.7 3.1-14.9 8.9-20.1 4.7-4.3 23.2-13.2 24-1 .4 6.4 10.4 6.4 10 0-1.7-24.7-33-15.8-43.8-3.2-7.7 9-9.1 19.5-9.1 30.8v68.7c0 13.3 4.7 25.4 15.8 33.3 12.2 8.7 36.4 10.9 37.1-9.5.7-19.1 0-38.3 0-57.4v-62.6c0-6.6-10-6.6-10-.1z" class="st1" />
				<path d="M122 339.8h42.9c6.4 0 6.4-10 0-10H122c-6.4 0-6.4 10 0 10z" class="st1" />
				<path d="M344.4 241v235.9h-36V232.1c0-4.8-2.2-9.2-5.9-12.8h11.7c16.6.1 30.2 9.8 30.2 21.7z" class="st4 st5" />
				<path d="M376 161.2c0 66.4-53.9 120.3-120.3 120.3s-120.3-53.9-120.3-120.3c0-40.5 20-76.2 50.6-98.1 19.7-14 43.7-22.2 69.7-22.2s50 8.2 69.7 22.2C356 84.9 376 120.7 376 161.2z" class="st6" />
				<path d="M371 161.2c-.3 45-26.7 86.2-67.7 105.1-40.7 18.7-90.5 11.1-123.9-18.6-34.7-30.8-47.8-80.2-32.7-124.2 4-11.7 10-22.7 17.5-32.5 3.6-4.7 7.6-9.1 11.9-13.2 1.8-1.7 3.6-3.3 5.4-4.9 1.1-.9 2.2-1.9 3.4-2.8.8-.6 1.6-1.3 2.5-1.9-1.8-.1-1.8-.2 0-.4 21.7-16.2 50.1-23.6 77-21.8C324 50.3 370.6 101.8 371 161.2c0 6.4 10 6.4 10 0-.4-55.8-38.1-106.2-92.3-120.9-28.7-7.8-59.6-5-86.4 7.5-3.2 1.5-6.3 3.1-9.3 4.9-1.6.9-3.2 1.9-4.8 2.9-.6.4-1.4.8-2 1.3-.4.3-.9.6-1.3.9.4.1.8.2 1.2.2-.3.3-1.5.2-1.9.4l-2.4 1.5c-1.1.8-2.2 1.7-3.3 2.6-2.7 2.1-5.3 4.3-7.8 6.6-9.6 8.9-17.9 19.4-24.2 30.8-25.2 45-19.6 102 13.3 141.5 31.5 37.9 84.1 53.8 131.4 39.9 46.1-13.6 81.7-53.9 88.6-101.6.9-6.2 1.4-12.4 1.4-18.7-.2-6.3-10.2-6.3-10.2.2z" class="st1" />
				<path d="M249.6 478.1h-96.4c-2.7 0-4.8-2.2-4.8-4.8v-10.8c0-27.2 22.3-49.5 49.5-49.5h7c27.2 0 49.5 22.3 49.5 49.5v10.8c.1 2.7-2.1 4.8-4.8 4.8z" class="st3" />
				<path d="M249.6 473.1h-93.3c-.5 0-2.7.3-3.1 0-.6-.5.1-7.8.1-9.1 0-5.4.6-10.5 2.3-15.7 7.9-23.8 32.9-33.6 56.2-29.8 14.4 2.3 26.9 11.8 33.2 24.9 2.9 6.1 4.3 12.7 4.3 19.4v6.1c0 2 .8 4.2-1.2 4.5-6.3.9-3.6 10.5 2.7 9.6 6.8-.9 8.5-6.9 8.5-12.8 0-5.1.1-10.2-.6-15.3-2-14.6-10.1-27.7-21.9-36.4-21.6-15.9-55.8-14.2-75.7 3.7-11.2 10.1-17.6 24.6-17.9 39.6-.2 8.4-1.6 20.7 10 21.3 15.1.8 30.4 0 45.5 0h50.7c6.7 0 6.7-10 .2-10z" class="st1" />
				<path d="M358.2 478.1h-96.6c-2.6 0-4.7-2.1-4.7-4.7v-9.6c0-28 22.9-50.8 50.8-50.8h4.4c28 0 50.8 22.9 50.8 50.8v9.6c0 2.6-2.1 4.7-4.7 4.7z" class="st3" />
				<path d="M358.2 473.1h-92.7c-.8 0-3.1.4-3.8 0 0 0 .2-6.4.2-7.6 0-5.2.5-10.1 2-15.1 7.3-24 32.6-36.2 56.4-31.7 14 2.7 26 11.7 32.6 24.3 3.2 6.2 4.9 13.1 5 20.1v5.5c0 2.1.8 4.4-1 4.7-6.3.9-3.6 10.5 2.7 9.6 6.6-.9 8.4-6.7 8.4-12.5 0-5.4.1-10.8-.8-16.2-2.4-14.4-10.8-27.2-22.5-35.8-22.3-16.2-56.2-13.8-75.9 5.4-10.5 10.3-16.6 24.5-16.9 39.2-.1 8.3-1.2 19.4 10 20 15.4.9 31.1 0 46.5 0h49.8c6.4.1 6.4-9.9 0-9.9z" class="st1" />
				<path d="M297.8 366.4h-84.4c-6.6 0-12-5.4-12-12v-47c0-6.6 5.4-12 12-12h84.4c6.6 0 12 5.4 12 12v47c0 6.6-5.4 12-12 12z" class="st3" />
				<path d="M297.8 361.4h-62.4c-7.3 0-14.8.6-22 0-6.3-.5-7-5.6-7-10.6v-17.4-19.2c0-3.5-.8-8.4 1.6-11.3 2.4-2.8 5.8-2.5 9-2.5h53.6c8.8 0 17.7-.5 26.5 0 5.5.3 7.5 4.1 7.5 9.1v39.6c.2 5.2.6 11.9-6.8 12.3-6.4.3-6.4 10.3 0 10 9.7-.5 16.6-7.6 17-17.2.2-4.7 0-9.4 0-14v-22.8c0-4.1.4-8.5-.2-12.5-1.3-8.5-8.6-14.1-17-14.4-3.4-.1-6.8 0-10.3 0h-43c-10.1 0-20.2-.3-30.3 0-8 .3-15.1 5-17.1 13.1-1 4.1-.5 8.8-.5 13 0 12.5-.4 25 0 37.5.3 8.4 5.8 15.8 14.4 17.2 3.1.5 6.3.2 9.4.2h77.7c6.4-.1 6.4-10.1-.1-10.1z" class="st1" />
				<circle cx="230.7" cy="316.7" r="10.4" class="st7" />
				<path d="M236.2 316.7c-.4 7-10.9 7-10.9 0s10.5-7 10.9 0c.3 6.4 10.3 6.4 10 0-.5-8.4-6.7-15.4-15.4-15.4-8.4 0-15.4 7.1-15.4 15.4 0 8.2 6.7 15.1 14.9 15.4 8.9.4 15.6-6.9 16-15.4.2-6.4-9.8-6.4-10.1 0z" class="st1" />
				<circle cx="230.7" cy="345.2" r="10.4" class="st8" />
				<path d="M236.2 345.2c-.4 7-10.9 7-10.9 0s10.5-7 10.9 0c.3 6.4 10.3 6.4 10 0-.5-8.4-6.7-15.4-15.4-15.4-8.4 0-15.4 7.1-15.4 15.4 0 8.2 6.7 15.1 14.9 15.4 8.9.4 15.6-6.9 16-15.4.2-6.4-9.8-6.4-10.1 0z" class="st1" />
				<path d="M371.7 160.3c-.2 47-28.6 87.5-69.2 106.2 21.1-26.3 34.4-60.1 34.4-98.5 0-49.8-21.3-91.8-54.5-118.6-1-.8-2.3-.5-3.3-1.3 15.7 3.5 30 10 42.7 19 30 21.4 50 54.7 49.9 93.2z" class="st4 st5" />
				<path d="M243.8 87h26.1c6.4 0 6.4-10 0-10h-26.1c-6.4 0-6.5 10 0 10z" class="st1" />
				<path d="M351 157.8c0 24.5-9.3 46.9-24.5 63.8-2.7 2.9-6.4 4.6-10.4 4.6l-120.4.4c-4 0-7.8-1.6-10.4-4.5-15.5-16.9-24.9-39.5-24.9-64.2 0-20.7 6.6-39.8 17.7-55.4 2.7-3.7 7-6 11.6-6h132c4.6 0 8.9 2.2 11.5 6 11.2 15.5 17.8 34.6 17.8 55.3z" class="st9" />
				<path d="M346 157.8c-.1 14.7-3.5 29.2-10.4 42.2-3.9 7.4-10.6 20.9-20 21.2-10.5.3-21.1.1-31.6.1-28.8.1-57.7.5-86.5.3-8.6-.1-13.5-8.5-17.8-15.1-7.9-12.3-12.8-26.5-13.9-41.2-1.2-14.9 1.2-30 7.2-43.7 3.4-7.7 8.1-20 17.8-20.2 27.6-.6 55.2 0 82.7 0h41.2c2.3 0 4.8-.2 7.1 0 7 .5 10.2 7.5 13.2 13 3.6 6.5 6.3 13.4 8.2 20.6 1.8 7.5 2.7 15.1 2.8 22.8.1 6.4 10.1 6.4 10 0-.1-15.9-3.8-31.4-10.9-45.6-5.1-10.1-11.3-20.5-23.9-20.8-11.1-.2-22.3 0-33.4 0h-95.5c-7.1 0-13.5 2-18.1 7.9-9.5 12.5-15.5 28.1-17.7 43.6-2.3 15.6-1 31.8 4.1 46.7 2.4 7.2 5.6 14.1 9.6 20.5 3.7 6 8.2 12.9 13.8 17.3 4.8 3.8 10.3 4.1 16.1 4 5.9 0 11.9 0 17.8-.1 18.4-.1 36.9-.1 55.3-.2 13.5 0 27.1-.1 40.6-.1 8.6 0 14.4-3.5 19.8-10.2 9.4-11.7 16.3-25.3 19.7-40 1.8-7.6 2.6-15.4 2.7-23.2 0-6.2-10-6.2-10 .2z" class="st1" />
				<path d="M181.6 111.8c-4.1 7.1-7.1 14.7-8.6 22.8-1.7 8.6 11.5 12.3 13.2 3.6 1.4-7 3.7-13.3 7.3-19.5 4.4-7.6-7.5-14.5-11.9-6.9zM182.4 166.4c-.4-3-.5-6.5-.4-9.8.1-3.7-3.2-6.9-6.9-6.9-3.8 0-6.7 3.1-6.9 6.9-.2 4.5.2 8.9.9 13.4.5 3.7 5.2 5.7 8.4 4.8 4-1.1 5.4-4.8 4.9-8.4z" class="st3" />
				<path d="M357.9 465v1c.6 8.8 1.5 7.2-8.3 7.1h-7.8c1.5-1.9 1.8-2.4 1.8-5.1v-1.1c0-14.1-5.3-26.9-13.7-36.2-5.5-6-12.3-10.3-19.8-12.7.8 0 1.6.1 2.4.1 13.1.8 25.1 6 33.2 14.6 8.1 8.6 12.2 19.5 12.2 32.3z" class="st10 st5" />
				<path d="M362.5 381.5h1.8c13.8 0 25.1-11.3 25.1-25.1v-92.1c0-13.8-11.3-25.1-25.1-25.1h-6.5c-6.3 0-11.4 5.1-11.4 11.4v114.8c0 8.9 7.2 16.1 16.1 16.1z" class="st3" />
				<path d="M362.5 386.5c17.5 0 31.5-12.6 31.9-30.4.2-8.2 0-16.4 0-24.6 0-22.3.5-44.6 0-66.8-.3-17.1-13.6-30.3-30.8-30.4-7.6-.1-15.3.4-19.7 7.7-2.1 3.5-2.4 7.2-2.4 11v106.4c0 2-.1 4 0 6 .3 11.8 9.2 20.6 21 21.1 6.4.3 6.4-9.7 0-10-10.8-.5-11.1-10-11.1-18.1v-28.5-69c0-4.8-1.6-13.9 3.9-16.2 5-2.1 14.1-.4 18.5 2 6.6 3.6 10.4 10.4 10.5 17.8.4 18.6 0 37.2 0 55.8v32.6c0 3.5.1 6.8-1.1 10.2-3.2 9.1-11.6 13.5-20.7 13.5-6.5-.1-6.5 9.9 0 9.9z" class="st1" />
				<path d="M346.4 343.9h42.9c6.4 0 6.4-10 0-10h-42.9c-6.4 0-6.5 10 0 10z" class="st1" />
				<path d="M384.5 269.3v80.5c1.6 20.1-11.2 27.9-24.1 26.2-1.5-.2-3-.4-4.3-1.2 11.2-3.6 19.4-15.1 19.4-28.6v-73c0-13.5-8.2-25-19.4-28.6 2.3-.9 2.8-1.2 4.3-1.2 14.8.1 25.2 10.4 24.1 25.9z" class="st11 st12" />
				<path d="M371.6 128.9l25.1-23.8" class="st13" />
				<path d="M375.1 132.4c8.4-7.9 16.7-15.8 25.1-23.8 4.7-4.4-2.4-11.5-7.1-7.1-8.4 7.9-16.7 15.8-25.1 23.8-4.6 4.5 2.4 11.5 7.1 7.1z" class="st1" />
				<path d="M139.7 128.9l-25.1-23.8" class="st13" />
				<path d="M143.3 125.3c-8.4-7.9-16.7-15.8-25.1-23.8-4.7-4.4-11.8 2.6-7.1 7.1 8.4 7.9 16.7 15.8 25.1 23.8 4.7 4.4 11.7-2.6 7.1-7.1z" class="st1" />
				<circle cx="114.6" cy="105.1" r="4.8" class="st14" />
				<path d="M114.4 105.1c0-.5.1-.1-.1.2.1-.2.5-.7.1-.3-.4.4.1 0 .2-.1.3-.2-.7 0 0 0 .5 0 .1.1-.2-.1.2.1.7.5.3.1-.5-.5.2.2.1.2.1.2.1.2 0-.1-.1-.3-.1-.3 0 .1 0 .7.1-.2.1-.2.1.1-.2.4-.3.5.5-.7.2-.3 0-.1-.3.2.5 0 .2-.1-.6-.1-.4-.1 0 .1-.2-.1-.3-.1-.5-.3.6.6.2.1.1.1-.1-.2-.1-.2 0 0 .1.4.1.4 0 0 .1 2.7 2.2 5 5 5 2.6 0 5.1-2.3 5-5-.3-5.3-4.3-9.8-9.8-9.8-5.4 0-9.7 4.5-9.8 9.8-.1 5.3 4.4 9.6 9.5 9.8 5.6.2 9.8-4.4 10-9.8.1-2.7-2.4-5-5-5-2.7 0-4.7 2.3-4.9 5z" class="st15" />
				<circle cx="396.7" cy="105.1" r="4.8" class="st16" />
				<path d="M396.4 105.1c0-.5.1-.1-.1.2.1-.2.5-.7.1-.3-.4.4.1 0 .2-.1.3-.2-.7 0 0 0 .5 0 .1.1-.2-.1.2.1.7.5.3.1-.5-.5.2.2.1.2.1.2.1.2 0-.1-.1-.3-.1-.3 0 .1 0 .7.1-.2.1-.2.1.1-.2.4-.3.5.5-.7.2-.3 0-.1-.3.2.5 0 .2-.1-.6-.1-.4-.1 0 .1-.2-.1-.3-.1-.5-.3.6.6.2.1.1.1 0-.2 0-.2 0 0 .1.4.1.4 0 0 .1 2.7 2.2 5 5 5 2.6 0 5.1-2.3 5-5-.3-5.3-4.3-9.8-9.8-9.8-5.4 0-9.7 4.5-9.8 9.8-.1 5.3 4.4 9.6 9.5 9.8 5.6.2 9.8-4.4 10-9.8.1-2.7-2.4-5-5-5-2.7 0-4.7 2.3-4.9 5z" class="st15" />
				<path d="M351.9 478.1H376" class="st3" />
				<g>
					<path d="M138 478.1h-18.3" class="st3" />
				</g>
				<g>
					<path d="M307.6 397.2h4.6c2.6 0 5.1-2.3 5-5-.1-2.7-2.2-5-5-5h-4.6c-2.6 0-5.1 2.3-5 5 .1 2.7 2.2 5 5 5z" class="st1" />
				</g>
				<g>
					<path d="M199.2 397.2h4.6c2.6 0 5.1-2.3 5-5-.1-2.7-2.2-5-5-5h-4.6c-2.6 0-5.1 2.3-5 5 .1 2.7 2.2 5 5 5z" class="st1" />
				</g>
				<g class="st10">
					<path d="M249.5 465v1c.6 8.8 1.5 7.2-8.3 7.1h-7.8c1.5-1.9 1.8-2.4 1.8-5.1v-1.1c0-14.1-5.3-26.9-13.7-36.2-5.5-6-12.3-10.3-19.8-12.7.8 0 1.6.1 2.4.1 13.1.8 26.6 5.6 34.7 14.2 8.1 8.6 10.7 19.9 10.7 32.7z" class="st5" />
				</g>
			</svg>
			<svg id="planet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
				<circle class="saturn" cx="256" cy="256" r="149.536" fill="#FF4F54" />
				<g class="saturn-2" fill="#EA4753">
					<path d="M109.388 285.56c42.515 1.428 157.943-2.613 289.462-73.807-5.11-16.448-13.02-31.882-23.322-45.604-42.716 29.386-140.403 83.922-268.457 76.27-1.354 14.666-.508 29.175 2.318 43.14zM400.734 293.587c3.976-15.31 5.422-30.68 4.614-45.672-33.75 25.31-137.237 92.367-277.65 84.876 6.507 10.874 14.383 20.93 23.472 29.88 44.354.286 137.696-6.443 245.93-57.163 1.362-3.89 2.58-7.86 3.634-11.92zM245.488 405.184c35.427 2.537 69.784-7.742 97.543-27.59-27.972 11.533-60.787 21.76-97.542 27.59zM348.02 138.097c-15.645-12.225-33.99-21.522-54.434-26.832-71.883-18.667-145.126 18.253-174.25 84.01 49.02-1.676 133.073-12.256 228.685-57.178z" />
				</g>
				<circle class="hover" cx="319.166" cy="208.081" r="28.389" fill="#D83A4E" />
				<path d="M331.25 189.492c6.04 1.568 11.114 4.97 14.792 9.452-2.98-8.73-10.143-15.848-19.74-18.34-15.175-3.94-30.672 5.167-34.613 20.342-2.373 9.136-.012 18.384 5.55 25.162-1.73-5.075-2.05-10.695-.602-16.273 3.94-15.177 19.438-24.284 34.613-20.343z" opacity=".1" />
				<circle class="hover" cx="234.463" cy="273.978" r="19.358" fill="#D83A4E" />
				<path d="M242.703 261.303c4.118 1.07 7.578 3.39 10.085 6.444-2.03-5.953-6.916-10.806-13.46-12.505-10.347-2.687-20.914 3.523-23.6 13.87-1.62 6.23-.008 12.537 3.785 17.158-1.18-3.46-1.398-7.293-.41-11.097 2.686-10.348 13.252-16.558 23.6-13.87z" opacity=".1" />
				<circle class="hover" cx="307.493" cy="144.207" r="12.584" fill="#D83A4E" />
				<path d="M312.85 135.967c2.678.695 4.927 2.204 6.557 4.19-1.32-3.872-4.496-7.026-8.75-8.13-6.727-1.747-13.596 2.29-15.343 9.017-1.052 4.05-.005 8.15 2.46 11.153-.767-2.25-.908-4.74-.267-7.213 1.747-6.727 8.616-10.764 15.343-9.017z" opacity=".1" />
				<circle class="hover" cx="163.289" cy="255.495" r="19.358" fill="#D83A4E" />
				<path d="M171.53 242.82c4.118 1.068 7.577 3.388 10.084 6.443-2.03-5.954-6.916-10.806-13.46-12.505-10.348-2.687-20.915 3.523-23.602 13.87-1.618 6.23-.008 12.536 3.785 17.158-1.18-3.46-1.398-7.293-.41-11.097 2.687-10.348 13.255-16.558 23.602-13.87z" opacity=".1" />
				<circle class="hover" cx="230.586" cy="365.92" r="19.358" fill="#D83A4E" />
				<path d="M238.826 353.245c4.118 1.07 7.578 3.39 10.085 6.444-2.03-5.954-6.915-10.807-13.46-12.506-10.347-2.688-20.914 3.522-23.6 13.87-1.62 6.23-.01 12.536 3.784 17.157-1.18-3.46-1.398-7.292-.41-11.096 2.688-10.346 13.255-16.556 23.602-13.87z" opacity=".1" />
				<circle class="hover" cx="302.221" cy="353.781" r="19.357" fill="#D83A4E" />
				<path d="M310.462 341.105c4.118 1.07 7.577 3.39 10.085 6.445-2.03-5.954-6.916-10.807-13.46-12.506-10.348-2.688-20.914 3.523-23.602 13.87-1.618 6.23-.008 12.536 3.785 17.157-1.18-3.46-1.398-7.29-.41-11.095 2.687-10.346 13.254-16.556 23.602-13.87z" opacity=".1" />
				<circle class="hover" cx="358.827" cy="284.847" r="11.079" fill="#D83A4E" />
				<path d="M363.542 277.593c2.357.612 4.337 1.94 5.772 3.688-1.162-3.406-3.958-6.184-7.703-7.156-5.922-1.537-11.97 2.017-13.507 7.938-.926 3.565-.005 7.175 2.166 9.82-.676-1.98-.8-4.175-.235-6.352 1.537-5.92 7.585-9.475 13.507-7.937z" opacity=".1" />
				<circle class="hover" cx="220.465" cy="156.416" r="11.079" fill="#D83A4E" />
				<path d="M225.18 149.162c2.358.612 4.338 1.94 5.773 3.688-1.162-3.408-3.958-6.185-7.703-7.157-5.922-1.538-11.97 2.016-13.508 7.938-.926 3.566-.004 7.175 2.167 9.82-.677-1.98-.8-4.174-.236-6.35 1.537-5.922 7.585-9.476 13.507-7.938z" opacity=".1" />
				<circle class="hover" cx="154.027" cy="171.743" r="5.819" fill="#D83A4E" />
				<path d="M156.504 167.933c1.238.322 2.278 1.02 3.03 1.938-.61-1.79-2.078-3.248-4.045-3.758-3.11-.808-6.288 1.06-7.095 4.17-.486 1.872-.002 3.767 1.138 5.156-.354-1.04-.42-2.192-.124-3.335.807-3.11 3.984-4.978 7.094-4.17z" opacity=".1" />
				<circle class="hover" cx="391.387" cy="251.305" r="5.819" fill="#D83A4E" />
				<path d="M393.864 247.495c1.237.32 2.277 1.02 3.03 1.937-.61-1.79-2.078-3.248-4.045-3.76-3.11-.807-6.288 1.06-7.096 4.17-.486 1.873-.002 3.768 1.138 5.158-.354-1.04-.42-2.192-.123-3.336.807-3.11 3.983-4.977 7.094-4.17z" opacity=".1" />
				<circle class="hover" cx="145.077" cy="302.473" r="5.819" fill="#D83A4E" />
				<path d="M147.554 298.662c1.238.322 2.277 1.02 3.03 1.938-.61-1.79-2.078-3.248-4.045-3.76-3.11-.807-6.288 1.06-7.096 4.17-.486 1.873-.002 3.77 1.138 5.157-.355-1.04-.42-2.19-.124-3.335.81-3.11 3.985-4.978 7.096-4.17z" opacity=".1" />
				<circle class="hover" cx="187.342" cy="355.265" r="5.819" fill="#D83A4E" />
				<path d="M189.818 351.455c1.238.32 2.278 1.02 3.032 1.938-.61-1.79-2.08-3.25-4.046-3.76-3.11-.808-6.287 1.06-7.095 4.17-.487 1.872-.003 3.768 1.137 5.157-.354-1.04-.42-2.192-.123-3.336.808-3.11 3.984-4.977 7.094-4.17z" opacity=".1" />
				<path d="M351.36 140.785c10.244 27.673 12.43 58.646 4.45 89.372-20.76 79.935-102.387 127.907-182.32 107.15-21.917-5.693-41.423-15.968-57.776-29.522 16.405 44.32 53.49 80.17 102.7 92.95 79.934 20.758 161.562-27.214 182.32-107.148 15.068-58.02-6.082-116.922-49.373-152.802z" opacity=".1" />
				<g>
					<path class="stars" fill="#FFF" d="M112.456 363.093c-.056 7.866-6.478 14.197-14.344 14.142 7.866.056 14.198 6.48 14.142 14.345.056-7.866 6.48-14.198 14.345-14.142-7.868-.057-14.2-6.48-14.144-14.345zM432.436 274.908c-.056 7.866-6.478 14.198-14.344 14.142 7.866.057 14.197 6.48 14.142 14.345.056-7.866 6.48-14.197 14.345-14.142-7.868-.056-14.2-6.48-14.144-14.345zM159.75 58.352c-.12 16.537-13.62 29.848-30.157 29.73 16.537.118 29.848 13.62 29.73 30.156.118-16.537 13.62-29.848 30.156-29.73-16.54-.117-29.85-13.62-29.73-30.156z" />
				</g>
			</svg>
			<!-- <button href="#"><button class="denied__link">Go Home</button></a> -->
		</div>
		<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
		<script src="{{ asset('asset/maintenance/script.js')}}"></script>
	</body>

</html>

@else
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- <title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title> -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="{{asset('asset/favicon.ico')}}">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('asset/page/css/open-iconic-bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset/page/css/animate.css')}}
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
	@yield('header')
</head>


<body class="goto-here">

	{!! $messenger->value !!}

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
					<li class="nav-item dropdown cta cta-colored">
						<a class="nav-link dropdown-toggle" href="#" id="user_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi, {{Auth::user()->name}}!</a>
						<div class="dropdown-menu" aria-labelledby="user_dropdown">
							@if(Auth::user()->role_id == 1)
							<a class="dropdown-item" href="/admin">Admin Panel</a>
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

	@yield('body')

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

	@yield('footer')

</body>

</html>
@endif