@extends('layouts.master')


@section('page_header')
    <li class="breadcrumb-item active"><span>Add Promotion</span></li>
@stop


@section('content')
    <div class="row gutter-20">
        <div class="col-md-12">
            @if(Session::has('message'))
                <div class="alert-success">{{Session::get('message')}}</div>
            @elseif(Session::has('error'))
                <div class="alert-danger">{{Session::get('error')}}</div>
            @endif
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">Promotion Add</h3></div>
                <form method="post" action="{{route('save_promotion')}}">
                    {{csrf_field()}}
                    <div class="panel-content">
                        <div class="form-group row">
                            <span class="label-text col-md-2 col-form-label text-md-right">Promotion Name</span>
                            <div class="col-md-10"><input type="text" name="promotion_name" class="form-control" required></div>
                        </div>

                        <div class="form-group row">
                            <span class="label-text col-md-2 col-form-label text-md-right">Number Of Winners</span>
                            <div class="col-md-10"><input type="number" name="number_of_winners" class="form-control" required></div>
                        </div>
                        <div class="form-group row">
                            <span class="label-text col-md-2 col-form-label text-md-right">Start Date</span>
                            <div class="col-md-10"><input type="date" name="start_date" class="form-control" required></div>
                        </div>
                        <div class="form-group row">
                            <span class="label-text col-md-2 col-form-label text-md-right">End Date</span>
                            <div class="col-md-10"><input type="date" name="end_date" class="form-control" required></div>
                        </div>

                        <div class="form-group row">
                            <span class="label-text col-md-2 col-form-label text-md-right">Amount For A Point</span>
                            <div class="col-md-10"><input type="number" name="amount_for_point" class="form-control" required></div>
                        </div>


                        <div class="form-group row">
                            <span class="label-text col-md-2 col-form-label text-md-right"></span>
                            <div class="col-md-6">
                                <button class="btn btn-block btn-info">Save Promotion</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop