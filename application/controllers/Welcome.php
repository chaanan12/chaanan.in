<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function testing()
	{
	      $this->load->model("Allformmodel");
            $id= $this->uri->segment('3');
            $this->db->where("id",$id);
            $gall= $this->db->get("stock_products");
            $data["gallery"]=$gall;
            $this->load->view('order',$data);
	    $this->load->view('testing',$data);
	}
	public function about()
	{
		$this->load->view("about");
	}
	public function director_message()
	{
		$this->load->view('director_message');
	}
	public function other()
	{
		$this->load->view("other");
	}
	public function gallery()
	{
		$this->load->view("gallery");
	}
	public function history()
	{
		$this->load->view('history');
	}
	public function contat()
	{
		$this->load->view("contat");
	}
	public function evaluation()
	{
		$this->load->view('evaluation');
	}
	public function devaluation()
	{
		$this->load->view('devaluation');
	}
	public function test(){
	    $this->load->view('test');
	}
		public function conference(){
	    $this->load->view('conference');
	}
	public function product(){
	    $this->load->view('product');
	}
	public function news(){
	    $this->load->view('news');
	}
	public function donate(){
	    $this->load->view('donate');
	}
		public function anand(){
	    $this->load->view('anand');
	}
		public function kuldeep(){
	    $this->load->view('kuldeep');
	}
		public function arvind(){
	    $this->load->view('arvind');
	}
		public function tej(){
	    $this->load->view('tej');
	}
		public function manish(){
	    $this->load->view('manish');
	}
		public function team(){
	    $this->load->view('team');
	}
		public function guardian(){
	    $this->load->view('guardian');
	}
		public function member(){
	    $this->load->view('member');
	}
		public function vocational(){
	    $this->load->view('vocational');
	}
	    public function signup()
	{
	    $this->load->view("signup");
	}
		public function cart()
	{
	    $uric=$this->uri->segment("3");
		$check=$this->session->userdata('userid');
		if(!$check){
			//echo $is_login;
			redirect(base_url()."index.php/welcome/order/".$uric."/gv1/");
		}
		else{
        
        $cid= $this->session->userdata("userid");
	     redirect("welcome/walletProduct/".$cid);
	   
		}
	}
	
        public function loginByOtp()
	{
	    if($this->uri->segment(3)){
	       	$check=$this->session->userdata('userid');
		if(!$check){ 
		   
	       $product_id=$this->uri->segment(3); 
	        redirect("welcome/order/".$product_id."/gv1");
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
	   	$password="ZOR".$getrandom;
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
	public function deletebilling(){
	    $this->load->model("Allformmodel");
        $cart_product =$this->Allformmodel->getCart();
	    $data['cart_product']=$cart_product;
        $rid = $this->uri->segment(3);
        $cid=$this->uri->segment(4);
        $this->db->where("cid",$cid);
        $this->db->where("product_id",$rid);
        $this->db->delete("like_product");
       
        $data['cid'] = $this->uri->segment(4);
         $this->load->view('cart',$data);
    }
        public function wish()
	{
		$check=$this->session->userdata('userid');
		if(!$check){
			//echo $is_login;
			redirect(base_url()."index.php/welcome/login");
		}
		else{
        $uric=$this->uri->segment("3");
         $cid= $this->session->userdata("userid");
	     redirect("welcome/walletProduct/".$cid);
         }
	   }
        public function logout()
     {
          $this->load->model("Allformmodel");
        $this->session->sess_destroy();
		$cart_product =$this->Allformmodel->getCart();
        $data['cart_product']=$cart_product;
		redirect('welcome/login',$data);
    }
    	public function codConfirmPage()
	{
	    $this->load->model("Allformmodel");
        $cart_product =$this->Allformmodel->getCart();
	    $datad['cart_product']=$cart_product;
        $cid=$this->uri->segment(3);
        if($this->uri->segment(4)){
        $tprice = $this->uri->segment(4);
        $dataorder['customer_id']=$cid;
        $dataorder['tot_amount']=$tprice;
        $dataorder['status']=0;
        $dataorder['date']=date("Y-m-d H:i:s");
        $this->db->where("customer_id",$cid);
        $this->db->where("tot_amount",$tprice);
        $this->db->where("status",0);
       $getoldv = $this->db->get("order_details");
       if($getoldv->num_rows()>0){
           
       }else{
       $this->db->insert("order_details",$dataorder);
       $id = $this->db->insert_id();
       $dataupdate['invoice_no']=$id;
       $dataupdate['status']=1;
       $this->db->where("cust_id",$cid);
       $this->db->where("status",0);
       $this->db->update("like_product",$dataupdate);
       }
     ?>
     <script>
     alert("Order has been successfully Submitted");
     
     </script>
     <?php 
        }
        $datad['cid']=$cid;
		$this->load->view('yourOrderStatus',$datad);
	}
  	  public function matchdata()
	{
        $email=$this->input->post("email");
    	//echo $email;
		$password=$this->input->post("password");
		//echo $password;
		$this->load->model("Loginmodel");
		$result=$this->Loginmodel->getdata1($email,$password);
		if($result){
		   $cid= $this->session->userdata("userid");
		 redirect("welcome/walletProduct/".$cid);
		}
		else{
			
		 redirect("welcome/login/false");
		}
}
	
	public function login()
	{
	    $this->load->view("login");
	}
		  
    	public function registration()
    {
    	$name=$this->input->post("name");
    	$mobile=$this->input->post("mobile");
    	$email=$this->input->post("email");
    	$password=$this->input->post("password");

    	$data=array(
    	"name"=>$name,
    	"mobile"=>$mobile,
    	"email"=>$email,
    	"password"=>$password,
    	"status"=>1,
    	);
       
	$this->load->model('Loginmodel');
	$logindata=$this->Loginmodel->getdata($email,$mobile,$name,$password);
	
	if($this->session->userdata("userid")){
	    	redirect("welcome/signup/success");
	}else{
	    	redirect("welcome/signup/fail");
	}
	}
		public function sendotp(){
	   $number=$this->input->post("mob");
	    $otp = rand(1000,99999);
	  	$msg="Your CHAANAN Enquiry OTP is ".$otp.". Please do not share with anyone.";
	  	$dataarr=array(
	  	    "mobile"=>$number,
	  	    "otp"=>$otp
	  	    );
	  	    $insert=$this->db->insert("otp_master",$dataarr);
	  	   if($insert){
    	  	    $this->load->helpers('sms_helper');
    	        $dt=	mysms($number,$msg);
    	        echo "Please Enter Your OTP";
	        }else{
	       echo "Wrong Number";
	  	    }
	    }
		public function matchotp(){
	    $mobile= $this->input->post("mob");
	   $otp= $this->input->post("otp");
	   $this->db->order_by("mobile","desc");
	   $this->db->where("mobile",$mobile);
	   $this->db->where("otp",$otp);
	  $dt= $this->db->get("otp_master");
	 if($dt->num_rows()>0){
	     echo "true";
	 }
	 else{
	    echo "false";
	 }
	}
	
	public function legal_form(){
	    $data = array(
	        "name"                         =>  $this->input->post("name"),
	       // "admission_date"               =>   $this->input->post("adate"),
	        "marital_status"               =>   $this->input->post("marital_status"),
	        "f_name" =>$this->input->post("f_name"),
	        "m_name" =>$this->input->post("m_name"),
	        "address" =>$this->input->post("address"),
	        "district" =>$this->input->post("district"),
	        "state" =>$this->input->post("state"),
	        "pincode" =>$this->input->post("pin_code"),
	        //"gua_of_no" =>$this->input->post("gua_of_no"),
	        "adhar_number" =>$this->input->post("aadhar"),
	        "email_id" =>$this->input->post("email_id"),
	        "dob" =>$this->input->post("dob"),
	        "pro_guardians" =>$this->input->post("pro_guardians"),
	        "issuing_authority_name" =>$this->input->post("issuing_authority_name"),
	        "issuing_designation" =>$this->input->post("issuing_designation"),
	         "issuing_address" =>$this->input->post("issuing_address"),
	         "i_contact" =>$this->input->post("i_contact"),
	      //  "proof_of_pwd" =>$this->input->post("proof_of_pwd"),
	           //for image "attach_proof" =>$this->input->post("attach_proof"),
	        // "other_information" =>$this->input->post("other_information"),
	         //    "gua_photo" =>$this->input->post("gua_photo"),
	         "guardians_name" =>$this->input->post("guardians_name"),
	          "other_parent_name" =>$this->input->post("other_parent_name"),
	           "gua_add" =>$this->input->post("gua_add"),
	            "gua_state" =>$this->input->post("gua_state"),
	             "gua_district" =>$this->input->post("gua_district"),
	              "gua_pin" =>$this->input->post("gua_pin"),
	              "gua_uid_no" =>$this->input->post("gua_uid_no"),
	               "gua_adhar" =>$this->input->post("gua_adhar"),
	                "relationship_gua" =>$this->input->post("relationship_gua"),
	                 "email_id" =>$this->input->post("email_id"),

	                        
	        );
	        if($this->db->insert("legal_guardian",$data)){
	            redirect("welcome/conference/success");
	        }else{
	             redirect("welcome/conference/fail");
	        }
	}
		public function membership(){
		  $mobile= $this->input->post("mobileno");
		  $name = $this->input->post("name");
		  $email = $this->input->post("email");
	        $data = array(
	            "name"          =>  $this->input->post("name"),
	            "dob"          =>$this->input->post("dob"),
	            "pin"          => $this->input->post("pin"),
	            "f_name"        =>$this->input->post("f_name"),
	            "adhar"         =>$this->input->post("adhar"),
	            "email"         =>$this->input->post("email"),
	            "mobile"        =>$this->input->post("mobileno"),
	            "phone"        =>$this->input->post("mobileno"),
	            "address"       =>$this->input->post("address"),
	            "gender"        =>$this->input->post("gender"),
	            "pancard"        =>$this->input->post("pancard"),
	             "purpose"        =>$this->input->post("purpose"),
	            "membership"        =>$this->input->post("membership")
	          );
	          $photo_name = time().trim($_FILES['file1']['name']);
	        if (!empty($_FILES['file1']['name'])){
	  	    $this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '50000';
			$config['file_name'] = $photo_name;
			$this->upload->initialize($config);
			if($this->upload->do_upload('file1')){
	     	$data["file1"]=$photo_name;
	    	}
	        }
	    	  $photo_name = time().trim($_FILES['file2']['name']);
	        if (!empty($_FILES['file2']['name'])){
	  	    $this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '50000';
			$config['file_name'] = $photo_name;
			$this->upload->initialize($config);
			if($this->upload->do_upload('file2')){
	     	$data["file2"]=$photo_name;
	    	}
	  	}
	          
	        if($this->db->insert("membership",$data)){
	            $sms = "Dear ".$name." your Membership  Registration is in Process we will contact you soon. Thanks for beeing a part of chaanan";
	            mysms($mobile,$sms);
	            $subject = "Registration In Process";
	            $ccregisterEmail="singhkullu12@gmail.com";
	             $this->sendMail($email,$subject,$ccregisterEmail,$sms);
	            redirect("welcome/member/success");
	            //echo "yes";
	        }else{
	             echo "Please Try Again !";
	        }
}

function sendMail($email1,$schoolname,$ccregisterEmail,$message){
	        $this->load->library('email');
			$this->email->from('support@schoolerp-niktech.in', $schoolname);
			$this->email->to($email1);
			$this->email->cc($ccregisterEmail);
			$this->email->subject('Welcome and Thanks for registering us Chaanan.in');
			$this->email->message($message);
			$this->email->send();
        }
        function sendMail1($email1,$schoolname,$ccregisterEmail,$message){
	        $this->load->library('email');
			$this->email->from('support@schoolerp-niktech.in', $schoolname);
			$this->email->to($email1);
			$this->email->cc($ccregisterEmail);
			$this->email->subject('Welcome and Thanks for Contact us Chaanan.in');
			$this->email->message($message);
			$this->email->send();
        }
        
        function contactform(){
            $mobile=$this->input->post("mobile");
            $email=$this->input->post("email");
           $data['first_name'] =$this->input->post("firstname");
           $data['last_name'] = $this->input->post("lastname");
           $data['email'] = $this->input->post("email");
           $data['mobile'] = $this->input->post("mobile");
           $data['state'] = $this->input->post("state");
           $data['city'] = $this->input->post("city");
           $data['pin_code'] = $this->input->post("pin_code");
           $data['interested'] = $this->input->post("interested");
           $data['subject'] = $this->input->post("subject");
           $data['saddress'] = $this->input->post("saddress");
            $data['msg'] = $this->input->post("msg");
            if($this->db->insert("contact_us",$data)){
                  $sms = "Dear ".$data['first_name']." your thanks for contact us we will contact you soon. Thanks Direct of chaanan";
                   mysms($mobile,$sms);
                    $subject = "Thanks For Contact us";
	                $ccregisterEmail="singhkullu12@gmail.com";
	                if($email){
	                $this->sendMail1($email,$subject,$ccregisterEmail,$sms);
	                }
	            redirect("welcome/contat/success");
            }
        }
        
        function popupvalue(){
            $data=array(
               "email" =>$this->input->post('email'), 
               "first_name" =>$this->input->post('fname'), 
               "last_name" =>$this->input->post('lname'), 
               "awareness_program" =>$this->input->post('ap'), 
               "vocational_training" =>$this->input->post('vt'), 
               "school_education" =>$this->input->post('se'), 
               "legal_consultation" =>$this->input->post('lc'), 
               "benefits" =>$this->input->post('btp'), 
               "employeement_powerment" =>$this->input->post('eep'), 
               "other" =>$this->input->post('other') 
               );
               $this->db->insert('pop_up_form',$data);
               echo "success";
             //redirect("welcome/index");
            
        }
        function ourdonor(){
            $this->load->view('ourdonor');
        }
         function national(){
            $this->load->view('national');
        }
         function state(){
            $this->load->view('state');
        }
          function ourteam(){
            $this->load->view('ourteam');
        }
        public function walletProduct()
    {
        $this->load->model("Allformmodel");
	    $data['cid']=$this->uri->segment(3);
	    $cart_product =$this->Allformmodel->getCart();
	   
        $data['cart_product']=$cart_product;
		$this->load->view('cart',$data);
        }
         function buy_product(){
            $this->load->view('buy_product');
        }
        	public function orderStatus()
    {
	     $this->load->model("Allformmodel");
	    $cart_product =$this->Allformmodel->getCart();
        $data['cart_product']=$cart_product;
        $orderid=$this->uri->segment(3);
        $this->db->where("invoice_no",$orderid);
        $orderDetails =$this->db->get("day_book")->row();
        $this->db->where("order_id",$orderid);
        $data['ptm'] = $this->db->get("paytm_txn")->row();
        $data['orderDetails'] = $orderDetails;
		$this->load->view('orderStatus',$data);
	}
        	
        	public function billingAddress()
    {
         $uric=$this->input->post("cust");
    	$email=$this->input->post("email");
    	//echo $email;
        $pincode=$this->input->post("pincode");
	    $address=$this->input->post("address");
	    //echo $name;
    	$state=$this->input->post("State");
    	//echo $state;
    	//exit();
    	$country=$this->input->post('country');
    	$city=$this->input->post("city");
    	$number=$this->input->post("number");
	    //echo $mobile2;

	    $data1=array(
    	"email"=>$email,
    	"address"=>$address,
    	"number"=>$number,
    	'state'=>$state,
    	'city'=>$city,
    	'country'=>$country,
	    'pincode'=>$pincode
	);
    	$data=array(
	    "cust_id"=>$uric,
	    "address"=>$address,
	    'state'=>$state,
    	'city'=>$city,
    	'country'=>$country,
    	'pincode'=>$pincode
	    );
    	$this->load->model('loginmodel');
        $this->loginmodel->billing($data);
        redirect("welcome/billing/".$uric);
    }
     
        public function billing()
	  {
	    $this->load->model("Allformmodel");
	    $cart_product =$this->Allformmodel->getCart();
	    $data['cart_product']=$cart_product;
	    $cart_product =$this->Allformmodel->getCart();
        $data['cart_product']=$cart_product;
		$cid=$this->uri->segment(3);
        $product = $this->db->query("select distinct(product_id) as pid, quantity from like_product where cid='$cid' and status=0");
        $data['product']=$product;
        $data['cid']=$cid;
		$this->load->view('billing',$data);
     }
         function order(){
            $this->load->model("Allformmodel");
            $id= $this->uri->segment('3');
            $this->db->where("id",$id);
            $gall= $this->db->get("stock_products");
            $data["gallery"]=$gall;
            $this->load->view('order',$data);
        }
        function employment(){
            $this->load->view('employment');
        }
        function benifit_pwidds(){
             $this->load->view('benifit_pwidds');
        }
        
        function donate_now(){
            $data=array(
                "fname"=> $this->input->post('fname'),
                "mname"=> $this->input->post('mname'),
                "lname"=> $this->input->post('lname'),
                "address"=> $this->input->post('address'),
                "city"=> $this->input->post('city'),
                "state"=> $this->input->post('state'),
                "country"=> $this->input->post('country'),
                "pin_code"=> $this->input->post('pincode'),
                "email"=> $this->input->post('email'),
                "mobile"=> $this->input->post('mobile'),
                "amount"=> $this->input->post('amount'),
                "aadharcard"=> $this->input->post('aadhar'),
                "pannumber"=> $this->input->post('pannumber'),
                "message"=> $this->input->post('message')
                );
            $this->db->insert('donate',$data);    
            //echo "submitted";
            redirect('welcome/donate/success');
        }
        
}
