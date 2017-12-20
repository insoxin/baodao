<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>学生入口</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('Public/css/styles.css') ?>">
</head>
<body>
<div class="htmleaf-container">
	<div class="wrapper">
		<div class="container">
			<h1>报到信息查询</h1>
			
			<form class="form" method="post" action="<?php echo site_url('Stu/select'); ?>">
				<input type="text" id="idCard" name="idCard" class="rotate-90 validate-me" data-pattern="^\d+$" placeholder="请输入身份证号进行查询">
				<input type="submit"  value="点击查询">
			</form>
			由软件俱乐部提供技术支持
		</div>
	</div>

</div>


</body>
</html>