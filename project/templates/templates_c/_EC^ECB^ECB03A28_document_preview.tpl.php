<?php /* Smarty version 2.6.19, created on 2017-08-03 08:37:04
         compiled from document_preview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', 'document_preview.tpl', 23, false),)), $this); ?>
<!DOCTYPE html>
<div class="wrapper wrapper-content animated fadeRight">
<button type="button" class="btn btn-outline btn-default pull-right" style="width:5%" onclick="cancel_preview()">X</button>     
    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins">              
                <div class="row m-b-lg m-t-lg">
					<div class="col-md-12">
						<div class="profile-image">
							<img src="<?php echo $this->_tpl_vars['doc_info']['pic']; ?>
" class="img-circle circle-border m-b-md" alt="profile">
						</div>
						<div class="profile-info">
							<div class="">
								<div>
									<h2 class="no-margins" ><?php echo $this->_tpl_vars['doc_info']['PatientName']; ?>
</h2>
									<small>Visit Date: <?php echo $this->_tpl_vars['doc_info']['CreatedDateString']; ?>
 , Document Name: <?php echo $this->_tpl_vars['doc_info']['docname']; ?>
</small>
								</div>
							</div>
						</div>
					</div>
				</div>
                <!--"DOC", "DOCX" , "PDF" , "txt" use iframe preview-->
                <?php if (((is_array($_tmp=$this->_tpl_vars['doc_info']['FileExtName'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'doc' || ((is_array($_tmp=$this->_tpl_vars['doc_info']['FileExtName'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'docx' || ((is_array($_tmp=$this->_tpl_vars['doc_info']['FileExtName'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'pdf' || ((is_array($_tmp=$this->_tpl_vars['doc_info']['FileExtName'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'txt' || ((is_array($_tmp=$this->_tpl_vars['doc_info']['FileExtName'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'tif'): ?>
                <iframe src="<?php echo $this->_tpl_vars['doc_info']['PhysicalFileName']; ?>
" style="width:100%; height:1050px;" frameborder='0'  ></iframe>
                <?php else: ?>
                <image src="<?php echo $this->_tpl_vars['doc_info']['PhysicalFileName']; ?>
" style="width:100%; height:100%;" frameborder="0"></image>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>