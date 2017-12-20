<?php 
	class Volunteer_model extends CI_Model{
		public function select($idCard){
			$res=$this->db->select()->from('xinsheng2017')->where('idCard =',$idCard)->get();
			// echo $this->db->last_query();
			return $res;
		}
		public function register($idCard){
			date_default_timezone_set('PRC'); 
			$a=date('Y-m-d H:i:s',time());
			$res=$this->db->update('xinsheng2017',array('register' =>'已报到','time' =>"$a"),array('idCard' =>$idCard));
			return $res;
		}
	}

 ?>