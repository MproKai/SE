<?php /* Smarty version 2.6.19, created on 2017-07-26 10:10:55
         compiled from appointment.tpl */ ?>
<!DOCTYPE html>
<html>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- Data picker -->
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>


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
			<!--div class="form-group" id="data_1">
				<label class="font-noraml">Start Date</label>
				<div class="input-group date">
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="10 Sep,2016"/>
				</div>
			</div-->
			<h2 class="pull-left"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp; Next Seven Day</h2>
			<div class="wrapper wrapper-content">
			<?php $_from = $this->_tpl_vars['AppointmentList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['start_date'] => $this->_tpl_vars['group_appt']):
?>
				<div class="row">
					<div class="col-lg-12">
						<div class="ibox float-e-margins">	
							<div class="ibox-title">
								<h5><i class="fa fa-calendar-check-o"></i>&nbsp;&nbsp; <?php echo $this->_tpl_vars['start_date']; ?>
</h5>
								<div class="ibox-tools">
									<a class="collapse-link">
										<i class="fa fa-chevron-up"></i>
									</a>
								</div>
							</div>
							<div class="ibox-content">
								<table class="table table-striped">
									<thead>
									<tr>
										<!--th>Type</th-->
										<th width="20%">Patient</th>
										<th width="80%">Detail</th>
									</tr>
									</thead>
									<tbody>
									<?php $_from = $this->_tpl_vars['group_appt']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['appointment']):
?>
									<tr>
										<!--td><?php echo $this->_tpl_vars['appointment']['AppointmentType']; ?>
</td-->
                                        <td class="text-navy"><?php echo $this->_tpl_vars['appointment']['PatientName']; ?>
</td>
                                        <td>
                                        	<i class="fa fa-clock-o"></i> <?php echo $this->_tpl_vars['appointment']['StartTime']; ?>
 ~ <?php echo $this->_tpl_vars['appointment']['EndTime']; ?>
<br/>
                                            <?php echo $this->_tpl_vars['appointment']['Subject']; ?>

                                        </td>
									</tr>
									<?php endforeach; endif; unset($_from); ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; endif; unset($_from); ?>
			</div>
		</div>
		<!-- page footer -->
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'page_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
</div>
<script>
<?php echo '
$(\'#data_1 .input-group.date\').datepicker({
				format: \'dd M,yyyy\',
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
});
'; ?>

</script>



</body>

</html>