<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php'); 
db_connect();
$sql_userLogin = "select * from user_db where user = '".$_SESSION['session_user']."'";
$result_userLogin = get_a_line($sql_userLogin);
function position($id){
    switch($id){
        case '1' : $txt = "Adminstration"; break;
        case '2' : $txt = "User"; break;
        case '3' : $txt = "inspector"; break;
        case '4' : $txt = "Supper Adminstration"; break;   
            default : $txt = "NULL"; break;
    }
    return $txt; 
}
function duration($begin,$end){
//    $remain=intval(strtotime($end)-strtotime($begin));
     $dayofyear = 365; 
//    $year = floor( $remain / (86400*$dayofyear) ); 
//    $moth = floor( $remain % (86400*$dayofyear) / 30 / 86400 );
//    //$wan=floor($remain/86400);
//    $day = floor(($remain % (86400*$dayofyear)) % 86400 / 3600);
//    $hour=floor(  ($remain % (86400*$dayofyear)) / 3600 % 3600 ); 
// 
    $remain=intval(strtotime($end)-strtotime($begin));
    $year=floor($remain/(86400*$dayofyear));
    $moth=floor($remain%(86400*$dayofyear)/30/86400);
    
    $wan=floor($remain/86400%30);
    $l_wan=$remain%86400;
    $hour=floor($l_wan/3600);
    $l_hour=$l_wan%3600;
    $minute=floor($l_hour/60);
    $second=$l_hour%60;
    //return "ผ่านมาแล้ว ".$wan." วัน ".$hour." ชั่วโมง ".$minute." นาที ".$second." วินาที";
    return "อายุ ".$year." ปี ".$moth." เดือน ".$wan." วัน ".$hour." ชั่วโมง ".$minute." นาที ".$second." วินาที";
}?>
<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Blank Page | Okler Themes | Porto-Admin</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="lib/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="lib/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="lib/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="lib/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="lib/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="lib/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="lib/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="lib/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="lib/vendor/modernizr/modernizr.js"></script>
     

</head>

<body>
    <section class="body">

        <!-- start: header -->
        <?php include('top_bar.php');?>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <?php include('left_menu.php'); ?>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Blank Page</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Pages</span></li>
                            <li><span>Blank Page</span></li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>


                <!-- start: page -->
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="col-lg-3 col-sm-2 text-right">
                            <span>DOB (dd/MMM/yy) :</span>
                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <input type="text" class="form-control" id="dob" name="dob" data-plugin-datepicker>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </span>
                                <input type="text" id="time" name="time" data-plugin-timepicker class="form-control" data-plugin-options='{ "showMeridian": false }'>
                            </div>
                            
                        </div>
                        <div class="col-md-2">
                        <input type="button" class="btn btn-sm" value="click" onclick="age()">
                        </div>
                        
                    </div>
                    <p id="exact_age"><?  echo duration("1988-02-06 00:01:00",date("Y-m-d H:i:s"))
                            //echo duration("2018-01-01 00:01:00","2018-12-27 15:58:59");
                        ?></p>
                </div>
                <!-- end: page -->
            </section>
        </div>

        <aside id="sidebar-right" class="sidebar-right">
            <div class="nano">
                <div class="nano-content">
                    <a href="#" class="mobile-close visible-xs">
                        Collapse <i class="fa fa-chevron-right"></i>
                    </a>

                    <div class="sidebar-right-wrapper">

                        <div class="sidebar-widget widget-calendar">
                            <h6>Upcoming Tasks</h6>
                            <div data-plugin-datepicker data-plugin-skin="dark"></div>

                            <ul>
                                <li>
                                    <time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
                                    <span>Company Meeting</span>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-widget widget-friends">
                            <h6>Friends</h6>
                            <ul>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-offline">
                                    <figure class="profile-picture">
                                        <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-offline">
                                    <figure class="profile-picture">
                                        <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </aside>
    </section>

    <!-- Vendor -->
    <!--
    <script src="lib/vendor/jquery/jquery.js"></script>
    <script src="lib/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="lib/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="lib/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="lib/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="lib/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="lib/vendor/jquery-placeholder/jquery.placeholder.js"></script>
-->

    <!-- Theme Base, Components and Settings 
    <script src="lib/javascripts/theme.js"></script>-->

    <!-- Theme Custom 
    <script src="lib/javascripts/theme.custom.js"></script>-->

    <!-- Theme Initialization Files 
    <script src="lib/javascripts/theme.init.js"></script>-->

    <!-- Specific Page Vendor 
    <script src="lib/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script src="lib/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script> -->

    <!-- Vendor -->
    <script src="lib/vendor/jquery/jquery.js"></script>
    <script src="lib/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="lib/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="lib/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="lib/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="lib/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="lib/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="lib/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>


    <!-- Theme Base, Components and Settings -->
    <script src="lib/javascripts/theme.js"></script>

    <!-- Theme Custom -->
    <script src="lib/javascripts/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="lib/javascripts/theme.init.js"></script>


    <!-- Examples -->
    <script src="lib/javascripts/forms/examples.advanced.form.js" />
    </script>

</body>

</html>