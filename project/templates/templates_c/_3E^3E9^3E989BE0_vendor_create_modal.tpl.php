<?php /* Smarty version 2.6.19, created on 2017-08-08 10:34:25
         compiled from vendor_create_modal.tpl */ ?>
<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>
<!-- Taostr -->
<script src="js/plugins/toastr/toastr.min.js"></script>
<!-- Jquery Validate -->
<script src="js/plugins/validate/jquery.validate.min.js"></script>

<div class="modal inmodal fade" id="vendor_modal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog"   style="width:60%">
        <div class="modal-content">
            <form class="form-horizontal" id="form">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="modal_title">Create Vandor</h4>
                    <!--small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small-->
                </div>

                <div class="modal-body">
                    <!--Create Tab-->
                   <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab_info"><i class="fa fa-list-alt"></i>General Info</a></li>
                            <li class=""><a data-toggle="tab" href="#tab_notes"><i class="fa fa-book"></i>Notes</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab_info" class="tab-pane active">
                                <div class="panel-body">
                                    
                                        <!--Vendoe name and preferred/in-house-->
                                         <div class="form-group">
                                            <label class="col-lg-2 control-label"><strong>Vendor Name</strong></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" value="" id="vendor_name" name="vendor_name">
                                            </div>
                                            <div class="col-lg-2">
                                                 <div class="i-checks"><label> <input id="vendor_preferred" type="checkbox"> <i></i><strong>Preferred</strong></label></div>
                                            </div>
                                            <div class="col-lg-2">            
                                                <div class="i-checks"><label> <input id="vendor_inhouse" type="checkbox"> <i></i><strong>In-house</strong></label></div>
                                            </div>                
                                        </div>
                                        <!--Vendoe code and type-->
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label"><strong>Vendor Code</strong></label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" value="" id="vendor_code" name="vendor_code">
                                            </div>
                                            <label class="col-lg-2 control-label"><strong>Vendor Type</strong></label>
                                            <div class="col-lg-4">
                                                <select  class="form-control select2" id="vendor_type" name="vendor_type" style="width:100%">
                                                    <option style="display:none;" selected></option>
                                                    <option >Lab/Scan</option>
                                                    <option >Service</option>
                                                    <option >Drugs</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--Vendoe phone and fax-->
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label"><strong>Phone</strong></label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" value="" id="vendor_phone">
                                            </div>
                                            <label class="col-lg-2 control-label"><strong>Fax</strong></label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" value="" id="vendor_fax">
                                            </div>
                                        </div>
                                        <!--Vendoe email-->
                                        <div class="form-group">            
                                            <label class="col-lg-2 control-label"><strong>Email</strong></label>
                                            <div class="col-lg-10">
                                                <input type="email" class="form-control" value="" id="vendor_email">
                                            </div>
                                        </div>
                                        <!--Vendoe website-->
                                        <div class="form-group">            
                                            <label class="col-lg-2 control-label"><strong>Website</strong></label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" value="" id="vendor_website">
                                            </div>
                                        </div>
                                        <!--Vendoe address-->
                                        <div class="form-group">            
                                            <label class="col-lg-2 control-label"><strong>Address</strong></label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" value="" id="vendor_address">
                                            </div>
                                        </div>
                                        <!--Vendoe postal and country-->
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label"><strong>Postal</strong></label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" value="" id="vendor_postal">
                                            </div>
                                            <label class="col-lg-2 control-label"><strong>Country</strong></label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" value="" id="vendor_country">
                                            </div>
                                        </div>
                                          <!--Vendoe address-->
                                        <div class="form-group">            
                                            <label class="col-lg-2 control-label"><strong>Remarks</strong></label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control" id="vendor_remarks" rows="6" style="width:100%;"></textarea>
                                            </div>
                                        </div>
                                        <!--Vendoe disable-->
                                        <div class="form-group">     
                                            <div class="i-checks pull-right"><label> <input id="vendor_disable" type="checkbox"> <i></i><strong>Disable&nbsp;&nbsp;&nbsp;</strong></label></div>
                                        </div>
                                    
                                </div>
                            </div>
                            <div id="tab_notes" class="tab-pane">
                                <div class="panel-body">
                                    <!--Vendoe notes-->
                                    <strong>Notes</strong>
                                    <textarea class="form-control" id="vendor_notes" style="width:100%;height:500px"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button  class="btn btn-primary"  type="button" onclick="save_vendor(true)">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
<?php echo '
   $(document).ready(function() {
        $(\'.i-checks\').iCheck({
            checkboxClass: \'icheckbox_square-green\',
            radioClass: \'iradio_square-green\',
        });
         $("#form").validate({
                 rules: {
                     vendor_name: {
                         required: true                         
                     },
                      vendor_code: {
                         required: true                         
                     },
                       vendor_type: {
                         required: true                         
                     }                         
                 }
             });
    });

   //create vendor
    function save_vendor(is_insert){
        if($(\'#vendor_code\').val()!=\'\' && $(\'#vendor_type\').val()!=\'\' && $(\'#vendor_name\').val()!=\'\'){
            //Adress1,Code,Country,Email,Fax,kind,Phone,Postal,PreferredVendor,Remarks,Status,VendorName,Website,Notes,IsInHouse
            var vendor_detail = [ 
                $(\'#vendor_address\').val() ,
                $(\'#vendor_code\').val() ,
                $(\'#vendor_country\').val() ,
                $(\'#vendor_email\').val() ,
                $(\'#vendor_fax\').val() ,
                $(\'#vendor_type\').val() ,
                $(\'#vendor_phone\').val() ,
                $(\'#vendor_postal\').val() ,
                $(\'#vendor_preferred\').is(\':checked\')?\'True\':\'False\',
                $(\'#vendor_remarks\').val() ,
                $(\'#vendor_disable\').is(\':checked\')?\'Close\':\'Open\' ,
                $(\'#vendor_name\').val() ,
                $(\'#vendor_website\').val() ,
                $(\'#vendor_notes\').val() ,
                $(\'#vendor_inhouse\').is(\':checked\') ?1:0
            ];
            $.post(\'vendor.php\',{act : \'save_vendor\', vendor_detail:vendor_detail , is_insert:is_insert},function(data){           
                
               var rs = JSON.parse(data);
                console.log(rs.vendor_table_html);
                $(\'#vendor_table\').html(rs.vendor_table_html);
                if(rs["is_success"] == 1){
                    toastr.options = {
                        "closeButton": true,
                        "positionClass": "toast-bottom-right",
                        "timeOut": "2000"
                    };
                    toastr.success(\'Success ! \',rs["rs_msg"]);
                    document.getElementById("form").reset();
                    $("#vendor_modal").modal(\'hide\');
                }       
             }); 
        }else{
            toastr.options = {
                    "closeButton": true,
                    "positionClass": "toast-top-center",
                    "timeOut": "2500"
                };
            toastr.error(\'Error ! \', "Name,Code,Type Can\'t be empty!");
        }
    }
'; ?>

</script>