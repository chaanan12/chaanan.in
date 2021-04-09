<?php $this->load->view("headerCss");?>
<?php $this->load->view("header");?>
<style>
@media only screen and (max-device-width : 730px) {
    .fixed {
        position:fixed;
        top:0;
        left:0;
    }
}

.dot {
  height: 25px;
  width: 25px;
  background-color: red;
  border-radius: 50%;
  display: inline-block;
  
}
.dot1 {
  height: 25px;
  width: 25px;
  background-color: blue;
  border-radius: 50%;
  display: inline-block;
  
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
   
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.dot {
  height: 20px;
  width: 20px;
  background-color: red;
  border-radius: 50%;
  display: inline-block;
  
}
.dot1 {
  height: 20px;
  width: 20px;
  background-color: blue;
  border-radius: 50%;
  display: inline-block;
  
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
.cart-buttons{
    margin-left:70%;
}
</style>

<!-- breadcrumb End -->
<section class="segment3  " >
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1 text-center">
<h1 class="title margin-bottom-20">CART</h1>
<h2></h2>

</div>
</div>
</div>
</section>
<br/>
<br/><br/>
<!--section start-->
<div scroll-spy="true" id="our-products" class="chipsofic-content-block section-gray">
        <div class="container">

    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
                <?php $cid=$this->session->userdata("userid");?>
                <input type ="hidden" name ="customer_id" value="<?php echo $cid;?>" id="customer_id"/>
                <table id="customers" class="chipsofic-content-block" >
                     <thead>
                          <tr >
                              
                            <th scope="col">image</th>
                            <th scope="col">product name</th>
                            <th scope="col">quantity</th>
                            <th scope="col">size</th>
                             <th scope="col">MRP price</th>
                            <th scope="col">Our Price</th>
                            <th scope="col">Sub Total</th>
                             <th scope="col">Action</th>
                        </tr>
                    </thead>
                       <tbody>
                   <?php  if($cart_product){
                        $i=1; $totmrp=0; $totsell=0;
                       // print_r($cart_product);
                        foreach($cart_product as $pid):
                            //echo $pid->product_id;
                            //exit();
                        $this->db->where("id",$pid->product_id);
                        $pdetails=$this->db->get("stock_products");
                    if($pdetails->num_rows()>0){
                        //$this->db->where("id",$pdetails->product_id);
                        //$pdepart_info=$this->db->get("product_category");
                       ?>
                    <tr>  <td>
                            <a href="<?php echo base_url();?>index.php/welcome/order/<?php echo $pdetails->row()->id;?>"><img src="<?php echo base_url();?>admin/assets/images/product/<?php echo $pdetails->row()->file1; ?>" alt="cart" class=" " width="70" height="80"></a>
                        </td>
                        <td><?php echo $pdetails->row()->name;?> </a>
                        </td>
                        <td>
                            <div class="qty-box">
                                <div class="input-group">
                                  <input type="hidden" value="<?php echo $pdetails->row()->id; ?>" id="iid<?php echo $i;?>">
                                        <button type='button'style="background-color:red;border-radius:50%;" id="minusbutton<?php echo $i;?>"><span class="dot"><h4 style="margin-top:5%;color:white;">-</h4></span></button>&nbsp;&nbsp;&nbsp;
                                        <input type="text" readonly=""  value="<?php echo "1";?>" class="from-control text-center"  style="width:30px;margin-top:5%;" id="qt<?php echo $i;?>" > &nbsp;&nbsp;&nbsp;
                                        <button  type='button' style="background-color:blue;border-radius:50%;" id="puls<?php echo $i;?>" ><span class="dot1"><h4 style="margin-top:5%;color:white;">+</h4></span></button>
                                </div>
                            </div>
                        </td>
                        <td>
                          
                        </td>
                         <td>
                             <?php echo $pdetails->row()->mrp_price1;?>
                        </td>
                      <?php $totmrp = $totmrp+$pdetails->row()->mrp_price1;
                      $totsell = $totsell +$pdetails->row()->selling_price1*1;?>
                      
                            <td>
                                <input type ="text" name ="selling<?php echo $i;?>" id ='selling_price1<?php echo $i;?>' value="<?php  if($pdetails->row()->selling_price1) {echo $pdetails->row()->selling_price1;}else{ echo $pdetails->row()->mrp_price1;}// $pinfo->selling_price1;?>" readonly style="width:70;"/>
                            </td>
                             <td>
                        <input type ="text" name ="subtotal<?php echo $i;?>" id ='subtotal<?php echo $i;?>' value="<?php  if($pdetails->row()->selling_price1) {echo $pdetails->row()->selling_price1;}else{ echo $pdetails->row()->mrp_price1;}// $pinfo->selling_price1;?>" readonly style="width:70;"/>
                            
                            </td>
                               <script>
                                    $(document).ready(function(){
                                  $("#puls<?php echo $i;?>").click(function(){
                                        var cusomerid = $("#customer_id").val();
                                        var productid = $("#iid<?php echo $i;?>").val();
                                        var qty=Number($("#qt<?php echo $i;?>").val());
                                         var total=Number($("#total").val());
                                        var tqty=qty+1;
                                        var pri=Number($("#selling_price1<?php echo $i;?>").val());
                                        var subtotal=pri*tqty
                                        var pt=pri*tqty;
                                        var pt1=pri*qty
                                      
                                    if(qty > -1){
                                         $.ajax({
                        "url": '<?php echo site_url("login/updateItemQty");?>',
						"method": 'POST',
						"data": {cusomerid:cusomerid,productid:productid,tqty :tqty},
						beforeSend: function(data) {
						   $("#puls<?php echo $i;?>").hide();
							$("#sbtotal").val("Wait....")
						},
						success: function(data) {
						   
						    if(data=="1"){
						     var pt=pri*tqty;
						                  
                                              $("#subtotal<?php echo $i;?>").val(pt.toFixed(2));
                                          $("#qt<?php echo $i;?>").val(tqty);
                                          $("#total").val(total+pri);
                                          $("#puls<?php echo $i;?>").show();
                                         
						    }
						},
						error: function(data) {
							$("#sbtotal1").val("Error")
						}
						});
                                    }
                                   
                                      });
                                       $("#minusbutton<?php echo $i;?>").click(function(){
                                                   var cusomerid = $("#customer_id").val();
                                                    var productid = $("#iid<?php echo $i;?>").val();
                                                    var qty=Number($("#qt<?php echo $i;?>").val());
                                                     var total=Number($("#total").val());
                                                    var tqty=qty-1;
                                                    var pri=Number($("#selling_price1<?php echo $i;?>").val());
                                                    var subtotal=pri*tqty
                                                    var pt=pri*tqty;
                                                    var pt1=pri*qty
                                                      
                                                  if(tqty > 0){
                                                 $.ajax({      
                                         "url": '<?php echo site_url("login/updateItemQty");?>',
						"method": 'POST',
						"data": {cusomerid:cusomerid,productid:productid,tqty :tqty},
						beforeSend: function(data) {
						   $("#minusbutton<?php echo $i;?>").hide();
							$("#sbtotal").val("Wait....")
							
							
						},
						success: function(data) {
						     
						        $("#subtotal<?php echo $i;?>").val(pt.toFixed(2));
                                          $("#qt<?php echo $i;?>").val(tqty);
                                          $("#total").val(total-pri);
                                          $("#minusbutton<?php echo $i;?>").show();
						
						},
						error: function(data) {
							$("#sbtotal1").val("Error")
						}          
                                                  });
                                                  }
                                      });
                              
                                    });
                                  </script>
                                <td>
                              <div  class="col-sm-6 " style="background-color:red;width:100px;"><a href="<?php echo base_url();?>index.php/welcome/deletebilling/<?php echo $pid->product_id;?>/<?php echo $cid;?>" ><h6 style="color:white">Delete</h6></a></div>
                            </td>
                    </tr>
                     <?php  } $i++; ?>
                    <?php endforeach; 
                    ?>
                    <?php if($totsell){?>
                   <tr>
                       <td>Total Product</td>
                       <td></td>
                        <td></td>
                         <td></td>
                       <td><?php //echo $totmrp;?></td>
                       <td><input type="text" name="total" value="<?php echo $totsell;?>" id= "total" style="width:50;"/></td>
                        <td style="width:50;">You save <?php echo $totmrp-$totsell;?></td>
                        <td></td>
                   </tr> 
                   <?php }else{?>
                   <tr><td></td><td>Your Cart is Empty |||||||</td><td></td></tr>
    
                  <?php   } if($totsell){?>
                 <table class="table cart-table table-responsive-md">
                      <tfoot>
                    <tr>
            <div class="col-12" style="margin-left:70%;"><a href="<?php echo base_url();?>index.php/welcome/buy_product" class="btn-sm btn btn-primary">Continue shopping</a> 
            <a href="<?php echo base_url();?>index.php/welcome/billing/<?php echo $cid;?>" class="btn-sm btn btn-primary">Buy Now</a> </div>    
            </tr>
                    </tfoot>
                </table>
           <?php }}
              
            else{
                        ?>
                        <tr><td></td><td>Your Cart is Empty |||||||</td><td></td></tr>
                  <?php   }?>
         
                    </tbody>
             </table>
                
                   
                
            </div>
        </div>
       
    </div>
</div>
</div>
<br/><br/><br/>

<?php $this->load->view("footer");?>
<?php $this->load->view("footerJs");?>