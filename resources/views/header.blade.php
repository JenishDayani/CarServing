

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
    <title>Online Mechanic Service</title>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{url('Adminassets')}}/css/bootstrap.min.css" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{url('Adminassets')}}/css/style.css" rel='stylesheet' type='text/css' />
    <link href="{{url('Adminassets')}}/css/style-responsive.css" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{url('Adminassets')}}/css/font.css" type="text/css"/>
    <link href="{{url('Adminassets')}}/css/font-awesome.css" rel="stylesheet"> 
    <link rel="stylesheet" href="{{url('Adminassets')}}/css/morris.css" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="{{url('Adminassets')}}/css/monthly.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{url('Adminassets')}}/js/jquery2.0.3.min.js"></script>
    <script src="{{url('Adminassets')}}/js/raphael-min.js"></script>
    <script src="{{url('Adminassets')}}/js/morris.js"></script>
    
</head>
<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="{{route('admin')}}" class="logo">
                    ADMIN SIDE
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="{{url('Adminassets')}}/#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-success">1</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <li>
                                <p class="">You have 8 pending tasks</p>
                            </li>
                            <li>
                                <a href="{{url('Adminassets')}}/#">
                                    <div class="task-info clearfix">
                                        <div class="desc pull-left">
                                            <h5>Target Sell</h5>
                                            <p>25% , Deadline  12 June’13</p>
                                        </div>
                                        <span class="notification-pie-chart pull-right" data-percent="45">
                                            <span class="percent"></span>
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('Adminassets')}}/#">
                                    <div class="task-info clearfix">
                                        <div class="desc pull-left">
                                            <h5>Payment collection</h5>
                                            <p>87% , Deadline  12 June’13</p>
                                        </div>
                                        <span class="notification-pie-chart pull-right" data-percent="60">
                                            <span class="percent"></span>
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('Adminassets')}}/#">
                                    <div class="task-info clearfix">
                                        <div class="desc pull-left">
                                            <h5>Target Sell</h5>
                                            <p>33% , Deadline  12 June’13</p>
                                        </div>
                                        <span class="notification-pie-chart pull-right" data-percent="90">
                                            <span class="percent"></span>
                                        </span>
                                    </div>
                                </a>
                            </li>

                            <li class="external">
                                <a href="{{url('Adminassets')}}/#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="{{url('Adminassets')}}/#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-important">3</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <li>
                                <p class="red">You have 4 Mails</p>
                            </li>
                            <li>
                                <a href="{{url('Adminassets')}}/#">
                                    <span class="photo"><img alt="avatar" src="{{url('Adminassets')}}/images/3.png"></span>
                                    <span class="subject">
                                        <span class="from">Jonathan Smith</span>
                                        <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('Adminassets')}}/#">
                                    <span class="photo"><img alt="avatar" src="{{url('Adminassets')}}/images/1.png"></span>
                                    <span class="subject">
                                        <span class="from">Jane Doe</span>
                                        <span class="time">2 min ago</span>
                                    </span>
                                    <span class="message">
                                        Nice admin template
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('Adminassets')}}/#">
                                    <span class="photo"><img alt="avatar" src="{{url('Adminassets')}}/images/3.png"></span>
                                    <span class="subject">
                                        <span class="from">Tasi sam</span>
                                        <span class="time">2 days ago</span>
                                    </span>
                                    <span class="message">
                                        This is an example msg.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('Adminassets')}}/#">
                                    <span class="photo"><img alt="avatar" src="{{url('Adminassets')}}/images/2.png"></span>
                                    <span class="subject">
                                        <span class="from">Mr. Perfect</span>
                                        <span class="time">2 hour ago</span>
                                    </span>
                                    <span class="message">
                                        Hi there, its a test
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('Adminassets')}}/#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="notification">
                        <a href="{{route('notification')}}">

                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-warning">12</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <li>
                                <p>Notifications</p>
                            </li>                            

                            @push('notification')
                           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                           <script type="text/javascript">
                               
                               $(document).ready(function(){

                                $(document).on('click','#',function(e){
                                    alert('There are 10 new mechanic signup so UPDATE status for MECHANIC');
                                    e.preventDefault();
                                })
                               })
                           </script>
                                

                            @endpush('notification')
                           
                            <!-- <li>
                                <div class="alert alert-info clearfix">
                                    <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                    <div class="noti-info">
                                        <a href="{{route('viewmechanic')}}/#"> There are   new mechan</a>
                                    </div>
                                </div>
                            </li> -->

                            <!-- <li>
                                <div class="alert alert-danger clearfix">
                                    <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                    <div class="noti-info">
                                        <a href="{{url('Adminassets')}}/#"> Server #2 overloaded.</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="alert alert-success clearfix">
                                    <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                    <div class="noti-info">
                                        <a href="{{url('Adminassets')}}/#"> Server #3 overloaded.</a>
                                    </div>
                                </div>
                            </li> -->

                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="{{url('Adminassets')}}/#">
                            <img alt="" src="{{url('Adminassets')}}/images/adminphoto.jpg">
                            <span class="username">Jenish Dayani</span>
                        </a>
                        <?php $id = Session::get('admin')->id; ?>

                        </li>
                        </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="{{route('admin')}}">
                                <i class="fa fa-home"></i>
                                <span>HOME</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('editproAdmin.edit',$id)}}">
                                <i class=" fa fa-suitcase"></i>
                                <span>MANAGE PROFILE</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('cityajaxjd')}}">
                                <i class="fa fa-map-marker"></i>
                                <span>MANAGE CITY</span>
                            </a>
                        </li> 
                        <li>
                            <a href="{{route('serviceajax')}}">
                                <i class="fa fa-rocket" aria-hidden="true"></i>
                                <span>MANAGE SERVICES</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="{{url('Adminassets')}}/javascript:;">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span>MANAGE MECHANIC</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{route('addmechanic')}}">ADD MECHANIC</a></li>
                                <li><a href="{{route('viewmechanic')}}">VIEW MECHANIC</a></li>
                            </ul>
                        </li> 
                        <li>
                            <a href="{{route('viewclient')}}">
                               <i class="fa fa-users"></i>
                                <span>MANAGE CLIENT</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('viewpaymentadmin')}}">
                                <i class="fa fa-paypal"></i>
                                <span>VIEW PAYMENT</span>
                            </a>
                        </li>               
                        <li class="sub-menu">
                            <a href="{{url('Adminassets')}}/javascript:;">
                                <i class="fa fa-comments-o" aria-hidden="true"></i>
                                <span>FEEDBACK</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{route('adminclientfeed')}}">CLIENT FEEDBACK</a></li>
                                <li><a href="{{route('adminmechanicfeed')}}">MECHANIC FEEDBACK</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="{{route('logout')}}">
                                 <i class="fa fa-sign-out"></i>
                                <span>LOGOUT</span>
                            </a>
                        </li>
                        

               <!--  <li class="sub-menu">
                    <a href="{{route('Admincontact')}}">
                        <i class="glyphicon glyphicon-earphone"></i>
                        <span>Contact Us</span>
                    </a>
                </li> -->
                <!--<li class="sub-menu">
                    <a href="{{url('Adminassets')}}/javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('Adminassets')}}/chartjs.html">Chart js</a></li>
                        <li><a href="{{url('Adminassets')}}/flot_chart.html">Flot Charts</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="{{url('Adminassets')}}/javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('Adminassets')}}/google_map.html">Google Map</a></li>
                        <li><a href="{{url('Adminassets')}}/vector_map.html">Vector Map</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="{{url('Adminassets')}}/javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>Extra</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('Adminassets')}}/gallery.html">Gallery</a></li>
                        <li><a href="{{url('Adminassets')}}/404.html">404 Error</a></li>
                        <li><a href="{{url('Adminassets')}}/registration.html">Registration</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('Adminassets')}}/login.html">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li> -->
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">    
    <section class="wrapper">