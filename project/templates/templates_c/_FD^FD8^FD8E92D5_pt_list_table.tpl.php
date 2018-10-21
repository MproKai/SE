<?php /* Smarty version 2.6.19, created on 2017-07-25 01:40:43
         compiled from pt_list_table.tpl */ ?>
<h2>
    <span class="text-navy"><?php echo $this->_tpl_vars['resultCount']; ?>
</span>
    Result Found in Total  
    <span class="text-navy"><?php echo $this->_tpl_vars['PatinetTotlaCount']; ?>
</span>   
    <small>&nbsp;&nbsp;(Only top 100 result will be shown below.)&nbsp;&nbsp;</small>
</h2>  


<!--input type="text" placeholder="Search in table" name="search" class="input-sm form-control m-b-xs " id="filter"-->


<table class="footable table" data-page-size="20" data-filter=#filter style="width:100%" role="grid">
	<thead>
		<tr role="row">
			<th style="width: 30%;">PatientName</th>
			<th data-sort-ignore="true" class="td_small" style="width: 10%;">PatientID</th>
			<th data-sort-ignore="true" class="td_small" style="width: 10%;">NRIC</th>
			<th data-sort-ignore="true" class="td_small" style="width: 8%;">Gender</th>	
			<th data-sort-ignore="true" class="td_small" style="width: 10%;">Date Of Birth</th>
			<th data-sort-ignore="true" class="td_small" style="width: 10%;">Phone</th>
		</tr>
	</thead>
	<tbody>
		<?php $_from = $this->_tpl_vars['PatientInfoList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['testP']):
?>
		<tr>
			<td><strong><a onclick = "patient_hyperlink_click('<?php echo $this->_tpl_vars['testP']['PatientID']; ?>
')"><?php echo $this->_tpl_vars['testP']['PatientName']; ?>
</a></strong></td>
			<td><?php echo $this->_tpl_vars['testP']['PatientID']; ?>
</td>
			<td><?php echo $this->_tpl_vars['testP']['NRIC']; ?>
</td>
			<td><?php echo $this->_tpl_vars['testP']['Gender']; ?>
</td>
			<td><?php echo $this->_tpl_vars['testP']['DOB']; ?>
</td>
			<td><?php echo $this->_tpl_vars['testP']['OfficeTel']; ?>
</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>	
	</tbody>
	<tfoot>
	    <tr>
	        <td colspan="20">
	            <ul class="pagination pull-right"></ul>                                                 
	        </td>
	    </tr>
    </tfoot>
</table>

<script>
<?php echo '

$(\'.footable\').footable();

function patient_hyperlink_click($patient_id){
	window.location.assign("pt_menu.php?patient_id="+$patient_id);			
};

'; ?>

</script>