<?php /* Smarty version 2.6.19, created on 2017-08-01 09:57:50
         compiled from pt_upload_document.tpl */ ?>
<!--!DOCTYPE html>
<html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body-->
<div class="wrapper-content animated fadeInRight">
	<div id="upload_title">
		<h2><strong>Upload Document</strong></h2>
	</div>	
	<div class = "row">
		<div class = "col-lg-7">
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<form id = "target" method="post" class="form-horizontal" action="pt_upload_document.php" enctype="multipart/form-data">
						<?php if (empty ( $this->_tpl_vars['patient_id'] )): ?>
						<div class="form-group">							
							<label class="col-sm-4 control-label">Patient</label>
							<div class="col-sm-8">		
								<select id="patient_selector_upload" onchange="render_visit_list()" name = "patient_id" class="form-control doctor text-right" required="" style="width: 100%"></select>
							</div>							
						</div>
						<?php else: ?>
						<input type="text" name = "patient_id" value="<?php echo $this->_tpl_vars['patient_id']; ?>
" hidden="">				
						<?php endif; ?>
						<div class="form-group">
							<label class="col-sm-4 control-label">Visit Date</label>
							<div class="col-sm-8">
								<select id="visit_id" name = "visit_id" class="form-control doctor text-right" required="" style="width:100%"></select>
							</div>
						</div>				
						<div class="form-group">
							<label class="col-sm-4 control-label">Select File</label>
							<div class="col-sm-8">
								<div class="fileinput fileinput-new input-groupnopadding" data-provides="fileinput" >
									<div class="form-control" data-trigger="fileinput">
										<i class="glyphicon glyphicon-file fileinput-exists"></i>
									<span class="fileinput-filename"></span>
									</div>
									<span class="input-group-addon btn btn-default btn-file">
										<span class="fileinput-new">Select file</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="upload_file" required="" />
									</span>
									<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>	
							</div>					
						</div>								
						<div class="form-group">
							<label class="col-sm-4 control-label">Document Name</label>
							<div class="col-sm-8">
								<input id="doc_name" type="text" name = "doc_name" class="form-control" required="" style="width:100%">
							</div>					
						</div>	
						<div class="form-group">
							<label class="col-sm-4 control-label">Document Type</label>
							<div class="col-sm-8">
								<select id="doc_type" name = "doc_type" class="form-control doctor text-right" required="" style="width:100%">
									<?php $_from = $this->_tpl_vars['DocumentTypeList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Type']):
?>
									<option value=<?php echo $this->_tpl_vars['Type']['vID']; ?>
><?php echo $this->_tpl_vars['Type']['vName']; ?>
</option>
									<?php endforeach; endif; unset($_from); ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Document Date</label>
							<div class="col-sm-8">
								<div class="input-groupnopadding date">
									<input id="date_selector" name = "doc_date" type="text" class="form-control" required="" style="width:100%"/><span class="input-group-addon" id="date_calendar"><i class="fa fa-calendar" ></i></span>
								</div>
							</div>
						</div>						
						<div class="form-group">
							<label class="col-sm-4 control-label">Remark</label>
							<div id = "doc_remark" class = "col-sm-8">
								<textarea class="form-control" name = "doc_remark" rows="5"></textarea>
							</div>							
						</div>

						<div class="row">	
							<div class = "col-lg-7"/>
							<div class="col-lg-2">
								<button id="toast" type = "submit" onclick="return myFunction(this)" class="btn btn-w-m btn-primary pull-right "><strong>Save</strong></button>
							</div>
							<div class="col-lg-2">
								<button type="button" class="btn btn-w-m btn-danger pull-rgiht" onclick="cancel()"><strong>Cancel</strong></button>
							</div>
							<div class = "col-lg-1"/>
							<!-- div class = "col-lg-4"/-->
						</div>
						
					</form>
				</div>
			</div>
		</div>
		<div class = "col-lg-5">
			
		<div>
	</div>	
</div>		
		
<script>
<?php echo '

$(document).ready(function () {
	$(\'#date_selector\').datepicker({
		format: \''; ?>
 <?php echo @javascript_dateformat; ?>
 <?php echo '\',
		todayBtn: "linked",
		keyboardNavigation: false,
		forceParse: false,
		calendarWeeks: true,
		autoclose: true,
		todayHighlight: true 
	});
	
	$(\'#date_calendar\').click(function(){
		$("#date_selector").datepicker().focus();
	});
	
	$("#doc_type").select2({
		dropdownAutoWidth : true,
		placeholder: {
			id: \'-1\', // the value of the option
			text: \'Quick Search...\'
		}
	});	
	
	$("#patient_selector_upload").select2({
		placeholder: {
			id: \'-1\', // the value of the option
			text: \'Quick Search...\'
		},
		ajax:{
			url: \'patient.php\',
			dataType: \'json\',
			delay: 250,
			data: function (params) {
				return {
					cond: params.term , 
					act : \'get_qks_ptlist\'										
				};							
			},
			processResults: function (data) {
				return {
					results:data
				};				
			}
		}
	});
	
	var pid = "";
	if("'; ?>
<?php echo $this->_tpl_vars['patient_id']; ?>
<?php echo '" == ""){
		pid = $("#patient_selector_upload").val();
	}else{
		pid = "'; ?>
<?php echo $this->_tpl_vars['patient_id']; ?>
<?php echo '";
	}
	
	$("#visit_id").select2({	
		ajax:{
			url: \'pt_upload_document.php\',
			dataType: \'json\',
			delay: 250,
			data: function (params) {
				return {
					act : \'get_visit_list\', 
					patient_id : pid
				};
			},
			processResults: function (data) {
				return {
					results:data
				};
			}
		}
	});	

	
});

function render_visit_list(){
	$("#visit_id").select2("val", "");
	var pid = $("#patient_selector_upload").val();
  	console.log(pid);
  	$("#visit_id").select2({
  		ajax:{
  			url: \'pt_upload_document.php\',
  			dataType: \'json\',
  			delay: 250,
  			data: function (params) {
  				return {
  					act : \'get_visit_list\', 
  					patient_id : pid
  				};
  			},
  			processResults: function (data) {
  				return {
  					results:data
  				};
  			}
		}   
	}); 
}

function cancel(){
	location.reload();
}	

'; ?>

</script>
<!--/body>
</html-->