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
                    <th>Name</th>
                    <th class="not-sortable">Number Of Winners</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Amount For A Point</th>
                    <th class="not-sortable">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($promotions as $promotion)
                    <tr>
                        <td><a href="#" class="btn-link">{{$promotion->promotion_name}}</a></td>
                        <td><a href="#" class="btn-link">{{$promotion->number_of_winners}}</a></td>
                        <td><a href="#" class="btn-link">{{$promotion->start_date}}</a></td>
                        <td><a href="#" class="btn-link">{{$promotion->end_date}}</a></td>
                        <td><a href="#" class="btn-link">{{$promotion->amount_for_point}}</a></td>

                        <td>
                            @if($promotion->end_date>date('Y-m-d'))
                            <span class="label label-danger"><a href="#" class="btn-link">Can Not View</a></span>
                                @else
                                <span class="label label-success"><a href="{{route('view_winners',['id'=>$promotion->id])}}" class="btn-link">View</a></span>
                            @endif
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop

