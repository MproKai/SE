<?php /* Smarty version 2.6.19, created on 2017-08-08 02:18:04
         compiled from pt_detail_editor.tpl */ ?>
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
<!-- Tag -->
<script src="js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
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
            <?php if (empty ( $this->_tpl_vars['Patient']['PatientID'] )): ?>
			<h2 class="col-lg-12 hideInMobile">&nbsp;&nbsp;Add New Patient &nbsp;&nbsp;</h2>
            <?php else: ?>
            <h2 class="col-lg-12 hideInMobile">&nbsp;&nbsp;Edit Patient &nbsp;&nbsp;<?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
</h2>
            <?php endif; ?>
		</div>
		<div class="wrapper wrapper-content animated fadeInRight">
            <form id="registration" action="pt_patient.php" method="post" enctype="multipart/form-data">
    			<div class="row">
    				<div class = "col-lg-12">
                    	<div class="row">
    						<div class = "col-lg-6">
                                <div class="widget">
                                	<h2><strong>General Information</strong></h2>
                                <input type="text" value="<?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
" name="PatientID" hidden=""> 
                                <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-6">
                                            <label class="control-label rf-label">Title</label>
                                            <select id = "cb_title" name="title" class="form-control" type="text">
                                                <?php $_from = $this->_tpl_vars['title']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['foo']):
?>
                                                <option value=<?php echo $this->_tpl_vars['foo']; ?>
><?php echo $this->_tpl_vars['foo']; ?>
</option>
                                                <?php endforeach; endif; unset($_from); ?>
                                            </select>
                                        </div>
                                      <div class="col-lg-6">
                                            <label class="control-label rf-label">Patient Name</label>
                                            <input id="tb_PatientName" type="text" class="form-control" value="<?php echo $this->_tpl_vars['Patient']['PatientName']; ?>
" name="PatientName" required>
                                        </div>                                		
                                    </div>                                	                               	
                                </div>   
                                 <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-6">
                                            <label class="control-label rf-label">NRIC</label>
                                            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['Patient']['NRIC']; ?>
" name="NRIC" required>
                                        </div>  
                                      <div class="col-lg-6">
                                            <label class="control-label rf-label">IC Type</label>
                                            <select id = "cb_ictype" name="ICType" class="form-control" type="text">
                                                <?php $_from = $this->_tpl_vars['ICType']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ICType']):
?>
                                                <option><?php echo $this->_tpl_vars['ICType']; ?>
</option>
                                                <?php endforeach; endif; unset($_from); ?>
                                            </select>                    			
                                        </div>                        		                         		                                              		
                                    </div>                                	                               	
                                </div>                               
                                <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-6">
                                            <label class="control-label rf-label">Date of Birth</label>
                                            <input id="date_selector" name = "DateofBirth" type="text" class="form-control" required />	        				
                                        </div>
                                      <div class="col-lg-3">
                                            <label class="control-label rf-label">Gender</label>
                                            <select id ="tb_Gender" name="Gender" class="form-control" type="text">
                                                <?php $_from = $this->_tpl_vars['gender']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Gender']):
?>
                                                <option value=<?php echo $this->_tpl_vars['Gender']; ?>
