<?php /* Smarty version 2.6.19, created on 2018-04-12 23:44:45
         compiled from home_queue.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'home_queue.tpl', 54, false),)), $this); ?>
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
				<div class="ibox-content">
            <div class="row">
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name </th>
                        <th>Phone </th>
                        <th>Address</th>
                        <th>Completed </th>
                        <th>Task</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $_from = $this->_tpl_vars['queue_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
                    <tr>
                        <td><?php echo $this->_tpl_vars['list']['order_id']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['list']['user_name']; ?>
</td>
                         <td><?php echo $this->_tpl_vars['list']['user_phone']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['list']['user_address']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['list']['bag_status']; ?>
</td>                        
                        <td>30%</td>
                        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['list']['time_start'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%D %I:%M %p ") : smarty_modifier_date_format($_tmp, "%D %I:%M %p ")); ?>
</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>                
                    </tbody>
                </table>
            </div>

        </div>
		</div>
    </div>
</div>



<script>
<?php echo '
$(document).ready(function(){
	
});

'; ?>

</script>
</body>

</html>