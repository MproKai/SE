<?php /* Smarty version 2.6.19, created on 2017-07-26 09:44:22
         compiled from iv_detail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'iv_detail.tpl', 92, false),array('modifier', 'string_format', 'iv_detail.tpl', 126, false),)), $this); ?>
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

<!-- Morris -->
<script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="js/plugins/morris/morris.js"></script>
<!-- Chartist -->
<script src="js/plugins/chartist/chartist.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
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
		<div class="row wrapper border-bottom white-bg page-heading">
			<div class="col-lg-8">
				<h2>Invoice</h2>
				<!--ol class="breadcrumb">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						Other Pages
					</li>
					<li class="active">
						<strong>Invoice</strong>
					</li>
				</ol-->
			</div>
		</div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInRight">
				<?php $_from = $this->_tpl_vars['InvoiceList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Invoice']):
?>
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>Invoice No. <?php echo $this->_tpl_vars['Invoice']['InvoiceID']; ?>
</h5>
							<div class="ibox-tools">
								<a class="collapse-link">
									<i class="fa fa-chevron-up"></i>
								</a>
							</div>
						</div>
						<div class="ibox-content p-xl">
							<div class="row">
								<div class="col-sm-6">
									<h5>To:</h5>
									<address>
										<?php if ($this->_tpl_vars['Invoice']['Company'] == ""): ?>
										<strong><?php echo $this->_tpl_vars['Invoice']['PatientName']; ?>
</strong><br>
										<?php else: ?>
										<strong><?php echo $this->_tpl_vars['Invoice']['Company']; ?>
</strong><br>
										<?php endif; ?>
										<strong><?php echo $this->_tpl_vars['Invoice']['Address']; ?>
</strong>
										<!--106 Jorg Avenu, 600/10<br>
										Chicago, VT 32456<br>
										<abbr title="Phone">P:</abbr> (123) 601-4590-->
									</address>
									<?php if ($this->_tpl_vars['Invoice']['PlanName'] != ""): ?>
									<h5>Plan:</h5>
									<address>
										<strong><?php echo $this->_tpl_vars['Invoice']['PlanName']; ?>
</strong>
									</address>
									<?php elseif ($this->_tpl_vars['Invoice']['ProjectName'] != ""): ?>
									<h5>Project:</h5>
									<address>
										<strong><?php echo $this->_tpl_vars['Invoice']['ProjectName']; ?>
</strong>
									</address>
									<?php endif; ?>
								</div>

								<div class="col-sm-6 text-right">
									<h4>Invoice No.</h4>
									<h4 class="text-navy"><?php echo $this->_tpl_vars['Invoice']['InvoiceID']; ?>
</h4>
									<address>
										<!--strong>Invoice Date:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['Invoice']['InvoiceDateString'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @smarty_date_fmt) : smarty_modifier_date_format($_tmp, @smarty_date_fmt)); ?>
<br>
										<strong>Doctor:</strong> <?php echo $this->_tpl_vars['Invoice']['DoctorName']; ?>

										<!--112 Street Avenu, 1080<br>
										Miami, CT 445611<br>
										<abbr title="Phone">P:</abbr> (120) 9000-4321-->
									</address>
									<p>
										</br>
										<span><strong>Patient :</strong> <a onclick="patient_name_click('<?php echo $this->_tpl_vars['Invoice']['patientID']; ?>
')"><?php echo $this->_tpl_vars['Invoice']['PatientName']; ?>
</a></br></span>
										<span><strong>Doctor :</strong> <?php echo $this->_tpl_vars['Invoice']['DoctorName']; ?>
</br></span>
										<span><strong>Invoice Date :</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['Invoice']['InvoiceDateString'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @smarty_date_fmt) : smarty_modifier_date_format($_tmp, @smarty_date_fmt)); ?>
</span>
										<!--span><strong>Due Date:</strong> March 24, 2014</span-->
									</p>
								</div>
							</div>

							<div class="table-responsive m-t">
								<table class="table invoice-table">
									<thead>
									<tr>
										<th width="50%">Item Name</th>
										<th width="10%">UOM</th>
										<th width="10%">Quantity</th>
										<th width="10%">Unit Price</th>
										<th width="10%" style= "text-align:right" >DISC</th>
										<th width="10%">Total Price</th>
									</tr>
									</thead>
									<tbody>									
									<?php $_from = $this->_tpl_vars['Invoice']['itemList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['invoice_item']):
?>
									<tr>
										<td><div><strong><?php echo $this->_tpl_vars['invoice_item']['ItemName']; ?>
</strong></div><small><?php echo $this->_tpl_vars['invoice_item']['ItemDescription']; ?>
</small></td>
										<td><?php echo $this->_tpl_vars['invoice_item']['Unit']; ?>
</td>
										<td><?php echo $this->_tpl_vars['invoice_item']['ItemQty']; ?>
</td>
										<td><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice_item']['ItemUnitPrice'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
										<td  align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice_item']['ItemDiscount'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
										<td><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice_item']['ItemAmount'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
									</tr>
									<?php endforeach; endif; unset($_from); ?>
									</tbody>
								</table>
							</div><!-- /table-responsive -->

							<table class="table invoice-total">
								<tbody>
								<tr>
									<td><strong>Sub Total :</strong></td>
									<td>$<?php echo ((is_array($_tmp=$this->_tpl_vars['Invoice']['SubTotal'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
								</tr>
								<tr>
									<td><strong>Tax :</strong></td>
									<td>$<?php echo ((is_array($_tmp=$this->_tpl_vars['Invoice']['TaxPrice'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
								</tr>
								<tr>
									<td><strong>Total :</strong></td>
									<td>$<?php echo ((is_array($_tmp=$this->_tpl_vars['Invoice']['InvoiceTotal'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
								</tr>
								<tr>
									<td><strong>Outstanding balance :</strong></td>
									<td>$<?php echo ((is_array($_tmp=$this->_tpl_vars['Invoice']['outstanding'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
								</tr>
								</tbody>
							</table>
							<?php if ($this->_tpl_vars['Invoice']['remark'] != ""): ?>
							<div class="well m-t"><strong>Remarks: </strong>
								<?php echo $this->_tpl_vars['Invoice']['remark']; ?>

							</div>
							<?php endif; ?>						
							<?php if (count ( $this->_tpl_vars['Invoice']['paymentList'] ) > 0): ?>
								<hr>
								<div class="row">
									<div class="col-sm-6">
										<h2>Payments</h2>
									</div>
								</div>
								
								<div class="table-responsive m-t">
									<table class="table invoice-table">
										<thead>
										<tr>
											<th>Receipt No.</th>
											<th>Payment Date</th>
											<th>Paid Amount</th>
											<th>Payment Method</th>
											<th>Copayer</th>
										</tr>
										</thead>
										<tbody>									
										<?php $_from = $this->_tpl_vars['Invoice']['paymentList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['paymentItem']):
?>
										<tr>
											<td><a onclick="pay_id_click('<?php echo $this->_tpl_vars['paymentItem']['payID']; ?>
')"><?php echo $this->_tpl_vars['paymentItem']['payID']; ?>
</a></td>
											<td><?php echo ((is_array($_tmp=$this->_tpl_vars['paymentItem']['PaymentDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @smarty_date_fmt) : smarty_modifier_date_format($_tmp, @smarty_date_fmt)); ?>
</td>
											<td><?php echo ((is_array($_tmp=$this->_tpl_vars['paymentItem']['TotalAmount'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
											<td><?php echo $this->_tpl_vars['paymentItem']['PaymentType']; ?>
</td>
											<td><?php echo $this->_tpl_vars['paymentItem']['CopayerName']; ?>
</td>
										</tr>
										<?php endforeach; endif; unset($_from); ?>
										</tbody>
									</table>
								</div><!-- /table-responsive -->
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; endif; unset($_from); ?>
                </div>
            </div>
        </div>


</div>


<script>
<?php echo '
function pay_id_click($id){	
		window.location.assign("payment_detail.php?pay_id="+$id);
}
function patient_name_click($id){	
	$.get( "pt_list.php", {act :"patient_hyperlink_click", patient_id:$id}).done(function( data ) {
		window.location.assign("pt_menu.php");			
	});
}
'; ?>

</script>


</body>

</html>