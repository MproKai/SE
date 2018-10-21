<?php /* Smarty version 2.6.19, created on 2017-08-01 12:53:32
         compiled from report_drug_usage_detail.tpl */ ?>
<table class="table animated fadeInDown">
    <thead>
    <tr>
        <th>#</th>
        <th>Drugs Name</th>
        <th>Quantuty</th>
    </tr>
    </thead>
    <tbody>                                
    <?php $_from = $this->_tpl_vars['top20_drugs_result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
    <tr>
        <td ><span class="label" style="background-color: <?php echo $this->_tpl_vars['rs']['color']; ?>
"><font color="#ffffff"><?php echo $this->_tpl_vars['rs']['Ranking']; ?>
</font></span></td>
        <td><?php echo $this->_tpl_vars['rs']['DrugsName']; ?>
</td>
        <td><?php echo $this->_tpl_vars['rs']['Quantity']; ?>
</td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
</table>