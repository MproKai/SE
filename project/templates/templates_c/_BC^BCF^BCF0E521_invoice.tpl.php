<?php /* Smarty version 2.6.19, created on 2017-08-08 02:33:26
         compiled from invoice.tpl */ ?>
<!DOCTYPE html>
<html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- Mainly scripts -->

<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<!-- footable -->
<script src="js/plugins/footable/footable.all.min.js"></script>
<!-- datapicker -->
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
<!-- Select2 -->
<script src="js/plugins/select2/select2.full.min.js"></script>
<!--iCheck-->
<script src="js/plugins/iCheck/icheck.min.js"></script>
<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>


<body class="fixed-sidebar no-skin-config full-height-layout">

<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <!-- menu bar -->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'menu.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </nav>

    <div id="page-wrapper" class="gray-bg">
		<!-- page header -->
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'page_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="wrapper wrapper-content animated fadeInLeft" >
			<div class="row">
            	<div class="col-lg-12">
                	<div class="m-t form-inline selectPeriod space-bottom">
                        <div class="form-group">
								<label class="font-noraml">&nbsp;&nbsp;Patient&nbsp;</label>
								<select id="patient_selector" name="patient_selector" class="form-control" style="width:300px"></select>
                        </div>
                        <div class="form-group" id="data_5">
                            <label class="font-noraml">Date select</label>
                            <div class="input-daterange input-group">
                                <input type="text" class="input-sm form-control" name="start" id="date_start" value="2017-05-08"/>
                                <span class="input-group-addon" id="date_select">to</span>
                                <input type="text" class="input-sm form-control" name="end" id="date_end"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="font-noraml">Status</label>
		                        <select data-placeholder="Choose a Status..." class="select2_multiple" multiple style="width:350px;" tabindex="4" onchange="search_invoice();">
									<option  value=""> </option>
									<?php $_from = $this->_tpl_vars['status_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['status']):
?>
										<option value="<?php echo $this->_tpl_vars['status']; ?>
"><?php echo $this->_tpl_vars['status']; ?>
</option>
		                            <?php endforeach; endif; unset($_from); ?>
		                        </select>
                        </div>
                        <!--<div class="form-group">
                            <button class="ladda-button btn btn btn-primary" id="search" onclick="search_invoice();"> <i class="fa fa-search"></i></button>
                        </div>-->
                    </div>
                </div><!-- end col-lg-12 -->

            </div><!-- end row -->
			
			<div class="ibox float-e-margins">
				<div class="ibox-content" id="invoice_detial">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'invoice_modal.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>
			</div>

		<!-- page footer -->
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'page_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    	</div>
    </div>
</div>
<script>
<?php echo '
$(document).ready(function(){

 	//default status values
 	var status = ["InWork","Bill","Partial Paid"];

	$(\'.footable\').footable({ paginate:false });	

	$(\'#data_5 .input-daterange\').datepicker({
		format: \'dd/mm/yyyy\',
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true
    });
	
	var date_start = new Date();
    date_start.setDate(date_start.getDate()-7);
    $(\'#date_start\').datepicker(\'setDate\', date_start);
    $(\'#date_end\').datepicker(\'setDate\',  new Date());
	
	$(".select2_multiple").val(status);
	$(".select2_multiple").select2();
	$("#patient_selector").select2({
		templateSelection: function(data, container) {
			var show_name =  data.text.split(",");
			return show_name[0];
		},
		ropdownAutoWidth : true,
		allowClear : true,
		placeholder: {
			id: \'-1\', // 
			text: \'Search patient\'
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
					// id: "" , text: ""
					results:data
				};
			}
		}
	});
	$("#patient_selector").change(function(){
		search_invoice();
	});
	
	search_invoice();

	$(\'.i-checks\').iCheck({
        checkboxClass: \'icheckbox_square-green\',
        radioClass: \'iradio_square-green\',
    });

	$(\'#date_start\').datepicker().on(\'changeDate\', function (e) {
		search_invoice();
	});

	$(\'#date_end\').datepicker().on(\'changeDate\', function (e) {
		search_invoice();
	});

});

function search_invoice(){
	
	var selected_date_start = $("#date_start").datepicker("getDate");
	var selected_date_end = $("#date_end").datepicker("getDate");
	var selected_sdate_string = selected_date_start.getFullYear() + \'-\' + (selected_date_start.getMonth()+1) + \'-\' +selected_date_start.getDate();
	var selected_edate_string = selected_date_end.getFullYear() + \'-\' + (selected_date_end.getMonth()+1) + \'-\' +selected_date_end.getDate();
	
	var select_status = $(".select2_multiple").val();
	var select_patient = $(\'#patient_selector\').val() == null? \'\' : $(\'#patient_selector\').val() ;

	$.get(\'invoice.php\',{act : \'select_list\',select_status:select_status , select_date_start:selected_sdate_string , select_date_end:selected_edate_string , select_patient:select_patient },function(data){
		$(\'#invoice_detial\').html(data);
		//$(\'.footable\').footable();	
	});	
	
}

function patient_invoicelink_click($invoice_id){
	window.location.assign("iv_detail.php?invoice_id="+$invoice_id);			
}

'; ?>

</script>
</body>

</html>