@extends('layouts.master')


@section('page_header')
    <li class="breadcrumb-item active"><span>View Users</span></li>
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
                    <th class="not-sortable">Description</th>
                    <th>Price</th>
                    <th class="not-sortable">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td><a href="#" class="btn-link">{{$product->name}}</a></td>
                        <td><a href="#" class="btn-link">{{$product->description}}</a></td>
                        <td><a href="#" class="btn-link">{{$product->price}}</a></td>

                        <td>
                            <div class="dropleft"><a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu"><a href="{{route('edit_product',['id'=>$product->id])}}" class="dropdown-item">Edit</a>
                                    <a href="{{route('delete_product',['id'=>$product->id])}}"  class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop

