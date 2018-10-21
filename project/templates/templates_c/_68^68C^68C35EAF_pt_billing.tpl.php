<?php /* Smarty version 2.6.19, created on 2017-07-26 09:44:41
         compiled from pt_billing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'pt_billing.tpl', 28, false),)), $this); ?>
<!--!DOCTYPE html>
<html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body-->
<div class="wrapper-content animated fadeInRight">
		<div>
			<h2><strong>Invoices</strong></h2>
		</div>
		<?php if ($this->_tpl_vars['InvoiceList']): ?>
		<div class="ibox float-e-margins">
				<div class="ibox-content" id="pt_q_detail">
					<table class="footable table table-stripped table-hover" data-page-size="20" data-sorting="true"  >
						<thead>
							<tr>
								<th data-type="date" data-format-string="dd MMM yyyy">Invoice Date</th>
								<th>Invoice ID</th>
								<th>Status</th>
								<th data-sort-ignore="true" class='text-right'>Total Amt</th>
								<th data-sort-ignore="true" class='text-right'>Outstanding</th>
							</tr>
						</thead>
						<tbody>
							<?php $_from = $this->_tpl_vars['InvoiceList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Invoice']):
?>
							<tr>
								<td><strong><?php echo $this->_tpl_vars['Invoice']['InvoiceDateString']; ?>
</strong><br/></td>
								<td><strong><a onclick = "invoice_id_click('<?php echo $this->_tpl_vars['Invoice']['InvoiceID']; ?>
')"><?php echo $this->_tpl_vars['Invoice']['InvoiceID']; ?>
</a></strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Invoice']['Status']; ?>
</strong><br/></td>
								<td class='text-right'><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['Invoice']['TotalAmt'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</strong><br/></td>
								<td class='text-right'><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['Invoice']['Outstanding'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</strong><br/></td>
							</tr>
							<?php endforeach; endif; unset($_from); ?>	
						</tbody>
						<tfoot>
							<tr>
								<td colspan="15">
									<ul class="pagination pull-right"></ul>
								</td>
							</tr>
						</tfoot>
					</table>	
				<!--<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'pt_queue_detail.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>-->
					
				</div>
		</div>
		<?php else: ?>
		<div class="text-center animated fadeInRight">No Invoice History</div>
		<?php endif; ?>
</div>		
		
<script>
<?php echo '
$(document).ready(function(){
	$(\'.footable\').footable();	
});

function invoice_id_click($id){
	//$.get( "iv_detail.php"/*, {act :"pt_detail_billing_click"}*/).done(function( data ) {
		window.location.assign("iv_detail.php?invoice_id="+$id);
	//});
}

'; ?>

</script>

<!--/body>
</html-->