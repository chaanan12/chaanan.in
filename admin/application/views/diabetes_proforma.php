
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Hypertension_Proforma</h4>

						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/customer/diabetes_proforma" enctype="multipart/Form-data" >
							<div class="card-body">
								<div class="row" id="regForm">
		<!---***********************************************************************************************************************-->	
							<div class="col-xs-12 col-md-12 col-lg-12">
											
												<div class="form-group row">
													<div class="col-md-5">
														<label>1.HOW LONG HAVE YOU KNOWN THAT YOU HAVE DIABETES?</label>
														
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="knownaboutdiabetes"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
									

			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-4">
														<label>2.IS THERE A FAMILY HISTORY OF DIABETES?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="famhis1" name="familyhistory"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="famhis2" name="familyhistory"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 											<div class="col-md-3">
														<div class="form-group">
															<textarea name="whoom" id="famhisdetail" placeholder="IF YES, WHOOM?" class="form-control"></textarea>

														</div>
														</div>

                                     </div>
                                 </div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#famhisdetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="famhis1")
											{
											$("#famhisdetail").show();
											}
											else
											{
											$("#famhisdetail").hide();
											}
											});
											});
</script>	
								
		<!---***********************************************************************************************************************-->	
		<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-4">
														<label>3.DO YOU TEST YOUR BLOOD SUGAR LEVELS?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="suglev1" name="blood_sugar"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="suglev2" name="blood_sugar"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NOT APPLICABLE<input type="radio" class="form-control"
																value="suglev3" name="blood_sugar"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-3">
														<div class="form-group">
															<textarea name="bloodsugardetail" id="sugardetail" placeholder="IF NO, WHY?" class="form-control"></textarea>

														</div>
														</div>
												</div>


											</div>
										
									<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#sugardetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="suglev2")
											{
											$("#sugardetail").show();
											}
											else
											{
											$("#sugardetail").hide();
											}
											});
											});
</script>
			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-12">
														<label>NUMBER OF TIMES YOU TEST EACH DAY:</label>
														
													</div>
													<div class="col-xs-2 col-md-2 col-lg-2" style="margin-left:10%;">
														<div class="form-group row">
													<div class="col-md-3">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-3" style="margin-left:20%;">
														<label>ONE</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="one" value="one"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-2 col-md-2 col-lg-2">
														<div class="form-group row">
													<div class="col-md-2">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>TWO</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="two" name="two"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												


											</div>
										</div>
											<div class="col-xs-2 col-md-2 col-lg-2">
														<div class="form-group row">
													<div class="col-md-2">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-4" style="margin-left:20%;">
														<label>THREE</label>
													</div>
													<div class="col-md-5">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="three" name="three"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-2 col-md-2 col-lg-2">
														<div class="form-group row">
													<div class="col-md-2">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-4" style="margin-left:20%;">
														<label>MORE</label>
													</div>
													<div class="col-md-5">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="more" name="more"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>

												</div>


											</div>
			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-12">
														<label>4.WHEN DO YOU TEST? </label>
														
													</div>
													<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
														<div class="form-group row">
													<div class="col-md-3">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:20%;">
														<label>Before Breakfast</label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															<input type="radio" class="form-control"
																 name="whentest" value="breakfast"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-3 col-md-3 col-lg-3">
														<div class="form-group row">
													<div class="col-md-2">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-8" style="margin-left:20%;">
														<label>Before Lunch /Dinner</label>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															<input type="radio" class="form-control"
																value="lunch" name="whentest"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												


											</div>
										</div>
										<div class="col-xs-3 col-md-3 col-lg-3">
														<div class="form-group row">
													<div class="col-md-2">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-8" style="margin-left:20%;">
														<label>After Meals At Bed Time</label>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															<input type="radio" class="form-control"
																value="meal" name="whentest"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												


											</div>
										</div>
									</div>


											</div>
			<!---***********************************************************************************************************************-->	
				<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-4">
														<label>5.HAVE YOU HAD LOW BLOOD SUGARS?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="yeslbp" name="lbp"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="nolbp" name="lbp"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                      </div>
								</div>
							
								<div class="col-xs-12 col-md-12 col-lg-12" id="insulin">
													
												<div class="form-group row">
													<div class="col-md-4">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="regular" placeholder="REGULAR">
																
														</div>	
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="mixtard_insulin" placeholder="MIXTARD INSULIN">
																
														</div>
								
                                         </div>
                                         <div class="col-md-4">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="oral_hypoglycemic_agents" placeholder="Oral Hypoglycemic Agents">
																
														</div>
								
                                         </div>
                                      </div>
								</div>
							
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#insulin").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="yeslbp")
											{
											$("#insulin").show();
											}
											else
											{
											$("#insulin").hide();
											}
											});
											});
