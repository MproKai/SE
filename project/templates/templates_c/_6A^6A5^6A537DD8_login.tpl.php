<?php /* Smarty version 2.6.19, created on 2017-07-27 01:33:17
         compiled from login.tpl */ ?>
<!DOCTYPE html>
<html>

<head>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>

<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
        	<img src="images/logo.png"/><br/><br/><br/>
            <!-- start Login Page -->
			<?php if (! $this->_tpl_vars['is_login']): ?>
            <div class="login">
                <h3>Welcome to Genesis</h3>
                <p>Spawing new appaorch to clinic software, efficiency, effectiveness, style all in one</p>
                <p>Login in. To see it in action.</p>
                <form class="m-t" role="form" method="POST" action="login.php">
                    <div class="form-group">
                        <input type="text" class="form-control username" placeholder="Username" name="userid" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control password" placeholder="Password" name="userpw" required="">
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b" name="act" value="login">Login</button>
					<?php if (! empty ( $this->_tpl_vars['login_msg'] ) && ! $this->_tpl_vars['is_login']): ?><p style="color:red"><?php echo $this->_tpl_vars['login_msg']; ?>
</p><?php endif; ?>
                    <!--a href="#"><small>Forgot password?</small></a-->
					
                </form>
            </div>
			<?php endif; ?>
            <!-- end Login Page -->
       
            <p class="m-t"> <strong>Copyright</strong> SGiMED &copy; 2016 </p>
        </div>
    </div>
</body>

</html>
