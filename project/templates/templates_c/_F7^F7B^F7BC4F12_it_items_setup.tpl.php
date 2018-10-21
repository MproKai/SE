<?php /* Smarty version 2.6.19, created on 2017-08-04 07:39:53
         compiled from it_items_setup.tpl */ ?>
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
<!-- footable -->
<script src="js/plugins/footable/footable.all.min.js"></script>
<!-- Select2 -->
<script src="js/plugins/select2/select2.full.min.js"></script>
<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>


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
			<div class="row">
            	<div class="col-lg-12">
                	<div class="m-t form-inline selectPeriod space-bottom">
                        <div class="form-group">
							<label class="font-noraml">&nbsp;&nbsp;Status&nbsp;</label>
							<select class="select2" style="width:200px" id="item_status" onchange="get_all_item_list()">
								<option value="">All</option>
			               		<option value="Active">Active</option>
			               		<option value="Delete">Inactive</option>
            				</select>
                   		</div>
                   		<div class="form-group">
							<label class="font-noraml">&nbsp;&nbsp;Item Type&nbsp;</label>
							<select  class="select2" style="width:200px" id="item_type" onchange="get_all_item_list()">
								<option value="">All</option>
			               		<option value="Drugs">Drugs</option>
			               		<option value="Lab/Scan">Lab/Scan</option>
			               		<option value="Service Item">Service Item</option>
            				</select>
                   		</div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
			<div class="ibox float-e-margins">
				<div class="ibox-content" id="items_modal">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'it_items_setup_modal.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>
			</div>
		<!-- page footer -->
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'page_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    	</div>
    </div>
</div>
<script>
<?php echo '
$(document).ready(function(){
		
	$(\'#item_status\').val(\'Active\');
	$(\'#item_type\').val(\'Drugs\');
	$(\'.select2\').select2();

	get_all_item_list();

});

function get_all_item_list(){

	var	it_status = $(\'#item_status\').val();
	var it_type = $(\'#item_type\').val();
	$.get(\'it_items_setup.php\',{act:\'get_all_item_list\', status : it_status , type : it_type},function(data){
		$(\'#items_modal\').html(data);
		$(\'.footable\').footable();
	});
}

'; ?>

</script>
</body>

</html>