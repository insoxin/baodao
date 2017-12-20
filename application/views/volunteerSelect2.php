


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>跳转页面</title>
        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="format-detection" content="telephone=no">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Pimp your tables with CSS3" />
        <meta name="keywords" content="table, css3, style, beautiful, fancy, css"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <style>
        *{
            margin:0;
            padding:0;
        }
        body{
        	width: 100%;
        	/* height: 600px; */
            font-family: Georgia, serif;
            font-size: 20px;
            /*font-style: italic;*/
            font-weight: normal;
            letter-spacing: normal;
            background: #f0f0f0;
        }
        #content{
            background-color:#fff;
            width:100%;
            /* padding:40px; */
            margin:0 auto;
            /* border-left:30px solid #1D81B6; */
            /* border-right:1px solid #ddd; */
            -moz-box-shadow:0px 0px 16px #aaa;
        }
        .head{
            font-family:Helvetica,Arial,Verdana;
            text-transform:uppercase;
            font-weight:bold;
            font-size:12px;
            font-style:normal;
            letter-spacing:3px;
            color:#888;
            border-bottom:3px solid #f0f0f0;
            padding-bottom:10px;
            margin-bottom:10px;
        }
        .head a{
            color:#1D81B6;
            text-decoration:none;
            float:right;
            text-shadow:1px 1px 1px #888;
        }
        .head a:hover{
            color:#f0f0f0;
        }
        #content h1{
            font-family:"Trebuchet MS",sans-serif;
            color:#1D81B6;
            font-weight:normal;
            font-style:normal;
            font-size:56px;
            text-shadow:1px 1px 1px #aaa;
        }
        #content h2{
            font-family:"Trebuchet MS",sans-serif;
            font-size:34px;
            font-style:normal;
            background-color:#f0f0f0;
            margin:40px 0px 30px -40px;
            padding:0px 0px 0px 40px;
            clear:both;
            float:left;
            width:100%;
            color:#aaa;
            text-shadow:1px 1px 1px #fff;
        }
        .aa{
            font-size:36px
        }
    </style>
    <body style="margin-left: 5px">

        <div id="content">
            <a class="back" href=""></a>
            <span class="scroll"></span>
            
            <b class="aa">2017级新生报到</b>
            
            <h2>个人基本信息</h2>
            
            <table border=1px width=350px>
            	

                <?php foreach ($list as $item):?>
                <tr>
                    <td>姓名</td>
                    <td><?=$item['name']?></td>
                </tr>
                <tr>
                    <td>专业</td>
                    <td><?=$item['major']?></td>
                </tr>
                <tr>
                    <td>班级</td>
                    <td><?=$item['class']?></td>
                </tr>
                <tr>
                    <td>学号</td>
                    <td><?=$item['stuNo']?></td>
                </tr>
                <tr>
                    <td>公寓楼号</td>
                    <td><?=$item['building']?></td>
                </tr>
                <tr>
                    <td>宿舍号</td>
                    <td><?=$item['dorm']?></td>
                </tr>
                <tr>
                    <td>交费状态</td>
                    <td><?=$item['money']?></td>
                </tr>
                <tr>
                    <td>状态</td>
                    <td><?=$item['register']?></td>
                </tr>
                <?php endforeach; ?>
            </table> 
            <form method="post" action="<?php echo site_url('Volunteer/register2'); ?>">
				<input type="hidden" name="idCard" value="<?=$item['idCard']?>">
				<input type="submit"  class="btn btn-primary btn-lg btn-block" value="点击报到" >
			</form>
        </div>

    </body>
</html>
