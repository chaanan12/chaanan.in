<?php

class Paytm extends CI_Controller{
    
    function pgTakeValue(){
        
        if($this->input->post("s1")==1){
            $c_amount=$this->input->post("c_amount");
          // echo $c_amount;
           // exit();
          $cid= $this->input->post("cid");
          $address =$this->input->post("address");
          $this->db->where("id",$address);
          $c_address= $this->db->get("customer_address")->row();
           $this->db->where("country",$c_address->country);
           $cod= $this->db->get("cod_amount");
            $totp = $this->input->post("totamount");
            if($cod->num_rows()>0){
            $amount= $cod->row()->amount+$totp;
            }else{
                $amount=$totp;
            }
             $ORDER_ID = "ORD".time().rand(10000,99999);
         
         
             $arr=array(
             "cid"=>$cid,
             "txn_id"=>"Cash on Delevery",
             "txn_amount"=>$amount,
            "order_id"=>$ORDER_ID,
            "address"=>$address, 
            "product"=>"codp",
            "status"=>"order Placed",
            "trytime"=>date("Y-m-d H:i:s")
            );
            $this->db->insert("paytm_txn",$arr);
            	$upstatusd['status']=1;
                $upstatusd['invoice_no']=$ORDER_ID;
                $this->db->where("status",0);
                $this->db->where("cid",$cid);
                $this->db->update("like_product",$upstatusd);
                	$daybook['paid_to']="CHAANAN";
                	$daybook['paid_by']=$cid;
                	$daybook['dabit_cradit']=1;
                	$daybook['amount']=$amount;
                	$daybook['pay_date']=date("Y-m-d H:i:s");
                	$daybook['status']=0;
                	$daybook['pay_mode']="Cash On Delivery";
                	$daybook['invoice_no']=$ORDER_ID;
                	$this->db->insert("day_book",$daybook);
                
                 $sms = "Dear Customer Your order Cashon Delivery ".$ORDER_ID." of the amount of  total amount ".$amount." is successfully placed and we will try to deliver soon . Thanks The Chaanan";
		         $this->load->helper('sms_helper');
		         	$this->db->where("id",$cid);
                $custDetails=	$this->db->get("costumer")->row();
	             mysms($custDetails->mobile,$sms); 
	             //echo $sms;
                 redirect(base_url()."index.php/welcome/orderStatus/".$ORDER_ID."/".$amount); 
                
        //   $this->load->library('database');
        
        }else{
             if($this->input->post("s1")==2){
            
      
       $cid= $this->input->post("cid");
       $address =$this->input->post("address");
     
        $totp = $this->input->post("totamount");
       // $totp=2;
         $data['cid']=$cid;
         $data['totp']=$totp;
         $data['address']=$address;
        // $this->load->view("selectPaymentDatway",$data);
        redirect("paytm/pgRedirect/".$cid."/".$totp."/".$address);
        }else{
            $ORDER_ID = "ORD".time().rand(10000,99999);
               $cid= $this->input->post("cid");
                $address =$this->input->post("address");
     
        $totp = $this->input->post("totamount");
       
        //$address="116 oblic 832 Rawatpur gaon kanpur";
        //$randn=rand(1111,9999);
         $data['cid']=$cid;
          $data['totp']=$totp;
         $data['order_id']=$ORDER_ID;
         $data['address']=$address;
          $data['currency']="INR";
           $arr=array(
             "cid"=>$cid,
            "order_id"=>$ORDER_ID,
            "address"=>$address, 
            "product"=>"product",
            "trytime"=>date("Y-m-d H:i:s")
            );
        $this->db->insert("paytm_txn",$arr);
         $this->load->view("selectPaymentDatway",$data);
        }}
    }

	function ccahanderler(){
	    $this->load->view("paytm/ccavRequestHandler.php");
	}
	
