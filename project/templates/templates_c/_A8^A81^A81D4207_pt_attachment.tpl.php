<?php /* Smarty version 2.6.19, created on 2017-07-26 09:47:14
         compiled from pt_attachment.tpl */ ?>
<div id="wrapper">
	<div class="wrapper wrapper-content animated fadeInRight">
		<div>
			<h2><strong>Attachment</strong></h2>
		</div>	
		<div class="wrapper wrapper-content">                    
			<div class="row">				
				<div class="col-lg-12">
					<?php if ($this->_tpl_vars['PatientAttachment']): ?>
					<?php $_from = $this->_tpl_vars['PatientAttachment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Attachment']):
?>
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5><i class="fa fa-folder-open"></i>&nbsp;&nbsp;Attachment&nbsp;&nbsp;<?php echo $this->_tpl_vars['Attachment']['UploadDateString']; ?>
</h5>
							<div class="ibox-tools">
								<a class="collapse-link pull-right">
									<i class="fa fa-chevron-up"></i>
								</a>
							</div>
						</div>
						<div class="ibox-content">								
							<div class="feed-activity-list">
								<div class="lightBoxGallery">
									<table class="table table-striped text-left">
										<thead>
											<tr>
												<th class="docName">Document Name</th>
												<th>Remark</th>
												<th class="docOpt text-center"></th>
											</tr>
										</thead>
										<tbody>
											<tr>													
												<td class="wordBreak"><?php echo $this->_tpl_vars['Attachment']['vName']; ?>
</td>
												<td><?php echo $this->_tpl_vars['Attachment']['Remark']; ?>
</td>
												<td class="text-center">
													<a href=<?php echo $this->_tpl_vars['Attachment']['PhysicalFileName']; ?>
 download>
														<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-download"></i></button>
													</a>
													
												</td>
											</tr>												
										</tbody>
									</table>
								</div>
							</div>	
						</div>									
					</div>
					<?php endforeach; endif; unset($_from); ?>
					<?php else: ?>
					<div class="text-center animated fadeInRight">No Attachment</div>
					<?php endif; ?>
				</div>
			</div>						
		</div>		
		<div id="blueimp-gallery" class="blueimp-gallery">
			<div class="slides"></div>
			<h3 class="title"></h3>
			<a class="prev">‹</a>
			<a class="next">›</a>
			<a class="close">×</a>
			<a class="play-pause"></a>
			<ol class="indicator"></ol>
		</div>
	</div>		
</div>
   

<?php echo '
<script>
$(document).ready(function () {
	$(\'.i-checks\').iCheck({
		checkboxClass: \'icheckbox_square-green\',
		radioClass: \'iradio_square-green\',
	});
});

