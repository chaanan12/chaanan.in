<?php $this->load->view('headerCss');?>
<?php $this->load->view('header');?>
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
<br/><br/><br/>
<!--<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>cart</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="#">Old Orders Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
<!-- breadcrumb End -->


<!--section start-->
<section class="cart-section section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                     <thead>
                        <!--  <tr class="table-head">
                            <th scope="col">Invoice No</th>
                            <th scope="col">Invoice No</th>
                            <th scope="col">image</th>
                            <th scope="col">product name</th>
                            <th scope="col">quantity</th>
                            <th scope="col">MRP price</th>
                            <th scope="col">Our Price</th>
                            <th scope="col">Action</th>
                        </tr>-->
                         <tr class="table-head">
                            <th scope="col">Invoice No</th>
                            <th scope="col">Customer Id</th>
                            
                            <th scope="col">Product Name</th>
                            
                            <th scope="col">quantity</th>
                            <th scope="col">MRP price</th>
                            <th scope="col">Total Amount</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                       <tbody>
<?php 
        $product = $this->db->query("select * from day_book where 	paid_by='$cid'");
        if($product->num_rows()>0){
        $i=1; $totmrp=0; $totsell=0;
        foreach($product->result() as $pdata):
        $this->db->where("invoice_no",$pdata->invoice_no);
        $pinfo=$this->db->get("like_product");
            ?>
        <tr>
        <td><a href="<?php echo base_url()?>admin/apanelForms/invoicedetail/<?php echo $pdata->invoice_no;  ?>" class="btn btn-blue"><?php echo $pdata->invoice_no;?> </a> </td>
        <td> <?php echo $cid;?></td>
        
        <?php
        foreach($pinfo->result() as $pid):
            //echo $pid->product_id;
            
            $this->db->where("id",$pid->product_id);
        $pinfob=$this->db->get("stock_products");
        //print_r($pinfob);
        if($pinfob->num_rows()>0){
        ?>
              <!-- <td><a href="#"><img src="<?php //echo base_url()?>admin/assets/images/client_gallery/2/product/<?php // echo $pinfob->file1; ?>" alt="cart" class=" "></a></td>-->
               <td><a href="#"><?php echo $pinfob->row()->name;?></a></td>
               <td><?php echo $pid->quantity;?> </td>
                <?php 
     $totmrp = $totmrp+$pinfob->row()->mrp_price1;
     $totsell = $totsell +$pinfob->row()->selling_price1;
            ?>
                <td><?php  echo $pinfob->row()->selling_price1;?> </td>
            
                 <td><?php echo $pdata->amount;?></td>
                 <td>
                     <?php if('status'==0){ ?>
                    <button class="btn btn-danger" >Pending</button></td>
                    <?php } else{?>
                         <button class="btn btn-danger">Delivered</button></td>
                    <?php }}?>
                  <?php endforeach; $i++; ?>
         
          </tr>
           <?php endforeach; ?>
 <?php }else{?>
           <tr>
               <td></td>
               <td>Your Oredr Details not found|||||||</td>
               <td></td>
           </tr>
<?php } ?>
 </tbody>
</table>
     <table class="table cart-table table-responsive-md">
        <tfoot>
           <tr>
           </tr>
        </tfoot>
     </table>
    </div>
   </div>
  </div>
</section>
<?php $this->load->view('footer');?>
<?php $this->load->view('footerJs');?>