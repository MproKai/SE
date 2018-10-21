<?php /* Smarty version 2.6.19, created on 2018-10-08 20:25:05
         compiled from system_registration.tpl */ ?>
<!DOCTYPE html>
<html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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
    <div id="page-wrapper" class="gray-bg">
		<!-- page header -->
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'page_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="wrapper wrapper-content animated fadeInLeft" >
			<div class="ibox-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Registration Account</h5>                               
                                
                            </div>
                            <div class="ibox-content">
                                <h2>
                                    Welecomes to join Gogowash!
                                </h2>
                                <p>
                                    Need some steps and you will be our member.
                                </p>              
                                <form id="form" action="#" class="wizard-big">
                                    <h1>Account</h1>
                                    <fieldset>
                                        <h2>Account Information</h2>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <label>Username *</label>
                                                    <input id="user_name" name="userName" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Username *</label>
                                                    <input id="user_account" name="userName" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password *</label>
                                                    <input id="user_password" name="password" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm Password *</label>
                                                    <input id="confirm_password" name="confirm_password" type="text" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="text-center">
                                                    <div style="margin-top: 20px">
                                                        <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </fieldset>
                                    <h1>Profile</h1>
                                    <fieldset>
                                        <h2>Profile Information</h2>
                                        <div class="row">
                                            <div class="col-lg-3">
                                               <!--  <div class="form-group">
                                                    <label>First name *</label>
                                                    <input id="user_first_name" name="name" type="text" class="form-control required">
                                                </div> -->
<!--                                                 <div class="form-group">
                                                    <label>Last name *</label>
                                                    <input id="surname" name="surname" type="text" class="form-control required">
                                                </div> -->
                                            </div>
<!--                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Device ID *</label>
                                                    <input id="device" name="device" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm Device ID  *</label>
                                                    <input id="confirm_device" name="confirm_device" type="text" class="form-control required">
                                                </div>
                                            </div> -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Email *</label>
                                                    <input id="user_email" name="email" type="text" class="form-control required email">
                                                </div>
                                                <div class="form-group">
                                                    <label>Address *</label>
                                                    <input id="user_address" name="address" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <h1>Select Landuary</h1>
                                    <fieldset>
                                        <div class="text-center" style="margin-top: 120px">
                                            <h2>You did it Man :-)</h2>
                                        </div>
                                    </fieldset>

                                    <h1>Finish</h1>
                                    <fieldset>
                                        <h2>Terms and Conditions</h2>
                                        <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                    </fieldset>
                                </form>
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

    <!-- Steps -->
    <script src="js/plugins/steps/jquery.steps.min.js"></script>

    <!-- Jquery Validate -->
    <script src="js/plugins/validate/jquery.validate.min.js"></script>

<script>
<?php echo '
    $(document).ready(function(){
        $("#wizard").steps();
        $("#form").steps({
            bodyTag: "fieldset",
            onStepChanging: function (event, currentIndex, newIndex)
            {
                // Always allow going backward even if the current step contains invalid fields!
                if (currentIndex > newIndex)
                {
                    return true;
                }

                // Forbid suppressing "Warning" step if the user is to young
                if (newIndex === 3 && Number($("#age").val()) < 18)
                {
                    return false;
                }

                var form = $(this);

                // Clean up if user went backward before
                if (currentIndex < newIndex)
                {
                    // To remove error styles
                    $(".body:eq(" + newIndex + ") label.error", form).remove();
                    $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                }

                // Disable validation on fields that are disabled or hidden.
                form.validate().settings.ignore = ":disabled,:hidden";

                // Start validation; Prevent going forward if false
                return form.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex)
            {
                // Suppress (skip) "Warning" step if the user is old enough.
                if (currentIndex === 2 && Number($("#age").val()) >= 18)
                {
                    $(this).steps("next");
                }

                // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                if (currentIndex === 2 && priorIndex === 3)
                {
                    $(this).steps("previous");
                }
            },
            onFinishing: function (event, currentIndex)
            {
                var form = $(this);

                // Disable validation on fields that are disabled.
                // At this point it\'s recommended to do an overall check (mean ignoring only disabled fields)
                form.validate().settings.ignore = ":disabled";

                // Start validation; Prevent form submission if false
                return form.valid();
            },
            onFinished: function (event, currentIndex)
            {
             
                $.get(\'system_registration.php\' , {act:\'registration\' , user_name : $(\'#user_name\').val(), user_account: $(\'#user_account\').val() , user_password : $(\'#user_password\').val() , user_mail : $(\'#user_mail\').val() , user_address : $(\'#user_address\').val() } , function(data){
                    alert(data);
                });
            }
        }).validate({
                    errorPlacement: function (error, element)
                    {
                        element.before(error);
                    },
                    rules: {
                        confirm_password: {
                            equalTo: "#user_password"
                        }
                    }
                });
   });
    '; ?>

</script>

</body>

</html>