<?php /* Smarty version 2.6.19, created on 2017-08-04 07:17:42
         compiled from report_monthly_collection_detail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'report_monthly_collection_detail.tpl', 20, false),)), $this); ?>
 <table class="table table-bordered">
    <thead>
    <tr>
        <th width="10%">Payment Date</th>
        <th width="10%">CASH</th>
        <th width="10%">CASHCARD</th>
        <th width="10%">CDMP DEPOSIT</th>
        <th width="10%">CHEQUE</th>
        <th width="10%">DEPOSIT</th>
        <th width="10%">FOC</th>
        <th width="10%">NETS</th>
        <th width="10%">OTHERS</th>
        <th width="10%">GRAND TOTAL</th>
    </tr>
    </thead>
    <tbody>
    <?php $_from = $this->_tpl_vars['monthly_collection_result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
    <tr>
        <td><?php echo $this->_tpl_vars['rs']['PaymentDate']; ?>
</td>
        <td class="CASH"><?php echo ((is_array($_tmp=$this->_tpl_vars['rs']['CASH'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>                                
        <td class="CASHCARD"><?php echo ((is_array($_tmp=$this->_tpl_vars['rs']['CASHCARD'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>                                   
        <td class="CDMP_DEPOSIT"><?php echo ((is_array($_tmp=$this->_tpl_vars['rs']['CDMP_DEPOSIT'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>                                  
        <td class="CHEQUE"><?php echo ((is_array($_tmp=$this->_tpl_vars['rs']['CHEQUE'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>
        <td class="DEPOSIT"><?php echo ((is_array($_tmp=$this->_tpl_vars['rs']['DEPOSIT'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>
        <td class="FOC"><?php echo ((is_array($_tmp=$this->_tpl_vars['rs']['FOC'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>
        <td class="NETS"><?php echo ((is_array($_tmp=$this->_tpl_vars['rs']['NETS'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>
        <td class="OTHERS"><?php echo ((is_array($_tmp=$this->_tpl_vars['rs']['OTHERS'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>
        <td class="row_total" bgcolor="#F5F5F5"><?php echo ((is_array($_tmp=$this->_tpl_vars['rs']['row_total'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>
    </tr>                                
    <?php endforeach; endif; unset($_from); ?>
    <tr bgcolor="#F5F5F5">
        <td style="font-weight: bold">GRAND TOTAL</td>
        <td id="CASH"></td>
        <td id="CASHCARD"></td>
        <td id="CDMP_DEPOSIT"></td>
        <td id="CHEQUE"></td>
        <td id="DEPOSIT"></td>
        <td id="FOC"></td>
        <td id="NETS"></td>
        <td id="OTHERS"></td>
        <td id="row_total"></td>
    </tr>  
    </tbody>
</table>

<script>
<?php echo '
    $(document).ready(function() {
        //write row on table bottom
        var sum = 0;
        $(\'.CASH\').each(function() {
            var tmp = $(this);
            sum += parseFloat(tmp.text().replace(",",""));
        });
        $(\'#CASH\').html(sum.toFixed(2));

        sum = 0;
        $(\'.CASHCARD\').each(function() {
            var tmp = $(this);
            sum += parseFloat(tmp.text().replace(",",""));
        });
        $(\'#CASHCARD\').html(sum.toFixed(2));

        sum = 0;
        $(\'.CDMP_DEPOSIT\').each(function() {
            var tmp = $(this);
             sum += parseFloat(tmp.text().replace(",",""));
        });
        $(\'#CDMP_DEPOSIT\').html(sum.toFixed(2));
        sum = 0;
        $(\'.CHEQUE\').each(function() {
            var tmp = $(this);
            sum += parseFloat(tmp.text().replace(",",""));
        });
        $(\'#CHEQUE\').html(sum.toFixed(2));

        sum = 0;
        $(\'.DEPOSIT\').each(function() {
            var tmp = $(this);
            sum += parseFloat(tmp.text().replace(",",""));
        });
        $(\'#DEPOSIT\').html(sum.toFixed(2));

        sum = 0;
        $(\'.FOC\').each(function() {
            var tmp = $(this);
            sum += parseFloat(tmp.text().replace(",",""));
        });
        $(\'#FOC\').html(sum.toFixed(2));

        sum = 0;
        $(\'.NETS\').each(function() {
            var tmp = $(this);
            sum += parseFloat(tmp.text().replace(",",""));
        });
        $(\'#NETS\').html(sum.toFixed(2));
        sum = 0;
        $(\'.OTHERS\').each(function() {
            var tmp = $(this);
            sum += parseFloat(tmp.text().replace(",",""));
        });
        $(\'#OTHERS\').html(sum.toFixed(2));
        sum = 0;
        $(\'.row_total\').each(function() {
            var tmp = $(this);
            sum += parseFloat(tmp.text().replace(",",""));
        });
        $(\'#row_total\').html(sum.toFixed(2));
    });
'; ?>

</script>