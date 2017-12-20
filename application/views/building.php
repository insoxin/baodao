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
			<h1>报到信息查询(公寓)</h1>
			
			<form class="form" method="post" action="<?php echo site_url('Building/selectBuilding'); ?>">
				<!-- 	<div>
				    <label><input name="building" type="radio" value="1" />1 </label> <br>
					<label><input name="building" type="radio" value="2" />2 </label> <br>
					<label><input name="building" type="radio" value="3" />3 </label> <br>
					<label><input name="building" type="radio" value="4" />4 </label> <br>
					<label><input name="building" type="radio" value="5" />5 </label><br>
					<label><input name="building" type="radio" value="6" />6 </label><br>
					<label><input name="building" type="radio" value="7" />7 </label><br>
					<label><input name="building" type="radio" value="8" />8 </label><br>
					<label><input name="building" type="radio" value="9" />9 </label><br>
					<label><input name="building" type="radio" value="10" />10 </label><br>
					<label><input name="building" type="radio" value="11" />11 </label><br>
					<label><input name="building" type="radio" value="12" />12 </label><br>
					</div> -->
					<select name="building" id="building">
					    <option value="1">1公寓</option>
						<option value="2">2公寓</option>
						<option value="3">3公寓</option>
						<option value="4">4公寓</option>
						<option value="5">5公寓</option>
						<option value="6">6公寓</option>
						<option value="7">7公寓</option>
						<option value="8">8公寓</option>
						<option value="9">9公寓</option>
						<option value="10">10公寓</option>
						<option value="11">11公寓</option>
						<option value="12">12公寓</option>

				    </select>
				<input type="submit"  value="点击选择公寓">
			</form>
		</div>
		
		
	</div>
</div>

<script src="<?php echo base_url('Public/js/jquery-2.1.1.min.js') ?>" type="text/javascript"></script>


</body>
</html>