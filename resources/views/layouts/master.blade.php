<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<!-- Mirrored from themelooks.net/demo/dadmin/html/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 13:53:42 GMT -->
<head>
@include('partials.head')
    @yield('css')
</head>
<body>
<div class="wrapper">
    <header class="navbar navbar-fixed">
        @include('partials.header')
    </header>
    <aside class="sidebar" data-trigger="scrollbar">
        @include('partials.sidebar')
    </aside>
    <main class="main--container">
        <section class="page--header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6"><h2 class="page--title h5">Delta</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><span>Delta</span></li>
                            @yield('page_header')

                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="summary--widget">
                            <div class="summary--item"><p class="summary--chart" data-trigger="sparkline"
                                                          data-type="bar" data-width="5" data-height="38"
                                                          data-color="#009378">2,9,7,9,11,9,7,5,7,7,9,11</p>
                                <p class="summary--title">This Month</p>
                                <p class="summary--stats text-green">2,371,527</p></div>
                            <div class="summary--item"><p class="summary--chart" data-trigger="sparkline"
                                                          data-type="bar" data-width="5" data-height="38"
                                                          data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7</p>
                                <p class="summary--title">Last Month</p>
                                <p class="summary--stats text-orange">2,527,371</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main--content">
            @yield('content')
        </section>
        @include('partials.footer')
    </main>
</div>
@yield('js')
<script src="{{URL::to('assets/js/jquery.min.js')}}"></script>
<script src="{{URL::to('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{URL::to('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::to('assets/js/perfect-scrollbar.min.js')}}"></script>
<script src="{{URL::to('assets/js/jquery.sparkline.min.js')}}"></script>
<script src="{{URL::to('assets/js/raphael.min.js')}}"></script>
<script src="{{URL::to('assets/js/morris.min.js')}}"></script>
<script src="{{URL::to('assets/js/select2.min.js')}}"></script>
<script src="{{URL::to('assets/js/jquery-jvectormap.min.js')}}"></script>
<script src="{{URL::to('assets/js/jquery-jvectormap-world-mill.min.js')}}"></script>
<script src="{{URL::to('assets/js/horizontal-timeline.min.js')}}"></script>
<script src="{{URL::to('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{URL::to('assets/js/jquery.steps.min.js')}}"></script>
<script src="{{URL::to('assets/js/dropzone.min.js')}}"></script>
<script src="{{URL::to('assets/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{URL::to('assets/js/datatables.min.js')}}"></script>
<script src="{{URL::to('assets/js/main.js')}}"></script>
</body>
<!-- Mirrored from themelooks.net/demo/dadmin/html/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 13:53:42 GMT -->
</html>
