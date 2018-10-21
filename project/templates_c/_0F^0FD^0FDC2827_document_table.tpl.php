<?php /* Smarty version 2.6.19, created on 2017-07-21 08:47:11
         compiled from document_table.tpl */ ?>

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
			<td  valign="center"><?php echo $this->_tpl_vars['doc_list']['CreatedDate']; ?>
</td>
			<td  valign="center">                        
               <div calss="row">
	               	<div class="col-md-2">
	               	<!-- if want to set span size -> style="display: block ; width: 90px" -->
		               	<?php if ($this->_tpl_vars['doc_list']['DocType'] == 'BLOOD_TEST'): ?><span class="label label-danger pull-right" style="display: block ; width: 100px">
						<?php elseif ($this->_tpl_vars['doc_list']['DocType'] == 'Consultation'): ?>
						<span class="label label-success pull-right" style="display: block ; width: 100px">
						<?php elseif ($this->_tpl_vars['doc_list']['DocType'] == 'LETTERS'): ?>
						<span class="label label-warning pull-right" style="display: block ; width: 100px">
						<?php else: ?><span class="label label-primary pull-right" style="display: block ; width: 100px">
						<?php endif; ?><h5><?php echo $this->_tpl_vars['doc_list']['DocType']; ?>
</h5></span> 
	               	</div>
	               	<div class="col-md-10">
	               		<h3><?php echo $this->_tpl_vars['doc_list']['DocName']; ?>
</h3>
	               	</div>
					
		
				
				</div>
					                                     

			</td>
			<td  valign="center"><input style="display: none"></input><?php echo $this->_tpl_vars['doc_list']['PatientName']; ?>
</td>
			<td class="text-center" >
				<?php if (! empty ( $this->_tpl_vars['doc_list']['PhysicalFileName'] )): ?>
				<!--"PNG", "JPG", "JPEG", "GIF", "BMP", "TIF"-->
					<?php if ($this->_tpl_vars['doc_list']['type'] == 'jpg' || $this->_tpl_vars['doc_list']['type'] == 'png' || $this->_tpl_vars['doc_list']['type'] == 'JPEG' || $this->_tpl_vars['doc_list']['type'] == 'GIF' || $this->_tpl_vars['doc_list']['type'] == 'TIF'): ?>
						<button type="button" class="btn btn-sm btn-primary" id="<?php echo $this->_tpl_vars['doc_list']['PatientID']; ?>
" name="<?php echo $this->_tpl_vars['doc_list']['PhysicalFileName']; ?>
" value="Visit Date : <?php echo $this->_tpl_vars['doc_list']['CreatedDate']; ?>
 &nbsp;&nbsp;&nbsp; Document Name : <?php echo $this->_tpl_vars['doc_list']['DocName']; ?>
" onclick="preview_click(this)" ><i class="fa fa-eye"></i></button>
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
	<tr>
		<td colspan="5">
			<ul class="pagination pull-right"></ul>													
		</td>
	</tr>
	</tfoot>
</table>

<script src="js/plugins/footable/footable.all.min.js"></script>

<!-- FooTable -->
<script>
<?php echo '

$(\'.footable\').footable();
	function preview_click(patient){
		
		$.get( "document.php", {act :"preview_document", patient_id : patient.id}).done(function( data ) {
			$("#doc_preview").html(data);

			$("#doc_preview").attr("style" , "");	
			$("#doc_content").attr("class" , "col-md-7 animated fadeInRight");
			$("#doc_preview").attr("class" , "col-md-5 animated fadeInDown");
			$("#doc_preview").attr("style" , "display:true");
			$("#img_preview").attr("src" , patient.name);
			$(\'#doc_name\').html(patient.value);
			$(\'.footable\').trigger(\'footable_resize\');
			$(\'.footable\').trigger(\'footable_redraw\');
		});
	}
'; ?>

</script>