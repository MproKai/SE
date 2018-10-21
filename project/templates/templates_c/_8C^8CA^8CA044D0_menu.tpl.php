<?php /* Smarty version 2.6.19, created on 2017-08-08 07:42:49
         compiled from menu.tpl */ ?>
<nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav metismenu" id="side-menu">
			<li class="nav-header">
				<img src="images/logo_W_150x50.png" width="150"/>
			</li>
			<li class="active"><a href="#"><span class="nav-label">Home</span></a>
				<ul class="nav nav-second-level collapse in">
					<li <?php if ($_SESSION['active_page'] == 'pt_queue'): ?> class="active" <?php endif; ?>>
						<a href="pt_queue.php"><i class="fa fa-user">&nbsp;</i> <span class="nav-label">Patient Queue</span></a>
					</li>
					<li <?php if ($_SESSION['active_page'] == 'calendar'): ?> class="active" <?php endif; ?>>
						<a href="calendar.php"><i class="fa fa-calendar"></i> <span class="nav-label">Calendar</span></a>
					</li>
					<li <?php if ($_SESSION['active_page'] == 'search'): ?> class="active" <?php endif; ?>>
						<a href="search.php"><i class="fa fa-search"></i> <span class="nav-label">Search Note</span></a>
					</li>
					<!--li <?php if ($_SESSION['active_page'] == 'memo'): ?> class="active" <?php endif; ?>>
						<a href="messenger.php"><i class="fa fa-comments-o"></i> <span class="nav-label">Messenger</span></a>
					</li-->
				</ul>
			</li>
			<li class="active"><a href="#"><span class="nav-label">Patient</span></a>
				<ul class="nav nav-second-level collapse in">
					<li <?php if ($_SESSION['active_page'] == 'pt_list'): ?> class="active" <?php endif; ?>>
						<a href="pt_list.php"><i class="fa fa-user">&nbsp;</i> <span class="nav-label">Patient</span></a>
					</li>
					<li <?php if ($_SESSION['active_page'] == 'document'): ?> class="active" <?php endif; ?>>
						<a href="document.php"><i class="fa fa-folder-open-o"></i> <span class="nav-label">Document List</span> </a>
					</li>				
					<li <?php if ($_SESSION['active_page'] == 'invoice'): ?> class="active" <?php endif; ?>>
						<a href="invoice.php"><i class="fa fa-money"></i> <span class="nav-label">Invoice List</span></a>
					</li>					
				</ul>
			</li>
			<li class="active"><a href="#"><span class="nav-label">Report</span></a>
				<ul class="nav nav-second-level collapse in">
					<li <?php if ($_SESSION['active_page'] == 'week_report'): ?> class="active" <?php endif; ?>>
						<a href="report.php?act=week_report"><i class="fa fa-area-chart"></i> <span class="nav-label">Weekly Report</span></a>
					</li>
					<li <?php if ($_SESSION['active_page'] == 'drug_usage_report'): ?> class="active" <?php endif; ?>>
						<a href="report.php?act=drug_usage_report"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Drug Usage</span></a>
					</li>
					<li <?php if ($_SESSION['active_page'] == 'monthly_collection_report'): ?> class="active" <?php endif; ?>>
						<a href="report.php?act=monthly_collection_report"><i class="fa fa-table"></i> <span class="nav-label">Collection Report</span></a>
					</li>
					<li <?php if ($_SESSION['active_page'] == 'outstanding_report'): ?> class="actvie" <?php endif; ?>>
						<a href="outstanding.php">&nbsp;<i class="fa fa-usd">&nbsp;&nbsp;</i><span class="nav-label">Outstanding</span></a>
					</li>
				</ul>
			</li>
			<li class="active"><a href="#"><span class="nav-label">Inventory</span></a>
				<ul class="nav nav-second-level collapse in">
					<li <?php if ($_SESSION['active_page'] == 'items_setup_inventory'): ?> class="active" <?php endif; ?>>
						<a href="it_items_setup.php"><i class="fa fa-cogs"></i> <span class="nav-label">Items Setup</span></a>
					</li>
					<li <?php if ($_SESSION['active_page'] == 'vendor'): ?> class="active" <?php endif; ?>>
						<a href="vendor.php"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Vendors</span></a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>