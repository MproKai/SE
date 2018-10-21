<?php /* Smarty version 2.6.19, created on 2018-04-14 05:11:48
         compiled from system_setting_modal.tpl */ ?>
 <div class="widget ibox-content">
    <h2><strong>Edit Bag Information</strong></h2>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label class="control-label rf-label">Bag seq</label>
                <input type="text" class="form-control" name="bag_seq" id="bag_seq" disabled="true" value="<?php echo $this->_tpl_vars['bag_seq']; ?>
">    
            </div>
             <div class="col-lg-8">
                <label class="control-label rf-label">Project Type</label>
                <select class="select2" style="width:100%" id="project_type" >
                    <?php $_from = $this->_tpl_vars['type_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
                    <option value="<?php echo $this->_tpl_vars['list']['project_id']; ?>
"><?php echo $this->_tpl_vars['list']['project_type']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>                     
            </div>  
        </div>                          
    </div>   
    <div class="form-group">
        <div class="row">
            <div class="col-lg-12">
                <label class="control-label rf-label">Laundry</label>
                <select class="select2" style="width:100%" id="laundry" >
                    <?php $_from = $this->_tpl_vars['laundry_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
                    <option value="<?php echo $this->_tpl_vars['list']['laundry_id']; ?>
"><?php echo $this->_tpl_vars['list']['laundry_name']; ?>
 , <?php echo $this->_tpl_vars['list']['laundry_address']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>       
            </div>  
             
        </div>                      
    </div>
    
    <div class="form-group">
         <button id="btn_save" class="ladda-button btn btn-primary"  data-style="slide-up" type="button" onclick="save()"><span class="bold ">Save</span></button>
          <button id="btn_save" class="ladda-button btn btn-danger"  data-style="slide-up" type="button" onclick="cancel()"><span class="bold ">Cancel</span></button>
    </div>
  </div>
</div>
<script>
<?php echo '
$(document).ready(function(){
   $(\'.select2\').select2();
   $("#project_type").select2("val", "'; ?>
<?php echo $this->_tpl_vars['project_id']; ?>
<?php echo '");
   $("#laundry").select2("val", "'; ?>
<?php echo $this->_tpl_vars['laundry_id']; ?>
<?php echo '");
});

function cancel(){
     $(\'#modal_content\').hide();
     $(\'#modal_content\').attr("class" , " animated fadeOutRight");
    $(\'#bag_info_list\').attr("class" , "col-lg-12 animated fadeInLeft");

}
function save(){
    var bag_seq = $(\'#bag_seq\').val();
    var laundry_id = $(\'#laundry\').val();
    var project_id = $(\'#project_type\').val();

     $.get(\'system_setting.php\',{act:\'update_user_bag_info\' ,bag_seq: bag_seq , project_id : project_id , laundry_id : laundry_id},function(data){
      //console.log(data);
        location.reload();
    });
}
'; ?>

</script>