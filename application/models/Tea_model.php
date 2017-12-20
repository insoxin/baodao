<?php 
	class Tea_model extends CI_Model{
		public function select($major,$register){
			$res=$this->db->select()->from('xinsheng2017')->where('major =',$major)->where('register=',$register)->order_by("stuNo", "asc")->get();
			// echo $this->db->last_query();
			return $res;
		}
	}

 ?>