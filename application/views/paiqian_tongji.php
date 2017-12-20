<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<link href="<?php echo base_url('Public/css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
<title>学生信息</title>
<style type="text/css">
	.main{
		margin:0 auto;
		width: 580px;
	}
</style>
</head>
<body>
	<div class=main>
	<table border=1px>
		<th colspan="9">情况统计</th>
		<tr>
			
			<td>专业名称</td>
			<td>毕业生人数</td>
			<td>就业人数</td>
			<td>提前盖章人数</td>
			<td>未就业人数</td>
			<td>就业率</td>
		</tr>
		
		<?php 
		//var_dump($data);
			
			//理工类
			for ($i=0; $i < count($major); $i++) { 
				echo "<tr>";
					
					# code...
					echo"<td>".$major[$i]."</td>";
					echo"<td>".$sumAll[$i]."</td>";
					echo"<td>".$num[$i]['已就业']."</td>";
					echo"<td>".$num[$i]['提前盖章']."</td>";
					echo"<td>".$num[$i]['未就业']."</td>";
					echo"<td>".$lv[$i]."%</td>";
					
				echo "</tr>";
			}
			
			

			
		?>
	</table>
	
	</div>
</body>
</html>