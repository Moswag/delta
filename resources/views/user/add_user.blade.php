@extends('layouts.master')


@section('page_header')
    <li class="breadcrumb-item active"><span>Add User</span></li>
    @stop


@section('content')
    <div class="row gutter-20">
    <div class="col-md-12">
        @if(Session::has('message'))
            <div class="alert-success">{{Session::get('message')}}{{Session::get('token')}}</div>
        @elseif(Session::has('error'))
            <div class="alert-danger">{{Session::get('error')}}</div>
        @endif
        <div class="panel">
            <div class="panel-heading"><h3 class="panel-title">User Add</h3></div>
            <form method="post" action="{{route('save_user')}}">
                {{csrf_field()}}
            <div class="panel-content">
                <div class="form-group row">
                    <span class="label-text col-md-2 col-form-label text-md-right">Name</span>
                    <div class="col-md-10"><input type="text" name="name" class="form-control" required></div>
                </div>

                <div class="form-group row">
                    <span class="label-text col-md-2 col-form-label text-md-right">Surname</span>
                    <div class="col-md-10"><input type="text" name="surname" class="form-control" required></div>
                </div>
                <div class="form-group row">
                    <span class="label-text col-md-2 col-form-label text-md-right">Employee ID</span>
                    <div class="col-md-10"><input type="text" name="employee_id" class="form-control" required></div>
                </div>

                <div class="form-group row">
                    <span class="label-text col-md-2 col-form-label text-md-right">Email</span>
                    <div class="col-md-10"><input type="text" name="email" class="form-control" required></div>
                </div>

                <div class="form-group row">
                    <span class="label-text col-md-2 col-form-label text-md-right">National ID</span>
                    <div class="col-md-10"><input type="text" name="national_id" class="form-control" required></div>
                </div>

                <div class="form-group row">
                    <span class="label-text col-md-2 col-form-label text-md-right"></span>
                    <div class="col-md-6">
                        <button class="btn btn-block btn-info">Save User</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@stop