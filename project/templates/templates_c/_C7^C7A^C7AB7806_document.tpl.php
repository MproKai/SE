<?php /* Smarty version 2.6.19, created on 2017-08-03 07:35:08
         compiled from document.tpl */ ?>
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
<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<!-- Morris -->
<script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="js/plugins/morris/morris.js"></script>

<!-- FooTable -->
<script src="js/plugins/footable/footable.all.min.js"></script>
<!-- Data picker -->
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

<!-- Jasny -->
<script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

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
		<!--div class="row wrapper border-bottom white-bg page-heading animated fadeInLeft">
            <div class="col-md-10" >
                <h2 id="doc_title">Document List</h2>
            </div>
        </div-->
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="ibox">
				<div class="row">
					<div class="col-md-12" id="doc_content">
						<div class="ibox-content">
							<div class="row">
								<div class="m-t form-inline space-bottom" id="style_form1">
									<label class="font-noraml">&nbsp;&nbsp;Patient&nbsp;</label>
									<select id="patient_selector" name="patient_selector" class="form-control" style="width:500px"  onchange="reload_doc_list()">

									</select>							
							
									<label class="font-noraml">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date&nbsp;&nbsp;</label>
									<select class="form-control" id="select_date" onChange="reload_doc_list()" style="width:165px">
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
									<button type="button" class="btn btn btn-primary" onclick="upload_document_click()" >Add Document</button>							
								</div>
									
								
								<div class="m-t form-inline space-bottom" style="" id="style_form2">
									<label class="font-noraml">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tag&nbsp;</label>										
									<select data-placeholder="Choose a tag..." class="select2_multiple form-control " multiple="multiple" style="width:20%" tabindex="4" id="tag_list" onchange="reload_doc_list()">
										<?php $_from = $this->_tpl_vars['tag_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tag_list']):
?>
										<option><?php echo $this->_tpl_vars['tag_list']['vName']; ?>
</option>
										<?php endforeach; endif; unset($_from); ?>	
									</select>
								
										
									<label class="font-noraml">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type&nbsp;&nbsp;</label>
									
									<select data-placeholder="Choose a type..." class="select2_multiple form-control"  multiple="multiple"  style="width:20%;" tabindex="4" id="type_list"
									 onchange="reload_doc_list()">

										<?php $_from = $this->_tpl_vars['type_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type_list']):
?>
										<option value="<?php echo $this->_tpl_vars['type_list']['vID']; ?>
"><?php echo $this->_tpl_vars['type_list']['vName']; ?>
</option>
										<?php endforeach; endif; unset($_from); ?>	
									</select>
									<button type="button" class="btn btn btn-primary" onclick="btn_remove_click()" id="btn_remove" >  Clear  </button>
								</div>
							</div>
							<br>				
							<div class="ibox float-e-margins">			
								<div class="ibox-content" id="document_table">							
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'document_table.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6" id="doc_preview" style="display: none">

					</div>
					<div class="col-md-6" id="upload_contemt" style="display: none">							
						<div id="upload_page">

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

		$(\'.select2_multiple\').select2();
		$(\'.footable\').footable();
		
		$("#patient_selector").select2({
			allowClear: true,
			templateSelection: function(data, container) {
				var show_name =  data.text.split(",");
				return show_name[0];
			},
			placeholder: {
				id: \'-1\', // the value of the option
				text: \'Quick Search...\'
			},
			ajax:{
				url: \'patient.php\',
				dataType: \'json\',
				delay: 250,
				data: function (params) {
					return {
						cond: params.term , 
						act : \'get_qks_ptlist\' 			
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


	});
	
		
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
  	 
	function reload_doc_list(){
		
		var st = get_start_end_date();
		var start_date = st[0];
		var end_date = st[1];
		
		var tag_list = $(\'#tag_list\').select2().val();
		var type_list = $(\'#type_list\').select2().val();
		$.get( "document.php", {act :"change_list", patient_id:$("#patient_selector").val() , tag_list:tag_list ,  type_list:type_list , start_date : start_date , end_date:end_date}).done(function( data ) {
			$("#document_table").html(data);
			cancel_preview();
		});
	

	}
	function format_date(n){
		var	y = n.getFullYear();
		var m = n.getMonth() + 1;
		var d = n.getDate();
		return  y + "-" + m + "-" + d;
	}
	


	$("#patient_selector").on(\'select2:select\', function () {
		var st = get_start_end_date();
		var start_date = st[0];
		var end_date = st[1];
		reload_doc_list();
	});
	

	
	function getFilePath(file){
		var	url = location.protocol + "//" + location.host + location.pathname.substring(0,location.pathname.lastIndexOf("/")+1)+"download.php?file=";
		return url+file;
	}
	

	function btn_remove_click(){		
		clearAll();
		reload_doc_list();
	}
	


	function cancel_preview(){
		$("#doc_content").attr("class" , "col-md-12 animated fadeInLeft");
		$("#doc_preview").attr("style" , "display:none");		
		$("#doc_content").attr("style" , "display:true");
		$(\'.footable\').trigger(\'footable_resize\');
		$(\'.footable\').trigger(\'footable_redraw\');
	}
	

	function upload_document_click(){
		$("#doc_content").attr("style" , "display:none");
		$("#doc_preview").attr("style" , "display:none");		
		$("#upload_contemt").attr("class" , "col-md-12 animated fadeInRight");
		$("#upload_contemt").attr("style" , "display:true");		
		$.get( "document.php", {act :"upload_document_click"}).done(function( data ) {
			//data = data.replace("col-lg-6" , "col-lg-7");
			$(\'#upload_page\').html(data);
			$(\'#upload_title\').attr("style" , "display:none");	
			$(\'#doc_title\').html(\'Upload Document\');
		});
	}

	function cancel_upload(){
		location.reload();
	}

	function clearAll(){
		$("#patient_selector").select2("val", "");
		$("#select_date").select("val", "");		
		$(\'#tag_list\').select2("val" ,"");
		$(\'#type_list\').select2("val" ,"");
		$("#select_date").prop(\'selectedIndex\',0);
	}

'; ?>

</script>

</body>
</html>