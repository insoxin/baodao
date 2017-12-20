<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>跳转页面</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('Public/css/styles.css') ?>">
</head>
<body>
<div class="htmleaf-container">
	<div class="wrapper">
		<div class="container3">
			<table border=1px width=650px>
		<tr>
			<td>姓名</td>
			<td>专业</td>
			<td>班级</td>
			<td>学号</td>
			<td>宿舍楼号</td>
			<td>宿舍号</td>
			<td>床号</td>
			<td>状态</td>
		</tr>
		<?php foreach ($list as $item):?>
		<tr>
			<td><?=$item['name']?></td>
			<td><?=$item['major']?></td>
			<td><?=$item['class']?></td>
			<td><?=$item['stuNo']?></td>
			<td><?=$item['building']?></td>
			<td><?=$item['dorm']?></td>
			<td><?=$item['bed']?></td>
			<td><?=$item['register']?></td>
				
		</tr>
		<?php endforeach; ?>
	</table>
			<form method="post" action="<?php echo site_url('Volunteer/register'); ?>">
				<input type="hidden" name="idCard" value="<?=$item['idCard']?>">
				<input type="submit" value="点击报到">
			</form>
		</div>
		
		
	</div>
</div>
</body>
</html>