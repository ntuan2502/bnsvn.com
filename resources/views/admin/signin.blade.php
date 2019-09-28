<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="{{ asset('template/admin/images/DB_16х16.png')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign in</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('template/admin/css/lib/getmdl-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/admin/css/lib/nv.d3.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/admin/css/application.min.css')}}">
    <!-- endinject -->

</head>

<body>

    <div class="mdl-layout mdl-js-layout color--gray is-small-screen login">
        <main class="mdl-layout__content">
            <div class="mdl-card mdl-card__login mdl-shadow--2dp">
                <div class="mdl-card__supporting-text color--dark-gray">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <span class="mdl-card__title-text text-color--smooth-gray">Blade & Soul</span>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <span class="login-name text-color--white">Admin</span>
                            @if(session('errors'))
                            <span class="login-secondary-text text-color--smoke" style="color: red;">
                                {{$errors}}
                            </span>
                            @endif
                        </div>
                        <form method="POST" action="" id="signinForm" novalidate>
                            @csrf
                            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                    <label class="mdl-textfield__label" for="email">Email</label>
                                    <input class="mdl-textfield__input" type="text" id="email" name="email">
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                    <label class="mdl-textfield__label" for="password">Password</label>
                                    <input type="password" class="mdl-textfield__input" type="text" id="password" name="password">
                                </div>
                                <a href="#" class="login-link">Forgot password?</a>
                            </div>
                            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                                <a href="#" class="login-link">Don't have account?</a>
                                <div class="mdl-layout-spacer"></div>
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised color--light-blue">
                                    SIGN IN
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="{{ asset('template/admin/js/d3.min.js')}}"></script>
    <script src="{{ asset('template/admin/js/getmdl-select.min.js')}}"></script>
    <script src="{{ asset('template/admin/js/material.min.js')}}"></script>
    <script src="{{ asset('template/admin/js/nv.d3.min.js')}}"></script>
    <script src="{{ asset('template/admin/js/layout/layout.min.js')}}"></script>
    <script src="{{ asset('template/admin/js/scroll/scroll.min.js')}}"></script>
    <script src="{{ asset('template/admin/js/widgets/charts/discreteBarChart.min.js')}}"></script>
    <script src="{{ asset('template/admin/js/widgets/charts/linePlusBarChart.min.js')}}"></script>
    <script src="{{ asset('template/admin/js/widgets/charts/stackedBarChart.min.js')}}"></script>
    <script src="{{ asset('template/admin/js/widgets/employer-form/employer-form.min.js')}}"></script>
    <script src="{{ asset('template/admin/js/widgets/line-chart/line-charts-nvd3.min.js')}}"></script>
    <script src="{{ asset('template/admin/js/widgets/map/maps.min.js')}}"></script>
    <script src="{{ asset('template/admin/js/widgets/pie-chart/pie-charts-nvd3.min.js')}}"></script>
    <script src="{{ asset('template/admin/js/widgets/table/table.min.js')}}"></script>
    <script src="{{ asset('template/admin/js/widgets/todo/todo.min.js')}}"></script>


    <script>
        $(function() {
            $('#signinForm').validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                    },
                },
                messages: {
                    email: {
                        required: 'Please enter a valid email address.',
                        email: 'Please enter a valid email address.',
                    },
                    password: {
                        required: 'Your password is required.',
                    },
                },
                errorElement: 'small',
                errorClass: 'help-block text-danger',
                highlight: function(e) {
                    $(e).removeClass('is-valid').addClass('is-invalid');
                },
                unhighlight: function(e) {
                    $(e).removeClass('is-invalid').addClass('is-valid');
                }
            });
        })
    </script>

</body>

</html>