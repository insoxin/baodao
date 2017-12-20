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
		<th colspan="11">新生报到情况统计</th>
		<tr>
			
			<td>专业名称</td>
			<td>录取人数</td>
			<td>已报到人数</td>
			<td>黑龙江</td>
			<td>山东</td>
			<td>河北</td>
			<td>四川</td>
			<td>河南</td>
			<td>内蒙古</td>
			<td>广东省</td>
			<td>甘肃省</td>
		</tr>
		
		<?php 
			$li=array(0,0,0,0,0,0,0,0);//理科各省人数数组
			$liSum=0;//理科合计人数
			$wen=array(0,0,0,0,0,0,0,0);//文科各省人数数组
			$wenSum=0;//文科合计人数
			$yi=array(0,0,0,0,0,0,0,0);//艺术各省人数数组
			$yiSum=0;//艺术合计人数
			$Sum=array(0,0,0,0,0,0,0,0);//总计各省人数数组
			$SumSum=0;//总计合计人数

			$liSumAll=0;//理科录取合计人数
			$wenSumAll=0;//文科录取合计人数
			$yiSumAll=0;//艺术录取合计人数
			$SumSumAll=0;//总计合计录取人数
			$sumR=0;//已报到人数和
			//理工类
			for ($i=0; $i < count($major); $i++) { 
				echo "<tr>";
					
					# code...
					echo"<td>".$major[$i]."</td>";
					$liSumAll+=$sumAll[$i];
					echo"<td>".$sumAll[$i]."</td>";
					$sumR+=$sum[$i];
					echo"<td>".$sum[$i]."</td>";
					for ($j=0; $j < 8; $j++) { 
						# code...
					echo"<td>". $num[$i][$j]."</td>";
					$li[$j]+=$num[$i][$j];
					$Sum[$j]+=$num[$i][$j];
					}
				echo "</tr>";
			}
			
			// //文史类
			
			// 		# code...
			// 		echo"<td>".$major[$i]."</td>";
			// 		$wenSumAll+=$sumAll[$i];
			// 		echo"<td>".$sumAll[$i]."</td>";
			// 		$wenSum+=$sum[$i];
			// 		echo"<td>".$sum[$i]."</td>";
			// 		for ($j=0; $j < 6; $j++) { 
			// 			# code...
			// 		echo"<td>". $num[$i][$j]."</td>";
			// 		$wen[$j]+=$num[$i][$j];
			// 		$Sum[$j]+=$num[$i][$j];
			// 		}
			// 	echo "</tr>";
				
				
			// //艺术类
			
			// 		# code...
			// 		echo"<td>".$major[$i]."</td>";
			// 		$yiSumAll+=$sumAll[$i];
			// 		echo"<td>".$sumAll[$i]."</td>";
			// 		$yiSum+=$sum[$i];
			// 		echo"<td>".$sum[$i]."</td>";
			// 		for ($j=0; $j < 6; $j++) { 
			// 			# code...
			// 		echo"<td>". $num[$i][$j]."</td>";
			// 		$yi[$j]+=$num[$i][$j];
			// 		$Sum[$j]+=$num[$i][$j];
			// 		}
			// 	echo "</tr>";
				
			
			//合计
			echo "<tr>";
			
			echo "<td>合计</td>";
			$SumSumAll=$liSumAll+$wenSumAll+$yiSumAll;
			echo"<td>".$SumSumAll."</td>";
			// $SumSum=$liSum+$wenSum+$yiSum;
			echo"<td>".$sumR."</td>";
			for ($i=0; $i < 8; $i++) { 
				# code...
				echo"<td>". $Sum[$i]."</td>";
			}
			echo "</tr>";
		?>
	</table>
	<form action="<?php echo site_url('Core/upload'); ?>" method="post" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" value="点我导入数据">
	</form>
	<a href="<?php echo site_url('core/downloadexcel') ?>"><button>点我导出数据</button></a>
	</div>
</body>
</html>