	function ccacancle(){
	     $this->load->view("paytm/ccavRequestHandler.php");
	}
	function pgRedirect(){
	    
        $ORDER_ID = "ORD".time().rand(10000,99999);
		$CUST_ID = $this->uri->segment(3);
		$NAME = $CUST_ID;
		$ADD = $this->uri->segment(5);
		//$INDUSTRY_TYPE_ID = "";
		$INDUSTRY_TYPE_ID = "Retail";
		//$CHANNEL_ID = $_POST["CHANNEL_ID"];
		$CHANNEL_ID = "WEB";
		$TXN_AMOUNT =  (int)$this->uri->segment(4);
        $paytmParams = array();
        
         $arr=array(
             "cid"=>$CUST_ID,
            "order_id"=>$ORDER_ID,
            "address"=>$ADD, 
            "product"=>"product",
            "trytime"=>date("Y-m-d H:i:s")
            );
        //   $this->load->library('database');
        $this->db->insert("paytm_txn",$arr);
        /*
        * Generate checksum by parameters we have in body
        * Find your Merchant Key in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys 
        */
       	$paramList["MID"] = PAYTM_MERCHANT_MID;
		$paramList["ORDER_ID"] = $ORDER_ID;
		
		$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
		$paramList["CHANNEL_ID"] = $CHANNEL_ID;
		$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
		$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
       

		$paramList["CALLBACK_URL"] = "https://thelifestylesapp.com/index.php/Paytm/pgResponse";
		$paramList["CUST_ID"] = $CUST_ID;
		$paramList["NAME"] = $NAME;
		/*$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
		$paramList["EMAIL"] = $EMAIL; //Email ID of customer
		$paramList["VERIFIED_BY"] = "EMAIL"; //
		$paramList["IS_USER_VERIFIED"] = "YES"; //

		*/

		//Here checksum string will return by getChecksumFromArray() function.
		$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);
//print_r($checkSum);
		?>
		<html>
		<head>
		<title>Merchant Check Out Page</title>
		</head>
		<body>
			<center><h1>Please do not refresh this page...</h1></center>
				<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
				<table border="1">
					<tbody>
					<?php
					foreach($paramList as $name => $value) {
						echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
						//print_r($value);
					}
			
