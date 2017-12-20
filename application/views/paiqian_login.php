<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>学生信息管理系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Flat Dark Web Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
<link href="<?php echo base_url();?>/Public/css/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<!-- <link href='http://fonts.useso.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'> -->
<!-- <link href='http://fonts.useso.com/css?family=Exo+2' rel='stylesheet' type='text/css'> -->
<!--//webfonts-->
<!-- <script src="http://ajax.useso.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
</head>
<body>
<script>$(document).ready(function(c) {
	$('.close').on('click', function(c){
		$('.login-form').fadeOut('slow', function(c){
	  		$('.login-form').remove();
		});
	});	  
});
</script>
 <!--SIGN UP-->
 <h1>学生信息管理系统</h1>
<div class="login-form">
	<div class="close"> </div>
		<div class="head-info">
			<div class="login-top">管理系统</div>
			<div class="login-top-change"><font size="3" color="white"></font></div>
		</div>
			<div class="clear"> </div>
	<div class="avtar">
		<img src="<?php echo base_url();?>Public/images/avtar.png" />
	</div>
			<form method="post" action="<?php echo site_url('Paiqian/login');?>">
					<input type="text" class="text" value="用户名" name="t_id" id="t_id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入账号';}" >
						<div class="key">
					<input type="password" value="Password" name="t_password" id="t_password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
						</div>
			
					<div class="signin">
						<input type="submit" value="Login" >
					</div>
			</form>
</div>
 
</body>
</html>