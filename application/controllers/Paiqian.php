<?php 
	class Paiqian extends CI_Controller{
		public function index(){
			$this->load->view('paiqian_login');//指向view
		}
		public function login(){
			//获取用户名密码
			$t_id=$this->input->post('t_id');
			$t_password=$this->input->post('t_password');
			$this->load->model('Paiqian_model');
			$userType=$this->Paiqian_model->checklogin($t_id,$t_password);
			// var_dump($userType);
			if ($userType==NULL) {
				# code...密码错误界面
				$this->load->view('paiqian_cuowu');
			}else {
				# code...用户dengluchenggong
				$res=$userType->result_array();
				$data['res']=$res;
				$this->load->view('paiqian_tea',$data);
			}
		}
		public function update(){
			
			$id=$this->input->post('id');
			// var_dump($id);
			$this->load->model('Paiqian_model');
			$data=$this->Paiqian_model->update($id);
			
			$this->load->view('paiqian_tea_update',$data);
			
		}

		public function update_message(){
			// date_default_timezone_set(‘Asia/Shanghai’);
			$id=$this->input->post('id');
			$jybs=$this->input->post('jybs');
			$dwxz=$this->input->post('dwxz');
			$dwhy=$this->input->post('dwhy');
			$dwmc=$this->input->post('dwmc');
			$jtdwmc=$this->input->post('jtdwmc');
			$tyshxydm=$this->input->post('tyshxydm');
			$dwszd=$this->input->post('dwszd');
			$sjjydw=$this->input->post('sjjydw');
			$sjjydwszd=$this->input->post('sjjydwszd');
			$dwlxr=$this->input->post('dwlxr');
			$dwlxrsj=$this->input->post('dwlxrsj');
			$dwdh=$this->input->post('dwdh');
			$dwyb=$this->input->post('dwyb');
			$bzldyx2=$this->input->post('bzldyx2');
			$gzzwlb=$this->input->post('gzzwlb');
			$byqx=$this->input->post('byqx');
			$bdzqflb=$this->input->post('bdzqflb');
			$daqzdz=$this->input->post('daqzdz');
			$daqzdzmc=$this->input->post('daqzdzmc');
			$dazjdz=$this->input->post('dazjdz');
			$dwcz=$this->input->post('dwcz');
			// $xgsj=date('Y-m-d H:i:s');
			//echo  date('Y-m-d H:i:s');
			$xgsj=time(); 
		 
			$user=array('学号'=>$id);
			$Data=array('就业标示'=>$jybs,'单位名称'=>$dwmc,'具体单位名称'=>$jtdwmc,'统一社会信用代码'=>$tyshxydm,'单位所在地'=>$dwszd,'实际就业单位'=>$sjjydw,'实际就业单位所在地'=>$sjjydwszd,'单位联系人'=>$dwlxr,'单位联系人手机'=>$dwlxrsj,'单位电话'=>$dwdh,'单位邮编'=>$dwyb,'单位传真'=>$dwcz,'备注栏打印项2'=>$bzldyx2,'单位性质'=>$dwxz,'单位行业'=>$dwhy,'工作职位类别'=>$gzzwlb,'毕业去向'=>$byqx,'报到证签发类别'=>$bdzqflb,'档案迁转地址'=>$daqzdz,'档案迁转地址名称'=>$daqzdzmc,'档案转寄地址'=>$dazjdz,'修改时间'=>$xgsj);
			
		
			$this->load->model('Paiqian_model');
			$data=$this->Paiqian_model->update_message($user,$Data,$id);
		
			$this->load->view('paiqian_tea_update',$data);
			
		}

		public function select(){
			$major=$this->input->post('major');
			$register=$this->input->post('register');
			$this->load->model('Tea_model');
			$res=$this->Tea_model->select($major,$register);
			$list=$res->result_array();
			$data['list']=$list;
			$data['major']=$major;
			if ($register=="已报到") {
				# code...
				$this->load->view('teaSelect1',$data);//已报到
			}elseif($register=="未报到"){
				$this->load->view('teaSelect2',$data);//未报到
			}else{
				echo "数据库可能有误,请联系维护人员";
			}
		}
		public function all(){
			
			// $id=$this->input->post('id');
			// var_dump($id);
			$this->load->model('Paiqian_model');
			$res=$this->Paiqian_model->update_all();
			$data['res']=$res;
			$this->load->view('paiqian_tea',$data);
			
		}
		public function paiqian_guanliyuan(){
				$this->load->view('paiqian_guanliyuan');
		}
		
		public function recent(){
			$this->load->model('Paiqian_model');
			$res=$this->Paiqian_model->update_recent();
			$data['res']=$res;
			$this->load->view('paiqian_tea',$data);
			
			//echo"进入";
		}
		public function reported(){
			$this->load->model('Paiqian_model');
			$data=$this->Paiqian_model->update_already();
			
			$this->load->view('paiqian_tea2',$data);
		}
		public function statistics1(){
			$this->load->model('Paiqian_model');
			$res=$this->Paiqian_model->update_all();
			$data['res']=$res;
			$this->load->view('paiqian_tea',$data);
		}
		public function excel(){
			$this->load->model('Downloadexcel_model');
			$this->Downloadexcel_model->s();
			// $this->load->view('excel');
			
		}
		public function statistics(){
			$this->load->model('Paiqian_model');
			$major=array('材料成型及控制工程','朝鲜语','电气工程及其自动化','电子信息工程','俄语','工商管理','国际经济与贸易','会计学','机械电子工程','机械设计制造及其自动化','旅游管理','日语','商务英语','市场营销','土木工程','自动化','食品科学与工程','软件工程','环境设计','视觉传达设计','数字媒体艺术');
			//$major=array('材料成型及控制工程');
			$from=array('未就业','提前盖章','已就业');
			$list=array();
			$num=array();
			$lv=array();
				// $res=$this->Core_model->select('国际经济与贸易','黑龙江省');
				// $list[$i]=$res->result_array();var_dump($list);
				// $data['list']=$list[$i];
				// $data['major']=$major[$i];
			for ($i=0; $i < count($major); $i++) { 
				# code...
				
				$res=$this->Paiqian_model->tongji_select($major[$i],'未就业');
				$list[$i]=$res->result_array();
				$num[$i]['未就业']=count($list[$i]);
				$res=$this->Paiqian_model->tongji_select($major[$i],'提前盖章');
				$list[$i]=$res->result_array();
				$num[$i]['提前盖章']=count($list[$i]);
				$res=$this->Paiqian_model->tongji_select($major[$i],'已就业');
				$list[$i]=$res->result_array();
				$num[$i]['已就业']=count($list[$i]);
				
				$resSumAll=$this->Paiqian_model->tongji_selectSumAll($major[$i]);
				$listSumAll[$i]=$resSumAll->result_array();
				$sumAll[$i]=count($listSumAll[$i]);
				if ($sumAll[$i]==0) {
					$lv[$i]=0;
				}else{
					$lv[$i]=(($num[$i]['已就业']+$num[$i]['提前盖章'])/$sumAll[$i])*100;
				}
				//var_dump($sumAll[$i]);
				

			}
			$data['major']=$major;
			$data['num']=$num;
			$data['lv']=$lv;
			$data['sumAll']=$sumAll;
			//var_dump($data);
			$this->load->view('paiqian_tongji',$data);
		}


	}

 ?>