<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>辅导员管理界面</title>
	<style>
	  body{
		background:url(<?php echo base_url('Public/images/bg.jpg') ?>) top left no-repeat;
		background-size:cover;
	  }
	</style>
</head>
<body>
	<div style="margin: 0 auto;">
		<form method="post" action="<?php echo site_url('Tea/select'); ?>">
		  <h1 style="text-align: center;">迎新报到系统(辅导员)</h1>
		  <div style="margin: 0 auto; width: 200px;">
		  <label>请选择专业名称进行查询</label>
		  <div>
		    <label><input name="major" type="radio" value="国际经济与贸易" />国际经济与贸易 </label> <br>
			<label><input name="major" type="radio" value="市场营销" />市场营销 </label> <br>
			<label><input name="major" type="radio" value="商务英语" />商务英语 </label> <br>
			<label><input name="major" type="radio" value="日语" />日语 </label> <br>
			<label><input name="major" type="radio" value="材料成型及控制工程" />材料成型及控制工程 </label><br>
			<label><input name="major" type="radio" value="机械设计制造及其自动化" />机械设计制造及其自动化 </label><br>
			<label><input name="major" type="radio" value="电气工程及其自动化" />电气工程及其自动化 </label><br>
			<label><input name="major" type="radio" value="软件工程" />软件工程 </label><br>
			<label><input name="major" type="radio" value="朝鲜语" />朝鲜语 </label><br>
			<label><input name="major" type="radio" value="俄语" />俄语 </label><br>
			<label><input name="major" type="radio" value="机械电子工程" />机械电子工程 </label><br>
			<label><input name="major" type="radio" value="自动化" />自动化 </label><br>
			<label><input name="major" type="radio" value="会计学" />会计学 </label><br>
			<label><input name="major" type="radio" value="土木工程" />土木工程 </label><br>
			<label><input name="major" type="radio" value="工商管理" />工商管理 </label><br>
			<label><input name="major" type="radio" value="旅游管理" />旅游管理 </label><br>
			<label><input name="major" type="radio" value="环境设计" />环境设计 </label><br>
			<label><input name="major" type="radio" value="视觉传达设计" />视觉传达设计 </label><br>
			<label><input name="major" type="radio" value="动画" />动画 </label><br>
			<label><input name="major" type="radio" value="食品科学与工程" />食品科学与工程 </label><br>
			</div>

		  <input type="submit" name="register" value="已报到">
		  <input type="submit" name="register" value="未报到">
		</div>
		</form>
	</div>

</body>
</html>