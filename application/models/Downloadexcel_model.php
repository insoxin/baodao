<?php 
class Downloadexcel_model extends CI_model{
	public function get(){
		
		$data=$this->db->select('idCard,stuId,name,college,major,class,stuNo,sex,ethnicity,from,subject,email,phone,building,dorm,bed,teaName,teaOffice,teaPhone,register,time,registerDorm,money')->from('xinsheng2017')->get();
		$data=$data->result_array();

		//设置字符格式
		header("Content-type:text/html;charset=utf-8");
		//引入PHPExcel库文件（路径根据自己情况）
		include './phpexcel/Classes/PHPExcel.php';
		//创建对象
		$excel = new PHPExcel();
		//Excel表格式,这里简略写了8列
		$letter = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W');
		//表头数组
		$tableheader = array('身份证号','考生号','姓名','院系','专业','班级','学号','性别','民族','生源地','科类','收件人','联系电话','宿舍楼号','宿舍号','床号','辅导员姓名','辅导员办公室电话','辅导员手机号','报到情况','报到时间','入住情况','交费状况');
		//填充表头信息
		for($i = 0;$i < count($tableheader);$i++) {
		$excel->getActiveSheet()->setCellValue("$letter[$i]1","$tableheader[$i]");
		}

		
		/*$data = array(
		array('10101','机构运动简图测绘','机械原理','1203','材型141','','17','2','5','杨东宇','杨东宇','123')
		);*/
		//填充表格信息
		for ($i = 2;$i <= count($data) + 1;$i++) {
		$j = 0;
		foreach ($data[$i - 2] as $key=>$value) {
			if ($j<23) {
				# code...跳过预定时间的状态那一行,不给用户显示.
				$excel->getActiveSheet()->setCellValue("$letter[$j]$i","$value");
			}
		
		$j++;
		}
		}
		//创建Excel输入对象
		$write = new PHPExcel_Writer_Excel5($excel);
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
		header("Content-Type:application/force-download");
		header("Content-Type:application/vnd.ms-execl");
		header("Content-Type:application/octet-stream");
		header("Content-Type:application/download");;
		header('Content-Disposition:attachment;filename="test.xls"');
		header("Content-Transfer-Encoding:binary");
		$write->save('php://output');
	}
	
	public function s(){
		
		// $data=$this->db->select('id,t_id,t_password,t_name')->from('jiaoshi')->get();
		// $data=$data->result_array();

		$data=$this->db->get('jiaoshi');
		$data=$data->result_array();
		var_dump($data);
//设置字符格式
		// header("Content-type:text/html;charset=utf-8");
		//引入PHPExcel库文件（路径根据自己情况）
		include './phpexcel/Classes/PHPExcel.php';
		//创建对象
		$excel = new PHPExcel();
		//Excel表格式,这里简略写了8列
		$letter = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI');
		//表头数组
		$tableheader = array('姓名','考生号','身份证号','性别','学号','学历','专业','生源所在地','统一社会信用代码','单位名称','具体单位名称','单位所在地','实际就业单位','实际就业单位所在地','单位性质','单位行业'	,'工作职位类别','备注栏打印项1','毕业去向','报到证签发类别','备注栏打印项2','单位联系人','单位联系人手机','单位电话'	,'单位邮编','单位传真','所在班级','档案迁转地址','档案转寄单位名称','档案转寄地址','协议书号','报到证编号','就业标示','辅导员姓名','修改时间');
		//填充表头信息
		for($i = 0;$i < count($tableheader);$i++) {
		$excel->getActiveSheet()->setCellValue("$letter[$i]1","$tableheader[$i]");
		}

		
		/*$data = array(
		array('10101','机构运动简图测绘','机械原理','1203','材型141','','17','2','5','杨东宇','杨东宇','123')
		);*/
		//填充表格信息
		for ($i = 2;$i <= count($data) + 1;$i++) {
		$j = 0;
		foreach ($data[$i - 2] as $key=>$value) {
			if ($j<23) {
				# code...跳过预定时间的状态那一行,不给用户显示.
				$excel->getActiveSheet()->setCellValue("$letter[$j]$i","$value");
			}
		
		$j++;
		}
		}
		//创建Excel输入对象
		$write = new PHPExcel_Writer_Excel5($excel);
		header("Pragma: Public");
		header("Expires: 0");
		header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
		header("Content-Type:application/force-download");
		header("Content-Type:application/vnd.ms-execl");
		header("Content-Type:application/octet-stream");
		header("Content-Type:application/download");;
		header('Content-Disposition:attachment;filename="test.xls"');
		header("Content-Transfer-Encoding:binary");
		$write->save('php://output');
		
	}
}
