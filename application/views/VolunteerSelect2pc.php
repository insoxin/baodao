<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>哈尔滨理工大学荣成学院2017级新生报到单</title>
	<style type="text/css">
	.print{
		width: 720px;
		margin:0 auto;
	}
	.top h4{
		display:inline
	}
	.text{text-align:center;}
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
	.container3 {
	  max-width: 650px;
	  margin: 0 auto;
	  padding: 120px 0;
	  height: 400px;
	  text-align: center;
	}
	.container h1 {
	  font-size: 40px;
	  -webkit-transition-duration: 1s;
	          transition-duration: 1s;
	  -webkit-transition-timing-function: ease-in-put;
	          transition-timing-function: ease-in-put;
	  font-weight: 200;
	}
	form {
	  padding: 20px 0;
	  position: relative;
	  z-index: 2;
	}
	form input {
	  -webkit-appearance: none;
	     -moz-appearance: none;
	          appearance: none;
	  outline: 0;
	  border: 1px solid rgba(255, 255, 255, 0.4);
	  background-color: rgba(255, 255, 255, 0.2);
	  width: 250px;
	  border-radius: 3px;
	  padding: 10px 15px;
	  margin: 0 auto 10px auto;
	  display: block;
	  text-align: center;
	  font-size: 18px;
	  color: white;
	  -webkit-transition-duration: 0.25s;
	          transition-duration: 0.25s;
	  font-weight: 300;
	}
	form input:hover {
	  background-color: rgba(255, 255, 255, 0.4);
	}
	form input:focus {
	  background-color: white;
	  width: 300px;
	  color: #53e3a6;
	}
	form button {
	  -webkit-appearance: none;
	     -moz-appearance: none;
	          appearance: none;
	  outline: 0;
	  background-color: white;
	  border: 0;
	  padding: 10px 15px;
	  color: #53e3a6;
	  border-radius: 3px;
	  width: 250px;
	  cursor: pointer;
	  font-size: 18px;
	  -webkit-transition-duration: 0.25s;
	          transition-duration: 0.25s;
	}
	form button:hover {
	  background-color: #f5f7f9;
	}
	.container4 {
	  max-width: 692px;
	  margin: 0 auto;
	  padding: 500px 0;
	  height: 900px;

	}

	.xuxian1{
		margin-top: 150px;
		width: 692px;
		height: 10px;
	}
/*	.zhuyuan{
		margin-top: -20px;
	}
	.xuxian{
		margin-top: -20px;
	}
	.ruzhu{
		margin-top: -20px;
	}*/
	</style>
</head>
<body>
<div class="htmleaf-container">
	<div class="wrapper1">
		<div class="container3">
			<table border=1px width=650px>
		<tr>
			<td>姓名</td>
			<td>专业</td>
			<td>班级</td>
			<td>学号</td>
			<td>宿舍楼号</td>
			<td>宿舍号</td>
			
			<td>交费状态</td>
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
			
			<td><?=$item['money']?></td>
			<td><?=$item['register']?></td>
				
		</tr>
		<?php endforeach; ?>
	</table>
			<form method="post" action="<?php echo site_url('Volunteer/register2pc'); ?>">
				<input type="hidden" name="idCard" value="<?=$item['idCard']?>">
				<input type="submit" value="点击报到" >
			</form>

		</div>
		
		
	</div>

</div>


 
</body>

</html>