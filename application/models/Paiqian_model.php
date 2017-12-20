<?php 
class Paiqian_model extends CI_controller{

	//用于验证登录
	public function checklogin($t_id,$t_password){
		//var_dump($t_id);
		$this->load->database();
		$res=$this->db->select('*')->from('jiaoshi')->where('t_id =',$t_id)->get();
		//var_dump($res->result_array());
		$res=$res->result_array();
		$res=$res['0'];
		$dbpassword=$res['t_password'];

		if($dbpassword==$t_password){
			$res=$this->db->select('*')->from('paiqianku')->where('辅导员姓名 =',$res['t_name'])->get();
			$userType=$res;
		}else{
			//echo "登录失败";
			$userType=0;
		};

		return $userType;
		
	}
	//获取学生信息
	public function update($id){
		// var_dump($id);
		$this->load->database();
		$res=$this->db->select('*')->from('paiqianku')->where('学号 =',$id)->get();
		$dwxz=$this->db->select('*')->from('paiqianku_danweixingzhi')->get();
		$dwhy=$this->db->select('*')->from('paiqianku_danweihangye')->get();
		$gzzwlb=$this->db->select('*')->from('paiqianku_gongzuozhiweileibie')->get();
		$byqx=$this->db->select('*')->from('paiqianku_biyequxiang')->get();
		$bdqzflb=$this->db->select('*')->from('paiqianku_baodaoqianzhengfaleibie')->get();


		// var_dump($res->result_array());
		$res=$res->result_array();
		$dwxz=$dwxz->result_array();
		$dwhy=$dwhy->result_array();
		$gzzwlb=$gzzwlb->result_array();
		$byqx=$byqx->result_array();
		$bdqzflb=$bdqzflb->result_array();

		$res=$res['0'];

		$data['res']=$res;
		$data['dwxz']=$dwxz;
		$data['dwhy']=$dwhy;
		$data['gzzwlb']=$gzzwlb;
		$data['byqx']=$byqx;
		$data['bdqzflb']=$bdqzflb;
		return $data;
		
	}
	public function update_all(){
		// var_dump($id);
		$res=$this->db->select('*')->from('paiqianku')->get();
		$res=$res->result_array();
		return $res;
		
	}
	public function update_recent(){
		// var_dump($id);
		$res=$this->db->select('*')->from('paiqianku')->order_by('修改时间 desc')->limit(20,0)->get();
		$res=$res->result_array();
		return $res;
		
	}
	public function update_already(){
		
		$a='提前盖章';
		$res=$this->db->select('*')->from('paiqianku')->where('就业标示 =',$a)->get();
		$res=$res->result_array();
		$data['res']=$res;
		// var_dump($res);
	
		$b='已就业';
		$res2=$this->db->select('*')->from('paiqianku')->where('就业标示 =',$b)->get();
		$res2=$res2->result_array();
		$data['res']=$res;
		$data['res2']=$res2;
		return $data;
	}
	public function tongji_select($major,$from){
			$res=$this->db->select()->from('paiqianku')->where('专业 =',$major)->where('就业标示 =',$from)->get();
			return $res;
		}
	public function tongji_selectSum($major){
		$res=$this->db->select()->from('paiqianku')->where('专业 =',$major)->get();
		return $res;
	}
	public function tongji_selectSumAll($major){
		$res=$this->db->select()->from('paiqianku')->where('专业 =',$major)->get();
		return $res;
	}


	//更新学生信息
	public function update_message($user,$Data,$id){
		// $user=array('学号'=>1);
		// $Data=array('就业标示'=>'123');
		$this->load->database();
		$this->db->update('paiqianku',$Data,$user);
		$res=$this->db->select('*')->from('paiqianku')->where('学号 =',$id)->get();
		$dwxz=$this->db->select('*')->from('paiqianku_danweixingzhi')->get();
		$dwhy=$this->db->select('*')->from('paiqianku_danweihangye')->get();
		$gzzwlb=$this->db->select('*')->from('paiqianku_gongzuozhiweileibie')->get();
		$byqx=$this->db->select('*')->from('paiqianku_biyequxiang')->get();
		$bdqzflb=$this->db->select('*')->from('paiqianku_baodaoqianzhengfaleibie')->get();


		// var_dump($res->result_array());
		$res=$res->result_array();
		$dwxz=$dwxz->result_array();
		$dwhy=$dwhy->result_array();
		$gzzwlb=$gzzwlb->result_array();
		$byqx=$byqx->result_array();
		$bdqzflb=$bdqzflb->result_array();

		$res=$res['0'];

		$data['res']=$res;
		$data['dwxz']=$dwxz;
		$data['dwhy']=$dwhy;
		$data['gzzwlb']=$gzzwlb;
		$data['byqx']=$byqx;
		$data['bdqzflb']=$bdqzflb;
		return $data;
	}
	//学生最近情况
	/*public function recently_information($user,$Data,$id){
		// $user=array('学号'=>1);
		// $Data=array('就业标示'=>'123');
		$this->load->database();
		$this->db->update('paiqianku',$Data,$user);
		$res=$this->db->select('*')->from('paiqianku')->where('学号 =',$id)->get();
		$dwxz=$this->db->select('*')->from('paiqianku_danweixingzhi')->get();
		$dwhy=$this->db->select('*')->from('paiqianku_danweihangye')->get();
		$gzzwlb=$this->db->select('*')->from('paiqianku_gongzuozhiweileibie')->get();
		$byqx=$this->db->select('*')->from('paiqianku_biyequxiang')->get();
		$bdqzflb=$this->db->select('*')->from('paiqianku_baodaoqianzhengfaleibie')->get();


		// var_dump($res->result_array());
		$res=$res->result_array();
		$dwxz=$dwxz->result_array();
		$dwhy=$dwhy->result_array();
		$gzzwlb=$gzzwlb->result_array();
		$byqx=$byqx->result_array();
		$bdqzflb=$bdqzflb->result_array();

		$res=$res['0'];

		$data['res']=$res;
		$data['dwxz']=$dwxz;
		$data['dwhy']=$dwhy;
		$data['gzzwlb']=$gzzwlb;
		$data['byqx']=$byqx;
		$data['bdqzflb']=$bdqzflb;
		return $data;
	}*/
	

	//用于向数据库完善用户信息
	public function register_message($userPhone,$userName,$userEmail,$userPassword,$userType,$userDapartment){
		$data = array(
		'userPhone'=>$userPhone,
		'userName' => $userName,
		'userEmail'=>$userEmail,
		'userPassword'=>$userPassword,
		'userType'=>$userType,
		'userDapartment'=>$userDapartment
		);
		$bool=$this->db->insert('user',$data,array('userPhone ='=>$userPhone));
		return $bool;
	}
}

 ?>