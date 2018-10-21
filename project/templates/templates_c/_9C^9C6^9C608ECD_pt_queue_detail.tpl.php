<?php /* Smarty version 2.6.19, created on 2017-06-28 04:41:45
         compiled from pt_queue_detail.tpl */ ?>
					<table class="footable table table-stripped table-hover" data-page-size="8" data-filter="#filter">
						<thead>
							<tr>
								<th>QNo</th>
								<th>Patient Name</th>
								<th>Patient ID</th>
								<th>Gender</th>
								<th>Age</th>
								<th>Visit Type</th>
								<th>Corp</th>
								<th>Doctor</th>
								<th>Status</th>
								<th>Remarks</th>
								<th>Instructions</th>								
							</tr>
						</thead>
						<tbody>
							<?php $_from = $this->_tpl_vars['PatientQueueList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Patient']):
?>
							<tr>
								<td><strong><?php echo $this->_tpl_vars['Patient']['QNo']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['PatientName']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['PatientID']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['Gender']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['Age']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['VisitType']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['Corp']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['Doctor']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['Status']; ?>
</strong><br/></td>
								<td><strong><?php echo $this->_tpl_vars['Patient']['Remarks']; ?>
</strong><br/></td>
								<td class="footable-visible">
									<div class="col-sm-10">
										<strong><?php echo $this->_tpl_vars['Patient']['Instruction']; ?>
</strong><br/>
									</div>
								</td>
							</tr>
							<?php endforeach; endif; unset($_from); ?>	
						</tbody>
					</table>	