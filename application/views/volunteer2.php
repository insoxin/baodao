<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>报到台页面</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('Public/css/styles.css') ?>">
</head>
<body>
<div class="htmleaf-container">
	<div class="wrapper">
		<div class="container">
			<h1>报到信息查询(志愿者)</h1>
			
			<form class="form" method="post" action="<?php echo site_url('Volunteer/select2'); ?>">
				<input type="text" id="idCard" name="idCard" class="rotate-90 validate-me" data-pattern="^\d+$" placeholder="请输入身份证号进行查询">
				<input type="submit"  value="点击查询">
			</form>
		</div>
		
		
	</div>
</div>

<script src="<?php echo base_url('Public/js/jquery-2.1.1.min.js') ?>" type="text/javascript"></script>


</body>
</html>