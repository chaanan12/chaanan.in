<?php 
  class Allformmodel extends CI_Model
  {
     function getCart(){
            $cart1=array();
            $cart2=array();
         $is_login =  $this->session->userdata("is_login");
         if($is_login){
             $cid = $this->session->userdata("userid");
             $this->db->distinct();
             $this->db->select("product_id");
             $this->db->where("cid",$cid);
             $this->db->where("status",0);
             $cidlike =$this->db->get("like_product");
             if($cidlike->num_rows()>0){
             $cart1=$cidlike->result();
             }else{
             
             }
            
         }
        
        
         $ipc = $this->input->ip_address();
         $this->db->distinct();
         $this->db->select("product_id");
         $this->db->where("ip_config",$ipc);
         $ipwish = $this->db->get("wish_product");
          if($ipwish->num_rows()>0){
             $cart2=$ipwish->result();
             }else{
            
             }
            $carty =  array_merge($cart1,$cart2);
           
   return $carty;
  }
  
  function sentmasterRecord($msg,$totsmssent,$master_id,$response_id){
		$client_code = 2;
		$this->db->where("id",$master_id);
		$getcheck = $this->db->get("sent_sms_master");
		if($getcheck->num_rows()>0){
			return false;
		}else{
		$data=array(
				"id"=>$master_id,
				"tot_count"=>$totsmssent,
				"sms"=>$msg,
				"client_code"=>$client_code,
				"date"=>Date("Y-m-d G:i:s"),
				"response_id"=>$response_id
		
		);
		$insertwrongnumber= $this->db->insert("sent_sms_master",$data);
		return true;
		}	
	}
		function getsmssender($client_code){
	$this->db->where("client_code",$client_code);
		$val=$this->db->get("sms_setting");
		return $val;
	}
		function getsmsseting($client_code){
		$this->db->where("client_code",$client_code);
		$row = $this->db->get("sms")->row();
		return $row;
	}
		function sendReportmy($getv,$mid){
		    $data =array(
		        "response"=>$getv,
		        "mid"=>$mid
		        );
	  
		$this->db->insert("savesmsResponce",$data);
		return true;
	}
    function getStatusOfProduct($pid){
        $is_login =  $this->session->userdata("is_login");
        $logv=0;
         if($is_login){
             $cid = $this->session->userdata("userid");
             $this->db->where("product_id",$pid);
             $this->db->where("cid",$cid);
             $this->db->where("status",0);
             $cidlike =$this->db->get("like_product");
             if($cidlike->num_rows()>0){
               $logv =1;
             }else{
              $logv=0;
             }
            
         }
         
             $ipc = $this->input->ip_address();
             $this->db->where("product_id",$pid);
             $this->db->where("ip_config",$ipc);
             $ipwish = $this->db->get("wish_product");
            if($ipwish->num_rows()>0){
                 $cart =1;
             }else{
                $cart =0;
             }
                 if($logv==1 || $cart==1){
                     return true;
             }else{
                     return false;
             }
  
    }
    
    function removeWish($pid){
         $is_login =  $this->session->userdata("is_login");
         $insertData=0;
         if($is_login){
             $cid = $this->session->userdata("userid");
             $this->db->where("product_id",$pid);
             $this->db->where("cid",$cid);
             $this->db->where("status",0);
             $cidlike =$this->db->delete("like_product");
             if($cidlike){
             $insertData=1;
             return $insertData;
             }
             }
             
             if($insertData==0){
                 	$data['ip_config']=$this->input->ip_address();
                 	$data['product_id']=$pid;
                 	 $this->db->where("product_id",$pid);
                     $this->db->where("ip_config",$this->input->ip_address());
                 	if($this->db->delete("wish_product")){
                 	    $insertData=1;
                 	     return $insertData;
                 	}
             }
    }
    
    function insertWish($pid){
         $is_login =  $this->session->userdata("is_login");
         $insertData=0;
         if($is_login){
             $cid = $this->session->userdata("userid");
             $this->db->where("product_id",$pid);
             $this->db->where("cid",$cid);
             $this->db->where("status",0);
             $cidlike =$this->db->get("like_product");
             if($cidlike->num_rows()>0){
             $insertData=1;
             return $insertData;
             }else{
             $data["cid"]=$cid;
             $data['product_id']=$pid;
             $data['status']=0;
             $data['date']=date("Y-m-d H:i:s");
             $data['quantity']=1;
             if($this->db->insert("like_product",$data))
             $insertData=1;
             return $insertData;
            //echo 1;
             }
             }
             
             if($insertData==0){
                 	$data['ip_config']=$this->input->ip_address();
                 	$data['product_id']=$pid;
                 	$data['status']=0;
                 	$data['date']=date("Y-m-d H:i:s");
                 	if($this->db->insert("wish_product",$data)){
                 	    $insertData=1;
                 	     return $insertData;
                 	}
             }
            
         }
          function insertProductSize($psize,$pid){
         $is_login =  $this->session->userdata("is_login");
         $insertData=0;
         if($is_login){
             $cid = $this->session->userdata("userid");
             $this->db->where("product_id",$pid);
             $this->db->where("cid",$cid);
             $this->db->where("status",0);
             $cidlike =$this->db->get("like_product");
             if($cidlike->num_rows()>0){
             $insertData=1;
             return $insertData;
             }else{
             $data["cid"]=$cid;
             $data['product_id']=$pid;
             $data['product_size']=$psize;
             $data['status']=0;
             $data['date']=date("Y-m-d H:i:s");
             $data['quantity']=1;
             if($this->db->insert("like_product",$data))
             $insertData=1;
             return $insertData;
             }
             }
             
             if($insertData==0){
                 	$data['ip_config']=$this->input->ip_address();
                 	$data['product_id']=$pid;
                 	 $data['product_size']=$psize;
                 	$data['status']=0;
                 	$data['date']=date("Y-m-d H:i:s");
                 	if($this->db->insert("wish_product",$data)){
                 	    $insertData=1;
                 	     return $insertData;
                 	}
             }
            
         }
    
    
}
?>