<div class="navbar--header"><a href="" class="logo"> <img src="{{URL::to('assets/img/delta.png')}}" width="140" height="140" alt=""> </a> <a
            href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar"> <i
                class="fa fa-bars"></i> </a></div>
<a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar"> <i class="fa fa-bars"></i> </a>
<div class="navbar--search">
</div>
<div class="navbar--nav ml-auto">
    <ul class="nav">

        <li class="nav-item dropdown nav--user online"><a href="#" class="nav-link" data-toggle="dropdown"> <img
                        src="{{URL::to('assets/img/user.png')}}" alt="" class="rounded-circle">
                <span>{{auth()->user()->name}} {{auth()->user()->surname}}</span> <i class="fa fa-angle-down"></i> </a>
            <ul class="dropdown-menu">
                <li><a href="{{route('logout')}}"><i class="fa fa-power-off"></i>Logout</a></li>
            </ul>
        </li>
    </ul>
</div>