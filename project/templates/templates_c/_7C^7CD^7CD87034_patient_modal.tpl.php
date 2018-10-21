<?php /* Smarty version 2.6.19, created on 2017-07-12 02:59:43
         compiled from patient_modal.tpl */ ?>
 <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true" >
	<div class="modal-dialog modal-lg" height="3000px" width="5000px">
		<div class="modal-content">
			<div class="modal-body">
				<h1>Patient Search </h1>
	
				<div class="input-group">
					<input type="text" id = "patient_search_condition" placeholder="Search patient by patient's ID,Name" class="input form-control">
					<span class="input-group-btn">
						<button type="button" id = "" class="btn btn btn-primary" onclick="patient_search()"> <i class="fa fa-search"></i> Search</button>
					</span>
				</div>
				<div class="ibox float-e-margins">			
					<div class="ibox-content" id = "patientSearch">
						<!--<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'pt_list_table.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>-->
					</div>			
				</div>
			</div>
		</div>
	</div>
</div>

<script>
<?php echo '
function patient_search(){
	$.get( "pt_list.php", {act :"patient_search", cond:$("#patient_search_condition").val()}).done(function( data ) {
		//location.reload();
		$(\'#patientSearch\').html(data);
	});
};

'; ?>



</script>