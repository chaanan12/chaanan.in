<?php class loginmodel extends CI_Model {
function insertdata($data){
	$this->db->insert("costumer",$data);
	
	return true;
	}
	function getdata1($email,$password){
		$this->db->where("email",$email);
		$this->db->where("password",$password);
		$res=$this->db->get("costumer");
		if($res->num_rows()>0){
		   // echo $res->row()->id;
			$loginData = array(
			    	"userid" => $res->row()->id,
        			"login_type" => "user",
        			"uname" => $res->row()->name,
        		//	"address" => $res->row()->address,
        			"mobile" => $res->row()->mobile,
        			"username" => $res->row()->email,
        			"is_login" => true,
        			"is_lock" => true,
        			"login_date" => date("d-M-Y"),
        			"login_time" => date("H:i:s")
        	);
			$this->session->set_userdata($loginData);
			$data12=array(
			    "cust_id"=>$res->row()->id
			    );
	         
			return true;
		}else{
			return false;
		}
		
	}
	
	//read by rahul 
	
		public function checkedvailedUser($email,$mobile,$name,$password){
		$this->db->where("mobile",$mobile);
		$cus=$this->db->get("costumer");
		if($cus->num_rows()>0)
		{
		  $row=$cus->row();
		  $sms = "Dear Customer Your mobile number is already registered Please enter username =".$row->email." and password ".$row->password." for login if you have any quary then ask our customer care number. Thanks Zorba De Buddha";
		  $this->load->helper('sms_helper');
	       	mysms($sms,$mobile);  
		}
		else
		{
		    $data1=array(
		      "name"=>$name,
		      "email"=>$email,
		      "date"=>date("Y-m-d H:i:s"),
		      "status"=>1,
		      "mobile"=>$mobile,
		      "password" =>$password
		       
		        );
		        //print_r($data);
		        //exit();
		       $this->db->insert("costumer",$data1);
		}
	}
		function getdata($email,$mobile,$name,$password){
	        $this->checkedvailedUser($email,$mobile,$name,$password);
		    $this->db->where("mobile",$mobile);
		    $res=$this->db->get("costumer");
		    if($res->num_rows()>0){
		   // echo $res->row()->id;
			$loginData = array(
			    	"userid" => $res->row()->id,
        			"login_type" => "user",
        			"uname" => $res->row()->name,
        			"mobile" => $res->row()->mobile,
        			"username" => $res->row()->email,
        			"is_login" => true,
        			"is_lock" => true,
        			"login_date" => date("d-M-Y"),
        			"login_time" => date("H:i:s")
        	);
		$result=$this->session->set_userdata($loginData);
		$data12=array(
			    "cust_id"=>$res->row()->id
			    );
			return $result;
		}else{
			//return false;
		}
			function getdata1($email,$mobile,$name,$password){
	   $this->checkedvailedUser($email,$mobile,$name,$password);
		$this->db->where("email",$email);
		$this->db->where("mobile",$mobile);
		$res=$this->db->get("costumer");
		if($res->num_rows()>0){
		   // echo $res->row()->id;
			$loginData = array(
			    	"userid" => $res->row()->id,
        			"login_type" => "user",
        			"uname" => $res->row()->name,
        			"address" => $res->row()->address,
        			"mobile" => $res->row()->mobile,
        			"username" => $res->row()->email,
        			"is_login" => true,
        			"is_lock" => true,
        			"login_date" => date("d-M-Y"),
        			"login_time" => date("H:i:s")
        	);
			$this->session->set_userdata($loginData);
	
			return true;
		}else{
			return false;
		}
		
	}}
	
	

	public function billing($data){
		$this->db->insert("customer_address",$data);
		return true;
	}
		public function comment($data){
		$this->db->insert("comment",$data);
		return true;
	}
	public function review($data)
	{
	    $this->db->insert('review',$data);
	    return true;
	}
}