</script>
			<!---***********************************************************************************************************************-->
				<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										<div class="col-md-12">
														<label>6.WHAT TIME(s) OF DAY DO MOST OF YOUR LOW BLOOD SUGARS OCCUR ?</label>
													</div>
											<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
														<div class="form-group row">
													<div class="col-md-3">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:20%;">
														<label>MORNING</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="morning" value="morning"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-3 col-md-3 col-lg-3">
														<div class="form-group row">
													<div class="col-md-2">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>MID DAY</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="midday" name="midday"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-3 col-md-3 col-lg-3">
														<div class="form-group row">
													<div class="col-md-2">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>AFTERNOON</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="afternoon" name="afternoon"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>

										<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
													
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:20%;">
														<label>EVENING</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="evening" value="evening"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-3 col-md-3 col-lg-3">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>NIGHT</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="night" name="night"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										
										</div>
									</div>

		<!---***********************************************************************************************************************-->
		<div class="col-md-12 col-lg-12 col-xs-12">
										

												<div class="form-group row">
													<div class="col-md-4">
														<label>7.HOW DO YOU TREAT LOW BLOOD SUGARS?  </label>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="treatlowbloodsugar">
														</div>
								
                                         </div>
												</div>


											</div>
									
			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-7">
														<label>8.HAVE YOU EVER LOST SENSE OR REQUIRED ASSISTANCE TO REVERSE LOW BLOOD SUGAR?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="yeslostsense" name="lostsense"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="nolostsense" name="lostsense"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-3">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="bloodsugar" placeholder="when did it last occur?" id="bldsgrdetail">
																
														</div>
								
                                         </div>
                                      </div>
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#bldsgrdetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="blsug1")
											{
											$("#bldsgrdetail").show();
											}
											else
											{
											$("#bldsgrdetail").hide();
											}
											});
											});
</script>
			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5">
														<label>9.DO YOU EVER HAVE SEEN HbA1c BLOOD SUGAR LEVELS?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="hbalc1" name="hbalc"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="hbalc2" name="hbalc"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-3">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="last_level" placeholder="What was last level?" id="hbalcdetail">
																
														</div>
								
                                         </div>
                                      </div>
								</div>

			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12" id="hbalcwhen">
											
												<div class="form-group row">
														<div class="col-xs-2 col-md-2 col-lg-2" style="margin-left:10%;">
														<div class="form-group row">
													<div class="col-md-3">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-3" style="margin-left:20%;">
														<label>DAILY</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="daily" value="daily"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-2 col-md-2 col-lg-2">
														<div class="form-group row">
													<div class="col-md-2">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>WEEKLY</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="week" name="weekly"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-2 col-md-2 col-lg-2">
														<div class="form-group row">
													<div class="col-md-2">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-4" style="margin-left:20%;">
														<label>MONTH</label>
													</div>
													<div class="col-md-5">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="month" name="monthly"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-2 col-md-2 col-lg-2">
														<div class="form-group row">
													<div class="col-md-2">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-3" style="margin-left:20%;">
														<label>OTHER</label>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="other" name="other"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>

												</div>
											</div>
											<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#hbalcdetail").hide();
											$("#hbalcwhen").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="hbalc1")
											{
											$("#hbalcdetail").show();
												$("#hbalcwhen").show();
											}
											else
											{
											$("#hbalcdetail").hide();
											$("#hbalcwhen").hide();
											}
											});
											});
</script>
			<!---***********************************************************************************************************************-->
				<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										<div class="col-md-12">
														<label>10.WHAT TIME(s) OF DAY DO MOST OF YOUR HIGH BLOOD SUGAR OCCUR? ?</label>
													</div>
											<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
														<div class="form-group row">
													<div class="col-md-3">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:20%;">
														<label>MORNING</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="bpmorning" value="bpmorning"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-3 col-md-3 col-lg-3">
														<div class="form-group row">
													<div class="col-md-2">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>MID DAY</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="bpmidday" name="bpmidday"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-3 col-md-3 col-lg-3">
														<div class="form-group row">
													<div class="col-md-2">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>AFTERNOON</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="afternoon" name="bpafternoon"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>

										<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
													
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:20%;">
														<label>EVENING</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="bpevening" value="evening"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-3 col-md-3 col-lg-3">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>NIGHT</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="night" name="at_night"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										
										</div>
									</div>

			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-12">
														<label>11.HOW DO YOU TREAT HIGH BLOOD SUGARS?</label>
														
													</div>
												</br>
												</br>
												</br>
													<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
													
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:20%;">
														<label>SELF-TREATED</label>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															<input type="radio" class="form-control"
																value="selftreat" name="treatsugar"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                       
												</div>


											</div>
                                         <div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
													
												<div class="form-group row">
													<div class="col-md-7" style="margin-left:20%;">
														<label>PHYSICIAN ADVISE</label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															<input type="radio" class="form-control"
																value="physicianadvise" name="treatsugar"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											 <div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:15%;" id="selftreated">
													
												<div class="form-group row">
													
													<div class="col-md-12">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="addition_information">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:15%;" id="physicianadvisedetail">
													
												<div class="form-group row">
													
													<div class="col-md-12">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="addition_information">
																
														</div>
								
                                         </div>
												</div>


											</div>
                                         
                                      </div>
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#selftreated").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="selftreat")
											{
											$("#selftreated").show();
											//	$("#hbalcwhen").show();
											}
											
											});
											});
