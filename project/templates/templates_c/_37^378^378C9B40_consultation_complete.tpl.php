<?php /* Smarty version 2.6.19, created on 2017-08-04 06:56:57
         compiled from consultation_complete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'consultation_complete.tpl', 74, false),)), $this); ?>
<div id="wrapper" class="gray-bg">
	<div class="row wrapper border-bottom white-bg page-heading">
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="wrapper wrapper-content animated fadeInRight">
			<!--<?php $_from = $this->_tpl_vars['InvoiceList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Invoice']):
?>-->
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>Invoice No. <?php echo $this->_tpl_vars['Invoice']['InvoiceID']; ?>
</h5>
						<!--div class="ibox-tools">
							<a class="collapse-link">
								<i class="fa fa-chevron-up"></i>
							</a>
						</div-->
					</div>
					<div class="ibox-content p-xl">
						<div class="row">
							<div class="col-sm-6">
								<h5>To:</h5>
								<address>
									<?php if ($this->_tpl_vars['Invoice']['Company'] == ""): ?>
									<strong><?php echo $this->_tpl_vars['Invoice']['PatientName']; ?>
</strong><br>
									<?php else: ?>
									<strong><?php echo $this->_tpl_vars['Invoice']['Company']; ?>
</strong><br>
									<?php endif; ?>
									<strong><?php echo $this->_tpl_vars['Invoice']['Address']; ?>
</strong>
								</address>
								<?php if ($this->_tpl_vars['Invoice']['PlanName'] != ""): ?>
								<h5>Plan:</h5>
								<address>
									<strong><?php echo $this->_tpl_vars['Invoice']['PlanName']; ?>
</strong>
								</address>
								<?php elseif ($this->_tpl_vars['Invoice']['ProjectName'] != ""): ?>
								<h5>Project:</h5>
								<address>
									<strong><?php echo $this->_tpl_vars['Invoice']['ProjectName']; ?>
</strong>
								</address>
								<?php endif; ?>
							</div>

							<div class="col-sm-6 text-right">
								<h4>Invoice No.</h4>
								<h4 class="text-navy"><?php echo $this->_tpl_vars['Invoice']['InvoiceID']; ?>
</h4>
								<address>
								</address>
								<p>
									</br>
									<span><strong>Patient :</strong> <?php echo $this->_tpl_vars['Invoice']['PatientName']; ?>
</br></span>
									<span><strong>Doctor :</strong> <?php echo $this->_tpl_vars['Invoice']['DoctorName']; ?>
</br></span>
									<span><strong>Invoice Date :</strong> <?php echo $this->_tpl_vars['Invoice']['InvoiceDateString']; ?>
</span>
								</p>
							</div>
						</div>

						<div class="table-responsive m-t">
							<table class="table invoice-table">
								<thead>
								<tr>
									<th width="50%">Item Name</th>
									<th width="10%">UOM</th>
									<th width="10%">Quantity</th>
									<th width="10%">Unit Price</th>
									<th width="10%" style= "text-align:right" >DISC</th>
									<th width="10%">Total Price</th>
								</tr>
								</thead>
								<tbody>									
								<?php $_from = $this->_tpl_vars['Invoice']['itemList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['invoice_item']):
?>
								<tr>
									<td><div><strong><?php echo $this->_tpl_vars['invoice_item']['ItemName']; ?>
</strong></div><small><?php echo $this->_tpl_vars['invoice_item']['ItemDescription']; ?>
</small></td>
									<td><?php echo $this->_tpl_vars['invoice_item']['Unit']; ?>
</td>
									<td><?php echo $this->_tpl_vars['invoice_item']['ItemQty']; ?>
</td>
									<td><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice_item']['ItemUnitPrice'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
									<td  align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice_item']['ItemDiscount'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
									<td><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice_item']['ItemAmount'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
								</tr>
								<?php endforeach; endif; unset($_from); ?>
								</tbody>
							</table>
						</div><!-- /table-responsive -->

						<table class="table invoice-total">
							<tbody>
							<tr>
								<td><strong>Sub Total :</strong></td>
								<td>$<?php echo ((is_array($_tmp=$this->_tpl_vars['Invoice']['SubTotal'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
							</tr>
							<tr>
								<td><strong>Tax :</strong></td>
								<td>$<?php echo ((is_array($_tmp=$this->_tpl_vars['Invoice']['TaxPrice'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
							</tr>
							<tr>
								<td><strong>Total :</strong></td>
								<td>$<?php echo ((is_array($_tmp=$this->_tpl_vars['Invoice']['InvoiceTotal'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
							</tr>
							<tr>
								<td><strong>Outstanding balance :</strong></td>
								<td>$<?php echo ((is_array($_tmp=$this->_tpl_vars['Invoice']['outstanding'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
							</tr>
							</tbody>
						</table>
						<?php if ($this->_tpl_vars['Invoice']['remark'] != ""): ?>
						<div class="well m-t"><strong>Remarks: </strong>
							<?php echo $this->_tpl_vars['Invoice']['remark']; ?>

						</div>
						<?php endif; ?>		
					</div>
				</div>
			<!--<?php endforeach; endif; unset($_from); ?>-->

			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Payment</h5>
				</div>
				<div class="ibox-content">
					<div class="row">
						<form id="form_payment">
							<div class="form-group col-lg-3">
								<label>Payment Type</label> 
								<select class="form-control" id="cb_payment_type" placeholder="Select type">
					                <?php $_from = $this->_tpl_vars['PaymentTypeList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Type']):
?>
					                	<option value=<?php echo $this->_tpl_vars['Type']['id']; ?>
><?php echo $this->_tpl_vars['Type']['text']; ?>
</option>
					                <?php endforeach; endif; unset($_from); ?>
	            				</select>
								<!--input type="text" placeholder="Select type" class="form-control" id="cb_payment_type"-->
							</div>
							<div class="form-group col-lg-3">
								<label>Payment Amount</label> 
								<input type="text" placeholder="Amount" class="form-control" id="te_payment_amount" value="<?php echo $this->_tpl_vars['Invoice']['outstanding']; ?>
" name="te_payment_amount">
							</div>
							<div class="form-group col-lg-5">
								<label>Remark</label> 
								<input type="text" class="form-control" id="te_remark">
							</div>
						</form>
						<div class="col-lg-12 pull-right" align="right">
							<button type="button" class="ladda-button btn btn btn-primary" data-style="expand-right" id="btn_complete"><i class="fa fa-check"></i>&nbsp;&nbsp;Complete</button>
							<button type="button" class="btn btn btn-danger " data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;&nbsp;Cancel</button>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

<script>
<?php echo '

$(document).ready(function(){	
	$(\'#form_payment\').validate({
    	rules:{
    		te_payment_amount: {
	            required: true,
	            number: true,
	            min: 0.01,
	            max: \''; ?>
<?php echo $this->_tpl_vars['Invoice']['outstanding']; ?>
<?php echo '\'
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

var btn_complete = $("#btn_complete").ladda();
btn_complete.click(function(){
	complete_handler();
});

function complete_handler(){
	btn_complete.ladda( \'start\' );
	if(!$("#form_payment").valid()){
		return;
	}
	var decimal_point = \''; ?>
<?php echo @invoice_decimal_point; ?>
<?php echo '\';
	var info = {};
	info["visitID"] = \''; ?>
<?php echo $_GET['visit_id']; ?>
<?php echo '\';
	info["patientID"] = \''; ?>
<?php echo $_GET['patient_id']; ?>
<?php echo '\';
	info["paymentType"] = $(\'#cb_payment_type\').val();
	info["paymentAmount"] = parseFloat($(\'#te_payment_amount\').val()).toFixed(decimal_point);
	info["invoiceID"] = \''; ?>
<?php echo $this->_tpl_vars['Invoice']['InvoiceID']; ?>
<?php echo '\';
	info["outstanding"] =  parseFloat(\''; ?>
<?php echo $this->_tpl_vars['Invoice']['outstanding']; ?>
<?php echo '\').toFixed(decimal_point);
	info["invoiceStatus"] = \''; ?>
<?php echo $this->_tpl_vars['Invoice']['Status']; ?>
<?php echo '\';
	info["invoiceDate"] = \''; ?>
<?php echo $this->_tpl_vars['Invoice']['InvoiceDateString']; ?>
<?php echo '\';
	info["remark"] = $(\'#te_remark\').val();

	var json = JSON.stringify(info);
	$.post( "consultation_menu.php", {act :\'complete_consultation\', info_arr : json}).done(function( data ) {
		var rs = JSON.parse(data);
		if(rs["is_success"] == 1){
			localStorage.setItem("CompleteConsultationMessage","Completed consultation success!!");
			window.location.assign("pt_queue.php");
		}else{
			toastr.error(rs["rs_msg"]);
		}
		btn_complete.ladda(\'stop\');
	});
}

'; ?>

</script>