@extends('admin.adminlayouts.base')
@section('breadcrumbs')

<h2 class="content-header-title float-left mb-0">الرئيسية</h2>
<ol class="breadcrumb">
    <li class="breadcrumb-item">اضافة الاخبار
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


            قم ب اضافه خبر حسب البيانات التاليه
        </h3>
    </div>

    <div class="card-body">
        <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xl-10 col-md-10 col-12 mb-1">
                    <fieldset class="form-group">
                        <label for="basicInput">العنوان</label>
                        <input type="text" class="form-control" id="ادخل العنوان " placeholder="العنوان" name="title">
                    </fieldset>

                </div>
            </div>








            <div class="row">

                <div class="col-xl-10 col-md-10 col-12 mb-1">
                    <fieldset class="form-group">
                        <label for="basicInput">التفاصيل</label>
                        <textarea row="4" col="6" type="text" class="form-control" id="ادخل التفاصيل " placeholder="التفاصيل" name="description"></textarea>
                    </fieldset>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-10 col-md-10 col-12 mb-1">
                    <fieldset class="form-group">
                        <label for="image">الصورة </label>
                        <input type="file" class="form-control" id="image" name="image">
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
