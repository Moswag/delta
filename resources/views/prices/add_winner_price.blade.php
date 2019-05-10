@extends('layouts.master')


@section('page_header')
    <li class="breadcrumb-item active"><span>Add Winner Price</span></li>
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
                <div class="panel-heading"><h3 class="panel-title">Winner Price Add</h3></div>
                <form method="post" action="{{route('save_price')}}">
                    {{csrf_field()}}
                    <div class="panel-content">
                        <div class="form-group row">
                            <span class="label-text col-md-2 col-form-label text-md-right">Promotion Name</span>
                            <div class="col-md-10">
                                <select  name="promotion_id" class="form-control" required>
                                    @foreach ($promotions as $promotion)
                                    <option value="{{$promotion->id}}">{{$promotion->promotion_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="label-text col-md-2 col-form-label text-md-right">Winner Number</span>
                            <div class="col-md-10"><input type="number" name="winner_number" class="form-control" required></div>
                        </div>
                        <div class="form-group row">
                            <span class="label-text col-md-2 col-form-label text-md-right">Price</span>
                            <div class="col-md-10"><input type="number" name="price" class="form-control" required></div>
                        </div>



                        <div class="form-group row">
                            <span class="label-text col-md-2 col-form-label text-md-right"></span>
                            <div class="col-md-6">
                                <button class="btn btn-block btn-info">Save Winner Price</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop