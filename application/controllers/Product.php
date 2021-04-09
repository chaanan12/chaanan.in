<?php class Product extends CI_Controller {
    
     function __construct()
	{
		parent::__construct();
	    $this->load->model("Allformmodel");

	}
    function product_like(){
        $this->load->model("Allformmodel");
        $pid =  $this->input->post("product_id");
       $res =$this->Allformmodel->insertWish($pid);
        if($res){
            echo "1";
       }else{
           echo 0;
        }
    }
    
    	public function updateSize()
	    {
	   
	   	$rid=$this->input->post("rid");
	   	$size=$this->input->post("size");
		                  $data['product_size']=$size;
                         $this->db->where("id",$rid);
                         if($this->db->update("like_product",$data)){
                             echo "1";
                         }else{
                             echo "0";
                         }
                   
	   }
	   
    function product_size(){
        $this->load->model("Allformmodel");
         $psize =  $this->input->post("product_size");
      // exit();
      $this->db->where("size_id",$psize);
     $pid=$this->db->get('product_size');
        $res =$this->Allformmodel->insertProductSize($psize,$pid);
        if($res){
            echo "1";
       }else{
           echo 0;
        }
    }
    function productDish_like(){
        $this->load->model("Allformmodel");
        $pid =  $this->input->post("product_id");
        $res =$this->Allformmodel->removeWish($pid);
        if($res){
            echo "1";
       }else{
           echo 0;
        }
    }
    
  public function loginByOtp()
	{
	    if($this->uri->segment(3)){
	       	$check=$this->session->userdata('userid');
		if(!$check){ 
	       $product_id=$this->uri->segment(3); 
	        redirect("welcome/addcart/".$product_id."/gv1");
		}else{
		      
        $cid= $this->session->userdata("userid");
	     redirect("welcome/walletProduct/".$cid);
		}
	    }else{
	        $product_id=0;
	    }
        $product_id=$this->input->post("product_id");
        $image=$this->input->post("pik");
	    $name=$this->input->post("name");
	    $email=$this->input->post("email");
	    $mobile=$this->input->post("mno");
	    $otp=$this->input->post("otp_1");
	    $this->db->where("mobile",$mobile);
	    $this->db->where("otp",$otp);
	    $dt= $this->db->get("otp_master");
	 if($dt->num_rows()>0){
	   	$this->load->model("loginmodel");
	   	$getrandom = rand(1111,5555);
	   	$password="THE".$getrandom;
		$result=$this->loginmodel->getdata($email,$mobile,$name,$password);

		if($this->session->userdata("userid")){
		    $cid=$this->session->userdata("userid");
		   $data['cid']=$cid;
		  // echo $this->session->userdata("userid");
		   $ipc = $this->input->ip_address();
		  $this->db->where("ip_config",$ipc);
		  $wp = $this->db->get("wish_product");
		  if($wp->num_rows()>0){
		      foreach($wp->result() as $rt):
		        $data["cid"]=$cid;
                $data['product_id']=$rt->product_id;
                $data['status']=0;
                $data['date']=date("Y-m-d H:i:s");
                $data['quantity']=1;
                if($this->db->insert("like_product",$data)){
                $this->db->where("ip_config",$ipc);
                $this->db->where("product_id",$rt->product_id);
                $this->db->delete("wish_product");
                }
             endforeach;
		  }
		  redirect("welcome/walletProduct/".$cid);
		 
		}
		else{
	    redirect("welcome/login"); 
		}
	 }
	 else{
	  
	 }
	    
	}
    
    
}