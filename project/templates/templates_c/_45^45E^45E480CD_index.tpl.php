<?php /* Smarty version 2.6.19, created on 2017-06-28 04:09:00
         compiled from index.tpl */ ?>
<!DOCTYPE html>
<html>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<body class="fixed-sidebar no-skin-config full-height-layout">

<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <!-- menu bar -->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'menu.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </nav>

    <div id="page-wrapper" class="gray-bg">
		<!-- page header -->
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'page_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="wrapper wrapper-content animated fadeInRight">
		<h3 class="hideInMobile"><?php echo $_SESSION['patient']['PatientName']; ?>
&nbsp;,&nbsp;<?php echo $_SESSION['patient']['PatientID']; ?>
</h3>
        	<div class="wrapper wrapper-content">  
            	<?php if ($this->_tpl_vars['CurrentMedication']): ?>                  
                <div class="row">
                	<div class="col-lg-12">
                    	<div class="ibox float-e-margins">
                        	<div class="ibox-title">
                                <h5><i class="fa fa-history"></i>&nbsp;&nbsp; Medications History</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link pull-right">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content no-padding">
                                <ul class="list-group">
                                	<?php $_from = $this->_tpl_vars['CurrentMedication']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['current_medication']):
?>
                                    <li class="list-group-item" style="padding:10px 15px;">
                                    	<strong><?php echo $this->_tpl_vars['current_medication']['NameofDrugs']; ?>
</strong><br/>
                                        <small><strong><i class="fa fa-dot-circle-o"></i> Dosage :</strong> <?php echo $this->_tpl_vars['current_medication']['Dosage']; ?>
 / <strong><i class="fa fa-dot-circle-o"></i> Frequency :</strong> <?php echo $this->_tpl_vars['current_medication']['Frequency']; ?>
</small>
                                    </li>
                                    <?php endforeach; endif; unset($_from); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <div class="row">
				  <?php $_from = $this->_tpl_vars['OrderDrugs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['date'] => $this->_tpl_vars['order_drugs']):
?>
                    <div class="col-lg-12">
                    	<div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5><i class="fa fa-medkit"></i> <?php echo $this->_tpl_vars['date']; ?>
</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link pull-right">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="feed-activity-list">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                            	<th width="60%">Order Summary</th>
                                            	<th width="15%">Dosage</th>
                                                <th width="25%">Frequency</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php $_from = $this->_tpl_vars['order_drugs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['drugs']):
?>
                                            <tr>
                                                <td><?php echo $this->_tpl_vars['drugs']['OrderSummary']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['drugs']['Dosage']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['drugs']['Frequency']; ?>
</td>
                                            </tr>
											<?php endforeach; endif; unset($_from); ?>
                                        </tbody>
                                    </table>
                                </div><!-- end feed-activity-list -->
                            </div><!-- end ibox-content -->
                        </div><!-- end ibox float-e-margins -->
                    </div><!-- end col-lg-12 -->
                 <?php endforeach; endif; unset($_from); ?>
                 <?php if (! $this->_tpl_vars['CurrentMedication'] && ! $this->_tpl_vars['OrderDrugs']): ?>
                 	<div class="col-lg-12">
                    	<div class="text-center animated fadeInRight">No Medication History</div>
                    </div>
                 <?php endif; ?>
                </div>
        	</div>
        </div>
		<!-- page footer -->
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'page_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <!-- Start - Patient Sidebar -->
		<div id="right-sidebar">
            <div class="sidebar-container">
                <div class="sidebar-title sidebar-profile"><h3>Patient Profile</h3></div>
                <ul class="sidebar-list">
                	<li>
                        <strong>
                            <!--span class="label label-success pull-right">♂</span-->
                            <span class="label label-danger pull-right" style="margin-left:5px;">♀</span>
                            <span class="label label-primary pull-right">A+</span>
                        </strong>
                    	<h4>HERMIN ANGESTI</h4>
                        <p>
                        	<strong>Patient ID :</strong> 02339 / <strong>NRIC :</strong> X059965<br/>
                        	<strong>Age :</strong> 56<br/>
                        	<strong>Nationality :</strong> SINGAPOREAN<br/>
                        	<strong>Allergy :</strong> NIL
                        </p>
                	</li>
                    <li>
                    	<h4><i class="fa fa-phone"></i> Emergency Contacts</h4>
                        <div class="panel panel-default">
                            <div class="panel-heading"><strong>JUSTINA LIM</strong></div>
                            <div class="panel-body">
                                <strong>Relations : </strong>Daughter<br/>
                                <strong>Phone : </strong>No Data<br/>
                                <strong>Mobile : </strong>97497951<br/>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading"><strong>LINDY LIM</strong></div>
                            <div class="panel-body">
                                <strong>Relations : </strong>Daughter<br/>
                                <strong>Phone : </strong>No Data<br/>
                                <strong>Mobile : </strong>92997301<br/>
                            </div>
                        </div>
                    </li>
                    <li>
                    	<h4><i class="fa fa-bell"></i> Patient's Reminder</h4>
                        - 25% off Chemo Med & Facilities fee only.<br/>
                        * Blood test / scans not included.<br/><br/>
                        Insurance Claim approval , cheque reimbursement ,self collect do not mail cheque. Update Justina for claims approval
                    </li>
                </ul>
            </div>
		</div><!-- End - Patient Sidebar -->
    </div>
</div>
<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>


</body>

</html>