</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#physicianadvisedetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="physicianadvise")
											{
											$("#physicianadvisedetail").show();
											//	$("#hbalcwhen").show();
											}
											
											});
											});
</script>
			<!---***********************************************************************************************************************-->	
				<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-12">
														<label>12.DO YOU HAVE ANY OTHER HEALTH PROBLEMS?<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												</br>
												</br>
												<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>1.High Blood Pressure </lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="hbp1" name="hbpressure"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="hbp2" name="hbpressure"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>

                                         <div class="col-md-4">
														<div class="form-group">
															<textarea name="hbpressuredtl" id="hbpressuredetail" placeholder="MEDICINE" class="form-control"></textarea>

														</div>
														</div>
                                         		</div>
                                         	
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#hbpressuredetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="hbp1")
											{
											$("#hbpressuredetail").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#hbpressuredetail").hide();
											}
											});
											});
</script>
									<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												<div class="col-md-2">
												<div class="form-group">
												</div>
											</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>2.Heart Disease </lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="hrtdisyes" name="hrtdisease"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="hrtdisno" name="hrtdisease"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>

                                         <div class="col-md-4">
														<div class="form-group">
															<textarea name="hrtdiseasedetail" id="hrtdiseasedetail" placeholder="MEDICINE " class="form-control"></textarea>

														</div>
														</div>
                                         		</div>
                                         	
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#hrtdiseasedetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="hrtdisyes")
											{
											$("#hrtdiseasedetail").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#hrtdiseasedetail").hide();
											}
											});
											});
</script>
								<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												<div class="col-md-2">
												<div class="form-group">
												</div>
											</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>3.High Cholesterol</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="hghcholeyes" name="hghcholestrol"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="hghcholeno" name="hghcholestrol"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>

                                         <div class="col-md-4">
														<div class="form-group">
															<textarea name="hghcholestroldetail" id="hghcholestroldetail" placeholder="MEDICINE " class="form-control"></textarea>

														</div>
														</div>
                                         		</div>
                                         	
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#hghcholestroldetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="hghcholeyes")
											{
											$("#hghcholestroldetail").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#hghcholestroldetail").hide();
											}
											});
											});
</script>
									<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												<div class="col-md-2">
												<div class="form-group">
												</div>
											</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>4.High Triglycerides.</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="hghtrigyes" name="hghtrigly"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="hghtrigno" name="hghtrigly"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>

                                         <div class="col-md-4">
														<div class="form-group">
															<textarea name="hghtriglydetail" id="hghtriglydetail" placeholder="MEDICINE " class="form-control"></textarea>

														</div>
														</div>
                                         		</div>
                                         	
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#hghtriglydetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="hghtrigyes")
											{
											$("#hghtriglydetail").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#hghtriglydetail").hide();
											}
											});
											});
</script>
								<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												<div class="col-md-2">
												<div class="form-group">
												</div>
											</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>5.Glaucoma/ Cataract.</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="glaucomayes" name="glaucoma"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="glaucomano" name="glaucoma"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>

                                         <div class="col-md-4">
														<div class="form-group">
															<textarea name="glaucomadetail" id="glaucomadetail" placeholder="MEDICINE " class="form-control"></textarea>

														</div>
														</div>
                                         		</div>
                                         	
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#glaucomadetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="glaucomayes")
											{
											$("#glaucomadetail").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#glaucomadetail").hide();
											}
											});
											});
</script>
								<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												<div class="col-md-2">
												<div class="form-group">
												</div>
											</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>6.Stroke</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="stroke1" name="stroke"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="stroke2" name="stroke"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>

                                         <div class="col-md-4">
														<div class="form-group">
															<textarea name="strokedetail" id="strokedetail" placeholder="MEDICINE " class="form-control"></textarea>

														</div>
														</div>
                                         		</div>
                                         	
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#strokedetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="stroke1")
											{
											$("#strokedetail").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#strokedetail").hide();
											}
											});
											});
</script>
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												<div class="col-md-2">
												<div class="form-group">
												</div>
											</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>7.Retinopathy (EYE)</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="retina1" name="retinopathy"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="retina2" name="retinopathy"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>

                                         <div class="col-md-4">
														<div class="form-group">
															<textarea name="retinopathydetail" id="retinopathydetail" placeholder="MEDICINE " class="form-control"></textarea>

														</div>
														</div>
                                         		</div>
                                         	
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#retinopathydetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="retina1")
											{
											$("#retinopathydetail").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#retinopathydetail").hide();
											}
											});
											});
