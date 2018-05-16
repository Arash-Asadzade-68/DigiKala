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
                            <button type="button" class="close float-left" data-dismiss="alert"
                                    style="font-size: 10pt;">
                                &times;
                            </button>
                        </div>
                    </div>
                @endif
                <div class="content-box">
                    <div class="Cat_head"><span class="fa fa-bars" style="padding-left:5px ;"></span>مدیریت دسته های
                        <span>{{$cat ?'اصلی':'فرعی'}}</span>
                        <div class="left-btns" style="float: left">
                            <a data-toggle="modal" data-target="#add_cat" class="fa fa-plus add" style="color: green ;"
                               title="افزودن"></a>
                            <div class="modal fade" id="add_cat">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                                        <span class="modal-title text-center">افزودن {{$cat?'دسته':'زیردسته'}}

                                                          </span>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">

                                            <form class="text-center" method="Post"
                                                  action="/admin/categories">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name" style="float: right">عنوان:</label>
                                                    <input type="text" name="name" style="border-radius: 4px; display: inline-block">
                                                </div>
                                                <input class="btn btn-info" type="submit" name="submit"
                                                       value="افزودن"
                                                       style="width: 100px">
                                                <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal"
                                                        style="width: 100px">بستن
                                                </button>
                                            </form>

                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer" style="direction: rtl">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <a href="#" class="fa fa-trash" title="حذف همه"></a>
                        </div>
                    </div>
                    @if($categories)
                        <table class="table shadow table-responsive-xl table-dark table-hover"
                               style="border-radius: 4px; font-size: 12pt;">
                            <thead style="background-color: #222d32; font-size: 10pt; color: #FFF">
                            <tr>
                                <th>ردیف</th>
                                <th>عنوان دسته</th>
                                <th>مشاهده زیردسته ها</th>
                                <th>ویژگی ها</th>
                                <th>ویرایش</th>
                                <th>حذف</th>
                                <th><input class="checkbox" type="checkbox" id="options"></th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach($categories as $category)

                                <tr style="line-height: 49px;">
                                    <td>{{$category->id}}</td>
                                    <td class="short_string">{{$category->name}}</td>
                                    <td><a href="{{route('categories.show',$category->id)}}">مشاهده</a></td>
                                    <td><a href="{{route('categories.properties',$category->id)}}">ویژگی ها</a></td>
                                    <td>
                                        <a style="cursor: pointer; line-height: 27px; padding-right: 13pt; font-size: 16pt; color: green; opacity: .7; "
                                           class="fa fa-pencil " data-toggle="modal"
                                           data-target="#Edit{{$category->id}}"></a>
                                        <div class="modal fade" id="Edit{{$category->id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <span class="modal-title text-center"> ویرایش دسته</span>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">

                                                        <form class="text-center" method="Post"
                                                              action="/admin/categories/{{$category->id}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input class="form-control" type="text"
                                                                   value="{{$category->name}}"
                                                                   style="border-radius: 4px">
                                                            <input class="btn btn-info" type="submit" name="submit"
                                                                   value="ویرایش" style="width: 100px">
                                                            <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal" style="width: 100px">بستن
                                                            </button>
                                                        </form>

                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer" style="direction: rtl">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <td>
                                        <a style="cursor: pointer; line-height: 27px; padding-right: 13pt; font-size: 16pt; color: red; opacity: .7; "
                                           class="fa fa-trash " data-toggle="modal"
                                           data-target="#{{$category->id}}"></a>
                                        <div class="modal fade" id="{{$category->id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <span class="modal-title text-center">آیا می خواهید دسته {{$category->name}}
                                                            را حذف
                                                            کنید؟</span>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">

                                                        <form class="text-center" method="Post"
                                                              action="/admin/categories/{{$category->id}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input class="btn btn-info" type="submit" name="submit"
                                                                   value="بله"
                                                                   style="width: 100px">
                                                            <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal"
                                                                    style="width: 100px">خیر
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
                                    <td><input class="checkbox checkboxes" type="checkbox" name="checkboxArray[]"
                                               value="{{$category->id}}"></td>
                                </tr>

                            @endforeach

                            </tbody>


                        </table>
                        <div class="col-md-6 paginate" style="margin: auto">
                            {{$categories->render()}}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

@stop
@section('scripts')
    <script>
        $(document).ready(function () {
            $('#options').click(function () {
                if (this.checked) {
                    $('.checkboxes').each(function () {
                        this.checked = true;
                    });
                } else {
                    $('.checkboxes').each(function () {
                        this.checked = false;
                    });
                }
            });
        });
    </script>
@stop