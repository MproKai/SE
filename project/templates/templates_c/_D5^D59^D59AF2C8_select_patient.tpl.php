<?php /* Smarty version 2.6.19, created on 2017-06-28 08:23:17
         compiled from select_patient.tpl */ ?>
<!DOCTYPE html>
<html>

<head>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
        	<img src="images/logo.png"/><br/><br/><br/>            
            <!-- start Choose Patient Page -->
            <div class="choosePatient float-e-margins" style="text-align:left;">
            	<form class="m-t" role="form" method="POST" action="select_patient.php">
                    <div class="form-group">
                        <label class="loginTitle">Period : </label>
                        <select id="period_selector" name="period_selector" class="period form-control">
                            <option value="all" selected="selected">All</option>
                            <option value="today">Today</option>
                            <option value="week">Last 7 days</option>
                            <option value="twoWeek">Last 14 days</option>
                            <option value="month">Last 30 days</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="loginTitle loginPatient">Patient : </label>
                        <select id="patient_selector" name="patient_selector" class="patient form-control">
                        </select>
                    </div>
                    <div class="clear"></div><br>
                    <button type="submit" class="btn btn-primary half-width" name="act" value="upload_image"><i class="fa fa-lg fa-upload"></i>&nbsp;&nbsp;&nbsp;Upload Image</button>
                    <button type="submit" class="btn btn-primary half-width" name="act" value="select_patient"><i class="fa fa-lg fa-eye"></i>&nbsp;&nbsp;&nbsp;View Patient</button>
            	</form>
            </div>
            <!-- end Choose Patient Page -->
            
            <p class="m-t"> <strong>Copyright</strong> SGiMED &copy; 2016 </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="js/plugins/select2/select2.full.min.js"></script>
	
    <?php echo '
    <script>
	$("#period_selector").select2();
	
	$("#patient_selector").select2({
		dropdownCssClass : \'bigdrop\',
		templateSelection: template,
		ajax:{
			url: \'select_patient.php\',
			dataType: \'json\',
			delay: 250,
			data: function (params) {
				return {
					fitler_text: params.term , 
					act : \'get_patient_list\' , 
					selected_period :  $("#period_selector").val()
				};
				// Query paramters will be ?search=[term]&page=[page]
				//return query;
			},
			processResults: function (data) {
				return {
					results:data
				};
			}
		}
	});
	function template(data, container) {
		var show_name =  data.text.split(",");
		return show_name[0];
	}
	</script>
    '; ?>

</body>

</html>
