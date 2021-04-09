<style>.highlight-error {
  border-color: red;
}</style>
<?php $uri=$this->uri->segment('3'); ?>
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Add Patient Form</h4>
						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/patient/addpatinfo" enctype="multipart/Form-data" >
							<input type="hidden" name="id" value="<?php echo $uri; ?>">
							<div class="card-body">
							    <?php if($this->uri->segment(3)=="success"){
							    $this->db->where("id",$this->uri->segment(4));
							   $lastpinfo =  $this->db->get("reg_patient_info")->row();
							    
							    ?>
							    
							    <div class="alert alert-info">Patient Registration of <?php echo $lastpinfo->first_name." ".$lastpinfo->middle_name." ".$lastpinfo->last_name;?> has been done successfully.Username is <?php echo $lastpinfo->username;?> </div>
							    <?php }?>
							    <?php if($this->uri->segment(3)=="fail"){?>
							  
							    <div class="alert alert-info">Please Try Again !!! </div>
							    <?php }?>
								<div class="row" id="regForm">
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5">
														<label>FIRST NAME<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="fname"
																id="fname" required="required">
														</div>
								
                                                    </div>
												</div>
											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5">
														<label>MIDDLE NAME</label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="mname"
																id="mname" >
														</div>
								
                                                    </div>
												</div>
											</div>

											<div class="col-md-12 col-lg-12 col-xs-12">
										    <div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5">
														<label>LAST NAME</label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="lname"
																id="lname" >
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>FATHER NAME<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="father"
																id="father" required="required">
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
														<label>MOTHER NAME<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="mother"
																id="mother" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-2">
														<label>GENDER<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															MALE<input type="radio" class="form-control"
																value="male" name="gender"
																id="gender" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-3">
														<div class="form-group">
															<lebel>FEMALE</lebel>
															<input type="radio" class="form-control"
																value="female" name="gender"
																id="gender" required="required" style="height:20px; width:20px;">
																
														</div>
								
                                                         </div>
                                                         <div class="col-md-4">
                														<div class="form-group">
                															TRANSGENDER<input type="radio" class="form-control"
                																value="transgender" name="gender"
                																id="gender" required="required" style="height:20px; width:20px;">
                																
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
																id="address" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>Post<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="post"
																id="post" required="required">
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
														<label>Tehsil<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="tehsil"
																id="tehsil" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>Block<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="block"
																id="block" required="required">
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
									</div>
								</div>
								<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
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
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>PIN<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="pincode"
																id="pincode" required="required">
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
											
										</div>
									</div>

                                <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5">
														<label>MOBILE NUMBER<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																
																id="mobile" required="required"  name="mobile"  pattern="[1-9]{1}[0-9]{9}">
														</div>
								
                                                    </div>
												</div>

											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">
                                                    <div class="form-group row">
													<div class="col-md-5">
														<label>ALTERNATE NUMBER</label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="number"
																id="number" >
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
														<label>VOTER ID<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="voter"
																id="voter" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>ADHAAR NUMBER<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="adhaar"
																id="adhaar" data-type="adhaar-number" maxLength="19" required="required">
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
														<label>PAN CARD <span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="pancard"
																id="pancard" required="required" maxlength="10" pattern="[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}" >
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>DATE OF BIRTH<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="date" class="form-control"
																value="" name="dob"
																id="dob" required="required">
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
														<label>EMAIL<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="email" class="form-control"
																value="" name="email"
																id="email" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5">
														<label>PASSWORD</label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="password" class="form-control"
																value="" name="password"	id="password" >
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
														<label>IMAGE</label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="file" class="form-control"
																value="" name="image"
																accept="image/*" capture="camera">
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>MARTIAL STATUS<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															MARRIED<input type="radio" class="form-control"
																value="married" name="martial" id="martial"
																 style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-3">
														<div class="form-group">
															<lebel>UNMARRIED</lebel>
															<input type="radio" class="form-control"
																value="unmarried" name="martial" id="martial"
																style="height:20px; width:20px;">
																
														</div>
								
                                                    </div>
                                                         <div class="col-md-3">
                														<div class="form-group">
                															<lebel>WIDOW</lebel>
                															<input type="radio" class="form-control"
                																value="widow" name="martial" id="martial"
                																 style="height:20px; width:20px;">
                																
                														</div>
								
                                         </div>
											
										</div>
									</div>

	<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-12 col-md-12 col-lg-12">
												<div class="form-group row">
													<div class="col-md-5"></div>
													<div class="col-md-7">
														<div class="form-group">
															<button type="submit" class="btn btn-primary"
																id="" style="margin-left:70%;">
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
<script>
    $('[data-type="adhaar-number"]').keyup(function() {
  var value = $(this).val();
  value = value.replace(/\D/g, "").split(/(?:([\d]{4}))/g).filter(s => s.length > 0).join("-");
  $(this).val(value);
});

$('[data-type="adhaar-number"]').on("change, blur", function() {
  var value = $(this).val();
  var maxLength = $(this).attr("maxLength");
  if (value.length != maxLength) {
    $(this).addClass("highlight-error");
  } else {
    $(this).removeClass("highlight-error");
  }
});

</script>
