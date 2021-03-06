@extends('layouts.master')


@section('page_header')
    <li class="breadcrumb-item active"><span>View Clients</span></li>
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
                    <th class="not-sortable">Surname</th>
                    <th>National ID</th>
                    <th>Phonenumber</th>
                    <th>Address</th>
                    <th class="not-sortable">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td><a href="#" class="btn-link">{{$client->name}}</a></td>
                        <td><a href="#" class="btn-link">{{$client->surname}}</a></td>
                        <td><a href="#" class="btn-link">{{$client->national_id}}</a></td>
                        <td>{{$client->phonenumber}}</td>
                        <td>{{$client->address}}</td>
                        <td>
                            <div class="dropleft"><a href="#" class="btn-link" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu"><a href="#" class="dropdown-item">Edit</a> <a href="#"
                                                                                                         class="dropdown-item">Delete</a>
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

