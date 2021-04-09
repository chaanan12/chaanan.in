<?php $this->load->view("headerCss");?>
<?php $this->load->view("header");?>
<head>
<style>
table {
  width:100%;
  background-color:#eee;
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
  background-color: ;
}
#t01 tr:nth-child(odd) {
 background-color: ;
}
#t01 th {
  background-color:#eee  ;
  color: white;
}
</style>
</head>
<section class="segment3 about-masthead space-mini" style="background-image: url('<?php echo base_url();?>assets/images/img/Masthead-Our-story-1.jpg'); background-repeat: no-repeat; background-position: center center; background-attachment: scroll; background-size: cover;">
<div class="container">
<div class="row inner-masthead">
<div class="col-md-10 text-center col-md-offset-1">
<h1 class="font-60 uppercase margin-top-0">Benifits of PwIDDs</h1>
</div>
</div>
</div>
</section>
<section class="segment1 about-us-content space-huge" style="background-color: #fff;">
<div class="container">
<div class="row">
<div class="col-md-12"></div>

<table id="t01" >
  <tr></tr>
<tr>
   <td></td>
   <td><a href="https://www.thenationaltrust.gov.in/content/scheme/niramaya.php" target="_blank"><img src="<?php echo base_url();?>assets/images/img/arrow1.png" alt="member" width="50" height="40"></a></td>
   <td><a href="https://www.thenationaltrust.gov.in/content/scheme/niramaya.php" target="_blank">NIRAMAYA INSURANCE</a></td>
   </tr>
   <tr>
   <td></td>
   <td><a href="https://www.thenationaltrust.gov.in/content/innerpage/guardianship.php" target="_blank"><img src="<?php echo base_url();?>assets/images/img/arrow1.png" alt="member" width="50" height="40"></a></td>
   <td><a href="https://www.thenationaltrust.gov.in/content/innerpage/guardianship.php" target="_blank">LEGAL GUARDIANSHIP</a></td>
   </tr>
   
</table>
</div>
</div>
</section>

<?php $this->load->view("footer");?>
<?php $this->load->view("footerJs");?>