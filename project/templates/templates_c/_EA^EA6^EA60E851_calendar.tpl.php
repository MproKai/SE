<?php /* Smarty version 2.6.19, created on 2017-08-08 02:18:12
         compiled from calendar.tpl */ ?>
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
<!--Combogrid-->
<link href="css/easyui.css" rel="stylesheet">
<script src="js/plugins/combogrid/jquery.easyui.min.js"></script>
<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<!-- Full Calendar -->
<script src="js/plugins/fullcalendar/moment.min.js"></script>
<script src="js/plugins/fullcalendar/fullcalendar.min.js"></script>
<!--chosen-->
<script src="js/plugins/chosen/chosen.jquery.js"></script>
<!-- Data picker -->
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
<!-- Sweet alert -->
<script src="js/plugins/sweetalert/sweetalert.min.js"></script>
<!-- Select2 -->
<script src="js/plugins/select2/select2.full.min.js"></script>
<!--checkbox-->
<link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
<!-- Toastr script -->
<script src="js/plugins/toastr/toastr.min.js"></script>

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
    	<div class="wrapper wrapper-content">
			<div class="row animated fadeInDown">
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
                    	<div class="ibox-title">
							<label class="font-noraml"><i class="fa fa-calendar">&nbsp;&nbsp;</i>Schedule For :</label>
                        	<label class="font-noraml">Patient</label>
							<select data-placeholder="Choose a patient" id="choice_patient" style="width:400px">
			                </select>
							<button type="button" class="btn btn-primary btn-sm pull-right space-left m-t-n-xs" onclick="show_booking();"><i class="fa fa-calendar-check-o"></i> Booking</button>
                            <div class="clear"></div>
                        </div>                   
						<div class="ibox-content ibox-calendar">
		                    <div id="calendar"></div>
		                </div>
					</div>
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
                	<button type="button" class="btn btn-white" data-dismiss="modal" >Close</button>
                    <button type="button" class="btn btn-primary" id="save_appointment" onclick="save_appointment();">Save</button>
                    <button type="button" class="btn btn-primary" id="edit_appointment" onclick="update_appointment();">Save</button>
                </div>
                <div class="pull-left">
                    &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-danger" id="del_appointment" onclick="del_appointment();">Delete</button>
                    <input type="text" class="form-control" value="" id="appointment_uniqueid" style="display: none">
                </div>
            </div>
        </div>
    </div> 
