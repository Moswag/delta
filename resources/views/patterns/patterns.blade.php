@extends('layouts.master')


@section('page_header')
    <li class="breadcrumb-item active"><span>Buying Patterns</span></li>
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
                <div class="panel-heading"><h3 class="panel-title">{{$name}} Buying Pattern</h3></div>
                <form >
                    {{csrf_field()}}
                    <div class="panel-content">

                        @foreach($patterns as $pattern)
                        <div class="form-group row">
                            <span class="label-text col-md-2 col-form-label text-md-right">{{$pattern->date}}</span>
                            <div class="col-md-10"><input type="text" value="{{$pattern->products}}" class="form-control" required disabled></div>
                        </div>

                            @endforeach


                    </div>
                </form>
            </div>
        </div>
    </div>
@stop