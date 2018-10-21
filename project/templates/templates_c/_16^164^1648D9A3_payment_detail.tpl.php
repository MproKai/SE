<?php /* Smarty version 2.6.19, created on 2017-07-27 03:27:11
         compiled from payment_detail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'payment_detail.tpl', 47, false),array('modifier', 'string_format', 'payment_detail.tpl', 66, false),)), $this); ?>
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
				<h1>Receipt #<?php echo $this->_tpl_vars['receiptID']; ?>
</h1>
			</div>
		</div>
        <div class="row">
            <div class="col-lg-4">
                <div class="wrapper wrapper-content animated fadeInRight">
				<?php $_from = $this->_tpl_vars['PaymentList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['payment']):
?>
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h3>Payment summary</h3>
						</div>
						<div class="ibox-content">
							<div class="row">
								<div class="col-lg-12">
									<div class="row"> 
										<div class="col-lg-6"> 
											<h4>Date</h4>
										</div>
										<div class="col-lg-6 text-right"> 
											<h4><?php echo ((is_array($_tmp=$this->_tpl_vars['payment']['PaymentDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @smarty_date_fmt) : smarty_modifier_date_format($_tmp, @smarty_date_fmt)); ?>
</h4>
										</div>
									</div>
									<hr>
									<div class="row"> 
										<div class="col-lg-6"> 
											<h4>Patient</h4>
										</div>
										<div class="col-lg-6 text-right"> 
											<h4><?php echo $this->_tpl_vars['payment']['PatientName']; ?>
</h4>
										</div>
									</div>
									<hr>
									<div class="row"> 
										<div class="col-lg-4"> 
											<h4>Payment sources</h4>
										</div>
										<div class="col-lg-8 text-right"> 
											<?php $_from = $this->_tpl_vars['payment']['itemList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
												<h4><?php echo $this->_tpl_vars['item']['PaymentType']; ?>
 <strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['PaymentAmt'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</strong><?php if (! $this->_tpl_vars['item']['Remarks'] == ''): ?></br>(<?php echo $this->_tpl_vars['item']['Remarks']; ?>
)<?php endif; ?></h4>
											<?php endforeach; endif; unset($_from); ?>
										</div>
									</div>
									<hr>
									<div class="row"> 
										<div class="col-lg-6"> 
											<h4>Total payment</h4>
										</div>
										<div class="col-lg-6 text-right"> 
											<h4>$<?php echo ((is_array($_tmp=$this->_tpl_vars['payment']['PaidAmount'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</h4>
										</div>
									</div>
									<hr>
									<div class="row"> 
										<div class="col-lg-6"> 
											<h4>Payment applied to invoices</h4>
										</div>
										<div class="col-lg-6 text-right"> 
											<a onclick="invoice_id_click('<?php echo $this->_tpl_vars['payment']['InvoiceID']; ?>
')"><h4><?php echo $this->_tpl_vars['payment']['InvoiceID']; ?>
</h4></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; endif; unset($_from); ?>
                </div>
            </div>
        </div>


</div>

<script>
<?php echo '
function invoice_id_click($id){	
		window.location.assign("iv_detail.php?invoice_id="+$id);
}
'; ?>

</script>


</body>

</html>