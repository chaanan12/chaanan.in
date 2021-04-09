<?php $this->load->view('headerCss');?>
<?php $this->load->view('header');?>
 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/color2.css">
<style>
.hide {
  display: none;
}
    
.myDIV:hover + .hide {
  display: block;
  color: red;
}


#panel {
  display: none;
  width:690px;
  height:auto;
}
</style>

<section class="section-big-py-space bg-light">
    <div class="custom-container" > 
        <div class="checkout-page contact-page">
            <div class="checkout-form">
                
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3>Billing Details</h3>
								<?php if($this->session->userdata("uname")){
								echo $this->session->userdata("uname"); 
						
						$this->db->where("name",$this->session->userdata("uname"));
						$cus=$this->db->get("costumer")->row();
						$this->db->where("cust_id",$cus->id);
					$cust=$this->db->get("customer_address");
							 
							}else{ ?>
							 <div class="text-right"><a href="<?php echo base_url();?>index.php/welcome/login" class="btn-normal btn">Login</a></div>
							<?php }?>
								</div>
								  
                            <div class="theme-form">
                                <div class="row check-out ">
                <div class="form-group col-md-12 col-sm-12 col-xs-12" id="address">
                                    
    
                                     <div class="form-group col-md-12 col-sm-12 col-xs-12 img-zoom-container myDIV">
                                        <button class="flip" onclick="myFunction1()">New Address</button>                           
   <br>
                                    </div>
								
                              
          <script>
