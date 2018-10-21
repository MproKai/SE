<?php /* Smarty version 2.6.19, created on 2017-08-08 01:49:11
         compiled from pt_queue.tpl */ ?>
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
<script src="js/plugins/footable/footable.all.min.js"></script>
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
<!--checkbox-->
<link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
<!-- Select2 -->
<script src="js/plugins/select2/select2.full.min.js"></script>
<!-- Morris -->
<script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="js/plugins/morris/morris.js"></script>
<!-- Chartist -->
<script src="js/plugins/chartist/chartist.min.js"></script>

<script src="js/plugins/toastr/toastr.min.js"></script>
<!-- Full Calendar -->
<script src="js/plugins/fullcalendar/moment.min.js"></script>
<!-- Sweet alert -->
<script src="js/plugins/sweetalert/sweetalert.min.js"></script>
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
				<div class="col-lg-2">		
					<div align="left">
						<div class="input-group">
							<button type="button" class="btn btn btn-primary" onclick="add_visit_handelr()"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Add Visit</button>	
						</div>	
					</div>									
				</div>
            	<div class="col-lg-10">
                	<form class="form-inline selectPeriod" role="form">
                		<div class="form-group">
                			<button type="button" class="btn btn-primary " onclick="show_booking();"><i class="fa fa-calendar-check-o"></i> Booking</button>
						</div>
						&nbsp;&nbsp; 
						<div class="form-group DateBlock">
							<label class="control-label">Date</label>
							<div class="input-group date">
								<input id="date_selector" type="text" class="form-control" />
								<span class="input-group-addon" id="date_calendar"><i class="fa fa-calendar" ></i></span>
							</div>
                        </div>
						&nbsp;&nbsp; 
                        <div class="form-group DoctorBlock">
                            <label class="loginTitle">Doctor</label>
                            <select id="doctor_selector" name="doctor_selector" class="doctor form-control" >
							<option  value="">All</option>
							<?php $_from = $this->_tpl_vars['DoctorList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['doctor']):
?>
								<option  value="<?php echo $this->_tpl_vars['doctor']['id']; ?>
"><?php echo $this->_tpl_vars['doctor']['text']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                            </select>
                        </div>
                    </form>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->			
			<div class="ibox float-e-margins">
				<div class="ibox-content" id="pt_q_detail">
					<input type="text" class="form-control input-sm m-b-xs" id="filter" placeholder="Filter patients by name , patient id , etc...">
					<table class="footable table table-stripped table-hover table_pt_queue" data-page-size="20" data-filter="#filter">
						<thead>
							<tr>
								<th data-type="numeric" class="td_center td_small">QNo</th>
								<th data-sort-ignore="true" class="td_small">Patient Name</th>
								<th data-sort-ignore="true" class="td_small td_center">Patient ID</th>
								<th data-sort-ignore="true" class="td_small td_center">Gender</th>
								<th data-sort-ignore="true" class="td_small td_center">Age</th>
								<th class="td_small td_center">Visit Type</th>
								<th data-sort-ignore="true" class="td_small td_center">Corp</th>
								<th class="td_small td_center">Doctor</th>
								<th class="td_small td_center">Status</th>
								<th data-sort-ignore="true" class="td_small truncate">Remarks</th>
								<th data-sort-ignore="true" class="td_small">Instructions</th>	
								<th data-sort-ignore="true" class="td_small td_center">Amt<br/>Paid</th>
								<th data-sort-ignore="true" class="td_small td_center">FEE</th>
								<th data-sort-ignore="true" class="td_small td_center">Action</th>
								<th data-sort-ignore="true" class="td_small td_center"></th>
							</tr>
						</thead>
						<tbody>
							<?php $_from = $this->_tpl_vars['PatientQueueList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Patient']):
?>
							<tr>
								<td class="td_center td_small table_border_top" data-th="QNo"> <?php echo $this->_tpl_vars['Patient']['QNo']; ?>
 <br/></td>
								<td class="td_bold" data-th="Patient Name"> <a onclick = "patient_hyperlink_click('<?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