><?php echo $this->_tpl_vars['Gender']; ?>
</option>
                                                <?php endforeach; endif; unset($_from); ?>
                                            </select>
                                        </div> 
                                      <div class="col-lg-3">
                                            <label  class="control-label rf-label">Status</label>
                                            <select id="cb_status" name="status" class="form-control" type="text">
                                                <?php $_from = $this->_tpl_vars['status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['status']):
?>
                                                <option value=<?php echo $this->_tpl_vars['status']; ?>
><?php echo $this->_tpl_vars['status']; ?>
</option>
                                                <?php endforeach; endif; unset($_from); ?>
                                            </select>
                                        </div> 
                                       
                                    </div>                                   										         
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                    	 <div class="col-lg-4">
                                            <label>Marital Status</label>
                                            <select id="cb_MaritalStatus" name="MaritalStatus" class="form-control" type="text">
                                                <?php $_from = $this->_tpl_vars['maritalStatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['foo']):
?>
                                                <option value=<?php echo $this->_tpl_vars['foo']; ?>
><?php echo $this->_tpl_vars['foo']; ?>
</option>
                                                <?php endforeach; endif; unset($_from); ?>
                                            </select>
                                        </div> 
                                        <div class="col-lg-4">
                                            <label class="control-label rf-label">Nationality</label>
                                            <select id = "cb_nationality"  name="PlaceofBirthorNation" class="form-control" type="text">
                                                <?php $_from = $this->_tpl_vars['nationality']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nationality']):
?>
                                                <option value=<?php echo $this->_tpl_vars['nationality']['id']; ?>
><?php echo $this->_tpl_vars['nationality']['text']; ?>
</option>
                                                <?php endforeach; endif; unset($_from); ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="control-label rf-label">Race</label>
                                            <select id = "cb_race" name="Race" class="form-control" type="text" >
                                                <?php $_from = $this->_tpl_vars['race']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['race']):
?>
                                                <option value=<?php echo $this->_tpl_vars['race']['id']; ?>
><?php echo $this->_tpl_vars['race']['text']; ?>
</option>
                                                <?php endforeach; endif; unset($_from); ?>
                                            </select>
                                        </div> 
                                                                         		
                                    </div> 
                                                                   	                               	
                                </div> 
                                <div class="form-group">
                                    <div class="row">
                                    	<div class="col-lg-12">
                                            <label class="control-label rf-label">Occupation</label>
                                            <input type="text" class="form-control" name="Occupation" value="<?php echo $this->_tpl_vars['Patient']['Occupation']; ?>
">
                                        </div>
                                    </div>
                                </div>           
                            	</div>
                            </div>
                            <div class = "col-lg-6">
                            	<div class="widget">     						            			
    								<h2><strong>Contact Information</strong></h2>
    	                <div class="form-group">
            		   		<label class="control-label rf-label">Residential Address</label>
                    		<div class="row fix_margin_bottom">
                       		  <div class="col-lg-4">	                            		
                            		<input id="ResidentialCountryCode" name="ResidentialCountryCode" type="text" class="form-control" placeholder="Postal Code" value="<?php echo $this->_tpl_vars['Patient']['ResidentialCountryCode']; ?>
">
                        		</div>
                       		  <div class="col-lg-8">
                            		<input id="ResidentialAddress" name="ResidentialAddress" type="text" class="form-control" placeholder="Address" value="<?php echo $this->_tpl_vars['Patient']['ResidentialAddress']; ?>
">
                        		</div>   
                            </div>
                            <div class="row">     
                       		  <div class="col-lg-4">
                            		<input id="ResidentialCity" name="ResidentialCity" type="text" class="form-control" placeholder="City" value="<?php echo $this->_tpl_vars['Patient']['ResidentialCity']; ?>
">
                        		</div>   
                       		  <div class="col-lg-5">
                                    <select id = "cb_ResidentialCountry" name="ResidentialCountry" class="form-control" type="text">
                                        <?php $_from = $this->_tpl_vars['Country']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['foo']):
?>
                                        <option value=<?php echo $this->_tpl_vars['foo']['id']; ?>
><?php echo $this->_tpl_vars['foo']['text']; ?>
</option>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </select>
                        		</div>                           		
                    		</div>                                	                               	
                		</div>  
                		<div class="form-group">
            		   		<label class="control-label rf-label">Mailing Address</label>
                    		<div class="row fix_margin_bottom">
                       		  <div class="col-lg-4">	                            		
                            		<input id="MailingCountryCode" name="MailingCountryCode" type="text" class="form-control" placeholder="Postal Code" value="<?php echo $this->_tpl_vars['Patient']['MailingCountryCode']; ?>
">
                        		</div>
                       		  <div class="col-lg-8">
                            		<input id="MailingAddress" name="MailingAddress" type="text" class="form-control" placeholder="Address" value="<?php echo $this->_tpl_vars['Patient']['MailingAddress']; ?>
">
                        		</div>   
                            </div>
                            <div class="row">     
                       		  <div class="col-lg-4">
                            		<input id = "MailingCity" name="MailingCity" type="text" class="form-control" placeholder="City" value="<?php echo $this->_tpl_vars['Patient']['MailingCity']; ?>
">
                        		</div>   
                       		  <div class="col-lg-5">
                                    <select id = "cb_MailingCountry" name="MailingCountry" class="form-control" type="text">
                                        <?php $_from = $this->_tpl_vars['Country']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['foo']):
?>
                                        <option value=<?php echo $this->_tpl_vars['foo']['id']; ?>
