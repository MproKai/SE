<?php /* Smarty version 2.6.19, created on 2018-10-08 20:25:03
         compiled from home_titanic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'json_encode', 'home_titanic.tpl', 61, false),)), $this); ?>
<!DOCTYPE html>
<html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



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
		    <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Bar Chart Example</h5>
                    </div>
                    <div class="ibox-content">
                        <div>
                            <div id="slineChart" ></div>
                        </div>
                    </div>
                </div>
            </div>

		</div>
    </div>
</div>




    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Steps -->
    <script src="js/plugins/steps/jquery.steps.min.js"></script>

    <!-- Jquery Validate -->
    <script src="js/plugins/validate/jquery.validate.min.js"></script>
       <!-- d3 and c3 charts -->
    <script src="js/plugins/d3/d3.min.js"></script>
    <script src="js/plugins/c3/c3.min.js"></script>
<script>
<?php echo '
    $(document).ready(function(){
        // JSON.parse();
        // JSON.stringify();
        var rs = JSON.parse(\''; ?>
<?php echo json_encode($this->_tpl_vars['age_list']); ?>
<?php echo '\');
        
        rs[0].unshift(\'Male\');
        rs[1].unshift(\'Female\');
 
        
        c3.generate({
                bindto: \'#slineChart\',
                data:{
                    x: \'x\',
                    columns: [
                        [\'x\', 10, 20, 30, 40, 50, 60 , 70 , 80 , 90],
                        rs[0],
                        rs[1]
                    ],
                    colors:{
                        data1: \'#1ab394\',
                        data2: \'#BABABA\'
                    },
                    type: \'spline\'
                }
            });
    });
'; ?>

</script>

</body>

</html>