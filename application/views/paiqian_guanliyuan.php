<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>管理员界面</title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h2>管理员操作</h2>
	<form action="<?php echo site_url('Paiqian/all');?>" method="post">
			<input type="submit" value="打印全部学生信息">
	</form>
	<form action="<?php echo site_url('Paiqian/recent');?>" method="post">
			<input type="submit" value="最近学生信息">
	</form>
	<form action="<?php echo site_url('Paiqian/reported');?>" method="post">
			<input type="submit" value="已签约学生">
	</form>
	<form action="<?php echo site_url('Paiqian/statistics');?>" method="post">
			<input type="submit" value="统计情况">
	</form>
	<form action="<?php echo site_url('Paiqian/excel');?>" method="post">
			<input type="submit" value="导出数据excel">
	</form>
</body>
</html>