function myFunction1() {
   // alert("rahul");
  document.getElementById("panel").style.display = "block";
}
</script>
  
  
						  <div  id="panel"  >
						     <form action="<?php echo base_url();?>index.php/welcome/billingAddress" method="post">
                              
                                    <input type="hidden" name="cust" value="<?php echo $cus->id;?>">
                                    <div class="form-group col-md-8 col-sm-8 col-xs-12">
                                        <label class="field-label">Address</label>
                                        <input type="text" name="address" value="" placeholder="Street address" required="required">
                                        <input type="hidden" name="cid" value="<?php echo $this->uri->segment(3);?>" >
                                    </div>
                                     <div class="form-group col-md-8 col-sm-8 col-xs-12">
                                        <label class="field-label">Email Address</label>
                                        <input type="text" name="email" value="" placeholder="" required="required">
                                    </div>
									 <div class="form-group col-md-8 col-sm-8 col-xs-12">
                                        <label class="field-label">Alternate Mobile</label>
                                        <input type="text" name="number" value="" placeholder="" required="required">
                                    </div>
                                     <div class="form-group col-md-8 col-sm-8 col-xs-12">
                                        <label class="field-label">Pincode</label>
                                        <input type="text" name="pincode" value="" placeholder="" required="required">
                                    </div>
                                     <div class="form-group col-md-8 col-sm-8 col-xs-12">
                                        <label class="field-label">State</label>
                                        <input type="text" name="State" value="" placeholder="" required="required">
                                    </div>
                                     <div class="form-group col-md-8 col-sm-8 col-xs-12">
                                        <label class="field-label">City</label>
                                        <input type="text" name="city" value="" placeholder="" required="required">
                                    </div>
                                     <div class="form-group col-md-8 col-sm-8 col-xs-12">
                                       
                                          <select class="field-label" name="country"id="price">
                                                <option value="">Select Country
                                              <option value="1">INDIA  </option>
                                              <option value="0">NEPAL</option>
                                            
                                            </select>
                                       
                                   	<div class="text-right"><button class="btn-normal btn">Submit</button></div>
                                   	 </div>
                             </form>
                            </div>
                          </div>
                        </div>  
                         </div>
                        </div>
						
                         
                           <div class="col-lg-6 col-sm-12 col-xs-12" id="panel1">
                         <form action="<?php echo base_url();?>index.php/Paytm/pgTakeValue" method="post">
                            <div class="checkout-details theme-form  section-big-mt-space">
                               <div class="order-box">
                                   <div class="title-box">
                                        <div>Product <span>Total</span></div>
                                    </div>
                                     <?php  $i=1; $totp = 0;foreach($product->result() as $row1):
                                        $this->db->where("id",$row1->pid);
                                        $pinfo=$this->db->get("stock_products");
                                        if($pinfo->num_rows()>0){
                                            $pinfo =$pinfo->row();
                                        
                                     ?>
                                    
                                    <ul class="qty">
                                        <li><?php echo $pinfo->name;?> <span><?php $totp = $totp+$pinfo->selling_price1*$row1->quantity; 
                                        echo "[".$row1->quantity." * ".$pinfo->selling_price1."]   ="; 
                                        echo $row1->quantity*$pinfo->selling_price1;?></span></li>
                                       
                                    </ul>
                                    <?php }?>
                                     <?php $i++;  endforeach;?>
                                    <ul class="sub-total">
                                        <li>Subtotal <span class="count"><?php echo $totp;?></span></li>
                                        <li>Shipping
                                            <div class="shipping">
                                                <div class="shopping-option">
                                                    <input type="checkbox" name="free-shipping" id="free-shipping">
                                                    <label for="free-shipping">Free Shipping</label>
                                                </div>
                                                <div class="shopping-option">
                                                    <input type="checkbox" name="local-pickup" id="local-pickup">
                                                    <label for="local-pickup">Local Pickup</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="total">
                                        <li>Total <span class="count"><?php echo $totp;?>
                                        <input type="hidden" id ="totamount" name = "totamount" value="<?php echo $totp;?>" /></span></li>
                                    </ul>
                                     
         
                                    </div>                                 
                                </div>
                                 
                                <div class= "alert alert-info">Please Select Address First or define New Address</div>
                                <?php	$i=1; ?>           	
                                <?php if($cust){foreach($cust->result() as $row):?>  
                                 <div id="save">
                                    <?php if($row->address){ ?>
                               <div class="row">
                                   <div class="col-md-4">
                                    <input type="radio" id="male<?php echo $i;?>" name="address" value="<?php echo $row->id;?>" <?php if($i==1){echo 'required="required"';}?> >
                                    
                                <script>
                    //alert('hii');
                                            	$("#male<?php echo $i;?>").click(function(){
                                            	   
                                                var id = $("#male<?php echo $i;?>").val();
                                               //alert(id);
                                         
												$.post("<?php echo site_url();?>login/address", { id:id }, function(data){
												  // alert(data);
												  if(data==1){
												        $("#cod").show();
												  }
												  else{
												      $('#cod').hide();
												  }
													
												});
											});
                                            </script>
                                            
                                                        <label for="address">
                                <?php if($row->country==1){?>
                                    
                                    
                                   
                                 <?php if($row->state){$this->db->where("country",$row->country);
                               $cod= $this->db->get("cod_amount")->row();
                             if($cod->amount) {?> <?php echo $row->address;?> </div>
                              <div class="col-sm-6 alert alert-info">Cod Charges=<?php echo $cod->amount;?></div></div>
                             </label><br>
                                <?php }}else{
                                }
                                }
                                else{?>
                               
                                 <?php if($row->state){$this->db->where("country",$row->country);
                               $cod= $this->db->get("cod_amount")->row();
                             if($cod->amount) { 
                             
                             ?> <?php echo $row->address;?> </div> <div class="col-sm-6 alert alert-info"> COD Charges= <?php echo $cod->amount;?></div></div>
                            
                                <input type="hidden" name="c_amount"  id="amount" value="<?php echo $cod->amount;?>">
                                </label><br>
                                <?php }}else{
                              }  }?>
                                </label><br>
                                   
                        <?php } $i++; ?>
            
                            <?php endforeach; }?> 
                                <div class="payment-box" id="payment_box">
                                    <div class="upper-box">
                                        <div class="payment-options">
										 <input type="hidden" name ="cid" value="<?php echo $cid;?>" >
                                                    
                                                     <button type="submit" class="btn btn-warning" id="cod" name ="s1" value ="1" > Cash On Delivery</button>
                                                    </div>
                                                   
                                                        <button type="submit" name ="s1" value ="2" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;Pay By Paytm&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                       <button type="submit" name ="s1" value ="3" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;Pay By Ccavenue&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                    </div>
                                             
                                                  
                                                 
                                           
                                        </div>
                                    
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
               
            </div>
        </div>
    </div>
</section>
    
<script>
    
     $('#payment_box').hide();
     
      $("input[type='radio']").click(function(){
            var radioValue = $("input[name='address']:checked").val();
            if(radioValue){
              $('#payment_box').show();
            }
        });
</script>
<?php $this->load->view('footer');?>
<?php $this->load->view('footerJs');?>