</script>
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												<div class="col-md-2">
												<div class="form-group">
												</div>
											</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>8.Kidney Problems</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="kdnyprblmyes" name="kidneyproblem"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="kdnyprblmno" name="kidneyproblem"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>

                                         <div class="col-md-4">
														<div class="form-group">
															<textarea name="kidneyprobdetail" id="kidneyproblemdetail" placeholder="MEDICINE " class="form-control"></textarea>

														</div>
														</div>
                                         		</div>
                                         	
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#kidneyproblemdetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="kdnyprblmyes")
											{
											$("#kidneyproblemdetail").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#kidneyproblemdetail").hide();
											}
											});
											});
</script>
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												<div class="col-md-2">
												<div class="form-group">
												</div>
											</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>9.Neuropathy (NERVE)</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="nerveyes" name="neuropathy"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="nerveno" name="neuropathy"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>

                                         <div class="col-md-4">
														<div class="form-group">
															<textarea name="neuropathydetail" id="neuropathydetail" placeholder="MEDICINE " class="form-control"></textarea>

														</div>
														</div>
                                         		</div>
                                         	
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#neuropathydetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="nerveyes")
											{
											$("#neuropathydetail").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#neuropathydetail").hide();
											}
											});
											});
</script>
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												<div class="col-md-2">
												<div class="form-group">
												</div>
											</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>10.Teeth or gum.</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="teeth1" name="teethndgum"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="teeth2" name="teethndgum"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>

                                         <div class="col-md-4">
														<div class="form-group">
															<textarea name="teethndgumdetail" id="teethndgumdetail" placeholder="MEDICINE " class="form-control"></textarea>

														</div>
														</div>
                                         		</div>
                                         	
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#teethndgumdetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="teeth1")
											{
											$("#teethndgumdetail").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#teethndgumdetail").hide();
											}
											});
											});
</script>
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												<div class="col-md-2">
												<div class="form-group">
												</div>
											</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>11.Osteoporosis</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="osteoyes" name="osteoporosis"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="osteono" name="osteoporosis"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>

                                         <div class="col-md-4">
														<div class="form-group">
															<textarea name="osteoporosisdetail" id="osteodetail" placeholder="MEDICINE " class="form-control"></textarea>

														</div>
														</div>
                                         		</div>
                                         	
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#osteodetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="osteoyes")
											{
											$("#osteodetail").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#osteodetail").hide();
											}
											});
											});
</script>
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												<div class="col-md-2">
												<div class="form-group">
												</div>
											</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>12.Sexual dysfunction</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="dysfuncyes" name="dysfunction"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="dysfuncno" name="dysfunction"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>

                                         <div class="col-md-4">
														<div class="form-group">
															<textarea name="sexual_medicine" id="dysfuncdetail" placeholder="MEDICINE " class="form-control"></textarea>

														</div>
														</div>
                                         		</div>
                                         	
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#dysfuncdetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="dysfunc1")
											{
											$("#dysfuncdetail").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#dysfuncdetail").hide();
											}
											});
											});
</script>
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												<div class="col-md-2">
												<div class="form-group">
												</div>
											</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>13.Organ transplant</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="organ1" name="organ_transplant"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="organ2" name="organ_transplant"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>

                                         <div class="col-md-4">
														<div class="form-group">
															<textarea name="Organ_transplant_medicine" id="organtransdetail" placeholder="MEDICINE " class="form-control"></textarea>

														</div>
														</div>
                                         		</div>
                                         	
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#organtransdetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="organ1")
											{
											$("#organtransdetail").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#organtransdetail").hide();
											}
											});
											});
</script>
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												<div class="col-md-2">
												<div class="form-group">
												</div>
											</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>14.Thyroid dysfunction</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="thyroidyes" name="thyroiddys"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="thyroidno" name="thyroiddys"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>

                                         <div class="col-md-4">
														<div class="form-group">
															<textarea name="thyroiddysdetail" id="thyroiddetail" placeholder="MEDICINE " class="form-control"></textarea>

														</div>
														</div>
                                         		</div>
                                         	
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#thyroiddetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="thyroidyes")
											{
											$("#thyroiddetail").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#thyroiddetail").hide();
											}
											});
											});
</script>
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												<div class="col-md-2">
												<div class="form-group">
												</div>
											</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>15.Polycystic ovarian disease</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="ovarianyes" name="polycystic"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="ovarianno" name="polycystic"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>

                                         <div class="col-md-4">
														<div class="form-group">
															<textarea name="polycysticdetail" id="ovariandetail" placeholder="MEDICINE " class="form-control"></textarea>

														</div>
														</div>
                                         		</div>
                                         	
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#ovariandetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="ovarianyes")
											{
											$("#ovariandetail").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#ovariandetail").hide();
											}
											});
											});
</script>
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												<div class="col-md-2">
												<div class="form-group">
												</div>
											</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>16.Other</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="other1" name="others"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="other2" name="others"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>

                                         <div class="col-md-4">
														<div class="form-group">
															<textarea name="" id="otherdetail" placeholder="MEDICINE " class="form-control"></textarea>

														</div>
														</div>
                                         		</div>
                                         	
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#otherdetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="other1")
											{
											$("#otherdetail").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#otherdetail").hide();
											}
											});
											});
