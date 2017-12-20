<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>已报到学生信息</title>
	<style>
	  body{
		background:url(<?php echo base_url('Public/images/bg.jpg') ?>) top left no-repeat;
		background-size:cover;
	  }
	</style>
</head>
<body>
	<div style="margin: 0 auto; width: 340px;">
	<h2><?php echo $major; ?></h2>
	<h3>已报到学生人数:<?php echo count($list); ?></h3>
	<table border=1px>
		<th colspan="4">已报到学生信息</th>
		<tr>
			<td>姓名</td>
			<td>专业</td>
			<td>班级</td>
			<td>学号</td>
			
		</tr>
		<?php foreach ($list as $item):?>
		<tr>
			<td><?=$item['name']?></td>
			<td><?=$item['major']?></td>
			<td><?=$item['class']?></td>
			<td><?=$item['stuNo']?></td>
		</tr>
		<?php endforeach; ?>
	</table>
	</div>
	<script type="text/javascript" src="<?php echo base_url('Public/js/mymouse.js') ?>" id="mymouse"></script>
	<script src="<?php echo base_url('Public/js/bootstrap.min.js') ?>"></script>
</body>
</html>