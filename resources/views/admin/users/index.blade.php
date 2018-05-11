@extends('layouts.admin')
@section('style')
    <link rel="stylesheet" href="{{asset('css/users.css')}}">
@stop
@section('content')

    <div class="container">
        <div class="row">
                <div class="col-md-10" style="margin:auto">

                    <div class="content-box">
                        <div class="head"><span class="fa fa-users" style="padding-left:5px ;"></span>مدیریت کاربران</div>
                        <table class="table shadow table-responsive-md table-dark table-hover" style="border-radius: 4px; font-size: 12pt;">
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

                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td><img class="img-fluid rounded-circle" style="width: 50px; height: 50px;"
                                                 src="{{$user->photo ? $user->photo->path : asset('images/user(2).png')}}" alt="فاقد عکس"></td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role->name}}</td>
                                        <td>
                                            <a style="line-height: 27px; padding-right: 13pt; font-size: 16pt; color: green; opacity: .7; "
                                               class="fa fa-edit " href="{{route('users.edit',$user->id)}}"></a></td>
                                        <td>
                                            <a style="line-height: 27px; padding-right: 13pt; font-size: 16pt; color: red; opacity: .7; "
                                               class="fa fa-trash " href="{{route('users.destroy',$user->id)}}"></a>
                                        </td>
                                    </tr>

                                @endforeach

                            </tbody>

                            @endif
                        </table>
                    </div>
                </div>
        </div>
    </div>

@stop