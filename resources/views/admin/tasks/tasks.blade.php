@extends('admin.adminlayouts.base')
@section('breadcrumbs')

<h2 class="content-header-title float-left mb-0">الرئيسية</h2>
<ol class="breadcrumb">
    <li class="breadcrumb-item">جدول المهام
    </li>

</ol>




@endsection()


@section('base-content')

<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">جدول المهام </h4>
            </div>
            <div class="card-content">
                <div class="card-body">

                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>رقم البند</th>
                                <th>الموضوع</th>
                                <th>المسؤول</th>
                                <th>تاريخ البدء</th>
                                <th>التحديث </th>
                                <th>تاريخ الاغلاق</th>
                                <th> ملاحضات </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                            <tr>
                                <th scope="row">{{$task->id}}</th>
                                <td>{{$task->title}}</td>
                                <td>
                                    @foreach($task->users as $user)
                                    <p style="display: inline">
                                        {{$user->name}}
                                        -
                                    </p>

                                    @endforeach()
                                </td>
                                <td>{{$task->start_date}}</td>
                                <td>{{$task->status}}</td>
                                <td>{{$task->due_date}}</td>

                                <td>{{$task->task_description}}</td>




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
