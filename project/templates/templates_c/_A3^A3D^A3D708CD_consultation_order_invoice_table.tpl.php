<?php /* Smarty version 2.6.19, created on 2017-08-08 07:13:23
         compiled from consultation_order_invoice_table.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'consultation_order_invoice_table.tpl', 5, false),)), $this); ?>
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
			<td><strong>Amt Paid :</strong></td>
			<td>$<?php echo ((is_array($_tmp=$this->_tpl_vars['Invoice']['AmtPaid'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
		</tr>
		<tr>
			<td><strong>Outstanding balance :</strong></td>
			<td>$<?php echo ((is_array($_tmp=$this->_tpl_vars['Invoice']['outstanding'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
		</tr>
	</tbody>
</table>