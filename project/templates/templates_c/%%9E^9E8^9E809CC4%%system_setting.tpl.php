<?php /* Smarty version 2.6.19, created on 2018-04-14 04:57:56
         compiled from system_setting.tpl */ ?>
<!DOCTYPE html>
<html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<!-- Select2 -->
<script src="js/plugins/select2/select2.full.min.js"></script>

<!-- Sweet alert -->
<script src="js/plugins/sweetalert/sweetalert.min.js"></script>
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
        <div class="wrapper wrapper-content animated fadeInLeft" >
			<div class="ibox">
                <div class="wrapper" style="padding:0px">
                    <div class="row">

                        <div id="bag_info_list" class="col-lg-12">
                            <div class="widget ibox-content">
                                <div class="row">
                                    <div class="col-lg-8">
                                      <h2><strong>Bag List</strong></h2>
                                    </div>
                                </div>
                                <input type="text" class="form-control input-sm m-b-xs" id="filter" placeholder="Filter Key word">
                                <table class="footable table table-stripped table-hover" data-page-size="25" data-filter="#filter">
                                    <thead>
                                        <tr>
                                            <th data-sort-ignore="true" >Bag Seq</th>
                                            <th data-sort-ignore="true" >Bag Type</th>
                                            <th data-sort-ignore="true" >Project Type</th>
                                            <th data-sort-ignore="true" >Price</th>
                                            <th data-sort-ignore="true" >Laundry</th>
                                            <th data-sort-ignore="true" >Status</th>
                                            <th class="text-right" data-sort-ignore="true" ></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $_from = $this->_tpl_vars['get_user_bag_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
                                        <tr>
                                            <td><?php echo $this->_tpl_vars['list']['bag_seq']; ?>
</td>
                                            <td><?php echo $this->_tpl_vars['list']['bag_type']; ?>
</td>
                                            <td><?php echo $this->_tpl_vars['list']['project_type']; ?>
</td>
                                            <td><?php echo $this->_tpl_vars['list']['price']; ?>
</td>
                                            <td><?php echo $this->_tpl_vars['list']['laundry_name']; ?>
</td>
                                            <td> <span class="label label-success">Completed</span></td>
                                            <td><button class="btn btn-success btn-outline btn-xs" onclick="edit_bag_info(<?php echo $this->_tpl_vars['list']['bag_seq']; ?>
)">Edit</button></td>
                                        </tr>
                                        <?php endforeach; endif; unset($_from); ?>  
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="20">
                                                <ul class="pagination pull-right"></ul>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>   
                            </div> 
                        </div>
               
                        <div id="modal_content">
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
   $(\'.select2\').select2();
});

function edit_bag_info($bag_seq){
    $(\'#bag_info_list\').attr("class" , "col-lg-6 animated fadeInDown");
    $.get(\'system_setting.php\',{act:\'deit_gab_info\' ,bag_seq: $bag_seq},function(data){
        $(\'#modal_content\').show();
        $(\'#modal_content\').attr("class" , "col-lg-6 animated fadeInRight");
        $(\'#modal_content\').html(data);
    });
}
'; ?>

</script>
</body>

</html>