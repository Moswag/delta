@extends('layouts.master')


@section('page_header')
    <li class="breadcrumb-item active"><span>View Sales</span></li>
@stop


@section('content')
    @if(Session::has('message'))
        <div class="alert-success">{{Session::get('message')}}</div>
    @elseif(Session::has('error'))
        <div class="alert-danger">{{Session::get('error')}}</div>
    @endif
    <div class="panel">
        <div class="records--list" data-title="User List">
            <table id="recordsListView">
                <thead>
                <tr>
                    <th>Receipt Number</th>
                    <th class="not-sortable">Order</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sales as $sale)
                    <tr>
                        <td><a href="#" class="btn-link">{{$sale->receipt_number}}</a></td>
                        <td><a href="#" class="btn-link">{{$sale->order}}</a></td>
                        <td><a href="#" class="btn-link">{{$sale->amount}}</a></td>
                        <td><a href="#" class="btn-link">{{$sale->created_at}}</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop

