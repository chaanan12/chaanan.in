<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
					<?php if(strlen($crecord->row()->image > 0)):?>
													<img alt="" height="128" width="138" src="<?php echo base_url();?>assets/img/users/<?php echo $crecord->row()->image;?>" />
												<?php else:?>
													<img alt="" width="128" src="<?php echo base_url();?>assets/img/default.jpg" />	
												<?php endif;?>
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#"><?php echo $crecord->row()->employee_iname; ?></a>
                      </div>
					  <div class="author-box-job">User Id:<?php  echo $crecord->row()->id; ?></div>
                    </div>
                    
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Bank Details</h4>
                  </div>
                  <div class="card-body">
                    <div class="py-4">
                      <p class="clearfix"><span class="float-left">Bank Name</span>
                        <span class="float-right text-muted"><?php  echo $crecord->row()->bankname;?></span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left"> IFSCode</span>
                        <span class="float-right text-muted"><?php  echo $crecord->row()->ifsccode;?> </span>
                      </p>
					  <p class="clearfix"><span class="float-left">Branch Name</span>
                        <span class="float-right text-muted"><?php  echo $crecord->row()->branchname;?></span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">Account No.</span>
                        <span class="float-right text-muted"><?php  echo $crecord->row()->account_no;?> </span>
                      </p>
                      
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                          aria-selected="true">View</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                          aria-selected="false">Edit</a>
                      </li>
                      <?php if($this->session->userdata("login_type")==2){?>
                        <li class="nav-item">
                        <a class="nav-link" id="passwordc" data-toggle="tab" href="#password" role="tab"
                          aria-selected="false">Change Password</a>
                      </li>
                      <?php }?>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                       
                          <div class="card-header">
                            <h4>Full Profile</h4>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-2 col-12"><label>Name :</label></div>
							  <div class="form-group col-md-4 col-12"><label><?php echo $crecord->row()->employee_iname; ?></label></div>
                              <div class="form-group col-md-2 col-12"><label>Father Name :</label></div>
							  <div class="form-group col-md-4 col-12"> <label><?php echo $crecord->row()->fname; ?></label> </div>
                            </div>
							<div class="row">
                              <div class="form-group col-md-2 col-12"><label>Gender:</label></div>
							  <div class="form-group col-md-4 col-12"><label><?php  if($crecord->row()->gender == 1){ echo "Male";}else{echo "Female";}?></label></div>
                              <div class="form-group col-md-2 col-12"><label>Status :</label></div>
							  <div class="form-group col-md-4 col-12"> <label><?php  if($crecord->row()->status == 1){ echo "<label style='color:green;'>Active</label>";}else{echo "<label style='color:red;'>InActive</label>";}?></label> </div>
                            </div>
							<div class="row">
                              <div class="form-group col-md-2 col-12"><label>City :</label></div>
							  <div class="form-group col-md-4 col-12"><label><?php echo $crecord->row()->city; ?></label></div>
                              <div class="form-group col-md-2 col-12"><label>State :</label></div>
							  <div class="form-group col-md-4 col-12"> <label><?php echo $crecord->row()->state; ?></label> </div>
                            </div>
							<div class="row">
                              <div class="form-group col-md-2 col-12"><label>Current Address :</label></div>
							  <div class="form-group col-md-4 col-12"><label><?php echo $crecord->row()->current_address; ?></label></div>
                              <div class="form-group col-md-2 col-12"><label>Permanent Address :</label></div>
							  <div class="form-group col-md-4 col-12"> <label><?php echo $crecord->row()->permanent_address; ?></label> </div>
                            </div>
							<div class="row">
                              <div class="form-group col-md-2 col-12"><label>Pincode :</label></div>
							  <div class="form-group col-md-4 col-12"><label><?php echo $crecord->row()->pin; ?></label></div>
                              <div class="form-group col-md-2 col-12"><label>Email Id  :</label></div>
							  <div class="form-group col-md-4 col-12"> <label><?php echo $crecord->row()->email; ?></label> </div>
                            </div>
							<div class="row">
                              <div class="form-group col-md-2 col-12"><label>Mobile No :</label></div>
							  <div class="form-group col-md-4 col-12"><label><?php echo $crecord->row()->mobilenumber; ?></label></div>
                              <div class="form-group col-md-2 col-12"><label>Other Mobile No :</label></div>
							  <div class="form-group col-md-4 col-12"> <label><?php echo $crecord->row()->altnumber; ?></label> </div>
                            </div>
							<div class="row">
                              <div class="form-group col-md-2 col-12"><label>Aadhar No :</label></div>
							  <div class="form-group col-md-4 col-12"><label><?php echo $crecord->row()->adhaarnumber; ?></label></div>
                              <div class="form-group col-md-2 col-12"><label>Pan No :</label></div>
							  <div class="form-group col-md-4 col-12"> <label><?php echo $crecord->row()->pannumber; ?></label> </div>
                            </div>
							<div class="row">
                              <div class="form-group col-md-2 col-12"><label>User Id:</label></div>
							  <div class="form-group col-md-4 col-12"><label><?php echo $crecord->row()->email; ?></label></div>
                              <div class="form-group col-md-2 col-12"><label>Date Of Birth :</label></div>
							  <div class="form-group col-md-4 col-12"> <label><?php echo $crecord->row()->dob; ?></label> </div>
                            </div>
						
							<div class="row">
							 <div class="form-group col-md-2 col-12"><label>Position :</label></div>
							  <div class="form-group col-md-4 col-12"> <label><?php echo $crecord->row()->position; ?></label> </div>
                           
                              <div class="form-group col-md-2 col-12"><label>Join Date:</label></div>
							  <div class="form-group col-md-4 col-12"><label><?php echo $crecord->row()->joining_date;?></label></div>
                                </div>
							
							
                          </div>
                      </div>
                      <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                        <form method="post" class="needs-validation" action="<?php echo base_url();?>index.php/customer/edit_profile" enctype="Multipart/Form-data"   >
                          <div class="card-header">
                            <h4>Edit Profile</h4>
                          </div>
                          <div class="card-body">
                            <div class="row">
                               
                                <input type="hidden" class="form-control" name="id" value="<?php echo $crecord->row()->id; ?>">
							<div class="form-group col-md-2 col-12"><label>Name</label></div>
							  <div class="form-group col-md-4 col-12">
							   <?php 
							       if($this->session->userdata("login_type")==1){  ?>
							      <input type="text" class="form-control" name="cname" value="<?php echo $crecord->row()->employee_iname; ?>">
							      <?php } else{ 
							      if($crecord->row()->employee_iname){
							      ?>
							       <input type="text" class="form-control" name="cname" value="<?php echo $crecord->row()->employee_iname; ?>" readonly="" >
							    
							      
							      <?php } else{ ?>
							       <input type="text" class="form-control" name="cname" value="<?php echo $crecord->row()->employee_iname; ?>">
							    
							     <?php } }?>
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                              <div class="form-group col-md-2 col-12"><label>Father Name</label></div>
                              <div class="form-group col-md-4 col-12">
                                   <?php 
							       if($this->session->userdata("login_type")==1){  ?>
							   
                                  <input type="text" class="form-control" name="fname" value="<?php echo $crecord->row()->fname; ?>">
                                    <?php } else{ 
							      if($crecord->row()->fname){
							      ?>
							        <input type="text" class="form-control" name="fname" value="<?php echo $crecord->row()->fname; ?>" readonly="">
                                <?php } else{ ?>
                                   <input type="text" class="form-control" name="fname" value="<?php echo $crecord->row()->fname; ?>">
                             <?php } }?>
                                <div class="invalid-feedback">Please fill in the last name </div>
                              </div>
                            </div>
							 <div class="row">
							<div class="form-group col-md-2 col-12"><label>City</label></div>
							  <div class="form-group col-md-4 col-12">
							         <?php 
							       if($this->session->userdata("login_type")==1){  ?>
							   
							      <input type="text" class="form-control" name="city" value="<?php echo $crecord->row()->city; ?>">
							          <?php } else{ 
							      if($crecord->row()->city){
							      ?>
							       <input type="text" class="form-control" name="city" value="<?php echo $crecord->row()->city; ?>" readonly="">
							      <?php } else{ ?>
							       <input type="text" class="form-control" name="city" value="<?php echo $crecord->row()->city; ?>">
							      <?php } }?>
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                              <div class="form-group col-md-2 col-12"><label>State</label></div>
                              <div class="form-group col-md-4 col-12">
                                      <?php 
							       if($this->session->userdata("login_type")==1){  ?>
							   
                                  <input type="text" class="form-control" name="state" value="<?php echo $crecord->row()->state; ?>">
                                     <?php } else{ 
							      if($crecord->row()->state){
							      ?>
							       <input type="text" class="form-control" name="state" value="<?php echo $crecord->row()->state; ?>" readonly="" >
                                   <?php } else{ ?>
                                     <input type="text" class="form-control" name="state" value="<?php echo $crecord->row()->state; ?>">
                                 <?php } }?>
                                <div class="invalid-feedback">Please fill in the last name </div>
                              </div>
                            </div>
							 <div class="row">
							<div class="form-group col-md-2 col-12"><label>Current Address</label></div>
							  <div class="form-group col-md-4 col-12">
							        <?php 
							       if($this->session->userdata("login_type")==1){  ?>
							   
							      <input type="text" class="form-control" name="cadd" value="<?php echo $crecord->row()->current_address; ?>">
							        <?php } else{ 
							      if($crecord->row()->current_address){
							      ?>
							      <input type="text" class="form-control" name="cadd" value="<?php echo $crecord->row()->current_address; ?>" readonly="">
							       <?php } else{ ?>
							     <input type="text" class="form-control" name="cadd" value="<?php echo $crecord->row()->current_address; ?>">
							     <?php } }?>
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                              <div class="form-group col-md-2 col-12"><label>Permanent  Address</label></div>
                              <div class="form-group col-md-4 col-12">
                                   <?php 
							       if($this->session->userdata("login_type")==1){  ?>
							   
                                  <input type="text" class="form-control" name="peradd" value="<?php echo $crecord->row()->permanent_address; ?>">
                                    <?php } else{ 
							      if($crecord->row()->permanent_address){
							      ?>
							        <input type="text" class="form-control" name="peradd" value="<?php echo $crecord->row()->permanent_address; ?>" readonly="" >
							          <?php } else{ ?>
                                  <input type="text" class="form-control" name="peradd" value="<?php echo $crecord->row()->permanent_address; ?>">
                                   <?php } }?>
                                <div class="invalid-feedback">Please fill in the last name </div>
                              </div>
                            </div>
							<div class="row">
							<div class="form-group col-md-2 col-12"><label>Pincode</label></div>
							  <div class="form-group col-md-4 col-12">
							       <?php 
							       if($this->session->userdata("login_type")==1){  ?>
							   
							      <input type="text" class="form-control" name="pin" value="<?php echo $crecord->row()->pin; ?>">
							         <?php } else{ 
							      if($crecord->row()->pin){
							      ?>
							       <input type="text" class="form-control" name="pin" value="<?php echo $crecord->row()->pin; ?>" readonly="">
							          <?php } else{ ?>
							     <input type="text" class="form-control" name="pin" value="<?php echo $crecord->row()->pin; ?>">
							       <?php } }?>
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                              <div class="form-group col-md-2 col-12"><label>Email</label></div>
                              <div class="form-group col-md-4 col-12">
                                    <?php 
							       if($this->session->userdata("login_type")==1){  ?>
							   
                                  <input type="text" class="form-control" name="email" value="<?php echo $crecord->row()->email; ?>">
                                      <?php } else{ 
							      if($crecord->row()->email){
							      ?>
							        <input type="text" class="form-control" name="email" value="<?php echo $crecord->row()->email; ?>" readonly="">
							         <?php } else{ ?>
                                  <input type="text" class="form-control" name="email" value="<?php echo $crecord->row()->email; ?>">
                                <?php } }?>
                                <div class="invalid-feedback">Please fill in the last name </div>
                              </div>
                            </div>
							 <div class="row">
							<div class="form-group col-md-2 col-12"><label>Mobile No</label></div>
							  <div class="form-group col-md-4 col-12">
							       <?php 
							       if($this->session->userdata("login_type")==1){  ?>
							   
							      <input type="text" class="form-control" name="mno" value="<?php echo $crecord->row()->mobilenumber; ?>">
							        <?php } else{ 
							      if($crecord->row()->mobilenumber){
							      ?>
							       <input type="text" class="form-control" name="mno" value="<?php echo $crecord->row()->mobilenumber; ?>" readonly="">
							          <?php } else{ ?>
							      <input type="text" class="form-control" name="mno" value="<?php echo $crecord->row()->mobilenumber; ?>">
							     
							       <?php } }?>
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                              <div class="form-group col-md-2 col-12"><label>Other Mobile No</label></div>
                              <div class="form-group col-md-4 col-12"><input type="text" class="form-control" name="pmno" value="<?php echo $crecord->row()->altnumber; ?>">
                                <div class="invalid-feedback">Please fill in the last name </div>
                              </div>
                            </div>
							<div class="row">
							<div class="form-group col-md-2 col-12"><label>Aadhar No</label></div>
							  <div class="form-group col-md-4 col-12">
							        <?php 
							       if($this->session->userdata("login_type")==1){  ?>
							   
							      <input type="text" class="form-control" name="adhar" value="<?php echo $crecord->row()->adhaarnumber; ?>">
							          <?php } else{ 
							      if($crecord->row()->adhaarnumber){
							      ?>
							       <input type="text" class="form-control" name="adhar" value="<?php echo $crecord->row()->adhaarnumber; ?>" readonly="">
							           <?php } else{ ?>
							      <input type="text" class="form-control" name="adhar" value="<?php echo $crecord->row()->adhaarnumber; ?>">
							       <?php } }?>
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                              <div class="form-group col-md-2 col-12"><label>Pan No</label></div>
                              <div class="form-group col-md-4 col-12">
                                    <?php 
							       if($this->session->userdata("login_type")==1){  ?>
							   
                                  <input type="text" class="form-control" name="panno" value="<?php echo $crecord->row()->pannumber; ?>">
                                     <?php } else{ 
							      if($crecord->row()->pannumber){
							      ?>
                                  <input type="text" class="form-control" name="panno" value="<?php echo $crecord->row()->pannumber; ?>" readonly="">
                                    <?php } else{ ?>
                            <input type="text" class="form-control" name="panno" value="<?php echo $crecord->row()->pannumber; ?>">
                              <?php } }?>
                                <div class="invalid-feedback">Please fill in the last name </div>
                              </div>
                            </div>
							 <div class="row">
							<div class="form-group col-md-2 col-12"><label>Gender</label></div>
							  <div class="form-group col-md-4 col-12">
							        <?php 
							       if($this->session->userdata("login_type")==1){  ?>
							       
							        <select class="form-control" id="gender" name="gender">
                     
                     
                      <option value="1" <?php if($crecord->row()->gender==1){echo 'selected="selected"';}?> >Male</option>
                      <option value="2" <?php if($crecord->row()->gender==2){echo 'selected="selected"';}?>>Female</option>
                      <option value="3" <?php if($crecord->row()->gender==3){echo 'selected="selected"';}?>>Transgender</option>
                     
                    </select>	
							   
							 
							        <?php } else{ 
							      if($crecord->row()->gender){
							      ?> 
							      <select class="form-control" id="gender" name="gender">
                     
                     
                      <option value="1" <?php if($crecord->row()->gender==1){echo 'selected="selected"';}?> >Male</option>
                      <option value="2" <?php if($crecord->row()->gender==2){echo 'selected="selected"';}?>>Female</option>
                      <option value="3" <?php if($crecord->row()->gender==3){echo 'selected="selected"';}?>>Transgender</option>
                     
                    </select>	
							        <?php } else{ ?>
                            <select class="form-control" id="gender" name="gender">
                     
                      <option value="">-Select Gender-</option>
                      <option value="1"  >Male</option>
                      <option value="2" >Female</option>
                      <option value="3">Transgender</option>
                     
                    </select>	
                               <?php } }?>
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                              <div class="form-group col-md-2 col-12"><label>Date Of Birth</label></div>
                              <div class="form-group col-md-4 col-12">
                                    <?php 
							       if($this->session->userdata("login_type")==1){  ?>
							   
                                  <input type="text" class="form-control" name="dob" value="<?php echo $crecord->row()->dob; ?>">
                                    <?php } else{ 
							      if($crecord->row()->dob){
							      ?>
                                   <input type="text" class="form-control" name="dob" value="<?php echo $crecord->row()->dob; ?>" readonly="">
                                     <?php } else{ ?>
                              <input type="text" class="form-control" name="dob" value="<?php echo $crecord->row()->dob; ?>">
                               <?php } }?>
                                <div class="invalid-feedback">Please fill in the last name </div>
                              </div>
                            </div>
							<div class="row">
							<div class="form-group col-md-2 col-12"><label>Password</label></div>
							  <div class="form-group col-md-4 col-12"><input type="text" class="form-control" name="password" value="<?php echo $crecord->row()->password; ?>">
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                              <div class="form-group col-md-2 col-12"><label>Upload Photo</label></div>
                              
                              <div class="form-group col-md-4 col-12"><input type="file" class="form-control" name="photo" value="" accept="image/*" capture>
                             
                                <div class="invalid-feedback">Please fill in the last name </div>
                              </div>
                            </div>
							
                          </div>
                          <div class="card-footer text-right">
                            <button class="btn btn-primary">Save Changes</button>
                          </div>
                        </form>
                      </div>
                       <?php if($this->session->userdata("login_type")==2){?> 
                       <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="passwordc">
                      <!--  <form method="post" class="needs-validation" action="<?php echo base_url();?>index.php/adminController/changePassword" enctype="multipart/form-data"   >-->
                          <div class="card-header">
                            <h4>Change Password Panel</h4>
                          </div>
                          <div class="card-body">
                          
						<div class="row">
							<div class="form-group col-md-6 col-12"><label>Enter Current Password</label></div>
							  <div class="form-group col-md-6 col-12"><input type="text" class="form-control" id="op" >
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                              <div class="form-group col-md-6 col-12"><label>New Password</label></div>
                              <div class="form-group col-md-6 col-12"><input type="text" class="form-control" id="np" >
                                <div class="invalid-feedback">Please fill in the last name </div>
                              </div>
                            </div>
							 <div class="row">
							<div class="form-group col-md-6 col-12"><label>Retype New Password</label></div>
							  <div class="form-group col-md-6 col-12"><input type="text" class="form-control" id="rnp" >
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                             
                            </div>
                            <input type = "hidden" id ="userid" value = "<?php echo $crecord->row()->id;?>"/>
							<div  class="col-md-6 col-12" id = "upmsg"></div>
                          </div>
                          <div class="card-footer text-right">
                            <button class="btn btn-primary" id="changep">Change Password</button>
                            <script>	
                            $("#changep").click(function(){
                            var userid = $("#userid").val();  
						    var op = $("#op").val();
						    var np = $("#np").val();
						    var rnp = $("#rnp").val();
						    if(np==rnp){
						    $.post("<?php echo site_url('adminController/changePassword') ?>",{userid : userid , op : op, np : np , rnp : rnp},function(data){
							$("#upmsg").html(data);
							$("#op").val("");
							$("#np").val("");
							$("#rnp").val("");
						    });
						    }else{
						       $("#upmsg").html('<div class ="alert alert-warning">Renter password mismatch</div>'); 
						    }
					    });
                        </script>
                          </div>
                       <!-- </form>-->
                      </div>
                      <?php }?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label>
                    <span class="control-label p-r-20">Mini Sidebar</span>
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <div class="disk-server-setting m-b-20">
                    <p>Disk Space</p>
                    <div class="sidebar-progress">
                      <div class="progress" data-height="5">
                        <div class="progress-bar l-bg-green" role="progressbar" data-width="80%" aria-valuenow="80"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span class="progress-description">
                        <small>26% remaining</small>
                      </span>
                    </div>
                  </div>
                  <div class="disk-server-setting">
                    <p>Server Load</p>
                    <div class="sidebar-progress">
                      <div class="progress" data-height="5">
                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="58%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span class="progress-description">
                        <small>Highly Loaded</small>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
     
