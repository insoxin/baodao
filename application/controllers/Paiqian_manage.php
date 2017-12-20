<?php 
	class Paiqian_manage extends CI_Controller{
		public function index(){
			$this->load->view('paiqian_guanliyuan');//指向view
		}
		
		public function all(){
			
			// $id=$this->input->post('id');
			// var_dump($id);
			$this->load->model('Paiqian_model');
			$data=$this->Paiqian_model->update_manage();
			
			$this->load->view('paiqian_tea_update',$data);
			
		}
		public function all(){
			
			// $id=$this->input->post('id');
			// var_dump($id);
			$this->load->model('Paiqian_model');
			$data=$this->Paiqian_model->update($id);
			
			$this->load->view('paiqian_tea_update',$data);
			
		}

		public function update_message(){
			
			$id=$this->input->post('id');
			$jybs=$this->input->post('jybs');
			$dwxz=$this->input->post('dwxz');
			$dwxz=$this->input->post('dwhy');

			var_dump($id);
			var_dump($jybs);
			var_dump($dwxz);
			$this->load->model('Paiqian_model');
			$res=$this->Paiqian_model->update_message($id);
			
			$data['res']=$res;
			$this->load->view('paiqian_tea_update',$data);
			
		}

		
	}

 ?>