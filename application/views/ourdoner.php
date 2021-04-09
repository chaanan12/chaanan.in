<?php $this->load->view("headerCss");?>
<?php $this->load->view('header');?>
<head>
<style>
table {
  width:100%;
}
table, th, td {
  border: ;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: #0A1C58 ;
  color: white;
}
</style>
</head>
<section class="segment3 about-masthead space-mini" style="background-image: url('<?php echo base_url();?>assets/images/img/masthead-about-us.jpg'); background-repeat: no-repeat; background-position: center center; background-attachment: scroll; background-size: cover;">
<div class="container">
<div class="row inner-masthead">
<div class="col-md-10 text-center col-md-offset-1">
<h1 class="font-60 uppercase margin-top-0">Our Donors</h1>
</div>
</div>
</div>
</section>
<section class="segment1 about-us-content space-huge" style="background-color: #fff;">
<div class="container">
<div class="row">
<div class="col-md-12"></div>


<table id="t01">
  <tr>
    <th>#</th>
    <th>NAME</th> 
    <th>IMAGE</th>
    <th>DISCRIPTION</th> 
  </tr>
<tr>
   <?php  $doner=$this->db->get('donar'); 
     if($doner->num_rows()>0){
         $i=1;
        foreach($doner->result() as $don): ?>
      
    <td><?php echo $i;?></td>
    <td><?php echo $don->name;?></td>
    <td><img src="<?php echo base_url();?>admin/assets/images/donar/<?php echo $don->image;?>" alt="member" width="60" height="70"></td>
    <td><?php echo $don->discription;?></td>
    <td><?php echo $don->donate_amount; ?></td>
   
  </tr>
   <?php $i++;  endforeach; } ?>
</table>
</div>
</div>
</section>
<?php $this->load->view('footer');?>
<?php $this->load->view("footerJs");?>