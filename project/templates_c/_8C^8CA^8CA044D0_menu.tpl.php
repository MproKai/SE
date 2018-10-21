<?php /* Smarty version 2.6.19, created on 2017-07-25 01:40:22
         compiled from menu.tpl */ ?>
<nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav metismenu" id="side-menu">
			<li class="nav-header">
				<img src="images/logo_W_150x50.png" width="150"/>
			</li>
			<li class="active"><a href="#"><span class="nav-label">Patient</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level collapse in">
					<li <?php if ($_SESSION['active_page'] == 'pt_queue'): ?> class="active" <?php endif; ?>>
						<a href="pt_queue.php"><i class="fa fa-user"></i> <span class="nav-label">Patient Queue</span></a>
					</li>
					<li <?php if ($_SESSION['active_page'] == 'pt_list'): ?> class="active" <?php endif; ?>>
						<a href="pt_list.php"><i class="fa fa-user"></i> <span class="nav-label">Patient List</span></a>
					</li>
					<li <?php if ($_SESSION['active_page'] == 'document'): ?> class="active" <?php endif; ?>>
						<a href="document.php"><i class="fa fa-folder-open-o"></i> <span class="nav-label">Document List</span> </a>
					</li>				
					<li <?php if ($_SESSION['active_page'] == 'invoice'): ?> class="active" <?php endif; ?>>
						<a href="invoice.php"><i class="fa fa-money"></i> <span class="nav-label">Invoice List</span></a>
					</li>					
					<!--li <?php if ($_SESSION['active_page'] == 'letter'): ?> class="active" <?php endif; ?>>
						<a href="letter.php"><i class="fa fa-file-text-o"></i> <span class="nav-label">Referral Letter</span></a>
					</li-->	
					<!--li <?php if ($_SESSION['active_page'] == 'memo'): ?> class="active" <?php endif; ?>>
						<a href="messenger.php"><i class="fa fa-comments-o"></i> <span class="nav-label">Messenger</span></a>
					</li-->
					<!--li <?php if ($_SESSION['active_page'] == 'memo'): ?> class="active" <?php endif; ?>>
						<a href="memo.php"><i class="fa fa-pencil-square"></i> <span class="nav-label">Memo</span></a>
					</li-->
					<!--li <?php if ($_SESSION['active_page'] == 'report'): ?> class="active" <?php endif; ?>>
						<a href="report.php"><i class="fa fa-bar-chart"></i> <span class="nav-label">Reports</span></a>
					</li-->
					<!--li <?php if ($_SESSION['active_page'] == 'appointment'): ?> class="active" <?php endif; ?>>
						<a href="appointment.php"><i class="fa fa-calendar-o"></i> <span class="nav-label">Appointments</span></a>
					</li-->
					<li <?php if ($_SESSION['active_page'] == 'calendar'): ?> class="active" <?php endif; ?>>
						<a href="calendar.php"><i class="fa fa-calendar"></i> <span class="nav-label">Calendar</span></a>
					</li>
					<li <?php if ($_SESSION['active_page'] == 'search'): ?> class="active" <?php endif; ?>>
						<a href="search.php"><i class="fa fa-search"></i> <span class="nav-label">Search Note</span></a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>