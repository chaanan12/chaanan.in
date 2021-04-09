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
							<h4>Patient Exercise Habit</h4>

						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/patient/patient_exercisestatus" enctype="multipart/Form-data" norequired >
							<input type="hidden" name="pid" value="<?php echo $uri; ?>">
							<div class="card-body">
								<div class="row" id="regForm">
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>1.DOES YOUR JOB INVOLVE SITTING FOR A LARGE PART OF THE DAY.?<span title="Required" style="color: red;">*</span></label>
													</div>
												
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																name="sitting" value="1" style="height:20px; width:20px;">
																
													
														</div>
													</div>
												
													<div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																name="sitting" value="0" style="height:20px; width:20px;">
																
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
														<label>2.WHAT ARE YOUR CURRENT PHYSICAL ACTIVITY PATTERNS.?<span title="Required" style="color: red;">*</span></label>
													</div>
											</br>
											</br>
											</br>
													<div class="col-md-4">
														<div class="form-group">
															1.YOGA<input type="checkbox" class="form-control"
																name="yoga" value="yoga" style="height:20px; width:20px;">
																
													
														</div>
													</div>
												
													<div class="col-md-4">
														<div class="form-group">
															2.GYM<input type="checkbox" class="form-control"
																name="gym" value="gym" style="height:20px; width:20px;">
																
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															3.SAKHA<input type="checkbox" class="form-control"
																name="sakha" value="sakha" style="height:20px; width:20px;">
																
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															4.WALK<input type="checkbox" class="form-control"
																name="walk" value="walk" style="height:20px; width:20px;">
																
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															5.RUNNING<input type="checkbox" class="form-control"
																name="running" value="running" style="height:20px; width:20px;">
																
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															6.SWIMMING<input type="checkbox" class="form-control"
																name="swimming" value="swimming" style="height:20px; width:20px;">
																
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															7.NEVER<input type="checkbox" class="form-control"
																name="never" value="never" style="height:20px; width:20px;">
																
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															8.OTHER<input type="checkbox" class="form-control"
																name="other" value="other" style="height:20px; width:20px;">
																
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
													<div class="col-md-3">
														<label>a).FREQUENCY:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="frequency"
																 
																>
														</div>
								
                                         </div>
                                         <div class="col-md-4">
														<div class="form-group">
															<lebel>activity session per week</lebel>	
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
													<div class="col-md-3">
														<label>a).INTENSITY:<span title="Required" style="color: red;">*</span></label>
													</div>
													
												</div>
											</div>
											<div class="col-xs-4 col-md-4 col-lg-4">

												<div class="form-group row">
													<div class="col-md-3">
														<label>SEDENTARY<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-5">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="sedantary"
															>
														</div>
								
                                         </div>
                                        
												</div>
											</div>
											<div class="col-xs-4 col-md-4 col-lg-4">

												<div class="form-group row">
													<div class="col-md-3">
														<label>MODERATE<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-5">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="moderate"
																 >
														</div>
								
                                         </div>
                                       
												</div>
											</div>
											<div class="col-xs-4 col-md-4 col-lg-4">

												<div class="form-group row">
													<div class="col-md-3">
														<label>VIGOROUS<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-5">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="vigorous">
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
										
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>c).DURATION:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="duration"
																>
														</div>
								
                                         </div>
                                         <div class="col-md-5">
														<div class="form-group">
															<lebel>Minutes per session (on the average)</lebel>	
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
														<label>3.HOW LONG HAVE YOU BEEN FOLLOWING THIS ROUTINE(CHECK ONE).?<span title="Required" style="color: red;">*</span></label>
													</br>
													</br>
													</br>
													</div>
														<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															Less than4 Months<input type="radio" class="form-control"
																value="1" name="routine"
																 style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>3-6 Months</lebel>
															<input type="radio" class="form-control"
																value="2" name="routine"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															6-12 months<input type="radio" class="form-control"
																value="3" name="routine"
															style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														<div class="form-group">
															more than a year<input type="radio" class="form-control"
																value="4" name="routine"
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
													<div class="col-md-6">
														<label>4.ARE YOU INTERESTED IN CHANGING YOUR ACTIVITY ROUTINE? IF SO,PLEASE EXPLAIN.?<span title="Required" style="color: red;">*</span></label>
													
													</div>
												<div class="col-md-6">
														<div class="form-group">

															<textarea class="form-control"
																value="" name="activity"
																 ></textarea>
																
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
														<label>5.WHAT ARE YOUR FITNESS GOALS.?<span title="Required" style="color: red;">*</span></label>
													
													</div>
												<div class="col-md-6">
														<div class="form-group">

															<textarea class="form-control"
																value="male" name="fitness"
																 ></textarea>
																
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
													<div class="col-md-6">
														<label>6.HOW COMMITED ARE YOU TO IMPROVING YOUR FITNESS AT THIS TIME.?<span title="Required" style="color: red;">*</span></label>
													
													</div>
												<div class="col-md-6">
														<div class="form-group">

															<textarea class="form-control"
																value="male" name="improve_fitness" ></textarea>
																
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
														<label>7.HOW MUCH HOUR SLEEP IN 24 HOURS.?<span title="Required" style="color: red;">*</span></label>
													
													</div>
												<div class="col-md-4">
														<div class="form-group">

															<input type="text" class="form-control"
																value="" name="sleep_hour">
																
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
														<label>8.SUN EXPOSURE IN 24 HOURS.<span title="Required" style="color: red;">*</span></label>
													
													</div>
												<div class="col-md-4">
														<div class="form-group">

															<input type="text" class="form-control"
																value="" name="exposure" >
																
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
		</form>
	</div>
</div>
</div>
</div>
</div>
</div>

									
	
