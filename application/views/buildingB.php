<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>公寓查询界面</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('Public/css/styles.css') ?>">
</head>
<body>
<div class="htmleaf-container">
	<div class="wrapper">
		<div class="container">
			<h1>报到信息查询(<?php echo $building; ?>公寓)</h1>
			
			<form class="form" method="post" action="<?php echo site_url('Building/select'); ?>">
				
					<input type="text" id="idcard" name="idcard6" class="rotate-90 validate-me" data-pattern="^\d+$" placeholder="请输入身份证号后6位进行查询">
					<input type="hidden" id="building" name="building"  value="<?php echo $building; ?>">
				<input type="submit"  value="点击查询寝室">
			</form>
		</div>
	</div>
</div>

<script src="<?php echo base_url('Public/js/jquery-2.1.1.min.js') ?>" type="text/javascript"></script>


</body>
</html>