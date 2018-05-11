<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>فروشگاه اینترنتی دیجی کالا</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    @yield('styles')
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="Red">
                    @guest
                        <span class="fa fa-sign-in"><span>فروشگاه اینترنتی دیجی کالا،<a href="{{ route('login') }}">وارد شوید</a></span></span>
                        <span class="fa fa-user"><a href="{{ route('register') }}">ثبت نام کنید</a></span>
                    @else
                        <span class="fa fa-unlock" style="font-size: 13px"><span style="color:#00ca6d;"> {{ Auth::user()->name }}
                                ،</span>خوش آمدید</span>
                        <span class="fa fa-users"><a href="#">مشاهده پنل کاربری</a></span>
                        <span><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('خروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                            </span>
                    @endguest
                    <a href="#">
                        <ul>
                            <li>راهنمای خرید هدیه</li>
                            <li>خرید کارت هدیه دیجی کالا</li>
                        </ul>
                        <span class="fa fa-gift"><span>هدیه</span></span>
                    </a>
                </div>
                <div class="header-button row">
                    <div class="col-sm-4">
                        <div class="shopping-cart">
                            <span class="fa fa-shopping-cart cart"></span>
                            <span class=""><span>سبد خرید</span></span>
                            <span class="num">0</span>

                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group serach">
                            <input type="text" name="" id="" class="form-control"
                                   placeholder="محصول، دسته یا برند مورد نظرتان را جستجو کنید...">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 brand">
                <a href="{{ url('/home') }}">
                    <img src="{{asset('images/DigiKala.png')}}" alt="" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row navigation">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 menu-top">
                            <div class="myNav">
                                <ul class="root">
                                    @foreach(App\Category::where('parent_id',0)->get() as $cats)
                                        <li><span>{{$cats->name}}<span class=""></span></span>
                                            @if($cats->sub_cat->count())
                                                <ul class="level">

                                                    @foreach($cats->sub_cat as $sub)
                                                        <li><a href="" title="{{$sub->name}}">{{$sub->name}}</a>
                                                            @if($sub->sub_cat->count())
                                                                <div class="submenu">
                                                                    <div class="rows">
                                                                        <div class="firstrow">
                                                                            <ul>

                                                                                @foreach($sub->sub_cat as $sub1)
                                                                                    <li>
                                                                                        <ul>
                                                                                            <li class="title"><a
                                                                                                        href="/main/electronic-devices/mobile"
                                                                                                        title=" {{$sub1->name}} "> {{$sub1->name}}</a>
                                                                                            </li>
                                                                                            @if($cats->sub_cat->count())
                                                                                                @foreach($sub1->sub_cat as $sub2)
                                                                                                    <li class="item"><a
                                                                                                                href="/search/category-mobile-phone?brand[0]=10"
                                                                                                                title="{{$sub2->name}}">{{$sub2->name}}</a>
                                                                                                    </li>
                                                                                                @endforeach
                                                                                            @endif

                                                                                        </ul>
                                                                                    </li>
                                                                                @endforeach

                                                                            </ul>
                                                                        </div>
                                                                        <div class="lastrow img-fluid"></div>
                                                                    </div>
                                                                </div>
                                                            @endif

                                                        </li>
                                                    @endforeach

                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</head>

<body >
<div class="container-fluid" style="background-color:#ddd; padding-top: 10px; padding-bottom: 10px;">
    @yield('content')
</div>
</body>
<footer>
    <div class="collapse-footer justify-content-center container">
        <img src="{{asset('images/navigate-down (1).png')}}">
    </div>
    <div class="container-fluid info-bar">
        <div class="row">

            <div class="container">
                <div class="row">
                    <div class="col-lg-4"><span class="info-bar-right"> ۷ روز هفته، ۲۴ ساعته پاسخگوی شما هستیم.</span>
                    </div>
                    <div class="col-lg-2 info">
                        <a href="/ContactUs"><span>۶۱۹۳۰۰۰۰ - ۰۲۱</span></a> <i class="fa fa-phone"></i>
                    </div>
                    <div class="col-lg-2 info">
                        <a href="/Profile/Orders#tabs" target="_blank"><span>پیگیری سفارش</span></a>
                    </div>
                    <div class="col-lg-2 info">
                        <a href="/Page/FAQ" target="_blank"><span>سوالات متداول</span></a> <i
                                class="fa fa-question"></i>
                    </div>
                    <div class="col-lg-2 info">
                        <span>info@digikala.com</span> <i class="fa fa-envelope"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="collapse-footer justify-content-center container">
        <img src="{{asset('images/navigate-down (1).png')}}">
    </div>
    <div class="container-fluid footer-2">
        <div class="row ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2">
                        <a class="cro" href=""><img class="cro-img-icon" src="{{asset('images/shipping-express.png')}}"
                                                    style="float: right;padding-left: 2px;"> <span class="cro-text">تحویل اکسپرس</span></a>
                    </div>
                    <div class="col-xl-2">
                        <a class="cro" href=""><img class="cro-img-icon" src="{{asset('images/day-guarantee.png')}}"
                                                    style="float: right;padding-left: 2px;"> <span class="cro-text">7 روز ضمانت برگشت</span></a>
                    </div>
                    <div class="col-xl-2">
                        <a class="cro" href=""><img class="cro-img-icon" src="{{asset('images/cod.png')}}"
                                                    style="float: right;padding-left: 2px;"> <span class="cro-text">پرداخت در محل</span></a>
                    </div>
                    <div class="col-xl-3">
                        <a class="cro" href=""><img class="cro-img-icon" src="{{asset('images/best-price.png')}}"
                                                    style="float: right;padding-left: 2px;"> <span class="cro-text">تضمین بهترین قیمت</span></a>
                    </div>
                    <div class="col-xl-3">
                        <a class="cro" href=""><img class="cro-img-icon" src="{{asset('images/certificate.png')}}"
                                                    style="float: right;padding-left: 2px;"> <span class="cro-text">ضمانت اصل بودن کالا</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="collapse-footer justify-content-center container">
        <img src="{{asset('images/navigate-down (1).png')}}">
    </div>
    <div class="container-fluid subscribe-bar">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="menu-right">
                            <a href="/Page/How-To-Order" class="title">راهنمای خرید از دیجی‌کالا</a>
                            <ul>
                                <li><a target="_blank" title="ثبت سفارش" href="/Page/How-To-Order">ثبت سفارش</a></li>
                                <li><a target="_blank" title="رویه های ارسال سفارش" href="/Page/Delivery">رویه های ارسال
                                        سفارش</a></li>
                                <li><a target="_blank" title="شیوه های پرداخت" href="/Page/Payment-terms">شیوه های
                                        پرداخت</a></li>
                                <li><a target="_blank" title="معرفی دیجی بن" href="/Page/Digibon">معرفی دیجی بن</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="menu-right">
                            <a href="/ContactUs" class="title">خدمات مشتریان</a>
                            <ul>
                                <li><a target="_blank" title="پاسخ به پرسش های متداول" href="/Page/FAQ">پاسخ به پرسش های
                                        متداول</a></li>
                                <li><a target="_blank" title="رویه های باز گرداندن کالا" href="/Page/Return-Policy">رویه
                                        های باز گرداندن کالا</a></li>
                                <li><a target="_blank" title="شرایط استفاده" href="/Page/Terms-Conditions">شرایط
                                        استفاده</a></li>
                                <li><a target="_blank" title="حریم خصوصی" href="/Page/Privacy-Policy">حریم خصوصی</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <span class="title">از تخفیف‌ها و جدیدترین‌های دیجی کالا باخبر شوید!</span>
                        <div id="subscribe-form" class="container">
                            <div class="form-groups row">
                                <input class="form-control co-lg-10" width="70%" name="subscribe-email"
                                       id="subscribe-emial"
                                       placeholder="آدرس ایمیل خود را وارد کنید" type="text">
                                <button class="btn btn-outline-primary col-lg-2  pull-left" type="button">
                                    تایید ایمیل
                                </button>


                            </div>
                        </div>
                        <div class="social-panel row">
                            <ul class="right social-linkbox col-lg-6">
                                <li><a target="_blank" title="فیس بوک فروشگاه اینترنتی دیجی کالا را دنبال کنید"
                                       href="https://www.facebook.com/DigikalaPortal"><i
                                                class="icon icon-footer-facebook"></i></a></li>
                                <li><a target="_blank" title="توییتر فروشگاه اینترنتی دیجی کالا را دنبال کنید"
                                       href="https://www.twitter.com/Digikalacom"><i
                                                class="icon icon-footer-twitter"></i></a></li>
                                <li><a target="_blank" title="گوگل پلاس فروشگاه اینترنتی دیجی کالا را دنبال کنید"
                                       href="https://plus.google.com/107060095312678131486/posts"><i
                                                class="icon icon-footer-googleplus"></i></a></li>
                                <li><a target="_blank" title="اینستاگرام فروشگاه اینترنتی دیجی کالا را دنبال کنید"
                                       href="https://www.instagram.com/digikalacom"><i
                                                class="icon icon-footer-instagram"></i></a></li>
                                <li><a target="_blank" title="تلگرام فروشگاه اینترنتی دیجی کالا را دنبال کنید"
                                       href="https://www.telegram.me/digikala"><i class="icon icon-footer-telegram"></i></a>
                                </li>
                                <li><a target="_blank" title="تلگرام فروشگاه اینترنتی دیجی کالا را دنبال کنید"
                                       href="https://www.telegram.me/digikala"><i
                                                class="icon icon-footer-aparat"></i></a>
                                </li>
                            </ul>
                            <div class="col-lg-6">
                                <a href="https://new.sibapp.com/applications/digikala" target="_blank" class="ios-icon"
                                   title="ios app"></a>
                                <a href="https://cafebazaar.ir/app/com.digikala/?l=fa" target="_blank"
                                   class="android-icon" title="android app"></a>
                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="collapse-footer justify-content-center container">
        <img src="{{asset('images/navigate-down (1).png')}}">
    </div>
    <div class="container-fluid menu-bar">
        <div class="row ">
            <div class="container">
                <div class="row">
                    @foreach(App\Category::where('parent_id',0)->get() as $cats)
                        @if ($loop->index == 6)
                            @break
                        @endif
                        <div class="col-md-2">
                        <span class="title"><a title="{{$cats->name}}"
                                               href="/Main/Electronic-Devices">{{$cats->name}}</a>
                        </span>
                            @if($cats->sub_cat->count())
                                <ul>
                                    @foreach($cats->sub_cat as $sub)
                                        <li><a href="/Main/Electronic-Devices/Mobile/" title="{{$sub->name}}"
                                               target="_blank">{{$sub->name}}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            @endif

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <div class="collapse-footer justify-content-center container">
        <img src="{{asset('images/navigate-down (1).png')}}">
    </div>
    <div class="container-fluid copyright-bar">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <a href="/Page/About-Digikala" title="درباره فروشگاه اینترنتی دیجی کالا" target="_blank">درباره
                            دیجی‌کالا</a>
                    </div>
                    <div class="col-md-2">
                        <a href="http://careers.digikala.com" title="فرصت های شغلی فروشگاه اینترنتی دیجی کالا"
                           target="_blank">فرصت‌های شغلی</a>
                    </div>
                    <div class="col-md-4">
                        <a target="_blank" title="تماس با فروشگاه اینترنتی دیجی کالا" href="/ContactUs">تماس با فروشگاه
                            اینترنتی دیجی کالا</a>
                    </div>
                    <div class="col-md-4">
                        <a target="_blank" title="همکاری دیجی کالا با سازمان ها" href="/landing/osm/">همکاری با
                            سازمان‌ها</a>
                    </div>
                </div>
                <div class="row .copyright-bar-slogan">

                    <div class="col-lg-9" id="copyright-full">استفاده از مطالب فروشگاه اینترنتی دیجی کالا فقط برای مقاصد
                        غیر تجاری و با ذکر منبع بلامانع است. کليه حقوق اين سايت متعلق به شرکت نوآوران فن آوازه (فروشگاه
                        آنلاین دیجی‌کالا) می‌باشد.
                    </div>
                    <div class="col-lg-3" style="text-align: left">Copyright © 2006 - 2018 Digikala.com</div>

                </div>
            </div>

        </div>
    </div>
</footer>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/MyScripts.js')}}"></script>
@yield('scripts')
</html>