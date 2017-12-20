<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>跳转页面</title>
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('Public/css/styles.css') ?>"> -->
<style type="text/css">

	.wrapper1 {
	  background: #50a3a2;
	  background: -webkit-linear-gradient(top left, #50a3a2 0%, #53e3a6 100%);
	  background: linear-gradient(to bottom right, #50a3a2 0%, #53e3a6 100%);
	  opacity: 0.8;
	  position: absolute;
	  top: 50%;
	  left: 0;
	  width: 100%;
	  height: 400px;
	  margin-top: -200px;
	  margin-bottom: 0;
	  overflow: hidden;

	}
	.container5 {
	  max-width: 400px;
	  margin: 0 auto;
	  padding: 20px 0;
	  height: 700px;
	  text-align: center;
	}
	
	</style>
</head>
<body>
<div class="htmleaf-container">
	<div class="wrapper1">
		<div class="container5">
			<table border=1px >
		<tr>
			<td>寝室号</td>
			<td>床号</td>
			<td>姓名</td>
			<td>状态</td>
			<td>操作</td>
		</tr>
		<?php foreach ($list as $item):?>
		<tr style="width:200px; height:50px;">
			<td><?=$item['dorm']?></td>
			<td><?=$item['bed']?></td>
			<td><?=$item['name']?></td>
			<td><?=$item['registerDorm']?></td>
			<td>
				<form method="post" action="<?php echo site_url('Building/register'); ?>">
				<input type="hidden" name="building"  value="<?=$item['building']?>">
				<input type="hidden" name="idCard" value="<?=$item['idCard']?>">
				<input type="submit" value="点击报到">
				</form>
			</td>	
		</tr>
		<?php endforeach; ?>
		<tr>
			<td colspan="4">
				
				<input type="submit"  value="点我返回查询界面" onclick="window.history.go(-1)">
				
			</td>
		</tr>
	</table>
		</div>	
	</div>
</div>
</body>
</html>