<?php /* Smarty version 2.6.19, created on 2017-07-26 08:34:56
         compiled from search.tpl */ ?>
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
<!-- Chosen -->
<script src="js/plugins/chosen/chosen.jquery.js"></script>
<!-- FooTable -->
<script src="js/plugins/footable/footable.all.min.js"></script>
<!-- Data picker -->
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
 <!-- Mark -->
<script src="js/plugins/mark/jquery.mark.js"></script>

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
                <h2>Search Note</h2>
            </div>
        </div-->
        <div class="wrapper wrapper-content">
			<div class="row animated fadeInRight"  style="background-color:#FFFFFF">
                <div calss="ibox-content">
                    <div class="form-inline ">
                        <div class="input-group" style="width: 20%">
                            <select class="form-control"  id="select_date" onchange="get_search_result()">
                                <option value="alltime">All time</option>
                                <option value="today">Today</option>
                                <option value="yesterday">Yesterday</option>
                                <option value="l7day">Last 7 days</option>
                                <option value="lweek">Last Week</option>
                                <option value="tmonth">This Month</option>
                                <option value="lmonth">Last Month</option>
                                <option value="l30day">Last 30 days</option>
                                <option value="l60day">Last 60 days</option>
                                <option value="l90day">Last 90 days</option>
                                <option value="l120day">Last 120 days</option>
                            </select> 
                        </div>
						<div class="input-group" style="width: 60%">
							<input type="text" id="tb_search_notes"  value="" placeholder="input text to search..." class="form-control" required>
							<span class="input-group-btn">
								<button class="ladda-button btn btn btn-primary" data-style="slide-up" id="btn_search_notes"> <i class="fa fa-search"></i></button>
							</span>
						</div>
                        <div class="input-group" style="width: 19%">
                            <button  class="btn btn-primary pull-right" type="button" onclick="clearAll()"><i class="fa fa-times"></i> <span class="bold">Clear</span></button>
                        </div>
                    </div>	
                </div>    
		
			</div>

            <div class="table-responsive animated fadeInUp" id="search_table">    
                  
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
        $("#select_date").prop(\'selectedIndex\',8);
       // $(\'.footable\').footable();
       clearAll();
        var config = {
            \'.chosen-select\'           : {},
            \'.chosen-select-deselect\'  : {allow_single_deselect:true},
            \'.chosen-select-no-single\' : {disable_search_threshold:10},
            \'.chosen-select-no-results\': {no_results_text:\'Oops, nothing found!\'},
            \'.chosen-select-width\'     : {width:"95%"}
        }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
     
		var l = $("#btn_search_notes").ladda();
		l.click(function(){
			l.ladda(\'start\');
			get_search_result(l);
		});
    });
        
   function get_search_result(ladda_btn){
        var start_time = new Date().getTime();
        $("#search_table").html(\'\');

            var date = get_start_end_date();
            $("#search_table").attr("class" , "animated fadeInUp");
            var start_date = date[0];
            var end_date = date[1];
           $.get( "search.php", {act :"get_search_result", cond:$("#tb_search_notes").val() , start_date : start_date , end_date : end_date}).done(function( data ) {
               $("#search_table").html(data);
               var request_time = (new Date().getTime() - start_time)/1000;
               $(\'#request_time\').html(\'(\'+request_time+\' sec)\');
			   if(ladda_btn != null){
					ladda_btn.ladda(\'stop\');
			   }
           });
   }

  function get_start_end_date()
    {
        var selectBox = document.getElementById("select_date");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        var start_date = "";
        var end_date = "";
        var date = new Date();
        
        if(selectedValue == "today")
            start_date = format_date(date);
            end_date = format_date(new Date());
        if(selectedValue == "yesterday")
        {
            date.setDate(date.getDate() - 1);
            start_date = format_date(date);
            end_date = format_date(date);

        }
        if(selectedValue == "l7day")
        {
            date.setDate(date.getDate() - 7)
            start_date = format_date(date);
            end_date = format_date(new Date());
        }   
        if(selectedValue == "lweek")
        {
            date.setDate(date.getDate() - date.getDay() - 6); 
            
            start_date = format_date(date);
            var edate = date;
            edate.setDate(edate.getDate()+6);           
            end_date = format_date(edate);
            
        }   
        if(selectedValue == "tmonth")
        {
            date.setDate(1);
            start_date = format_date(date);
            end_date = format_date(new Date());
        }   
        if(selectedValue == "lmonth")
        {
            date.setMonth(date.getMonth() - 1);
            date.setDate(1);
            //start_date = format_date(date);
            var edate = new Date(date.getFullYear(),date.getMonth()+1, 0);
            start_date = format_date(date);
            end_date = format_date(edate);
        }
        if(selectedValue == "l30day")
        {
            date.setDate(date.getDate() - 30);
            start_date = format_date(date);
            end_date = format_date(new Date());
        }   
        if(selectedValue == "l60day")
        {
            date.setDate(date.getDate() - 60);
            start_date = format_date(date);
            end_date = format_date(new Date());
        }   
        if(selectedValue == "l90day")
        {
            date.setDate(date.getDate() - 90);
            start_date = format_date(date);
            end_date = format_date(new Date());
        }   
        if(selectedValue == "l120day")
        {
            date.setDate(date.getDate() - 120);
            start_date = format_date(date);
            end_date = format_date(new Date());
        }       
            
        if(selectedValue == "alltime"){
            start_date = null;
            end_date = format_date(new Date());         
        }
        var st =[start_date , end_date] ;
        return st;
    }

    function format_date(n){
        var y = n.getFullYear();
        var m = n.getMonth() + 1;
        var d = n.getDate();
        if(m<10 && d<10)
            return  y + "-0" + m + "-0" + d;
        else if(d<10)
            return  y + "-" + m + "-0" + d;
        else if(m<10)
            return  y + "-0" + m + "-" + d;
        else
            return  y + "-" + m + "-" + d;
    }



    $(document).keypress(function(e) {
        if(e.which == 13) {
           get_search_result();
 
        }
    });

    function clearAll(){

      $("#tb_search_notes").val(\'\');
      $("#search_table").attr("class" , "animated fadeOutDown");
 
    }    


    
'; ?>



</script>
</body>

</html>