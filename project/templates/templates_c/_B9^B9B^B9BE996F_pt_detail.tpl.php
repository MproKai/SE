<?php /* Smarty version 2.6.19, created on 2017-08-01 09:16:02
         compiled from pt_detail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'pt_detail.tpl', 207, false),)), $this); ?>
<!DOCTYPE html>
<html>
<body>
<div class="wrapper wrapper-content animated fadeInRight ">
	<div class = "row">
		<div class= "col-lg-6">
			<div class="widget gray-bg p-l">
				<h2>
					<span class="fa fa-user m-r-xs"></span><strong>General Information	</strong>					
				</h2>
				<div class = "row">				
					<div class= "col-lg-4">							
						<img alt="image" class="img-circle m-t-md" src="<?php echo $this->_tpl_vars['Patient']['pic']; ?>
" alt="Smiley face" height="128" width="128">
					</div>		
					<div class= "col-lg-8">							
						<ul class="list-unstyled m-t-md">
							<div class = "row">
								<li class = "col-lg-6">
									<span class="fa fa-exclamation-circle m-r-xs"></span>
									<label>NRIC:</label>									
								</li>
								<label class = "col-lg-6"><?php echo $this->_tpl_vars['Patient']['NRIC']; ?>
</label>
							</div>
							<?php if ($this->_tpl_vars['Patient']['ICType'] != ""): ?>
							<div class = "row">
								<li class = "col-lg-6">
									<span class="fa fa-exclamation-circle m-r-xs"></span>
									<label>NRIC Type:</label>									
								</li>
								<label class = "col-lg-6"><?php echo $this->_tpl_vars['Patient']['ICType']; ?>
</label>
							</div>
							<?php endif; ?>
							<div class = "row">
								<li class = "col-lg-6">
									<span class="fa fa-transgender m-r-xs"></span>
									<label>Gender:</label>
								</li>
								<label class = "col-lg-6"><?php echo $this->_tpl_vars['Patient']['Gender']; ?>
</label>
							</div>
							<div class = "row">
								<li class = "col-lg-6">
									<span class="fa fa-birthday-cake m-r-xs"></span>
									<label>DOB:</label>
								</li>
								<label class = "col-lg-6"><?php echo $this->_tpl_vars['Patient']['DateofBirth']; ?>
 (<?php echo $this->_tpl_vars['Patient']['Age']; ?>
)</label>
							</div>
							<?php if ($this->_tpl_vars['Patient']['BloodType'] != ""): ?>
							<div class = "row">
								<li class = "col-lg-6">
									<span class="fa fa-home m-r-xs"></span>
									<label>BloodType:</label>										
								</li>
								<label class = "col-lg-6"><?php echo $this->_tpl_vars['Patient']['BloodType']; ?>
</label>
							</div>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['Patient']['Race'] != ""): ?>
							<div class = "row">
								<li class = "col-lg-6">
									<span class="fa fa-globe m-r-xs"></span>
									<label>Race:</label>
								</li>
								<label class = "col-lg-6"><?php echo $this->_tpl_vars['Patient']['Race']; ?>
</label>
							</div>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['Patient']['language'] != ""): ?>
							<div class = "row">
								<li class = "col-lg-6">
									<span class="fa fa-globe m-r-xs"></span>
									<label>language:</label>
								</li>
								<label class = "col-lg-6"><?php echo $this->_tpl_vars['Patient']['language']; ?>
</label>
							</div>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['Patient']['Occupation'] != ""): ?>
							<div class = "row">
								<li class = "col-lg-6">
									<span class="fa fa-briefcase m-r-xs"></span>
									<label>Occupation:</label>										
								</li>
								<label class = "col-lg-6"><?php echo $this->_tpl_vars['Patient']['Occupation']; ?>
</label>
							</div>	
							<?php endif; ?>	
							<?php if ($this->_tpl_vars['Patient']['MaritalStatus'] != ""): ?>
							<div class = "row">
								<li class = "col-lg-6">
									<span class="fa fa-heart m-r-xs"></span>
									<label>Marital Status:</label>										
								</li>
								<label class = "col-lg-6"><?php echo $this->_tpl_vars['Patient']['MaritalStatus']; ?>
</label>
							</div>	
							<?php endif; ?>														
						</ul>
					</div>
				</div>											
			</div>
			<div class="widget gray-bg p-l">
				<h2>
					<span class="fa fa-phone m-r-xs"></span><strong>Contact Information</strong>
				</h2>
				<ul class="list-unstyled m-t-md">
					<?php if ($this->_tpl_vars['Patient']['OfficeTel'] != ""): ?>
					<div class = "row">
						<li class = "col-lg-4">
							<span class="fa fa-mobile m-r-xs"></span>
							<label>Mobile:</label>							
						</li>
						<label class = "col-lg-8"><?php echo $this->_tpl_vars['Patient']['OfficeTel']; ?>
</label>
					</div>
					<?php endif; ?>						
					<?php if ($this->_tpl_vars['Patient']['HomeTel'] != ""): ?>
					<div class = "row">
						<li class = "col-lg-4">
							<span class="fa fa-tty m-r-xs"></span>
							<label>Home Tel:</label>								
						</li>
						<label class = "col-lg-8"><?php echo $this->_tpl_vars['Patient']['HomeTel']; ?>
</label>
					</div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['Patient']['email'] != ""): ?>
					<div class = "row">
						<li class = "col-lg-4">
							<span class="fa fa-envelope m-r-xs"></span>
							<label>Email:</label>
						</li>
						<label class = "col-lg-8"><?php echo $this->_tpl_vars['Patient']['email']; ?>
</label>
					</div>
					<?php endif; ?>	
					<?php if ($this->_tpl_vars['Patient']['ResidentialCountryCode'] != "" || $this->_tpl_vars['Patient']['ResidentialAddress'] != "" || $this->_tpl_vars['Patient']['ResidentialCity'] != "" || $this->_tpl_vars['Patient']['ResidentialCountry'] != ""): ?>				
					<div class = "row">
						<li class = "col-lg-4">
							<span class="fa fa-home m-r-xs"></span>
							<label>Residential:</label>
						</li>
						<label class = "col-lg-8"><?php echo $this->_tpl_vars['Patient']['ResidentialCountryCode']; ?>
 <?php echo $this->_tpl_vars['Patient']['ResidentialAddress']; ?>
 <?php echo $this->_tpl_vars['Patient']['ResidentialCity']; ?>
 <?php echo $this->_tpl_vars['Patient']['ResidentialCountry']; ?>
</label>
					</div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['Patient']['MailingCountryCode'] != "" || $this->_tpl_vars['Patient']['MailingAddress'] != "" || $this->_tpl_vars['Patient']['MailingCity'] != "" || $this->_tpl_vars['Patient']['MailingCountry'] != ""): ?>				
					<div class = "row">
						<li class = "col-lg-4">
							<span class="fa fa-paper-plane-o m-r-xs"></span>
							<label>Mailing:</label>								
						</li>
						<label class = "col-lg-8"><?php echo $this->_tpl_vars['Patient']['MailingCountryCode']; ?>
 <?php echo $this->_tpl_vars['Patient']['MailingAddress']; ?>
 <?php echo $this->_tpl_vars['Patient']['MailingCity']; ?>
 <?php echo $this->_tpl_vars['Patient']['MailingCountry']; ?>
 </label>
					</div>
					<?php endif; ?>
				</ul>
			</div>
		</div>
		<div class= "col-lg-6">
			<?php if (Count ( $this->_tpl_vars['PatientEmergnecyContactInfo'] ) > 0): ?>
			<div class="widget lazur-bg p-xl">
				<h2>
					<span class="fa fa-users m-r-xs"></span><strong>Emergnecy Contact Information</strong>
				</h2>
				<div class="hr-line-dashed"></div>
				<?php $_from = $this->_tpl_vars['PatientEmergnecyContactInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['contact']):
?>
				<div class="row"><div class = "col-lg-12"><strong><?php echo $this->_tpl_vars['contact']['Relations']; ?>
&nbsp;&nbsp;</strong><strong><?php echo $this->_tpl_vars['contact']['PersonofContact']; ?>
<?php echo $this->_tpl_vars['contact']['RefPatientID']; ?>
</strong></div></div>
				<?php if ($this->_tpl_vars['contact']['Email'] != ""): ?><div class="row"><div class = "col-lg-12"><strong>Email | </strong><?php echo $this->_tpl_vars['contact']['Email']; ?>
</div></div><?php endif; ?>
				<?php if ($this->_tpl_vars['contact']['ContactNumber1'] != ""): ?><div class="row"><div class = "col-lg-12"><strong>Mobile | </strong><?php echo $this->_tpl_vars['contact']['ContactNumber1']; ?>
</div></div><?php endif; ?>
				<?php if ($this->_tpl_vars['contact']['ContactNumber2'] != ""): ?><div class="row"><div class = "col-lg-12"><strong>Home | </strong><?php echo $this->_tpl_vars['contact']['ContactNumber2']; ?>
</div></div><?php endif; ?>
				<div class="hr-line-dashed"></div>
				<?php endforeach; endif; unset($_from); ?>								
			</div>					
			<?php endif; ?>
            <?php if (Count ( $this->_tpl_vars['PatientAllergyItem'] ) > 0): ?>
            <div class="widget red-bg p-l">
                <h2>
                    <span class="fa fa-exclamation-triangle m-r-xs"></span><strong>Allergy Food & Drug</strong>						
                </h2>
                <?php $_from = $this->_tpl_vars['PatientAllergyItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['allergyItem']):
?><li><?php echo $this->_tpl_vars['allergyItem']['NameofFoodandDrugs']; ?>
</li><?php endforeach; endif; unset($_from); ?>
            </div>				
            <?php endif; ?>
            <div class="widget p-l note">
						<h2>
							<span class="fa fa-pencil-square-o m-r-xs"></span><strong>Patient Note</strong>
						</h2>	
						<div>
							<div class="form-group">
								<textarea id = "patient_note" class="form-control" rows="5" placeholder="Patient Note..."><?php echo $this->_tpl_vars['Patient']['Remark']; ?>
</textarea>	.
								<button onclick = "save_patient_note()" class="btn btn-primary btn-sm pull-right m-t-n-s">
								<i class="fa fa-floppy-o"></i>&nbsp;&nbsp;<strong>Save</strong>
							</button>		
							</div>																				
						</div>																														
					</div>
			<?php if ($this->_tpl_vars['Patient']['CompanyName'] != ""): ?>
			<div class="widget navy-bg p-xl">
				<h2>
					<span class="fa fa-building m-r-xs"></span><strong>Company - <?php echo $this->_tpl_vars['Patient']['CompanyName']; ?>
</strong>
				</h2>												
				<?php if (count ( $this->_tpl_vars['PatientPlanProjectInfo'] ) > 0): ?>
				<ul class="list-unstyled m-t-md">	
					<div class = "row">
						<li class = "col-lg-1"><strong>Type</strong></li>
						<li class = "col-lg-2"><strong>Copayer</strong></li>
						<li class = "col-lg-5"><strong>Plan/Project/Surveillance</strong></li>
						<li class = "col-lg-2 text-right"><strong>Copayment</strong></li>
						<li class = "col-lg-2 text-right"><strong>Cap</strong></li>
						<!--li class = "col-lg-1"><strong>Agnet</strong></li-->
					</div>	
					<div class="hr-line-dashed"></div>
					<?php $_from = $this->_tpl_vars['PatientPlanProjectInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['info']):
?>
					<div class = "row">
						<li class = "col-lg-1"><?php echo $this->_tpl_vars['info']['pType']; ?>
</li>
						<li class = "col-lg-2"><?php echo $this->_tpl_vars['info']['CopayerName']; ?>
</li>
						<li class = "col-lg-5"><?php echo $this->_tpl_vars['info']['vName']; ?>
</li>
						<li class = "col-lg-2 text-right"><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['CoverageAmount'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</li>							
						<li class = "col-lg-2 text-right"><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['CapAmount'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</li>
						<!--li class = "col-lg-1"><?php echo $this->_tpl_vars['info']['AgentName']; ?>
</li-->
					</div>
					<?php endforeach; endif; unset($_from); ?>
				</ul>					
				<?php endif; ?>		
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>

	

<script>
<?php echo '

function save_patient_note(){
	$.get( "pt_patient.php", {act :"save_patient_note", patient_note:$("#patient_note").val(),patient_id:"'; ?>
<?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
<?php echo '"}).done(function( data ) {
		window.location.reload();
	});
}


'; ?>

</script>

</body>
</html>



