<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<link href="<?php echo base_url('Public/css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
<title>学生信息</title>
<style>
  body{
	background:url(<?php echo base_url('Public/images/bg.jpg') ?>) top left no-repeat;
	background-size:cover;
  }
</style>
</head>
<body>
	<table class="table table-hover">
		<tr>
			<td>姓名</td>
			<td>专业</td>
			<td>班级</td>
			<td>学号</td>
			<td>宿舍楼号</td>
			<td>宿舍号</td>
			<td>辅导员姓名</td>
			<td>辅导员办公室电话</td>
			<td>辅导员手机号</td>
		</tr>
		<?php foreach ($list as $item):?>
		<tr>
			<td><?=$item['name']?></td>
			<td><?=$item['major']?></td>
			<td><?=$item['class']?></td>
			<td><?=$item['stuNo']?></td>
			<td><?=$item['building']?></td>
			<td><?=$item['dorm']?></td>
			<td><?=$item['teaName']?></td>
			<td><?=$item['teaOffice']?></td>
			<td><?=$item['teaPhone']?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>