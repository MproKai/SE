<?php /* Smarty version 2.6.19, created on 2017-08-08 01:49:24
         compiled from report_monthly_collection.tpl */ ?>
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
<!-- Morris -->
<!--script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="js/plugins/morris/morris.js"></script-->
    <!-- ChartJS-->
<script src="js/plugins/chartJs/Chart.min.js"></script>
<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<!-- Data picker -->
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
<!-- ladda -->
<link href="css/plugins/ladda/ladda-themeless.min.css" rel="stylesheet">
<script src="js/plugins/ladda/spin.min.js"></script> 
<script src="js/plugins/ladda/ladda.min.js"></script> 
<script src="js/plugins/ladda/ladda.jquery.min.js"></script> 
<script src="js/plugins/fullcalendar/moment.min.js"></script>

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
        <div class="row wrapper border-bottom white-bg page-heading animated fadeInLeft">
            <div calss="ibox-content " >
                <div class="form-inline ">  
                    <div class="input-daterange input-group" id="daterange_selector">
                        <input type="text" class="input-sm form-control" name="start" value="" id="start_date"/>
                        <span class="input-group-addon">to</span>
                        <input type="text" class="input-sm form-control" name="end" value="" id="end_date"/>
                    </div>
                          
                    <div class="input-group">
                        <button id="btn_search" class="ladda-button btn btn btn-primary"  data-style="slide-up" type="button" ><i class="fa fa-search"></i> <span class="bold">Search</span></button>
                    </div>
                </div>    
            </div>
        </div>        
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox float-e-margins">
                        
                        <div class="ibox-content" id="table_content">

                        </div>
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





<script>
<?php echo '

     $(document).ready(function() {
        //for select year
        // $(\'#year_selector\').datepicker({
        //     minViewMode: 2,
        //     keyboardNavigation: false,
        //     forceParse: false,
        //     autoclose: true,
        //     todayHighlight: true,
        //     format: "yyyy"
        // });
   
        $(\'#daterange_selector\').datepicker({
            //startView: 2,
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true,
            format: \''; ?>
 <?php echo @javascript_dateformat; ?>
 <?php echo '\'
        });
        //set default date
        var date = new Date();
        date.setDate(date.getDate() - 30);
        $(\'#start_date\').datepicker(\'setDate\',  date);
        $(\'#end_date\').datepicker(\'setDate\',  new Date());

        //search btn click event
        var l = $("#btn_search").ladda();
        l.click(function(){
            l.ladda(\'start\');
            //put function here to set button ladda
            get_monthly_report(l);
        });
        get_monthly_report();
    });

    function get_monthly_report(ladda_btn){
        $.get( "report.php", {act :"get_monthly_collection_report" , start_date : $(\'#start_date\').datepicker("getDate").toDBString() , end_date : $(\'#end_date\').datepicker("getDate").toDBString()}).done(function( data ) {
            $(\'#table_content\').html(data); 
            if(ladda_btn != null){
                ladda_btn.ladda(\'stop\');
            }
        });
       
    }

Date.prototype.toDBString = function () {
    return moment(this).format(\'YYYY-MM-DD\');
};

'; ?>



</script>
</body>

</html>