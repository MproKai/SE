<?php /* Smarty version 2.6.19, created on 2017-08-03 08:36:52
         compiled from document_table.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', 'document_table.tpl', 44, false),)), $this); ?>

<table class="footable table table-stripped" data-page-size="20" data-filter=#filter style="width=100%">
	<thead>
	<tr>
		<th data-hide="phone,tablet" id="th_date">Date</th>
		<th data-sort-ignore="true" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Document name</th>
		<th data-sort-ignore="true">Patient name</th>
		<th data-sort-ignore="true"></th>
	</tr>
	</thead>
	<tbody>
		<?php $_from = $this->_tpl_vars['document_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['doc_list']):
?>
		<tr>

			<td  valign="center"><?php echo $this->_tpl_vars['doc_list']['CreatedDateString']; ?>
</td>

			<td  valign="center">                        
               <!--div calss="row">
	               	<div class="col-md-2">	               
		               	<?php if ($this->_tpl_vars['doc_list']['DocType'] == 'BLOOD_TEST'): ?><span class="label label-danger pull-right">
						<?php elseif ($this->_tpl_vars['doc_list']['DocType'] == 'Consultation'): ?>
						<span class="label label-success pull-right">
						<?php elseif ($this->_tpl_vars['doc_list']['DocType'] == 'LETTERS'): ?>
						<span class="label label-warning pull-right"  ">
						<?php else: ?><span class="label label-primary pull-right" >
						<?php endif; ?><h5><?php echo $this->_tpl_vars['doc_list']['DocType']; ?>
</h5></span> 
	               	</div>
	               	<div class="col-md-10">
	               		<?php echo $this->_tpl_vars['doc_list']['DocName']; ?>

	               	</div>			
				</div-->
			<?php if ($this->_tpl_vars['doc_list']['DocType'] == 'BLOOD_TEST'): ?><span class="label label-danger">
				<?php elseif ($this->_tpl_vars['doc_list']['DocType'] == 'Consultation'): ?>
				<span class="label label-success">
				<?php elseif ($this->_tpl_vars['doc_list']['DocType'] == 'LETTERS'): ?>
				<span class="label label-warning"  ">
				<?php else: ?><span class="label label-primary" >
				<?php endif; ?><?php echo $this->_tpl_vars['doc_list']['DocType']; ?>
</span>&nbsp;&nbsp;<?php echo $this->_tpl_vars['doc_list']['DocName']; ?>

			</td>
			<td  valign="center"><input style="display: none"></input><?php echo $this->_tpl_vars['doc_list']['PatientName']; ?>
</td>
			<td class="text-center" >
				<?php if (! empty ( $this->_tpl_vars['doc_list']['PhysicalFileName'] )): ?>
				<!--"PNG", "JPG", "JPEG", "GIF", "BMP", "TIF" , "doc" , "docx" , "pdf" , "txt"-->
					<?php if (((is_array($_tmp=$this->_tpl_vars['doc_list']['FileExtName'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'jpg' || ((is_array($_tmp=$this->_tpl_vars['doc_list']['FileExtName'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'tiff' || ((is_array($_tmp=$this->_tpl_vars['doc_list']['FileExtName'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'tif' || ((is_array($_tmp=$this->_tpl_vars['doc_list']['FileExtName'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'png' || ((is_array($_tmp=$this->_tpl_vars['doc_list']['FileExtName'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'jpeg' || ((is_array($_tmp=$this->_tpl_vars['doc_list']['FileExtName'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'gif' || ((is_array($_tmp=$this->_tpl_vars['doc_list']['FileExtName'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'doc' || ((is_array($_tmp=$this->_tpl_vars['doc_list']['FileExtName'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'docx' || ((is_array($_tmp=$this->_tpl_vars['doc_list']['FileExtName'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'pdf' || ((is_array($_tmp=$this->_tpl_vars['doc_list']['FileExtName'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'txt'): ?>
						<button type="button" class="btn btn-sm btn-primary" name="<?php echo $this->_tpl_vars['doc_list']['PhysicalFileName']; ?>
" 
							onclick="preview_click('<?php echo $this->_tpl_vars['doc_list']['DocID']; ?>
')" ><i class="fa fa-eye"></i></button>
					<?php elseif ($this->_tpl_vars['doc_list']['FileExtName'] == 'no file' || $this->_tpl_vars['doc_list']['FileExtName'] == ''): ?>
					<?php else: ?>
					<a href=<?php echo $this->_tpl_vars['doc_list']['PhysicalFileName']; ?>
 download>
						<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-download"></i></button>
					</a>
					<?php endif; ?>
				<?php endif; ?>
			</td>			
		</tr>
		<?php endforeach; endif; unset($_from); ?>	
	</tbody>
	<tfoot>
	<tr class="footable-row-detail">
		<td colspan="5" >
			<ul class="pagination pull-right"></ul>											
		</td>
	</tr>
	</tfoot>
</table>



<!-- FooTable -->
<script>
<?php echo '
	function preview_click(doc_id){		
		$.get( "document.php", {act :"preview_document", doc_id : doc_id}).done(function( data ) {
			$("#doc_preview").html(data);
			$("#doc_preview").attr("style" , "");	
			$("#doc_content").attr("class" , "col-md-7 animated fadeInRight");
			$("#doc_preview").attr("class" , "col-md-5 animated fadeInDown");
			$("#doc_preview").attr("style" , "display:true");
			$(\'.footable\').trigger(\'footable_resize\');
		});
	}
'; ?>

</script>