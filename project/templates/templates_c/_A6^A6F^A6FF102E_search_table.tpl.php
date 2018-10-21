<?php /* Smarty version 2.6.19, created on 2017-08-03 01:44:32
         compiled from search_table.tpl */ ?>
<head>
<!-- FooTable -->
<script src="js/plugins/footable/footable_nocolor.all.min.js"></script>  

 <!-- Mark -->
<script src="js/plugins/mark/jquery.mark.js"></script>

<!-- FooTable -->
<link href="css/plugins/footable/footable.core.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/plugins/remark/remark.css">
</head>

    <div class="row" class="animated fadeInLeft">
        <br>
        <div class="col-lg-12">
            <div class="ibox float-e-margins">      
                <div class="ibox-content">
                     <h2>
                        <span class="text-navy"><?php echo $this->_tpl_vars['search_count']; ?>
</span>
                        Results found in Total 
                        <span class="text-navy"><?php $_from = $this->_tpl_vars['total_count']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['count']):
?><?php echo $this->_tpl_vars['count']['VCount']; ?>
<?php endforeach; endif; unset($_from); ?></span>
                        <small class="pull-right">Request time <span class="text-navy" id="request_time"></span></small>   
                    </h2>     


                    <table class="footable table" data-page-size="20" data-filter=#filter style="width:100%">
                        <thead>
                        <tr>
                            <!--th>Sort by visit date</th>
                            <th data-hide="phone,tablet">Sort by patient name</th>
                            <th data-hide="phone,tablet">Visit ID</th>  
                            <th data-hide="all" >NoteSummary</th> 
                            <th>Sort by patient name</th-->

                        </tr>
                        </thead>
                        <tbody>
                           <?php $_from = $this->_tpl_vars['search_result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['result']):
        $this->_foreach['foo']['iteration']++;
?>
                            <!--tr>
                                <td style="width:10%">VisitDate: <?php echo $this->_tpl_vars['result']['VisitDate']; ?>
</td>
                                <td style="width:10%">Patient Name: <strong><?php echo $this->_tpl_vars['result']['PatientName']; ?>
</strong></td>
                                <td style="width:40%"><?php echo $this->_tpl_vars['result']['VisitID']; ?>
</td>    
                                <td style="width:60%"><div id="note_text"><?php echo $this->_tpl_vars['result']['NoteSummary']; ?>
</div></td>  
                            </tr-->
                           
                            <tr>
                                <td >
                                    <div class="search-result">                                  
                                        <table>                              
                                            <tr>
                                                <td ><strong>Visit Date</strong><i class="fa fa-clock-o">&nbsp;&nbsp;</i><?php echo $this->_tpl_vars['result']['VisitDate']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                <!--td ><strong>Visit ID</strong><i class="fa fa-comments-o"> </i>&nbsp;&nbsp;<?php echo $this->_tpl_vars['result']['VisitID']; ?>
</td-->
                                                <td style="width:75%">
                                                     <h2><a href="pt_menu.php?patient_id=<?php echo $this->_tpl_vars['result']['PatientID']; ?>
"  class="btn-link">
                                                        <span class="text-success"></span>
                                                         <?php echo $this->_tpl_vars['result']['PatientName']; ?>

                                                        </a>
                                                    </h2>
                                                </td>
                                                
                                            </tr>
                                        </table>                                        
                                        <div class="bg-muted p-xs b-r-sm"><p><?php echo $this->_tpl_vars['result']['NoteSummary']; ?>
</p></div>
                                    </div>                      
                                   
                                </td>
                            </tr>
                            
                            <?php endforeach; endif; unset($_from); ?>  
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5">
                                <ul class="pagination pull-right"></ul>                                                 
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
 
 
<script>
<?php echo '

    $(\'.footable\').footable();


    $(\'.footable\').trigger(\'footable_expand_all\');
    //$(\'#note_text\').text().highlight(\'lu li\');
    mark_by_filter();
   $(function() {

      var mark = function() {
        var keyword = $("#filter").val();
        $(".footable").unmark({
          done: function() {
            $(".footable").mark(keyword);
          }
        });
      };

      $("#filter").on("input", mark);

    });


   function mark_by_filter() {
         // Read the keyword
        var keyword = $("#tb_search_notes").val();
        keyword= keyword.replace("+", " ");

        // Remove previous marked elements and mark
        // the new keyword inside the context
   
         $("p").unmark({
          done: function() {
            $("p").mark(keyword);
          }
        });
    }
    
    $(\'#filter_text\').html(\'"\'+$("#tb_search_notes").val()+\'"\');
'; ?>

</script>
