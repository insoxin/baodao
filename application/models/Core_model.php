<?php 
	class Core_model extends CI_Model{
		public function select($major,$from){
			$res=$this->db->select()->from('xinsheng2017')->where('major =',$major)->where('from =',$from)->where('register =','已报到')->get();
			return $res;
		}
		public function selectSum($major){
			$res=$this->db->select()->from('xinsheng2017')->where('major =',$major)->where('register =','已报到')->get();
			return $res;
		}
		public function selectSumAll($major){
			$res=$this->db->select()->from('xinsheng2017')->where('major =',$major)->get();
			return $res;
		}
	}

 ?>