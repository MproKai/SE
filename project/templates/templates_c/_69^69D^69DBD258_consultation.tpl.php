<?php /* Smarty version 2.6.19, created on 2017-06-28 08:24:41
         compiled from consultation.tpl */ ?>
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
        <div class="wrapper wrapper-content animated fadeInRight">
		<h3 class="hideInMobile"><?php echo $_SESSION['patient']['PatientName']; ?>
&nbsp;,&nbsp;<?php echo $_SESSION['patient']['PatientID']; ?>
</h3>
        	<div class="wrapper wrapper-content">  
            <?php if ($this->_tpl_vars['Consultation']): ?>       
			<?php $_from = $this->_tpl_vars['Consultation']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['consult']):
?>			
                <div class="row">
                	<div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5><i class="fa fa-calendar-o"></i>&nbsp;&nbsp; <?php echo $this->_tpl_vars['consult']['CreateDate']; ?>
</h5>
                                <div class="ibox-tools">
								<?php if (! $this->_tpl_vars['consult']['IsSigned']): ?>
                                	<button id=<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
_edit type="button" class="btn btn-primary btn-xs editNote" onclick="edit(<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
)"><i class="fa fa-pencil-square-o"></i> Edit</button> 
									<button id=<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
_close_edit type="button" class="btn btn-primary btn-xs pull-right closeEditLetter" onclick="close_edit(<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
)"><i class="fa fa-times"></i> Cancel</button>
                                    <button id=<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
_save_edit type="button" class="btn btn-primary btn-xs saveNote" onclick="save(<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
)"><i class="fa fa fa-floppy-o"></i> Save</button>   
								<?php endif; ?>
                                </div>
                            </div>
                            <div class="ibox-content">
                            	<div class="row">
                                	<div class="col-lg-6 notePage"><!--如果consultation和summary都要顯示的話，數字改成6，如果只有顯示其中一項的話，數字改成12-->
                                    	<h3>
                                        	<i class="fa fa-pencil-square-o"></i> Clinical Note
                                            <div class="pull-right">
											<?php if ($this->_tpl_vars['consult']['IsSigned']): ?>
                                                <button id=<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
_append type="button" class="btn btn-primary btn-xs appendConsultNote" onclick="append_note(<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
,0)"><i class="fa fa-pencil-square-o"></i> Append</button> 
												<button id=<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
_close_append type="button" class="btn btn-primary btn-xs pull-right closeEditLetter" onclick="close_append(<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
,0)"><i class="fa fa-times"></i> Cancel</button>
                                                <button id=<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
_save_append type="button" class="btn btn-primary btn-xs saveConsultNote" onclick="save_append(<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
,0)"><i class="fa fa fa-floppy-o"></i> Save</button>
											<?php endif; ?>
                                            </div>
                                        </h3>
                                        <!--start summernote-無memo時，預設顯示(display:inline-block)-->
										<?php if ($this->_tpl_vars['consult']['IsSigned']): ?>
										<div id=<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
_append_consult  class="summernote consult " style="display:none">
                                            <?php echo $this->_tpl_vars['consult']['ClinicalNoteHtml']; ?>

                                        </div>
										<div id=<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
_old_consult  class="summernote consult " style="color:#000000;background-color:transparent;font-family:Calibri;font-size:11pt;font-weight:normal;font-style:normal;">
                                            <?php echo $this->_tpl_vars['consult']['view_consult']; ?>

                                        </div>
										<?php endif; ?>
                                        <div id=<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
_consult class="summernote consult appendConsultation" style="color:#000000;background-color:transparent;font-family:Calibri;font-size:11pt;font-weight:normal;font-style:normal;">
                                            <?php if (! $this->_tpl_vars['consult']['IsSigned']): ?> <?php echo $this->_tpl_vars['consult']['ClinicalNoteHtml']; ?>
 <?php endif; ?>
                                        </div>
                                        <!--end  summernote-->
                                    </div><!-- end col-lg-12 -->
                                    <div class="showInMobile"><hr/></div>
									<div class="col-lg-6 notePage">
                                    	<h3>
                                        	<i class="fa fa-pencil-square-o"></i> Summary Note
                                            <div class="pull-right">
											<?php if ($this->_tpl_vars['consult']['IsSigned']): ?>
                                                <button id=<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
