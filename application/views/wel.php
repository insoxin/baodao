<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新生报到系统入口</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Public/css/styles.css') ?>">
	<style type="text/css">
		.form {
			margin-top: -20px;
			/*margin-bottom: 5px;*/
		}
	</style>
</head>
<body>
	<div class="htmleaf-container">
	<div class="wrapper2">
		<div class="container2">
			<h1>迎新报到系统</h1>
			<form class="form" method="post" action="<?php echo site_url('stu/index'); ?>">
				<input type="submit"  value="学生入口(手机版)">
			</form>
			<form class="form" method="post" action="<?php echo site_url('stu/index2'); ?>">
				<input type="submit"  value="学生入口(电脑版)">
			</form>
		<!-- 	<form class="form" method="post" action="<?php echo site_url('volunteer/index'); ?>">
				<input type="submit"  value="报到台入口">
			</form> -->
			<form class="form" method="post" action="<?php echo site_url('volunteer/index2'); ?>">
				<input type="submit"  value="报到台入口(手机版)">
			</form>
			<form class="form" method="post" action="<?php echo site_url('volunteer/index2pc'); ?>">
				<input type="submit"  value="报到台入口(电脑版)">
			</form>
			<form class="form" method="post" action="<?php echo site_url('tea/index'); ?>">
				<input type="submit"  value="辅导员入口">
			</form>
			<form class="form" method="post" action="<?php echo site_url('core/index'); ?>">
				<input type="submit"  value="学工部入口">
			</form>
			<form class="form" method="post" action="<?php echo site_url('building/index'); ?>">
				<input type="submit"  value="公寓入口">
			</form>
		</div>
	</div>
</div>
	
</body>
</html>