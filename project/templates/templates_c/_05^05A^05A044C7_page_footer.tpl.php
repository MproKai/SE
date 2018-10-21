<?php /* Smarty version 2.6.19, created on 2017-08-03 08:36:53
         compiled from page_footer.tpl */ ?>
<div class="footer">
	<div class="pull-right">
		<strong>Copyright</strong> SGiMED &copy; 2017
	</div>
</div>


<script>
<?php echo '
$(document).ready(function() {
	$("#qk_pt_search").select2({
		templateSelection: function(data, container) {
			var show_name =  data.text.split(",");
			return show_name[0];
		},
		placeholder: {
			id: \'-1\', // the value of the option
			text: \'Quick Patient Search ...\'
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
			},
			processResults: function (data) {
				return {
					results:data
				};
			}
		}
	});
	
	$("#qk_pt_search").on(\'change\' , function(){
		var patient_id = $("#qk_pt_search").val();
		window.location.assign("pt_menu.php?patient_id="+patient_id);	
	});



});

function qk_pt_create(){
	window.location.assign("pt_patient.php?act=Create");
}

'; ?>

</script>