_append_sum type="button" class="btn btn-primary btn-xs appendSummaryNote" onclick="append_note(<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
,1)"><i class="fa fa-pencil-square-o"></i> Append</button> 
												<button id=<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
_close_append_sum type="button" class="btn btn-primary btn-xs pull-right closeEditLetter" onclick="close_append(<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
,1)"><i class="fa fa-times"></i> Cancel</button>
                                                <button id=<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
_save_append_sum  type="button" class="btn btn-primary btn-xs saveSummaryNote" onclick="save_append(<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
,1)"><i class="fa fa fa-floppy-o"></i> Save</button>
											<?php endif; ?>
                                            </div>
                                        </h3>
                                        <!--start summernote-無memo時，預設顯示(display:inline-block)-->
										<?php if ($this->_tpl_vars['consult']['IsSigned']): ?>
										<div id=<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
_append_summary  class="summernote summary " style="display:none">
                                            <?php echo $this->_tpl_vars['consult']['SummaryNoteHtml']; ?>

                                        </div>
										<div id=<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
_old_summary  class="summernote summary " style="color:#000000;background-color:transparent;font-family:Calibri;font-size:11pt;font-weight:normal;font-style:normal;">
                                            <?php echo $this->_tpl_vars['consult']['view_summary']; ?>

                                        </div>
										<?php endif; ?>
                                        <div id=<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
_summary class="summernote summary appendSummary" style="color:#000000;background-color:transparent;font-family:Calibri;font-size:11pt;font-weight:normal;font-style:normal;">
											<?php if (! $this->_tpl_vars['consult']['IsSigned']): ?> <?php echo $this->_tpl_vars['consult']['SummaryNoteHtml']; ?>
 <?php endif; ?>
                                        </div>
										<input hidden="hidden" id=<?php echo $this->_tpl_vars['consult']['ser_no']; ?>
_id type="text" value=<?php echo $this->_tpl_vars['consult']['visitID']; ?>
 />
                                        <!--end  summernote-->
                                    </div><!-- end col-lg-12 -->
                            	</div><!-- end row -->
                            </div><!-- end ibox-content -->
                        </div><!-- end ibox -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
				<?php endforeach; endif; unset($_from); ?>
                <?php else: ?>
                    <div class="text-center animated fadeInRight">No Consultation History</div>
                <?php endif; ?>
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

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- SUMMERNOTE -->
<script src="js/plugins/summernote/summernote.min.js"></script>

<script>
<?php echo '
var org_consult;
var org_summary;

