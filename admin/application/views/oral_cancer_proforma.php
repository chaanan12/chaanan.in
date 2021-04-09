
<style>
	div.a {
  font-size: large;
}
	div.b{
  font-size: large;
}

</style>
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Oral_Cancer_Proforma</h4>

						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/customer/oralcancer_proforma" enctype="multipart/Form-data" >
							<div class="card-body">
								<div class="row" id="regForm">
									
									<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-12" style="background-color: lightgray;">

														<label>1.FAMILY HISTORY:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
											
												<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															MOTHER<input type="checkbox" class="form-control"
																value="mother" name="mother"
																style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>FATHER</lebel>
															<input type="checkbox" class="form-control"
																value="father" name="father"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															AUNT<input type="checkbox" class="form-control"
																value="aunt" name="aunt"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														<div class="form-group">
															SISTER<input type="checkbox" class="form-control"
																value="sister" name="sister"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
								<!---*******************************************************************-->
									<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												
												<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															BROTHER<input type="checkbox" class="form-control"
																value="brother" name="brother"
																style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>COUSIN</lebel>
															<input type="checkbox" class="form-control"
																value="cousin" name="cousin"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															OTHERS(Specify)<input type="checkbox" class="form-control"
																value="other" name="other"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          
												</div>


											</div>
											<!--**********************************************************-->	
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-3">
														<label>EARLIER TREATMENT FOR ANY:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
											 <div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="treatment"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="treatment"
															 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         
												</div>


											</div>

	<!--**********************************************************-->	

	<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>2.HAS ANY MEMBER OF YOUR FAMILY BEEN DIAGNOSED OF ORAL CANCER:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
											 <div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="ocyes" name="oralcancer" onclick="myFunction()"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="ocno" name="oralcancer"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         	 <div class="col-md-3">
														<div class="form-group">
															<textarea name="oraldetail" id="familyoralcancerdtl" placeholder="fill your details" class="form-control"></textarea>

														</div>
														</div>

                                         
												</div>


											</div>
												
											<script>
												//$("#eat").hide();
											$("#familyoralcancerdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="ocyes")
											{
											$("#familyoralcancerdtl").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#familyoralcancerdtl").hide();
											}
											});
											});
</script>

									<!----******************************************************************************-->		

										<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-3">
														<label>3.MOUTH/TEETH DISEASE:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
											 <div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="yes1" name="mouthdisease"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no1" name="mouthdisease"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         	 <div class="col-md-3">
														<div class="form-group">
															<textarea name="mouthdiseasedetail" id="mouthdiseasedtl" placeholder="History with medical paper and type of clinic" class="form-control"></textarea>

														</div>
														</div>

                                         
												</div>


											</div>
												<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#mouthdiseasedtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="yes1")
											{
											$("#mouthdiseasedtl").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#mouthdiseasedtl").hide();
											}
											});
											});
</script>

									<!----******************************************************************************-->	



										<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-3">
														<label>4.RADIOTHERAPY REPORT:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
											 <div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="radiotherapy"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="radiotherapy"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         
                                         
												</div>


											</div>
											

<!----******************************************************************************-->		

			
										<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-5">
														<label>4.CHEMOTHERAPY OR ANY OTHER ADJUNCTIVE TREATMENTS:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
											 <div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="chemotherapy"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="chemotherapy"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         
                                         
												</div>


											</div>
											

<!----******************************************************************************-->	
	<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-4">
														<label>6.NAME OF THE DRUGS(Any Steroid Therapy):<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
                                         <div class="col-md-4">
														<div class="form-group">
															<input type="text" class="form-control"
																 name="drugs ">
																
														</div>
								
                                         </div>
                                         
                                         
												</div>


											</div>
											

<!----******************************************************************************-->	
<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>7.CT SCAN:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																 name="ct_scan">
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>7.MRI:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																 name="mri">
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>

<!----******************************************************************************-->	

									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-12 a" style="background-color:lightgray;">
														<label>BIOPSY REPORT:<span title="Required" style="color: red;">*</span></label>
													</div>
													
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-6">
														<label>ORAL SQUAMOUS CELL CARCINOMA:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="squamous_cell"
																>
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>

<!----******************************************************************************-->	

								<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-12">
														<label>9. SITE OF LESION:<span title="Required" style="color: red;">*</span></label>
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
															<lebel>a).BUCCAL MUCOSA</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="buccal"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="buccal"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->		
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>b).BUCCAL MUCOSA AND VESTIBULE</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="buccalvestibula"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="buccalvestibula"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->		
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>c).ALVEOLAR MUCOSA</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="alveolar"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="alveolar"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->		

<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>d).PALATE</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="palate"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="palate"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->	
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>e).VESTIBULE</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="vestibule"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="vestibule"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->		
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>f).TONGUE</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="tounge"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="tounge"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->		
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>g).LIP</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="lip"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="lip"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->	
	
							<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-12">
														<label>10. HISTOPATHOLOGICAL GRANDING:<span title="Required" style="color: red;">*</span></label>
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
															<lebel>WELL DIFFERENTIATED</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="well_differentiated"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="well_differentiated"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->		
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>MODERATELY DIFFERENTIATED</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="moderately"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="moderately"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->		
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>POORLY DIFFERENTIATED</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="poorly"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="poorly"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->		

<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													
													<div class="col-md-3">
														<div class="form-group">
															<lebel>ANY ADDITION DETAILS</lebel>
														</div>
													</div>
												
                                         <div class="col-md-4">
														<div class="form-group">
															<input type="text" class="form-control"
																placeholder="Write your addition details" name="additionaldetails"
																 >
																
														</div>
								
                                         </div>
                                        
                                         		</div>
                                         	
								</div>
<!-------------------------------------------*************************************************************---->	
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-12">
														<label>11.CLINICAL STAGING TNM:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
												<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															T1<input type="checkbox" class="form-control"
																value="t1" name="t1"
																style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>T2</lebel>
															<input type="checkbox" class="form-control"
																value="t2" name="t2"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															T3<input type="checkbox" class="form-control"
																value="t3" name="t3"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														<div class="form-group">
															T4<input type="checkbox" class="form-control"
																value="t4" name="t4"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
								<!---*******************************************************************-->
									<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												
												<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															N1<input type="checkbox" class="form-control"
																value="n1" name="n1"
																style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>N2</lebel>
															<input type="checkbox" class="form-control"
																value="n2" name="n2"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															N2a<input type="checkbox" class="form-control"
																value="n2a" name="n2a"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														<div class="form-group">
															N2b<input type="checkbox" class="form-control"
																value="n2b" name="n2b"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          
												</div>


											</div>
											<!---------------------------------------------------------****
												***************************************************************-->
													<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												
												<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															N2c<input type="checkbox" class="form-control"
																value="n2c" name="n2c"
																style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>N3</lebel>
															<input type="checkbox" class="form-control"
																value="n3" name="n3"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															M0<input type="checkbox" class="form-control"
																value="m0" name="m0"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														<div class="form-group">
															M1<input type="checkbox" class="form-control"
																value="m1" name="m1"
															  style="height:20px; width:20px;">
																
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
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

