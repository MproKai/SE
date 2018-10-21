<?php /* Smarty version 2.6.19, created on 2017-08-03 08:52:14
         compiled from pt_menu.tpl */ ?>
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
<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>
<!-- Mainly scripts -->	
<script src="js/plugins/footable/footable.all.min.js"></script>
<script src="js/plugins/fullcalendar/moment.min.js"></script>
<script src="js/plugins/toastr/toastr.min.js"></script>
<!-- Jasny -->
<script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
<!-- SUMMERNOTE -->
<script src="js/plugins/summernote/summernote.min.js"></script>

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
			<h2 class="col-lg-12 hideInMobile">
				<div class="col-lg-8">&nbsp;&nbsp;<?php echo $this->_tpl_vars['Patient']['PatientName']; ?>
&nbsp;,&nbsp;<?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
</div>
				<div class="col-lg-4"><div class="pull-right">
					<button onclick = "add_visit_handelr()" class="btn btn-primary">
						<i class="fa fa-user-plus"></i>
						<strong>&nbsp;&nbsp;Add Visit</strong>
					</button>
					<button onclick = "edit_patient()" class="btn btn-primary" >
						<i class="fa fa-pencil-square-o"></i>
						<strong>&nbsp;&nbsp;Edit Patient</strong>
					</button>
				</div></div>
			</h2>
		</div>
	
		<div class = "row">
			<div class = "col-lg-2" >
				<nav class="navbar-default" role="navigation" bgcolor="#000000">
					<div>
						<ul class="nav metismenu m-t-md" id="side-menu">
							<li><a href="#" onclick = "pt_detail_click()" id="pt_detail" ><span class="nav-label">Detail</span></a></li>
							<li><a href="#" onclick = "pt_document_click()" id="pt_document"><span class="nav-label">Document</span></a></li>
							<!--<li><a href="#" onclick = "pt_attachment_click()"><span class="nav-label">Attachment</span></a></li>-->
							<!--<li><a href="#"	onclick = "pt_consult_history_click()">Consult History</span></a></li>-->
							<li><a href="#" onclick = "pt_order_history_click()"><span class="nav-label">Order History</span></a></li>
							<li><a href="#" onclick = "pt_billing_click()"><span class="nav-label">Billing</span></a></li>
							<li><a href="#" onclick = "pt_referral_letter_list_click()" id="pt_referral_letter"><span class="nav-label">Referral Letter</span></a></li>
							<li><a href="#" onclick = "pt_upload_document_click()" id="pt_upload_document"><span class="nav-label">Upload Document</span></a></li>
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

<script>
<?php echo '
$(document).ready(function(){
	$paramas = window.location.search.substring(1).split(\'&\');
	$page = "";
	if($paramas.length>1){
		$ps=$paramas[1].split(\'=\');
		$page=$ps[1];
	}

	if($page==""){
		pt_detail_click();	
	}else if($page=="pt_document"){
		pt_document_click();
	}else if($page=="pt_upload_document"){
		pt_upload_document_click();
	}else if($page=="pt_referral_letter_list"){
		pt_referral_letter_list_click();
	}
});


function pt_detail_click(){
	$.get( "pt_menu.php", {act :"pt_detail_click",patient_id:"'; ?>
<?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
<?php echo '"}).done(function( data ) {
		$(\'#content_page\').html(data);	
		$(\'#pt_detail\').focus();	
	});
}

function pt_document_click(){
	$.get( "pt_menu.php", {act :"pt_document_click",patient_id:"'; ?>
<?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
<?php echo '"}).done(function( data ) {
		$(\'#content_page\').html(data);	
		$(\'#pt_document\').focus();
	});
}

function pt_attachment_click(){
	$.get( "pt_menu.php", {act :"pt_attachment_click",patient_id:"'; ?>
<?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
<?php echo '"}).done(function( data ) {
		$(\'#content_page\').html(data);	
	});
}

function pt_order_history_click(){
	$.get( "pt_menu.php", {act :"pt_order_history_click",patient_id:"'; ?>
<?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
<?php echo '"}).done(function( data ) {
		$(\'#content_page\').html(data);	
	});
}

function pt_billing_click(){
	$.get( "pt_menu.php", {act :"pt_billing_click",patient_id:"'; ?>
<?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
<?php echo '"}).done(function( data ) {
		$(\'#content_page\').html(data);	
	});
}

function pt_referral_letter_list_click(){
	$.get( "pt_menu.php", {act :"pt_referral_letter_list_click",patient_id:"'; ?>
<?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
<?php echo '"}).done(function( data ) {
		$(\'#content_page\').html(data);	
		$(\'#pt_referral_letter\').focus();
	});
}

function pt_upload_document_click(){
	$.get( "pt_menu.php", {act :"pt_upload_document_click",patient_id:"'; ?>
<?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
<?php echo '"}).done(function( data ) {
		$(\'#content_page\').html(data);	
		$(\'#pt_upload_document\').focus();
	});
}

function edit_patient(){
	window.location.assign("pt_patient.php?act=Edit&patient_id='; ?>
<?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
<?php echo '");
}

function add_visit_handelr(){
	$(\'#add_visit_modal\').modal();
}

'; ?>



</script>
</body>

</html>