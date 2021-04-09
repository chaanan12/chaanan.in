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
<h1 class="font-60 uppercase margin-top-0">Our Team</h1>
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
    <th>ADDRESS</th>
    <th>MOBILE NUMBER</th> 
    <th>IMAGE</th>
    <th>DESIGNATION</th>
  </tr>
<tr>
   <?php  $team=$this->db->get('team'); 
     if($team->num_rows()>0){
         $i=1;
        foreach($team->result() as $tm): ?>
      
    <td><?php echo $i;?></td>
    <td><?php echo $tm->name;?></td>
      <td><?php echo $tm->address ;?></td>
        <td><?php echo $tm->mobile;?></td>
    <td><img src="<?php echo base_url();?>admin/assets/images/team/<?php echo $tm->image;?>" alt="member" width="110" height="120"></td>
  
    <td><?php echo $tm->designation	; ?></td>
   
  </tr>
   <?php $i++;  endforeach; } ?>
</table>
</div>
</div>
</section>
<?php $this->load->view('footer');?>
<?php $this->load->view("footerJs");?>