<?php /* Smarty version 2.6.19, created on 2017-08-04 06:10:09
         compiled from outstanding.tpl */ ?>
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
                        <div class="form-group" id="data_5">
                            <label class="font-noraml">Date select</label>
                            <div class="input-daterange input-group">
                                <input type="text" class="input-sm form-control" name="start" id="date_start"/>
                                <span class="input-group-addon" id="date_select">to</span>
                                <input type="text" class="input-sm form-control" name="end" id="date_end"/>
                            </div>
                        </div>

                        <div class="form-group">
							<label class="font-noraml">&nbsp;&nbsp;Doctor&nbsp;</label>
							<select data-placeholder="Choose a Doctor..." class="select2_multiple" multiple style="width:350px;" tabindex="4" onchange="search_outstanding()">
			                    <?php $_from = $this->_tpl_vars['DoctorList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['doctors']):
?> 
			                    <option value="<?php echo $this->_tpl_vars['doctors']['vID']; ?>
"><?php echo $this->_tpl_vars['doctors']['vName']; ?>
</option>
			                    <?php endforeach; endif; unset($_from); ?>
            				</select>
                   		</div>

                    </div>
                </div><!-- end col-lg-12 -->

            </div><!-- end row -->
			
			<div class="ibox float-e-margins">
				<div class="ibox-content" id="outstanding_modal">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'outstanding_modal.tpl', 'smarty_include_vars' => array()));
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

	$(\'.footable\').footable();	

	$(\'.select2_multiple\').val(\'\');
	
	$(".select2_multiple").select2({
	     // minimumResultsForSearch: Infinity
	});

	$(\'#data_5 .input-daterange\').datepicker({
		format: \'dd/mm/yyyy\',
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true
    });


	var date_start = new Date();
    date_start.setMonth(date_start.getMonth()-1);
    $(\'#date_start\').datepicker(\'setDate\', date_start);
    $(\'#date_end\').datepicker(\'setDate\',  new Date());

	search_outstanding();

	$(\'#date_start\').datepicker().on(\'changeDate\', function (e) {
			 search_outstanding();
	})

	$(\'#date_end\').datepicker().on(\'changeDate\', function (e) {
			 search_outstanding();
	})

	
});

function search_outstanding(){
	
	var selected_date_start = $("#date_start").datepicker("getDate");
	var selected_date_end = $("#date_end").datepicker("getDate");

	var selected_sdate_string = selected_date_start.getFullYear() + \'-\' + (selected_date_start.getMonth()+1) + \'-\' +selected_date_start.getDate();
	var selected_edate_string = selected_date_end.getFullYear() + \'-\' + (selected_date_end.getMonth()+1) + \'-\' +selected_date_end.getDate();
	
	
	var select_doctor = $(".select2_multiple").val();

	$.get(\'outstanding.php\',{act : \'change_outstanding_list\', select_doctor:select_doctor , select_date_start:selected_sdate_string , select_date_end:selected_edate_string },function(data){
		
		$(\'#outstanding_modal\').html(data);
		$(\'.footable\').footable();	
	});	
	
}


function patient_invoicelink_click($invoice_id){
	
	window.location.assign("iv_detail.php?invoice_id="+$invoice_id);			
}

'; ?>

</script>
</body>

</html>