<?php /* Smarty version 2.6.19, created on 2017-06-28 08:22:16
         compiled from pt_queue_test.tpl */ ?>
<!DOCTYPE html>
<html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
				<h1>Patient Queue </h1>
                	<form class="m-t form-inline selectPeriod space-bottom" role="form" action="">
						<div class="form-group DateBlock">
							<label class="control-label">Date</label>
							<div class="input-group date">
								<input id="date_selector" type="text" class="form-control" onchange="switch_date()"/><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							</div>
                        </div>   
                        <div class="form-group periodBlock">
                            <label class="loginTitle">Date : </label>
                            <select id="period_selector" name="period_selector" class="period form-control">
                                <option value="all" selected="selected">All</option>
								<option value="today">Today</option>
								<option value="week">Last 7 days</option>
								<option value="twoWeek">Last 14 days</option>
								<option value="month">Last 30 days</option>
                            </select>
                            <button class="btn btn-primary btnSearch" onclick="switch_period()"><i class="fa fa-search"></i></button>
                            &nbsp;&nbsp; 
                        </div>
                        <div class="form-group patientBlock">
                            <label class="loginTitle">Patient : </label>
                            <select id="patient_selector" name="patient_selector" class="patient form-control">
                            </select>
                        </div>
                        <div class="clear"></div>
                    </form>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
			
			<div class="ibox float-e-margins">
				<!--
				<div class="ibox-title">
					<h5><i class="fa fa-list"></i>&nbsp;&nbsp; Patient Queue</h5>
					<div class="ibox-tools">
						<a class="collapse-link">
							<i class="fa fa-chevron-up"></i>
						</a>
					</div>
				</div>
				-->
				<div class="ibox-content" id="pt_q_detail">
					<!--input type="text" class="form-control input-sm m-b-xs" id="filter" placeholder="Filter patients by name , patient id , etc...">
					<table class="footable table table-stripped table-hover" data-page-size="8" data-filter="#filter" >
						<thead>
							<tr>
								<th>QNo</th>
								<th>Patient Name</th>
								<th>Patient ID</th>
								<th>Gender</th>
								<th>Age</th>
								<th>Visit Type</th>
								<th>Corp</th>
								<th>Doctor</th>
								<th>Status</th>
								<th>Remarks</th>
								<th>Instructions</th>								
							</tr>
						</thead>
						<tbody>
							<?php $_from = $this->_tpl_vars['PatientQueueList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Patient']):
?>
							<tr>
								<td><strong><?php echo $this->_tpl_vars['Patient']['QNo']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['PatientName']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['Gender']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['Age']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['VisitType']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['Corp']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['Doctor']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['Status']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['Remarks']; ?>
</strong><br/></td>
								<td class="footable-visible">
									<div class="col-sm-10">
										<strong><?php echo $this->_tpl_vars['Patient']['Instruction']; ?>
</strong><br/>
									</div>
								</td>
							</tr>
							<?php endforeach; endif; unset($_from); ?>	
						</tbody>
					</table-->	
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'pt_queue_detail.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					
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
<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="js/plugins/footable/footable.all.min.js"></script>
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

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
	$("#period_selector").select2();
	$("#period_selector").select2("val","'; ?>
<?php echo $_SESSION['selectPeriod']; ?>
<?php echo '");
	$("#title").html($("#period_selector option:selected").text()+" Patients");
	$("#period_selector").select2();
	$(\'.footable\').footable();	
	$("#patient_selector").select2({
		templateSelection: template,
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
					fitler_text: params.term , 
					act : \'get_patient_list\' , 
					selected_period :  $("#period_selector").val()
				};
				// Query paramters will be ?search=[term]&page=[page]
				//return query;
			},
			processResults: function (data) {
				return {
					results:data
				};
			}
		}
	});	
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

});

$("#patient_selector").on(\'select2:select\', function () {
	$.get( "patient.php", {act :"select_patient", patient_id:$("#patient_selector").val()}).done(function( data ) {
			// window.location.replace("index.php");
	});
});

function switch_period(){
	$.get( "patient.php", {act :"switch_period", select_period:$("#period_selector").val()}).done(function( data ) {
			 location.reload();
	});
}
function template(data, container) {
		var show_name =  data.text.split(",");
		return show_name[0];
}
function switch_date(){
	var value = $("#date_selector").datepicker("getDate");
		var ds = value.getFullYear() + \'-\' + (value.getMonth()+1) + \'-\' +value.getDate();
	$.get( "pt_queue_test.php", {act :"switch_date", select_date: ds}).done(function( data ) {
		location.reload();
	});
}

'; ?>

</script>
</body>

</html>