')"><?php echo $this->_tpl_vars['Patient']['PatientName']; ?>
</a> <br/></td>
								<td data-th="Patient ID" class="td_small td_center"> <?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
 <br/></td>
								<td class="td_center td_small" data-th="Gender"> <?php echo $this->_tpl_vars['Patient']['Gender']; ?>
 <br/></td>
								<td class="td_center td_small" data-th="Age"> <?php echo $this->_tpl_vars['Patient']['Age']; ?>
 <br/></td>
								<td class="td_center td_small" data-th="Visit Type"> <?php echo $this->_tpl_vars['Patient']['VisitType']; ?>
 <br/></td>
								<td class="td_center td_small" data-th="Corp"> <?php echo $this->_tpl_vars['Patient']['Corp']; ?>
 <br/></td>
								<td class="td_center td_small" data-th="Doctor"> <?php echo $this->_tpl_vars['Patient']['Doctor']; ?>
 <br/></td>
								<td class="td_center td_small" data-th="Status"> <?php echo $this->_tpl_vars['Patient']['Status']; ?>
 <br/></td>
								<td data-th="Remarks" class="truncate_max_200"> <?php echo $this->_tpl_vars['Patient']['Remarks']; ?>
 <br/></td>
								<td data-th="Instructions"> <?php echo $this->_tpl_vars['Patient']['Instruction']; ?>
 <br/></td>
								<td class='text-right' data-th="Amt Paid"> <?php if ($this->_tpl_vars['Patient']['AmtPaid'] != ""): ?>$<?php endif; ?><?php echo $this->_tpl_vars['Patient']['AmtPaid']; ?>
 <br/></td>
								<td class='text-right' data-th="FEE"> <?php if ($this->_tpl_vars['Patient']['PTFEE'] != ""): ?>$<?php endif; ?><?php echo $this->_tpl_vars['Patient']['PTFEE']; ?>
 <br/></td>

								<td class="td_center td_small table_border_bottom" data-th="Action">
									<!--a onclick ="patient_invoicelink_click('<?php echo $this->_tpl_vars['Patient']['VisitID']; ?>
')" data-toggle="tooltip" title="View Invoice"><i class="fa fa-money"></i></a>  
									<a onclick ="patient_consultnotelink_click('<?php echo $this->_tpl_vars['Patient']['VisitID']; ?>
','<?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
')" data-toggle="tooltip" title="Write/Append consultnote"><i class="fa fa-file-text"></i></a>  
									<a onclick ="patient_referralletterlink_click('<?php echo $this->_tpl_vars['Patient']['VisitID']; ?>
','<?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
')" data-toggle="tooltip" title="Write referral letter"><i class="fa fa-pencil-square-o"></i></a-->  
									<a onclick ="patient_action_click('<?php echo $this->_tpl_vars['Patient']['VisitID']; ?>
','<?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
','<?php echo $this->_tpl_vars['Patient']['Status']; ?>
')"><?php if ($this->_tpl_vars['Patient']['Status'] == 'Completed'): ?>View<?php else: ?>Consult<?php endif; ?></a> 
								</td>
								
								<td class="td_center td_small table_border_bottom" data-th="">
									<?php if ($this->_tpl_vars['Patient']['Status'] != 'Completed'): ?>
										<button type="button" class="btn btn-xs btn-danger" onclick="undo_visit_handelr('<?php echo $this->_tpl_vars['Patient']['VisitID']; ?>
')"><i class="fa fa-undo"></i>&nbsp;Undo</button>
									<?php endif; ?>
								</td>
								
								
							</tr>
							<?php endforeach; endif; unset($_from); ?>	
						</tbody>
						<tfoot>
							<tr>
								<td colspan="20">
									<ul class="pagination pull-right"></ul>
								</td>
							</tr>
						</tfoot>
					</table>	
				<!--<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'pt_queue_detail.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>-->					
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

<div class="modal inmodal fade" id="add_visit_modal" role="dialog" aria-hidden="true">
	<div class="modal-dialog"  style="width: 35%">
        <div class="modal-content">						
            <div class="modal-header">						
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3>Create Visit</h3>
            </div>
             <div class="modal-body">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'pt_add_visit.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>            
        </div>
    </div> 
</div>

<div class="modal inmodal fade" id="booking_modal" role="dialog"  aria-hidden="true">
	<div class="modal-dialog"  style="width:900px">
        <div class="modal-content">						
            <div class="modal-header">						
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>						
                <h3>Book an Appointment</h3>
            </div>
             <div class="modal-body">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'booking_appointment.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
            <div class="modal-footer">		
                <div class="pull-right">
                	<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save_appointment" onclick="save_appointment();">Save</button>
                </div>
            </div>
        </div>
    </div> 
