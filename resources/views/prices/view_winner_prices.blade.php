@extends('layouts.master')


@section('page_header')
    <li class="breadcrumb-item active"><span>View Promotions</span></li>
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
                    <th>Promotion Name</th>
                    <th class="not-sortable">Winner Number</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                @foreach($prices as $price)
                    <tr>
                        <td><a href="#" class="btn-link">{{$price->promotion_name}}</a></td>
                        <td><a href="#" class="btn-link">{{$price->winner_number}}</a></td>
                        <td><a href="#" class="btn-link">{{$price->price}}</a></td>



                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop

