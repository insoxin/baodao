<?php 
	class Stu_model extends CI_Model{
		public function select($idCard){
			$res=$this->db->select()->from('xinsheng2017')->where('idCard =',$idCard)->get();
			// echo $this->db->last_query();
			return $res;
		}
	}

 ?>