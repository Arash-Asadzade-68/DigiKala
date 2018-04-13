<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Starter</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/myAdmin.css')}}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="{{asset('css/skin-blue.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">


    <!-- Google Font -->
    {{--<link rel="stylesheet"--}}
          {{--href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">--}}
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">


        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">پنل</span>
            <!-- logo for regular state and mobile devices -->
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

                            <img src="{{asset('images/user2-160x160.jpg')}}" class="user-image" alt="User Image">

                            <span class="hidden-xs">آرش اسدزاده</span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="user-header">
                                <img src="{{asset('images/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                                <p>
                                   آرش اسدزاده- توسعه دهنده صفحات وب
                                    <small>سال 1397</small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">پروفایل</a>
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
                    <img  src="{{asset('images/user2-160x160.jpg')}}" class="user-image" alt="">
                </div>
                <div class="pull-right info">
                    <p>آرش اسدزاده</p>
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
                        <li><a href="#">مدیریت دسته</a></li>
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
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>مدیریت سفارشات</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>آمار و گزارشات</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>نظرات</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>تنظیمات سایت</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>مدیریت اسلایدشو</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>مدیریت کاربران</span>
                    </a>
                </li>

            </ul>

        </section>

    </aside>


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <ol class="breadcrumb">

            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->

        </section>
        <!-- /.content -->
    </div>



    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">

        </div>
        <!-- Default to the left -->
        <strong> <a href="#"></a></strong>
    </footer>

</div>

<!-- jQuery 3 -->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.min.js')}}"></script>
<script src="{{asset('js/respond.min.js')}}"></script>
<script src="{{asset('js/html5shiv.min.js')}}"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>