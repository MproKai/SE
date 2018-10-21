<?php /* Smarty version 2.6.19, created on 2017-08-08 07:13:23
         compiled from consultation_order.tpl */ ?>
<div id="wrapper" class="gray-bg">
	<div class="row wrapper border-bottom white-bg page-heading">
		<!--div class="col-lg-12">
			<h1>Orders</h1>
			<!--ol class="breadcrumb">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					Other Pages
				</li>
				<li class="active">
					<strong>Invoice</strong>
				</li>
			</ol-->
		<!--/div-->
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="wrapper wrapper-content animated fadeInRight">
				<!--div class="col-lg-12 text-right">
					<h4>Date : <?php echo $this->_tpl_vars['Invoice']['InvoiceDateString']; ?>
</h4>
					<h4>Patient : <?php echo $this->_tpl_vars['Invoice']['PatientName']; ?>
</h4>
					<h4>Invoice # : <?php echo $this->_tpl_vars['Invoice']['InvoiceID']; ?>
</h4>
					<h4>Doctor : <?php echo $this->_tpl_vars['Invoice']['DoctorName']; ?>
</h4>
				</div-->

				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>Dispensary</h5>
					</div>
					<div class="ibox-content">
						<div class="row">
							<div class="col-lg-12">
								<select id="order_selector">
									<option value="-1"></option>
									<?php $_from = $this->_tpl_vars['OrderDataSource']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['order']):
?>
										<option  value="<?php echo $this->_tpl_vars['order']['id']; ?>
"><?php echo $this->_tpl_vars['order']['text']; ?>
</option>
                            		<?php endforeach; endif; unset($_from); ?>
			                    </select>
			                    <div><br></div>

			                    <!--drugs area-->
			                    <div class="ibox float-e-margins" id="drugs_area">
			                    	<div class="ibox-content " style="background-color: #FFFAF2">
			                    		<form class="form-horizontal" id="form_drug">
			                    			<div class="form-group">
					                    			<label class="col-lg-2 control-label ">Drugs Name</label>
		                                    		<div class="col-lg-7">
		                                    			<input type="text" disabled="" placeholder="" class="form-control" id="dg_te_name">
		                                    		</div>
		                                    		<label class="col-lg-1 control-label">Available Stock</label>
	                                    			<div class="col-lg-2">
	                                    				<input type="text" disabled="" class="form-control" id="dg_te_stock">
	                                    			</div>
	                                		</div>
                                			<div class="form-group">
	                                			<label class="col-lg-2 control-label">Unit Price($)</label>
	                                    		<div class="col-lg-2">
	                                    			<input type="text" onchange="cal_price('Drug')" class="form-control" id="dg_te_unit_price" name="dg_te_unit_price">
	                                    		</div>
	                                    		<label class="col-lg-1 control-label">Qty</label>
	                                    		<div class="col-lg-1">
	                                    			<input type="text" onchange="cal_price('Drug')" class="form-control" id="dg_te_qty" name="dg_te_qty">
	                                    		</div>
	                                    		<label class="col-lg-1 control-label">Discount($)</label>
	                                    		<div class="col-lg-2">
	                                    			<input type="text" onchange="cal_price('Drug')" class="form-control" id="dg_te_discount" name="dg_te_discount">
	                                    		</div>
	                                    		<label class="col-lg-1 control-label ">Sub Price</label>
	                                    		<div class="col-lg-2">
	                                    			<input type="text" readonly="" placeholder="" class="form-control" id="dg_te_sub_price" name="dg_te_sub_price">
	                                    		</div>
	                                    		<!--div class = "col-lg-1">
		                                    		<select class = "form-control" id="dg_cb_discountType">
				                                        <option>$</option>
				                                        <option>%</option>
	                                    			</select>
                                    			</div-->
                            				</div>
                            				<div class="form-group">
				                    			<label class="col-lg-2 control-label ">Instruction</label>
	                                    		<div class="col-lg-10">
	                                    			<input type="text" class="form-control" id="dg_te_instruction">
	                                    		</div>
	                                		</div>
	                                		<div class="form-group">
				                    			<label class="col-lg-2 control-label ">Dosage</label>
	                                    		<div class="col-lg-3">
	                                    			<select id="dg_cb_frequency">
														<?php $_from = $this->_tpl_vars['OrderFrequency']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['frequency']):
?>
															<option><?php echo $this->_tpl_vars['frequency']['vName']; ?>
</option>
                            							<?php endforeach; endif; unset($_from); ?>
	                                    			</select>
	                                    		</div>
	                                    		<div class="col-lg-2">
	                                    			<select id="dg_cb_route">
														<?php $_from = $this->_tpl_vars['OrderRoute']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['route']):
?>
															<option><?php echo $this->_tpl_vars['route']['vName']; ?>
</option>
                            							<?php endforeach; endif; unset($_from); ?>
	                                    			</select>
	                                    		</div>
	                                    		<div class="col-lg-3">
	                                    			<select id="dg_cb_dosage">
														<?php $_from = $this->_tpl_vars['OrderDosage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dosage']):
?>
															<option><?php echo $this->_tpl_vars['dosage']['vName']; ?>
