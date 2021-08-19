@extends('admin.adminlayouts.base')
@section('breadcrumbs')

<h2 class="content-header-title float-left mb-0">الرئيسية</h2>
<ol class="breadcrumb">
    <li class="breadcrumb-item">اضافة مستخدم
    </li>

</ol>




@endsection()


@section('base-content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<div class="card">
    <div class="card-header">
        <h3>


            قم ب اضافه مستخدم حسب البيانات التاليه
        </h3>
    </div>

    <div class="card-body">
        <form action="{{ route('roles.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-xl-4 col-md-6 col-12 mb-1">
                    <fieldset class="form-group">
                        <label for="basicInput">الاسم</label>
                        <input type="text" class="form-control" id="ادخل الاسم " placeholder="الاسم" name="name">
                    </fieldset>

                </div>

                <div class="col-xl-4 col-md-6 col-12 mb-1">
                    <fieldset class="form-group">
                        <label for="basicInput">البريد الالكتروني</label>
                        <input type="text" class="form-control" id="ادخل الاسم " placeholder="البريد الالكتروني" name="email">
                    </fieldset>

                </div>

                <div class="col-xl-4 col-md-6 col-12 mb-1">
                    <fieldset class="form-group">
                        <label for="basicInput">كلمه السر</label>
                        <input type="password" class="form-control" id="ادخل الاسم " placeholder="كلمه السر" name="password">
                    </fieldset>

                </div>

                <div class="col-xl-4 col-md-6 col-12 mb-1">
                    <fieldset class="form-group">
                        <label for="basicInput"> تئكيد كلمه السر </label>
                        <input type="password" class="form-control" id="ادخل الاسم " placeholder=" تئكيد كلمه السر" name="password_confirmation">
                    </fieldset>

                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-1">
                    <fieldset class="form-group">
                        <label for="basicInput">الدور</label>
                        <select class="form-control" id="basicSelect" name="role">
                            <option>administrator</option>
                            <option>user</option>
                        </select>
                    </fieldset>

                </div>






            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 mb-1 text-center">
                    <button class="btn btn-primary btn-block" type="submit"> <i class="fa fa-pencil-square-o"></i> اضافة</button>
                </div>

                <div class="col-2"></div>
            </div>
        </form>
    </div>


    @endsection()
