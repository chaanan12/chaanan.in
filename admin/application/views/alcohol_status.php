<?php $uri=$this->uri->segment(3); 
if($this->uri->segment(3)=="success"){
    $uri=$this->uri->segment(4);
}
?>
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Patient Smoking Status</h4>

						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/patient/patient_alcoholstatus" enctype="multipart/Form-data" >
							<input type="hidden" name="pid" value="<?php echo $uri; ?>">
							<div class="card-body">
								<div class="row" id="regForm">
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-12">
														<label>DO YOU DRINK ALCOHOL.?<span title="Required" style="color: red;">*</span></label>
													</div>
												<div class="col-md-3">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																name="answer" value="yes" style="height:20px; width:20px;">
																
													
														</div>
													</div>
												
													<div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																name="answer" value="no" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>DON'T KNOW</lebel>
															<input type="radio" class="form-control" 
																name="answer" value="other" style="height:20px; width:20px;">
																
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
													<div class="col-md-12">
														<label>DO YOU EVER DRINK ALCOHOLIC BEVERAGES.?<span title="Required" style="color: red;">*</span></label>
													</div>
												<div class="col-md-4">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																name="alcohol" value="yes_alco" style="height:20px; width:20px;">
																
													
														</div>
													</div>
												
													<div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																name="alcohol" value="no_alco" style="height:20px; width:20px;">
																
														</div>
													</div>
								
								</div>
							</div>
						</div>
					</div>
					<div id="alc" style="width:1200px;">
						<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<label>BEER<span title="Required" style="color: red;">*</span></label>
													</div>
												
													<div class="col-md-2">
														<div class="form-group">
															NONE<input type="radio" class="form-control"
																 style="height:20px; width:20px;" name="beer" value="none">
																
													
														</div>
													</div>
												
													<div class="col-md-2">
														<div class="form-group">
															OCCASIONAL<input type="radio" class="form-control"
																 style="height:20px; width:20px;" name="beer" value="occasion">
																
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															OFTEN<input type="radio" class="form-control"
																 style="height:20px; width:20px;" name="beer" value="often">
																
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
													<div class="col-md-2">
														<label>WINE<span title="Required" style="color: red;">*</span></label>
													</div>
												
													<div class="col-md-2">
														<div class="form-group">
															NONE<input type="radio" class="form-control" name="wine" value="none" 
																 style="height:20px; width:20px;">
																
													
														</div>
													</div>
												
													<div class="col-md-2">
														<div class="form-group">
															OCCASIONAL<input type="radio" class="form-control" name="wine" value="occasion" 
																 style="height:20px; width:20px;">
																
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															OFTEN<input type="radio" class="form-control" name="wine" value="often" 
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
													<div class="col-md-2">
														<label>HARD LIQUOR<span title="Required" style="color: red;">*</span></label>
													</div>
												
													<div class="col-md-2">
														<div class="form-group">
															NONE<input type="radio" class="form-control" name="hard" value="none" 
																 style="height:20px; width:20px;">
																
													
														</div>
													</div>
												
													<div class="col-md-2">
														<div class="form-group">
															OCCASIONAL<input type="radio" class="form-control" name="hard" value="occasion" 
																 style="height:20px; width:20px;">
																
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															OFTEN<input type="radio" class="form-control"
																name="hard" value="often" style="height:20px; width:20px;">
																
														</div>
													</div>
								
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
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#alc").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="yes_alco")
											{
											$("#alc").show();
											
											}
											else
											{
											
											//$("#alc").hide();
											}
											});
											});
											</script>
											<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#alc").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="no_alco")
											{
											$("#alc").hide();
											
											}
											else
											{
											
											//$("#alc").show();
											}
											});
											});
											</script>
											
		</form>
	</div>
</div>
</div>
</div>
</div>
</div>

