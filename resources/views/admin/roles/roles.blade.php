@extends('admin.adminlayouts.base')
@section('breadcrumbs')

<h2 class="content-header-title float-left mb-0">الرئيسية</h2>
<ol class="breadcrumb">
    <li class="breadcrumb-item">جدول المستخدمين
    </li>

</ol>




@endsection()


@section('base-content')

<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">جدول المستخدمين </h4>
            </div>
            <div class="card-content">
                <div class="card-body">

                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>رقم </th>
                                <th>المستخدم</th>
                                <th>البريد الالكتروني</th>
                                <th>الدور</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach($roles as $role)
                            <tr>

                                <td>
                                    {{$role->id}}

                                </td>
                                <td>
                                    {{$role->name}}
                                </td>

                                <td>
                                    {{$role->email}}
                                </td>
                                <td>
                                    {{$role->roleName}}
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection()
