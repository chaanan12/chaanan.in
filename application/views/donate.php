<?php $this->load->view("headerCss");?>
<?php $this->load->view("header");?>

<style>  
span { 
  font-size: 2.0em; 
  
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type= email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>
<?php $this->load->view("headerCss");?>
<?php $this->load->view("header");?>
<body>
  <div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
			 
   
<body>  
<form method="post"	action="<?php echo base_url()?>index.php/welcome/donate_now" enctype="multipart/Form-data" >
<br>
      <div class="container">  
      
      <div class ="alert alert-info " ><span ><center><b>Donate Form</b></center></span></div>   
      
      <hr>  
       <?php if($this->uri->segment(3)=="success"){
			      echo '<div class="alert alert-success">Your donation  is completed successfully|||</div>';
			  }
			  ?>
			   <div class="col-md-4 donate-form">
                        <h4><b>You may deposit or NEFT/RTGS directly in our bank account:</b></h4>
                        <p>A/C Holder:</p>
                        <p>A/C No.: xxxxxxxxxxxxxxxxxxx</p>
                        <p>Bank: </p>
                        <p>IFSC:xxxxxxxxxxxx</p>
                    </div>
    <div id="row" style="background-color:; width:700px; height:800px; float:right; " >
     <div class="col-md-10 row">
      <label class="col-md-3">First Name </label>   
        <div class="col-md-9">
            <input type="text" name="fname" class="form-control" placeholder= "First Name" required />  
        </div>
    </div>    
     <div class="col-md-10 row">
      <label class="col-md-3">Middle Name </label>   
        <div class="col-md-9">
            <input type="text" name="mname" class="form-control" placeholder= "Middle Name" required />  
        </div>
    </div>  
     <div class="col-md-10 row">
      <label class="col-md-3">Last Name </label>   
        <div class="col-md-9">
            <input type="text" name="lname" class="form-control" placeholder= "Last Name"  required />  
        </div>
    </div>  
    <div class="col-md-10 row">
      <label class="col-md-3">Address </label>   
        <div class="col-md-9">
            <input type="text" name="address" class="form-control" placeholder= "Address"  required />  
        </div>
    </div>
     <div class="col-md-10 row">
      <label class="col-md-3">City </label>   
        <div class="col-md-9">
            <input type="text" name="city" class="form-control" placeholder= "City" required />  
        </div>
    </div>
     <div class="col-md-10 row">
      <label class="col-md-3">State </label>   
        <div class="col-md-9">
            <input type="text" name="state" class="form-control" placeholder= "State" required />  
        </div>
    </div>
     <div class="col-md-10 row">
      <label class="col-md-3">Country </label>   
        <div class="col-md-9">
            <input type="text" name="country" class="form-control" placeholder= "Country" required />  
        </div>
    </div>
     <div class="col-md-10 row">
      <label class="col-md-3">Pin Code </label>   
        <div class="col-md-9">
            <input type="text" name="pincode" class="form-control" placeholder= "Pin Code"  required />  
        </div>
    </div>
     <div class="col-md-10 row">
      <label class="col-md-3">Email </label>   
        <div class="col-md-9">
            <input type="email" name="email" class="form-control" placeholder= "Email" required />  
        </div>
    </div>
     <div class="col-md-10 row">
      <label class="col-md-3">Mobile Number </label>   
        <div class="col-md-9">
            <input type="text" name="mobile" class="form-control" placeholder= "Mobile Number"  required />  
        </div>
    </div>
     <div class="col-md-10 row">
      <label class="col-md-3">Aadhar Number </label>   
        <div class="col-md-9">
            <input type="text" name="aadhar" class="form-control" placeholder= "Aadhar Number"   />  
        </div>
    </div>
     <div class="col-md-10 row">
      <label class="col-md-3">Pan Number</label>   
        <div class="col-md-9">
            <input type="text" name="pannumber" class="form-control" placeholder= "Pan Number"   />  
        </div>
    </div>
     <div class="col-md-10 row">
      <label class="col-md-3">Amount </label>   
        <div class="col-md-9">
            <input type="text" class="form-control" name="amount" placeholder= "Amount" required />  
        </div>
    </div>
     <div class="col-md-10 row">
      <label class="col-md-3">Message </label>   
        <div class="col-md-9">
            <textarea name="message" placeholder= "Message" class="form-control"  required /> </textarea> 
        </div>
    </div>
    </br>
     </br>
        <div class="col-md-10 row">
              <div class="col-md-3">
                  </div>
             <div class="col-md-3">
                <button type="submit" class="btn btn-success form-control">Submit</button>   
            </div> 
        </div> 
        </div>
        <div id="row" style="background-color:; width:300px; height:400px; float:right;"  ></div>

</div>  
</br>
<script>

$('[data-type="adhaar-number"]').keyup(function() {
  var value = $(this).val();
  value = value.replace(/\D/g, "").split(/(?:([\d]{4}))/g).filter(s => s.length > 0).join("-");
  $(this).val(value);
});

$('[data-type="adhaar-number"]').on("change, blur", function() {
  var value = $(this).val();
  var maxLength = $(this).attr("maxLength");
  if (value.length != maxLength) {
    $(this).addClass("highlight-error");
  } else {
    $(this).removeClass("highlight-error");
  }
});
</script>
</form>  
<?php $this->load->view("footer");?>
<?php $this->load->view("footerJs");?>