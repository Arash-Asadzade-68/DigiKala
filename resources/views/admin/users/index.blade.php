@extends('layouts.admin')
@section('style')
    <link rel="stylesheet" href="{{asset('css/users.css')}}">
@stop
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xl-12" style="margin:auto">
                @if(Session::has('profile_update'))
                    <div class="col-md-4" style="margin: auto">
                        <div class="alert alert-success" style="color: #fff; margin-bottom: 10px;">
                            {{session('Profile_Update')}}
                            <button type="button" class="close float-left" data-dismiss="alert" style="font-size: 10pt;">
                                &times;
                            </button>
                        </div>
                    </div>
                    @endif
                <div class="content-box">
                    <div class="head"><span class="fa fa-users" style="padding-left:5px ;"></span>مدیریت کاربران</div>
                    <table class="table shadow table-responsive-xl table-dark table-hover"
                           style="border-radius: 4px; font-size: 12pt;">
                        <thead style="background-color: #222d32; font-size: 10pt; color: #FFF">
                        <tr>
                            <th>ردیف</th>
                            <th>نام و نام خانوادگی</th>
                            <th>تصویر</th>
                            <th>ایمیل</th>
                            <th>سطح دسترسی</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($users)
                            @foreach($users as $user)

                                <tr style="line-height: 49px;">
                                    <td>{{$user->id}}</td>
                                    <td class="short_string">{{$user->name}}</td>
                                    <td><img class="img-fluid rounded-circle" style="width: 50px; height: 50px;"
                                             src="{{$user->photo ? $user->photo->path : asset('images/user(2).png')}}"
                                             alt="فاقد عکس"></td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role? $user->role->name : 'غیر مجاز'}}</td>
                                    <td>
                                        <a style="line-height: 27px; padding-right: 13pt; font-size: 16pt; color: green; opacity: .7; "
                                           class="fa fa-edit " href="{{route('users.edit',$user->id)}}"></a></td>
                                    <td>
                                        <a style="cursor: pointer; line-height: 27px; padding-right: 13pt; font-size: 16pt; color: red; opacity: .7; "
                                           class="fa fa-trash " data-toggle="modal" data-target="#{{$user->id}}"></a>
                                        <div class="modal fade" id="{{$user->id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <span class="modal-title text-center">آیا می خواهید کاربر را حذف
                                                            کنید؟</span>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">

                                                        <form class="text-center" method="Post"
                                                              action="/admin/users/{{$user->id}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input class="btn btn-info" type="submit" name="submit"
                                                                   value="بله" style="padding-right: 40px; padding-left: 40px;">
                                                            <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal" style="padding-right: 40px; padding-left: 40px;">خیر
                                                            </button>
                                                        </form>

                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer" style="direction: rtl">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach

                        </tbody>

                        @endif
                    </table>
                    <div class="col-md-6 paginate" style="margin: auto">
                        {{$users->render()}}
                    </div>

                </div>
            </div>
        </div>
    </div>

@stop