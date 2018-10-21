<?php /* Smarty version 2.6.19, created on 2017-07-06 07:56:04
         compiled from PT_list.tpl */ ?>
<!DOCTYPE html>
<html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
	<div id="page-wrapper" class="white-bg">
		<!-- page header -->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'page_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div class="wrapper wrapper-content animated fadeInLeft" >
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
	<!-- page footer -->	
</div>

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


<script>
<?php echo '
console.log(\''; ?>
<?php echo $_SESSION['role']; ?>
<?php echo '\');
console.log(\''; ?>
<?php echo $_SESSION['doctor_id']; ?>
<?php echo '\');
$(document).ready(function(){
	$.get( "pt_list.php", {act :"patient_search", cond:$("#patient_search_condition").val()}).done(function( data ) {
		//location.reload();
		$(\'#patientSearch\').html(data);
	});
});



function patient_search(){
	$.get( "pt_list.php", {act :"patient_search", cond:$("#patient_search_condition").val()}).done(function( data ) {
		//location.reload();
		$(\'#patientSearch\').html(data);
	});
};

function patient_create(){
	$.get( "pt_list.php", {act :"patient_create"}).done(function( data ) {
		window.location.assign("pt_detail_editor.php");
	});
}

'; ?>



</script>
</body>

</html>