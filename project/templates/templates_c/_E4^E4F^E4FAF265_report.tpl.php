<?php /* Smarty version 2.6.19, created on 2017-08-01 11:57:28
         compiled from report.tpl */ ?>
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
<script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="js/plugins/morris/morris.js"></script>
<!-- Chartist -->
<script src="js/plugins/chartist/chartist.min.js"></script>
<!-- ChartJS-->
<script src="js/plugins/chartJs/Chart.min.js"></script>


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
        <div class="wrapper wrapper-content animated fadeInRight" >
		 <div class="row">
            	<!-- start Barchart -->
				<div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><i class="fa fa-bar-chart"></i>&nbsp;&nbsp; Weekly Patient Report</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div><canvas id="weeklyPatient_line" height="180"></canvas></div>
                        </div>
                    </div>
                </div><!-- end Barchart -->
                <!-- start StackedBarchart -->
                <div class="col-lg-6 weeklyCollectBlock">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><i class="fa fa-bar-chart"></i>&nbsp;&nbsp; Weekly Collection Report </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div><canvas id="weeklyCollect" height="180"></canvas></div>
                        </div>
                    </div>
                </div><!-- end StackedBarchart -->
            </div><!-- end row -->
			
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
$(document).ready(function(){
	//Weekly Patient Report (LineChart)
	var lineData = {
        labels: '; ?>

			<?php echo $this->_tpl_vars['visit_date']; ?>

			<?php echo ',
        datasets: [

            {
                label: "Total Patients",
				lineTension: 0.01,
                backgroundColor: \'rgba(26,179,148,0.5)\',
                borderColor: "rgba(26,179,148,0.7)",
                pointBackgroundColor: "rgba(26,179,148,1)",
                pointBorderColor: "#fff",
				pointHitRadius: 10,
				pointRadius: 4,
                data: '; ?>

					<?php echo $this->_tpl_vars['visit_count']; ?>

					<?php echo '
            }
        ]
    };

    var lineOptions = {
        responsive: true
    };


    var ctx = document.getElementById("weeklyPatient_line").getContext("2d");
    new Chart(ctx, {type: \'line\', data: lineData, options:lineOptions});
	
	//Weekly Collection Report (BarChart)
	var barData = {
        labels: '; ?>

				<?php echo $this->_tpl_vars['invoice_data']; ?>

				<?php echo ',
        datasets: [
            {
                label: "Paid",
                backgroundColor: \'rgba(26,179,148,0.5)\',
                borderColor: "rgba(26,179,148,0.7)",
                pointBackgroundColor: "rgba(26,179,148,1)",
                pointBorderColor: "#fff",
                data: '; ?>

						<?php echo $this->_tpl_vars['collection_data']; ?>

						<?php echo ',
            },
            {
                label: "Unpaid",
				backgroundColor: \'rgba(220, 220, 220, 0.5)\',
                pointBorderColor: "#fff",
                data: 			
					'; ?>

					<?php echo $this->_tpl_vars['outstanding_data']; ?>

					<?php echo '
            }
        ]
    };

    var barOptions = {
        responsive: true,
		scales:{
			xAxes:[{ stacked: true }],
			yAxes:[{ stacked: true }]
		}
    };


    var ctx2 = document.getElementById("weeklyCollect").getContext("2d");
    new Chart(ctx2, {type: \'bar\', data: barData, options:barOptions});
	
});
'; ?>

</script>
</body>

</html>