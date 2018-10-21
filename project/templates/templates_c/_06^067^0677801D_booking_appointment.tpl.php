<?php /* Smarty version 2.6.19, created on 2017-08-04 06:56:54
         compiled from booking_appointment.tpl */ ?>
<form class="form-horizontal">

    <div class="form-group">
        <div class="col-lg-6">
            <label class="col-lg-2 control-label"><strong>Type</strong></label>
            <div class="col-lg-8">
                <select id="booking_type" class="form-control" >
                    <?php $_from = $this->_tpl_vars['types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['types']):
?>
                    <option value="<?php echo $this->_tpl_vars['types']['vID']; ?>
"><?php echo $this->_tpl_vars['types']['vName']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <label class="col-lg-2 control-label"><strong>Patient</strong></label>
            <div class="col-lg-8">
                <select  class="form-control" id="booking_patient" style="width:245px"></select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-6">
            <label class="col-lg-2 control-label"><strong>Doctor</strong></label>
            <div class="col-lg-8">
                <select id="booking_doctor" class="form-control">
                    <?php $_from = $this->_tpl_vars['DoctorList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['doctors']):
?> 
                    <option value="<?php echo $this->_tpl_vars['doctors']['id']; ?>
"><?php echo $this->_tpl_vars['doctors']['text']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </div>
        </div>
		<div class="col-lg-6">
            <div class="checkbox checkbox-success">
          &nbsp;&nbsp;&nbsp;&nbsp;<input id="Informed" type="checkbox"><label for="Informed"><strong>&nbsp;Informed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
                <input id="Queued" type="checkbox"><label for="Queued"><strong>&nbsp;Queued&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
                <input id="Canceled" type="checkbox"><label for="Canceled"><strong>&nbsp;Canceled&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-12">
            <label class="col-lg-1 control-label"><strong>Subjet</strong></label>
            <div class="col-lg-10"><input type="text" class="form-control" value="" id="booking_subject"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-12">
            <label class="col-lg-1 control-label"><strong>Location</strong></label>
            <div class="col-lg-10"><input type="text" class="form-control" value="<?php echo $this->_tpl_vars['locations']['vName']; ?>
" id="booking_location"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-1" style="width:10%">
            <label class="col-lg-2 checkbox"><strong>Start</strong></label>
        </div>
        <div class="col-lg-5">
            <div class="col-lg-11 input-groupnopadding date" id="start_date">
                <input type="text" class="form-control" id="appointment_start_date" value=""/><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <select id="appointment_start_time" class="form-control" style="width:110px">
                    <option value=""></option> 
                    <?php $_from = $this->_tpl_vars['timelist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['t']):
?>
                    <option value="<?php echo $this->_tpl_vars['k']; ?>
"><?php echo $this->_tpl_vars['t']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>    
            </div>        
        </div>
        <div class="col-lg-5">
            <div class="checkbox checkbox-success" style="padding-left:0px">
                &nbsp;&nbsp;&nbsp;&nbsp;<input id="check_allday" type="checkbox">&nbsp;&nbsp;<label for="check_allday"><strong>AllDay</strong></label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-1" style="width:10%">
            <div class="i-checks input-groupnopadding">
                <label class="col-lg-2 checkbox" ><strong>End</strong></label>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="col-lg-11 input-groupnopadding date" id="end_date">
                <input type="text" class="form-control" id="appointment_end_date" value=""/><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <select id="appointment_end_time" class="form-control" style="width:110px">
                    <option value=""></option> 
                    <?php $_from = $this->_tpl_vars['timelist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['t']):
?>
                    <option value="<?php echo $this->_tpl_vars['k']; ?>
"><?php echo $this->_tpl_vars['t']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </div>     
        </div>
        <div class="col-lg-5" id="tiem_group_name">
            <div class="radio-inline" style="padding-left:0px">
                <label for="inlineRadio1"> Duration </label>
            </div>
            <div class="radio radio-info radio-inline">
                <input type="radio" id="inlineRadio1" value="15" name="time">
                <label for="inlineRadio1"><strong> 15 </strong></label>
            </div>
            <div class="radio radio-info radio-inline">
                <input type="radio" id="inlineRadio2" value="30" name="time">
                <label for="inlineRadio2"><strong> 30 </strong></label>
            </div>
            <div class="radio radio-info radio-inline">    
                <input type="radio" id="inlineRadio3" value="45" name="time">
                <label for="inlineRadio3"><strong> 45 </strong></label>
            </div>
            <div class="radio radio-info radio-inline">  
                <input type="radio" id="inlineRadio4" value="60" name="time">
                <label for="inlineRadio4"><strong> 60 </strong></label>
            </div>
        </div>
    </div>
    <div class="form-group col-lg-12 form-inline">
        <textarea class="form-control" id="instruction" rows="6" style="width:800px;"></textarea>
    </div>
</form>
<div class="clear"></div>
