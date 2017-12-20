<?php 
class Uploadexcel_model extends CI_model{
	public function upload($uploadfile){
		//include("conn.php"); 
		
		$this->load->database();
	 	require_once './phpexcel/Classes/PHPExcel.php';
	    require_once './phpexcel/Classes/PHPExcel/IOFactory.php';
	    require_once './phpexcel/Classes/PHPExcel/Reader/Excel5.php';
	    $objReader = PHPExcel_IOFactory::createReader('excel5'); //use Excel5 for 2003 format 
		$excelpath=$uploadfile;
		$objPHPExcel = $objReader->load($excelpath); 
		    $sheet = $objPHPExcel->getSheet(0); 
		    $highestRow = $sheet->getHighestRow();           //取得总行数 
		$highestColumn = $sheet->getHighestColumn(); //取得总列数
		for($j=2;$j<=$highestRow;$j++)                        //从第二行开始读取数据
	    { 
		$str="";
		        for($k='A';$k<=$highestColumn;$k++)            //从A列读取数据
		         { 
		             $str .=$objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue().'|*|';//读取单元格
		         } 
		$str=mb_convert_encoding($str,'utf8','auto');//根据自己编码修改
		$strs = explode("|*|",$str);
		
		            $arr = array("idCard" => "{$strs[0]}", "stuId" => "{$strs[1]}", "name" => "{$strs[2]}", "college" => "{$strs[3]}", "major" => "{$strs[4]}", "class" => "{$strs[5]}", "stuNo" => "{$strs[6]}", "sex" => "{$strs[7]}", "ethnicity" => "{$strs[8]}", "from" => "{$strs[9]}", "subject" => "{$strs[10]}", "email" => "{$strs[11]}", "phone" => "{$strs[12]}", "building" => "{$strs[13]}", "dorm" => "{$strs[14]}", "bed" => "{$strs[15]}", "teaName" => "{$strs[16]}", "teaOffice" => "{$strs[17]}", "teaPhone" => "{$strs[18]}", "register" => "{$strs[19]}", "time" => "{$strs[20]}", "registerDorm" => "{$strs[21]}", "money" => "{$strs[22]}", "idCard6" => "{$strs[23]}" );
					$bool=$this->db->insert("xinsheng2017",$arr);
		 
		}
		return 1;
	}
	public function upload3($uploadfile){
		//include("conn.php"); 
		
		$this->load->database();
	 	require_once './phpexcel/Classes/PHPExcel.php';
	    require_once './phpexcel/Classes/PHPExcel/IOFactory.php';
	    require_once './phpexcel/Classes/PHPExcel/Reader/Excel5.php';
	    $objReader = PHPExcel_IOFactory::createReader('excel5'); //use Excel5 for 2003 format 
		$excelpath=$uploadfile;
		$objPHPExcel = $objReader->load($excelpath); 
		    $sheet = $objPHPExcel->getSheet(0); 
		    $highestRow = $sheet->getHighestRow();           //取得总行数 
		$highestColumn = $sheet->getHighestColumn(); //取得总列数
		$k = 0; 
 		$host="qdm165376477.my3w.com:3306";
		$db_user="qdm165376477";
		$db_pass="zhuangzi1124";
		$db_name="qdm165376477_db";
		$timezone="Asia/Shanghai";

		$link=mysql_connect($host,$db_user,$db_pass);
		mysql_select_db($db_name,$link);
		mysql_query("SET names UTF8");
		//循环读取excel文件,读取一条,插入一条
		for($j=2;$j<=$highestRow;$j++)
		{
		 
		$a = $objPHPExcel->getActiveSheet()->getCell("A".$j)->getValue();//获取A列的值
		var_dump($a);
		$b = $objPHPExcel->getActiveSheet()->getCell("B".$j)->getValue();//获取B列的值
		var_dump($b);
		$c = $objPHPExcel->getActiveSheet()->getCell("C".$j)->getValue();//获取B列的值
		var_dump($c);
		$d = $objPHPExcel->getActiveSheet()->getCell("D".$j)->getValue();//获取B列的值
		$e = $objPHPExcel->getActiveSheet()->getCell("E".$j)->getValue();//获取B列的值
		$f = $objPHPExcel->getActiveSheet()->getCell("F".$j)->getValue();//获取B列的值
		$g = $objPHPExcel->getActiveSheet()->getCell("G".$j)->getValue();//获取B列的值
		$h = $objPHPExcel->getActiveSheet()->getCell("H".$j)->getValue();//获取B列的值
		$i = $objPHPExcel->getActiveSheet()->getCell("I".$j)->getValue();//获取B列的值
		$j = $objPHPExcel->getActiveSheet()->getCell("J".$j)->getValue();//获取B列的值
		$k = $objPHPExcel->getActiveSheet()->getCell("K".$j)->getValue();//获取B列的值
		$l = $objPHPExcel->getActiveSheet()->getCell("L".$j)->getValue();//获取B列的值
		$m = $objPHPExcel->getActiveSheet()->getCell("M".$j)->getValue();//获取B列的值
		$n = $objPHPExcel->getActiveSheet()->getCell("N".$j)->getValue();//获取B列的值
		$o = $objPHPExcel->getActiveSheet()->getCell("O".$j)->getValue();//获取B列的值
		$p = $objPHPExcel->getActiveSheet()->getCell("P".$j)->getValue();//获取B列的值
		$q = $objPHPExcel->getActiveSheet()->getCell("Q".$j)->getValue();//获取B列的值
		var_dump($q);
		$r = $objPHPExcel->getActiveSheet()->getCell("R".$j)->getValue();//获取B列的值
		$s = $objPHPExcel->getActiveSheet()->getCell("S".$j)->getValue();//获取B列的值
		$t = $objPHPExcel->getActiveSheet()->getCell("T".$j)->getValue();//获取B列的值
		$u = $objPHPExcel->getActiveSheet()->getCell("U".$j)->getValue();//获取B列的值
		$v = $objPHPExcel->getActiveSheet()->getCell("V".$j)->getValue();//获取B列的值
		$w = $objPHPExcel->getActiveSheet()->getCell("W".$j)->getValue();//获取B列的值
		$x = $objPHPExcel->getActiveSheet()->getCell("X".$j)->getValue();//获取B列的值
		$y = $objPHPExcel->getActiveSheet()->getCell("Y".$j)->getValue();//获取B列的值
		$z = $objPHPExcel->getActiveSheet()->getCell("Z".$j)->getValue();//获取B列的值
		$aa = $objPHPExcel->getActiveSheet()->getCell("AA".$j)->getValue();//获取B列的值
		$ab = $objPHPExcel->getActiveSheet()->getCell("AB".$j)->getValue();//获取B列的值
		$ac = $objPHPExcel->getActiveSheet()->getCell("AC".$j)->getValue();//获取B列的值
		$ad = $objPHPExcel->getActiveSheet()->getCell("AD".$j)->getValue();//获取B列的值
		$ae = $objPHPExcel->getActiveSheet()->getCell("AE".$j)->getValue();//获取B列的值
		$af = $objPHPExcel->getActiveSheet()->getCell("AF".$j)->getValue();//获取B列的值
		$ag = $objPHPExcel->getActiveSheet()->getCell("AG".$j)->getValue();//获取B列的值
		$ah = $objPHPExcel->getActiveSheet()->getCell("AH".$j)->getValue();//获取B列的值
		$ai = $objPHPExcel->getActiveSheet()->getCell("AI".$j)->getValue();//获取B列的值
		$aj = $objPHPExcel->getActiveSheet()->getCell("AJ".$j)->getValue();//获取B列的值
		$ak = $objPHPExcel->getActiveSheet()->getCell("AK".$j)->getValue();//获取B列的值
		$al = $objPHPExcel->getActiveSheet()->getCell("AL".$j)->getValue();//获取B列的值
		$am = $objPHPExcel->getActiveSheet()->getCell("AM".$j)->getValue();//获取B列的值
		$an = $objPHPExcel->getActiveSheet()->getCell("AN".$j)->getValue();//获取B列的值
		$ao = $objPHPExcel->getActiveSheet()->getCell("AO".$j)->getValue();//获取B列的值
		$ap = "未确认";//获取B列的值
		$sql = "INSERT INTO shengyuanxinxi4 VALUES(".$a.",".$b.",".$c.",".$d.",".$e.",".$f.",".$g.",".$h.",".$i.",".$j.",".$k.",".$l.",".$m.",".$n.",".$o.",".$p.",".$q.",".$r.",".$s.",".$t.",".$u.",".$v.",".$w.",".$x.",".$y.",".$z.",".$aa.",".$ab.",".$ac.",".$ad.",".$ae.",".$af.",".$ag.",".$ah.",".$ai.",".$aj.",".$ak.",".$al.",".$am.",".$an.",".$ao.",".$ap.")";
		
		var_dump($sql);
		mysql_query($sql);
	}




		// for($j=2;$j<=$highestRow;$j++)                        //从第二行开始读取数据学籍变动代码

	 //    { 
		// $str="";
		//         for($k='A';$k<=$highestColumn;$k++)            //从A列读取数据
		//          { 
		//              $str .=$objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue().'|*|';//读取单元格
		//          } 
		// $str=mb_convert_encoding($str,'utf8','auto');//根据自己编码修改
		// $strs = explode("|*|",$str);
		// var_dump($strs);
		
		//             $arr = array("姓名" => "{$strs[0]}", "考生号" => "{$strs[0]}", "院校代码" => "{$strs[0]}","院校名称" => "{$strs[3]}", "性别代码" => "{$strs[4]}", "性别" => "{$strs[5]}", "身份证号" => "{$strs[6]}", "院系名称" => "{$strs[7]}", "班级" => "{$strs[8]}","学号" => "{$strs[9]}" , "学历代码" => "{$strs[10]}", "学历" => "{$strs[11]}", "学制" => "{$strs[12]}", "专业代码" => "{$strs[13]}", "专业" => "{$strs[14]}", "专业方向" => "{$strs[15]}", "培养方式代码" => "{$strs[16]}");
		// 			$bool=$this->db->insert("shengyuanxinxi4",$arr);

			

		 
		// }
		return 1;
	}
	public function upload2($uploadfile){
		//include("conn.php"); 
		
		$this->load->database();
	 	require_once './phpexcel/Classes/PHPExcel.php';
	    require_once './phpexcel/Classes/PHPExcel/IOFactory.php';
	    require_once './phpexcel/Classes/PHPExcel/Reader/Excel5.php';
	    $objReader = PHPExcel_IOFactory::createReader('excel5'); //use Excel5 for 2003 format 
		$excelpath=$uploadfile;
		$objPHPExcel = $objReader->load($excelpath); 
		    $sheet = $objPHPExcel->getSheet(0); 
		    $highestRow = $sheet->getHighestRow();           //取得总行数 
		$highestColumn = $sheet->getHighestColumn(); //取得总列数
		// for($j=2;$j<=$highestRow;$j++)                        //从第二行开始读取数据
	 //    { 
		// $str="";
		//         for($k='A';$k<=$highestColumn;$k++)            //从A列读取数据
		//          { 
		//              $str .=$objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue().'|*|';//读取单元格
		//          } 
		// $str=mb_convert_encoding($str,'utf8','auto');//根据自己编码修改
		// $strs = explode("|*|",$str);
		// var_dump($strs);
		//             $arr = array("a" => "{$strs[0]}", "b" => "{$strs[1]}", "c" => "{$strs[2]}");
		// 			$bool=$this->db->insert("test",$arr);

		//    //          $arr = array("考生号" => "{$strs[1]}", "姓名" => "{$strs[0]}", "院校代码" => "{$strs[2]}","院校名称" => "{$strs[3]}", "性别代码" => "{$strs[4]}", "性别" => "{$strs[5]}", "身份证号" => "{$strs[6]}", "院系名称" => "{$strs[7]}", "班级" => "{$strs[8]}","学号" => "{$strs[9]}" , "学历代码" => "{$strs[10]}", "学历" => "{$strs[11]}", "学制" => "{$strs[12]}", "专业代码" => "{$strs[13]}", "专业" => "{$strs[14]}", "专业方向" => "{$strs[15]}", "培养方式代码" => "{$strs[16]}");
		// 			// $bool=$this->db->insert("shengyuanxinxi4",$arr);

		 
		// }


		for($j=2;$j<=$highestRow;$j++)
		{
		$str="";
		$str .= $objPHPExcel->getActiveSheet()->getCell("A".$j)->getValue().'|*|';//获取A列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("B".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("C".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("D".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("E".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("F".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("G".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("H".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("I".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("J".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("K".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("L".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("M".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("N".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("O".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("P".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("Q".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("R".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("S".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("T".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("U".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("V".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("W".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("X".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("Y".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("Z".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("AA".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("AB".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("AC".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("AD".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("AE".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("AF".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("AG".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("AH".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("AI".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("AJ".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("AK".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("AL".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("AM".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("AN".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("AO".$j)->getValue().'|*|';//获取B列的值
		$str .= $objPHPExcel->getActiveSheet()->getCell("AP".$j)->getValue().'|*|';//获取B列的值

		$str=mb_convert_encoding($str,'utf8','auto');//根据自己编码修改
		$strs = explode("|*|",$str);
		$sql = "replace into shengyuanxinxi5 values ('{$strs[0]}','{$strs[1]}','{$strs[2]}','{$strs[3]}','{$strs[4]}','{$strs[5]}','{$strs[6]}','{$strs[7]}','{$strs[8]}','{$strs[9]}','{$strs[10]}','{$strs[11]}','{$strs[12]}','{$strs[13]}','{$strs[14]}','{$strs[15]}','{$strs[16]}','{$strs[17]}','{$strs[18]}','{$strs[19]}','{$strs[20]}','{$strs[21]}','{$strs[22]}','{$strs[23]}','{$strs[24]}','{$strs[25]}','{$strs[26]}','{$strs[27]}','{$strs[28]}','{$strs[29]}','{$strs[30]}','{$strs[31]}','{$strs[32]}','{$strs[33]}','{$strs[34]}','{$strs[35]}','{$strs[36]}','{$strs[37]}','{$strs[38]}','{$strs[39]}','{$strs[40]}','{$strs[41]}','未确认')";

		$a=$this->db->query($sql);
			
		}

		return 1;
	}
}

 ?>