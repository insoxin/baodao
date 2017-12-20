<?php 
	class Core extends CI_Controller{
		public function index(){
			$this->load->model('Core_model');
			$major=array('材料成型及控制工程','朝鲜语','电气工程及其自动化','俄语','工商管理','国际经济与贸易','会计学','机械电子工程','机械设计制造及其自动化','旅游管理','日语','商务英语','市场营销','土木工程','自动化','食品科学与工程','软件工程','环境设计','视觉传达设计','动画');
			$from=array('黑龙江省','山东省','河北省','四川省','河南省','内蒙古自治区','广东省','甘肃省');
			$list=array();
			$num=array();
			$sum=array();
				// $res=$this->Core_model->select('国际经济与贸易','黑龙江省');
				// $list[$i]=$res->result_array();var_dump($list);
				// $data['list']=$list[$i];
				// $data['major']=$major[$i];
			for ($i=0; $i < count($major); $i++) { 
				# code...
				for ($j=0; $j < count($from); $j++) { 
					# code...
					$res=$this->Core_model->select($major[$i],$from[$j]);
					$list[$i][$j]=$res->result_array();
					$num[$i][$j]=count($list[$i][$j]);
					// echo $num[$i][$j]  ;
					// var_dump($num);
					// $data['list']=$list[$i];

				}
				$resSum=$this->Core_model->selectSum($major[$i]);
				$listSum[$i]=$resSum->result_array();
				$sum[$i]=count($listSum[$i]);
				$resSumAll=$this->Core_model->selectSumAll($major[$i]);
				$listSumAll[$i]=$resSumAll->result_array();
				$sumAll[$i]=count($listSumAll[$i]);
			}
			$data['major']=$major;
			$data['num']=$num;
			$data['sum']=$sum;
			$data['sumAll']=$sumAll;
			$this->load->view('core',$data);
		}
		public function upload(){
			$succ_result=0;
			$error_result=0;
			$file=$_FILES['file'];
			$max_size="200000000"; //最大文件限制（单位：byte）
			$fname=$file['name'];
			$ftype=strtolower(substr(strrchr($fname,'.'),1));
			 //文件格式
			 $uploadfile=$file['tmp_name'];
			 if($_SERVER['REQUEST_METHOD']=='POST'){
			     if(is_uploaded_file($uploadfile)){
			          if($file['size']>$max_size){
			         echo "抱歉,你上传的文件超出上限,请联系网站管理员"; 
			         exit;
			         }
			          if($ftype!='xls'){
			         echo "抱歉,你上传的文件格式有误.请确认文件后缀为xls";
			          exit;   
			         }
			     }else{
			     echo "抱歉,没有检测到你有上传文件";
			      exit; 
			     } 
			 }
			 
			 	$this->load->model('Uploadexcel_model');
				$res=$this->Uploadexcel_model->upload($uploadfile);
				if ($res==1) {
					# code...写入数据库成功
					echo "恭喜你数据上传成功";
				}
		}
		public function jobshangchuan(){
			$this->load->view('jobshangchuan');
		}
		public function upload2(){
			$succ_result=0;
			$error_result=0;
			$file=$_FILES['file'];
			$max_size="200000000"; //最大文件限制（单位：byte）
			$fname=$file['name'];
			$ftype=strtolower(substr(strrchr($fname,'.'),1));
			 //文件格式
			 $uploadfile=$file['tmp_name'];
			 if($_SERVER['REQUEST_METHOD']=='POST'){
			     if(is_uploaded_file($uploadfile)){
			          if($file['size']>$max_size){
			         echo "抱歉,你上传的文件超出上限,请联系网站管理员"; 
			         exit;
			         }
			          if($ftype!='xls'){
			         echo "抱歉,你上传的文件格式有误.请确认文件后缀为xls";
			          exit;   
			         }
			     }else{
			     echo "抱歉,没有检测到你有上传文件";
			      exit; 
			     } 
			 }
			 
			 	$this->load->model('Uploadexcel_model');
				$res=$this->Uploadexcel_model->upload2($uploadfile);
				if ($res==1) {
					# code...写入数据库成功
					echo "恭喜你数据上传成功";
				}
		}
		public function downloadexcel(){
		$this->load->model('Downloadexcel_model');
		$this->Downloadexcel_model->get();
		} 
	} 

 ?>