><?php echo $this->_tpl_vars['foo']['text']; ?>
</option>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </select>
                                    
                        		</div>   
                       		  <div class="col-lg-3 fix_padding_left">
                					<button type="button" class="btn btn btn-primary" onclick="copy_address()"> <i class="fa fa-clone"></i><strong>&nbsp;&nbsp;Same As</strong></button>
                				</div>                          		
                			</div>                                	                               	
                		</div>
                        <div class="form-group">
                            <div class="row">
                              <div class="col-lg-6">
                                    <label class="control-label rf-label">Moble</label>
                                    <input type="text" class="form-control" name = "OfficeTel" placeholder="" value="<?php echo $this->_tpl_vars['Patient']['OfficeTel']; ?>
">                            
                                </div>     
                              <div class="col-lg-6">
                                    <label class="control-label rf-label">Telephone</label>
                                    <input type="text" class="form-control" name="HomeTel" placeholder="" value="<?php echo $this->_tpl_vars['Patient']['HomeTel']; ?>
">                             
                                </div>                                     
                            </div>                                                                  
                        </div>
                        <div class="form-group">
                            <div class="row">
                              <div class="col-lg-12">
                                    <label class="control-label rf-label">Email</label>
                                    <input type="text" class="form-control" name = "email" placeholder="12345@zksoft.com" value="<?php echo $this->_tpl_vars['Patient']['email']; ?>
">          
                                </div>                                      
                            </div>                                                                  
                        </div>   
                        		</div>
                            </div>
                        </div>           
                        <div class="row">
                            <div class="col-lg-6">  
                                <div class="widget">
                                    <h2><strong>Patient's Note</strong></h2>
                                    <div class="form-group">
                                        <div class="row"> 
                                            <div class="col-lg-12">
                                                <textarea id="Remark" class="form-control" rows="2" name = "Remark" placeholder="Patient Note..."><?php echo $this->_tpl_vars['Patient']['Remark']; ?>
</textarea>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>     
                            <div class="col-lg-6">                                    
                            	<div class="widget">
                                	<h2><strong>Allergy</strong></h2> 
                                    <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">                        
                                                    <input id = "allery" class="tagsinput form-control" type="text" name = "allery" value="<?php echo $this->_tpl_vars['PatientAllergy']; ?>
" style="display:none;"">
                                                    <span class="help-block m-b-none">Press Enter to input put mutipule items...</span>
                                                </div>
                                        </div>
                                    </div>
                    			</div>
                        	</div>  
                       </div> 
                       <div class="row">                              
                            <div class="col-lg-12"> 
                            	<div class="widget">
                            		<h2><strong>Emergency Contact Information</strong></h2>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2">      
                                            <label class="control-label">Person of Contact</label>                                
                                            <input type="text" name="ser_no1" hidden="" value="<?php echo $this->_tpl_vars['EmergencyContact'][0]['ser_no']; ?>
">
                                            <input type="text" class="form-control" name="PersonOfContact1" value="<?php echo $this->_tpl_vars['EmergencyContact'][0]['PersonofContact']; ?>
">
                                        </div>
                                        <div class="col-lg-2">                                      
                                            <label class="control-label rf-label">Relation</label>
                                            <select id = "cb_emergencyContactRelation1" class="form-control" type="text" name="relation1">
                                                <?php $_from = $this->_tpl_vars['emergencyContactRelation']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['relation']):
?>
                                                <option value=<?php echo $this->_tpl_vars['relation']; ?>
><?php echo $this->_tpl_vars['relation']; ?>
</option>
                                                <?php endforeach; endif; unset($_from); ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-2"> 
                                            <label class="control-label rf-label">Mobile</label>                                       
                                            <input type="text" class="form-control" name="emg_Mobile1" value="<?php echo $this->_tpl_vars['EmergencyContact'][0]['ContactNumber1']; ?>
">
                                        </div>
                                        <div class="col-lg-3"> 
                                            <label class="control-label rf-label">Home Tel</label>                                  
                                            <input type="text" class="form-control" name="emg_Number1" value="<?php echo $this->_tpl_vars['EmergencyContact'][0]['ContactNumber2']; ?>
">
                                        </div>
                                        <div class="col-lg-3">    
                                            <label class="control-label rf-label">Email</label>                                   
                                            <input type="text" class="form-control email" name="emg_email1" value="<?php echo $this->_tpl_vars['EmergencyContact'][0]['Email']; ?>
">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2">     
                                            <input type="text" name="ser_no2"  hidden="" value="<?php echo $this->_tpl_vars['EmergencyContact'][1]['ser_no']; ?>
