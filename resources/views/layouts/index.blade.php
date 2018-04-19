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
                        <span class="fa fa-unlock" style="font-size: 13px" ><span style="color:#00ca6d;"> {{ Auth::user()->name }}،</span>خوش آمدید</span>
                     <span class="fa fa-users"><a href="#">مشاهده پنل کاربری</a></span>
                        <span ><a href="{{ route('logout') }}"  onclick="event.preventDefault();
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
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 menu-top">
                            <div class="myNav">
                                <ul class="root">
                                    <li><span>کالای دیجیتال <span class=""></span></span>
                                        <ul class="level">
                                            <li><a href="" title="موبایل">موبایل</a>
                                                <div class="submenu">
                                                    <div class="rows">
                                                        <div class="firstrow">
                                                            <ul>


                                                                <li>
                                                                    <ul>
                                                                        <li class="title"><a
                                                                                    href="/main/electronic-devices/mobile"
                                                                                    title="انواع گوشی موبایل">گوشی
                                                                                موبایل</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?brand[0]=10"
                                                                                    title="گوشی های موبایل Apple">Apple</a>
                                                                        </li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?brand[0]=18"
                                                                                    title="گوشی های موبایل Samsung">Samsung</a>
                                                                        </li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?brand[0]=22"
                                                                                    title="گوشی های موبایل LG">LG</a>
                                                                        </li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?brand[0]=82"
                                                                                    title="گوشی های موبایل Huawei">Huawei</a>
                                                                        </li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?brand[0]=26"
                                                                                    title="گوشی های موبایل HTC">HTC</a>
                                                                        </li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?brand[0]=1"
                                                                                    title="گوشی های موبایل Sony">Sony</a>
                                                                        </li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?brand[0]=51"
                                                                                    title="گوشی های موبایل Microsoft">Microsoft</a>
                                                                        </li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?brand[0]=20"
                                                                                    title="گوشی های موبایل Nokia">Nokia</a>
                                                                        </li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?brand[0]=4"
                                                                                    title="گوشی های موبایل ASUS">ASUS</a>
                                                                        </li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?brand[0]=94"
                                                                                    title="گوشی های موبایل Lenovo">Lenovo</a>
                                                                        </li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?brand[0]=23"
                                                                                    title="گوشی های موبایل Motorola">Motorola</a>
                                                                        </li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone"
                                                                                    title="مشاهده انواع گوشی موبایل">مشاهده
                                                                                موارد بیشتر</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="alternate">
                                                                    <ul>
                                                                        <li class="title"><a
                                                                                    href="/main/electronic-devices/mobile/mobile-phone"
                                                                                    title="انواع گوشی">انواع
                                                                                گوشی</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?attribute[A136][0]=197"
                                                                                    title="گوشی های موبایل دو سیم کارت">گوشی
                                                                                دو سیم کارت</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?attribute[A136][0]=196"
                                                                                    title="گوشی های موبایل تک سیم کارت">گوشی
                                                                                تک سیم کارت</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?attribute[A18186][0]=21340"
                                                                                    title="گوشی های موبایل 4G">گوشی
                                                                                های 4G</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?attribute[A13366][0]=24917"
                                                                                    title="گوشی های موبایل کلاسیک">گوشی
                                                                                های کلاسیک</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?attribute[A13366][0]=21003"
                                                                                    title="گوشی های موبایل فبلت">فبلت</a>
                                                                        </li>
                                                                        <li class="title"><a
                                                                                    href="/search/category-mobile-phone"
                                                                                    title="گوشی های موبایل بر اساس سیستم عامل">بر
                                                                                اساس سیستم عامل</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?type[0]=201"
                                                                                    title="گوشی های موبایل اندروید">اندروید</a>
                                                                        </li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?type[0]=202"
                                                                                    title="گوشی های موبایل iOS">iOS</a>
                                                                        </li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?type[0]=1314"
                                                                                    title="گوشی های موبایل ویندوز فون">ویندوز
                                                                                فون</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?type[0]=1315"
                                                                                    title="گوشی های موبایل با سیستم عامل های متفرقه">سایر
                                                                                سیستم عامل ها</a></li>
                                                                        <li class="title"><a
                                                                                    href="/search/category-headphone?type[0]=127"
                                                                                    title="انواع هدفون توگوشی">هدفون
                                                                                توگوشی</a></li>
                                                                        <li class="title"><a
                                                                                    href="/search/category-headphone"
                                                                                    title="انواع هدفون">هدفون</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <ul>
                                                                        <li class="title"><a
                                                                                    href="/main/electronic-devices/mobile/mobile-accessories"
                                                                                    title="لوازم جانبی گوشی موبایل">لوازم
                                                                                جانبی گوشی موبایل</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-cell-phone-screen-guard"
                                                                                    title="محافظ صفحه نمایش گوشی موبایل">محافظ
                                                                                صفحه نمایش</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-cell-phone-pouch-cover"
                                                                                    title="کیف و کاور گوشی گوشی موبایل">کیف
                                                                                و کاور گوشی</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-handsfree"
                                                                                    title="هندزفری گوشی موبایل">هندزفری</a>
                                                                        </li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-memory-cards?type[0]=6522"
                                                                                    title="کارت حافظه microSD گوشی موبایل">کارت
                                                                                حافظه microSD</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-power-bank"
                                                                                    title="پاوربانک گوشی موبایل">پاوربانک</a>
                                                                        </li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-cell-phone-holder"
                                                                                    title="مونوپاد و پایه نگهدارنده گوشی موبایل">مونوپاد
                                                                                و پایه نگهدارنده</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-car-charger"
                                                                                    title="شارژر موبایل">شارژر
                                                                                موبایل</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-cell-phone-battery"
                                                                                    title="باتری گوشی گوشی موبایل">باتری
                                                                                گوشی</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-stylus"
                                                                                    title="قلم لمسی (Stylus) مخصوص گوشی موبایل">قلم
                                                                                لمسی (Stylus)</a></li>
                                                                        <li class="item"><a
                                                                                    href="/main/electronic-devices/mobile/mobile-accessories"
                                                                                    title="مشاهده انواع لوازم جانبی موبایل">مشاهده
                                                                                موارد بیشتر</a></li>
                                                                        <li class="title"><a
                                                                                    href="/search/category-cell-phone-kits"
                                                                                    title="انواع گجت های موبایل">گجت
                                                                                های موبایل</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="last alternate">
                                                                    <ul>
                                                                        <li class="title"><a
                                                                                    href="/search/category-mobile-phone"
                                                                                    title="انواع گوشی موبایل بر اساس رده کاربری">رده
                                                                                ی کاربری</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?attribute[A13366][0]=22806"
                                                                                    title="گوشی های موبایل مناسب بازی">مناسب
                                                                                بازی</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?attribute[A13366][0]=13404"
                                                                                    title="گوشی های موبایل مناسب عکاسی">مناسب
                                                                                عکاسی</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?attribute[A13366][0]=22802"
                                                                                    title="گوشی های موبایل مناسب عکاسی سلفی">مناسب
                                                                                عکاسی سلفی</a></li>
                                                                        <li class="item"><a
                                                                                    href="/search/category-mobile-phone?attribute[A13366][0]=13400"
                                                                                    title="گوشی های موبایل مقاوم در برابر آب">مقاوم
                                                                                در برابر آب</a></li>
                                                                    </ul>
                                                                </li>


                                                            </ul>
                                                        </div>
                                                        <div class="lastrow img-fluid"></div>
                                                    </div>
                                                </div>

                                            </li>
                                            <li><a href="">موبایل</a></li>
                                            <li><a href="">موبایل</a></li>
                                            <li><a href="">موبایل</a></li>
                                        </ul>

                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</head>

