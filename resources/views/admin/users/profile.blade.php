@extends('layouts.admin')
@section('style')
    <link rel="stylesheet" href="{{asset('css/users.css')}}">
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10" style="margin:auto">

                <div class="content-box">
                    <div class="head"><span class="fa fa-users"
                                            style="padding-left:5px ;"></span>پروفایل {{$user->name}}</div>
                    <div class="head_profile shadow">
                        <div class="row">
                            <div class="col-xl-5" style="margin-top: 20px">
                                <ul>
                                    <li><span class="box-right">شهر</span><span class="box-left">تبریز</span></li>
                                    <li style="margin-top: 15px"><span class="box-right">تاریخ عضویت</span><span
                                                class="box-left">اسفند 1391</span></li>
                                    <li style="margin-top: 15px"><span class="box-right">شماره موبایل</span><span
                                                class="box-left">09362098860</span></li>
                                </ul>
                                <span class="box-top">درباره من</span>
                                <span class="box-bottom">طراح صفحات وب</span>
                            </div>

                            <div class="col-xl-2" style="margin-top: 20px;">
                                <div>
                                    <img src="{{$user->photo ? $user->photo->path : asset('images/user.png')}}" alt="">
                                </div>
                                <span>{{$user->role->name}}</span>
                            </div>

                            <div class="col-xl-5" style="direction: ltr; margin-top: 20px;">
                                <ul>
                                    <li><span class="left-box">Website </span><span class="right-box">http://www.Digikala.com</span>
                                    </li>
                                    <li style="margin-top: 15px"><span class="left-box">Telegram  </span><span
                                                class="right-box">@Arash_Asadzade</span></li>
                                    <li style="margin-top: 15px"><span class="left-box">Facebook</span><span class="right-box">Arash</span></li>
                                    <li style="margin-top: 15px"><span class="left-box">Twitter</span><span class="right-box">Arash</span></li>
                                    <li style="margin-top: 15px"><span class="left-box">Google plus</span><span class="right-box">Arash</span>
                                    </li>
                                    <li style="margin-top: 15px"><span class="left-box">Email</span><span class="right-box">Th_Asadzade@yahoo.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@stop