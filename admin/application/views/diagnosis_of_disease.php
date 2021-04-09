
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Diagnosis Of Disease</h4>

						</div>
						
							<div class="card-body">
								<div class="row" id="regForm">
									
									
		<!---***********************************************************************************************************************-->	
								<div class="col-xs-12 col-md-12 col-lg-12">
										<div class="form-group row">
											<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										 <?php
										 	  if($this->session->userdata('login_type')==2){
										 	  	$this->db->where("employee_id",$this->session->userdata('customer_id'));
										 	  	$this->db->where("plan_id", 3);
										 	  		 $ap = $this->db->get("assign_plan");
										 	  		$starray = array();
										 	  		$r=1; 
										 	  		$starray['1']=0;
										 	  		if($ap->num_rows()>0){
										 	  		foreach($ap->result() as $get_ap):
										 	  		if($get_ap->sub_plan_id){
														$starray[$r]=$get_ap->sub_plan_id;
										 	  		}
										 	  		$r++; endforeach;
										 	  		}
										 	  		$this->db->where_in("id",$starray);
										 	  		$sp = $this->db->get("sub_study_plan");
										 	  		
										 	  		

							              			}else{
							              				 $sp = $this->db->get("sub_study_plan");
							              			}


										 
             													foreach($sp->result() as $r):
																
             														?>
												<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left: 8%;">
												<div class="form-group row">
													<div class="col-md-3"></div>
													<div class="col-md-9">
														<div class="form-group">
															   
															<a href="<?php echo base_url();?>index.php/customer/<?php echo $r->sub_page_name;?>">
															<button type="submit" class="btn btn-primary"
																id="">
																<i class="fas fa-arrow-circle-right">&nbsp;<?php echo $r->sub_plan_name;?></i>
															</button>
														</a>

														</div>
													</div>
												</div>

											</div>
												<?php  endforeach; ?>	


										</div>
									
																</div>
											</div>
										</div>
									</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		