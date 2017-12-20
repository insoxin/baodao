<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>教师界面</title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h2>学生信息列表</h2>
	<table class="table">
		<tr>
			<th>协议书编号</th>
			<th>学号</th>
			<th>姓名</th>
			<th>专业</th>
			<th>性别</th>
			<th>生源所在地</th>
			<th>就业标示</th>
			<th>修改</th>
		</tr>
		<?php foreach ($res as $key => $value) { ?>
			<form action="<?php echo site_url('Paiqian/update');?>" method="post">
				<tr>
					<td><?=$value['协议书号']?></td>
					<td><?=$value['学号']?></td>
					<td><?=$value['姓名']?></td>
					<td><?=$value['专业']?></td>
					<td><?=$value['性别']?></td>
					<td><?=$value['生源所在地']?></td>
					<td><?=$value['就业标示']?></td>
					<td><input type="hidden" name='id' value="<?=$value['学号']?>"><input type="submit" value="修改"></td>
				</tr>
			</form>
		<?php }	?>
		<?php foreach ($res2 as $key => $value) { ?>
			<form action="<?php echo site_url('Paiqian/update');?>" method="post">
				<tr>
					<td><?=$value['协议书号']?></td>
					<td><?=$value['学号']?></td>
					<td><?=$value['姓名']?></td>
					<td><?=$value['专业']?></td>
					<td><?=$value['性别']?></td>
					<td><?=$value['生源所在地']?></td>
					<td><?=$value['就业标示']?></td>
					<td><input type="hidden" name='id' value="<?=$value['学号']?>"><input type="submit" value="修改"></td>
				</tr>
			</form>
		<?php }	?>
	</table>
	
</body>
</html>