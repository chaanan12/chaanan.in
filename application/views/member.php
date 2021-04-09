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
<form method="post"	action="<?php echo base_url()?>index.php/welcome/membership" enctype="multipart/Form-data" >
<br>
      <div class="container">  
      
      <div class ="alert alert-info " ><span ><center><b>Membership Form</b></center></span></div>   
      
      <hr>  
       <?php if($this->uri->segment(3)=="success"){
			      echo '<div class="alert alert-success">Registration has been done successfully|||</div>';
			  }
			  ?>
     <div class="col-md-10 row">
      <label class="col-md-3"> Name </label>   
        <div class="col-md-9">
            <input type="text" name="name" placeholder= "Name" size="15" required />  
        </div>
    </div>        
     <div class="col-md-10 row">
           </br>
           
            <label class="col-md-3">   
                Membership :  
            </label>
             <div class="col-md-9">
                <input type="radio" value="parent" name="membership"  > Parent   
                <input type="radio" value="nonparent" name="membership"> Non-Parent 
            </div>  
                                        <script>
											$("#nonparent1").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="nonparent")
											{
											$("#nonparent1").show();
											
											}
											else{
											$("#nonparent1").hide();
												}
											});
											});         
										
                                        </script>
   </br>
   </br>
     </div> 
     <div id="nonparent1">
   <div class="col-md-10 row" >
        <label class="col-md-3">Purpose</label>   
         <div class="col-md-9">
            <textarea name="purpose" class="form-control" placeholder="Purpose Of Non-Parent"> </textarea>
         </div>
     </div>
     </div>
    <div class="col-md-10 row">
        <label class="col-md-3">Father's Name</label>   
         <div class="col-md-9">
            <input type="text" name="f_name" placeholder="Father's Name" size="15"  />   
         </div>
     </div> 
     <div class="col-md-10 row">
         <label class="col-md-3" > Aadhar Number </label>
            <div class="col-md-9">
                <input type="text" name="adhar" data-type="adhaar-number" maxLength="14" placeholder="Adhar Number"  /> 
            </div>
     </div> 
    
     <div class="col-md-10 row">
           </br>
           
            <label class="col-md-3">   
                Gender :  
            </label>
             <div class="col-md-9">
                <input type="radio" value="Male" name="gender"  > Male   
                <input type="radio" value="Female" name="gender"> Female   
                <input type="radio" value="Other" name="gender"> Other  
            </div>    
   </br>
   </br>
     </div> 
    
     <div class="col-md-10 row">
          
         <label class="col-md-3">   
                Mobil Number:  
        </label> 
        <div class="col-md-9">
                <input type="text" name="mobileno" placeholder="Mobile Number"  value="+91"/> 
        </div> 
     </div>  
         <div class="col-md-10 row">
              <label class="col-md-3">   
                Phone Number:  
        </label>
             <div class="col-md-9">
                <input type="text" name="phoneno" placeholder="phone no." size="10"/ >
             </div>
        </div>    
        
        <div class="col-md-10 row">
             <label class="col-md-3">   
                Current Address : 
        </label>
             <div class="col-md-9">
                <input type="text" name="address" placeholder="Current Address" value=""  >
             </div>
        </div>
        
        <div class="col-md-10 row">
            <label class="col-md-3" for="email">Email</label>  
            <div class="col-md-9">
                <input type="email" placeholder="Enter Email" name="email" required> 
            </div>
        </div>
        
        <div class="col-md-10 row">
             <label class="col-md-3" ><b>Pin Code </b></label> 
              <div class="col-md-9">
                    <input type="text" placeholder="Pin code" name="pin" required> 
                </div>
        </div>
        
        <div class="col-md-10 row">
             <label class="col-md-3" ><b>Date Of Birth</b></label>
             <div class="col-md-9">
                <input type="date" placeholder="Dob" name="dob" required>  
            </div>    
        </div>
         
         <div class="col-md-10 row">
             <label class="col-md-3" ><b>Pan Card</b></label> 
              <div class="col-md-9">
                    <input type="text" placeholder="Pin code" name="pancard" > 
                </div>
        </div>
         <div class="col-md-10 row">
             <label class="col-md-3" ><b>Attachment</b></label>
             <div class="col-md-9">
                <input type="file" placeholder="" name="file1" class="form-control" required>  
            </div>    
        </div>
        <div class="col-md-10 row">
             <label class="col-md-3" ><b></b></label>
             <div class="col-md-9">  
            </div>    
        </div>
         <div class="col-md-10 row">
             <label class="col-md-3" ><b>Upload Pic</b></label>
             <div class="col-md-9">
                <input type="file" placeholder="" name="file2" class="form-control" required>  
            </div>    
        </div>
        <div class="col-md-10 row">
             <label class="col-md-3" ><b></b></label>
             <div class="col-md-9">  
            </div>    
        </div>
        <div class="col-md-10 row">
              <div class="col-md-3">
                  </div>
             <div class="col-md-3">
                <button type="submit" class="btn btn-success">Register</button>   
            </div> 
        </div>    

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