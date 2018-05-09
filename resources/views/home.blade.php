@extends('layouts.index')
@section('styles')
   <link rel="stylesheet" href="{{asset('css/slider1.css')}}">
    <link rel="stylesheet"  href="{{asset('css/slick.css')}}"/>
    <link rel="stylesheet"  href="{{asset('css/slick-theme.css')}}"/>
@stop
@section('content')
    <div class="container">
        <div class="row">
            <a href="" style="margin-top: 10px;">
                <img class="img-fluid" src="{{asset('images/discount.jpg')}}" alt="">
            </a>
        </div>
        <div class="row" style="margin-top: 7px">
            <div class="col-md-3" style="padding-right: 0; padding-left: 10px;">
                <a class="ux-realtime-box" href="#"
                   style="display: block;">
                    <div class="ux-header">
                        <div class="cro-text-suggestion"> پیشنهاد لحظه‌ای</div>
                    </div>
                        <img class="test"  src="{{asset('images/side_1.JPG')}}">
                        <div class="name">لامپ ال اي دي 6 وات اشکي شفاف پارس شهاب پايه E14</div>
                        <div class="progress">
                            <div class="progress-bar "></div>
                        </div>
                        <div class="ux-box-footer">
                            <div class="ux-show-btn">مشاهده</div>
                            <div class="prices">
                                <div class="price">8,000 <span> تومان </span></div>
                                <div class="old-price" style="display: none;"><span>1,850,000</span></div>
                            </div>
                        </div>


                </a>
                <div class="ux-realtime-box">

                    <a href="#" target="_blank">
                        <img src="{{asset('images/DigikalaTelegram.jpg')}} " alt="به کانال تلگرام دیجی کالا  بپیوندید"
                             title="به کانال تلگرام دیجی کالا  بپیوندید">
                    </a>

                </div>
                <div class="ux-realtime-box">

                    <a href="#" target="_blank">
                        <img class="img-fluid" src="{{asset('images/banner-1.jpg')}} ">
                    </a>

                </div>
                <div class="ux-realtime-box">

                    <a href="#" target="_blank">
                        <img class="img-fluid" src="{{asset('images/banner-2.jpg')}} ">
                    </a>

                </div>
                <div class="ux-realtime-box">

                    <a href="#" target="_blank">
                        <img class="img-fluid" src="{{asset('images/banner-3.jpg')}} ">
                    </a>

                </div>
                <div class="ux-realtime-box">

                    <a href="#" target="_blank">
                        <img class="img-fluid" src="{{asset('images/banner-4.jpg')}} ">
                    </a>

                </div>
            </div>
            <div class="col-md-9" style="padding-right: 0; padding-left: 0;">
                <div class="slider-1">
                    <div id="demo" class="carousel slide" data-ride="carousel" style="position: relative; ">

                        <ul class="carousel-indicators">
                            <li data-target="#demo" class="column active cursor" data-slide-to="0">
                                <span class="up-arrow"></span>
                                <span title="ابزار سنجش سلامت">ابزار سنجش سلامت </span>
                            </li>

                            <li data-target="#demo" class="column cursor" data-slide-to="1">
                                <span class="up-arrow"></span>
                                <span class="cursor" title="درهم اینجا">درهم اینجا</span></li>

                            <li data-target="#demo" class="column cursor" data-slide-to="2">
                                <span class="up-arrow"></span>
                                <span class="cursor" title="درهم اینجا">انواع ظروف نچسب</span>
                            </li>
                            <li data-target="#demo" class="column cursor" data-slide-to="3">
                                <span class="up-arrow"></span>
                                <span class="cursor" title="درهم اینجا">صنایع دستی</span>
                            </li>
                            <li data-target="#demo" class="column cursor" data-slide-to="4">
                                <span class="up-arrow"></span>
                                <span class="cursor" title="درهم اینجا">درهم اینجا</span>
                            </li>


                        </ul>


                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="{{asset('images/1.jpeg')}}" width="890" height="310">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="{{asset('images/2.jpeg')}}" width="890" height="310">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="{{asset('images/3.jpeg')}}" width="890" height="310">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="{{asset('images/4.jpeg')}}" width="890" height="310">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="{{asset('images/5.jpeg')}}" width="890" height="310">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#demo" data-slide="next">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="prev">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
                <div class="slider-2">
                    <div id="slider-2" class="carousel slide" data-ride="carousel">

                        <ul class="carousel-indicators">
                            <li data-target="#slider-2" class="column active cursor item" data-slide-to="0">
                                <a onmousedown="return false" title="خرید اینترنتی هارد اکسترنال" class="tabItem"
                                   href="javascript:void(0)">
                                    <span class="title">هارد اکسترنال</span>
                                    <span class="right-arrow"></span>
                                </a>
                            </li>
                            <li data-target="#slider-2" class="column cursor item" data-slide-to="1">
                                <a onmousedown="return false" title="خرید اینترنتی تبلت " class="tabItem"
                                   href="javascript:void(0)"><span class="title">تبلت </span><span
                                            class="right-arrow"></span></a></li>
                            <li data-target="#slider-2" class="column cursor item" data-slide-to="2">
                                <a onmousedown="return false" title="خرید اینترنتی دریل چکشی"
                                   class="tabItem"
                                   href="javascript:void(0)"><span class="title">دریل چکشی</span><span
                                            class="right-arrow"></span></a></li>
                            <li data-target="#slider-2" class="column cursor item" data-slide-to="3">
                                <a onmousedown="return false" title="خرید اینترنتی هدفون " class="tabItem"
                                   href="javascript:void(0)"><span class="title">هدفون </span><span
                                            class="right-arrow"></span></a></li>
                            <li data-target="#slider-2" class="column cursor item" data-slide-to="4">
                                <a onmousedown="return false" title="خرید اینترنتی فلش مموری"
                                   class="tabItem"
                                   href="javascript:void(0)"><span class="title">فلش مموری</span><span
                                            class="right-arrow"></span></a></li>
                            <li data-target="#slider-2" class="column cursor item" data-slide-to="5">
                                <a onmousedown="return false" title="خرید اینترنتی لپ تاپ 15 اینچی"
                                   class="tabItem" href="javascript:void(0)"><span
                                            class="title">لپ تاپ 15 اینچی</span><span
                                            class="right-arrow"></span></a></li>
                            <li data-target="#slider-2" class="column cursor item" data-slide-to="6">
                                <a onmousedown="return false" title="خرید اینترنتی گوشت کوب برقی "
                                   class="tabItem" href="javascript:void(0)"><span
                                            class="title">گوشت کوب برقی </span><span class="right-arrow"></span></a>
                            </li>
                            <li data-target="#slider-2" class="column cursor item" data-slide-to="7">
                                <a onmousedown="return false" title="خرید اینترنتی مجموعه کنسول بازی سونی"
                                   class="tabItem current" href="javascript:void(0)"><span class="title">مجموعه کنسول بازی سونی</span><span
                                            class="right-arrow"></span></a>
                            </li>
                            <li data-target="#slider-2" class="column cursor item" data-slide-to="8">
                                <a onmousedown="return false" title="خرید اینترنتی ماشین اصلاح سر و صورت"
                                   class="tabItem" href="javascript:void(0)"><span
                                            class="title">ماشین اصلاح سر و صورت</span><span
                                            class="right-arrow"></span></a></li>
                            <li data-target="#slider-2" class="column cursor item" data-slide-to="9">
                                <a onmousedown="return false" title="خرید اینترنتی تلویزیون ال ای دی"
                                   class="tabItem" href="javascript:void(0)"><span
                                            class="title">تلویزیون ال ای دی</span><span
                                            class="right-arrow"></span></a>
                            </li>
                        </ul>
                        <div class="carousel-inner slide-Item ">

                            <a class="carousel-item active ">
                                <div class="row">
                                    <div class="thumb-cell col-md-6 ">
                                        <span class="title ">هارد اکسترنال ای دیتا مدل HD710 Pro  ظرفیت یک ترابایت</span>
                                        <img class="img-fluid " src="{{asset('images/adata.jpg')}}">
                                    </div>
                                    <div class="col-md-6 right-side">
                                        <span class="price-label">پیشنهاد شگفت انگیز امروز</span>
                                        <span class="price-old  ">290</span>
                                        <span class="price-final  ">
                                            <span class="arrow-left "></span>
                                            <span class="right">289</span>
                                            <span class="currency left">هزار تومان</span>
                                        </span>
                                        <ul class="attributes">
                                            <li> مقاوم در برابر ضربه</li>
                                            <li> مقاوم در برابر آب و خاک</li>
                                            <li> دارای نگهدارنده کابل روی بدنه</li>
                                        </ul>
                                        <span class="timerLabel">فرصت باقی مانده تا این پیشنهاد</span>
                                        <div class="timer">
                                            <span class="timer__holder hours">
                                                <span>1</span>
                                                <span>2</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder minutes">
                                                <span>2</span>
                                                <span>6</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder seconds">
                                                <span>2</span>
                                                <span>1</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="carousel-item ">
                                <div class="row">
                                    <div class="thumb-cell col-md-6 ">
                                        <span class="title ">هارد اکسترنال ای دیتا مدل HD710 Pro  ظرفیت یک ترابایت</span>
                                        <img class="img-fluid " src="{{asset('images/adata.jpg')}}">
                                    </div>
                                    <div class="col-md-6 right-side">
                                        <span class="price-label">پیشنهاد شگفت انگیز امروز</span>
                                        <span class="price-old  ">290</span>
                                        <span class="price-final  ">
                                            <span class="arrow-left "></span>
                                            <span class="right">289</span>
                                            <span class="currency left">هزار تومان</span>
                                        </span>
                                        <ul class="attributes">
                                            <li> مقاوم در برابر ضربه</li>
                                            <li> مقاوم در برابر آب و خاک</li>
                                            <li> دارای نگهدارنده کابل روی بدنه</li>
                                        </ul>
                                        <span class="timerLabel">فرصت باقی مانده تا این پیشنهاد</span>
                                        <div class="timer">
                                            <span class="timer__holder hours">
                                                <span>1</span>
                                                <span>2</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder minutes">
                                                <span>2</span>
                                                <span>6</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder seconds">
                                                <span>2</span>
                                                <span>1</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="carousel-item  ">
                                <div class="row">
                                    <div class="thumb-cell col-md-6 ">
                                        <span class="title ">هارد اکسترنال ای دیتا مدل HD710 Pro  ظرفیت یک ترابایت</span>
                                        <img class="img-fluid " src="{{asset('images/adata.jpg')}}">
                                    </div>
                                    <div class="col-md-6 right-side">
                                        <span class="price-label">پیشنهاد شگفت انگیز امروز</span>
                                        <span class="price-old  ">290</span>
                                        <span class="price-final  ">
                                            <span class="arrow-left "></span>
                                            <span class="right">289</span>
                                            <span class="currency left">هزار تومان</span>
                                        </span>
                                        <ul class="attributes">
                                            <li> مقاوم در برابر ضربه</li>
                                            <li> مقاوم در برابر آب و خاک</li>
                                            <li> دارای نگهدارنده کابل روی بدنه</li>
                                        </ul>
                                        <span class="timerLabel">فرصت باقی مانده تا این پیشنهاد</span>
                                        <div class="timer">
                                            <span class="timer__holder hours">
                                                <span>1</span>
                                                <span>2</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder minutes">
                                                <span>2</span>
                                                <span>6</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder seconds">
                                                <span>2</span>
                                                <span>1</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="carousel-item ">
                                <div class="row">
                                    <div class="thumb-cell col-md-6 ">
                                        <span class="title ">هارد اکسترنال ای دیتا مدل HD710 Pro  ظرفیت یک ترابایت</span>
                                        <img class="img-fluid " src="{{asset('images/adata.jpg')}}">
                                    </div>
                                    <div class="col-md-6 right-side">
                                        <span class="price-label">پیشنهاد شگفت انگیز امروز</span>
                                        <span class="price-old  ">290</span>
                                        <span class="price-final  ">
                                            <span class="arrow-left "></span>
                                            <span class="right">289</span>
                                            <span class="currency left">هزار تومان</span>
                                        </span>
                                        <ul class="attributes">
                                            <li> مقاوم در برابر ضربه</li>
                                            <li> مقاوم در برابر آب و خاک</li>
                                            <li> دارای نگهدارنده کابل روی بدنه</li>
                                        </ul>
                                        <span class="timerLabel">فرصت باقی مانده تا این پیشنهاد</span>
                                        <div class="timer">
                                            <span class="timer__holder hours">
                                                <span>1</span>
                                                <span>2</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder minutes">
                                                <span>2</span>
                                                <span>6</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder seconds">
                                                <span>2</span>
                                                <span>1</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="carousel-item  ">
                                <div class="row">
                                    <div class="thumb-cell col-md-6 ">
                                        <span class="title ">هارد اکسترنال ای دیتا مدل HD710 Pro  ظرفیت یک ترابایت</span>
                                        <img class="img-fluid " src="{{asset('images/adata.jpg')}}">
                                    </div>
                                    <div class="col-md-6 right-side">
                                        <span class="price-label">پیشنهاد شگفت انگیز امروز</span>
                                        <span class="price-old  ">290</span>
                                        <span class="price-final  ">
                                            <span class="arrow-left "></span>
                                            <span class="right">289</span>
                                            <span class="currency left">هزار تومان</span>
                                        </span>
                                        <ul class="attributes">
                                            <li> مقاوم در برابر ضربه</li>
                                            <li> مقاوم در برابر آب و خاک</li>
                                            <li> دارای نگهدارنده کابل روی بدنه</li>
                                        </ul>
                                        <span class="timerLabel">فرصت باقی مانده تا این پیشنهاد</span>
                                        <div class="timer">
                                            <span class="timer__holder hours">
                                                <span>1</span>
                                                <span>2</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder minutes">
                                                <span>2</span>
                                                <span>6</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder seconds">
                                                <span>2</span>
                                                <span>1</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="carousel-item  ">
                                <div class="row">
                                    <div class="thumb-cell col-md-6 ">
                                        <span class="title ">هارد اکسترنال ای دیتا مدل HD710 Pro  ظرفیت یک ترابایت</span>
                                        <img class="img-fluid " src="{{asset('images/adata.jpg')}}">
                                    </div>
                                    <div class="col-md-6 right-side">
                                        <span class="price-label">پیشنهاد شگفت انگیز امروز</span>
                                        <span class="price-old  ">290</span>
                                        <span class="price-final  ">
                                            <span class="arrow-left "></span>
                                            <span class="right">289</span>
                                            <span class="currency left">هزار تومان</span>
                                        </span>
                                        <ul class="attributes">
                                            <li> مقاوم در برابر ضربه</li>
                                            <li> مقاوم در برابر آب و خاک</li>
                                            <li> دارای نگهدارنده کابل روی بدنه</li>
                                        </ul>
                                        <span class="timerLabel">فرصت باقی مانده تا این پیشنهاد</span>
                                        <div class="timer">
                                            <span class="timer__holder hours">
                                                <span>1</span>
                                                <span>2</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder minutes">
                                                <span>2</span>
                                                <span>6</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder seconds">
                                                <span>2</span>
                                                <span>1</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="carousel-item  ">
                                <div class="row">
                                    <div class="thumb-cell col-md-6 ">
                                        <span class="title ">هارد اکسترنال ای دیتا مدل HD710 Pro  ظرفیت یک ترابایت</span>
                                        <img class="img-fluid " src="{{asset('images/adata.jpg')}}">
                                    </div>
                                    <div class="col-md-6 right-side">
                                        <span class="price-label">پیشنهاد شگفت انگیز امروز</span>
                                        <span class="price-old  ">290</span>
                                        <span class="price-final  ">
                                            <span class="arrow-left "></span>
                                            <span class="right">289</span>
                                            <span class="currency left">هزار تومان</span>
                                        </span>
                                        <ul class="attributes">
                                            <li> مقاوم در برابر ضربه</li>
                                            <li> مقاوم در برابر آب و خاک</li>
                                            <li> دارای نگهدارنده کابل روی بدنه</li>
                                        </ul>
                                        <span class="timerLabel">فرصت باقی مانده تا این پیشنهاد</span>
                                        <div class="timer">
                                            <span class="timer__holder hours">
                                                <span>1</span>
                                                <span>2</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder minutes">
                                                <span>2</span>
                                                <span>6</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder seconds">
                                                <span>2</span>
                                                <span>1</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="carousel-item  ">
                                <div class="row">
                                    <div class="thumb-cell col-md-6 ">
                                        <span class="title ">هارد اکسترنال ای دیتا مدل HD710 Pro  ظرفیت یک ترابایت</span>
                                        <img class="img-fluid " src="{{asset('images/adata.jpg')}}">
                                    </div>
                                    <div class="col-md-6 right-side">
                                        <span class="price-label">پیشنهاد شگفت انگیز امروز</span>
                                        <span class="price-old  ">290</span>
                                        <span class="price-final  ">
                                            <span class="arrow-left "></span>
                                            <span class="right">289</span>
                                            <span class="currency left">هزار تومان</span>
                                        </span>
                                        <ul class="attributes">
                                            <li> مقاوم در برابر ضربه</li>
                                            <li> مقاوم در برابر آب و خاک</li>
                                            <li> دارای نگهدارنده کابل روی بدنه</li>
                                        </ul>
                                        <span class="timerLabel">فرصت باقی مانده تا این پیشنهاد</span>
                                        <div class="timer">
                                            <span class="timer__holder hours">
                                                <span>1</span>
                                                <span>2</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder minutes">
                                                <span>2</span>
                                                <span>6</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder seconds">
                                                <span>2</span>
                                                <span>1</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="carousel-item  ">
                                <div class="row">
                                    <div class="thumb-cell col-md-6 ">
                                        <span class="title ">هارد اکسترنال ای دیتا مدل HD710 Pro  ظرفیت یک ترابایت</span>
                                        <img class="img-fluid " src="{{asset('images/adata.jpg')}}">
                                    </div>
                                    <div class="col-md-6 right-side">
                                        <span class="price-label">پیشنهاد شگفت انگیز امروز</span>
                                        <span class="price-old  ">290</span>
                                        <span class="price-final  ">
                                            <span class="arrow-left "></span>
                                            <span class="right">289</span>
                                            <span class="currency left">هزار تومان</span>
                                        </span>
                                        <ul class="attributes">
                                            <li> مقاوم در برابر ضربه</li>
                                            <li> مقاوم در برابر آب و خاک</li>
                                            <li> دارای نگهدارنده کابل روی بدنه</li>
                                        </ul>
                                        <span class="timerLabel">فرصت باقی مانده تا این پیشنهاد</span>
                                        <div class="timer">
                                            <span class="timer__holder hours">
                                                <span>1</span>
                                                <span>2</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder minutes">
                                                <span>2</span>
                                                <span>6</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder seconds">
                                                <span>2</span>
                                                <span>1</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="carousel-item  ">
                                <div class="row">
                                    <div class="thumb-cell col-md-6 ">
                                        <span class="title ">هارد اکسترنال ای دیتا مدل HD710 Pro  ظرفیت یک ترابایت</span>
                                        <img class="img-fluid " src="{{asset('images/adata.jpg')}}">
                                    </div>
                                    <div class="col-md-6 right-side">
                                        <span class="price-label">پیشنهاد شگفت انگیز امروز</span>
                                        <span class="price-old  ">290</span>
                                        <span class="price-final  ">
                                            <span class="arrow-left "></span>
                                            <span class="right">289</span>
                                            <span class="currency left">هزار تومان</span>
                                        </span>
                                        <ul class="attributes">
                                            <li> مقاوم در برابر ضربه</li>
                                            <li> مقاوم در برابر آب و خاک</li>
                                            <li> دارای نگهدارنده کابل روی بدنه</li>
                                        </ul>
                                        <span class="timerLabel">فرصت باقی مانده تا این پیشنهاد</span>
                                        <div class="timer">
                                            <span class="timer__holder hours">
                                                <span>1</span>
                                                <span>2</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder minutes">
                                                <span>2</span>
                                                <span>6</span>
                                            </span>
                                            <span class="timer__spacer">:</span>
                                            <span class="timer__holder seconds">
                                                <span>2</span>
                                                <span>1</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="row promo">

                        <div class="col-xl-4 promo__list--right">
                            <div class="_wrapper">
                                <div class="promo__item ">
                                    <span class="_inner">
                                        <img src="{{asset('images/s-1.JPG')}}" class="" style="opacity: 1;">
                                    </span>
                                </div>
                            </div>
                            <div class="_wrapper">
                                <div class="promo__item ">
                                    <span class="_inner">
                                        <img src="{{asset('images/s-4.JPG')}}" class="" style="opacity: 1;">
                                    </span>
                                </div>
                            </div>
                            <div class="_wrapper">
                                <div class="promo__item" data-index="0">
                                    <span class="_inner">
                                        <img src="{{asset('images/s-6.JPG')}}" class="" style="opacity: 1;">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 promo__detail">
                            <span class="promo__action">مشاهده همه پیشنهادهای شگفت انگیز</span>
                        </div>
                        <div class="col-xl-4 promo__list--left">
                            <div class="_wrapper">
                                <div class="promo__item ">
                                    <span class="_inner">
                                        <img src="{{asset('images/s-4.JPG')}}" class="" style="opacity: 1;">
                                    </span>
                                </div>
                            </div>
                            <div class="_wrapper">
                                <div class="promo__item ">
                                    <span class="_inner">
                                        <img src="{{asset('images/s-8.JPG')}}" class="" style="opacity: 1;">
                                    </span>
                                </div>
                            </div>
                            <div class="_wrapper">
                                <div class="promo__item" data-index="0">
                                    <span class="_inner">
                                        <img src="{{asset('images/s-2.JPG')}}" class="" style="opacity: 1;">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <ul class="shortcut-list clearfix">
                        <li>
                            <a title="کنسول بازی" href="">
                                <img class="img-fluid" src="{{asset('images/banner-5.jpg')}}">
                            </a>
                        </li>
                        <li class="last-box">
                            <a title="ابزار آرایش" href="">
                                <img class="img-fluid" src="{{asset('images/banner-6.jpg')}}">
                            </a>
                        </li>
                        <li>
                            <a title="لوازم خودرو" href="">
                                <img class="img-fluid" src="{{asset('images/banner-7.jpg')}}">
                            </a>
                        </li>
                        <li>
                            <a title="ابزار سلامت" href="">
                                <img class="img-fluid" src="{{asset('images/banner-8.jpg')}}">
                            </a>
                        </li>
                        <li class="last-box">
                            <a title="کنسول بازی" href="">
                                <img class="img-fluid" src="{{asset('images/banner-5.jpg')}}">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="row" id="dk-services-feature">
                    <div class="col-xl-2">
                        <a class="cro" href="">
                            <img class="cro-img-icon" src="{{asset('images/shipping-express-1.png')}}"
                                 style="float: right;padding-left: 2px;"> <span class="cro-text">تحویل اکسپرس</span>
                        </a>
                    </div>
                    <div class="col-xl-3">
                        <a class="cro" href="">
                            <img class="cro-img-icon" src="{{asset('images/day-guarantee-1.png')}}"
                                 style="float: right;padding-left: 2px;"> <span
                                    class="cro-text">7 روز ضمانت برگشت</span></a>
                    </div>
                    <div class="col-xl-2">
                        <a class="cro" href=""><img class="cro-img-icon" src="{{asset('images/cod-1.png')}}"
                                                    style="float: right;padding-left: 2px;"> <span class="cro-text">پرداخت در محل</span></a>
                    </div>
                    <div class="col-xl-2">
                        <a class="cro" href="">
                            <img class="cro-img-icon" src="{{asset('images/best-price-1.png')}}"
                                 style="float: right;padding-left: 2px;">
                            <span class="cro-text">تضمین بهترین قیمت</span>
                        </a>
                    </div>
                    <div class="col-xl-3">
                        <a class="cro" href="">
                            <img class="cro-img-icon" src="{{asset('images/certificate-1.png')}}"
                                 style="float: right;padding-left: 2px;">
                            <span class="cro-text">ضمانت اصل بودن کالا</span>
                        </a>
                    </div>

                </div>
                <div class="slider-3 ">
                    <div class="center ">
                        <div><h3>1</h3></div>
                        <div><h3>2</h3></div>
                        <div><h3>3</h3></div>
                        <div><h3>4</h3></div>
                        <div><h3>5</h3></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts')
        <script src="{{asset('js/slick.js')}}"></script>
        <script >
                $('.center').slick({
                    centerMode: true,
                    centerPadding: '60px',
                    slidesToShow: 3,
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '40px',
                                slidesToShow: 3
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '40px',
                                slidesToShow: 1
                            }
                        }
                    ]
                });        </script>

@endsection

