<?php /* Smarty version 2.6.19, created on 2017-07-27 01:33:32
         compiled from pt_order_history.tpl */ ?>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="wrapper wrapper-content">  
		<div>
			<h2><strong>Order History</strong></h2>
		</div>	
		<?php if ($this->_tpl_vars['CurrentMedication']): ?>                  
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5><i class="fa fa-history"></i>&nbsp;&nbsp; Medications History</h5>
						<div class="ibox-tools">
							<a class="collapse-link pull-right">
								<i class="fa fa-chevron-up"></i>
							</a>
						</div>
					</div>
					<div class="ibox-content no-padding">
						<ul class="list-group">
							<?php $_from = $this->_tpl_vars['CurrentMedication']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['current_medication']):
?>
							<li class="list-group-item" style="padding:10px 15px;">
								<strong><?php echo $this->_tpl_vars['current_medication']['NameofDrugs']; ?>
</strong><br/>
								<small><strong><i class="fa fa-dot-circle-o"></i> Dosage :</strong> <?php echo $this->_tpl_vars['current_medication']['Dosage']; ?>
 / <strong><i class="fa fa-dot-circle-o"></i> Frequency :</strong> <?php echo $this->_tpl_vars['current_medication']['Frequency']; ?>
</small>
							</li>
							<?php endforeach; endif; unset($_from); ?>
						</ul>
					</div>
				</div>
			</div>
		  </div>
		  <?php endif; ?>
		  <div class="row">
		  <?php $_from = $this->_tpl_vars['OrderDrugs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['order_drugs']):
?>
			<div class="col-lg-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>
							<i class="fa fa-medkit"></i>
							&nbsp;&nbsp<?php echo $this->_tpl_vars['order_drugs'][0]['VisitDate']; ?>
&nbsp;&nbsp
						</h5>
						<div class="ibox-tools">
							<a class="collapse-link pull-right">
								<i class="fa fa-chevron-up"></i>
							</a>
						</div>
					</div>
					<div class="ibox-content">
						<div class="feed-activity-list">
							<table class="table table-striped">
								<thead>
									<tr>
										<th width="15%">Type</th>
										<th width="45%">Order Summary</th>
										<th width="15%">Dosage</th>
										<th width="25%">Frequency</th>
									</tr>
								</thead>
								<tbody>
									<?php $_from = $this->_tpl_vars['order_drugs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['drugs']):
?>
									<tr>
										<td><?php echo $this->_tpl_vars['drugs']['Type']; ?>
</td>
										<td><?php echo $this->_tpl_vars['drugs']['OrderSummary']; ?>
</td>
										<td><?php echo $this->_tpl_vars['drugs']['Dosage']; ?>
</td>
										<td><?php echo $this->_tpl_vars['drugs']['Frequency']; ?>
</td>
									</tr>
									<?php endforeach; endif; unset($_from); ?>
								</tbody>
							</table>
						</div><!-- end feed-activity-list -->
					</div><!-- end ibox-content -->
				</div><!-- end ibox float-e-margins -->
			</div><!-- end col-lg-12 -->
		 <?php endforeach; endif; unset($_from); ?>
		 <?php if (! $this->_tpl_vars['CurrentMedication'] && ! $this->_tpl_vars['OrderDrugs']): ?>
			<div class="col-lg-12">
				<div class="text-center animated fadeInRight">No Medication History</div>
			</div>
		 <?php endif; ?>
		</div>
	</div>
</div>	

