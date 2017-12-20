<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>教师界面</title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h2>学生基础信息列表</h2>
	<table class="table">
		<tr>
			<th>协议书编号</th>
			<th>学号</th>
			<th>姓名</th>
			<th>性别</th>
			<th>专业</th>
			<th>生源所在地</th>
			<th>就业标志</th>
		</tr>
		<tr>
			<td><?php echo $res['协议书号'];?></td>
			<td><?php echo $res['学号'];?></td>
			<td><?php echo $res['姓名'];?></td>
			<td><?php echo $res['性别'];?></td>
			<td><?php echo $res['专业'];?></td>
			<td><?php echo $res['生源所在地'];?></td>
			<td><?php echo $res['就业标示'];?></td>
		</tr>	
	</table>
	<h2>学生详细信息列表</h2>
	<table>
		<form action="<?php echo site_url('Paiqian/update_message');?>" method="post">
				<tr>
					<th>就业标示</th>
					<td>
						<select name="jybs"  width="150px"> 
						  <option value ="未就业">未就业</option> 
						  <option value ="提前盖章">提前盖章</option> 
						  <option value ="已就业">已就业</option> 

						</select> 
					</td>
					<td>
						<?php echo $res['就业标示']; ?>
					</td>
				</tr>
				<tr>
					<th>单位名称</th>
					<td><input type="text" name="dwmc" value="<?php echo $res['单位名称']; ?>" ></td>
				</tr>
				<tr>
					<th>具体单位名称</th>
					<td><input type="text" name="jtdwmc" value="<?php echo $res['具体单位名称']; ?>"></td>
				</tr>
				<tr>
					<th>统一社会信用代码</th>
					<td><input type="text" name="tyshxydm" value="<?php echo $res['统一社会信用代码']; ?>"></td>
				</tr>
				
					<th>单位所在地</th>
					<td><input type="text" name="dwszd" value="<?php echo $res['单位所在地']; ?>"></td>
				</tr>
				<tr>
					<th>实际就业单位</th>
					<td><input type="text" name="sjjydw" value="<?php echo $res['实际就业单位']; ?>"></td>
				</tr>
				<tr>
					<th>实际就业单位所在地</th>
					<td><input type="text" name="sjjydwszd" value="<?php echo $res['实际就业单位所在地']; ?>"></td>
				</tr>
				<tr>
					<th>单位联系人</th>
					<td><input type="text" name="dwlxr" value="<?php echo $res['单位联系人']; ?>"></td>
				</tr>
				<tr>
					<th>单位联系人手机</th>
					<td><input type="text" name="dwlxrsj" value="<?php echo $res['单位联系人手机']; ?>"></td>
				</tr>
				<tr>
					<th>单位电话</th>
					<td><input type="text" name="dwdh" value="<?php echo $res['单位电话']; ?>"></td>
				</tr>
								<tr>
					<th>单位邮编</th>
					<td><input type="text" name="dwyb" value="<?php echo $res['单位邮编']; ?>"></td>
				</tr>
								<tr>
					<th>单位传真</th>
					<td><input type="text" name="dwcz" value="<?php echo $res['单位传真']; ?>"></td>
				</tr>
				<tr>
					<th>备注栏打印项2</th>
					<td><input type="text" name="bzldyx2" value="<?php echo $res['备注栏打印项2']; ?>"></td>
				</tr>
			
				<tr>
					<th>单位性质</th>
					<td>
						<select name="dwxz"> 
							<?php foreach ($dwxz as $key => $value) { ?>
						  <option value ="<?=$value['name']?>"><?=$value['name']?></option> 
						  	<?php }	?>   
						</select> 
					<td>
						
						<?php echo $res['单位性质']; ?>
					</td>							
					</td>
				</tr>
				<tr>
					<th>单位行业</th>
					<td>
						<select name="dwhy"> 
							<?php foreach ($dwhy as $key => $value) { ?>
						  <option value ="<?=$value['name']?>"><?=$value['name']?></option> 
						  	<?php }	?>   
						</select> 
					</td>
					<td>
						
						<?php echo $res['单位行业']; ?>
					</td>
				</tr>
				<tr>
					<th>工作职位类别</th>
					<td>
						<select name="gzzwlb"> 
							<?php foreach ($gzzwlb as $key => $value) { ?>
						  <option value ="<?=$value['name']?>"><?=$value['name']?></option> 
						  	<?php }	?>   
						</select> 
						<td>
							
						<?php echo $res['工作职位类别']; ?>
						</td>
					</td>
				</tr>
				<tr>
					<th>毕业去向</th>
					<td>
						<select name="byqx"> 
							<?php foreach ($byqx as $key => $value) { ?>
						  <option value ="<?=$value['name']?>"><?=$value['name']?></option> 
						  	<?php }	?>   
						</select> 
					</td>
					<td>
						
						<?php echo $res['毕业去向']; ?>
					</td>
				</tr>
				<tr>
					<th>报到证签发类别</th>
					<td><input type="text" name="bdzqflb" value="<?php echo $res['报到证签发类别']; ?>"></td>
				</tr>
				<tr>
					<th>档案迁转地址</th>
					<td><input type="text" name="daqzdz" value="<?php echo $res['档案迁转地址']; ?>"></td>
				</tr>
				<tr>
					<th>档案迁转地址名称</th>
					<td><input type="text" name="daqzdzmc" value="<?php echo $res['档案迁转地址名称']; ?>"></td>
				</tr>
				<tr>
					<th>档案转寄地址</th>
					<td><input type="text" name="dazjdz" value="<?php echo $res['档案转寄地址']; ?>"></td>
				<tr>
					<td><input type="hidden" name="id" value="<?php echo $res['学号'];?>"><input type="submit" value="修改"></td>
				</tr>
			</form>
	</table>
</body>
</html>