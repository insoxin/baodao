<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<link href="<?php echo base_url('Public/css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
<title>学生信息</title>
<style type="text/css">
	.main{
		margin:0 auto;
		width: 580px;
	}
</style>
</head>
<body>

	<form action="<?php echo site_url('Core/upload2'); ?>" method="post" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" value="点我导入数据">
	</form>
	

</body>
</html>