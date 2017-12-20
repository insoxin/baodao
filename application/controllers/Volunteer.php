<?php 
	class Volunteer extends CI_Controller{
		public function index(){
			$this->load->view('volunteer2');
		}
		public function index2(){
			$this->load->view('volunteer2');
		}
		public function index2pc(){
			$this->load->view('volunteerpc');
		}
		public function select(){
			$idCard=$this->input->post('idCard');
			$this->load->model('Volunteer_model');
			$res=$this->Volunteer_model->select($idCard);
			$list=$res->result_array();
			if ($list) {
				# code...
				$data['list']=$list;
				$this->load->view('VolunteerSelect',$data);
			}else{
				$this->load->view('VolunteerSelectNull');
			}
			
		}
		public function select2(){
			$idCard=$this->input->post('idCard');
			$this->load->model('Volunteer_model');
			$res=$this->Volunteer_model->select($idCard);
			$list=$res->result_array();
			if ($list) {
				# code...
				$data['list']=$list;
				$this->load->view('VolunteerSelect2',$data);
			}else{
				$this->load->view('VolunteerSelectNull2');
			}
			
		}
		public function select2pc(){
			$idCard=$this->input->post('idCard');
			$this->load->model('Volunteer_model');
			$res=$this->Volunteer_model->select($idCard);
			$list=$res->result_array();
			if ($list) {
				# code...
				$data['list']=$list;
				$this->load->view('VolunteerSelect2pc',$data);
			}else{
				$this->load->view('VolunteerSelectNull2pc');
			}
			
		}
		public function register(){
			$idCard=$this->input->post('idCard');
			$this->load->model('Volunteer_model');
			$res=$this->Volunteer_model->register($idCard);
			if ($res) {
				# code...
				//echo "报到成功";
				$data['state']="报到成功";
			}else{
				echo "报到失败,请联系辅导员";
			}
			$this->load->view('volunteerBack',$data);
		}
		public function register2(){
			$idCard=$this->input->post('idCard');
			$this->load->model('Volunteer_model');
			$res=$this->Volunteer_model->register($idCard);
			if ($res) {
				# code...
				//echo "报到成功";
				$data['state']="报到成功";
			}else{
				echo "报到失败,请联系辅导员";
			}
			$this->load->view('volunteerBack2',$data);
		}
		public function register2pc(){
			$idCard=$this->input->post('idCard');
			$this->load->model('Volunteer_model');
			$res=$this->Volunteer_model->register($idCard);
			if ($res) {
				# code...
				//echo "报到成功";
				$data['state']="报到成功";
			}else{
				echo "报到失败,请联系辅导员";
			}
			$this->load->view('volunteerBack2pc',$data);
		}
	}

 ?>