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
                        <label for="basicInput">العنوان</label>
                        <input type="text" class="form-control" id="ادخل العنوان " placeholder="العنوان" name="title">
                    </fieldset>

                </div>

                <div class="col-xl-4 col-md-6 col-12 mb-1">
                    <fieldset class="form-group">
                        <label for="basicInput">تاريخ البدء</label>
                        <input type="date" class="form-control" id="ادخل العنوان " placeholder="تاريخ البدء" name="startdate">
                    </fieldset>

                </div>

                <div class="col-xl-4 col-md-6 col-12 mb-1">
                    <fieldset class="form-group">
                        <label for="basicInput">الحالة</label>
                        <select class="form-control" id="basicSelect" name="status">
                            <option>staging</option>
                            <option>in progress</option>
                            <option>test</option>
                            <option>in progress</option>
                            <option>test</option>
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
