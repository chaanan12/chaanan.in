<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?php echo $smallTitle;?></h4>
                  </div>
                  <div class="card-body">
                     	<form method="post"	action="<?php echo base_url()?>index.php/adminController/saveteam" enctype="multipart/Form-data" >
							<div class="card-body">
								<div class="row" id="regForm">
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										    <?php if($this->uri->segment(3)=="success"){?>
										        <div class="alert alert-success col-md-12 col-lg-12 col-xs-12"> Team Registration is done successfully!</div>
										    <?php }else{
										    if($this->uri->segment(3)){?>
										     <div class="alert alert-warning col-md-12 col-lg-12 col-xs-12"> Please Try Again !</div>
										    
										   <?php  }}?>
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>MEMBER NAME<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="empname"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>JOB TITTLE<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="jobtittle"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>

                                    <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>ADDRESS<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="address"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>STATE<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															
												<select class="form-control" name="state" id="state" value ="">
					                                 <option>--Select State--</option>
					                                 <?php 
													 $this->db->distinct();
													$this->db->select("state");
													$dist=  $this->db->get("city_state");
													foreach($dist->result() as $row):?>
						<option value="<?php echo $row->state;?>"><?php echo $row->state;?></option>
					                                           <?php endforeach;?>
					                                 </select>     
					                                     
										                   
										                    <script>
														$("#state").change(function(){
															var state = $("#state").val();
															//alert(state);
															$.post("<?php echo base_url() ?>index.php/common/getCity",{state : state},function(data){
																$("#city").html(data);
															});
														});

														
														</script>

														</div>
								
                                         </div>
												</div>

										</div>
									</div>
								</div>
						<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>CITY<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															
								<select id="city" name="city" class="form-control">
								                                 <option>--Select City--</option>
								                                 </select>     
								                                 
								                                    <script type="text/javascript">

																	$("#city").change(function(){
																		var state = $("#state").val();
																		var city = $("#city").val();
																		//alert(state);
																		$.post("<?php echo base_url() ?>index.php/common/getArea",{city : city,state : state},function(data){
																			$("#area").html(data);
																		});
																	});

																	</script>

 </div>																	</div>
																	</div>	

                                         </div>
											
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>AREA<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
														
																 <select  class="form-control" id="area" name="area" >
                                 <option>--Select Area--</option>
                                 </select>     
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
	</div>

<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>PIN CODE<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"	value="" name="pincode"	id="pincode" required="required">
                        										<script>
                                                                $("#area").change(function(){
                                    								var state = $("#state").val();
                                    								var city = $("#city").val();
                                    								var area = $("#area").val();
                                    								//alert(state);
                                    								$.post("<?php echo base_url() ?>index.php/common/getPin",{area : area,city : city,state : state},function(data){
                                    									$("#pincode").val(data);
                                    								});
                                    							});
                                    						</script>

														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5">
														<label>Mobile Number<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="mobile"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>


<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5">
															<label>Gender</label>
													</div>
													<div class="col-md-7">
														<div class="form-group">

                    <select class="form-control" id="gender" name="gender"
                      value="" required="required">
                      <option value="">-Select Gender-</option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                      <option value="3">Transgender</option>
                     
                    </select>														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>EMAIL</label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="email" class="form-control"
																value="" name="email"
																id="name" >
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>


								<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">	

											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5">
														<label>Image</label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="file" class="form-control"
																value="" name="image" accept="image/*" capture="camera"
																id="image" >
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">
												    	<div class="form-group row">
													<div class="col-md-5"></div>
													<div class="col-md-7">
														<div class="form-group">
															<button type="submit" class="btn btn-primary"
																id="regisbtn">
																<i class="far fa-edit">&nbsp;Submit</i>
															</button>
														</div>
													</div>
												</div>
												    </div>
												    
										</div>
									</div>
                                    </div>
									</div>

				
					</form>

                      <div id="setValue"></div>
                      
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                     
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Mobile Number</th>
                            <th>Email Id</th>
                            <th>Pin Code</th>
                            <th>Image</th>
                             <th>Position</th>
                           
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                       if($crecord->num_rows()>0){
                          $i=1;
                        foreach($crecord->result() as $data):
                        ?>
                          <tr>
                            <td><?php echo $i;?><input type="hidden" name = "rowid<?php echo $i;?>" id ="rowid<?php echo $i;?>" value = "<?php echo $data->id;?>"></td>
                            <td class="align-middle"><?php echo $data->name;?></td>
                            <td><?php echo $data->address;?></td>
                            <td><?php echo $data->city;?></td>
                            <td><?php echo $data->state;?></td>
                            <td><?php echo $data->mobile;?></td>
                            <td><?php echo $data->email;?></td>
                    		<td><?php echo $data->pin_code;?></td>
                    		<td><img src="<?php echo base_url();?>assets/images/team/<?php echo $data->image;?>" alt="member" width="80" height="100"></td>
                    		<td> Current Position =<?php 
                    	        echo $data->position;
                    		$posnum = $this->db->get("team")->num_rows();?>
                    		 <select class="form-control" id="getpostion<?php echo $i;?>" name="getpostion<?php echo $i;?>"
                      value="" required="required">
                    		      <option value="">-Select Gender-</option>
                <?php for($j=1;$j<$posnum+1;$j++){?>   		     
                     
                      <option value="<?php echo $j;?>"><?php echo $j;?></option>
                   <?php }?>
                    </select>							
                    		<script> $("#getpostion<?php echo $i;?>").change(function(){
               var gposition = $("#getpostion<?php echo $i;?>").val();
                 var rowid = $("#rowid<?php echo $i;?>").val();
               $.ajax({
                        
                          "url": "<?php echo site_url('adminController/changePosition') ?>",
                           "method": 'POST',
                           "data": {gposition : gposition , rowid : rowid},
                           beforeSend: function(data) {
                              $("#setValue").html("<center><img src='<?php echo base_url(); ?>assets/images/loading.gif' /></center>")
                           },
                           success: function(data) {
                               if(data==1){
                                    $("#setValue").html("Updated Successfully");
                               alert("update Successfully");
                               }else{
                                 alert("Contact to Admin ");   
                               }
                            
                           },
                           error: function(data) {
                               alert("Contact to Admin ");
                           }
                       })

           });</script>
                    		</td>
                            <td><button id = "del<?php echo $i;?>" class ="btn btn-danger">Delete</button>
                            <script>
                                $("#del<?php echo $i;?>").click(function(){
                                  
                                     var rowid = $("#rowid<?php echo $i;?>").val();
                                   $.ajax({
                        
                                      "url": "<?php echo site_url('adminController/deleteTeam') ?>",
                                       "method": 'POST',
                                       "data": {rowid : rowid},
                                       beforeSend: function(data) {
                                          $("#setValue").html("<center><img src='<?php echo base_url(); ?>assets/images/loading.gif' /></center>")
                                       },
                                       success: function(data) {
                                           if(data==1){
                                               $("#setValue").html("Deleted Successfully");
                                          $("#del<?php echo $i;?>").html("Deleted")
                                           }else{
                                             $("#del<?php echo $i;?>").html("Not Deleted")
                                           }
                            
                                       },
                                       error: function(data) {
                                             $("#del<?php echo $i;?>").html("Not Deleted")
                                       }
                                   })
            
                       });
                                
                                
                            </script>
                            
                            </td>
              
                          </tr>
                          
                          <?php //} 
                          $i++; endforeach; }else{
                          echo "data not found";
                        } ?>
                          
                        </tbody>
                        
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            	</div>
            	
								</div>
							</div>
