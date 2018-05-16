<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پنل مدیریت</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/myAdmin.css')}}">

    <link rel="stylesheet" href="{{asset('css/skin-blue.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    @yield('style')


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">


        <a href="#" class="logo">

            <span class="logo-mini">پنل</span>
            <span class="logo-lg">پنل مدیریت</span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">

            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav flex-row up-menu">



                    <li class="dropdown user user-menu">

                        <a href="#" data-toggle="dropdown">

                            <img src="{{Auth::user()->photo->path}}" class="user-image" alt="User Image">

                            <span class="hidden-xs">{{Auth::user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="user-header">
                                <img src="{{Auth::user()->photo->path}}" class="img-circle" alt="User Image">

                                <p>
                                   {{Auth::user()->name}}- {{Auth::user()->aboutMe}}
                                    <small>سال 1397</small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{route('users.show',Auth::user()->id)}}" class="btn btn-default btn-flat">پروفایل</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">خروج</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <aside class="main-sidebar">


        <section class="sidebar">

            <div class="user-panel ">
                <div class="pull-right image">
                    <img  src="{{Auth::user()->photo->path}}" class="user-image" alt="">
                </div>
                <div class="pull-right info">
                    <p>{{Auth::user()->name}}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>


            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
                </div>
            </form>



            <ul class="sidebar-menu" data-widget="tree">

                <li class="header"><span class="fa fa-dashboard"></span>داشبورد</li>


                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>دسته ها</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-left"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">ایجاد دسته</a></li>
                        <li><a href="{{route('categories.index')}}">مدیریت دسته</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>مدیریت محصولات</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-left"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">ایجاد محصول جدید</a></li>
                        <li><a href="#">مدیریت محصولات</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-link"></i> <span>مدیریت سفارشات</span>
                    </a>
                </li>
                <li >
                    <a href="#"><i class="fa fa-link"></i> <span>آمار و گزارشات</span>
                    </a>
                </li>
                <li >
                    <a href="#"><i class="fa fa-link"></i> <span>نظرات</span>
                    </a>
                </li>
                <li >
                    <a href="#"><i class="fa fa-link"></i> <span>تنظیمات سایت</span>
                    </a>
                </li>
                <li >
                    <a href="#"><i class="fa fa-link"></i> <span>مدیریت اسلایدشو</span>
                    </a>
                </li>
                <li >
                    <a href="{{route('users.index')}}"><i class="fa fa-link"></i> <span>مدیریت کاربران</span>
                    </a>
                </li>

            </ul>

        </section>

    </aside>


    <div class="content-wrapper">

        <section class="content-header">
            <ol class="breadcrumb">
             @yield('breadcrumb')
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

         @yield('content')

        </section>
    </div>



    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">

        </div>
        <!-- Default to the left -->
        <strong> <a href="#"></a></strong>
    </footer>

</div>
</body>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('js/adminlte.min.js')}}"></script>
<script src="{{asset('js/respond.min.js')}}"></script>
<script src="{{asset('js/html5shiv.min.js')}}"></script>
@yield('scripts')
</html>