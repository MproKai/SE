<?php /* Smarty version 2.6.19, created on 2018-04-06 22:18:11
         compiled from dashboards.tpl */ ?>
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
<script src="js/plugins/footable/footable.all.min.js"></script>
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
<!--checkbox-->
<link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
<!-- Select2 -->
<script src="js/plugins/select2/select2.full.min.js"></script>
<!-- Morris -->
<script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="js/plugins/morris/morris.js"></script>
<!-- Chartist -->
<script src="js/plugins/chartist/chartist.min.js"></script>

<script src="js/plugins/toastr/toastr.min.js"></script>
<!-- Full Calendar -->
<script src="js/plugins/fullcalendar/moment.min.js"></script>
<!-- Sweet alert -->
<script src="js/plugins/sweetalert/sweetalert.min.js"></script>
<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<!-- Flot -->
<script src="js/plugins/flot/jquery.flot.js"></script>
<script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/plugins/flot/jquery.flot.spline.js"></script>
<script src="js/plugins/flot/jquery.flot.resize.js"></script>
<script src="js/plugins/flot/jquery.flot.pie.js"></script>
<script src="js/plugins/flot/jquery.flot.symbol.js"></script>
<script src="js/plugins/flot/jquery.flot.time.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- Sparkline -->
<script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- Flot -->
<script src="js/plugins/flot/jquery.flot.js"></script>
<script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/plugins/flot/jquery.flot.spline.js"></script>
<script src="js/plugins/flot/jquery.flot.resize.js"></script>
<script src="js/plugins/flot/jquery.flot.pie.js"></script>
<script src="js/plugins/flot/jquery.flot.symbol.js"></script>
<script src="js/plugins/flot/jquery.flot.time.js"></script>

