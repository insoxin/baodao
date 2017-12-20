
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
                    <td>床号</td>
                    <td><?=$item['bed']?></td>
                </tr>
                <tr>
                    <td>辅导员姓名</td>
                    <td><?=$item['teaName']?></td>
                </tr>
                <tr>
                    <td>辅导员办公室电话</td>
                    <td><?=$item['teaOffice']?></td>
                </tr>
                <tr>
                    <td>辅导员手机号</td>
                    <td><?=$item['teaPhone']?></td>
                </tr>
				<tr>
                    <td>交费状态</td>
                    <td><?=$item['money']?></td>
                </tr>
                <?php endforeach; ?>
            </table>
                <h2>新生报到流程</h2>
                
            <table border=1px width=350px>
                <tr>
                    <td colspan="2">时间：9月2日-3日</td>
                </tr>
                <tr>
                    <td>事项</td>
                    <td>地点</td>
                </tr>
                <tr>
                    <td>寝室入住</td>
                    <td rowspan="2">新生公寓</td>
                </tr>
                <tr>
                    <td>购买卧具</td>
                </tr>
                <tr>
                    <td>办理入学手续</td>
                    <td rowspan="3">报到台</td>
                </tr>
                <tr>
                    <td>领取材料袋</td>
                </tr>
                <tr>
                    <td>缴纳保险</td>
                </tr>
                <tr>
                    <td>办理水卡</td>
                    <td>学生10公寓</td>
                </tr>
                <tr>
                    <td>饭卡充值</td>
                    <td>手机充值或学生食堂</td>
                </tr>
                <tr>
                    <td>未使用邮政储蓄卡交费的新生现场缴费</td>
                    <td>办公楼410室</td>
                </tr>
            </table>

                <h2>新生入学安排</h2>
                
            <table border=1px width=350px>
                <tr>
                    <td>时间</td>
                    <td>内容</td>
                </tr>
                <tr>
                    <td>9月3日</td>
                    <td>新生家长会</td>
                </tr>
                <tr>
                    <td rowspan="3">9月4日</td>
                    <td>发放军训服</td>
                </tr>
                <tr>
                    <td>新生体检（早晨空腹）</td>
                </tr>
                <tr>
                    <td>新生班会</td>
                </tr>
                <tr>
                    <td>9月5日</td>
                    <td>军训动员</td>
                </tr>
                <tr>
                    <td>9月5日-20日</td>
                    <td>军训</td>
                </tr>
                <tr>
                    <td>9月8日</td>
                    <td>英语分级测试</td>
                </tr>
				<tr>
                    <td>9月19日</td>
                    <td>迎新晚会</td>
                </tr>
				<tr>               
				   <td rowspan="2">9月20日</td>
                    <td>开学典礼</td>
                </tr>
				<tr>               
				   <td>军训会操</td>
                </tr>
				<tr>
                    <td rowspan="2">9月20日-23日</td>
                    <td>新生入学教育</td>
                </tr>
				<tr>               
				   <td>发放教材</td>
                </tr>
                <tr>
                    <td>9月25日</td>
                    <td>新生开始上课</td>
                </tr>
                
            </table>
                
        </div>

    </body>
</html>