</script>
		<!---***********************************************************************************************************************-->
		<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5">
														<label>13.DO YOU HAVE ANY COMPLICATION OF DIABETES?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="compldiabetesyes" name="complication"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="compldiabetesno" name="complication"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                                <div class="col-md-4">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="compldiabetesdetail" placeholder="If Yes, Please list any medications you take and when" id="complicationdetail">
																
														</div>
								
                                         </div>
                                      </div>
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#complicationdetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="compldiabetesyes")
											{
											$("#complicationdetail").show();
											}
											else
											{
											$("#complicationdetail").hide();
											}
											});
											});
</script>
			<!---***********************************************************************************************************************-->	
				<div class="col-xs-12 col-md-12 col-lg-12">
													
													<div class="form-group row">
													<div class="col-md-4" style="margin-left:10%;">
														<label>CAN YOU SEE WELL WITH LENSES?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="lense"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="lense"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         
                            </div>
                        </div>
			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													<div class="col-md-12">
														<label>14. DIABETES MEDICATIONS</label>
														
													</div>
												</br>
												</br>
												<div class="form-group row">
													<div class="col-md-1">
													</div>
													<div class="col-md-3">
														<label>A.Do you take pills for your diabetes? </label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="take_pills_yes" name="take_pills"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="take_pills_no" name="take_pills"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         
                                      </div>
								</div>

			<!---***********************************************************************************************************************-->	
					<div class="col-xs-12 col-md-12 col-lg-12" id="pilltype">
											<div class="form-group row">
													<div class="col-md-12">
														<label>If yes, please list type of pill, time of day and how long you have been taking it: </label>
														
													</div>
													<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
														
												<div class="form-group row">
													
													<div class="col-md-12">
														<div class="form-group">
															<input type="text" class="form-control"
																 name="type_of_pill" value="" placeholder="TYPE OF PILL">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-3 col-md-3 col-lg-3">
														
												<div class="form-group row">
													
													<div class="col-md-12">
														<div class="form-group">
															<input type="text" class="form-control"
																 name="time_of_day" value="" placeholder="TIME OF DAY">
																
														</div>
								
                                         </div>
												</div>


											</div>
										<div class="col-xs-3 col-md-3 col-lg-3">
														
												<div class="form-group row">
													
													<div class="col-md-12">
														<div class="form-group">
															<input type="text" class="form-control"
																 name="duration_of_use" value="" placeholder="Duration of use(for how long?)">
																
														</div>
								
                                         </div>
												</div>


											</div>
									</div>


											</div>
											<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#pilltype").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="take_pills_yes")
											{
											$("#pilltype").show();
											}
											else
											{
											$("#pilltype").hide();
											}
											});
											});
</script>
			<!---***********************************************************************************************************************-->	
	<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-4">
														<label>15.DO YOU TAKE INSULIN ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="takeinsulin" name="take_insulin"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="notakeinsulin" name="take_insulin"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                      </div>
								</div>
							
								<div class="col-xs-12 col-md-12 col-lg-12" id="takeinsulindetail">
													
												<div class="form-group row">
													<div class="col-md-6">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="regular_insulin" placeholder="REGULAR">
																
														</div>	
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="take_mixtard_insulin" placeholder="MIXTARD INSULIN">
																
														</div>
								
                                         </div>
                                        
                                      </div>
								</div>
							
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#takeinsulindetail").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="takeinsulin")
											{
											$("#takeinsulindetail").show();
											}
											else
											{
											$("#takeinsulindetail").hide();
											}
											});
											});
</script>


			<!---***********************************************************************************************************************-->	
			<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										<div class="col-md-12">
														<label>10.HOW OFTEN DO YOU SEE YOUR DOCTOR ?</label>
													</div>
												</br>
												</br>
												</br>

											<div class="col-xs-3 col-md-3 col-lg-3" >
														
												<div class="form-group row">
													<div class="col-md-4" style="margin-left:20%;">
														<label>Monthly</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="monthly" value="monthly"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-3 col-md-3 col-lg-3">
														
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:20%;">
														<label>Every 3Month</label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="every_3month" name="every_3month"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											
													<div class="col-xs-3 col-md-3 col-lg-3">
													
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:20%;">
														<label>Every 6Months</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="every_6month" value="every_6month"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-3 col-md-3 col-lg-3">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>Not Visited</label>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="not_visited" value="not_visited"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>


											</div>
										</div>
									</div>
