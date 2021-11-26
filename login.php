<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">
        <meta name="robots" content="noindex">
        <meta name="googlebot" content="noindex">
        <? echo PHPgourl('http://dmu.rihes.cmu.ac.th/smartlab/index.php');?>
        <title>A5375 Control Panel</title>
        <meta name="keywords" content="A5375 Control Panel" />
        <meta name="description" content="A5375 Control Panel - Customize by DMU Rihes">   

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
					<img src="lib/images/logo-light.png" height="54" alt="MTN053 Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>
					<div class="panel-body">
						<form action="login_action.php" method="post">
							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input id="Username" name="Username" type="text" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
									<a href="#" class="pull-right">Lost Password?</a>
								</div>
								<div class="input-group input-group-icon">
									<input id="Password" name="Password" type="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								 
								<div class="col-sm-12 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
								</div>
							</div>

							 

							<p class="text-center">Don't have an account yet? <a href="signup.php">Sign Up!</a>

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