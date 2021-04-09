<?php $this->load->view("headerCss");?>
<?php $this->load->view("header");?>
 
<section class="segment3  " >
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1 text-center">
<h1 class="title margin-bottom-20">Products </h1>
<h2></h2>

</div>
</div>
</div>
</section>
<section class="segment1 our-team space-large">
<div class="container">
<div class="row margin-vertical-20 xs-no-margin-top xs-no-margin-bottom xs-text-center">
 <?php $sprod=$this->db->get('stock_products');
        if($sprod->num_rows()>0){    
    foreach($sprod->result() as $sp):
    ?>    
    
<div class="col-md-4 col-sm-6 text-center margin-bottom-40">

<a href="<?php echo base_url();?>index.php/welcome/order/<?php echo $sp->id;?>" class="no-underline"  target="_blank">
<img src="<?php echo base_url();?>admin/assets/images/product/<?php echo $sp->file1; ?>"  width="350px" height="300px"class=" aligncenter"></a></p>
<div id="accordions-show-description-1" class="panel-group accordions-list custom-accordion">

  <h2 class="panel-title"><?php echo $sp->name;?></h2>

<p class="margin-btn">Price: <strong class="accent6"><?php echo $sp->selling_price1;?></strong></p>
<div class="panel-heading">
</div>
</br>
<p class="margin-bottom-10"></p>
</br>

</div>
</div>
<?php endforeach; } ?>
</div>
</div>
</section>

<?php $this->load->view("footer");?>
<?php $this->load->view("footerJs");?>