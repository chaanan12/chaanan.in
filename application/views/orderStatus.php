<?php $this->load->view('headerCss');?>
<?php $this->load->view('header');?>
<style>
    .button {
        padding: 10px 24px;
        font-size: 10px;
        width: 70px;
     }
    .button1 {
        background-color: #f44336;
         padding: 10px 24px;
        font-size: 10px;
        width: 70px;
    }
</style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/color2.css">
<!-- breadcrumb End -->
<section class="segment3  " >
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1 text-center">
<h1 class="title margin-bottom-20">ORDER STATUS</h1>
<h2></h2>

</div>
</div>
</div>
</section>

<!-- thank-you section start -->
<section class="section-big-py-space light-layout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="success-text"><i class="fa fa-check-circle" aria-hidden="true"></i>
                    <h2>Thank you</h2>
                    <p>Payment is successfully processsed and your order is on the way</p>
                    <p>Transaction ID:<?php echo $ptm->txn_id;?></p>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->

<?php
 
       ?>
<!--section start-->
<section >
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-responsive-xs">
                     <thead>
                      
                         <tr >
                            <th>Invoice No</th>
                            <th>Customer Id</th>
                            <th>Product Name</th>
                            <th>Cod Amount</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                       <tbody>
<?php  //echo $orderDetails->paid_by;
        $customerDetails = $this->db->query("select * from costumer where id='$orderDetails->paid_by'")->row();
      //print_r($customerDetails);
        $this->db->where("invoice_no",$orderDetails->invoice_no);
        $pinfo=$this->db->get("like_product"); 
        $cod=$this->db->get("cod_amount")->row();?>
       
            
        <tr>
        <td><a href="<?php echo base_url()?>admin/apanelForms/invoicedetail/<?php echo $orderDetails->invoice_no;?>" class="btn btn-blue"><?php echo $orderDetails->invoice_no;?> </a> </td>
        <td> <?php echo $customerDetails->name."</br>[".$customerDetails->email."]";?></td>
        <td >
            <table>
               <tr><td>Image</td><td>Name</td><td>Quantity</td><td>Amount</td>
             
               
               </tr> 
               
        <?php
            $i=1; foreach($pinfo->result() as $pid):
            //echo $pid->product_id."<br>";
         
            $this->db->where("id",$pid->product_id);
            $pinfob1=$this->db->get("stock_products");
       
            if($pinfob1->num_rows() > 0){
                $pinfob=$pinfob1->row();?>
           
            <tr>
                <td><img src="<?php echo base_url();?>admin/assets/images/product/<?php echo $pinfob->file1; ?>"  width="70" height="80" >&nbsp;&nbsp;&nbsp;</td>
                <td><h6><?php echo $pinfob->name;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6></td>
                <td><?php echo $pid->quantity;?> </td>&nbsp;&nbsp;&nbsp;
                <td><?php  echo $pinfob->selling_price1;?> </td>
              
             
                </tr>
             <?php } endforeach; $i++; ?>
             
             </table>
             <td><?php  if($cod=$this->uri->segment(4)){?>
                   
                  <?php echo $cod; ?>
              <?php }?>
             </td>
                 <td><?php echo $orderDetails->amount;?></td>
                
               
                 <td>
                     <?php if($orderDetails->status==0){ ?>
                    <button class="btn btn-danger ">Pending</button></td>
                  <?php }else{
                     echo  "Amount Paid Online";
                  }?>
                 
         
          </tr>
          
 
          
 </tbody>
</table>
   
    </div>
   </div>
  </div>
  <br/>
<br/>
</section>
<?php $this->load->view('footer');?>
<?php $this->load->view('footerJs');?>