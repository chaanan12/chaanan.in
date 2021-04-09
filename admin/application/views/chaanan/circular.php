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
                     	<form method="post"	action="<?php echo base_url()?>index.php/adminController/savecircular" enctype="multipart/Form-data" >
							<div class="card-body">
								<div class="row" id="regForm">
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										    <?php if($this->uri->segment(3)=="success"){?>
										        <div class="alert alert-success col-md-12 col-lg-12 col-xs-12"> Circular Registration is done successfully!</div>
										    <?php }else{
										    if($this->uri->segment(3)){?>
										     <div class="alert alert-warning col-md-12 col-lg-12 col-xs-12"> Please Try Again !</div>
										    
										   <?php  }}?>
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>Circular Number<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="circularno"
																 required="required">
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>Circular Date<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="date" class="form-control"
																value="" name="circulardate"
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
															<label>Select Type</label>
													</div>
													<div class="col-md-7">
														<div class="form-group">

                    <select class="form-control" id="circulartype" name="circulartype"
                      value="" required="required">
                      <option value="">-Select Type-</option>
                      <option value="1">State</option>
                      <option value="2">National</option>
                     
                     
                    </select>														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

											<div class="form-group row">
													<div class="col-md-5">
														<label>Image</label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="file" class="form-control"
																value="" name="image"
																id="image" >
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
                            <th>Circular Number</th>
                            <th>Date</th>
                            <th>Discription</th>
                            <th>Type</th>
                            <th>view</th></th>
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
                            <td class="align-middle"><?php echo $data->circular_no;?></td>
                            <td><?php echo $data->date;?></td>
                            <td><?php echo $data->discription;?></td>
                            <td><?php if($data->type==1){echo "State";}else{ echo "National";}?></td>
                           
                            <td><a href="<?php echo base_url();?>assets/images/circular/<?php echo $data->image ;?>"><?php echo $data->image;?></a></td>
                    	
                            <td><button id = "del<?php echo $i;?>" class ="btn btn-danger">Delete</button>
                            <script>
                                $("#del<?php echo $i;?>").click(function(){
                                  
                                     var rowid = $("#rowid<?php echo $i;?>").val();
                                   $.ajax({
                        
                                      "url": "<?php echo site_url('adminController/deleteCircular') ?>",
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
