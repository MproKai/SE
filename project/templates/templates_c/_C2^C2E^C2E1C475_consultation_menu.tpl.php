<?php /* Smarty version 2.6.19, created on 2017-08-08 07:13:19
         compiled from consultation_menu.tpl */ ?>
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
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

<!-- Select2 -->
<script src="js/plugins/select2/select2.full.min.js"></script>
<!-- Morris -->
<script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="js/plugins/morris/morris.js"></script>
<!-- Chartist -->
<script src="js/plugins/chartist/chartist.min.js"></script>
<!-- SUMMERNOTE -->
<script src="js/plugins/summernote/summernote.min.js"></script>
<!-- Sweetalert -->
<script src="js/plugins/sweetalert/sweetalert.min.js"></script>

<script src="js/plugins/validate/jquery.validate.min.js"></script>

<script src="js/plugins/clockpicker/clockpicker.js"></script>
<script src="js/plugins/fullcalendar/moment.min.js"></script>

<script src="js/plugins/toastr/toastr.min.js"></script>

<!-- ladda -->
<link href="css/plugins/ladda/ladda-themeless.min.css" rel="stylesheet">
<script src="js/plugins/ladda/spin.min.js"></script> 
<script src="js/plugins/ladda/ladda.min.js"></script> 
<script src="js/plugins/ladda/ladda.jquery.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

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
    <div id="page-wrapper" class="white-bg">
		<!-- page header -->
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'page_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div class="row wrapper border-bottom white-bg page-heading">
			<!--h2>Patient Information Overview</h2-->
			<h2 id = "title" class="col-lg-10 ">Consult Note &nbsp; - &nbsp;&nbsp;<?php echo $this->_tpl_vars['Patinet']['PatientName']; ?>
&nbsp;,&nbsp;<?php echo $this->_tpl_vars['Patinet']['PatientID']; ?>
</h2>
			<?php if ($this->_tpl_vars['Visit']['Status'] != 'Completed'): ?>
			<div class="col-lg-2">		
				<div align="right">
					<div class="input-group">
						<button type="button" class="btn btn btn-primary" onclick="complete_handelr()"><i class="fa fa-check"></i>&nbsp;&nbsp;Complete</button>	
					</div>	
				</div>									
			</div>
			<?php endif; ?>
		</div>
	
		<div class = "row">
			<div class = "col-lg-2" >
				<nav class="navbar-default" role="navigation" bgcolor="#000000">
					<div>
						<ul class="nav metismenu m-t-md" id="side-menu">
							<li><a href="#" onclick = "href_consult_note()" id="menu_consultnote"><span class="nav-label">Consult notes</span></a></li>
							<?php if ($this->_tpl_vars['Visit']['Status'] != 'Completed'): ?><li><a href="#" onclick = "href_order()" id="menu_order"><span class="nav-label">Orders</span></a></li><?php endif; ?>
							<li><a href="#" onclick = "href_invoice()" id="menu_invoice"><span class="nav-label">Invoice</span></a></li>
							<li><a href="#" onclick = "href_referral_letter()" id="menu_referral_letter"><span class="nav-label">Referral letter</span></a></li>
						</ul>
					</div>
				</nav>
			</div>
			<div class = "col-lg-10" id = "content_page">
			
			
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

<div class="modal inmodal fade" id="complete_modal" role="dialog" aria-hidden="true">
	<div class="modal-dialog"  style="width: 50%">
        <div class="modal-content">						
            <div class="modal-header">						
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3>Confirm Complete</h3>
            </div>
             <div class="modal-body">
             	<div id="content_complete">
             		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'consultation_complete.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
             	</div>
            </div>     
        </div>
    </div> 
</div>

<script>
<?php echo '