function setLabText(row,tID){
var type,image,appendString,orgFile,file;
orgFile = escape(row.PhysicalFileName);
if(!orgFile==\'\'){
	file = getFilePath(orgFile);
	type = row.docname.substring(row.docname.lastIndexOf(\'.\')+1,row.docname.length).toUpperCase();
	image = creat_img_link(type,escape(row.PhysicalFileName));
	appendString = \'<tr><td class="order_block listBlock"><!--strong>Date : </strong>\' + row.CDate + 
					\'<br/--><strong>Lab Name : </strong>\' + row.LabName + \'<br/><strong>Document Name : </strong><span class="break">\' + is_null(row.docname)  + image + \'</span>\';
	if(row.IsPreview==1){
		switch(type){
			case "PDF":
				appendString += \'<br/><iframe src="http://docs.google.com/gview?url=\' + file +\'&embedded=true" style="width:90%; height:500px; display:block; margin:0 auto;" frameborder="0"></iframe> </td></tr>\';			
				break;
			case "DOCX":
				appendString += \'<br/><iframe src="http://docs.google.com/gview?url=\' + file +\'&embedded=true" style="width:90%; height:500px; display:block; margin:0 auto;" frameborder="0"></iframe> </td></tr>\';
				break;
			case "DOC":
				appendString += \'<br/><iframe src="http://docs.google.com/gview?url=\' + file +\'&embedded=true" style="width:90%; height:500px; display:block; margin:0 auto;" frameborder="0"></iframe> </td></tr>\';
				break;
			case "XLSX":
				appendString += \'<br/><iframe src="http://docs.google.com/gview?url=\' + file +\'&embedded=true" style="width:90%; height:500px; display:block; margin:0 auto;" frameborder="0"></iframe> </td></tr>\';
				break;
			case "XLS":
				appendString += \'<br/><iframe src="http://docs.google.com/gview?url=\' + file +\'&embedded=true" style="width:90%; height:500px; display:block; margin:0 auto;" frameborder="0"></iframe> </td></tr>\';
				break;
			case "JPG":
				appendString += \'<br/><img src="\'+file+\'" style="width:90%; display:block; margin:0 auto; "></td></tr>\';
				break;
			case "PNG":
				appendString += \'<br/><img src="\'+file+\'" style="width:90%; display:block; margin:0 auto; "></td></tr>\';
				break;
			default:
				appendString +=\'</td></tr>\';
		}
	}else{
		appendString += \'&nbsp;&nbsp;<a class="btn_preview" id=btn_Lab\'+row.docID+\' onclick=showPreview("\' +file+ \'","\'+type+\'","Lab\'+row.docID+\'")><img src="images/icon_preview.png"></a><div id="Lab\'+row.docID+\'" style="width:100%"></div></td></tr>\';
	}
}else{
	type = null;
	if(is_null(row.docname)==\'\'){
		appendString = \'<tr><td class="order_block listBlock"><!--strong>Date : </strong>\' + row.CDate + 
					\'<br/--><strong>Lab Name : </strong>\' + row.LabName ;
	}else{
		appendString = \'<tr><td class="order_block listBlock"><!--strong>Date : </strong>\' + row.CDate + 
					\'<br/--><strong>Lab Name : </strong>\' + row.LabName + \'<br/><strong>Document Name : </strong><span class="break">\' + is_null(row.docname) + \'</span>\';
	}		
}
$(\'#\'+tID).append(appendString);
}

function setDocText(row,className){	
	var type,image,appendString,orgFile,file,tableAppend;
	orgFile = escape(row.PhysicalFileName);
	if(!orgFile==\'\'){
		file = getFilePath(orgFile);
		type = row.docname.substring(row.docname.lastIndexOf(\'.\')+1,row.docname.length).toUpperCase();
		image = creat_img_link(type,escape(row.PhysicalFileName));		
		appendString = \'<tr><td class="document_block listBlock"><!--strong>Date : </strong>\' + row.CDate + 
		\'<br/--><strong>Doc Name : </strong><span class="break">\' + row.docname + \'</span><br/><strong>Type : </strong>\' + type + image ;
		if(row.IsPreview==1){
			switch(type){
				case "PDF":
					appendString += \'<br/><iframe src="http://docs.google.com/gview?url=\' + file +\'&embedded=true" style="width:80%; height:500px; display:block; margin:0 auto;" frameborder="0"></iframe> </td></tr>\';			
					break;
				case "DOCX":
					appendString += \'<br/><iframe src="http://docs.google.com/gview?url=\' + file +\'&embedded=true" style="width:80%; height:500px; display:block; margin:0 auto;" frameborder="0"></iframe> </td></tr>\';
					break;
				case "DOC":
					appendString += \'<br/><iframe src="http://docs.google.com/gview?url=\' + file +\'&embedded=true" style="width:80%; height:500px; display:block; margin:0 auto;" frameborder="0"></iframe> </td></tr>\';
					break;
				case "XLSX":
					appendString += \'<br/><iframe src="http://docs.google.com/gview?url=\' + file +\'&embedded=true" style="width:80%; height:500px; display:block; margin:0 auto;" frameborder="0"></iframe> </td></tr>\';
					break;
				case "XLS":
					appendString += \'<br/><iframe src="http://docs.google.com/gview?url=\' + file +\'&embedded=true" style="width:80%; height:500px; display:block; margin:0 auto;" frameborder="0"></iframe> </td></tr>\';
					break;
				case "JPG":
					appendString += \'<br/><img src="\'+file+\'" style="width:90%; display:block; margin:0 auto; "></td></tr>\';
					break;
				case "PNG":
					appendString += \'<br/><img src="\'+file+\'" style="width:90%; display:block; margin:0 auto;"></td></tr>\';
					break;
				default:
					appendString +=\'<br/></td></tr>\';
			}
		}else{
			appendString += \'&nbsp;&nbsp;<a class="btn_preview" id=btn_Doc\'+row.docID+\' onclick=showPreview("\' +file+ \'","\'+type+\'","Doc\'+row.docID+\'")><img src="images/icon_preview.png"></a><div id="Doc\'+row.docID+\'" style="width:100%"></div></td></tr>\';
		}
		
	}
	else{
		type = null;
		appendString = \'<tr><td class="document_block listBlock"><!--strong>Date : </strong>\' + row.CDate + 
		\'<br/--><strong>Doc Name : </strong><span class="break">\' + row.docname + \'</span><br/></td></tr>\';
	}	
	
	var docType;
	if(row.CategoryID==\'BLOOD\'){
		docType = \'BLOOD\';
	}else if(row.CategoryID==\'RADIOLOGY\'){
		docType = \'RADIOLOGY\';
	}else{
		docType = \'OTHER\';
	}

	var elem = document.getElementById(className+docType);
	if(elem === null){
		$(\'#\'+className).append(\'<table id="\'+className+docType+\'" class="table \'+docType+\'_table" width="100%"><tr><th>Document Type-\'+docType+\'</th></tr></table>\');
		$(\'#\'+className+docType).append(appendString);
	}else{
		$(\'#\'+className+docType).append(appendString);
	} 

}

function getFilePath(file){
	var	url = location.protocol + "//" + location.host + location.pathname.substring(0,location.pathname.lastIndexOf("/")+1)+"download.php?file=";
	return url+file;
}

	
	
	
	
	
	'; ?>


</script>


