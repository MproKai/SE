<?php /* Smarty version 2.6.19, created on 2017-07-25 01:40:22
         compiled from page_header.tpl */ ?>
<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <ul class="nav navbar-top-links pull-left pageTitle">
            	<?php if ($_SESSION['active_page'] == 'pt_queue'): ?><li><h3>Patient Queue</h3></li><?php endif; ?>
                <?php if ($_SESSION['active_page'] == 'pt_list'): ?><li><h3>Patient List</h3></li><?php endif; ?>
                <?php if ($_SESSION['active_page'] == 'document'): ?><li><h3>Documents</h3></li><?php endif; ?>
                <?php if ($_SESSION['active_page'] == 'invoice'): ?><li><h3>Invoice</h3></li><?php endif; ?>
                <?php if ($_SESSION['active_page'] == 'pt_menu'): ?><li><h3>Patient Detail</h3></li><?php endif; ?>
                <?php if ($_SESSION['active_page'] == 'letter'): ?><li><h3>Referral Letter</h3></li><?php endif; ?>
                <?php if ($_SESSION['active_page'] == 'report'): ?><li><h3>Reports</h3></li><?php endif; ?>
                <?php if ($_SESSION['active_page'] == 'appointment'): ?><li><h3>Appointment</h3></li><?php endif; ?>
                <?php if ($_SESSION['active_page'] == 'calendar'): ?><li><h3>Calendar</h3></li><?php endif; ?>
                <?php if ($_SESSION['active_page'] == 'patient'): ?><li><h3>Switch Patient</h3></li><?php endif; ?>
				<?php if ($_SESSION['active_page'] == 'search'): ?><li><h3>Search Note</h3></li><?php endif; ?>
            </ul>
        </div>
        <ul class="nav navbar-top-links navbar-right">
        	<li><a href="login.php"><i class="fa fa-exchange"></i></a></li>
            <li>
                <a href="login.php?act=logout">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </li>
        </ul>
    
    </nav>
</div>