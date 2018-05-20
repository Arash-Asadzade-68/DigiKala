@extends('layouts.admin')
@section('style')
    <link rel="stylesheet" href="{{asset('css/users.css')}}">
@stop
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xl-12" style="margin:auto">
                @if(Session::has('Profile_Update'))
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
                            <a data-toggle="modal" data-target="#add_cat" class="fa fa-plus add"
                               style="color: green ; cursor: pointer"
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
                                                  action="/admin/categories" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name" style="float: right">عنوان:</label>
                                                    <input type="text" name="name"
                                                           style="border-radius: 4px;" required autofocus>
                                                    <input type="hidden" name="parent_id" value="{{$cat ? 0 : $id}}">
                                                </div>
                                                @if(!$cat)
                                                    @if($flag)
                                                        <div class="form-group">
                                                            <label for="path" style="float: right">تصویر:</label>
                                                            <input type="file" name="path" required autofocus>
                                                        </div>
                                                    @endif
                                                @endif
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
                            <a href="#" class="fa fa-trash" title="حذف همه" data-toggle="modal"
                               data-target="#deleteAll"></a>
                            <div class="modal fade" id="deleteAll">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                                        <span class="modal-title text-center">حذف تمامی {{$cat?'دسته ها':'زیردسته ها'}}

                                                          </span>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">

                                            <form class="text-center" method="Post"
                                                  action="{{route('categories.delete')}}">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="checkboxArray">
                                                <span class="modal-title text-center">آیا از حذف تمامی {{$cat?'دسته ها':'زیردسته ها'}}
                                                    مطمئن هستید؟

                                                          </span>
                                                <input class="btn btn-info" type="submit" name="submit"
                                                       value="بله"
                                                       style="width: 90px">
                                                <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal"
                                                        style="width: 90px">خیر
                                                </button>
                                            </form>

                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer" style="direction: rtl">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="align-content-center form-inline" method="Post" action="/admin/categories/delete">
                        @csrf
                        @method('DELETE')
                        <select name="checkboxArray">
                            <option value="">حذف همه</option>
                        </select>

                        <input class="btn btn-primary m-2" type="submit" name="submit" value="حذف">
                    @if($categories)
                        <table class="table shadow table-responsive-xl table-dark table-hover"
                               style="border-radius: 4px; font-size: 12pt;">
                            <thead style="background-color: #222d32; font-size: 10pt; color: #FFF">
                            <tr>
                                <th>ردیف</th>
                                <th>عنوان دسته</th>
                                @if(!$subcat)
                                    <th>مشاهده زیردسته ها</th>
                                @endif

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
                                    @if(!$subcat)
                                        <td><a href="{{route('categories.show',$category->id)}}">مشاهده</a></td>
                                    @endif
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
                                                              action="/admin/categories/{{$category->id}}"
                                                              enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group">
                                                                <label for="name" style="float: right">عنوان
                                                                    دسته:</label>
                                                                <input class="form-control" type="text" name="name"
                                                                       value="{{$category->name}}"
                                                                       style="border-radius: 4px">
                                                            </div>

                                                            @if(!$cat)
                                                                @if($flag)
                                                                    <div class="form-group">
                                                                        <label for="path"
                                                                               style="">تصویر:</label>
                                                                        <input type="file" name="path" required
                                                                               autofocus>
                                                                    </div>
                                                                @endif
                                                            @endif
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
                    </form>

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
                    $(this).addClass('green');
                    $('.checkboxes').each(function () {
                        this.checked = true;
                    });
                } else {
                    $(this).removeClass('green');
                    $('.checkboxes').each(function () {
                        this.checked = false;
                    });
                }
            });
        });
    </script>
@stop