">                                 
                                            <input type="text" class="form-control" name="PersonOfContact2" value="<?php echo $this->_tpl_vars['EmergencyContact'][1]['PersonofContact']; ?>
">
                                        </div>
                                        <div class="col-lg-2">                                      
                                            <select id = "cb_emergencyContactRelation2" class="form-control" type="text" name="relation2">
                                                <?php $_from = $this->_tpl_vars['emergencyContactRelation']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['relation']):
?>
                                                <option value=<?php echo $this->_tpl_vars['relation']; ?>
><?php echo $this->_tpl_vars['relation']; ?>
</option>
                                                <?php endforeach; endif; unset($_from); ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-2">                                      
                                            <input type="text" class="form-control" name="emg_Mobile2" value="<?php echo $this->_tpl_vars['EmergencyContact'][1]['ContactNumber1']; ?>
">
                                        </div>
                                        <div class="col-lg-3">                                      
                                            <input type="text" class="form-control" name="emg_Number2" value="<?php echo $this->_tpl_vars['EmergencyContact'][1]['ContactNumber2']; ?>
">
                                        </div>
                                        <div class="col-lg-3">                                      
                                            <input type="text" class="form-control" name="emg_email2" value="<?php echo $this->_tpl_vars['EmergencyContact'][1]['Email']; ?>
">
                                        </div>
                                    </div>
                                </div>
                                </div>   
                            </div>
                        </div>                                                                         	
                        <!--h2>Additional Information</h2> 	
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-2">
                                    <label class="control-label">Allow Marketing By</label>
                                </div>
                                <div class="col-lg-10">
                                    <div>
                                        <label class="checkbox-inline"> 
                                            <input type="checkbox" name="allowMarketingSelections[]" value="IsAllowMKSMS" id = "allowSMS"> SMS 
                                        </label> 
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="allowMarketingSelections[]" value="IsAllowMKEmail" id = "allowEmail"> Email 
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="allowMarketingSelections[]" value="IsAllowMKPhone" id = "allowPhone"> Phone 
                                        </label>
                                    </div>
                                </div>                            
                            </div>                      
                        </div>
                        <div class="hr-line-dashed"></div-->  
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3">
                                    <button type="submit" name = "act"  value = "<?php if (empty ( $this->_tpl_vars['Patient']['PatientID'] )): ?>Save<?php else: ?>Update<?php endif; ?>"  class="btn btn btn-primary">
                                        <i class="fa fa-floppy-o"></i> Save
                                    </button>
                                    <button type="button" id = "Cancel" class="btn btn btn-primary" onclick="history.back()"> 
                                        <i class="fa fa-ban"></i> Cancel
                                    </button> 
                                </div>
                            </div>
                        </div>   
    				</div>
    			</div>
            </form>
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
<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>

<!-- Mainly scripts -->	
<script src="js/plugins/footable/footable.all.min.js"></script>
<script src="js/plugins/fullcalendar/moment.min.js"></script>

<script src="js/plugins/toastr/toastr.min.js"></script>

<!-- SUMMERNOTE -->
<script src="js/plugins/summernote/summernote.min.js"></script>

<!-- Jasny -->
<script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

<!-- Blueimp -->
<script src="js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>

<script src="js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

<script>
<?php echo '


