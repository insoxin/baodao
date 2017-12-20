<?php 
	class Building_model extends CI_Model{
		public function select($building,$idcard6){
			$res=$this->db->select()->from('xinsheng2017')->where('building =',$building)->where('idcard6=',$idcard6)->order_by("bed", "asc")->get();
			// echo $this->db->last_query();
			return $res;
		}
		public function register($idCard){
			$res=$this->db->update('xinsheng2017',array('registerDorm' =>'已入住'),array('idCard' =>$idCard));
			return $res;
		}
	}

 ?>