					?>
					<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
					</tbody>
				</table>
				<script type="text/javascript">
					document.f1.submit();
				</script>
			</form>
		</body>
		</html>
		<?php
	}

	function pgResponse(){
	    
      /*	header("Pragma: no-cache");
		header("Cache-Control: no-cache");
		header("Expires: 0");*/

		$paytmChecksum = "";
		$paramList = array();
		$isValidChecksum = "FALSE";

		$paramList = $_POST;
		$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

		//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
		$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.echo 
		
		if($isValidChecksum == "TRUE") {
	//	print_r($_POST);
			if ($_POST["STATUS"] == "TXN_SUCCESS") {
			    $update['txn_id']   =$_POST["TXNID"];
			    $update['txn_amount']=$_POST["TXNAMOUNT"];
			    $update['status']=$_POST["STATUS"];
			    $update['txn_date_time']=date("Y-m-d H:i:s");
			    $this->db->where("order_id",$_POST["ORDERID"]);
			    $getorderdetails = $this->db->get("paytm_txn")->row();
			    
			    $this->db->where("order_id",$_POST["ORDERID"]);
			    if($this->db->update("paytm_txn",$update)){
                	$upstatusd['status']=1;
                	$upstatusd['invoice_no']=$_POST["ORDERID"];
                	$this->db->where("status",0);
                	$this->db->where("cid",$getorderdetails->cid);
                	$this->db->update("like_product",$upstatusd);
                	$this->db->where("id",$getorderdetails->cid);
                $custDetails=	$this->db->get("costumer")->row();
                	$daybook['paid_to']="the Life Style";
                	$daybook['paid_by']=$getorderdetails->cid;
                	$daybook['dabit_cradit']=1;
                	$daybook['amount']=$_POST["TXNAMOUNT"];
                	$daybook['pay_date']=date("Y-m-d H:i:s");
                	$daybook['status']=1;
                	$daybook['pay_mode']="Online";
                	$daybook['invoice_no']=$_POST["ORDERID"];
                	$this->db->insert("day_book",$daybook);
                	$orderid = $_POST["ORDERID"];
                	$tranamount = $_POST["TXNAMOUNT"];
                	 $sms = "Dear Customer Your order ".$orderid." of the amount of ".$tranamount." is successfully placed and we will try to deliver soon . Thanks The Life Styles";
		                    $this->load->helper('sms_helper');
	                    	mysms($sms,$custDetails->mobile); 
                 redirect(base_url()."welcome/orderStatus/".$orderid); 
                	
			    }
			
				//Process your transaction here as success transaction.
				//Verify amount & order id received from Payment gateway with your application's order id and amount.
			}
			else {
			   $update['txn_id']   =$_POST["TXNID"];
			    $update['txn_amount']=$_POST["TXN_AMOUNT"];
			    $update['status']=$_POST["STATUS"];
			    $update['txn_date_time']=date("Y-m-d H:i:s");
			     $update['order_id']=$_POST["ORDERID"];
			$this->load->view('payStatus',$update);
			}

		
		}
		else {
			echo "<b>Checksum mismatched.</b>";
			//Process transaction as suspicious.
		}

	    
	}	
	public function success(){
	    require_once(APPPATH."views/paytm/Crypto.php");
	    //include('paytm/Crypto.php');
	    	$workingKey='84A3272EB14D1AAFEABCB68856219FA2';		//Working Key should be provided here.
            	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
            	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
            	$order_status="";
            	$order_id="";
            	$tid = "";
            	$cid = "";
            	$tamount="";
            	$decryptValues=explode('&', $rcvdString);
            	$dataSize=sizeof($decryptValues);
            	//echo "<center>";
                $reData = array();
                	//echo "<pre>";
            		//print_r($decryptValues);
            	
            			//echo "</pre>";
            				
            	for($i = 0; $i < $dataSize; $i++) 
            	{
            		$information=explode('=',$decryptValues[$i]);
            		if($i==0){  $order_id=$information[1];}
            		if($i==3)	{$order_status=$information[1];}
            		if($i==1){$tid=$information[1];}
            		if($i==10){$tamount=$information[1];}
            		if($i==11){$cid=$information[1];}
            	
            	}
            
            	if($order_status==="Success")
            	{
            	   
            		 $update['txn_id']   =$tid;
			    $update['txn_amount']=$tamount;
			    $update['status']="TXN_SUCCESS";
			    $update['txn_date_time']=date("Y-m-d H:i:s");
			    $this->db->where("order_id",$order_id);
			    $getorderdetails = $this->db->get("paytm_txn")->row();
			    
			    $this->db->where("order_id",$order_id);
			    if($this->db->update("paytm_txn",$update)){
                	$upstatusd['status']=1;
                	$upstatusd['invoice_no']=$order_id;
                	$this->db->where("status",0);
                	$this->db->where("cid",$getorderdetails->cid);
                	$this->db->update("like_product",$upstatusd);
                	$this->db->where("id",$getorderdetails->cid);
                $custDetails=	$this->db->get("costumer")->row();
                	$daybook['paid_to']="the Life Style";
                	$daybook['paid_by']=$getorderdetails->cid;
                	$daybook['dabit_cradit']=1;
                	$daybook['amount']=$tamount;
                	$daybook['pay_date']=date("Y-m-d H:i:s");
                	$daybook['status']=1;
                	$daybook['pay_mode']="Online";
                	$daybook['invoice_no']=$order_id;
                	$this->db->insert("day_book",$daybook);
                	$orderid = $order_id;
                	$tranamount = $tamount;
                	 $sms = "Dear Customer Your order ".$orderid." of the amount of ".$tranamount." is successfully placed and we will try to deliver soon . Thanks The Life Styles";
		                    $this->load->helper('sms_helper');
	                    	mysms($sms,$custDetails->mobile); 
	                    //	echo $sms;
                 redirect(base_url()."welcome/orderStatus/".$order_id);
            		
			    }
            	    
            	}
	  
	}

/*	public function payStatus(){

        header("Pragma: no-cache");
		header("Cache-Control: no-cache");
		header("Expires: 0");

       
        $data['headerCss'] = "headerCss/homeCss";
		$data['footerJs'] = "footerJs/homeJs";
		$data['body'] = "payStatus";
		$this->load->view('include/mainContent',$data);
     
        
         $data['title'] = "Pay";
		$data['smallTitle'] = "Client Pay";
		$data['bigTitle'] = "Online Pay";
		$data['body'] = "admin/pay";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
       
        
    }		*/
}


	