$(document).ready(function(){
	$(\'.saveNote\').css(\'display\',\'none\');
	$(\'.saveConsultNote\').css(\'display\',\'none\');
	$(\'.saveSummaryNote\').css(\'display\',\'none\');
	$(\'.closeEditLetter\').css(\'display\',\'none\');
	//$(\'.appendSummary\').css(\'display\',\'none\');
	//$(\'.appendConsultation\').css(\'display\',\'none\');
});

function edit(id) {
	var id= "#"+id;
	$(id+"_consult").summernote({focus: true});
	$(id+"_summary").summernote({focus: true});
	$(id+\'_edit\').css(\'display\',\'none\');
	org_consult = $(id+"_consult").code();
	org_summary = $(id+"_summary").code();
	$(id+\'_close_edit\').css(\'display\',\'inline-block\');
	$(id+\'_save_edit\').css(\'display\',\'inline-block\');
}
function close_edit(id){
	var id= "#"+id;
	var consult_content = $(id+"_consult").code();
	var summary_content = $(id+"_summary").code();
	$(id+\'_edit\').css(\'display\',\'inline-block\');
	$(id+\'_close_edit\').css(\'display\',\'none\');
	$(id+\'_save_edit\').css(\'display\',\'none\');
	$(id+"_consult").destroy();
	$(id+"_summary").destroy();
	$(id+"_consult").html(org_consult);
	$(id+"_summary").html(org_summary);
}
function save(id){
	var id= "#"+id;
	var consult_content = $(id+"_consult").code();
	var summary_content = $(id+"_summary").code();
	var visit_id = $(id+"_id").val();
	$(id+\'_edit\').css(\'display\',\'inline-block\');
	$(id+\'_close_edit\').css(\'display\',\'none\');
	$(id+\'_save_edit\').css(\'display\',\'none\');
	$(id+"_consult").destroy();
	$(id+"_summary").destroy();
	$.post( "consultation.php", {act :"edit", consult_note:consult_content, summary_note:summary_content, visit_id:visit_id}).done(function(data) {
		location.reload();
	});
}


function append_note(id,appendType) {
	var id= "#"+id;
	// appenType = 0 : Consultation ; appendType = 1 : Summary
	if(appendType == 0){
		$(\'.appendConsultation\').css(\'display\',\'inline-block\');
		$(id+"_consult").summernote({focus: true});
		$(id+\'_append\').css(\'display\',\'none\');
		$(id+\'_close_append\').css(\'display\',\'inline-block\');
		$(id+\'_save_append\').css(\'display\',\'inline-block\');
	}else{
		$(\'.appendSummary\').css(\'display\',\'inline-block\');
		$(id+"_summary").summernote({focus: true});
		$(id+\'_append_sum\').css(\'display\',\'none\');
		$(id+\'_close_append_sum\').css(\'display\',\'inline-block\');
		$(id+\'_save_append_sum\').css(\'display\',\'inline-block\');
	}
}
function save_append(id,saveType) {
	var id= "#"+id;
	// saveType = 0 : Consultation+Summary Edit ; saveType = 1 : Consultation Append ; saveType = 2 : Summary Append
	if(saveType == 0){
		var old_note = $(id+"_append_consult").code(); //save HTML If you need(aHTML: array).
		var new_note = $(id+"_consult").code(); //save HTML If you need(aHTML: array).
		var visit_id = $(id+"_id").val();
		$(id+"_consult").destroy();
		$(id+\'_append\').css(\'display\',\'inline-block\');
		$(id+\'_close_append\').css(\'display\',\'none\');
		$(id+\'_save_append\').css(\'display\',\'none\');
		$(id+\'_consult\').css(\'display\',\'none\');
		$.post( "consultation.php", {act :"append", old_note:old_note, new_note:new_note, visit_id:visit_id, append_type:"clinical"}).done(function( data ) {
			location.reload();
		});
		
	}else if(saveType == 1){
		var old_note = $(id+"_append_summary").code(); //save HTML If you need(aHTML: array).
		var new_note = $(id+"_summary").code(); //save HTML If you need(aHTML: array).
		var visit_id = $(id+"_id").val();
		$(id+"_summary").destroy();
		$(id+\'_append_sum\').css(\'display\',\'inline-block\');
		$(id+\'_close_append_sum\').css(\'display\',\'none\');
		$(id+\'_save_append_sum\').css(\'display\',\'none\');
		$(id+\'_summary\').css(\'display\',\'none\');
		$.post( "consultation.php", {act :"append", old_note:old_note, new_note:new_note, visit_id:visit_id, append_type:"summary"}).done(function(data) {
			location.reload();
		});
	}
}
function close_append(id,saveType) {
	var id= "#"+id;
	// saveType = 0 : Consultation+Summary Edit ; saveType = 1 : Consultation Append ; saveType = 2 : Summary Append
	if(saveType == 0){
		var aHTML = $(id+"_consult").code(); //save HTML If you need(aHTML: array).
		$(id+"_consult").destroy();
		$(id+\'_append\').css(\'display\',\'inline-block\');
		$(id+\'_close_append\').css(\'display\',\'none\');
		$(id+\'_save_append\').css(\'display\',\'none\');
		$(id+\'_consult\').css(\'display\',\'none\');
	}else if(saveType == 1){
		var aHTML = $(id+"_summary").code(); //save HTML If you need(aHTML: array).
		$(id+"_summary").destroy();
		$(id+\'_append_sum\').css(\'display\',\'inline-block\');
		$(id+\'_close_append_sum\').css(\'display\',\'none\');
		$(id+\'_save_append_sum\').css(\'display\',\'none\');
		$(id+\'_summary\').css(\'display\',\'none\');
	}
}

'; ?>

</script>

</body>

</html>