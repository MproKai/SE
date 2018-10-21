<?php /* Smarty version 2.6.19, created on 2017-08-01 12:45:57
         compiled from outstanding_modal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'outstanding_modal.tpl', 29, false),)), $this); ?>
<h2>
	Result : 
	<span class="text-navy"><?php echo $this->_tpl_vars['outstanding_count']; ?>
</span>&nbsp;&nbsp;
    Total Outstanding Amount :
    <span class="text-navy">NT$<?php echo $this->_tpl_vars['total_balance']; ?>
</span>
</h2>
<input type="text" class="form-control input-sm m-b-xs" id="filter" placeholder="Filter Invoice,PatientName....">
<table class="footable table table-stripped table-hover" data-page-size="20" data-filter="#filter" >
	<thead>
		<tr>
			<th data-sort-ignore="true">Doctor</th>
			<th data-sort-ignore="true">Invoice Date</th>
			<th data-sort-ignore="true">Invoice Note</th>
			<th data-sort-ignore="true">Patient Name</th>
			<th data-sort-ignore="true">Patient ID</th>
			<th data-sort-ignore="true" class='text-right'>Invoice Total</th>
			<th data-sort-ignore="true" class='text-right'>Paid Amt</th>
			<th data-sort-ignore="true" class='text-right'>Balance</th>
		</tr>
	</thead>
	<tbody>
		<?php $_from = $this->_tpl_vars['outstanding_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['outstanding']):
?>
		<tr>
			<td><strong><?php echo $this->_tpl_vars['outstanding']['Doctor']; ?>
</strong></td>
			<td><strong><?php echo $this->_tpl_vars['outstanding']['InvoiceDate']; ?>
</strong><br/></td>
			<td><strong><a onclick ="patient_invoicelink_click('<?php echo $this->_tpl_vars['outstanding']['InvoiceID']; ?>
')"><?php echo $this->_tpl_vars['outstanding']['InvoiceID']; ?>
</a></strong><br/></td>
			<td><strong><?php echo $this->_tpl_vars['outstanding']['PatientName']; ?>
</strong><br/></td>
			<td><strong><?php echo $this->_tpl_vars['outstanding']['PatientID']; ?>
</strong><br/></td>
			<td class='text-right'><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['outstanding']['InvoiceAmount'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</strong><br/></td>
			<td class='text-right'><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['outstanding']['PaidAmount'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</strong><br/></td>
			<td class='text-right'><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['outstanding']['Balance'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</strong><br/></td>
		</tr>
		<?php endforeach; else: ?>
		<tr>
			<td colspan="9">No Outstanding</td>
		</tr>
		<?php endif; unset($_from); ?>	
	</tbody>
	<tfoot>
		<tr>
			<td colspan="20">
				<ul class="pagination pull-right"></ul>
			</td>
		</tr>
	</tfoot>
</table>	