$(document).ready(function(){
	$page = \''; ?>
<?php echo $_GET['page']; ?>
<?php echo '\';
	if($page==""){
		consultnote_click();
		$(\'#menu_consultnote\').focus();
	}else{
		switch($page){
			case \'menu_consultnote\':
				consultnote_click();
				$(\'#menu_consultnote\').focus();
				break;
			case \'menu_order\':
				orders_click();
				$(\'#menu_order\').focus();
				break;
			case \'menu_invoice\':
				invoice_click();
				$(\'#menu_invoice\').focus();
				break;
			case \'menu_referral_letter\':
				referralletter_click();
				$(\'#menu_referral_letter\').focus();
				break;
		}
	}
	toastr.options = {
	  "closeButton": true,
	  "debug": false,
	  "progressBar": true,
	  "preventDuplicates": false,
	  "positionClass": "toast-bottom-right",
	  "timeOut": "1800"
	}
});

function href_consult_note(){
	var patient_id = \''; ?>
<?php echo $_GET['patient_id']; ?>
<?php echo '\';
	var visit_id = \''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\';
	window.location.assign("consultation_menu.php?patient_id="+patient_id+"&visit_id="+visit_id+"&page=menu_consultnote");
}

function href_order(){
	var patient_id = \''; ?>
<?php echo $_GET['patient_id']; ?>
<?php echo '\';
	var visit_id = \''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\';
	window.location.assign("consultation_menu.php?patient_id="+patient_id+"&visit_id="+visit_id+"&page=menu_order");
}

function href_invoice(){
	var patient_id = \''; ?>
<?php echo $_GET['patient_id']; ?>
<?php echo '\';
	var visit_id = \''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\';
	window.location.assign("consultation_menu.php?patient_id="+patient_id+"&visit_id="+visit_id+"&page=menu_invoice");
}

function href_referral_letter(){
	var patient_id = \''; ?>
<?php echo $_GET['patient_id']; ?>
<?php echo '\';
	var visit_id = \''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\';
	window.location.assign("consultation_menu.php?patient_id="+patient_id+"&visit_id="+visit_id+"&page=menu_referral_letter");
}

function consultnote_click(){
	$.get( "consultation_consultnote.php", {visit_id :\''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\'}).done(function( data ) {
		$(\'#content_page\').html(data);
		document.getElementById("title").innerHTML=\''; ?>
Consult Note<?php echo ' &nbsp; - &nbsp;&nbsp;'; ?>
<?php echo $this->_tpl_vars['Patinet']['PatientName']; ?>
<?php echo '&nbsp;,&nbsp;'; ?>
<?php echo $this->_tpl_vars['Patinet']['PatientID']; ?>
<?php echo '\';
	});
}

function orders_click(){
	$.get( "consultation_order.php",{visit_id :\''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\' , patient_id :\''; ?>
<?php echo $_GET['patient_id']; ?>
<?php echo '\'}).done(function( data ) {
		$(\'#content_page\').html(data);	
		document.getElementById("title").innerHTML=\''; ?>
Orders<?php echo ' &nbsp; - &nbsp;&nbsp;'; ?>
<?php echo $this->_tpl_vars['Patinet']['PatientName']; ?>
<?php echo '&nbsp;,&nbsp;'; ?>
<?php echo $this->_tpl_vars['Patinet']['PatientID']; ?>
<?php echo '\';
	});
}

function invoice_click(){
	$.get( "consultation_invoice.php", {visit_id :\''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\'}).done(function( data ) {
		$(\'#content_page\').html(data);	
		document.getElementById("title").innerHTML=\''; ?>
Invoice<?php echo ' &nbsp; - &nbsp;&nbsp;'; ?>
<?php echo $this->_tpl_vars['Patinet']['PatientName']; ?>
<?php echo '&nbsp;,&nbsp;'; ?>
<?php echo $this->_tpl_vars['Patinet']['PatientID']; ?>
<?php echo '\';
	});
}

function referralletter_click(){
	$.get( "pt_referral_letter_list.php", {visit_id :\''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\',patient_id:\''; ?>
<?php echo $this->_tpl_vars['Patinet']['PatientID']; ?>
<?php echo '\'}).done(function( data ) {
		$(\'#content_page\').html(data);	
		document.getElementById("title").innerHTML=\''; ?>
Referral letter<?php echo ' &nbsp; - &nbsp;&nbsp;'; ?>
<?php echo $this->_tpl_vars['Patinet']['PatientName']; ?>
<?php echo '&nbsp;,&nbsp;'; ?>
<?php echo $this->_tpl_vars['Patinet']['PatientID']; ?>
<?php echo '\';
	});
}

function complete_handelr(){
	$.get("consultation_menu.php", {act: \'get_invoice\',visit_id :\''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\'}).done(function( data ) {
		var invoice = JSON.parse(data);
		if(invoice[\'outstanding\']>0){
			/* open the confirm page */
			$.get("consultation_menu.php", {act: \'get_complete_content\',visit_id :\''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\',patient_id:\''; ?>
<?php echo $this->_tpl_vars['Patinet']['PatientID']; ?>
<?php echo '\'}).done(function( data ) {
				$(\'#content_complete\').html(data);
				$(\'#complete_modal\').modal();
			});
		}else{
			swal({
		        title: "",
		        text: "Outstanding is 0 , are you sure to complete ?",
		        showCancelButton: true,
		        confirmButtonColor: "#DD6B55",
		        confirmButtonText: "Yes",
		        closeOnConfirm: true
		    }, function () {
		    	/*just do the done payment*/
				var info = {};
				info["visitID"] = \''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\';
				info["patientID"] = \''; ?>
<?php echo $_GET['patient_id']; ?>
<?php echo '\';
				info["invoiceID"] = invoice[\'InvoiceID\'];
				info["paymentAmount"] = 0;
				info["outstanding"] =  0;

				var json = JSON.stringify(info);
				$.post( "consultation_menu.php", {act :\'complete_consultation\', info_arr : json}).done(function( data ) {
					var rs = JSON.parse(data);
					if(rs["is_success"] == 1){
						localStorage.setItem("CompleteConsultationMessage","Completed consultation success!!");
						window.location.assign("pt_queue.php");
					}else{
						toastr.error(rs["rs_msg"]);
					}
				});    
		    });
		}
	});	
}


'; ?>



</script>
</body>

</html>