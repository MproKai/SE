<?php /* Smarty version 2.6.19, created on 2018-04-05 02:15:43
         compiled from pt_add_visit.tpl */ ?>
<!--Combogrid-->
<link href="css/easyui.css" rel="stylesheet">
<script src="js/plugins/combogrid/jquery.easyui.min.js"></script>
<!--chosen-->
<script src="js/plugins/chosen/chosen.jquery.js"></script>

<form id = "form_visit" class="form-horizontal" method="post" action="pt_add_visit.php" onsubmit="return validate_field();">
    <div class="form-group">
        <label class="col-lg-3 control-label">Patient</label>
        <div class="col-lg-7">
            <select id="visit_patient" name ="visit_patient"></select>
        </div>
    </div> 
    <div class="form-group">
        <label class="col-lg-3 control-label">Visit Type</label>
        <div class="col-lg-7">
            <select class="form-control" id="visit_type" name="visit_type">
                <?php $_from = $this->_tpl_vars['VisitType']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Type']):
?>
                <option value=<?php echo $this->_tpl_vars['Type']['id']; ?>
><?php echo $this->_tpl_vars['Type']['text']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
        </div>           
    </div>       
    <!--div class="form-group">
        <label class="col-lg-3 control-label">QNo</label>
        <div class="col-lg-2">
            <div><input type="text" class="form-control" id="visit_queue_no"></inpout></div>   
        </div>             
    </div-->
    <div class="form-group">
        <label class="col-lg-3 control-label"><strong>Doctor</strong></label>
        <div class="col-lg-7">
            <select class="form-control" id="visit_doctor" name="visit_doctor" required="">
                <?php $_from = $this->_tpl_vars['DoctorList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['doctor']):
?>
                <option  value="<?php echo $this->_tpl_vars['doctor']['id']; ?>
"><?php echo $this->_tpl_vars['doctor']['text']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><strong>Instruction</strong></label>
        <div class="col-lg-7"><input type="text" class="form-control" id="visit_instruction" name="visit_instruction"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><strong>Remark</strong></label>
        <div class="col-lg-7"><textarea class="form-control" rows="5" id="visit_remark" name="visit_remark"></textarea></div>
    </div>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-7">
            <div class="pull-right">
                <button type="submit" class="btn btn-primary" id="save_appointment">Save</button>
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>      
</form>

<script>
<?php echo '

$(document).ready(function(){
     
    $patient_id="'; ?>
<?php echo $_GET['patient_id']; ?>
<?php echo '";
    if($patient_id){    
        $count = 0; 
        $("#visit_patient").combogrid({
            panelWidth: 600,
            loadMsg : \'Loading\', 
            mode : \'remote\',
            delay: 500,
            idField: \'PatientID\',
            textField: \'PatientName\',
            url: \'\',
            method: \'get\',
            columns: [[
                {field:\'PatientID\',title:\'PatientID\',width:\'20%\'},
                {field:\'PatientName\',title:\'PatientName\',width:\'60%\'},
                {field:\'NRIC\',title:\'NRIC\',width:\'20%\'}
            ]],
            fitColumns: true,
            labelPosition: \'top\'
        });
        $combogrid = $(\'#visit_patient\').combogrid(\'grid\');
        $combogrid.datagrid({url : \'patient.php?act=getpt&current_id=\' + $patient_id});
        $combogrid.datagrid({
            onLoadSuccess : function(res){
                if($count > 0){

                }else{
                     $("#visit_patient").combogrid(\'setValue\',{PatientID : $patient_id});
                    $count+=1;
                }
            }
        });
    }else{
         $("#visit_patient").combogrid({
            panelWidth: 600,
            loadMsg : \'Loading\', 
            mode : \'remote\',
            delay: 500,
            idField: \'PatientID\',
            textField: \'PatientName\',
            url: \'patient.php?act=getpt\',
            method: \'get\',
            columns: [[
                {field:\'PatientID\',title:\'PatientID\',width:\'20%\'},
                {field:\'PatientName\',title:\'PatientName\',width:\'60%\'},
                {field:\'NRIC\',title:\'NRIC\',width:\'20%\'}
            ]],
            fitColumns: true,
            labelPosition: \'top\'
        });
        $("#visit_patient").disabled = false;
    }

        
    $("#visit_type").chosen({
        dropdownAutoWidth : false,
        width: \'100%\',
        placeholder: {
            id: \'-1\', // the value of the option
            text: \'Quick Search...\'
        }
    }); 

    $("#visit_doctor").chosen({
        dropdownAutoWidth : false,
        width: \'100%\',
        placeholder: {
            id: \'-1\', // the value of the option
            text: \'Quick Search...\'
        }
    }); 
});



/*function render_visit_room(){
    var visit_type = $("#visit_type").val();
    $("#visit_room").select2({
        ajax:{
            url: \'pt_add_visit.php\',
            dataType: \'json\',
            delay: 250,
            data: function (params) {
                return {
                    act : \'get_visit_room\', 
                    visit_type : visit_type
                };
            },
            processResults: function (data) {
                return {
                    results:data
                };
            }
        }   
    }); 
}*/
function validate_field(){
    $patient_id;
    $combogrid = $(\'#visit_patient\').combogrid(\'grid\');

    if($combogrid.datagrid(\'getSelected\')){
        $row = $combogrid.datagrid(\'getSelected\');
        $patient_id = $row.PatientID;
    }else{
        $patient_id = null;
    }
   
    if($patient_id){
        return true;
    }else{
        return false;
    }
}


'; ?>

</script>

