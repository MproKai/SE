<?php /* Smarty version 2.6.19, created on 2017-07-27 02:44:28
         compiled from memo.tpl */ ?>
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

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- SUMMERNOTE -->
<script src="js/plugins/summernote/summernote.min.js"></script>

<!-- Sweet alert -->
<script src="js/plugins/sweetalert/sweetalert.min.js"></script>

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
		<h3 class="hideInMobile"><?php echo $_SESSION['patient']['PatientName']; ?>
&nbsp;,&nbsp;<?php echo $_SESSION['patient']['PatientID']; ?>
</h3>
        	<div class="wrapper wrapper-content">                    
                <div class="row">
                	<div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5><i class="fa fa-list"></i>&nbsp;&nbsp; Memo List</h5>
                                <div class="ibox-tools">
                                	<button type="button" class="btn btn-primary btn-xs addMemo"><i class="fa fa-plus"></i> Add</button> 
									<button type="button" class="btn btn-primary btn-xs pull-right closeEditLetter"><i class="fa fa-times"></i> Cancel</button>
                                    <button type="button" class="btn btn-primary btn-xs saveMemo"><i class="fa fa fa-floppy-o"></i> Save</button>   
                                </div>
                            </div>
                            <div class="ibox-content memoIbox">
                            	<!--start 無memo時，預設顯示(display:inline-block)-->
								<textarea id="edit" class="memo-edit form-control text-edit space-top" placeholder="Type your memo here ..." ></textarea>
                            	<table class="table">
                                	<thead>
									<?php $_from = $this->_tpl_vars['Memo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['patient_memo']):
?>
                                    	<tr>
                                        	<td>
												<?php if (( $this->_tpl_vars['patient_memo']['ConfirmBy'] == 'Unconfirmed' )): ?><button type="button" id="<?php echo $this->_tpl_vars['patient_memo']['vID']; ?>
" class="btn btn-default btn-outline btn-xs pull-right" onclick="delete_memo('<?php echo $this->_tpl_vars['patient_memo']['vID']; ?>
')">Delete</button> <?php endif; ?>
                                            	<span class="label label-primary"><?php echo $this->_tpl_vars['patient_memo']['MemoType']; ?>
</span><br/>
                                            	<p style="margin-top:5px;"><?php echo $this->_tpl_vars['patient_memo']['Memo']; ?>
</p>
                                            	<small class="text-muted pull-right">&nbsp;&nbsp;<i class="fa fa-clock-o"></i> <?php echo $this->_tpl_vars['patient_memo']['CreateDate']; ?>
</small>
                                                <small class="pull-right">
                                                	<?php if (( $this->_tpl_vars['patient_memo']['ConfirmBy'] == 'Unconfirmed' )): ?>
                                                    	<a href="#" data-toggle="tooltip" data-placement="bottom" title="<?php echo $this->_tpl_vars['patient_memo']['ConfirmBy']; ?>
"><i class="fa fa-exclamation-triangle text-danger"></i></a>
                                                    <?php else: ?>
                                                    	<a href="#" data-toggle="tooltip" data-placement="bottom" title="<?php echo $this->_tpl_vars['patient_memo']['ConfirmBy']; ?>
"><i class="fa fa-check text-confirm"></i></a>
                                                    <?php endif; ?>
                                                </small>
                                            </td>
                                        </tr>
									<?php endforeach; endif; unset($_from); ?>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div><!-- end col-lg-4 -->
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
$(document).ready(function(){
	$(\'[data-toggle="tooltip"]\').tooltip();
	
	$(\'.summernote\').summernote();
	$(\'.memo-edit\').css(\'display\',\'none\');
	$(\'.saveMemo\').css(\'display\',\'none\');
	$(\'.closeEditLetter\').css(\'display\',\'none\');
	'; ?>

	<?php if (empty ( $this->_tpl_vars['Memo'] )): ?>
	<?php echo '
	$(\'.addMemo\').click();
	'; ?>

	<?php endif; ?>
	<?php echo '
});
$(\'.closeEditLetter\').click(function(){
	$(\'.addMemo\').css(\'display\',\'inline-block\');
	$(\'.saveMemo\').css(\'display\',\'none\');
	$(\'.closeEditLetter\').css(\'display\',\'none\');
	$(\'.memo-edit\').fadeToggle( "slow", "linear" );
});
$(\'.addMemo\').click(function() {
	$(\'.addMemo\').css(\'display\',\'none\');
	$(\'.saveMemo\').css(\'display\',\'inline-block\');
	$(\'.closeEditLetter\').css(\'display\',\'inline-block\');
	$(\'.memo-edit\').fadeToggle( "slow", "linear" );
});
$(\'.saveMemo\').click(function() {
	
	save_memo();
	$(\'.addMemo\').css(\'display\',\'inline-block\');
	$(\'.saveMemo\').css(\'display\',\'none\');
	$(\'.closeEditLetter\').css(\'display\',\'none\');
	$(\'.memo-edit\').fadeToggle( "slow", "linear" );
});


function save_memo(){
	var content = $(\'#edit\').val();
	content = content.trim();
	if (!content.length == 0) {
		
	$.post( "memo.php", {act :"save", content: content}).done(function( data ) {
		location.reload();
	});
	}
}	
function delete_memo(id){
	console.log(id)
	swal({   
		title: "Are you sure?",   
		text: "You will not be able to recover this memo!",   
		type: "warning",   
		showCancelButton: true,   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "Yes, delete it!",   
		closeOnConfirm: false
	}, 
	function(){  
		$.post( "memo.php", {act :"delete", memo_id:id}).done(function( data ) {
			location.reload();
		});
	});
}

'; ?>

</script>

</body>

</html>