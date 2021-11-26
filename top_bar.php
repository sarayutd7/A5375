<header class="header">
				<div class="logo-container">
					<a href="index.php" class="logo">
						<img src="lib/images/logoactg.png" height="35">
                        <img src="lib/images/logo.png" height="35">
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="#" class="search nav-form" method="get">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="pid" id="pid" placeholder="Search..." style="text-transform:uppercase">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
							<? if($_GET['task'] == ''){ ?>
                               <input class="form-control" value="findPID" type="hidden" id="task" name="task" >
                            <? }else{ ?>
                              <input class="form-control" value="<?=$_GET['task']?>" type="hidden" id="task" name="task" >
                            <? } ?>
							
						</div>
					</form>
			
					
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="lib/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="lib/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="<?=$result_userLogin['fristname']." ".$result_userLogin['lastname']?>">
								<span class="name"><?=$result_userLogin['fristname']." ".$result_userLogin['lastname']?></span>
								<span class="role"><?=position($result_userLogin['status'])?></span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="index.php?task=setprofile"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>