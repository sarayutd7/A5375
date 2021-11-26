<?php
include('conn/config.php');
include('conn/function.inc.php'); 
db_connect();
?><!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

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
    <!-- start: page -->
    <section class="body-sign">
        <div class="center-sign">
            <a href="/" class="logo pull-left">
                <img src="lib/images/logo-light.png" height="54" alt="Porto Admin" />
            </a>

            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>
                </div>
                <div class="panel-body">
                    <form action="regis_us.php" method="post">
                        <div class="form-group mb-lg">
                            <label>Title Name</label>
                            <select id="titlename" name="titlename" class="form-control">
                                <?php 
                        $sql_titlename = "select * from titlename order by titlename_id asc";
                        $result_titlename = get_rsltset($sql_titlename);
                        $nr_titlename = count($result_titlename);
if($nr_titlename>0){?>
                                <option value="0" selected>
                                    กรุณาเลือกข้อมูล
                                </option>
                                <? }
                        for($t=0;$t<$nr_titlename;$t++){ ?>
                                <? if($result_profile_user['titlename'] == $result_titlename[$t]['titlename_id']){ ?>
                                <option value="<?=$result_titlename[$t]['titlename_id']?>" selected>
                                    <?=$result_titlename[$t]['titlename_short']?>
                                </option>
                                <? }else{ ?>
                                <option value="<?=$result_titlename[$t]['titlename_id']?>">
                                    <?=$result_titlename[$t]['titlename_short']?>
                                </option>
                                <? } 
                                                       } ?>


                            </select>
                        </div>

                        <div class="form-group mb-none">
                            <div class="row">
                                <div class="col-sm-6 mb-lg">
                                    <label>Name</label>
                                    <input name="fname" id="fname" type="text" class="form-control input-lg" required/>
                                </div>
                                <div class="col-sm-6 mb-lg">
                                    <label>Last Name</label>
                                    <input name="lastname" id="lastname" type="text" class="form-control input-lg" required/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-lg">
                            <label>E-mail Address</label>
                            <input name="email" type="email" class="form-control input-lg" required/>
                        </div>
                        
                        <div class="form-group mb-lg">
                            <label>User Login</label>
                            <input name="username" id="username" type="text" class="form-control input-lg" required />
                        </div>

                        <div class="form-group mb-none">
                            <div class="row">
                                <div class="col-sm-6 mb-lg">
                                    <label>Password</label>
                                    <input name="pwd" id="pwd" type="password" class="form-control input-lg" required/>
                                </div>
                                <div class="col-sm-6 mb-lg">
                                    <label>Password Confirmation</label>
                                    <input name="pwd_confirm" id="pwd_confirm" type="password" class="form-control input-lg" required/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mb-lg">
                            <label>Status</label>
                            <select id="status" name="status" class="form-control">
                                <option value="">กรุณาเลือกข้อมุล</option>
                                <option value="1">พยาบาล</option>
                                <option value="2">ผู้บันทึกผล LAb</option>
                                <option value="3">เจ้าหน้าที่ สถิติ</option>
                                <option value="4">หัวหน้างาน / หมอ / ผู้ควบคุมโครงการ</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <!--
									<div class="checkbox-custom checkbox-default">
										<input id="AgreeTerms" name="agreeterms" type="checkbox"/>
										<label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>
									</div>
-->
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary btn-sm ">Sign Up</button>
                                <button type="submit" class="btn btn-info btn-sm " onclick="location.replace('index.php');">Cancel</button>
                            </div>
                        </div>

                        <!--
							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>
-->

                    </form>
                </div>
            </div>

            <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. หากพบปัญหาในการใช้งานกรุณาหน่วยงาน DMU.</p>
        </div>
    </section>
    <!-- end: page -->

    <?php include('_footer.php');?>
</body>

</html>