</div>
										
			<!---***********************************************************************************************************************-->
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="form-group row">
													<div class="col-md-5">
														<label>17. WHEN DID YOU TAKECHECKUP OF  YOUR EYE DOCTOR LAST ? </label>
														
													</div>
												
												
												
                                         <div class="col-md-3">
														<div class="form-group">
															<input type="date" class="form-control"
																value="" name="last_eye_checkup">
																
														</div>
								
                                         </div>
                                         
                                      </div>
								</div>
	
			<!---***********************************************************************************************************************-->	
				<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										<div class="col-md-12">
														<label>18.HAVING DIABETES MAKES ME..</label>
													</div>
											<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
														<div class="form-group row">
													<div class="col-md-3">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:20%;">
														<label>ANGRY</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="angry" value="angry"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-3 col-md-3 col-lg-3">
														<div class="form-group row">
													<div class="col-md-2">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>AFRAID</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="afraid" name="afraid"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-3 col-md-3 col-lg-3">
														<div class="form-group row">
													<div class="col-md-2">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>CONFUSED</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="confused" name="confused"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>

										<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
													
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:20%;">
														<label>SAD</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="sad" value="sad"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-3 col-md-3 col-lg-3">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>UPSET</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="upset" name="upset"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										
										</div>
									</div>

		<!---***********************************************************************************************************************-->
		<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="form-group row">
													<div class="col-md-3" style="margin-left:5%;">
														<label>FFEL LIKE I SHOULD EAT BETTER Other </label>
														
													</div>
												
												
												
                                         <div class="col-md-3">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="eat_better_other">
																
														</div>
								
                                         </div>
                                         
                                      </div>
								</div>
			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-4">
														<label>19.IS THERE MUCH STREES IN YOUR LIFE</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="yesstrees" name="much_stresss"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="nostrees" name="much_stresss"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-3">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="stress_example" placeholder="EXAMPLE?" id="stressexmple">
																
														</div>
								
                                         </div>
                                      </div>
								</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#stressexmple").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="yesstrees")
											{
											$("#stressexmple").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#stressexmple").hide();
											}
											});
											});
</script>

			<!---***********************************************************************************************************************-->	

<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="form-group row">
													<div class="col-md-5">
														<label>20.WHAT DO YOU DO TO HANDLE STREES IN YOUR LIFE?</label>
														
													</div>
												
												
												
                                         <div class="col-md-3">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="handle_stress">
																
														</div>
								
                                         </div>
                                         
                                      </div>
								</div>
<!---***********************************************************************************************************************-->	
<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-3">
														<label>21.DO YOU EVER GET DEPRESSED ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="everdepressedyes" name="depressed"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="everdepressedno" name="depressed"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-3">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="depressed_example" placeholder="EXAMPLE?" id="everdepressedexmple">
																
														</div>
								
                                         </div>
                                      </div>
								</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#everdepressedexmple").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="everdepressedyes")
											{
											$("#everdepressedexmple").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#everdepressedexmple").hide();
											}
											});
											});
</script>

			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-4">
														<label>22.DO YOU FOLLOW DIABETES DIET PLAN ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="dietplan"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="dietplan"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         
                                      </div>
								</div>
			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>23.DO YOU FOLLOW ANY DIETARY RESTRICTIONS OR SPECIAL MEALS ?</label>
														
													</div>
											<div class="col-xs-2 col-md-2 col-lg-2">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>VEGETERIAN</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="radio" class="form-control"
																 name="specialmeal" value="vegeterian"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-2 col-md-2 col-lg-2">
													
												<div class="form-group row">
													<div class="col-md-4">
														<label>VEGAN</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="radio" class="form-control"
																 name="specialmeal" value="vegan"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-2 col-md-2 col-lg-2">
													
												<div class="form-group row">
													<div class="col-md-3">
														<label>BOTH</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="radio" class="form-control"
																 name="specialmeal" value="both"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
                                         
                                      </div>
								</div>
			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12" id="carbohydrates">
													
												<div class="form-group row">
													
											<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>Low Crbohydrates</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="low_crbohydrate" value="lowcrbohydrate"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-3 col-md-3 col-lg-3"style="margin-left:5%;">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>Low Fat/Cholestrol</label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="low_cholestrol" value="lowcholestrol"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
													
												<div class="form-group row">
													<div class="col-md-2">
														<label>Other:</label>
													</div>
													<div class="col-md-10">
														<div class="form-group">
															<input type="text" class="form-control"
																 name="other_meal" value=""
																  >
																
														</div>
								
                                         </div>
												</div>


											</div>
                                         
                                      </div>
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#carbohydrates").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="vegeterian")
											{
											$("#carbohydrates").show();
											
											}
										
											});
											});
</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#carbohydrates").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="both")
											{
											$("#carbohydrates").show();
											
											}
											
											});
											});
</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#carbohydrates").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="vegan")
											{
											$("#carbohydrates").show();
											
											}
											
											});
											});
</script>
<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>24.HAS YOUR WEIGHT ANY CHANGE NOTICE IN THE LAST 6 MONTHS?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="change_weight"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="change_weight"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         
                                      </div>
								</div>

			<!---***********************************************************************************************************************-->	
