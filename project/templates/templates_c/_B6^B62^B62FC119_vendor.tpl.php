<?php /* Smarty version 2.6.19, created on 2017-08-09 02:05:57
         compiled from vendor.tpl */ ?>
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
<!-- Select2 -->
<script src="js/plugins/select2/select2.full.min.js"></script>
 <!-- FooTable -->
<script src="js/plugins/footable/footable.all.min.js"></script>


<body class="fixed-sidebar no-skin-config full-height-layout">
<div id="wrapper" >
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
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="form-inline ">                         
                        <div class="input-group" style="width: 60%">
                            <input type="text" class="form-control input" id="filter" placeholder="Search Vendor">
                            <span class="input-group-btn">
                                <button class="ladda-button btn btn btn-primary" data-style="slide-up" id="btn_search_notes"> <i class="fa fa-search"></i></button>
                            </span>
                        </div>
                        <div class="input-group pull-right ">
                            <button type="button" class="btn btn-primary" onclick="reset_vendor_modal()">Create Vendor</button>
                        </div>
                    </div>  
                    <div id="vendor_table">                   
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'vendor_table.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                </div>
            </div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'vendor_create_modal.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>   
        </div>
        <!-- page footer -->
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'page_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   </div>
</div>

<script>
<?php echo '

     $(document).ready(function() {
        
    });
     function reset_vendor_modal(){
        $(\'#modal_title\').html(\'Create Vendor\');
        $(\'#vendor_modal\').modal();
     }
   

'; ?>



</script>
</body>

</html>