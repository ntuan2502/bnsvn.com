<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="{{ asset('asset/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('asset/admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('asset/admin/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    <link href="{{ asset('asset/admin/js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">
    <link href="{{ asset('asset/admin/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('asset/admin/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('asset/admin/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <link href="{{ asset('asset/admin/css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <link href="{{ asset('asset/admin/css/plugins/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{ asset('asset/admin/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    @yield('css')

</head>

<body>
    <form id="signout" action="/signout" method="POST">
        @csrf
    </form>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="{{$user_now->avatar_url}}" />
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">{{$user_now->name}}</span>
                                <span class="text-muted text-xs block">{{$user_now->role_name}}<b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Contacts</a></li>
                                <li><a class="dropdown-item" href="#">Mailbox</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="javascript: $('#signout').submit();">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            BNS
                        </div>
                    </li>
                    <li class="{{ (Route::currentRouteName() == 'dashboard' ? 'active' : '') }}">
                        <a href="#">
                            <i class="fa fa-th-large"></i>
                            <span class="nav-label">Dashboards</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li class="{{ (Route::currentRouteName() == 'dashboard' ? 'active' : '') }}">
                                <a href="/admin">Dashboard</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ (Route::currentRouteName() == 'setting' ? 'active' : '') }}">
                        <a href="/admin/setting">
                            <i class="fa fa-gear"></i>
                            <span class="nav-label">Cài đặt</span>
                            <span class="float-right label label-primary">SPECIAL</span>
                        </a>
                    </li>
                    <li class="{{ (Route::currentRouteName() == 'hephai' ? 'active' : '') }}">
                        <a href="/admin/hephai">
                            <i class="fa fa-magic"></i>
                            <span class="nav-label">Hệ phái</span>
                            <span class="label label-info float-right">{{count($sects_all)}}</span>
                        </a>
                    </li>
                    <li class="{{ (Route::currentRouteName() == 'chuyenmuc' ? 'active' : '') }}">
                        <a href="/admin/chuyenmuc">
                            <i class="fa fa-edit"></i>
                            <span class="nav-label">Chuyên mục</span>
                            <span class="label label-info float-right">{{count($categories_all)}}</span>
                        </a>
                    </li>
                    <li class="{{ (Route::currentRouteName() == 'baiviet' ? 'active' : '') }}">
                        <a href="/admin/baiviet">
                            <i class="fa fa-files-o"></i>
                            <span class="nav-label">Bài viết</span>
                            <span class="label label-info float-right">{{count($posts_all)}}</span>
                        </a>
                    </li>
                    <li class="{{ (Route::currentRouteName() == 'user' ? 'active' : '') }}">
                        <a href="/admin/user">
                            <i class="fa fa-user"></i>
                            <span class="nav-label">Người dùng</span>
                            <span class="label label-info float-right">{{count($users_all)}}</span>
                        </a>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" action="#">
                            <div class="form-group">
                                <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a href="javascript: $('#signout').submit();">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>

            @yield('body')

            <div class="footer">
                <div class="float-right">
                    <strong>
                        PixioStudio
                    </strong>
                </div>
                <div>
                    <strong>Copyright</strong> <a href="https://www.facebook.com/ntuan.2502" target="_blank">NAT</a> &copy; 2019
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('asset/admin/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('asset/admin/js/popper.min.js')}}"></script>
    <script src="{{ asset('asset/admin/js/bootstrap.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{ asset('asset/admin/js/demo/peity-demo.js')}}"></script>
    <script src="{{ asset('asset/admin/js/inspinia.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/pace/pace.min.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/gritter/jquery.gritter.min.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('asset/admin/js/demo/sparkline-demo.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/chartJs/Chart.min.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
    <script src="{{ asset('asset/link.js')}}"></script>

    <script>
        $(document).ready(function() {
            @if(session('success'))
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('{{session("success")}}', 'Thành công!');
            }, 1300);
            @endif
        });
    </script>

    <script src="{{ asset('asset/admin/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{ asset('asset/admin/js/plugins/select2/select2.full.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

    @yield('js')
</body>

</html>