</div>

<script>
<?php echo '
$(document).ready(function(){
	$(\'.footable\').footable();	
	$("#doctor_selector").select2({
		dropdownAutoWidth : true,
		width: \'200\',
		placeholder: {
			id: \'-1\', // the value of the option
			text: \'Quick Search...\'
		}
	});	


	$("#doctor_selector").select2("val","'; ?>
<?php echo $_GET['select_doctor']; ?>
<?php echo '");
	
	$("#doctor_selector").on(\'select2:select\', function () {
		reload_page_with_filter();
	});
	$(\'#date_selector\').datepicker({
		format: \''; ?>
<?php echo @javascript_dateformat; ?>
<?php echo '\',
		todayBtn: "linked",
		keyboardNavigation: false,
		forceParse: true,
		calendarWeeks: true,
		autoclose: true,
		todayHighlight: true 
	});
	 $(\'#date_calendar\').click(function(){
		 $("#date_selector").datepicker().focus();
	 });
	$(\'#date_selector\').datepicker(\'update\', new Date(\''; ?>
<?php echo $_GET['select_date']; ?>
<?php echo '\'));
	var currentDate;
	$(\'#date_selector\').datepicker()
		.on(\'show\', function() {
			currentDate = $(\'#date_selector\').val();
		 })
		.on(\'changeDate\', function (e) {
			reload_page_with_filter();
	})

	toastr.options = {
	  "closeButton": true,
	  "debug": false,
	  "progressBar": true,
	  "preventDuplicates": false,
	  "positionClass": "toast-bottom-right",
	  "timeOut": "3000"
	}

	if(localStorage.getItem("CompleteConsultationMessage"))
    {
        toastr.info(localStorage.getItem("CompleteConsultationMessage"));
        localStorage.removeItem("CompleteConsultationMessage");
    }
     if(localStorage.getItem("UndoVisitMessage"))
    {
        toastr.info(localStorage.getItem("UndoVisitMessage"));
        localStorage.removeItem("UndoVisitMessage");
    }

    //booking appointment
    $(\'#start_date\').datepicker({
		format: \'dd M,yyyy\',
		todayBtn: "linked",
		keyboardNavigation: false,
		forceParse: false,
		calendarWeeks: true,
		autoclose: true ,
		daysOfWeekDisabled : 0
	});
	$(\'#end_date\').datepicker({
		format: \'dd M,yyyy\',
		todayBtn: "linked",
		keyboardNavigation: false,
		forceParse: false,
		calendarWeeks: true,
		autoclose: true ,
		daysOfWeekDisabled : 0
	});
	$("#booking_patient").combogrid({
		panelWidth: 370,
		loadMsg : \'Loading\', 
		mode : \'remote\',
		delay: 500,
		idField: \'PatientID\',
		textField: \'PatientName\',
		url: \'patient.php?act=getpt\',
		method: \'get\',
		columns: [[
			{field:\'PatientID\',title:\'PatientID\',width:50},
			{field:\'PatientName\',title:\'PatientName\',width:210},
			{field:\'NRIC\',title:\'NRIC\',width:110}
		]],
		fitColumns: true,
		labelPosition: \'top\'
	});
	$(\'#tiem_group_name\').change(function(){
		var start_date = $("#appointment_start_time").val(); 
		$("#appointment_end_time").val(parseInt(event.target.value) + parseInt(start_date));
		$(\'#check_allday\').prop(\'checked\',false);
	});
	$("#check_allday").change(function() {
	    if(this.checked) {
	        $(\'#appointment_start_time\').val("'; ?>
<?php echo @work_start_hour*60; ?>
<?php echo '")  //get session start
			$(\'#appointment_end_time\').val("'; ?>
<?php echo @work_end_hour*60; ?>
<?php echo '")	//get session end
			$(\'#tiem_group_name\').contents().contents().prop(\'checked\',false);
	    }
	});
	$("#booking_type").chosen({width: \'110%\'});
   	$("#booking_doctor").chosen({ width: \'110%\' });
});

function reload_page_with_filter(){
	if ($(\'#date_selector\').val() === \'\' || $(\'#date_selector\').val() === null) {
		$(\'#date_selector\').val(currentDate).datepicker(\'update\');
	}
	var selected_date = $("#date_selector").datepicker("getDate");
	var selected_date_string = selected_date.getFullYear() + \'-\' + (selected_date.getMonth()+1) + \'-\' +selected_date.getDate();
	var selected_doctor = $(\'#doctor_selector\').val();
	var url = "pt_queue.php?select_date=" + selected_date_string;
	if($(\'#doctor_selector\').val() !== \'\' && $(\'#doctor_selector\').val() !== null){
		url = url + "&select_doctor=" + selected_doctor;
	}
	window.location.replace(url);
}

function patient_hyperlink_click($patient_id){
	window.location.assign("pt_menu.php?patient_id="+$patient_id);			
}


/*function patient_invoicelink_click($visit_id){
		window.location.assign("iv_detail.php?visit_id="+$visit_id);			
}

function patient_consultnotelink_click($visit_id,$patient_id){
	$.get( "consultnote_detail.php", {act :"patient_consultnotelink_click", patient_id:$patient_id}).done(function( data ) {
		window.location.assign("consultnote_detail.php?visit_id="+$visit_id);			
	});
}

function patient_referralletterlink_click($visit_id,$patient_id){
	$.get( "pt_referral_letter_list.php", {act :"patient_referralletterlink_click", patient_id:$patient_id}).done(function( data ) {
		window.location.assign("pt_referral_letter_list.php?visit_id="+$visit_id);			
	});
}*/


function patient_action_click($visit_id,$patient_id,$status){
	if($status=="Completed"){
		window.location.assign("consultation_menu.php?patient_id="+$patient_id+"&visit_id="+$visit_id+"&page=menu_invoice");	
	}else{
		window.location.assign("consultation_menu.php?patient_id="+$patient_id+"&visit_id="+$visit_id+"&page=menu_consultnote");	
	}
}

function add_visit_handelr(){
	$(\'#add_visit_modal\').modal();
}

function show_booking(){

	var start = new Date();
	if(start.getMinutes()/15 >= 3){
		start.setHours(start.getHours()+1);
		start.setMinutes(00);
		start.setSeconds(00);
	}else if (start.getMinutes()/15 >= 2){
		start.setMinutes(45);
		start.setSeconds(00);
	}else if (start.getMinutes()/15 >=1 ){
		start.setMinutes(30);
		start.setSeconds(00);
	}else{
		start.setMinutes(15);
		start.setSeconds(00);
	}
	if(\''; ?>
<?php echo $_SESSION['doctor_id']; ?>
<?php echo '\' != null && \''; ?>
<?php echo $_SESSION['doctor_id']; ?>
<?php echo '\' != \'\'){
		$("#booking_doctor").val(\''; ?>
<?php echo $_SESSION['doctor_id']; ?>
<?php echo '\');
		$(\'#booking_doctor\').trigger("chosen:updated");
	}else{
		$("#booking_doctor").val(\'\');
		$(\'#booking_doctor\').trigger("chosen:updated");
	}
	$("#start_date").datepicker(\'setDate\', start);
	$(\'#end_date\').datepicker(\'setDate\', start);
	$("#appointment_start_time").val(start.getHours()*60+start.getMinutes());
	$("#appointment_end_time").val(start.getHours()*60+start.getMinutes());
	$("#booking_modal").modal();
}

function save_appointment(){
	var allday = $(\'#check_allday\').is(":checked") == true ? "1" : "0";
	var informed = $(\'#Informed\').is(":checked") == true ? "1" : "0";
	var queued = $(\'#Queued\').is(":checked") == true ? "1" : "0";
	var canceled = $(\'#Canceled\').is(":checked") == true ? "1" : "0";
	if(allday == 1 ){

		var start_date = moment().year($(\'#start_date\').datepicker(\'getDate\').getFullYear()).month($(\'#start_date\').datepicker(\'getDate\').getMonth()).date($(\'#start_date\').datepicker(\'getDate\').getDate())
						.hour(0).minute(0).seconds(0);
		var end_date = moment().year($(\'#end_date\').datepicker(\'getDate\').getFullYear()).month($(\'#end_date\').datepicker(\'getDate\').getMonth()).date($(\'#end_date\').datepicker(\'getDate\').getDate()+1)
					.hour(0).minute(0).seconds(0);
	}else{
		var start_date = moment().year($(\'#start_date\').datepicker(\'getDate\').getFullYear()).month($(\'#start_date\').datepicker(\'getDate\').getMonth()).date($(\'#start_date\').datepicker(\'getDate\').getDate())
						.hour(Math.floor($("#appointment_start_time").val()/60)).minute($("#appointment_start_time").val()%60).seconds(0);
		var end_date = moment().year($(\'#end_date\').datepicker(\'getDate\').getFullYear()).month($(\'#end_date\').datepicker(\'getDate\').getMonth()).date($(\'#end_date\').datepicker(\'getDate\').getDate())
					.hour(Math.floor($("#appointment_end_time").val()/60)).minute($("#appointment_end_time").val()%60).seconds(0);
	}
	var com = $(\'#booking_patient\').combogrid(\'grid\');
	if(com.datagrid(\'getSelected\')){
		var r = com.datagrid(\'getSelected\');
		var patient_id = r.PatientID;
	}else{
		var patient_id = null;
	}
	var appointment_type = $(\'#booking_type\').val();
	var doctor_id = $(\'#booking_doctor\').val();
	var package = $(\'#booking_package\').val();
	var plan = $(\'#booking_plan\').val();
	var subject = $(\'#booking_subject\').val();
	var location = $(\'#booking_location\').val();
	var instruction = $(\'#instruction\').val();
	
	$.post(\'calendar.php\',{act : \'save_appointment_list\',  start_date : start_date.format(\'YYYY-MM-DD HH:mm:ss\') , end_date : end_date.format(\'YYYY-MM-DD HH:mm:ss\') , subject : subject , location : location , appointment_type : appointment_type , doctor_id : doctor_id , package : package , patient_id : patient_id , plan : plan , instruction : instruction , allday : allday , informed : informed , queued : queued , canceled : canceled},function(data){

		var rs = $.parseJSON(data);
		if(rs["is_success"] == 1){
			toastr.options = {
                "closeButton": true,
                "positionClass": "toast-top-center",
               	"timeOut": "2000"
            };
            toastr.success(\'Booking Success ! \',rs["rs_msg"]);
		        $("#booking_modal").modal(\'hide\');
		     	var patient_id = $(\'#choice_patient\').val();
		    	$("#booking_subject").val(\'\');
				$("#instruction").val(\'\');
				$(\'#check_allday\').prop(\'checked\',false);
				$(\'#Informed\').prop(\'checked\', false);
				$(\'#Queued\').prop(\'checked\', false);
				$(\'#Canceled\').prop(\'checked\', false);
				$(\'#tiem_group_name\').contents().contents().prop(\'checked\',false);
				$(\'#booking_patient\').combogrid(\'setValue\',null);
				$("#booking_location").val("'; ?>
<?php echo $this->_tpl_vars['locations']['vName']; ?>
<?php echo '");
		}else{
			swal({   
	                title: "Warning",   
	                text: rs["rs_msg"],
	                confirmButtonColor: "#DD6B55",   
	                confirmButtonText: "OK",   
	                closeOnConfirm: true
	            }); 
		}
	});	
}

function undo_visit_handelr($visit_id){
	
	$.get( "pt_queue.php", {act :"is_visit_can_be_undo",visit_id:$visit_id}).done(function( data ) {
		var result = $.parseJSON(data);
		if(result["is_success"] == 1){
			swal({
                title: "",
                text: "Are you sure to remove this visit from queue?",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                closeOnConfirm: true
            	},
            	function(){
    		    	undo_visit($visit_id);
            	}
        	);
		}else{
			swal({
                title: "",
                text: "This Consultation already have MedicalCertification/Order ! "
            });
		}
	});
}

function undo_visit($visit_id){
	$.get("pt_queue.php", {act :"undo_visit",visit_id:$visit_id}).done(function(data){
		var result = $.parseJSON(data);
		if(result["is_success"] == 1){
			localStorage.setItem("UndoVisitMessage","Undo Consultation success.");
			window.location.reload();
		}else{
			toastr.error("Undo Consultation failed.");
		}
	});
}

'; ?>

</script>
</body>

</html>