</div>
<script>
<?php echo '
$(document).ready(function() {
	var calendarHeight;
	if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		calendarHeight = $(window).height()*0.70;
	}else{
		calendarHeight = $(window).height()*0.78;
	}
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
    $(\'#calendar\').fullCalendar({
        header: {
            left: \'prev,next\',
            center: \'title\',
            right: \'month,agendaWeek,agenda3day,agendaDay\'
        },
		eventLimit : true,
		views: {
			agenda3day : {
				type: \'agenda\',
	            duration: { days: 3 },
	            buttonText: \'3 day\'
			},
			month : {
				eventLimit : 4 , 
				eventLimitClick: \'day\'
			}
		},
		selectable: true,
		selectHelper: true,
		select: function(start,end) {
			var view = $(\'#calendar\').fullCalendar(\'getView\');
			if (view.name !="month"){
				var patient_id = $(\'#choice_patient\').val();
				reset_appointment();
				init_appointment(patient_id,start,end);
				$("#booking_modal").modal();
			}
			$(\'#calendar\').fullCalendar(\'unselect\');
		},
		selectOverlap: function(event) {
			/*if($(\'#calendar\').fullCalendar(\'getView\').name == \'month\'){
				return true;
			}
			return event.rendering === \'background\';*/
			return true;
		},
		eventClick: function(event, element) {
	        reset_appointment();
	        appointment_edit(event.allDay,event.start,event.end,event.id);
	    },
		viewRender: function(view,element) {
			var patient_id = $(\'#choice_patient\').val();
			appointments_handler(patient_id);
		},
		dayClick: function(date, jsEvent, view) {
			if (view.name == \'month\') {
				$(\'#calendar\').fullCalendar(\'gotoDate\', date);
	            $(\'#calendar\').fullCalendar(\'changeView\', \'agendaDay\',date[\'_d\']);	            
	        }
		},
		hiddenDays: [0],
		minTime: "'; ?>
<?php echo @workday_start_hour; ?>
<?php echo '",
		maxTime: "'; ?>
<?php echo @workday_end_hour; ?>
<?php echo '",
		evetnOverlap:false,
		height: calendarHeight,
		slotDuration: "00:15:00", //setting day slot duration
        editable: false, //block move 
        allDaySlot: true,
        droppable: false, // this allows things to be dropped onto the calendar
		timeFormat : \'HH:mm\',
		displayEventTime : true,
		defaultView: \'month\',
		timezone: \'local\',
    });
    $("#booking_type").chosen({width: \'110%\'});
   	$("#booking_doctor").chosen({ width: \'110%\' });
	$(\'#choice_patient\').select2({
		ropdownAutoWidth : true,
   		allowClear : true,
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
	$(document).on(\'change\',\'#choice_patient\',function(){
		var patient_id = $(\'#choice_patient\').val();
		appointments_handler(patient_id);
	});
	$(\'#edit_appointment\').hide();
	$(\'#del_appointment\').hide();
});
function appointments_handler(patient_id){
	var patient_id = patient_id;
	var view = $(\'#calendar\').fullCalendar(\'getView\').name;
	$.post(\'calendar.php\',{act : \'get_appointments\', patient_id : patient_id },function(data){
		// remove all selection before render new doctor\'s appointment
		$(\'#calendar\').fullCalendar( \'removeEvents\', function(e){ return !e.isUserCreated});
		var dateList = $.parseJSON(data);
		if(view ==\'month\'){
			for(var i=0; i<dateList.length; i++){

				$(\'#calendar\').fullCalendar(\'renderEvent\',{
					title:   dateList[i][\'title\']  +"   "+  dateList[i][\'patient\'],
					patient: dateList[i][\'patient\'],
					doctor:  dateList[i][\'doctor\'],
					start:   dateList[i][\'start\'],
					end:     dateList[i][\'end\'],
					allDay: false,
					id:      dateList[i][\'id\'], 
					borderColor: dateList[i][\'backgroundColor\'],	
					textColor: dateList[i][\'textColor\']
				},true);
			}
		}else{
			for(var i=0; i<dateList.length; i++){
				if(dateList[i][\'allday\'] == 1 ){
					$(\'#calendar\').fullCalendar(\'renderEvent\',{
						title:   dateList[i][\'patient\'] +"       "+dateList[i][\'title\']    + "\\n" + 
							   "Doctor:" +  dateList[i][\'doctor\'],
						patient: dateList[i][\'patient\'],
						doctor:  dateList[i][\'doctor\'],
						start:   dateList[i][\'start\'],
						end:     dateList[i][\'end\'],
						allDay: true,
						id:      dateList[i][\'id\'], 
						borderColor: dateList[i][\'backgroundColor\'],	
						textColor: dateList[i][\'textColor\']
					},true);
				}else{
					$(\'#calendar\').fullCalendar(\'renderEvent\',{
						title:   dateList[i][\'patient\'] +"       "+dateList[i][\'title\']    + "\\n" + 
							   "Doctor:" +  dateList[i][\'doctor\'],
						patient: dateList[i][\'patient\'],
						doctor:  dateList[i][\'doctor\'],
						start:   dateList[i][\'start\'],
						end:     dateList[i][\'end\'],
						allDay: false,
						id:      dateList[i][\'id\'], 
						borderColor: dateList[i][\'backgroundColor\'],	
						textColor: dateList[i][\'textColor\']
					},true);
				}
			}
		}
	});
}
function init_appointment(patient_id,start_date,end_date){
	count = 0;
	if(start_date[\'_d\']==null && end_date[\'_d\']==null){
		var sdate = start_date;
		var edate = end_date;
		edate.setMinutes(sdate.getMinutes() + 15);		
		sdate.setHours(sdate.getHours());
		edate.setHours(edate.getHours());
	}else{
		var sdate = new Date(start_date[\'_d\']);
		var edate = new Date(end_date[\'_d\']);
	}

	if(edate.getDate()-sdate.getDate() > 0){
		edate.setDate(edate.getDate()-1);
		sdate.setHours("'; ?>
<?php echo @work_start_hour; ?>
<?php echo '");
		edate.setHours("'; ?>
<?php echo @work_end_hour; ?>
<?php echo '");
	}

	$("#start_date").datepicker(\'setDate\', sdate);
	$(\'#end_date\').datepicker(\'setDate\', edate);
	var com = $(\'#booking_patient\').combogrid(\'grid\');
	if(patient_id != null){
		com.datagrid({url : \'patient.php?act=getpt&current_id=\' + patient_id});
		com.datagrid({
			onLoadSuccess : function(res){
				if(count > 0){

				}else{
					$(\'#booking_patient\').combogrid(\'setValue\',{PatientID : patient_id, PatientName : data.PatientName});
					count+=1;
				}
			}
		});
	}
	$("#appointment_start_time").val(sdate.getHours()*60+sdate.getMinutes());
	$("#appointment_end_time").val(edate.getHours()*60+edate.getMinutes());
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
        	reset_appointment();
            appointments_handler(patient_id);
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
function update_appointment(){
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
	var subject = $(\'#booking_subject\').val();
	var location = $(\'#booking_location\').val();
	var instruction = $(\'#instruction\').val();
	var uniqueid = $(\'#appointment_uniqueid\').val();

	$.post(\'calendar.php\',{act : \'update_appointment_list\',  start_date : start_date.format(\'YYYY-MM-DD HH:mm:ss\') , end_date : end_date.format(\'YYYY-MM-DD HH:mm:ss\') , subject : subject , location : location , appointment_type : appointment_type , doctor_id : doctor_id  , patient_id : patient_id  , instruction : instruction , allday : allday , informed : informed , queued : queued , canceled : canceled , uniqueid : uniqueid},function(data){

		var rs = $.parseJSON(data);
		if(rs["is_success"] == 1){
			toastr.options = {
                "closeButton": true,
                "positionClass": "toast-top-center",
               	"timeOut": "2000"
            };
            toastr.success(\'Update Success ! \',rs["rs_msg"]);
            $("#booking_modal").modal(\'hide\');
	        var patient_id = $(\'#choice_patient\').val();
	        reset_appointment();
	        appointments_handler(patient_id);
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
function del_appointment(){
	var uniqueid = $(\'#appointment_uniqueid\').val();
	$.post(\'calendar.php\',{act : \'del_appointment_list\', uniqueid : uniqueid },function(data){
			swal({
			        title: "",
			        text: "The appointment has been canceled.",
			        confirmButtonColor: "#DD6B55",
			        confirmButtonText: "ok",
			        closeOnConfirm: true
			    },function(){
			        $("#booking_modal").modal(\'hide\');
			        var patient_id = $(\'#choice_patient\').val();
			        reset_appointment();
			        appointments_handler(patient_id);
			});
	});
}
function show_booking(){
	var patient_id = $(\'#choice_patient\').val();
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
	reset_appointment();
	init_appointment(patient_id,start,start);
	$("#booking_modal").modal();
}
var inactive_count_doc = 0;
var inactive_count_type = 0;
function appointment_edit(allday,start_date,end_date,id){	
	var count = 0;
	var sdate = start_date.format(\'YYYY-MM-DD HH:mm:ss\'); 
	var edate = end_date.format(\'YYYY-MM-DD HH:mm:ss\');
	$.post(\'calendar.php\',{act:\'get_appointments_edit\', appointment_id : id},function(data){
		var sdate = start_date[\'_d\']==null ? start_date : new Date(start_date[\'_d\']);
		var edate = end_date[\'_d\']==null ? end_date : new Date(end_date[\'_d\']);
		if(data.AllDay == 1 ){
			edate.setDate(edate.getDate()-1);
			sdate.setHours("'; ?>
<?php echo @work_start_hour; ?>
<?php echo '");
			edate.setHours("'; ?>
<?php echo @work_end_hour; ?>
<?php echo '");
		}
		var com = $(\'#booking_patient\').combogrid(\'grid\');
		com.datagrid({url : \'patient.php?act=getpt&current_id=\' + data.PatientID});
		//console.log(\'loading url : \' + \'patient.php?act=getpt&current_id=\' + data.PatientID);
		//aaa.datagrid(\'load\', {current_id : data.PatientID});
		com.datagrid({
			onLoadSuccess : function(res){
				if(count > 0){

				}else{
					$(\'#booking_patient\').combogrid(\'setValue\',{PatientID : data.PatientID});
					count+=1;
				}
			}
		});
		if(data.Status==\'InActive\'){
			$(\'#booking_doctor\').append("<option selected disabled value=\'"+data.DoctorID+"\'>"+data.docname+"</option>");
			inactive_count_doc++;
		}
		if($("#booking_type option[value=\'"+data.AppointmentType+"\']").length == 0){
			$(\'#booking_type\').append("<option  selected disabled value=\'"+data.AppointmentType+"\'>"+data.vName+"</option>");
			inactive_count_type++;
		}
		$(\'#booking_type\').val(data.AppointmentType);
		$(\'#booking_type\').trigger("chosen:updated");
		$(\'#booking_doctor\').val(data.DoctorID);
		$(\'#booking_doctor\').trigger("chosen:updated");

		$("#start_date").datepicker(\'setDate\', sdate);
		$(\'#end_date\').datepicker(\'setDate\', edate);
		$("#appointment_start_time").val(sdate.getHours()*60+sdate.getMinutes());
		$("#appointment_end_time").val(edate.getHours()*60+edate.getMinutes());
		
		data.AllDay == 1 ? $(\'#check_allday\').prop(\'checked\',true) : $(\'#check_allday\').prop(\'checked\',false);
		data.Informed == 1 ? $(\'#Informed\').prop(\'checked\', true) : $(\'#Informed\').prop(\'checked\', false);
		data.Queued == 1 ? $(\'#Queued\').prop(\'checked\', true) : $(\'#Queued\').prop(\'checked\', false);
		data.Canceled == 1 ? $(\'#Canceled\').prop(\'checked\', true) : $(\'#Canceled\').prop(\'checked\', false);

		$(\'#booking_subject\').val(data.Subject);
		$(\'#booking_location\').val(data.Location);
		$(\'#appointment_uniqueid\').val(data.UniqueID);
		$(\'#instruction\').val(data.Description);

	},"JSON");	
	$(\'#save_appointment\').hide();
	$(\'#edit_appointment\').show();
	$(\'#del_appointment\').show();
	$("#booking_modal").modal();
}
function reset_appointment(){
	$("#booking_subject").val(\'\');
	$("#instruction").val(\'\');
	$(\'#check_allday\').prop(\'checked\',false);
	$(\'#Informed\').prop(\'checked\', false);
	$(\'#Queued\').prop(\'checked\', false);
	$(\'#Canceled\').prop(\'checked\', false);
	$(\'#tiem_group_name\').contents().contents().prop(\'checked\',false);
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
	if(inactive_count_doc > 0){
		$.post(\'calendar.php\',{act:\'update_doctor_list\'},function(data){
			inactive_doc = JSON.parse(data);
			$.each( inactive_doc, function( key, value ) {
				if($("#booking_doctor option[value=\'"+value.DoctorID+"\']").length > 0){
					$("#booking_doctor option[value=\'"+value.DoctorID+"\']").remove();
					$(\'#booking_doctor\').trigger("chosen:updated");
					//console.log("option  exist!");
				}
			});
		});
		inactive_count_doc--;
	}
	if(inactive_count_type > 0){
		$.post(\'calendar.php\',{act:\'update_inactive_type\'},function(data){
			inactive_type = JSON.parse(data);
			// console.log(inactive_type);
			$.each( inactive_type, function( key, value ) {
				if($("#booking_type option[value=\'"+value.AppointmentType+"\']").length > 0){
					$("#booking_type option[value=\'"+value.AppointmentType+"\']").remove();
					$(\'#booking_type\').trigger("chosen:updated");
				}
			});
		});
		inactive_count_type--;
	}
	$(\'#booking_patient\').combogrid(\'setValue\',null);
	$("#booking_location").val("'; ?>
<?php echo $this->_tpl_vars['locations']['vName']; ?>
<?php echo '");
	$(\'#save_appointment\').show();
	$(\'#edit_appointment\').hide();
	$(\'#del_appointment\').hide();
}
'; ?>

</script>
</body>
</html>