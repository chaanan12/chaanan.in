<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    	<style type="text/css">

	@media print
	{
			body * { visibility: hidden; }
			#printcontent * { visibility: visible; }
			#printcontent { position: absolute; top: -20px; left: 30px; }
	    }
	    
	    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
  
  
 
    .nob{
    	border: none;
    }
    </style>
<?php //$school_code = $this->session->userdata("school_code");?>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<title>Cash Invoice</title>
	<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/css/style1.css' />
	<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/css/print.css' media="print" />
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/invoice_js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/invoice_js/example.js'></script>
</head>

<body>
 <div id="printcontent">
    <div id="page-wrap">
<?php 

	$info=$this->db->get("general_settings")->row();
	
?>		
		<table style="width: 100%; border: none;">
			<tr style="width: 100%; border: none;">
			<td width="10%" style="border: none;">
				  <?php   //$popupimage =  $this->db->get("logo")->row();
	                      //$data['logo']=$popupimage->logo; ?>
					<img src="<?php echo base_url()?>assets/images/<?php //echo $popupimage->logo; ?>" alt="" width="100" height="100"/>
				</td>
				<td width="90%" style="border: none;">
				    <h2 align="center" style="font-variant:small-caps;">
					<?php echo $info->business_name;?>
                    </h2>
			        <h3 align="center" style="font-variant:small-caps;">
					<?php echo $info->address_1;?>
			        </h3>
			        <h3 align="center" style="font-variant:small-caps;">
						<?php echo $info->state." - ".$info->pin; ?>
			        </h3>
			        <h3 align="center" style="font-variant:small-caps;">
						<?php if(strlen($info->email1 > 0 )){echo "Phone : ".$info->email1.", ";} ?>
			           <?php echo "Mobile : ".$info->phone_number; ?>
			        </h3>
				</td>
			</tr>
		</table>
		
		   <div id="customer">
        	  <div style="display:inline-block;">
<?php
   	    $id = $this->uri->segment(3);
   	    $this->db->where('invoice_no',$id);
   	    $cod_amount=$this->db->get("day_book")->row();
   	    $this->db->where("invoice_no",$id);
        $cust=$this->db->get("like_product")->row();
        $orderid=$this->uri->segment(3);
        $this->db->where("invoice_no",$orderid);
        $orderDetails =$this->db->get("day_book")->row();
         $this->db->where("order_id",$orderid);
         $ptm = $this->db->get("paytm_txn")->row();
         $this->db->where("id",$orderDetails->paid_by);
         $customerDetails = $this->db->get("costumer")->row();
         $this->db->where("id",$ptm->address);
         $cadd = $this->db->get("customer_address")->row();
         $this->db->where("order_id",$orderid);
         $pytmR=$this->db->get("paytm_txn")->row();
         
  
?>	
            <table style="border: none;">
                    <tr>
                       <td style="border:none;"><strong>To</strong></td>
                    </tr>
                    <tr>
                    	<td style="border:none;">
                    	 	<strong>
                        <?php 
                    	       echo $customerDetails->name; ?>
                    	    
                          </strong>
                        </td>
                    </tr>
                    <tr>
                    	<td style="border:none;">
                    	  <?php echo '<strong>Mobile No. :</strong>'.$customerDetails->mobile; ?>
                    	  <br/>
                    	  <?php echo '<strong>Address. :</strong>'.$cadd->address; ?>
                    	 
                        </td>
                        
                    	  
                        
                    </tr>
            </table>
			</div>
		
            <div style="display:inline-block; float:right">
            <table>
                <tr>
                    <td class="meta-head" colspan="2"><h3>Cash Payment</h3></td>
                </tr>
                <tr>
                    <td >
                    	<?php echo 'Reciept No. :';	?>
                    </td>
                            <td><?php echo $orderDetails->invoice_no; ?></td>
                </tr>
                <tr>
                    <td >Date:</td>
                    <td><?php echo $orderDetails->pay_date; ?></td>
                </tr>
                  <tr>
                    <td >Mode:</td>
                    <td><?php echo $pytmR->txn_id; ?></td>
                </tr>
            </table>
            </div>
		 </div>
		
		<table id="items">
		     <tr>
		       <th width="3%">#</th>
		       <th width="12%">Product Name</th>
		       <th width="16%">Product Image</th>
               <th width="8%">Amount</th>
               <th width="8%">Quantity</th>
               <th width="10%">Total</th>
             </tr>
<?php 
	$this->db->where('invoice_no',$id);
	$likep=$this->db->get('like_product');
	//print_r($likep);
    $i=1; $totquantity=0; $totPrice=0;	
    foreach($likep->result() as $lp):
	    $this->db->where("id",$lp->product_id);
	    $stockDetails= $this->db->get("stock_products");
	    $this->db->where("id",$stockDetails->row()->category);
	    $pcate= $this->db->get("product_category")->row();
	    
	    if($stockDetails->num_rows()>0){
	        $stockDetails=$stockDetails->row();
	    
?>
		 <tr class="item-row">
		      <td><?php echo $i; ?></td>
		      <td><?php echo $stockDetails->name." [ ".$stockDetails->id." ] Category ".$pcate->category; ?>
		</td>
		<td>     <img src="<?php echo base_url();?>assets/images/product/<?php echo $stockDetails->file1;?>" height="70" width="80"><br/>  
		      
		      </td>
		      <td><?php echo $cod_amount->amount; //$stockDetails->selling_price1; ?></td>
		      <td><?php $totquantity = $totquantity+$lp->quantity; echo $lp->quantity; ?></td>
		      <td><?php $totPrice=$totPrice+$cod_amount->amount*$lp->quantity; echo $cod_amount->amount*$lp->quantity; ?></td>
		  </tr>
        <?php 
              $i++; }
        	  endforeach;
        ?> 
		  <tr >
		      <td><?php echo $i; ?></td>
		      <td>Total</td>
		      <td></td>
		      <td></td>
		      <td><?php echo $totquantity; ?></td>
		      <td><?php echo $totPrice; ?></td>
		   </tr>
		</table>
			
		<div>
		
		</br>
		<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paid Amount in Words : </strong><script> document.write(convert_number(<?php  echo $totPrice; ?>)); </script> Only /-<br>
		
		<table style="width: 100%;border:1px solid black; ">
			<tbody>
				<tr>
					<td style="border:1px solid black; padding-left: 30px;">
                        	<?php
							
							//	echo '<strong> </strong>'.strtoupper($rowb->firm_name);
							?>
							
							<br></br>
							<br></br>
							Issuing Signatory<br>
							Name:</br>
							Designation:
                        </td>
					<td style="border:none;">
                        	<?php
							
								echo 'The Life Styles';
							?>
							
							<br></br>
							<br></br>
							Issuing Signatory<br>
							Name:</br>
							Designation:
                        </td>
				</tr>
			</tbody>
		</table>
		</div>
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
		</div>
	</div>
	<br/><br/>
	<div class="invoice-buttons" style="text-align:center;">
    <button class="button button2" type="button"  onclick="window.print();">
      <i class="fa fa-print padding-right-sm"></i> Print Reciept
    </button>
  </div>
 </div>
 
</body>

</html>