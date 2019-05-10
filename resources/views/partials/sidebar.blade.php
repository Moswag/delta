<div class="sidebar--profile">
    <div class="profile--img"><a href=""> <img src="{{URL::to('assets/img/user.png')}}" alt=""
                                                           class="rounded-circle"> </a></div>
    <div class="profile--name"><a href="" class="btn-link">{{auth()->user()->name}} {{auth()->user()->surname}}</a></div>
    <div class="profile--nav">
        <ul class="nav">
            <li class="nav-item"><a href="" class="nav-link" title="User Profile"> <i
                            class="fa fa-user"></i> </a></li>
            <li class="nav-item"><a href="" class="nav-link" title="Lock Screen"> <i
                            class="fa fa-lock"></i> </a></li>
            <li class="nav-item"><a href="" class="nav-link" title="Messages"> <i
                            class="fa fa-envelope"></i> </a></li>
            <li class="nav-item"><a href="{{route('logout')}}" class="nav-link" title="Logout"> <i class="fa fa-sign-out-alt"></i>
                </a></li>
        </ul>
    </div>
</div>
<div class="sidebar--nav">
    <ul>

        <li><a href="#">Admin Operations</a>
            <ul>
                <li><a href="#"> <i class="fa fa-th"></i> <span>User</span> </a>
                    <ul>
                        <li><a href="{{route('add_user')}}">Add User</a></li>
                        <li><a href="{{route('view_users')}}">View Users</a></li>
                    </ul>
                </li>
                <li><a href="#"> <i class="fa fa-tasks"></i> <span>Products</span> </a>
                    <ul>
                        <li><a href="{{route('add_product')}}">Add Product</a></li>
                        <li><a href="{{route('view_products')}}">View Products</a></li>
                    </ul>
                </li>

                <li><a href="{{route('view_clients')}}"> <i class="far fa-address-book"></i> <span>View Clients</span> </a></li>

                <li><a href="#"> <i class="fa fa-th-list"></i> <span>Promotion</span> </a>
                    <ul>
                        <li><a href="{{route('add_promotion')}}">Add Promotion</a></li>
                        <li><a href="{{route('view_promotions')}}">View Promotions</a></li>
                    </ul>
                </li>

                <li><a href="#"> <i class="far fa-sticky-note"></i> <span>Winner Prices</span> </a>
                    <ul>
                        <li><a href="{{route('add_price')}}">Add Price</a></li>
                        <li><a href="{{route('view_prices')}}">View Prices</a></li>
                    </ul>
                </li>

                <li><a href="#"> <i class="far fa-sticky-note"></i> <span>Sales</span> </a>
                    <ul>
                        <li><a href="{{route('add_sale')}}">Add Sale</a></li>
                        <li><a href="{{route('view_sales')}}">View Sales</a></li>
                    </ul>
                </li>
                <li><a href="#"> <i class="far fa-sticky-note"></i> <span>Buying Patterns</span> </a>
                    <ul>
                        <li><a href="{{route('buying_patterns')}}">View Customer Buying Pattern</a></li>
                    </ul>
                </li>

                <li><a href="#"> <i class="far fa-sticky-note"></i> <span>Reports</span> </a>
                    <ul>
                        <li><a href="{{route('report')}}">View Report</a></li>
                    </ul>
                </li>

                <li><a href="{{route('reminder')}}"> <i class="far fa-address-book"></i> <span>Reminder</span> </a></li>

                <li><a href="{{route('view_current_promotions')}}"> <i class="far fa-address-book"></i> <span>Winners</span> </a></li>
            </ul>
        </li>



    </ul>
</div>
