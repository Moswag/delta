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
        <div class="records--header">
            <div class="title fa-shopping-bag"><h3 class="h3">Add Product </h3>
                </div>
            <div class="actions">
                <form action="{{route('add_to_cart')}}" class="search flex-wrap flex-md-nowrap" method="post">
                    {{csrf_field()}}
                    <select name="product_id" class="form-control">
                        @foreach($products as $product)
                        <option value="{{$product->id}}" >{{$product->name}}</option>
                            @endforeach
                    </select>
                    <input type="number" class="form-control" placeholder="Quantity" name="quantity" required>
                    <button type="submit" class="addProduct btn btn-lg btn-rounded btn-warning">Add to Order</button>
                </form>

        </div>
    </div>
        @if(Session::has('cart'))
            <div class="panel">
                <div class="invoice">
                    <div class="invoice--header">
                        <div class="invoice--logo"><img src="assets/img/invoice/logo.png" alt=""></div>
                        <div class="invoice--address"><h5 class="h5">Address</h5>
                            <p>12345 Harare</p>
                            <p>Mbare Road</p>
                            <p>Harare</p></div>
                    </div>
                    <div class="invoice--billing">
                        <div class="invoice--info"><h5 class="h5"><span>Invoice:</span> #9048392</h5>
                            <p>Invoice Date: <strong>25th Mar 2018</strong></p>
                            <p>Due Date: <strong>28th Mar 2018</strong></p></div>
                    </div>
                    <div class="invoice--order">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products_in_cart as $product)
                            <tr>
                                <td>{{$product['item']['name']}}</td>
                                <td>{{$product['item']['price']}}</td>
                                <td>{{$product['qty']}}</td>
                                <td>{{$product['total_amount']}}</td>
                            </tr>
                            @endforeach

                            <tr>
                                <td colspan="4"><strong>Total</strong></td>
                                <td><strong>{{$totalPrice}}</strong></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="invoice--footer">

                        <div class="invoice--actions"><a href="{{route('clear_sale')}}" class="btn btn-rounded btn-outline-secondary">Clear</a>
                            <a href="{{route('save_sale')}}" class="btn btn-rounded btn-info">Pay Now</a></div>
                    </div>
                </div>
            </div>
    @endif
@stop