<div class="col-xs-12 col-md-12 col-lg-12" id="howmany">
													
												<div class="form-group row">
													<div class="col-xs-6 col-md-6 col-lg-6" >
													
												<div class="form-group row">
													<div class="col-md-1" style="margin-left:10%;">
														<label>GAIN</label>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="gain" value="gain"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-6">
														<div class="form-group">
															<input type="text" class="form-control"
																 name="gain_weight_in_kg" value="" id="gaindetail" placeholder="HOW MANY KILOGRAMS ?">
																
														</div>
								
                                         </div>
												</div>


											</div>
                                   <div class="col-xs-6 col-md-6 col-lg-6">
													
												<div class="form-group row">
													<div class="col-md-1">
														<label>LOSS</label>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="loss" value="loss"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-6">
														<div class="form-group">
															<input type="text" class="form-control"
																 name="loss_weight_in_kg" value="" placeholder="HOW MANY KILOGRAMS ?">
																
														</div>
								
                                         </div>
												</div>


											</div>
								</div>
							</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#howmany").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="changeweight1")
											{
											$("#howmany").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#howmany").hide();
											}
											});
											});
</script>
			<!---***********************************************************************************************************************-->	
<div class="col-xs-12 col-md-12 col-lg-12" id="currentmost">
													
												<div class="form-group row">
												 <div class="col-xs-6 col-md-6 col-lg-6">
													
												<div class="form-group row">
													<div class="col-md-2" style="margin-left:10%;">
														<label>HEIGHT</label>
													</div>
													
                                         <div class="col-md-6">
														<div class="form-group">
															<input type="text" class="form-control"
																 name="height" value="" placeholder="Your Height">
																
														</div>
								
                                         </div>
												</div>


											</div>
                                   <div class="col-xs-6 col-md-6 col-lg-6">
													
												<div class="form-group row">
													<div class="col-md-2">
														<label>AGE</label>
													</div>
													
                                         <div class="col-md-6">
														<div class="form-group">
															<input type="text" class="form-control"
																 name="age" value="" placeholder="Your Age">
																
														</div>
								
                                         </div>
												</div>


											</div>
								</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#currentmost").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="changeweight1")
											{
											$("#currentmost").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#currentmost").hide();
											}
											});
											});
</script>
<!---***********************************************************************************************************************-->	
<div class="col-xs-12 col-md-12 col-lg-12" id="recentknown">
					<div class="form-group row">
													<div class="col-md-3" style="margin-left: 10%;">
														<label>Current /most recent known weight</label>
														
													</div>
												
												
												
                                         <div class="col-md-5">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="current_weight">
																
														</div>
								
                                         </div>
                                         
                                      </div>
								</div>
									<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#recentknown").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="changeweight1")
											{
											$("#recentknown").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#recentknown").hide();
											}
											});
											});
</script>
			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>24.ARE YOU HAPPY WITH YOUR CURRENT WEIGHT ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="happyyrweight"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="happyyrweight"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         
                                      </div>
								</div>
<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>25.ARE YOU DOING SOMETHING LOOSING WEIGHT?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="loosingweight"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="loosingweight"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         
                                      </div>
								</div>
			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>26.DO YOU HAVE ANY FOOD ALLERGIES ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="foodalergies1" name="foodalergies"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="foodalergies0" name="foodalergies"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-3">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="food_name" placeholder="FOODs" id="foodalergy">
																
														</div>
								
                                         </div>
                                         
                                      </div>
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#foodalergy").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="foodalergies1")
											{
											$("#foodalergy").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#foodalergy").hide();
											}
											});
											});
</script>
<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-7">
														<label>27.DO YOU HAVE ANY FOOD/BEVERAGE INTOLERANCES (for example,lactose,spicyfoods)?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="intolerance1" name="bevarage_intolerance"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="intolerance0" name="bevarage_intolerance"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-3">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="intolerancefood" placeholder="FOODs" id="intolerancefood">
																
														</div>
								
                                         </div>
                                         
                                      </div>
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#intolerancefood").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="intolerance1")
											{
											$("#intolerancefood").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#intolerancefood").hide();
											}
											});
											});
</script>
<!---***********************************************************************************************************************-->	
		<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-3">
														<label>28.HOW IS YOUR APPETITE ?</label>
														
													</div>
											<div class="col-xs-2 col-md-2 col-lg-2">
													
												<div class="form-group row">
													<div class="col-md-3">
														<label>GOOD</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="radio" class="form-control"
																 name="your_appetite" value="good"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-2 col-md-2 col-lg-2">
													
												<div class="form-group row">
													<div class="col-md-3">
														<label>FAIR</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="radio" class="form-control"
																 name="your_appetite" value="fair"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-2 col-md-2 col-lg-2">
													
												<div class="form-group row">
													<div class="col-md-3">
														<label>POOR</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="radio" class="form-control"
																 name="your_appetite" value="poor"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
                                         
                                      </div>
								</div>
			<!---***********************************************************************************************************************-->

			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5">
														<label>28.DO YOU HAVE ANY EATING OR DIGESTION PROBLEMS ?</label>
														
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="digestion1" name="digestionprblm"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="digestion0" name="digestionprblm"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                       
                                         
                                      </div>
								</div>
							
