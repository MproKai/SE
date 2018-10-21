<?php /* Smarty version 2.6.19, created on 2018-04-14 05:04:55
         compiled from user_queue.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'user_queue.tpl', 62, false),)), $this); ?>
<!DOCTYPE html>
<html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>



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
    <div id="page-wrapper" class="gray-bg" >
		<!-- page header -->
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'page_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="wrapper wrapper-content animated fadeInLeft gray-bg" >
            <div class="row">
                <div class="col-lg-9">
                     <div class="wrapper wrapper-content animated fadeInUp">
                        <?php $_from = $this->_tpl_vars['user_bag_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
                        <div class="ibox">                        
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="m-b-md">                                    
                                            <h2>Order No: <?php echo $this->_tpl_vars['list']['order_id']; ?>
</h2>
                                        </div>
                                        <dl class="dl-horizontal">
                                            <dt>Status:</dt> <dd>
                                                <?php if ($this->_tpl_vars['list']['bag_status'] == 'ON THE WAY'): ?>
                                                <span class="label label-danger"><?php echo $this->_tpl_vars['list']['bag_status']; ?>
</span>
                                                <?php else: ?>
                                                <span class="label label-primary"><?php echo $this->_tpl_vars['list']['bag_status']; ?>
</span>
                                                <?php endif; ?>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <dl class="dl-horizontal">

                                            <dt>User Name:</dt> <dd><?php echo $this->_tpl_vars['list']['user_name']; ?>
</dd>

                                            <dt>Laundry:</dt> <dd><?php echo $this->_tpl_vars['list']['laundry_name']; ?>
</dd>
                                            <dt>Project Type:</dt> <dd><?php echo $this->_tpl_vars['list']['project_type']; ?>
</dd>
                                        </dl>
                                    </div>
                                    <div class="col-lg-7" id="cluster_info">
                                        <dl class="dl-horizontal" >

                                            <dt>Last Updated:</dt> <dd><?php echo ((is_array($_tmp=$this->_tpl_vars['list']['current_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%D %I:%M %p ") : smarty_modifier_date_format($_tmp, "%D %I:%M %p ")); ?>
</dd>
                                            <dt>Created:</dt> <dd><?php echo ((is_array($_tmp=$this->_tpl_vars['list']['time_start'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%D %I:%M %p ") : smarty_modifier_date_format($_tmp, "%D %I:%M %p ")); ?>
</dd>
                                            <dt>Participants:</dt>                                  
                                        </dl>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <dl class="dl-horizontal">
                                            <dt>Completed:</dt>
                                            <dd>
                                                <div class="progress progress-striped active m-b-sm">
                                                    <div style="width: <?php echo $this->_tpl_vars['list']['completed']; ?>
%;" class="progress-bar"></div>
                                                </div>
                                                <small>Project completed in <strong><?php echo $this->_tpl_vars['list']['completed']; ?>
%</strong>. Pleast wait about two hours.</small>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; endif; unset($_from); ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ibox ">
                        <div class="wrapper wrapper-content project-manager">
                            <div class="profile-image">
                                <img src="images/<?php echo $_SESSION['account']; ?>
.jpg" class="img-circle circle-border m-b-md" alt="profile">
                            </div>

                            <div class="profile-info">            
                                <h2 class="no-margins">
                                    <?php echo $this->_tpl_vars['user_setting_info']['user_name']; ?>

                                </h2>
                                <h4>There are some userside info.</h4>
                                <small>
                                    Track your bag , check your address , chose your project type.
                                </small>
                            </div>
                            <div style="margin-top:50px">
                                <div id="vertical-timeline" class="vertical-container light-timeline no-margins">
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon navy-bg">
                                            <i class="fa fa-truck"></i>
                                        </div>

                                        <div class="vertical-timeline-content">
                                            <h2>Laundry Info  (<a href="#"><span class="text-success"> <?php echo $this->_tpl_vars['user_setting_info']['laundry_name']; ?>
</span></a>)</h2>

                                            <p>
                                                <?php echo $this->_tpl_vars['user_setting_info']['laundry_address']; ?>

                                            </p>

                                        </div>
                                    </div>

                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon blue-bg">
                                            <i class="fa fa-location-arrow"></i>
                                        </div>

                                        <div class="vertical-timeline-content">
                                            <h2>User Info</h2>
                                            <p>Address:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['user_setting_info']['user_address']; ?>
</p>
                                            <p>Phone:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['user_setting_info']['user_phone']; ?>
</p>
                                            <p>Email:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['user_setting_info']['user_email']; ?>
</p>
                                            <div class="google-map" id="map1"></div>
                                        </div>
                                         
                                    </div>

                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon lazur-bg">
                                            <i class="fa fa-shower"></i>
                                        </div>

                                        <div class="vertical-timeline-content">
                                            <h2>Default Project Type</h2>
                                            <h5><?php echo $this->_tpl_vars['user_setting_info']['project_type']; ?>
</h5>
                                            <p><?php echo $this->_tpl_vars['user_setting_info']['project_introduction']; ?>
</p>
                                            <a href="#" class="btn btn-sm btn-info">Read more</a>
                                            <span class="vertical-date"> Yesterday <br><small>Dec 23</small></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script async defer src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBicvpQD_oAPYm3NJaE9wbNFjOxr35LBPc&callback=initMap"></script>
     <script>
    <?php echo '
      function initMap() {
        var uluru = {lat: 25.0454147, lng: 121.5500132};
        var map = new google.maps.Map(document.getElementById(\'map1\'), {
          zoom: 11,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    '; ?>

    </script>
   
</body>

</html>