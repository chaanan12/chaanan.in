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
                     <form method="post" action="<?php echo base_url()?>apanelForms/coupon" enctype="multipart/Form-data" >
							<div class="card-body">
								<div class="row" id="regForm">
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										    <?php if($this->uri->segment(3)=="success"){?>
										        <div class="alert alert-success col-md-12 col-lg-12 col-xs-12">Product is done successfully entered!</div>
										    <?php }else{
										    if($this->uri->segment(3)){?>
										     <div class="alert alert-warning col-md-12 col-lg-12 col-xs-12"> Please Try Again !</div>
										    
										   <?php  }}?>
											
												<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5"><label>Coupon Code</label></div>
													<div class="col-md-7">
													    <div class="form-group">
                                                            <input type="text" class="form-control" name="c_code">
														</div>
								                    </div>
												</div>
                                            </div>
                                            
												<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5"><label>Manage Coupon</label></div>
													<div class="col-md-7">
													    <div class="form-group">
                                                             <select required="required" name ="apply_for"  id ="country" class="form-control">
		                                                  <option value="">Select Country</option>
		                                                  		   <option value = "1">APPLY AT ONCE FOR ALL</option>
		                                                  		        <option value = "0">INDIVIDUAL</option>
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
												<div class="col-md-5"><label>Amount</label></div>
													<div class="col-md-7">
														<div class="form-group">
														<input type="text" name="amount" id="amount" class="form-control">	
														
														</div>
													</div>
												</div>
												    </div>
										
                                            	<div class="col-xs-6 col-md-6 col-lg-6">
												    	<div class="form-group row">
												<div class="col-md-5"><label>Status</label></div>
													<div class="col-md-7">
														<div class="form-group">
															
															<select required="required" name ="status"  id ="mainCategory" class="form-control">
		                                                  <option value="">Select status</option>
		                                                  		   <option value = "1">Active</option>
		                                                  		        <option value = "0">Inactive</option>
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
													<div class="col-md-5"></div>
													<div class="col-md-7">
														<div class="form-group">
															<button type="submit" class="btn btn-primary">
																<i class="far fa-edit">&nbsp;Submit</i>
															</button>
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
                            <th>Coupon code</th>
                            <th>Apply For</th>
                            <th>Amount</th>
                            <th>Status</th>
                           </tr>
                             </thead>
                              <tbody>
                          <?php $coupn=$this->db->get("coupon");
                          if($coupn->num_rows>0){
                              $i=1;
                          foreach($coupn->result() as $cd): ?>
                         <tr>
                            
                             <td><?php echo $i;?></td>
                             <td><?php echo $cd->coupon_code;?></td>
                            
                             <td><?php if($cd->apply_for==1){ 
                                 echo "Apply for all";
                             }else {
                             echo "individual";}?></td>
                              <td><?php echo $cd->amount;?></td>
                             <td><?php if($cd->status==1){ 
                                 echo "Active";
                             }else {
                             echo "Inactive";}?></td>
                             
                             </tr>
                             <?php   $i++; ?>
                    <?php endforeach;} 
                    ?></tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
       </div>
</div>