<!---***********************************************************************************************************************-->		
<div class="col-md-12 col-lg-12 col-xs-12" id="digestionprblmdtl">
										<div class="row">
										
											<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
														<div class="form-group row">
													<div class="col-md-3">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:20%;">
														<label>CHEWING</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="chewing" value="chewing"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-3 col-md-3 col-lg-3">
														<div class="form-group row">
													<div class="col-md-2">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>SWALLOWING</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="swallowing" name="swallowing"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-3 col-md-3 col-lg-3">
														<div class="form-group row">
													<div class="col-md-2">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>STOMACHACHE</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="stomachache" name="stomachache"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>

										<div class="col-md-12 col-lg-12 col-xs-12" id="diagestionprblmdtl2">
										<div class="row">
										
											<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
													
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:20%;">
														<label>DIARRHEA</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="diarrhea" value="diarrhea"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-3 col-md-3 col-lg-3">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>CONSTIPATION</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="constipation" name="constipation"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										
										</div>
									</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#digestionprblmdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="digestion1")
											{
											$("#digestionprblmdtl").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#digestionprblmdtl").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#diagestionprblmdtl2").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="digestion1")
											{
											$("#diagestionprblmdtl2").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#diagestionprblmdtl2").hide();
											}
											});
											});
</script>
<!---***********************************************************************************************************************-->

			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>29. DO YOU TAKE VITAMINS OR ANY OTHER NUTRITION SUPPLEMENTS ?</label>
														
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="suppliments1" name="taking_vitamin"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="suppliments2" name="taking_vitamin"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                       
                                         
                                      </div>
								</div>
							<!---***********************************************************************************************************************-->		
<div class="col-md-12 col-lg-12 col-xs-12" id="nutrition1">
										<div class="row">
										
											<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
														
												<div class="form-group row">
													<div class="col-md-5" >
														<label>NIACIN</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="niacin" value="niacin"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-3 col-md-3 col-lg-3">
														
												<div class="form-group row">
													<div class="col-md-10" >
														<label>POTASSIUM,SALT SUBSTITUTE</label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="subtitute" name="salt_subtitute"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-3 col-md-3 col-lg-3">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>VITAMIN D</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="vitamind" name="vitamin_d"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
											
										</div>
										<div class="col-md-12 col-lg-12 col-xs-12" id="nutrition2">
										<div class="row">
										
											<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
														
												<div class="form-group row">
													<div class="col-md-5" >
														<label> CALCIUM</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="calcium" value="calcium"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-3 col-md-3 col-lg-3">
														
												<div class="form-group row">
													<div class="col-md-10" >
														<label>CHROMIUM</label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="chromium" name="chromium"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-3 col-md-3 col-lg-3">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>SELENIUM</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="selenium" name="selenium"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
											
										</div>
										<div class="col-md-12 col-lg-12 col-xs-12" id="nutrition3">
										<div class="row">
										
											<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
														
												<div class="form-group row">
													<div class="col-md-5" >
														<label> IRON</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="iron" value="iron"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-3 col-md-3 col-lg-3">
														
												<div class="form-group row">
													<div class="col-md-10" >
														<label>FOLIC ACID</label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="folicacid" name="folicacid"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-3 col-md-3 col-lg-3">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>VITAMIN-E</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="vitamine" name="vitamin_e"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
											
										</div>
										<div class="col-md-12 col-lg-12 col-xs-12" id="nutrition4">
										<div class="row">
										
											<div class="col-xs-3 col-md-3 col-lg-3" style="margin-left:10%;">
														
												<div class="form-group row">
													<div class="col-md-5" >
														<label>VITAMIN B6</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="vitaminb6" value="vitaminb6"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
												
											<div class="col-xs-3 col-md-3 col-lg-3">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left:20%;">
														<label>VITAMIN B12</label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="vitaminb12" name="vitaminb12"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
											
										</div>

											
											
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#nutrition1").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="suppliments1")
											{
											$("#nutrition1").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#nutrition1").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#nutrition2").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="suppliments1")
											{
											$("#nutrition2").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#nutrition2").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#nutrition3").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="suppliments1")
											{
											$("#nutrition3").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#nutrition3").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#nutrition4").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="suppliments1")
											{
											$("#nutrition4").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#nutrition4").hide();
											}
											});
											});
</script>
<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
												<div class="form-group row">
													
													<div class="col-md-9" style="margin-left:76%;">
														<div class="form-group">
															<button type="submit" class="btn btn-primary"
																id="regisbtn">
																<i class="far fa-edit">&nbsp;Submit</i>
															</button>
														</div>
													</div>
												</div>

											</div>
						
			<!---***********************************************************************************************************************-->	

									



	



</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

