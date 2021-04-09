<?php $uri=$this->uri->segment(3); 
if($uri=="success"){
$uri=$this->uri->segment(4);
}?>
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Patient Smoking Status</h4>

						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/patient/patient_smokingstatus" enctype="multipart/Form-data" >
						   <input type="hidden" name="pid" value="<?php echo $uri; ?>">
							<div class="card-body">
								<div class="row" id="regForm">
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<label>ARE YOU SMOKING.?<span title="Required"  style="color: red;">*</span></label>
													</div>
												
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																name="answer" value="yes" style="height:20px; width:20px;" required>
																
													
														</div>
													</div>
												
													<div class="col-md-2" id="many">
														<div class="form-group" id="yes1">
															How many ciggerate a day.?
														<input class="form-control" type="number" name="many" id=""/>
													</div>
												</div>
										

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#many").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="yes")
											{
											$("#many").show();
											//$("#left").show();
											}
											else
											{
											$("#many").hide(); 
											//$("#left").hide();
											}
											});
											});
											</script>

												<div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																name="answer" value="no" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>PAST-SMOKER</lebel>
															<input type="radio" class="form-control" 
																name="answer" value="other" style="height:20px; width:20px;">
																
											</div>
								 </div>
								 <div class="col-md-2">
									<div class="form-group">
										 <input style="display:none;" class="form-control" placeholder="Duration" type="text" name="duration" id="duration"/>
										</div>
									</div>
									 <div class="col-md-2">
									<div class="form-group">
										 <input style="display:none;" class="form-control" placeholder="When Left" type="text" name="left" id="left"/>
										</div>

                                     </div>


											</div>
										</div>

												
											<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-4">
														<label>DOES ANYONE IN YOUR HOUSE/FAMILY SMOKE.?<span title="Required" style="color: red;">*</span></label>
													</div>
												
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																name="know" value="know" style="height:20px; width:20px;">
																
													
														</div>
													</div>
													
													<div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																name="know" value="noknow" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>DON'T KNOW</lebel>
															<input type="radio" class="form-control" 
																name="know" value="don't_know" style="height:20px; width:20px;">
																
											</div>
								 </div>
							
									


											</div>
										</div>
												
												<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-3">
														<label>DO YOU HAVE CHEWING TOBACCO.?<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															PAAN WITH MASALA<input type="checkbox" class="form-control"
																value="1" name="paan"
															 style="height:20px; width:20px;" >
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>TAMBAKOO</lebel>
															<input type="checkbox" class="form-control"
																value="1" name="tambacco"
														 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															ZARDA/VIZAPATTA KHAINI<input type="checkbox" class="form-control"
																value="1" name="zarda"
														 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														<div class="form-group">
															OTHER<input type="checkbox" class="form-control"
																value="1" name="other"
													style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>


	<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-4">
														
													</div>
													<div class="col-md-2">
														<div class="form-group">
															
														</div>
													</div>
												
                                       
												</div>


											</div>
											
										</div>
									</div>










<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="other")
											{
											$("#duration").show();
											$("#left").show();
											}
											else
											{
											$("#duration").hide(); 
											$("#left").hide();
											}
											});
											});
											</script>




































									
	<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-12 col-md-12 col-lg-12">
												<div class="form-group row">
													<div class="col-md-3"></div>
													<div class="col-md-9">
														<div class="form-group">
															<button type="submit" class="btn btn-primary"
																id="regisbtn" style="margin-left:70%;">
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
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

