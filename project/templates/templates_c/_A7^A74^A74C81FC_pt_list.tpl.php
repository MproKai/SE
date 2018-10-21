<?php /* Smarty version 2.6.19, created on 2017-07-27 01:33:27
         compiled from pt_list.tpl */ ?>
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

<!-- Select2 -->
<script src="js/plugins/select2/select2.full.min.js"></script>
<!-- Morris -->
<script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="js/plugins/morris/morris.js"></script>
<!-- Chartist -->
<script src="js/plugins/chartist/chartist.min.js"></script>


<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<script src="js/plugins/footable/footable_nocolor.all.min.js"></script> 

<!-- ladda -->
<link href="css/plugins/ladda/ladda-themeless.min.css" rel="stylesheet">
<script src="js/plugins/ladda/spin.min.js"></script> 
<script src="js/plugins/ladda/ladda.min.js"></script> 
<script src="js/plugins/ladda/ladda.jquery.min.js"></script> 


<body class="fixed-sidebar no-skin-config full-height-layout">

<nav class="navbar-default navbar-static-side" role="navigation">
	<!-- menu bar -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'menu.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</nav>

<div id="wrapper">	
	<div id="page-wrapper" class="gray-bg">
		<!-- page header -->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'page_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div class="wrapper wrapper-content animated fadeInLeft" >	
			<div class="row">
				<div class="col-lg-8">
					<div class="input-group">
						<input type="text" id = "patient_search_condition" placeholder="Name ,ID ,NRIC or DOB(e.g. 1990-01-01)" class="input form-control">
						<span class="input-group-btn">
						
							<button type="button" id="btn_search_pt" class="ladda-button btn btn btn-primary" data-style="expand-right"> <i class="fa fa-search"></i>&nbsp;&nbsp;Search</button>
						</span>
					</div>
				</div>	
				<div class="col-lg-4">		
					<div align="right">
						<div class="input-group">
							<button type="button" class="btn btn btn-primary" onclick="patient_create()"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Add Patient</button>	
						</div>	
					</div>									
				</div>
			</div>
			<div class="ibox float-e-margins">			
				<div class="ibox-content" id = "patientSearch">
					
				</div>			
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

<script>
<?php echo '
$(document).ready(function(){
	$(\'#patient_search_condition\').focus();
	$.get( "pt_list.php", {act :"patient_search", cond:$("#patient_search_condition").val()}).done(function( data ) {
		$(\'#patientSearch\').html(data);
	});
	
	var l = $("#btn_search_pt").ladda();
	l.click(function(){
		l.ladda( \'start\' );
		$.get( "pt_list.php", {act :"patient_search", cond:$("#patient_search_condition").val()}).done(function( data ) {
			$(\'#patientSearch\').html(data);
			l.ladda(\'stop\');
		});
    });
});

$(document).keypress(function(e) {
    if(e.which == 13) {
		$.get( "pt_list.php", {act :"patient_search", cond:$("#patient_search_condition").val()}).done(function( data ) {
			$(\'#patientSearch\').html(data);
		});
    }
});

function patient_search(){
/*
	$.get( "pt_list.php", {act :"patient_search", cond:$("#patient_search_condition").val()}).done(function( data ) {
		$(\'#patientSearch\').html(data);
	});
	*/
};

function patient_create(){
	window.location.assign("pt_patient.php?act=Create");		
}

'; ?>



</script>
</body>

</html>