$(document).ready(function(){

    if("'; ?>
<?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
<?php echo '"){
        $("#cb_status").val("'; ?>
<?php echo $this->_tpl_vars['Patient']['status']; ?>
<?php echo '");
        $("#tb_Gender").val("'; ?>
<?php echo $this->_tpl_vars['Patient']['Gender']; ?>
<?php echo '");
    }else{
        $("#cb_status").val("Active");
        $("#tb_Gender").val("Male");
    }   

	$(\'.tagsinput\').tagsinput({
        tagClass: \'label label-primary\'
    });

    $("#cb_title").select2({
        dropdownAutoWidth : true , 
        allowClear : true ,
        placeholder: {
            id: \'-1\', // the value of the option
            text: \'\'
        }
    }); 
    $("#cb_title").select2("val","'; ?>
<?php echo $this->_tpl_vars['Patient']['Title']; ?>
<?php echo '");

    $("#cb_ictype").select2({
        dropdownAutoWidth : true,
        allowClear : true ,
        placeholder: {
            id: \'-1\', // the value of the option
            text: \'Quick Search...\'
        }
    });
    $("#cb_ictype").select2("val","'; ?>
<?php echo $this->_tpl_vars['Patient']['ICType']; ?>
<?php echo '");   

	$("#tb_PatientName").on(\'input\', function(evt) {
		$(this).val(function (_, val) {return val.toUpperCase();});
	});

   	$(\'#date_selector\').datepicker({
		format: \''; ?>
 <?php echo @javascript_dateformat; ?>
 <?php echo '\',
		todayBtn: "linked",
	    startView: 2,
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true
	});
	
	$(\'#date_calendar\').click(function(){
		$("#date_selector").datepicker().focus();
	});
    
    if(\''; ?>
<?php echo $this->_tpl_vars['Patient']['DateofBirth']; ?>
<?php echo '\' !== ""){
        $(\'#date_selector\').datepicker(\'update\', new Date(\''; ?>
<?php echo $this->_tpl_vars['Patient']['DateofBirth']; ?>
<?php echo '\'));
    };	

    $("#cb_MaritalStatus").val("'; ?>
<?php echo $this->_tpl_vars['Patient']['MaritalStatus']; ?>
<?php echo '");

	$("#cb_nationality").select2({
        dropdownAutoWidth : true,
        allowClear : true ,
		placeholder: {
			id: \'-1\', // the value of the option
			text: \'Quick Search...\'
		}
	});
    $("#cb_nationality").select2("val","'; ?>
<?php echo $this->_tpl_vars['Patient']['PlaceofBirthorNation']; ?>
<?php echo '");

    $("#cb_race").select2({
        dropdownAutoWidth : true,
        allowClear : true,
        placeholder: {
            id: \'-1\', // the value of the option
            text: \'Quick Search...\'
        }
    });
    $("#cb_race").select2("val","'; ?>
<?php echo $this->_tpl_vars['Patient']['Race']; ?>
<?php echo '");

    $("#cb_ResidentialCountry").select2({
        dropdownAutoWidth : true,
        allowClear : true,
        placeholder: {
            id: \'-1\', // the value of the option
            text: \'Country\'
        }
    });
    $("#cb_ResidentialCountry").select2("val","'; ?>
<?php echo $this->_tpl_vars['Patient']['ResidentialCountry']; ?>
<?php echo '");

    $("#cb_MailingCountry").select2({
        dropdownAutoWidth : true,
        allowClear : true,
        placeholder: {
            id: \'-1\', // the value of the option
            text: \'Country\'
        }
    });
    $("#cb_MailingCountry").select2("val","'; ?>
<?php echo $this->_tpl_vars['Patient']['MailingCountry']; ?>
<?php echo '");
    
    $("#cb_emergencyContactRelation1").select2({
        dropdownAutoWidth : true,
        allowClear : true,
        placeholder: {
            id: \'-1\', // the value of the option
            text: \'\'
        }
    }); 
    $("#cb_emergencyContactRelation1").select2("val","'; ?>
<?php echo $this->_tpl_vars['EmergencyContact'][0]['Relations']; ?>
<?php echo '");

	$("#cb_emergencyContactRelation2").select2({
        dropdownAutoWidth : true,
        allowClear : true,
        placeholder: {
            id: \'-1\', // the value of the option
            text: \'\'
        }
    });     
    $("#cb_emergencyContactRelation2").select2("val","'; ?>
<?php echo $this->_tpl_vars['EmergencyContact'][1]['Relations']; ?>
<?php echo '");

    $(\'#registration\').on(\'keyup keypress\', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) { 
            e.preventDefault();
            return false;
        }
    });

    $(\'#allowSMS\').prop(\'checked\',!!+"'; ?>
<?php echo $this->_tpl_vars['Patient']['IsAllowMKEmail']; ?>
<?php echo '");
    $(\'#allowEmail\').prop(\'checked\',!!+"'; ?>
<?php echo $this->_tpl_vars['Patient']['IsAllowMKSMS']; ?>
<?php echo '");
    $(\'#allowPhone\').prop(\'checked\',!!+"'; ?>
<?php echo $this->_tpl_vars['Patient']['IsAllowMKPhone']; ?>
<?php echo '");
 
});

function copy_address(){
    $(\'#cb_MailingCountry\').select2("val",$(\'#cb_ResidentialCountry\').val());
    $(\'#MailingCity\').val($(\'#ResidentialCity\').val());
    $(\'#MailingAddress\').val($(\'#ResidentialAddress\').val());
    $(\'#MailingCountryCode\').val($(\'#ResidentialCountryCode\').val());
}


'; ?>



</script>
</body>

</html>