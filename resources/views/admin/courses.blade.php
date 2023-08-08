@extends('admin.layout.main')

@section('main-container')

<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{url('admin/assets/img/basic/favicon.ico')}}" type="image/x-icon">
    <title>Learn Salesforce</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{url('admin/assets/css/app.css')}}">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <!-- Js -->
    <!--
    --- Head Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="">
    <!-- Sidebar Start -->
       
    <!--Sidebar End-->
<!-- header starts -->

<!-- header ends -->
<div class="page has-sidebar-left">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Self Paced Training
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white">
                    <li>
                        <a class="nav-link active" href="{{url('/')}}"><i class="icon icon-list"></i>All Courses</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{url('/createCourses')}}"><i
                                class="icon icon-plus-circle"></i> Add New Course</a>
                    </li>
                     
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="row">
                <div class="col-md-12">
                    <div class="card no-b shadow">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover ">
                                    <tbody>
                                    <tr class="no-b">
                                        <td class="w-10">
                                            <img src="{{url('admin/assets/img/demo/shop/s1.png')}}" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td><span class="badge badge-success">Published</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary shadow text-white"><i class="icon-pencil"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="{{url('admin/assets/img/demo/shop/s2.png')}}" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td><span class="badge badge-success">Published</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary shadow text-white"><i class="icon-pencil"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="{{url('admin/assets/img/demo/shop/s3.png')}}" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td><span class="badge badge-danger">Pending</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary shadow text-white"><i class="icon-pencil"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="{{url('admin/assets/img/demo/shop/s4.png')}}" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td><span class="badge badge-success">Published</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary shadow text-white"><i class="icon-pencil"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="{{url('admin/assets/img/demo/shop/s5.png')}}" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td><span class="badge badge-primary">Sold Out</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary shadow text-white"><i class="icon-pencil"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="{{url('admin/assets/img/demo/shop/s6.png')}}" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td><span class="badge badge-warning">Low Stock</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary shadow text-white"><i class="icon-pencil"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="pt-3" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- Right Sidebar -->
<aside class="control-sidebar fixed white ">
    <div class="slimScroll">
        <div class="sidebar-header">
            <h4>Activity List</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-3">
            <div>
                <div class="my-3">
                    <small>25% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>45% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 45%;" aria-valuenow="45"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>60% Complete</small>
                    `
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>75% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>100% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 bg-primary text-white">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="font-weight-normal s-14">Sodium</h5>
                    <span class="font-weight-lighter text-primary">Spark Bar</span>
                    <div> Oxygen
                        <span class="text-primary">
                                                    <i class="icon icon-arrow_downward"></i> 67%</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <canvas width="100" height="70" data-chart="spark" data-chart-type="bar"
                            data-dataset="[[28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100]]"
                            data-labels="['a','b','c','d','e','f','g','h','i','j','k','l','m','n','a','b','c','d','e','f','g','h','i','j','k','l','m','n']">
                    </canvas>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                <tbody>
                <tr>
                    <td>
                        <a href="#">INV-281281</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 1228.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="sidebar-header">
            <h4>Activity</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-4">
            <div class="activity-item activity-primary">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 5 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet conse ctetur which ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-danger">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 8 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit ametcon the sectetur that ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-success">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 10 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet cons the ecte tur and adip ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-warning">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 12 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet consec tetur adip ascing elit users.</p>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="{{url('admin/assets/js/app.js')}}"></script>




<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>
</html>
@endsection