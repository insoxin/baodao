<?php 
	class Building extends CI_Controller{
		public function index(){
			$this->load->view('building');
		}
		public function selectBuilding(){
			$building=$this->input->post('building');
			$data['building']=$building;
			$this->load->view('buildingB',$data);
		}
		public function select(){
			$building=$this->input->post('building');
			$idcard6=$this->input->post('idcard6');
			$this->load->model('Building_model');
			$res=$this->Building_model->select($building,$idcard6);
			$list=$res->result_array();
			$data['list']=$list;
			$this->load->view('buildingSelect',$data);
			
		}
		public function register(){
			$building=$this->input->post('building');
			$idCard=$this->input->post('idCard');
			$this->load->model('Building_model');
			$res=$this->Building_model->register($idCard);
			if ($res) {
				# code...
				//echo "报到成功";
				$data['state']="入住成功";
			}else{
				echo "报到失败,请联系辅导员";
			}
			$data['building']=$building;
			$this->load->view('buildingBack',$data);
		}
	}

 ?>