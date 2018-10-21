<?php /* Smarty version 2.6.19, created on 2017-08-08 07:13:23
         compiled from consultation_order_table.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'consultation_order_table.tpl', 23, false),)), $this); ?>
<table class="footable table table-stripped table-hover" data-page-size="20">
	<thead>
		<tr>
			<th data-sort-initial="descending">OrderType</th>
			<th data-sort-ignore="true">Name</th>
			<th data-sort-ignore="true">Description</th>
			<th data-sort-ignore="true">Qty</th>
			<th data-sort-ignore="true">UOM</th>
			<th data-sort-ignore="true">Unit Price</th>
			<th data-sort-ignore="true">DISC</th>
			<th data-sort-ignore="true">Amount</th>
			<th data-sort-ignore="true">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $_from = $this->_tpl_vars['OrderList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['order_item']):
?>
		<tr>
			<td> <?php echo $this->_tpl_vars['order_item']['OrderType']; ?>
 </td>
			<td> <?php echo $this->_tpl_vars['order_item']['ItemName']; ?>
 </td>
			<td> <?php echo $this->_tpl_vars['order_item']['Description']; ?>
 </td>
			<td> <?php echo $this->_tpl_vars['order_item']['ItemQty']; ?>
 </td>
			<td> <?php echo $this->_tpl_vars['order_item']['ItemUOM']; ?>
 </td>
			<td> $<?php echo ((is_array($_tmp=$this->_tpl_vars['order_item']['ItemUnitPrice'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 </td>
			<td> $<?php echo ((is_array($_tmp=$this->_tpl_vars['order_item']['Discount'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 </td>
			<td> $<?php echo ((is_array($_tmp=$this->_tpl_vars['order_item']['ItemAmount'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 </td>
			<td> 
			<a onclick ="edit_order('<?php echo $this->_tpl_vars['order_item']['OrderID']; ?>
','<?php echo $this->_tpl_vars['order_item']['OrderType']; ?>
')" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>  
			<a onclick ="delete_order('<?php echo $this->_tpl_vars['order_item']['OrderID']; ?>
','<?php echo $this->_tpl_vars['order_item']['OrderType']; ?>
','<?php echo $this->_tpl_vars['order_item']['ItemQty']; ?>
','<?php echo $this->_tpl_vars['order_item']['ItemCode']; ?>
','<?php echo $this->_tpl_vars['order_item']['ItemAmount']; ?>
')" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>  
			</td>
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