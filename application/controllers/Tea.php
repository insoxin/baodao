<?php 
	class Tea extends CI_Controller{
		public function index(){
			$this->load->view('tea');
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
	}

 ?>