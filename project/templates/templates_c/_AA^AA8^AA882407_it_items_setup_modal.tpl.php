<?php /* Smarty version 2.6.19, created on 2017-08-04 06:12:07
         compiled from it_items_setup_modal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'it_items_setup_modal.tpl', 24, false),)), $this); ?>
<h2>
	Item Count: 
	<span class="text-navy"><?php echo $this->_tpl_vars['items_count']; ?>
</span>&nbsp;&nbsp;
</h2>
<input type="text" class="form-control input-sm m-b-xs" id="filter" placeholder="Filter key word">
<table class="footable table table-stripped table-hover" data-page-size="40" data-filter="#filter" >
	<thead>
		<tr>
			<th data-sort-ignore="true" style="width: 15%">Item Type</th>
			<th data-sort-ignore="true" style="width: 15%">Category</th>
			<th data-sort-ignore="true" style="width: 15%">Item Code</th>
			<th data-sort-ignore="true" style="width: 20%">Item Name</th>
			<th data-sort-ignore="true" style="width: 15%">Unit Price</th>
			<th data-sort-ignore="true" style="width: 5%">Status</th>
		</tr>
	</thead>
	<tbody>
		<?php $_from = $this->_tpl_vars['items_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['items_list']):
?>
		<tr>
			<td style="width: 15%"><strong><?php echo $this->_tpl_vars['items_list']['ItemType']; ?>
</strong></td>
			<td style="width: 15%"><strong><?php echo $this->_tpl_vars['items_list']['Category']; ?>
</strong><br/></td>
			<td style="width: 15%"><strong><?php echo $this->_tpl_vars['items_list']['ItemCode']; ?>
</strong><br/></td>
			<td style="width: 20%"><strong><?php echo $this->_tpl_vars['items_list']['ItemName']; ?>
</strong><br/></td>
			<td style="width: 15%"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['items_list']['UnitPrice'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</strong><br/></td>
			<?php if ($this->_tpl_vars['items_list']['Status'] == 'Active'): ?>
			<td style="width: 5%"><strong><?php echo $this->_tpl_vars['items_list']['Status']; ?>
</strong></td>
			<?php else: ?>
			<td style="width: 5%;color: #ff0000"><strong>Inactive</strong></td>
			<?php endif; ?>
		</tr>
		<?php endforeach; endif; unset($_from); ?>	
	</tbody>
	<tfoot>
		<tr>
			<td colspan="20">
				<ul class="pagination pull-right"></ul>
			</td>
		</tr>
	</tfoot>
</table>	