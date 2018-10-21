<?php /* Smarty version 2.6.19, created on 2017-08-08 10:42:00
         compiled from vendor_table.tpl */ ?>
<table class="footable table table-stripped" data-page-size="30" data-filter=#filter>
    <thead>
    <tr>
    <!--Code,VendorName,kind as Kind,Phone,Email,Fax,PreferredVendor,Status -->
        <th data-sort-ignore="true" width="5%">Type</th>
        <th>VendorName</th>
        <th data-hide="phone,tablet" data-sort-ignore="true">Phone</th>
        <th data-hide="phone,tablet" data-sort-ignore="true">Fax</th>
        <th data-hide="phone,tablet" data-sort-ignore="true">Email</th>
        <th data-hide="phone,tablet" data-sort-ignore="true">PreferredVendor</th>
        <th data-sort-ignore="true" width="5%">Status</th>
        <th data-hide="phone,tablet" data-sort-ignore="true" width="2%"></th>
    </tr>
    </thead>
    <tbody>
    <?php $_from = $this->_tpl_vars['vendor_detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
    <tr class="gradeX">
        <td class="center">
            <?php if ($this->_tpl_vars['rs']['Kind'] == 'Drugs'): ?>
            <span class="label label-primary"><?php echo $this->_tpl_vars['rs']['Kind']; ?>
</span>
            <?php elseif ($this->_tpl_vars['rs']['Kind'] == 'Service'): ?>
            <span class="label label-info"><?php echo $this->_tpl_vars['rs']['Kind']; ?>
</span>
            <?php else: ?>
            <span class="label label-warning"><?php echo $this->_tpl_vars['rs']['Kind']; ?>
</span>
            <?php endif; ?>
        </td>
        <td><?php echo $this->_tpl_vars['rs']['VendorName']; ?>
</td>
        <td><?php echo $this->_tpl_vars['rs']['Phone']; ?>
</td>
        <td><?php echo $this->_tpl_vars['rs']['Fax']; ?>
</td>
        <td><?php echo $this->_tpl_vars['rs']['Email']; ?>
</td>
        <td><?php echo $this->_tpl_vars['rs']['PreferredVendor']; ?>
</td>
        <td>
            <?php if ($this->_tpl_vars['rs']['Status'] == 'Open'): ?>
            <span class=" badge badge-success"><?php echo $this->_tpl_vars['rs']['Status']; ?>
</span>
            <?php elseif ($this->_tpl_vars['rs']['Status'] == 'Close'): ?>
            <span class=" badge badge-danger"><?php echo $this->_tpl_vars['rs']['Status']; ?>
</span>
            <?php endif; ?>
        </td>
        <td><a onclick="click_edit('<?php echo $this->_tpl_vars['rs']['Code']; ?>
')"><i class="fa fa-edit"></i></a></td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="15">
            <ul class="pagination pull-right"></ul>
        </td>
    </tr>
    </tfoot>
</table>

<script>
<?php echo '

     $(document).ready(function() {
         $(\'.footable\').footable();
    });

    function click_edit(vendor_code){
        $.post(\'vendor.php\',{act : \'edit_vendor\', vendor_code:vendor_code , is_insert:false},function(data){     
            var rs = JSON.parse(data);
            console.log(rs);
            $(\'#modal_title\').html(\'Edit Ventor\');
            $(\'#vendor_modal\').modal(\'show\'); 
        }); 
    }

'; ?>



</script>