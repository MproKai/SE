<?php /* Smarty version 2.6.19, created on 2017-08-01 12:13:20
         compiled from pt_referral_letter_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'pt_referral_letter_list.tpl', 30, false),)), $this); ?>
<div class="wrapper wrapper-content animated fadeInRight">
	<div>
		<h2><strong>Referral Letter</strong></h2>
	</div>	
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				 <div class="ibox-title">
					<div class="ibox-tools">
						<button type="button" id="addNewLetter" class="btn btn-primary btn-s addLetter"><i class="fa fa-plus"></i> Add</button> 
						<button id="closeAddLetter" type="button" class="btn btn-primary btn-s pull-right closeEditLetter" onclick=click_close(<?php echo $this->_tpl_vars['letter']['ser_no']; ?>
)><i class="fa fa-times"></i> Cancel</button>
						<button type="button" id="saveNewLetter" class="btn btn-primary btn-s saveLetter"><i class="fa fa fa-floppy-o"></i> Save</button>   
					</div>
				</div>
				<div id="addLetterBlock" class="addLetterBlock space-bottom">
					<!--start Letter Info Block-->
					<form role="form" class="form-inline">
						<div class="form-group" style="margin-right:20px;">
							<label>Referral Doctor&nbsp;&nbsp;:&nbsp;&nbsp;</label> 
							<select id="doctor_id" class="form-control doctor">
								<?php $_from = $this->_tpl_vars['ReferralDocotrList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['referral_doctor']):
?>
								<option value=<?php echo $this->_tpl_vars['referral_doctor']['id']; ?>
><?php echo $this->_tpl_vars['referral_doctor']['text']; ?>
</option>
								<?php endforeach; endif; unset($_from); ?>
							</select>
						</div>
						<div class="form-group" style="margin-right:20px;">
							<label>Select Visit&nbsp;&nbsp;:&nbsp;&nbsp;</label> 
							<select id="visit_id" class="form-control visitDate">
								<?php $_from = $this->_tpl_vars['VisitList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['visit']):
?>
								<option value=<?php echo $this->_tpl_vars['visit']['id']; ?>
 name=<?php echo $this->_tpl_vars['visit']['text']; ?>
><?php echo ((is_array($_tmp=$this->_tpl_vars['visit']['text'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @smarty_datetime_fmt) : smarty_modifier_date_format($_tmp, @smarty_datetime_fmt)); ?>
</option>
								<?php endforeach; endif; unset($_from); ?>
							</select>
						</div>
						<div class="form-group">
							<label>Template&nbsp;&nbsp;:&nbsp;&nbsp;</label> 
							<select id="template_id" class="form-control template" onchange='insert_tempplate("new_content")'>
								<option value="-1"></option>
								<?php $_from = $this->_tpl_vars['TemplateList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['template']):
?>
								<option value=<?php echo $this->_tpl_vars['template']['id']; ?>
><?php echo $this->_tpl_vars['template']['text']; ?>
</option>
								<?php endforeach; endif; unset($_from); ?>
							</select>
						</div>
						<div class="clear space-top"></div>
						<div class="form-group letterSub">
							<label>Subject&nbsp;&nbsp;:&nbsp;&nbsp;</label> 
							<input type="text" id="new_subject" class="form-control subject"/>
						</div>
					</form>
						<div class="clear space-top"></div>
					<!--end Letter Info Block-->
					<!--start summernote-->
					<div id="new_content" class="summernote newLetter">
						
					</div>
					<!--end  summernote-->
				</div><!-- end addLetterBlock -->
				<div class="letterHistory">
					<?php $_from = $this->_tpl_vars['ReferralLetter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['letter']):
?>
					<div class="mail-box-header">
						<div class="pull-left tooltip-demo float-e-margins">
							<h5>
								<span class="pull-left font-noraml" style="margin-top:-10px;"><i class="fa fa-clock-o"></i> <?php echo ((is_array($_tmp=$this->_tpl_vars['letter']['createDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @smarty_datetime_fmt) : smarty_modifier_date_format($_tmp, @smarty_datetime_fmt)); ?>
</span>
							</h5>
						</div>
						
						<div class="pull-right tooltip-demo float-e-margins letterTool">
							<button id=<?php echo $this->_tpl_vars['letter']['ser_no']; ?>
 type="button" class="btn btn-primary btn-xs pull-right editLetter" onclick=click_edit(<?php echo $this->_tpl_vars['letter']['ser_no']; ?>
)><i class="fa fa-pencil-square-o"></i> Edit</button>
							<button id=<?php echo $this->_tpl_vars['letter']['ser_no']; ?>
_close type="button" class="btn btn-primary btn-xs pull-right closeEditLetter" onclick=click_close(<?php echo $this->_tpl_vars['letter']['ser_no']; ?>
)><i class="fa fa-times"></i> Cancel</button>
							<button id=<?php echo $this->_tpl_vars['letter']['ser_no']; ?>
_save type="button" class="btn btn-primary btn-xs pull-right saveEditLetter" onclick=click_save(<?php echo $this->_tpl_vars['letter']['ser_no']; ?>
)><i class="fa fa-floppy-o"></i> Save</button> 
						</div>
						<div class="mail-tools tooltip-demo m-t-md">

							<div id=<?php echo $this->_tpl_vars['letter']['ser_no']; ?>
_letter_info>
								<h3><span class="font-noraml">To : </span><?php echo $this->_tpl_vars['letter']['ReferralDoctorName']; ?>
</h3>
								<h4><span class="font-noraml">Subject : </span><?php echo $this->_tpl_vars['letter']['Subject']; ?>
</h4>
							</div>
							<!--start Letter Info Block-->
							<div id=<?php echo $this->_tpl_vars['letter']['ser_no']; ?>
_info class="editLetterInfo">
								<form role="form" class="form-inline">
									<div class="form-group" style="margin-right:20px;">
										<label>Referral Doctor&nbsp;&nbsp;:&nbsp;&nbsp;</label> 
										<select id=<?php echo $this->_tpl_vars['letter']['ser_no']; ?>
_doctor class="form-control doctor">
											<?php $_from = $this->_tpl_vars['ReferralDocotrList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['referral_doctor']):
?>
											<option value=<?php echo $this->_tpl_vars['referral_doctor']['id']; ?>
 <?php if ($this->_tpl_vars['referral_doctor']['id'] == $this->_tpl_vars['letter']['ReferralDoctorID']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['referral_doctor']['text']; ?>
</option>
											<?php endforeach; endif; unset($_from); ?>
										</select>
									</div>
									<div class="form-group" style="margin-right:20px;">
										<label>Select Visit&nbsp;&nbsp;:&nbsp;&nbsp;</label> 
										<select id=<?php echo $this->_tpl_vars['letter']['ser_no']; ?>
_visit class="form-control visitDate">
											<?php $_from = $this->_tpl_vars['VisitList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['visit']):
?>
											<option id= <?php echo $this->_tpl_vars['letter']['ser_no']; ?>
_visit_date value=<?php echo $this->_tpl_vars['visit']['id']; ?>
 <?php if ($this->_tpl_vars['visit']['id'] == $this->_tpl_vars['letter']['VisitID']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['visit']['text'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @smarty_datetime_fmt) : smarty_modifier_date_format($_tmp, @smarty_datetime_fmt)); ?>
</option>
											<?php endforeach; endif; unset($_from); ?>
										</select>
									</div>
									<div class="form-group">
										<label>Template&nbsp;&nbsp;:&nbsp;&nbsp;</label> 
										<select id=<?php echo $this->_tpl_vars['letter']['ser_no']; ?>
_template onchange='insert_tempplate(<?php echo $this->_tpl_vars['letter']['ser_no']; ?>
)' class="form-control template">
											<option value="-1"></option>
											<?php $_from = $this->_tpl_vars['TemplateList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['template']):
?>
											<option value=<?php echo $this->_tpl_vars['template']['id']; ?>
><?php echo $this->_tpl_vars['template']['text']; ?>
</option>
											<?php endforeach; endif; unset($_from); ?>
										</select>
									</div>
									<div class="clear space-top"></div>
									<div class="form-group letterSub">
										<label>Subject&nbsp;&nbsp;:&nbsp;&nbsp;</label> 
										<input id=<?php echo $this->_tpl_vars['letter']['ser_no']; ?>
_subject type="text" class="form-control subject" value="<?php echo $this->_tpl_vars['letter']['Subject']; ?>
">
									</div>
									<input hidden="hidden" id=<?php echo $this->_tpl_vars['letter']['ser_no']; ?>
_id type="text" value=<?php echo $this->_tpl_vars['letter']['vID']; ?>
 />
								</form>
							</div>
							<!--end Letter Info Block-->
						</div>
					</div><!-- end mail-box-header -->
					<div class="mail-box">
						<div class="mail-body">
							<div  id=<?php echo $this->_tpl_vars['letter']['ser_no']; ?>
_content class="summernote letterContent wordBreak" style="color:#000000;background-color:transparent;font-family:Calibri;font-size:11pt;font-weight:normal;font-style:normal;">
								<?php echo $this->_tpl_vars['letter']['HtmlText']; ?>

							</div>
						</div>
					</div><!-- end mail-box -->
					<?php endforeach; endif; unset($_from); ?>
				</div><!-- end letterHistory -->
			</div><!-- end ibox -->
		</div><!-- end col-lg-12 -->
	</div>
</div>
    
</div>

<script>
<?php echo '

var org_content;
var org_subject;

$(document).ready(function(){	

	$(\'.summernote.newLetter\').summernote();
	$(\'.addLetterBlock\').css(\'display\',\'none\');//如果有letter紀錄的話，用這個
	//$(\'.addLetterBlock\').css(\'display\',\'block\');//如果「沒」有letter紀錄的話，用這個	
	$(\'.saveLetter\').css(\'display\',\'none\');
	$(\'.saveEditLetter\').css(\'display\',\'none\');
	$(\'.editLetterInfo\').css(\'display\',\'none\');
	$(\'.closeEditLetter\').css(\'display\',\'none\');
	
	'; ?>

	<?php if (empty ( $this->_tpl_vars['ReferralLetter'] )): ?>
	<?php echo '
	$(\'#addNewLetter\').click();
	'; ?>

	<?php endif; ?>
	<?php echo '
	
});

$(\'#addNewLetter\').click(function() {
	$(\'#addNewLetter\').css(\'display\',\'none\');
	$(\'#saveNewLetter\').css(\'display\',\'inline-block\');
	$(\'#closeAddLetter\').css(\'display\',\'inline-block\');
	$(\'#addLetterBlock\').fadeToggle( "slow", "linear" );
});
$(\'#saveNewLetter\').click(function() {
	$(\'#addNewLetter\').css(\'display\',\'inline-block\');
	$(\'#saveNewLetter\').css(\'display\',\'none\');
	$(\'#closeAddLetter\').css(\'display\',\'none\');
	$(\'#addLetterBlock\' ).fadeToggle( "slow", "linear" );
	var doctor_id = $("#doctor_id").val();
	var visit_id = $("#visit_id").val();
	var subject = $("#new_subject").val();
	var letter_id = "";
	var content = $("#new_content").code();
	$.post( "pt_referral_letter_list.php", {act :"save", content:content, doctor_id:doctor_id, visit_id:visit_id, subject:subject,letter_id:letter_id}).done(function( data ) {
		location.reload();
	});
	
});

$(\'#closeAddLetter\').click(function() {
	$(\'#addNewLetter\').css(\'display\',\'inline-block\');
	$(\'#saveNewLetter\').css(\'display\',\'none\');
	$(\'#closeAddLetter\').css(\'display\',\'none\');
	$(\'#addLetterBlock\' ).fadeToggle( "slow", "linear" );
});

function click_edit(id){
	var id = "#"+id;
	var edit_id = id;
	var save_id = id+"_save";
	var info_id = id+"_info";
	var close_id = id+"_close";
	var letter_info_id = id+"_letter_info";
	var content_id = id+"_content";
	org_content = $(content_id).code();
	org_subject = $(id+"_subject").val();
	$(content_id).summernote({focus: true});
	$(edit_id).css(\'display\',\'none\');
	$(save_id).css(\'display\',\'inline-block\');
	$(close_id).css(\'display\',\'inline-block\');
	$(info_id).css(\'display\',\'block\');
	$(letter_info_id).css(\'display\',\'none\');
};

function click_save(id){
	var id = "#"+id;
	var edit_id = id;
	var save_id = id+"_save";
	var info_id = id+"_info";
	var close_id = id+"_close";
	var letter_info_id = id+"_letter_info";
	var content_id = id+"_content";
	var aHTML = $(content_id).code(); //save HTML If you need(aHTML: array).
	$(edit_id).css(\'display\',\'inline-block\');
	$(save_id).css(\'display\',\'none\');
	$(info_id).css(\'display\',\'none\');
	$(close_id).css(\'display\',\'none\');
	$(letter_info_id).css(\'display\',\'inline-block\');
	var doctor_id = $(id+"_doctor").val();
	var visit_id = $(id+"_visit").val();
	var subject = $(id+"_subject").val();
	var letter_id = $(id+"_id").val();
	console.log(letter_id);
	$.post( "pt_referral_letter_list.php", {act :"save", content:aHTML, doctor_id:doctor_id, visit_id:visit_id, letter_id:letter_id,subject:subject}).done(function( data ) {
		location.reload();
	});
	$(content_id).destroy();
}


function click_close(id){
	var id = "#"+id;
	var edit_id = id;
	var save_id = id+"_save";
	var info_id = id+"_info";
	var close_id = id+"_close";
	var letter_info_id = id+"_letter_info";
	var content_id = id+"_content";
	var aHTML = $(content_id).code(); //save HTML If you need(aHTML: array).
	var letter_id = $(id+"_id").val();
	$(content_id).destroy();
	$(content_id).html(org_content);
	$(id+"_subject").val(org_subject);
	$(edit_id).css(\'display\',\'inline-block\');
	$(save_id).css(\'display\',\'none\');
	$(info_id).css(\'display\',\'none\');
	$(close_id).css(\'display\',\'none\');
	$(letter_info_id).css(\'display\',\'inline-block\');
}

function insert_tempplate(id){
	
	if(id == "new_content"){
		var content_id = "#new_content";
		var template_id = $(\'#template_id\').val();
	}else{
		var id = "#"+id;
		var content_id = id+"_content";
		var template_id = $(id+"_template").val();
	}
	if(template_id!="-1"){
			$selectedValue = $(\'#visit_id  option:selected\').text();
			$.post(\'pt_referral_letter_list.php\', 
				{act:\'json_getTemplateContent\',
				visit_date:$selectedValue,
				template_id:template_id,
				patient_id:"'; ?>
<?php echo $this->_tpl_vars['patient_id']; ?>
<?php echo '"}
				).done(function(data){
			$(content_id).summernote().code(data);
		});
	}

}
'; ?>

</script>
