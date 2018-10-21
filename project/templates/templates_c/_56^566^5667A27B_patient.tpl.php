<?php /* Smarty version 2.6.19, created on 2017-07-27 02:21:01
         compiled from patient.tpl */ ?>
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
        <div class="wrapper wrapper-content animated fadeInRight" >
		 
			<div class="row">
            	<div class="col-lg-12">
                	<form class="m-t form-inline selectPeriod space-bottom" role="form" action="">
                        <div class="form-group periodBlock">
                            <label class="loginTitle">Period : </label>
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
					<?php $_from = $this->_tpl_vars['PatientList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['visit_date'] => $this->_tpl_vars['group_patient']):
?>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><i class="fa fa-list"></i>&nbsp;&nbsp; <?php echo $this->_tpl_vars['visit_date']; ?>
</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-striped">
                            	<thead>
                                	<tr>
                                    	<th width="65%">Name</th>
                                        <th width="15%">Arrive</th>
                                        <th width="15%">Leave</th>
                                        <th width="5%" class="text-center">Switch</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php $_from = $this->_tpl_vars['group_patient']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['patient']):
?>
                                	<tr>
                                    	<td class="wordBreak"><?php echo $this->_tpl_vars['patient']['PatientName']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['patient']['checkintime']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['patient']['CheckOutTime']; ?>
</td>
                                        <td class="text-center">
										<?php if (! $this->_tpl_vars['patient']['is_current']): ?>
										<a href="patient.php?act=select_patient&patient_id=<?php echo $this->_tpl_vars['patient']['PatientID']; ?>
"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-exchange"></i></button>
										<?php endif; ?>
										</td>
                                    </tr>
								<?php endforeach; endif; unset($_from); ?>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- end ibox -->
					<?php endforeach; endif; unset($_from); ?>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
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
});

$("#patient_selector").on(\'select2:select\', function () {
	$.get( "patient.php", {act :"select_patient", patient_id:$("#patient_selector").val()}).done(function( data ) {
			 window.location.replace("index.php");
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


'; ?>

</script>
</body>

</html>