<!-- Jvectormap -->
<script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="js/plugins/jvectormap/jquery-jvectormap-tw-mill-zh_tw.js"></script>

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
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-sm-4">
                    <div class="ibox-content gray-bg">
                        <h1 class="m-b-xs">
                            26,900
                        </h1>
                        <small>
                            Sales in current month
                        </small>
                        <div id="sparkline1" class="m-b-sm"></div>
                        <div class="row">
                            <div class="col-xs-4">
                                <small class="stats-label">Pages / Visit</small>
                                <h4>236 321.80</h4>
                            </div>

                            <div class="col-xs-4">
                                <small class="stats-label">% New Visits</small>
                                <h4>46.11%</h4>
                            </div>
                            <div class="col-xs-4">
                                <small class="stats-label">Last week</small>
                                <h4>432.021</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ibox-content gray-bg">
                        <h1 class="m-b-xs">
                            98,100
                        </h1>
                        <small>
                            Sales in last 24h
                        </small>
                        <div id="sparkline2" class="m-b-sm"></div>
                        <div class="row">
                            <div class="col-xs-4">
                                <small class="stats-label">Pages / Visit</small>
                                <h4>166 781.80</h4>
                            </div>

                            <div class="col-xs-4">
                                <small class="stats-label">% New Visits</small>
                                <h4>22.45%</h4>
                            </div>
                            <div class="col-xs-4">
                                <small class="stats-label">Last week</small>
                                <h4>862.044</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row m-t-xs">
                        <div class="col-xs-6">
                            <h5 class="m-b-xs">Income last month</h5>
                            <h1 class="no-margins">160,000</h1>
                            <div class="font-bold text-navy">98% <i class="fa fa-bolt"></i></div>
                        </div>
                        <div class="col-xs-6">
                            <h5 class="m-b-xs">Sals current year</h5>
                            <h1 class="no-margins">42,120</h1>
                            <div class="font-bold text-navy">98% <i class="fa fa-bolt"></i></div>
                        </div>
                    </div>
                    <table class="table small m-t-sm">
                        <tbody>
                        <tr>
                            <td>
                                <strong>142</strong> Projects

                            </td>
                            <td>
                                <strong>22</strong> Messages
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <strong>61</strong> Comments
                            </td>
                            <td>
                                <strong>54</strong> Articles
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>154</strong> Companies
                            </td>
                            <td>
                                <strong>32</strong> Clients
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
              <div class="row">
                <div class="ibox-title gray-bg" >
                    <h5>World Map</h5>            
                </div>
                <div class="col-lg-6">
                    <table class="table table-hover margin bottom">
                        <thead>
                        <tr>
                            <th style="width: 1%" class="text-center">No.</th>
                            <th>Transaction</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td> Security doors
                                </td>
                            <td class="text-center small">16 Jun 2014</td>
                            <td class="text-center"><span class="label label-primary">$483.00</span></td>

                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td> Wardrobes
                            </td>
                            <td class="text-center small">10 Jun 2014</td>
                            <td class="text-center"><span class="label label-primary">$327.00</span></td>

                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td> Set of tools
                            </td>
                            <td class="text-center small">12 Jun 2014</td>
                            <td class="text-center"><span class="label label-warning">$125.00</span></td>

                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td> Panoramic pictures</td>
                            <td class="text-center small">22 Jun 2013</td>
                            <td class="text-center"><span class="label label-primary">$344.00</span></td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Phones</td>
                            <td class="text-center small">24 Jun 2013</td>
                            <td class="text-center"><span class="label label-primary">$235.00</span></td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td>Monitors</td>
                            <td class="text-center small">26 Jun 2013</td>
                            <td class="text-center"><span class="label label-primary">$100.00</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <div id="map" style="height: 300px;"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">      
                    <div class="ibox-title gray-bg" >
                        <h5>Orders</h5>
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-xs btn-white active">Today</button>
                                <button type="button" class="btn btn-xs btn-white">Monthly</button>
                                <button type="button" class="btn btn-xs btn-white">Annual</button>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content gray-bg">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <ul class="stat-list">
                                    <li>
                                        <h2 class="no-margins">2,346</h2>
                                        <small>Total orders in period</small>
                                        <div class="stat-percent">48% <i class="fa fa-level-up text-navy"></i></div>
                                        <div class="progress progress-mini">
                                            <div style="width: 48%;" class="progress-bar"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <h2 class="no-margins ">4,422</h2>
                                        <small>Orders in last month</small>
                                        <div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i></div>
                                        <div class="progress progress-mini">
                                            <div style="width: 60%;" class="progress-bar"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <h2 class="no-margins ">9,180</h2>
                                        <small>Monthly income from orders</small>
                                        <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
                                        <div class="progress progress-mini">
                                            <div style="width: 22%;" class="progress-bar"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
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
	$(\'.footable\').footable();	
	    var sparklineCharts = function(){
            $("#sparkline1").sparkline([34, 43, 43, 35, 44, 32, 44, 52], {
                type: \'line\',
                width: \'100%\',
                height: \'50\',
                lineColor: \'#1ab394\',
                fillColor: "transparent"
            });

            $("#sparkline2").sparkline([32, 11, 25, 37, 41, 32, 34, 42], {
                type: \'line\',
                width: \'100%\',
                height: \'50\',
                lineColor: \'#1ab394\',
                fillColor: "transparent"
            });

            $("#sparkline3").sparkline([34, 22, 24, 41, 10, 18, 16,8], {
                type: \'line\',
                width: \'100%\',
                height: \'50\',
                lineColor: \'#1C84C6\',
                fillColor: "transparent"
            });
        };

        var sparkResize;

        $(window).resize(function(e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineCharts, 500);
        });

        sparklineCharts();



        //flot-dashboard-chart
        var data2 = [
            [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
            [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
            [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
            [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
            [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
            [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
            [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
            [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
        ];

        var data3 = [
            [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
            [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
            [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
            [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
            [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
            [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
            [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
            [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
        ];


        var dataset = [
            {
                label: "Number of orders",
                data: data3,
                color: "#1ab394",
                bars: {
                    show: true,
                    align: "center",
                    barWidth: 24 * 60 * 60 * 600,
                    lineWidth:0
                }

            }, {
                label: "Payments",
                data: data2,
                yaxis: 2,
                color: "#1C84C6",
                lines: {
                    lineWidth:1,
                        show: true,
                        fill: true,
                    fillColor: {
                        colors: [{
                            opacity: 0.2
                        }, {
                            opacity: 0.4
                        }]
                    }
                },
                splines: {
                    show: false,
                    tension: 0.6,
                    lineWidth: 1,
                    fill: 0.1
                },
            }
        ];


        var options = {
            xaxis: {
                mode: "time",
                tickSize: [3, "day"],
                tickLength: 0,
                axisLabel: "Date",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: \'Arial\',
                axisLabelPadding: 10,
                color: "#d5d5d5"
            },
            yaxes: [{
                position: "left",
                max: 1070,
                color: "#d5d5d5",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: \'Arial\',
                axisLabelPadding: 3
            }, {
                position: "right",
                clolor: "#d5d5d5",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: \' Arial\',
                axisLabelPadding: 67
            }
            ],
            legend: {
                noColumns: 1,
                labelBoxBorderColor: "#000000",
                position: "nw"
            },
            grid: {
                hoverable: false,
                borderWidth: 0
            }
        };

        function gd(year, month, day) {
            return new Date(year, month - 1, day).getTime();
        }

        var previousPoint = null, previousLabel = null;

        $.plot($("#flot-dashboard-chart"), dataset, options);
///------------------   --------------------------------------------------
         var mapData = {
                "TW-01": 298,
                "TW-03": 200,
                "TW-04": 220,
                "TW-07": 540,
                "TW-11": 120,
                "TW-22": 298,
                "TW-20": 200,
                "TW-16": 220,
                "TW-15": 540,
                "TW-17": 120,

            };

            $(\'#map\').vectorMap({
                map: \'tw_mill_zh_tw\',
                backgroundColor: "transparent",
                focusOn: {lat: 0, lng: 0, x: 2, y: 2, scale: 1.2},
                regionStyle: {
                    initial: {
                        fill: \'#e4e4e4\',
                        "fill-opacity": 0.9,
                        stroke: \'none\',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },

                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: \'polynomial\'
                    }]
                },
            });
         // $("#map").vectorMap({map:\'tw_mill_zh_tw\'});

});

'; ?>

</script>
</body>

</html>