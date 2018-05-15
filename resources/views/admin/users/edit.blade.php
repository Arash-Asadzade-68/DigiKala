@extends('layouts.admin')
@section('style')
    <link rel="stylesheet" href="{{asset('css/users.css')}}">
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin:auto">

                <div class="content-box">
                    <div class="head"><span class="fa fa-users"
                                            style="padding-left:5px ;"></span>ویرایش پروفایل {{$user->name}}</div>
                    <div class="edit_profile shadow">
                        <form class="col-xl-8" style="margin: auto" method="POST" action="/admin/users/{{$user->id}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-xl-8 img_div" style="margin: auto; text-align: center">

                                    <div>
                                        <img height="150" width="200"
                                             src="{{$user->photo ? $user->photo->path : asset('images/user.png')}}"
                                             alt="تصویر کاربر" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="form-group">
                                        <label for="photo_id">تصویر:</label>
                                        <input class="m-2" type="file"
                                               name="photo_id"
                                               style="color: #101010; font-size: 9pt;" required autofocus>
                                        @if($errors->has('photo_id'))
                                            <span class="invalid-feedback">
                                             <strong>{{ $errors->first('photo_id') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-xl-6 pr_filds">

                                    <div class="form-group">
                                        <label for="name">نام و نام خانوادگی:</label>
                                        <input class="form-control m-2 {{$errors->has('name')? 'required' : '' }}"
                                               type="text" name="name"
                                               value="{{$user->name}}"
                                               placeholder="نام و نام خانوادگی خود را وارد کنید"
                                               style="color: #101010; font-size: 10pt;" required autofocus>
                                        @if($errors->has('name'))
                                            <span class="invalid-feedback">
                                                    <strong>{{$errors->first('name')}}</strong>
                                                </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">موبایل:</label>
                                        <input class="form-control m-2" type="text" name="mobile"
                                               value="{{$user->mobile}}"
                                               style="color: #101010; font-size: 10pt;">
                                    </div>
                                    <div class="form-group">
                                        <label for="role_id">سطح دسترسی:</label>
                                        <select class="form-control m-2 {{$errors->has('role_id'?'required':'')}}"
                                                name="role_id"
                                                style="color: #101010; font-size: 10pt;" required autofocus>
                                            <option value="" selected="selected">{{$user->role? $user->role->name : 'غیر مجاز'}}</option>
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('role_id'))
                                            <span class="invalid-feedback">
                                                    <strong>{{$errors->first('role_id')}}</strong>
                                                </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="password">رمز عبور :</label>
                                        <input class="form-control m-2 {{$errors->has('password')?'is_invalid':''}}"
                                               type="password" name="password"
                                               placeholder="رمز عبور را وارد کنید"
                                               style="color: #101010; font-size: 10pt;" required autofocus>
                                        @if($errors->has('password'))
                                            <span class="invalid-feedback">
                                                   <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                        @endif
                                    </div>


                                </div>
                                <div class="col-xl-6 en_filds">

                                    <div class="form-group">
                                        <label for="telegram">تلگرام:</label>
                                        <input class="form-control m-2" type="text" name="telegram"
                                               value="{{$user->telegram}}"
                                               placeholder="Enter your telegram Id"
                                               style="color: #101010; font-size: 10pt; direction: ltr">
                                    </div>
                                    <div class="form-group">
                                        <label for="facebook">فیسبوک:</label>
                                        <input class="form-control m-2 " type="text" name="facebook"
                                               value="{{$user->facebook}}"
                                               placeholder="Enter your telegram Id"
                                               style="color: #101010; font-size: 10pt; direction: ltr">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">پست الکترونیکی:</label>
                                        <input class="form-control m-2 {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               type="text" name="email"
                                               value="{{$user->email}}"
                                               placeholder="for example Code@facaulty.com"
                                               style="color: #101010; font-size: 10pt; direction: ltr" required
                                               autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                   <strong>{{ $errors->first('email') }}</strong>
                                                 </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="aboutMe">درباره من:</label>
                                        <input class="form-control m-2" type="text" name="aboutMe"
                                               value="{{$user->aboutMe}}"
                                               style="color: #101010; font-size: 10pt;">
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-xl-12">
                                    <label for="aboutMe">آدرس:</label>
                                    <textarea class="form-control m-2 {{$errors->has('address')?'required':''}}"
                                              type="text" name="address"

                                              style="color: #101010; font-size: 10pt;" required
                                              autofocus>{{$user->address}}</textarea>
                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback">
                                                   <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div style="text-align: center">
                                <input class="btn btn-dark m-2" style="width: 200px; margin: 0" type="submit"
                                       name="submit" value="ویرایش">
                                <a href="{{route('users.index')}}" class="btn btn-dark m-2"
                                   style="width: 200px">بازگشت</a>
                            </div>

                        </form>
                        @include('includes.form_error')
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop