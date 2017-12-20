<?php 
	class Stu extends CI_Controller{
		public function index(){
			$this->load->view('stu');
		}
		public function index2(){
			$this->load->view('stupc');
		}
		public function select(){
			$idCard=$this->input->post('idCard');
			$this->load->model('Stu_model');
			$res=$this->Stu_model->select($idCard);
			$list=$res->result_array();
			if ($list) {
				# code...
				$data['list']=$list;
				$this->load->view('stuSelect',$data);
			}else{
				$this->load->view('stuSelectNull');
			}
		}
		public function selectpc(){
			$idCard=$this->input->post('idCard');
			$this->load->model('Stu_model');
			$res=$this->Stu_model->select($idCard);
			$list=$res->result_array();
			if ($list) {
				# code...
				$data['list']=$list;
				$this->load->view('stuSelectpc',$data);
			}else{
				$this->load->view('stuSelectNullpc');
			}
		}
	}
 ?>