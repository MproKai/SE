<?php /* Smarty version 2.6.19, created on 2017-07-28 07:32:11
         compiled from drug_usage_report.tpl */ ?>
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
        <!--div class="row wrapper border-bottom white-bg page-heading animated fadeInLeft">
            <div class="col-md-10">
                <h2>Top 20 Drugs Usage Report</h2>
            </div>
        </div-->
        <div class="row wrapper border-bottom white-bg page-heading animated fadeInLeft">
            <div calss="ibox-content " >
                <div class="form-inline ">
                    <!--div class="input-group">
                        <div class="form-group" >
                            <div class="input-group date" id="year_selector">
                                <span class="input-group-addon" ><i class="fa fa-calendar"></i></span><input type="text" class="form-control" id="selected_year" value="2017">
                            </div>
                        </div>
                    </div-->
            
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
            <div class="row"  style="background-color:#FFFFFF">
                <div class="col-md-4" id="detail_box">
                    <div class = "ibox-content" id="report_detail">                   
                        <table class="table animated fadeInDown">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Drugs Name</th>
                                <th>Quantuty</th>
                            </tr>
                            </thead>
                            <tbody>                                
                            <?php $_from = $this->_tpl_vars['top20_drugs_result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
                            <tr>
                                <td ><span class="label" style="background-color: <?php echo $this->_tpl_vars['rs']['color']; ?>
"><font color="#ffffff"><?php echo $this->_tpl_vars['rs']['Ranking']; ?>
</font></span></td>
                                <td><?php echo $this->_tpl_vars['rs']['DrugsName']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['rs']['Quantity']; ?>
</td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?>
                        </table>
                    </div>
                </div>

                <div class="col-md-8" id="report_box">
                    <div class="ibox float-e-margins" id="report_content">
                        <div class="ibox-content">
                            <div class="sk-spinner sk-spinner-wave" id="spinner">
                                <div class="sk-rect1"></div>
                                <div class="sk-rect2"></div>
                                <div class="sk-rect3"></div>
                                <div class="sk-rect4"></div>
                                <div class="sk-rect5"></div>
                            </div>
                            <button id="btn_enlarge" class="btn btn-white btn-bitbucket pull-right" onclick="enlarge()"><i class="fa fa-search-plus"></i></button>
                            <button id="btn_narrow" class="btn btn-white btn-bitbucket pull-right" onclick="narrow()" style="display: none"><i class="fa fa-search-minus"></i></button>
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
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
        //draw bar chart
        get_result();
        //search btn click event
        var l = $("#btn_search").ladda();
        l.click(function(){
            l.ladda(\'start\');
            get_result(l);
            get_detail();
        });

    });


    function get_result(ladda_btn){       
        console.log($(\'#start_date\').val());
        $(\'#spinner\').attr("style" , "display:true");
        $(\'#barChart\').attr("class" , " animated fadeOutDown");
        $(\'#barChart\').remove();
        $(\'#report_content\').append(\'<canvas id="barChart" height="185%"></canvas>\');
        $.get( "report.php", {act :"get_drug_usage_report" , start_date : $(\'#start_date\').val() , end_date : $(\'#end_date\').val()}).done(function( data ) {
            $(\'#barChart\').attr("class" , " animated fadeInDown");
            //sk-loading  start
            $(\'#report_content\').children(\'.ibox-content\').toggleClass(\'sk-loading\');
            //parse json array
            var dt =  JSON.parse(data);     
            //set bar data
            var barData = {
                labels: dt[0],
                datasets: [          
                    {
                        backgroundColor:  dt[2],
                        pointBorderColor: "#fff",
                        data: dt[1]
                    }
                ]
            };


            var ctx2 = document.getElementById("barChart").getContext("2d");
            new Chart(ctx2, {type: \'bar\', 
                            data: barData, 
                            //set option and enable legend
                            options:{
                                responsive:true,  
                                legend: {
                                    display: false
                                }}    
                            });
            //stop sk-loading
            $(\'#spinner\').attr("style" , "display:none");
            //stop ladda btn 
            if(ladda_btn != null){
                ladda_btn.ladda(\'stop\');
            }
        });

    }
    //draw table
    function get_detail(){      
       $.get( "report.php", {act :"get_drug_usage_detail" , start_date : $(\'#start_date\').val() , end_date : $(\'#end_date\').val()}).done(function( data ) {
            $(\'#report_detail\').html(data);
        });
    }

    function enlarge(){
        $(\'#btn_enlarge\').attr("style","display:none");
        $(\'#report_box\').attr("class","col-md-12");
        $(\'#detail_box\').attr("style","display:none");
        $(\'#btn_narrow\').attr("style","display:true");
    }
    function narrow(){
        $(\'#btn_enlarge\').attr("style","display:true");
        $(\'#report_box\').attr("class","col-md-8");
        $(\'#detail_box\').attr("style","display:true");
        $(\'#btn_narrow\').attr("style","display:none");
   
    }
   
  

'; ?>



</script>
</body>

</html>