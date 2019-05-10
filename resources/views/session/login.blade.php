<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<!-- Mirrored from themelooks.net/demo/dadmin/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 13:54:32 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - DAdmin</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="stylesheet"
          href="fonts.googleapis.com/css66e6.css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="assets/css/morris.min.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/jquery-jvectormap.min.css">
    <link rel="stylesheet" href="assets/css/horizontal-timeline.min.css">
    <link rel="stylesheet" href="assets/css/weather-icons.min.css">
    <link rel="stylesheet" href="assets/css/dropzone.min.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.skinFlat.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="wrapper">
    <div class="m-account-w" data-bg-img="assets/img/account/wrapper-bg.jpg">
        <div class="m-account">
            <div class="row no-gutters">
                <div class="col-md-2">
                    @if(Session::has('message'))
                        <div class="alert-success">{{Session::get('message')}}</div>
                        @elseif(Session::has('error'))
                        <div class="alert-danger">{{Session::get('error')}}</div>
                        @endif

                </div>
                <div class="col-md-8">
                    <div class="m-account--form-w">
                        <div class="m-account--form">
                            <div class="logo"><img src="assets/img/delta.png" alt=""></div>
                            <form action="{{route('login')}}" method="post">
                                <label class="m-account--title">Login to your account</label>
                                {{csrf_field()}}
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><i class="fas fa-user"></i></div>
                                        <input type="text" name="employee_id" placeholder="Employee ID" class="form-control"
                                               autocomplete="off" required></div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><i class="fas fa-key"></i></div>
                                        <input type="password" name="password" placeholder="Password"
                                               class="form-control" autocomplete="off" required></div>
                                </div>
                                <div class="m-account--actions"><a href="#" class="btn-link">Forgot Password?</a>
                                    <button type="submit" class="btn btn-rounded btn-info">Login</button>
                                </div>

                                <div class="m-account--footer"><p>&copy; 2019 HINFO Group</p></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/perfect-scrollbar.min.js"></script>
<script src="assets/js/jquery.sparkline.min.js"></script>
<script src="assets/js/raphael.min.js"></script>
<script src="assets/js/morris.min.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/jquery-jvectormap.min.js"></script>
<script src="assets/js/jquery-jvectormap-world-mill.min.js"></script>
<script src="assets/js/horizontal-timeline.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/jquery.steps.min.js"></script>
<script src="assets/js/dropzone.min.js"></script>
<script src="assets/js/ion.rangeSlider.min.js"></script>
<script src="assets/js/datatables.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
<!-- Mirrored from themelooks.net/demo/dadmin/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 13:54:38 GMT -->
</html>