</option>
                            							<?php endforeach; endif; unset($_from); ?>
	                                    			</select>
	                                    		</div>
	                                    		<div class="col-lg-2">
	                                    			<select id="dg_cb_unit">
														<?php $_from = $this->_tpl_vars['OrderUnit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['unit']):
?>
															<option><?php echo $this->_tpl_vars['unit']['vName']; ?>
</option>
                            							<?php endforeach; endif; unset($_from); ?>
	                                    			</select>
	                                    		</div>
	                                    		<input type="text" disabled="" class="form-control" id="dg_te_dispense_unit" style="display:none;">
	                                    		<input type="text" disabled="" class="form-control" id="dg_te_orderid" style="display:none;">
	                                    		<input type="text" disabled="" class="form-control" id="dg_te_drug_code" style="display:none;">
	                                    		<input type="text" disabled="" class="form-control" id="dg_te_ori_qty" style="display:none;">
	                                    		<input type="text" disabled="" class="form-control" id="dg_te_ori_sub_price" style="display:none;">
	                                    		<input type="text" disabled="" class="form-control" id="dg_te_start_date" style="display:none;">
	                                		</div>
	                                		<div class="form-group">
			                                    <div class="col-lg-12 text-right">
			                                        <button id="dg_ok" class="ladda-button btn btn-primary" data-style="expand-right" type="button">Ok</button>
			                                        <button id="dg_cancel" onclick="reset_area()" class="btn btn-danger" type="button">Cancel</button>
			                                    </div>
                                			</div>
			                    		</form>
			                    	</div>
			                    </div>
			                    <!--end of drug area-->

			                    <!--Lab area-->
			                    <div class="ibox float-e-margins" id="lab_area">
			                    	<div class="ibox-content " style="background-color: #FFFAF2">
			                    		<form class="form-horizontal" id="form_lab">
			                    			<div class="form-group">
					                    			<label class="col-lg-2 control-label ">Lab Name</label>
		                                    		<div class="col-lg-7">
		                                    			<input type="text" disabled="" placeholder="" class="form-control" id="lab_te_name">
		                                    		</div>
		                                    		<label class="col-lg-1 control-label">Lab Date</label>
	                                    			<div class="col-lg-2">
														<input id="lab_de_date" type="text" class="form-control" />
													</div>
	                                		</div>
                                			<div class="form-group">
	                                			<label class="col-lg-2 control-label">Unit Price($)</label>
	                                    		<div class="col-lg-4">
	                                    			<input type="text" onchange="cal_price('Lab')" class="form-control" id="lab_te_unit_price" name="lab_te_unit_price">
	                                    		</div>
	                                    		<label class="col-lg-1 control-label">Discount($)</label>
	                                    		<div class="col-lg-2">
	                                    			<input type="text" onchange="cal_price('Lab')" class="form-control" id="lab_te_discount" name="lab_te_discount">
	                                    		</div>
	                                    		<label class="col-lg-1 control-label ">Sub Price</label>
	                                    		<div class="col-lg-2">
	                                    			<input type="text" readonly="" placeholder="" class="form-control" id="lab_te_sub_price" name="lab_te_sub_price">
	                                    		</div>
	                                    		<!--div class = "col-lg-1">
		                                    		<select class = "form-control" id="lab_cb_discountType">
				                                        <option>$</option>
				                                        <option>%</option>
	                                    			</select>
                                    			</div-->
                            				</div>
                            				<div class="form-group">
				                    			<label class="col-lg-2 control-label ">Instruction</label>
	                                    		<div class="col-lg-7">
	                                    			<input type="text" class="form-control" id="lab_te_instruction">
	                                    		</div>
	                                    		<label class="col-lg-1 control-label ">Lab Type</label>
	                                    		<div class="col-lg-2">
	                                    			<select id="lab_cb_lab_type" disabled="">
														<?php $_from = $this->_tpl_vars['LabType']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type']):
?>
															<option  value="<?php echo $this->_tpl_vars['type']['id']; ?>
"><?php echo $this->_tpl_vars['type']['text']; ?>
</option>
                            							<?php endforeach; endif; unset($_from); ?>
	                                    			</select>
	                                    		</div>
	                                		</div>
	                                		<div class="form-group">
				                    			<label class="col-lg-2 control-label ">Remark</label>
	                                    		<div class="col-lg-10">
	                                    			<input type="text" class="form-control" id="lab_te_remark">
	                                    		</div>
	                                    		<input type="text" disabled="" class="form-control" id="lab_te_orderid" style="display:none;">
	                                    		<input type="text" disabled="" class="form-control" id="lab_te_lab_code" style="display:none;">
	                                    		<input type="text" disabled="" class="form-control" id="lab_te_ori_sub_price" style="display:none;">
	                                		</div>
	                                		<div class="form-group">
			                                    <div class="col-lg-12 text-right">
			                                        <button id="lab_ok" class="ladda-button btn btn-primary" data-style="expand-right" type="button">Ok</button>
			                                        <button id="lab_cancel" onclick="reset_area()" class="btn btn-danger" type="button">Cancel</button>
			                                    </div>
                                			</div>
			                    		</form>
			                    	</div>
			                    </div>
			                    <!--end of lab area-->

			                    <!--Service area-->
			                    <div class="ibox float-e-margins" id="service_area">
			                    	<div class="ibox-content " style="background-color: #FFFAF2">
			                    		<form class="form-horizontal" id="form_service">
			                    			<div class="form-group">
					                    			<label class="col-lg-2 control-label ">Service Name</label>
		                                    		<div class="col-lg-7">
		                                    			<input type="text" disabled="" placeholder="" class="form-control" id="service_te_name">
		                                    		</div>
		                                    		<label class="col-lg-1 control-label ">Service Type</label>
	                                    			<div class="col-lg-2">
		                                    			<select id="service_cb_service_type" disabled="">
															<?php $_from = $this->_tpl_vars['ServiceType']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type']):
?>
																<option  value="<?php echo $this->_tpl_vars['type']['id']; ?>
"><?php echo $this->_tpl_vars['type']['text']; ?>
</option>
	                            							<?php endforeach; endif; unset($_from); ?>
		                                    			</select>
	                                    			</div>
	                                		</div>
                                			<div class="form-group">
	                                			<label class="col-lg-2 control-label">Unit Price($)</label>
	                                    		<div class="col-lg-2">
	                                    			<input type="text" onchange="cal_price('Service')" class="form-control" id="service_te_unit_price" name="service_te_unit_price">
	                                    		</div>
	                                    		<label class="col-lg-1 control-label">Qty</label>
	                                    		<div class="col-lg-1">
	                                    			<input type="text" onchange="cal_price('Service')" class="form-control" id="service_te_qty" name="service_te_qty">
	                                    		</div>
	                                    		<label class="col-lg-1 control-label">Discount($)</label>
	                                    		<div class="col-lg-2">
	                                    			<input type="text" onchange="cal_price('Service')" class="form-control" id="service_te_discount" name="service_te_discount">
	                                    		</div>
	                                    		<label class="col-lg-1 control-label ">Sub Price</label>
	                                    		<div class="col-lg-2">
	                                    			<input type="text" readonly="" placeholder="" class="form-control" id="service_te_sub_price" name="service_te_sub_price">
	                                    		</div>
	                                    		<input type="text" disabled="" class="form-control" id="service_te_orderid" style="display:none;">
	                                    		<input type="text" disabled="" class="form-control" id="service_te_service_code" style="display:none;">
	                                    		<input type="text" disabled="" class="form-control" id="service_te_start_date" style="display:none;">
	                                    		<input type="text" disabled="" class="form-control" id="service_te_ori_sub_price" style="display:none;">
	                                    		<!--div class = "col-lg-1">
		                                    		<select class = "form-control" id="service_cb_discountType">
				                                        <option>$</option>
				                                        <option>%</option>
	                                    			</select>
                                    			</div-->
                            				</div>
	                                		<div class="form-group">
			                                    <div class="col-lg-12 text-right">
			                                        <button id="service_ok" class="ladda-button btn btn-primary" data-style="expand-right" type="button">Ok</button>
			                                        <button id="service_cancel" onclick="reset_area()" class="btn btn-danger" type="button">Cancel</button>
			                                    </div>
                                			</div>
			                    		</form>
			                    	</div>
			                    </div>
			                    <!--end of service area-->

			                    <!--MC area-->
			                    <div class="ibox float-e-margins" id="mc_area">
			                    	<div class="ibox-content " style="background-color: #FFFAF2">
			                    		<form class="form-horizontal" id="form_mc">
			                    			<div class="form-group">
					                    			<label class="col-lg-2 control-label ">Patient Name</label>
		                                    		<div class="col-lg-5">
		                                    			<input type="text" disabled="" placeholder="" class="form-control" id="mc_te_patient_name">
		                                    		</div>
		                                    		<label class="col-lg-1 control-label ">NRIC/ID</label>
	                                    			<div class="col-lg-4">
		                                    			<input type="text" disabled="" placeholder="" class="form-control" id="mc_te_nric">
	                                    			</div>
	                                		</div>
                                			<div class="form-group">
	                                			<label class="col-lg-2 control-label">Doctor</label>
	                                    		<div class="col-lg-5">
	                                    			<select id="mc_cb_doctor" name="mc_cb_doctor">
														<?php $_from = $this->_tpl_vars['DoctorList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['doctor']):
?>
															<option  value="<?php echo $this->_tpl_vars['doctor']['id']; ?>
"><?php echo $this->_tpl_vars['doctor']['text']; ?>
</option>
                            							<?php endforeach; endif; unset($_from); ?>
		                                    		</select>
	                                    		</div>
	                                    		<label class="col-lg-1 control-label">Type</label>
	                                    		<div class="col-lg-4">
	                                    			<select id="mc_cb_type" name="mc_cb_type">
														<?php $_from = $this->_tpl_vars['MCReasonList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reason']):
?>
															<option><?php echo $this->_tpl_vars['reason']['vName']; ?>
</option>
                            							<?php endforeach; endif; unset($_from); ?>
		                                    		</select>
	                                    		</div>
                            				</div>
                            				<div class="form-group">
                            					<label class="col-lg-2 control-label">Days</label>
	                                    		<div class="col-lg-9">
	                                    			<input type="text" onchange="cal_duration(false)" class="form-control" id="mc_te_days" name="mc_te_days">
	                                    		</div>
	                                    		<div class="col-lg-1">
	                                    			<div class="checkbox checkbox-success" style="padding-left:0px">
                										<input id="mc_ck_set_time" type="checkbox" onchange = "set_time_enabled()" ><label for="mc_ck_set_time"><strong>Set Time</strong></label>
            										</div>
	                                    		</div>
                            				</div>
                            				<!--div class="panel panel-primary ">
	                                        		<div class="panel-heading">
	                                            		Time Sheet
	                                        		</div>
			                                        <div class="panel-body ">
			                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
			                                        </div>
                                    			</div-->  
                            				<div class="form-group">
                            					<label class="col-lg-2 control-label" >From Date</label>
	                                    		<div class="col-lg-5">
	                                    			<input type="text" placeholder="Select..." onchange="cal_duration(false)" class="form-control" id="mc_de_start_date" name="mc_de_start_date">
	                                    		</div>
	                                    		<label class="col-lg-1 control-label" >Start Time</label>
	                                    		<div class="col-lg-4">
                                					<input type="time" class="form-control" data-autoclose="true" id="mc_ce_start_time" name="mc_ce_start_time" disabled="">
                            					</div>
                            				</div>
                            				<div class="form-group">
                            					<label class="col-lg-2 control-label" >To Date</label>
	                                    		<div class="col-lg-5">
	                                    			<input type="text" placeholder="Select..." onchange="cal_duration(true)" class="form-control" id="mc_de_end_date" name="mc_de_end_date">
	                                    		</div>
	                                    		<label class="col-lg-1 control-label" >End Time</label>
	                                    		<div class="col-lg-4">
                                					<input type="time" class="form-control" data-autoclose="true" id="mc_ce_end_time" name="mc_ce_end_time" disabled="">
                            					</div>
                            				</div>
                            				<div class="form-group">
                            					<label class="col-lg-2 control-label" >Remark</label>
	                                    		<div class="col-lg-10">
	                                    			<input type="text" class="form-control" id="mc_te_remark">
	                                    		</div>
                            				</div>
	                                    	<input type="text" disabled="" class="form-control" id="mc_te_orderid" style="display:none;">
	                                		<div class="form-group">
			                                    <div class="col-lg-12 text-right">
			                                        <button id="mc_ok" class="ladda-button btn btn-primary" data-style="expand-right" type="button">Ok</button>
			                                        <button id="mc_cancel" onclick="reset_area()" class="btn btn-danger" type="button">Cancel</button>
			                                    </div>
                                			</div>
			                    		</form>
			                    	</div>
			                    </div>
			                    <!--end of MC area-->

			                    <!--div class="col-lg-12"><hr></div-->
			                    <br>
			                    <div class="ibox float-e-margins">
				                    <div id="dispensary_table">
				                    	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'consultation_order_table.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				                    </div>
								</div>
							</div>
						</div>
					</div>
				</div><!--end of dispensary-->

				<div id="invoice_total_table">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'consultation_order_invoice_table.tpl', 'smarty_include_vars' => array()));
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
	$(\'#drugs_area\').css(\'display\',\'none\');
	$(\'#lab_area\').css(\'display\',\'none\');
	$(\'#service_area\').css(\'display\',\'none\');
	$(\'#mc_area\').css(\'display\',\'none\');
	$("#order_selector").select2({
		width: \'100%\',
		placeholder: {
			id: \'-1\', // the value of the option
			text: \'Add Medicines, Investigations, Procedures or Injections \'
		}/*,
		ajax:{
			url: \'pt_queue.php\',
			dataType: \'json\',
			delay: 250,
			data: function (params) {
				return {
					fitler_text: params.term , 
					act : \'get_doctor_list\' 
				};
				// Query paramters will be ?search=[term]&page=[page]
				//return query;
			},
			processResults: function (data) {
				return {
					results:data
				};
			}
		}*/
	});	
	$("#order_selector").on(\'select2:select\', function (e) {
		reset_area();
		//console.log($(this).select2(\'data\'));
		select_order(e.params.data);
		//$("#order_selector").val(\'-1\');
		$("#order_selector").select2("val","-1");
	});
	$("#dg_cb_frequency").select2({
		width: \'100%\',
		allowClear:true ,
		placeholder: {
			id: \'-1\', 
			text: \'Frequency\'
		}
	});	
	$("#dg_cb_route").select2({
		width: \'100%\',
		allowClear:true ,
		placeholder: {
			id: \'-1\', 
			text: \'Route\'
		}
	});	
	$("#dg_cb_dosage").select2({
		width: \'100%\',
		allowClear:true ,
		placeholder: {
			id: \'-1\', 
			text: \'Dosage\'
		}
	});	
	$("#dg_cb_unit").select2({
		width: \'100%\',
		allowClear:true ,
		placeholder: {
			id: \'-1\', 
			text: \'Unit\'
		}
	});	
	$(\'#lab_de_date\').datepicker({
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
	$("#lab_cb_lab_type").select2({
		width: \'100%\',
		allowClear:true ,
		placeholder: {
			id: \'-1\', 
			text: \'Lab Type\'
		}
	});	
	$("#service_cb_service_type").select2({
		width: \'100%\',
		allowClear:true ,
		placeholder: {
			id: \'-1\', 
			text: \'Service Type\'
		}
	});
	$("#mc_cb_doctor").select2({
		width: \'100%\',
		allowClear:true ,
		placeholder: {
			id: \'-1\', 
			text: \'Doctor\'
		}
	});
	$("#mc_cb_type").select2({
		width: \'100%\',
		allowClear:true ,
		placeholder: {
			id: \'-1\', 
			text: \'Type\'
		}
	});
	$(\'#mc_de_start_date\').datepicker({
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
	$(\'#mc_ce_start_time\').clockpicker();
	$(\'#mc_de_end_date\').datepicker({
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
	$(\'#mc_ce_end_time\').clockpicker();
	$(\'#form_drug\').validate({
    	rules:{
    		dg_te_qty: {
	            required: true,
	            number: true,
	            min: 0
          },
          	dg_te_unit_price: {
	            required: true,
	            number: true,
	            min: 0
          },
          	dg_te_discount: {
          		required: true,
	            number: true
          },
          	dg_te_sub_price: {
          		min: 0
          }
    	}
    });	
	$(\'#form_lab\').validate({
    	rules:{
          	lab_te_unit_price: {
	            required: true,
	            number: true,
	            min: 0
          },
          	lab_te_discount: {
          		required: true,
	            number: true
          },
          	lab_te_sub_price: {
          		min: 0
          }
    	}
    });
    $(\'#form_service\').validate({
    	rules:{
    		service_te_qty: {
	            required: true,
	            number: true,
	            min: 0
          },
          	service_te_unit_price: {
	            required: true,
	            number: true,
	            min: 0
          },
          	service_te_discount: {
          		required: true,
	            number: true
          },
          	service_te_sub_price: {
          		min: 0
          }
    	}
    });
    $(\'#form_mc\').validate({
    	rules:{
    		mc_cb_doctor: {
	            required: true
          },
          	mc_cb_type: {
	            required: true
          },
          	mc_te_days: {
          		required: true,
	            number: true,
	            min: 0.5
          },
          	mc_de_start_date: {
          		required: true
          },
          	mc_de_end_date: {
          		required: true
          }
    	}
    });

    toastr.options = {
	  "closeButton": true,
	  "debug": false,
	  "progressBar": true,
	  "preventDuplicates": false,
	  "positionClass": "toast-bottom-right",
	  "timeOut": "1800"
	}
});

var btn_dg_ok = $("#dg_ok").ladda();
btn_dg_ok.click(function(){
	save_drug();
});
var btn_lab_ok = $("#lab_ok").ladda();
btn_lab_ok.click(function(){
	save_lab();
});
var btn_service_ok = $("#service_ok").ladda();
btn_service_ok.click(function(){
	save_service();
});
var btn_mc_ok = $("#mc_ok").ladda();
btn_mc_ok.click(function(){
	save_mc();
});

function reset_area(){
	$(\'#drugs_area\').css(\'display\',\'none\');
	$(\'#lab_area\').css(\'display\',\'none\');
	$(\'#service_area\').css(\'display\',\'none\');
	$(\'#mc_area\').css(\'display\',\'none\');
	$(\'#form_drug\')[0].reset();
	$(\'#form_lab\')[0].reset();
	$(\'#form_service\')[0].reset();
	$(\'#form_mc\')[0].reset();
	$(\'#form_drug\').clearValidation();
	$(\'#form_lab\').clearValidation();
	$(\'#form_service\').clearValidation();
	$(\'#form_mc\').clearValidation();
	document.getElementById(\'lab_te_name\').disabled = true;
	document.getElementById(\'lab_cb_lab_type\').disabled = true;
	document.getElementById(\'service_te_name\').disabled = true;
	document.getElementById(\'service_cb_service_type\').disabled = true;
	document.getElementById(\'mc_ce_start_time\').disabled = true;
	document.getElementById(\'mc_ce_end_time\').disabled = true;
	document.getElementById(\'mc_ce_start_time\').required = false;
	document.getElementById(\'mc_ce_end_time\').required = false;
}

function select_order(data){
	/*console.log(data.id);
	console.log(data.text);*/
	var item_code = data.id;
	var item_text = data.text;
	var type = item_text.split("-")[0].trim();

	$.post( "consultation_order.php", {act :\'get_new_order\',item_code :item_code , type :type,visit_id :\''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\'}).done(function( data ) {
		var order = JSON.parse(data);
		init_fields_info(type,order);
	});
}

function edit_order(order_id,type){
	reset_area();
	/*console.log(order_id);
	console.log(type);*/
	$.post( "consultation_order.php", {act :\'edit_order\',order_id : order_id, type : type}).done(function( data ) {
		var order = JSON.parse(data);
		init_edit_fields_info(type,order);
	});
}

function delete_order(order_id,type,qty,item_code,sub_price){
	swal({
        title: "",
        text: "Are you sure to delete this order?",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes",
        closeOnConfirm: true
    }, function () {
        var info = {};
		info[\'orderID\'] = order_id;
		info[\'type\'] = type;
		info[\'qty\'] = qty;
		info[\'itemCode\'] = item_code;
		info[\'subPrice\'] = sub_price;
		info[\'visitID\'] = \''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\';
		info[\'patientID\'] = \''; ?>
<?php echo $_GET['patient_id']; ?>
<?php echo '\';
		var info_arr = JSON.stringify(info);
		$.post( "consultation_order.php", {act :\'delete_order\',info_arr:info_arr}).done(function( data ) {
			var rs = JSON.parse(data);
			if(rs["is_success"] == 1){
				$(\'#dispensary_table\').html(rs.order_table_result);
				$(\'#invoice_total_table\').html(rs.invoice_table_result);
				toastr.success(\'Delete Order Success!\');
				/* if delete\'s order is edit order , need to close the update area */
				if($(\'#dg_te_orderid\').val()==order_id || $(\'#lab_te_orderid\').val()==order_id || $(\'#service_te_orderid\').val()==order_id || $(\'#mc_te_orderid\').val()==order_id){
		        	reset_area();
		        }
			}else{
				toastr.error(rs["rs_msg"]);
			}
		});
    });
}

var init = false;

function init_fields_info(type,order){
	var decimal_point = \''; ?>
<?php echo @invoice_decimal_point; ?>
<?php echo '\';

	switch(type){
		case \'Drug\':
			$(\'#drugs_area\').css(\'display\',\'block\');
			$(\'#dg_te_drug_code\').val(order.ItemCode);
			$(\'#dg_te_name\').val(order.ItemName);
			$(\'#dg_te_stock\').val(order.QTYAvailable);
			var unitprice = parseFloat(order.SellingPrice).toFixed(decimal_point);
			$(\'#dg_te_unit_price\').val(unitprice);
			if(order.DefaultDispenseQty==\'0\'){
				order.DefaultDispenseQty = \'1\';
			}
			$(\'#dg_te_qty\').val(order.DefaultDispenseQty);
			$(\'#dg_te_discount\').val(\'0.00\');
			var subprice = parseFloat(unitprice*order.DefaultDispenseQty).toFixed(decimal_point);
			$(\'#dg_te_sub_price\').val(subprice);
			$(\'#dg_cb_frequency\').select2(\'val\',order.Frequency);
			$(\'#dg_cb_route\').select2(\'val\',order.RouteType);
			$(\'#dg_cb_dosage\').select2(\'val\',order.DefaultDosage);
			$(\'#dg_cb_unit\').select2(\'val\',order.InstructionUOM);
			$(\'#dg_te_dispense_unit\').val(order.Dispense);
			save_drug();
			break;
		case \'Lab\':
			$(\'#lab_area\').css(\'display\',\'block\');
			if(order.LabCode.toUpperCase()==\'OTHERS\'){
				document.getElementById(\'lab_te_name\').disabled = false;
				document.getElementById(\'lab_cb_lab_type\').disabled = false;
			}
			$(\'#lab_te_lab_code\').val(order.LabCode);
			$(\'#lab_te_name\').val(order.LabName);
			$(\'#lab_de_date\').datepicker(\'update\', new Date());
			var unitprice = parseFloat(order.LabSellingPrice).toFixed(decimal_point);
			$(\'#lab_te_unit_price\').val(unitprice);
			$(\'#lab_te_discount\').val(\'0.00\');
			$(\'#lab_te_sub_price\').val(unitprice);
			$(\'#lab_cb_lab_type\').select2(\'val\',order.LabCategory);
			save_lab();
			break;
		case \'Service\':
			$(\'#service_area\').css(\'display\',\'block\');
			if(order.ServiceCode.toUpperCase()==\'OTHERS\'){
				document.getElementById(\'service_te_name\').disabled = false;
				document.getElementById(\'service_cb_service_type\').disabled = false;
			}
			$(\'#service_te_service_code\').val(order.ServiceCode);
			$(\'#service_te_name\').val(order.ServiceName);
			var unitprice = parseFloat(order.SellingPrice).toFixed(decimal_point);
			$(\'#service_te_unit_price\').val(unitprice);
			$(\'#service_te_qty\').val(order.QTY);
			$(\'#service_te_discount\').val(\'0.00\');
			var subprice = parseFloat(unitprice*order.QTY).toFixed(decimal_point);
			$(\'#service_te_sub_price\').val(subprice);
			$(\'#service_cb_service_type\').select2(\'val\',order.ServiceType);
			save_service();
			break;
		case \'MC\':
			init = true;
			$(\'#mc_area\').css(\'display\',\'block\');
			$(\'#mc_te_patient_name\').val(order.PatientName);
			$(\'#mc_te_nric\').val(order.NRIC);
			$(\'#mc_cb_doctor\').select2(\'val\',order.doctor);
			$(\'#mc_cb_type\').select2(\'val\',order.DefaultMCType);
			$(\'#mc_de_start_date\').datepicker(\'update\', new Date(order.date));
			$(\'#mc_te_days\').val(\'1\');
			$(\'#mc_de_end_date\').datepicker(\'update\', new Date(order.date));
			init = false;
			save_mc();
			break;
	}
}

function init_edit_fields_info(type,order){
	var decimal_point = \''; ?>
<?php echo @invoice_decimal_point; ?>
<?php echo '\';
	switch(type){
		case \'Drugs\':
			$(\'#drugs_area\').css(\'display\',\'block\');
			$(\'#dg_te_orderid\').val(order.orderID);
			$(\'#dg_te_drug_code\').val(order.DrugsCode);
			$(\'#dg_te_name\').val(order.DrugsName);
			$(\'#dg_te_stock\').val(order.QTYAvailable);
			var unitprice = parseFloat(order.UnitPrice).toFixed(decimal_point);
			$(\'#dg_te_unit_price\').val(unitprice);
			$(\'#dg_te_qty\').val(order.Quantity);
			$(\'#dg_te_ori_qty\').val(order.Quantity);
			$(\'#dg_te_discount\').val(parseFloat(order.Discount).toFixed(decimal_point));
			var subprice = parseFloat(order.SubPrice).toFixed(decimal_point);
			$(\'#dg_te_sub_price\').val(subprice);
			$(\'#dg_te_instruction\').val(order.Instruction);
			$(\'#dg_cb_frequency\').select2(\'val\',order.Frequency);
			$(\'#dg_cb_route\').select2(\'val\',order.Route);
			$(\'#dg_cb_dosage\').select2(\'val\',order.Dosage);
			$(\'#dg_cb_unit\').select2(\'val\',order.UOM);
			$(\'#dg_te_dispense_unit\').val(order.Unit);
			$(\'#dg_te_start_date\').val(order.StartDateString);
			$(\'#dg_te_ori_sub_price\').val(order.SubPrice);
			break;
		case \'Lab/Scan\':
			$(\'#lab_area\').css(\'display\',\'block\');
			if(order.LabCode.toUpperCase()==\'OTHERS\'){
				document.getElementById(\'lab_te_name\').disabled = false;
				document.getElementById(\'lab_cb_lab_type\').disabled = false;
			}
			$(\'#lab_te_orderid\').val(order.orderID);
			$(\'#lab_te_lab_code\').val(order.LabCode);
			$(\'#lab_te_name\').val(order.LabName);
			$(\'#lab_de_date\').datepicker(\'update\', new Date(order.StartDateString));
			var unitprice = parseFloat(order.Cost).toFixed(decimal_point);
			$(\'#lab_te_unit_price\').val(unitprice);
			$(\'#lab_te_discount\').val(parseFloat(order.Discount).toFixed(decimal_point));
			$(\'#lab_te_sub_price\').val(parseFloat(order.SubPrice).toFixed(decimal_point));
			$(\'#lab_te_instruction\').val(order.Instruction);
			$(\'#lab_te_remark\').val(order.Labremark);
			$(\'#lab_cb_lab_type\').select2(\'val\',order.LabType);
			$(\'#lab_te_ori_sub_price\').val(order.SubPrice);
			break;
		case \'Service\':
			$(\'#service_area\').css(\'display\',\'block\');
			if(order.ServiceCode.toUpperCase()==\'OTHERS\'){
				document.getElementById(\'service_te_name\').disabled = false;
				document.getElementById(\'service_cb_service_type\').disabled = false;
			}
			$(\'#service_te_orderid\').val(order.orderID);
			$(\'#service_te_service_code\').val(order.ServiceCode);
			$(\'#service_te_name\').val(order.ServiceName);
			var unitprice = parseFloat(order.UnitPrice).toFixed(decimal_point);
			$(\'#service_te_unit_price\').val(unitprice);
			$(\'#service_te_qty\').val(order.QTY);
			$(\'#service_te_discount\').val(parseFloat(order.Discount).toFixed(decimal_point));
			var subprice = parseFloat(order.SubPrice).toFixed(decimal_point);
			$(\'#service_te_sub_price\').val(subprice);
			$(\'#service_cb_service_type\').select2(\'val\',order.ServiceType);
			$(\'#service_te_start_date\').val(order.StartDateString);
			$(\'#service_te_ori_sub_price\').val(order.SubPrice);
			break;
		case \'MC\':
			init = true;
			$(\'#mc_area\').css(\'display\',\'block\');
			$(\'#mc_te_orderid\').val(order.orderID);
			$(\'#mc_te_patient_name\').val(order.patientname);
			$(\'#mc_te_nric\').val(order.NRIC);
			$(\'#mc_cb_doctor\').select2(\'val\',order.Doctor);
			$(\'#mc_cb_type\').select2(\'val\',order.reason);
			$(\'#mc_de_start_date\').datepicker(\'update\', new Date(order.StartdateString));
			$(\'#mc_de_end_date\').datepicker(\'update\', new Date(order.EnddateString));
			$(\'#mc_te_days\').val(order.days);
			if(order.StartTime !== \'\' && order.StartTime !== null){
				document.getElementById("mc_ck_set_time").checked = true;
				document.getElementById(\'mc_ce_start_time\').disabled = false;
				document.getElementById(\'mc_ce_end_time\').disabled = false;
				document.getElementById(\'mc_ce_start_time\').required = true;
				document.getElementById(\'mc_ce_end_time\').required = true;
				$(\'#mc_ce_start_time\').val(order.StartTimeString);
				$(\'#mc_ce_end_time\').val(order.EndTimeString);
			}
			$(\'#mc_te_remark\').val(order.remark);
			init = false;
			break;
	}
}

function cal_price(type){
	var decimal_point = \''; ?>
<?php echo @invoice_decimal_point; ?>
<?php echo '\';
	switch(type){
		case \'Drug\':
			var subprice = parseFloat($(\'#dg_te_unit_price\').val()*$(\'#dg_te_qty\').val()-$(\'#dg_te_discount\').val()).toFixed(decimal_point);
			$(\'#dg_te_sub_price\').val(subprice);
			break;
		case \'Lab\':
			var subprice = parseFloat($(\'#lab_te_unit_price\').val()-$(\'#lab_te_discount\').val()).toFixed(decimal_point);
			$(\'#lab_te_sub_price\').val(subprice);
			break;
		case \'Service\':
			var subprice = parseFloat($(\'#service_te_unit_price\').val()*$(\'#service_te_qty\').val()-$(\'#service_te_discount\').val()).toFixed(decimal_point);
			$(\'#service_te_sub_price\').val(subprice);
			break;
	}
}

function save_drug(){
	btn_dg_ok.ladda(\'start\');
	if(!$("#form_drug").valid()){
		btn_dg_ok.ladda(\'stop\');
		return;
	}
	//document.getElementById(\'dg_ok\').disabled = true;
	var decimal_point = \''; ?>
<?php echo @invoice_decimal_point; ?>
<?php echo '\';
	var orders = {};
	
	orders["orderID"] = $(\'#dg_te_orderid\').val();
	orders["drugsCode"] = $(\'#dg_te_drug_code\').val();
	orders["drugsName"] = $(\'#dg_te_name\').val();
	orders["route"] = $(\'#dg_cb_route\').val();
	orders["frequency"] = $(\'#dg_cb_frequency\').val();
	orders["unitPrice"] = parseFloat($(\'#dg_te_unit_price\').val()).toFixed(decimal_point);
	orders["qty"] = $(\'#dg_te_qty\').val();
	orders["unit"] = $(\'#dg_te_dispense_unit\').val();
	orders["startDate"] = new Date();
	orders["endDate"] = \'\';
	orders["uom"] = $(\'#dg_cb_unit\').val();
	orders["instruction"] = $(\'#dg_te_instruction\').val();
	orders["dosage"] = $(\'#dg_cb_dosage\').val();
	orders["isSelfPay"] = \'0\';
	orders["subPrice"] = parseFloat($(\'#dg_te_sub_price\').val()).toFixed(decimal_point);
	orders["durationNum"] = \'0\';
	orders["durationUnit"] = \'\';
	orders["discountType"] = \'Amount\';
	orders["discount"] = parseFloat($(\'#dg_te_discount\').val()).toFixed(decimal_point);
	if(orders["unitPrice"] == 0){
		orders["discountRate"] = \'0\';
	}else{
		orders["discountRate"] = parseFloat(orders["discount"]*100/orders["unitPrice"]*orders["qty"]).toFixed(decimal_point);
	}
	orders["patientID"] = \''; ?>
<?php echo $_GET['patient_id']; ?>
<?php echo '\';
	orders["visitID"] = \''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\';

	if($(\'#dg_te_orderid\').val() !== \'\' || $(\'#dg_te_orderid\').val() !== null){
		//update
		orders["startDate"] = $(\'#dg_te_start_date\').val();
		orders["oriQty"] = $(\'#dg_te_ori_qty\').val();
		orders["oriSubPrice"] = $(\'#dg_te_ori_sub_price\').val();
	}

	var json = JSON.stringify(orders);
	$.post( "consultation_order.php", {act :\'save_drug\', array : json}).done(function( data ) {
		var rs = JSON.parse(data);
		if(rs["is_success"] == 1){
			//document.getElementById(\'dg_ok\').disabled = false;
			$(\'#dispensary_table\').html(rs.order_table_result);
			$(\'#invoice_total_table\').html(rs.invoice_table_result);

			if(rs.action=="Create"){
				$(\'#dg_te_orderid\').val(rs.orderID);
				$(\'#dg_te_ori_qty\').val(rs.oriQty);
				$(\'#dg_te_start_date\').val(rs.startDate);
				$(\'#dg_te_ori_sub_price\').val(rs.oriSubPrice);
			}else{
				reset_area();
			}
			toastr.success(\'Save Drug Success!\');
		}else{
			//document.getElementById(\'dg_ok\').disabled = false;
			toastr.error(rs["rs_msg"]);
		}
		btn_dg_ok.ladda(\'stop\');
	});
	
}

function save_lab(){
	btn_lab_ok.ladda(\'start\');
	if(!$("#form_lab").valid()){
		btn_lab_ok.ladda(\'stop\');
		return;
	}
	//document.getElementById(\'lab_ok\').disabled = true;
	var decimal_point = \''; ?>
<?php echo @invoice_decimal_point; ?>
<?php echo '\';
	var lab = {};
	lab["orderID"] = $(\'#lab_te_orderid\').val();
	lab["labCode"] = $(\'#lab_te_lab_code\').val();
	lab["labName"] = $(\'#lab_te_name\').val();
	lab["cost"] = parseFloat($(\'#lab_te_unit_price\').val()).toFixed(decimal_point);
	lab["instruction"] = $(\'#lab_te_instruction\').val();
	lab["labType"] = $(\'#lab_cb_lab_type\').val();
	lab["remark"] = $(\'#lab_te_remark\').val();
	lab["labDate"] = $(\'#lab_de_date\').val();
	lab["isSelfPay"] = \'0\';
	lab["subPrice"] = parseFloat($(\'#lab_te_sub_price\').val()).toFixed(decimal_point);
	lab["discountType"] = \'Amount\';
	lab["discount"] = parseFloat($(\'#lab_te_discount\').val()).toFixed(decimal_point);
	if(lab["cost"] == 0){
		lab["discountRate"] = \'0\';
	}else{
		lab["discountRate"] = parseFloat(lab["discount"]*100/lab["cost"]).toFixed(decimal_point);
	}
	lab["patientID"] = \''; ?>
<?php echo $_GET['patient_id']; ?>
<?php echo '\';
	lab["visitID"] = \''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\';

	if($(\'#lab_te_orderid\').val() !== \'\' || $(\'#lab_te_orderid\').val() !== null){
		//update
		lab["oriSubPrice"] = $(\'#lab_te_ori_sub_price\').val();
	}

	var json = JSON.stringify(lab);
	$.post( "consultation_order.php", {act :\'save_lab\', array : json}).done(function( data ) {
		var rs = JSON.parse(data);
		if(rs["is_success"] == 1){
			//document.getElementById(\'lab_ok\').disabled = false;
			$(\'#dispensary_table\').html(rs.order_table_result);
			$(\'#invoice_total_table\').html(rs.invoice_table_result);

			if(rs.action=="Create"){
				$(\'#lab_te_orderid\').val(rs.orderID);
				$(\'#lab_te_ori_sub_price\').val(rs.oriSubPrice);
			}else{
				reset_area();
			}
			toastr.success(\'Save Lab Success!\');
		}else{
			//document.getElementById(\'lab_ok\').disabled = false;
			toastr.error(rs["rs_msg"]);
		}
		btn_lab_ok.ladda(\'stop\');
	});
}

function save_service(){
	btn_service_ok.ladda(\'start\');
	if(!$("#form_service").valid()){
		btn_service_ok.ladda(\'stop\');
		return;
	}
	//document.getElementById(\'service_ok\').disabled = true;
	var decimal_point = \''; ?>
<?php echo @invoice_decimal_point; ?>
<?php echo '\';
	var service = {};
	service["orderID"] = $(\'#service_te_orderid\').val();
	service["serviceCode"] = $(\'#service_te_service_code\').val();
	service["serviceName"] = $(\'#service_te_name\').val();
	service["qty"] = $(\'#service_te_qty\').val();
	service["serviceDate"] = new Date();
	service["unitPrice"] = parseFloat($(\'#service_te_unit_price\').val()).toFixed(decimal_point);
	service["serviceType"] = $(\'#service_cb_service_type\').val();
	service["isSelfPay"] = \'0\';
	service["subPrice"] = parseFloat($(\'#service_te_sub_price\').val()).toFixed(decimal_point);
	service["discountType"] = \'Amount\';
	service["discount"] = parseFloat($(\'#service_te_discount\').val()).toFixed(decimal_point);
	if(service["unitPrice"] == 0){
		service["discountRate"] = \'0\';
	}else{
		service["discountRate"] = parseFloat(service["discount"]*100/service["unitPrice"]*service["qty"]).toFixed(decimal_point);
	}
	service["patientID"] = \''; ?>
<?php echo $_GET['patient_id']; ?>
<?php echo '\';
	service["visitID"] = \''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\';

	if($(\'#service_te_orderid\').val() !== \'\' || $(\'#service_te_orderid\').val() !== null){
		//update
		service["startDate"] = $(\'#service_te_start_date\').val();
		service["oriSubPrice"] = $(\'#service_te_ori_sub_price\').val();
	}

	var json = JSON.stringify(service);
	$.post( "consultation_order.php", {act :\'save_service\', array : json}).done(function( data ) {
		var rs = JSON.parse(data);
		if(rs["is_success"] == 1){
			//document.getElementById(\'service_ok\').disabled = false;
			$(\'#dispensary_table\').html(rs.order_table_result);
			$(\'#invoice_total_table\').html(rs.invoice_table_result);

			if(rs.action=="Create"){
				$(\'#service_te_orderid\').val(rs.orderID);
				$(\'#service_te_start_date\').val(rs.startDate);
				$(\'#service_te_ori_sub_price\').val(rs.oriSubPrice);
			}else{
				reset_area();
			}
			toastr.success(\'Save Service Success!\');
		}else{
			//document.getElementById(\'service_ok\').disabled = false;
			toastr.error(rs["rs_msg"]);
		}
		btn_service_ok.ladda(\'stop\');
	});
}

function save_mc(){
	btn_mc_ok.ladda(\'start\');
	if(!$("#form_mc").valid() || !check_time()){
		btn_mc_ok.ladda(\'stop\');
		return;
	}
	//document.getElementById(\'mc_ok\').disabled = true;
	var mc = {};
	var check_state = $(\'#mc_ck_set_time\').is(":checked") == true ? "1" : "0";

	mc["orderID"] = $(\'#mc_te_orderid\').val();
	mc["days"] = $(\'#mc_te_days\').val();
	mc["reason"] = $(\'#mc_cb_type\').val();
	mc["nric"] = $(\'#mc_te_nric\').val();
	mc["doctorID"] = $(\'#mc_cb_doctor\').val();
	mc["startDate"] = $(\'#mc_de_start_date\').datepicker("getDate").toDBString();
	mc["endDate"] = $(\'#mc_de_end_date\').datepicker("getDate").toDBString();
	if(check_state==\'1\'){
		mc["startTime"] = $(\'#mc_ce_start_time\').val();
		mc["endTime"] = $(\'#mc_ce_end_time\').val();
	}
	mc["patientName"] = $(\'#mc_te_patient_name\').val();
	mc["patientID"] = \''; ?>
<?php echo $_GET['patient_id']; ?>
<?php echo '\';
	mc["visitID"] = \''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\';
	mc["remark"] = $(\'#mc_te_remark\').val();

	var json = JSON.stringify(mc);

	$.post( "consultation_order.php", {act :\'save_mc\', array : json}).done(function( data ) {
		var rs = JSON.parse(data);
		if(rs["is_success"] == 1){
			//document.getElementById(\'mc_ok\').disabled = false;
			$(\'#dispensary_table\').html(rs.order_table_result);
			$(\'#invoice_total_table\').html(rs.invoice_table_result);

			if(rs.action=="Create"){
				$(\'#mc_te_orderid\').val(rs.orderID);
			}else{
				reset_area();
			}
			toastr.success(\'Save MC Success!\');
		}else{
			//document.getElementById(\'mc_ok\').disabled = false;
			toastr.error(rs["rs_msg"]);
		}
		btn_mc_ok.ladda(\'stop\');
	});
}

function set_time_enabled(){
	var check_state = $(\'#mc_ck_set_time\').is(":checked") == true ? "1" : "0";
	if(check_state==\'1\'){
		document.getElementById(\'mc_ce_start_time\').disabled = false;
		document.getElementById(\'mc_ce_end_time\').disabled = false;
		document.getElementById(\'mc_ce_start_time\').required = true;
		document.getElementById(\'mc_ce_end_time\').required = true;
		$(\'#mc_ce_start_time\').val(\'09:00\');
		$(\'#mc_ce_end_time\').val(\'18:00\');
	}else{
		document.getElementById(\'mc_ce_start_time\').disabled = true;
		document.getElementById(\'mc_ce_end_time\').disabled = true;
		document.getElementById(\'mc_ce_start_time\').required = false;
		document.getElementById(\'mc_ce_end_time\').required = false;
		$(\'#mc_ce_start_time\').val(\'\');
		$(\'#mc_ce_end_time\').val(\'\');
		$(\'#form_mc\').clearValidation();
	}
}

var edit_from_days = false;
var edit_from_start_date = false;
var edit_from_end_date = false;
function cal_duration(is_modify_endDate){
	if(init) return;
	if(is_modify_endDate){
		if(!edit_from_days && !edit_from_start_date){
			/* change end date */
			if( $(\'#mc_de_end_date\').val()==\'\')
				return;
			var startDate = moment($(\'#mc_de_start_date\').val(), \''; ?>
 <?php echo @moment_date_fmt; ?>
 <?php echo '\');
			var endDate =  moment($(\'#mc_de_end_date\').val(), \''; ?>
 <?php echo @moment_date_fmt; ?>
 <?php echo '\');

			var diff = endDate.diff(startDate, \'days\');

			if(diff<0){
				$(\'#mc_de_end_date\').datepicker(\'update\', startDate);
				return;
			}
			var days = diff+1;
			edit_from_end_date = true;
			$(\'#mc_te_days\').val(days);
			edit_from_end_date = false;
		}
	}else{
		if(!edit_from_end_date){
			edit_from_days = true;
			/* change start date , days */
			var days = Math.ceil(parseFloat($(\'#mc_te_days\').val()));
			if(days<1 || $(\'#mc_de_start_date\').val()==\'\')
				return;
			var oriDay = parseFloat($(\'#mc_te_days\').val());
			if((oriDay*10)%5 != 0){
				$(\'#mc_te_days\').val(days);
			}
			var oldDate = $(\'#mc_de_start_date\').datepicker("getDate");
			var newDate = new Date(oldDate.getFullYear(),oldDate.getMonth(),oldDate.getDate()+days-1);
			$(\'#mc_de_end_date\').datepicker(\'update\', newDate);
			edit_from_days = false;
		}
	}
}

function check_time(){
	var check_state = $(\'#mc_ck_set_time\').is(":checked") == true ? "1" : "0";
	if(check_state==\'0\') return true;
	var timefrom = new Date();
	temp = $(\'#mc_ce_start_time\').val().split(":");
	timefrom.setHours((parseInt(temp[0]) - 1 + 24) % 24);
	timefrom.setMinutes(parseInt(temp[1]));

	var timeto = new Date();
	temp = $(\'#mc_ce_end_time\').val().split(":");
	timeto.setHours((parseInt(temp[0]) - 1 + 24) % 24);
	timeto.setMinutes(parseInt(temp[1]));

	if (timeto < timefrom){
		swal({   
            title: "Warning",   
            text: "End time can\'t be larger than start time",
            type: "warning",
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "OK",   
            closeOnConfirm: true
		});
		return false;
	    //alert(\'start time should be smaller\');
	}else{
		return true;
	}
}

/* date diff function */
Date.prototype.dateDiff = function(interval,objDate){
	 var dtEnd = new Date(objDate);
	 if(isNaN(dtEnd)) return undefined;
	 switch (interval) {
		case "s": return parseInt((dtEnd - this) / 1000);  //sec
		case "n": return parseInt((dtEnd - this) / 60000);  //min
		case "h": return parseInt((dtEnd - this) / 3600000);  //hour
		case "d": return parseInt((dtEnd - this) / 86400000);  //day
		case "w": return parseInt((dtEnd - this) / (86400000 * 7));  //week
		case "m": return (dtEnd.getMonth() + 1) + ((dtEnd.getFullYear() - this.getFullYear())*12) - (this.getMonth() + 1);  //month
		case "y": return dtEnd.getFullYear() - this.getFullYear();  //year
	 }
}

Date.prototype.toDBString = function () {
    return moment(this).format(\'YYYYMMDD\');
};

$.fn.clearValidation = function(){
	var v = $(this).validate();$(\'[name]\',this).each(function(){v.successList.push(this);v.showErrors();});v.resetForm();v.reset();
};


'; ?>

</script>