<body>
@yield('content')
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
                    <div class="col-md-2">
                        <span class="title"><a title="کالای دیجیتال" href="/Main/Electronic-Devices">کالای دیجیتال</a>
                        </span>
                        <ul>
                            <li><a href="/Main/Electronic-Devices/Mobile/" title="موبایل" target="_blank">موبایل</a>
                            </li>
                            <li><a href="/Main/Electronic-Devices/Tablet-EBook-Reader/" title="تبلت و کتابخوان"
                                   target="_blank">تبلت و کتابخوان</a></li>
                            <li><a href="/Main/Electronic-Devices/Laptop/" title="لپتاپ" target="_blank">لپتاپ</a></li>
                            <li><a href="/Main/Electronic-Devices/Camera/" title="دوربین" target="_blank">دوربین</a>
                            </li>
                            <li><a href="/Main/Electronic-Devices/Computer-Parts/" title="کامپیوتر و تجهیزات جانبی"
                                   target="_blank">کامپیوتر و تجهیزات جانبی</a></li>
                            <li><a href="/Main/Electronic-Devices/Office-Machines/" title="ماشین های اداری"
                                   target="_blank">ماشین های اداری</a></li>
                            <li><a href="/Main/Electronic-Devices/Video-Audio-Entertainment/" title="صوتی و تصویری"
                                   target="_blank">صوتی و تصویری</a></li>
                            <li><a href="/Main/Electronic-Devices/Accessories-Main/" title="لوازم جانبی کالای دیجیتال"
                                   target="_blank">لوازم جانبی کالای دیجیتال</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <span class="title"><a title="لوازم خانگی" href="/Main/Home-and-Kitchen">لوازم خانگی</a></span>
                        <ul>
                            <li><a href="/Main/Home-and-Kitchen/Video-Audio-Entertainment/" title="صوتی و تصویری"
                                   target="_blank">صوتی و تصویری</a></li>
                            <li><a href="/Main/Home-and-Kitchen/Home-Appliance/" title="لوازم خانگی برقی"
                                   target="_blank">لوازم خانگی برقی</a></li>
                            <li><a href="/Main/Home-and-Kitchen/Home-kitchen-Appliances/" title="آشپزخانه"
                                   target="_blank">آشپزخانه</a></li>
                            <li><a href="/Main/Home-and-Kitchen/Serving/" title="سرو و پذیرایی" target="_blank">سرو و
                                    پذیرایی</a></li>
                            <li><a href="/Main/Home-and-Kitchen/Decorative/" title="دکوراتیو"
                                   target="_blank">دکوراتیو</a></li>
                            <li><a href="/Main/Home-and-Kitchen/BedandBath/" title="خواب و حمام" target="_blank">خواب و
                                    حمام</a></li>
                            <li><a href="/Main/Home-and-Kitchen/Cleaning/" title="شستشو و نظافت" target="_blank">شستشو و
                                    نظافت</a></li>
                            <li><a href="/Main/Home-and-Kitchen/Tools/" title="ابزار" target="_blank">ابزار</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <span class="title"><a title="زیبایی و سلامتی"
                                               href="/Main/Personal-Appliance">زیبایی و سلامتی</a>
                        </span>
                        <ul>
                            <li><a href="/Main/Personal-Appliance/Perfume-All/" title="عطر" target="_blank">عطر</a></li>
                            <li><a href="/Main/Personal-Appliance/Beauty/" title="لوازم آرایشی" target="_blank">لوازم
                                    آرایشی</a></li>
                            <li><a href="/Main/Personal-Appliance/Hair-Clipper/" title="لوازم بهداشتی" target="_blank">لوازم
                                    بهداشتی</a></li>
                            <li><a href="/Main/Personal-Appliance/Electrical-Personal-Care/" title="لوازم شخصی برقی"
                                   target="_blank">لوازم شخصی برقی</a></li>
                            <li><a href="/Main/Personal-Appliance/Watch-Clock/" title="ساعت" target="_blank">ساعت</a>
                            </li>
                            <li><a href="/Main/Personal-Appliance/Jewelery/" title="زیور آلات" target="_blank">زیور
                                    آلات</a></li>
                            <li><a href="/Main/Personal-Appliance/Health-Care/" title="ابزار سلامت" target="_blank">ابزار
                                    سلامت</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <span class="title"><a title="فرهنگ و هنر" href="/Main/Book-And-Media">فرهنگ و هنر</a></span>
                        <ul>
                            <li><a href="/Main/Book-And-Media/Handicraft/" title="صنایع دستی" target="_blank">صنایع
                                    دستی</a></li>
                            <li><a href="/Main/Book-And-Media/MusicalInstruments/" title="ادوات موسیقی" target="_blank">ادوات
                                    موسیقی</a></li>
                            <li><a href="/Main/Book-And-Media/Music-Audio-Content/" title="موسیقی" target="_blank">موسیقی</a>
                            </li>
                            <li><a href="/Main/Book-And-Media/Film-Video-Content/" title="فیلم" target="_blank">فیلم</a>
                            </li>
                            <li><a href="/Main/Book-And-Media/Software-Games/" title="نرم افزار و بازی" target="_blank">نرم
                                    افزار و بازی</a></li>
                            <li><a href="/Main/Book-And-Media/Multimedia-Training-Pack/" title="محتوای آموزشی"
                                   target="_blank">محتوای آموزشی</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <span class="title"><a title="ورزش و سرگرمی" href="/Main/Sport-Entertainment">ورزش و سرگرمی</a>
                        </span>
                        <ul>
                            <li><a href="/Main/Sport-Entertainment/Sport/" title="لوازم ورزشی" target="_blank">لوازم
                                    ورزشی</a></li>
                            <li><a href="/Main/Sport-Entertainment/Traveling-Equipment/" title="تجهیزات سفر"
                                   target="_blank">تجهیزات سفر</a></li>
                            <li><a href="/Main/Sport-Entertainment/SportShoes/" title="کفش ورزشی" target="_blank">کفش
                                    ورزشی</a></li>
                            <li><a href="/Main/Sport-Entertainment/Sports-Wear/" title="پوشاک ورزشی" target="_blank">پوشاک
                                    ورزشی</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <span class="title"><a title="مادر و کودک" href="/Main/Mother-and-Child">مادر و کودک</a></span>
                        <ul>
                            <li><a href="/Main/Mother-and-Child/Safety-and-Care/" title="ایمنی و مراقبت"
                                   target="_blank">ایمنی و مراقبت</a></li>
                            <li><a href="/Main/Mother-and-Child/Dining-Accessories/" title="غذاخوری" target="_blank">غذاخوری</a>
                            </li>
                            <li><a href="/Main/Mother-and-Child/Personal-Accessories/" title="لوازم شخصی"
                                   target="_blank">لوازم شخصی</a></li>
                            <li><a href="/Main/Mother-and-Child/Health-and-Bathroom-Tools/" title="بهداشت و حمام"
                                   target="_blank">بهداشت و حمام</a></li>
                            <li><a href="/Main/Mother-and-Child/Promenade-and-Travel-Accessories/" title="گردش و سفر"
                                   target="_blank">گردش و سفر</a></li>
                            <li><a href="/Main/Mother-and-Child/Entertainment-and-Games-Equipment/"
                                   title="سرگرمی و آموزشی" target="_blank">سرگرمی و آموزشی</a></li>
                            <li><a href="/Main/Mother-and-Child/Baby-Bedding/" title="خواب کودک" target="_blank">خواب
                                    کودک</a></li>
                            <li><a href="/Main/Mother-and-Child/Children-and-Baby-Clothing/" title="لباس کودک و نوزاد"
                                   target="_blank">لباس کودک و نوزاد</a></li>
                        </ul>
                    </div>
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