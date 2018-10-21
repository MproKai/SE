<?php /* Smarty version 2.6.19, created on 2018-10-20 14:59:21
         compiled from menu.tpl */ ?>
<nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav metismenu" id="side-menu">
			<li class="nav-header">
				<!-- <img src="images/<?php echo $_SESSION['account']; ?>
.jpg" class="img-circle img-md"> -->				
				<h4><font style="font-size: 15px;color: white;">Hi!&nbsp;&nbsp;<?php echo $_SESSION['user_name']; ?>
</font></h4>
			</li>
			<li class="active"><a href="#"><span class="nav-label">Home</span></a>
				<ul class="nav nav-second-level collapse in">
					<!-- <li <?php if ($_SESSION['active_page'] == 'home_queue'): ?> class="active" <?php endif; ?>>
						<a href="home_queue.php"><i class="fa fa-quora">&nbsp;</i> <span class="nav-label">Queue</span></a>
					</li> -->
					<li <?php if ($_SESSION['active_page'] == 'home_dashboard'): ?> class="active" <?php endif; ?>>
						<a href="home_dashboard.php"><i class="fa fa-dashboard">&nbsp;</i> <span class="nav-label">Dashboards</span></a>
					</li>
					<li <?php if ($_SESSION['active_page'] == 'home_speak'): ?> class="active" <?php endif; ?>>
						<a href="home_speak.php"><i class="fa fa-dashboard">&nbsp;</i> <span class="nav-label">Speak</span></a>
					</li>
				</ul>
			</li>
			<li class="active"><a href="#"><span class="nav-label">System</span></a>
				<!-- <ul class="nav nav-second-level collapse in">
					<li <?php if ($_SESSION['active_page'] == 'system_registration'): ?> class="active" <?php endif; ?>>
						<a href="system_registration.php"><i class="fa fa-drivers-license-o">&nbsp;</i> <span class="nav-label">Registration</span></a>
					</li>
					<li <?php if ($_SESSION['active_page'] == 'system_setting'): ?> class="active" <?php endif; ?>>
						<a href="system_setting.php"><i class="fa fa-gears">&nbsp;</i> <span class="nav-label">Setting</span></a>
					</li>
				</ul> -->
			</li>
			<li class="active"><a href="#"><span class="nav-label">User</span></a>
				<!-- <ul class="nav nav-second-level collapse in">
					<li <?php if ($_SESSION['active_page'] == 'user_queue'): ?> class="active" <?php endif; ?>>
						<a href="user_queue.php"><i class="fa fa-quora">&nbsp;</i> <span class="nav-label">User Queue</span></a>
					</li>
				</ul> -->
			</li>
			

		</ul>
	</div>
</nav>