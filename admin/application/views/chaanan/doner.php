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
                     	<form method="post"	action="<?php echo base_url()?>index.php/adminController/savedonar" enctype="multipart/Form-data" >
							<div class="card-body">
								<div class="row" id="regForm">
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										    <?php if($this->uri->segment(3)=="success"){?>
										        <div class="alert alert-success col-md-12 col-lg-12 col-xs-12"> Donar Registration is done successfully!</div>
										    <?php }else{
										    if($this->uri->segment(3)){?>
										     <div class="alert alert-warning col-md-12 col-lg-12 col-xs-12"> Please Try Again !</div>
										    
										   <?php  }}?>
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>DONAR NAME<span title="Required" style="color: red;">*</span></label>
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
														<label>Discription</label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="desc"
																id="desc" >
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">
												    	<div class="form-group row">
													<div class="col-md-5">
														<label>Date</label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="date" class="form-control"
																value="" name="date"
																id="date" >
														</div>
								
                                         </div>
												</div>
												    </div>
												    
										</div>
									</div>
										<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">	

											<div class="col-xs-6 col-md-6 col-lg-6">
											

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
                            <th>Mobile Number</th>
                            <th>Email Id</th>
                            <th>Donate Product</th>
                            <th>Donate Amount</th>
                            <th>Date</th>
                            <th>Image</th>
                             <th>Discription</th>
                           
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
                         
                            <td><?php echo $data->mobile;?></td>
                            <td><?php echo $data->email;?></td>
                               <td><?php echo $data->donate_product;?></td>
                            <td><?php echo $data->donate_amount;?></td>
                    		<td><?php echo $data->date;?></td>
                    		<td><img src="<?php echo base_url();?>assets/images/donar/<?php echo $data->image;?>" alt="member" width="80" height="100"></td>
                    	<td><?php echo $data->discription;?></td>
                            <td><button id = "del<?php echo $i;?>" class ="btn btn-danger">Delete</button>
                            <script>
                                $("#del<?php echo $i;?>").click(function(){
                                  
                                     var rowid = $("#rowid<?php echo $i;?>").val();
                                   $.ajax({
                        
                                      "url": "<?php echo site_url('adminController/deleteDonar') ?>",
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
