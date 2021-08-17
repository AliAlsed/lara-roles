@extends('admin.adminlayouts.base')
@section('breadcrumbs')

<h2 class="content-header-title float-left mb-0">الرئيسية</h2>
<ol class="breadcrumb">
    <li class="breadcrumb-item">جدول الاخبار
    </li>

</ol>




@endsection()


@section('base-content')

<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">جدول الاخبار </h4>
            </div>
            <div class="card-content">
                <div class="card-body">

                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>رقم الخبر</th>
                                <th>العنوان</th>
                                <th>التفاصيل</th>
                                <th> الصورة</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($news as $task)
                            <tr>
                                <th scope="row">{{$task->id}}</th>
                                <td>{{$task->title}}</td>

                                <td>{{$task->description}}</td>
                                <td>
                                    <img style="width:75px;height:75px" src="{{asset('images/' . $task->image)}}">
                                </td>






                            </tr>
                            @endforeach()


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection()
