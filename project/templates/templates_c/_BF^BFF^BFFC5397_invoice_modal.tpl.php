<?php /* Smarty version 2.6.19, created on 2017-08-08 02:33:26
         compiled from invoice_modal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'invoice_modal.tpl', 24, false),array('modifier', 'string_format', 'invoice_modal.tpl', 25, false),)), $this); ?>
<table class="footable table table-stripped table-hover" data-page-size="20" >
	<thead>
		<tr>
			<th data-sort-ignore="true" style="width: 10%">Invoice ID</th>
			<th data-sort-ignore="true" style="width: 10%">Date</th>
			<th data-sort-ignore="true" style="width: 14%">Payer</th>
			<th data-sort-ignore="true" style="width: 20%">Patient Name</th>
			<th data-sort-ignore="true" style="width: 5%">Status</th>
			<th data-sort-ignore="true" style="width: 8%">Receipt No</th>
			<th data-sort-ignore="true" style="width: 8%" class='text-right'>Invoice Total</th>
			<th data-sort-ignore="true" style="width: 5%" class='text-right'>Paid Amt</th>
			<th data-sort-ignore="true" style="width: 5%" class='text-right'>O/S</th>
			<th data-sort-ignore="true" style="width: 15%">Remark</th>
		</tr>
	</thead>
	<tbody>
		<?php $_from = $this->_tpl_vars['invoice_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['invoice']):
?>
		<tr>
			<td style="width: 10%"><strong><a onclick ="patient_invoicelink_click('<?php echo $this->_tpl_vars['invoice']['InvoiceID']; ?>
')"><?php echo $this->_tpl_vars['invoice']['InvoiceID']; ?>
</a></strong><br/></td>
			<td style="width: 10%"><strong><?php echo $this->_tpl_vars['invoice']['InvoiceDate']; ?>
</strong><br/></td>
			<td style="width: 14%"><strong><?php echo $this->_tpl_vars['invoice']['InvoiceCompanyName']; ?>
</strong><br/></td>
			<td style="width: 20%"><strong><?php echo $this->_tpl_vars['invoice']['PatientName']; ?>
</strong><br/></td>
			<td style="width: 5%"><strong><?php echo $this->_tpl_vars['invoice']['Status']; ?>
</strong><br/></td>
			<td style="width: 5%"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['ReceiptNo'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 13) : smarty_modifier_truncate($_tmp, 13)); ?>
</strong><br/></td>
			<td class='text-right' style="width: 8%"><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['InvoiceTotal'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</strong><br/></td>
			<td class='text-right' style="width: 5%"><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['PaidAmt'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</strong><br/></td>
			<td class='text-right' style="width: 5%"><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['Outstanding'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</strong><br/></td>
			<td style="width: 15%"><strong><?php echo $this->_tpl_vars['invoice']['Remark']; ?>
</strong><br/></td>
			<!--
			<td><strong><?php if ($this->_tpl_vars['invoice']['Status'] == 'inWork'): ?> <a onclick ="patient_invoicelink_click('<?php echo $this->_tpl_vars['invoice']['InvoiceID']; ?>
')">Update<?php endif; ?>
						<?php if ($this->_tpl_vars['invoice']['Status'] == 'Bill'): ?><a data-toggle="modal" href="#modal-form">Payment/Update</a><?php endif; ?>
						<?php if ($this->_tpl_vars['invoice']['Status'] == 'Partial Paid'): ?> <a onclick ="">Payment<?php endif; ?>
						<?php if ($this->_tpl_vars['invoice']['Status'] == 'Void' || $this->_tpl_vars['invoice']['Status'] == 'Paid'): ?> <a onclick ="">View<?php endif; ?></strong><br/></td>-->
		</tr>
		<?php endforeach; else: ?>
		<tr>
			<td colspan="9">No invoice</td>
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