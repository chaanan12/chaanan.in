
<?php $uri=$this->uri->segment('3'); ?>
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Patient Diet Form</h4>

						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/patient/patient_diet" enctype="multipart/Form-data" >
								<input type="hidden" name="pid" value="<?php echo $uri; ?>">
							<div class="card-body">
								<div class="row" id="regForm">

									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-3">
														<label>DIETARY HABIT<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															VEG<input type="radio" class="form-control"
																value="veg" name="dietary_habit"
																  style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NON-VEG</lebel>
															<input type="radio" class="form-control"
																value="nonveg" name="dietary_habit"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-3">
														<div class="form-group">
															OMNIVOROUS<input type="radio" class="form-control"
																value="omnivorous" name="dietary_habit"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>
											</div>
										
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-4">
														<label>NUMBER OF MEALS YOU USUALLY EAT PER DAY:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															BREAK-FAST<input type="checkbox" class="form-control"
																value="breakfast" name="breakfast"
																id="name" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>LUNCH</lebel>
															<input type="checkbox" class="form-control"
																value="lunch" name="lunch"
																id="name"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															SNAKES<input type="checkbox" class="form-control"
																value="snakes" name="snake"
																id="name"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														<div class="form-group">
															DINNER<input type="checkbox" class="form-control"
																value="dinner" name="dinner"
																id="name"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-12">
														<label>NUMBER OF TIMES PER WEEK YOU USUALLY EAT THE FOLLOWING:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												</br>
												</br>
													<div class="col-md-2">
														<div class="form-group">
															<lebel>1.RED MEAT</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="meat"
																id="meat"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="meat"
																id="meat1"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         		<div class="col-xs-6 col-md-6 col-lg-6">
                                         		<div id="eat">
                                         <div class="col-md-2">
									<div class="form-group">
										1.DAILY
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="meat_routine" id="daily" value="daily"/>
										</div>
									</div>
										<div id="quan1">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="quant1" id=""/>
										</div>
									</div>
									
									</div>
									 <div class="col-md-2">
									<div class="form-group">
										2.WEEK
										 <input style="height:20px; width:20px;" class="form-control" placeholder="When Left" type="radio" name="meat_routine" value="week" id="week"/>
										</div>

                                     </div>
                                     <div id="quan2">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_meat_timing" id=""/>
										</div>
									</div>
									
									</div>
                                       <div class="col-md-3">
									<div class="form-group">
										3.MONTH
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="meat_routine" value="month" id="month"/>
										</div>
									</div>
									<div id="quan3">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_meat_timing" id=""/>
										</div>
									</div>
									
									</div>

									  <div class="col-md-3">
									<div class="form-group">
										4.YEAR
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="meat_routine" value="year" id="year"/>
										</div>
									</div>
										</div>
										
									
									<div id="quan4">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_meat_timing" id=""/>
										</div>
									</div>
									</div>
									</div>
								</div>
					<!-----************************************************************************************
					**************************************************************************************************-->

		<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												
													<div class="col-md-2">
														<div class="form-group">
															<lebel>2.FISH</lebel>
														</div>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="yes_fish" name="fish"
																id="meat"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_fish" name="fish"
																id="meat1"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                           		</div>
                                         		<div class="col-xs-6 col-md-6 col-lg-6">
                                         		<div id="eat1">
                                         <div class="col-md-2">
									<div class="form-group">
										1.DAILY
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="	fish_routine" value="daily1"/>
										</div>
									</div>
									<div id="fquan1">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_fish_timing" id=""/>
										</div>
									</div>
									
									</div>
									 <div class="col-md-2">
									<div class="form-group">
										2.WEEK
										 <input style="height:20px; width:20px;" class="form-control" placeholder="When Left" type="radio" name="	fish_routine" value="week1"/>
										</div>

                                     </div>
                                      <div id="fquan2">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_fish_timing" id=""/>
										</div>
									</div>
									
									</div>
									 <div class="col-md-3">
									<div class="form-group">
										3.MONTH
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="	fish_routine" value="month1" />
										</div>
									</div>
									<div id="fquan3">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_fish_timing" id=""/>
										</div>
									</div>
									
									</div>
									<div class="col-md-3">
									<div class="form-group">
										4.YEAR
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="	fish_routine" value="year1"/>
										</div>
									</div>
										</div>
										<div id="fquan4">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_fish_timing" id=""/>
										</div>
									</div>
									</div>
									</div>
								</div>

								<!-----************************************************************************************
					**************************************************************************************************-->
						<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												
													<div class="col-md-2">
														<div class="form-group">
															<lebel>3.DESSERTS</lebel>
														</div>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="ok" name="desserts"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="notok" name="desserts"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                           		</div>
                                           		<div class="col-xs-6 col-md-6 col-lg-6">
                                         		<div id="eat2">
                                         <div class="col-md-2">
									<div class="form-group">
										1.DAILY
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="desserts_routine" value="daily2"/>
										</div>
									</div>
									<div id="dquan1">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_desserts_timing" id=""/>
										</div>
									</div>
									
									</div>
									 <div class="col-md-2">
									<div class="form-group">
										2.WEEK
										 <input style="height:20px; width:20px;" class="form-control" placeholder="When Left" type="radio" name="desserts_routine" value="week2"/>
										</div>

                                     </div>
                                      <div id="dquan2">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_desserts_timing" id=""/>
										</div>
									</div>
									
									</div>
									 <div class="col-md-3">
									<div class="form-group">
										3.MONTH
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="desserts_routine" value="month2" />
										</div>
									</div>
									<div id="dquan3">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_desserts_timing" id=""/>
										</div>
									</div>
									
									</div>
									<div class="col-md-3">
									<div class="form-group">
										4.YEAR
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="desserts_routine" value="year2"/>
										</div>
									</div>
										</div>
										<div id="dquan4">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_desserts_timing" id=""/>
										</div>
									</div>
									</div>
									</div>
								</div>

					<!-----************************************************************************************
					**************************************************************************************************-->
						<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												
													<div class="col-md-2">
														<div class="form-group">
															<lebel>4.PORK</lebel>
														</div>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="yes1" name="pork"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no1" name="pork"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                           		</div>
                                           		<div class="col-xs-6 col-md-6 col-lg-6">
                                         		<div id="eat3">
                                         <div class="col-md-2">
									<div class="form-group">
										1.DAILY
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="pork_routine" value="daily3"/>
										</div>
									</div>
									<div id="pquan1">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_timing_pork" id=""/>
										</div>
									</div>
									
									</div>
									 <div class="col-md-2">
									<div class="form-group">
										2.WEEK
										 <input style="height:20px; width:20px;" class="form-control" placeholder="When Left" type="radio" name="pork_routine" value="week3"/>
										</div>

                                     </div>
                                      <div id="pquan2">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_timing_pork" id=""/>
										</div>
									</div>
									
									</div>
									 <div class="col-md-3">
									<div class="form-group">
										3.MONTH
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="pork_routine" value="month3" />
										</div>
									</div>
									<div id="pquan3">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_timing_pork" id=""/>
										</div>
									</div>
									
									</div>
										<div class="col-md-3">
									<div class="form-group">
										4.YEAR
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="pork_routine" value="year3"/>
										</div>
									</div>
										</div>
										<div id="pquan4">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_timing_pork" id=""/>
										</div>
									</div>
									</div>
									</div>
								</div>
													<!-----************************************************************************************
					**************************************************************************************************-->
						<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												
													<div class="col-md-2">
														<div class="form-group">
															<lebel>5.CHICKEN</lebel>
														</div>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="yes2" name="chicken"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no2" name="chicken"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                           		</div>
													<div class="col-xs-6 col-md-6 col-lg-6">
                                         		<div id="eat4">
                                         <div class="col-md-2">
									<div class="form-group">
										1.DAILY
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="chicken_routine" value="daily4"/>
										</div>
									</div>
									<div id="cquan1">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_chicken_timing" id=""/>
										</div>
									</div>
									
									</div>
									 <div class="col-md-2">
									<div class="form-group">
										2.WEEK
										 <input style="height:20px; width:20px;" class="form-control" placeholder="When Left" type="radio" name="chicken_routine" value="week4"/>
										</div>

                                     </div>
                                      <div id="cquan2">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_chicken_timing" id=""/>
										</div>
									</div>
									
									</div>
									 <div class="col-md-3">
									<div class="form-group">
										3.MONTH
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="chicken_routine" value="month4" />
										</div>
									</div>
									<div id="cquan3">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_chicken_timing" id=""/>
										</div>
									</div>
									
									</div>
									<div class="col-md-3">
									<div class="form-group">
										4.YEAR
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="chicken_routine" value="year4"/>
										</div>
									</div>
										</div>
										<div id="cquan4">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_chicken_timing" id=""/>
										</div>
									</div>
									</div>
									</div>
								</div>
                                     
<!-----************************************************************************************
					**************************************************************************************************-->
				<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												
													<div class="col-md-2">
														<div class="form-group">
															<lebel>6.FRIED FOODS</lebel>
														</div>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="fried_food" name="fried_food"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_fried_food" name="fried_food"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                           		</div>
                                           		<div class="col-xs-6 col-md-6 col-lg-6">
                                         		<div id="eat5">
                                         <div class="col-md-2">
									<div class="form-group">
										1.DAILY
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="fried_routine" value="daily5"/>
										</div>
									</div>
									<div id="ffquan1">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_fried_timing" id=""/>
										</div>
									</div>
									
									</div>
									 <div class="col-md-2">
									<div class="form-group">
										2.WEEK
										 <input style="height:20px; width:20px;" class="form-control" placeholder="When Left" type="radio" name="fried_routine" value="week5"/>
										</div>

                                     </div>
                                      <div id="ffquan2">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_fried_timing" id=""/>
										</div>
									</div>
									
									</div>
									 <div class="col-md-3">
									<div class="form-group">
										3.MONTH
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="fried_routine" value="month5" />
										</div>
									</div>
									<div id="ffquan3">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_fried_timing" id=""/>
										</div>
									</div>
									
									</div>
									<div class="col-md-3">
									<div class="form-group">
										4.YEAR
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="fried_routine" value="year5"/>
										</div>
									</div>
										</div>
										<div id="ffquan4">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="number_of_fried_timing" id=""/>
										</div>
									</div>
									</div>
									</div>
								</div>
                                     <!-----************************************************************************************
					**************************************************************************************************-->
			<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-12">
														<label>NUMBER OF SERVINGS(CUPS,GLASSES OR CONTAINERS)PER WEEK YOU USUALLY CONSUME OF:<span title="Required" style="color: red;">*</span></label>
													</div>
												</div>
													<div class="form-group row">
													<div class="col-md-4">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp1. &nbsp &nbsp &nbspMILK:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="milk" name="milk"
																style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="no_milk" name="milk"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														
															<input type="text" class="form-control"
																placeholder="FREQUENCY/DAY" name="number_of_glassesof_milk"
																id="milk">
																
														</div>
                                      
												</div>
											</div>
								
											
                  <!--************************************************************************************-->

                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">
													<div class="form-group row">
													<div class="col-md-4">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp2. &nbsp &nbsp &nbspTEA:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="tea" name="tea"
																id="t1"  style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="no_tea" name="tea"
																id="t2"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														
															<input type="text" class="form-control"
																placeholder="FREQUENCY/DAY" name="number_of_glassesof_tea"
																id="tea">
																
														</div>
                                      
												</div>
											</div>
										
                  <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-4">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp3. &nbsp &nbsp &nbspCOFFEE:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="coffee" name="coffee"
																id="co1" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="coffee1" name="coffee"
																id="co2"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														
															<input type="text" class="form-control"
																placeholder="FREQUENCY/DAY" name="number_of_cupof_coffee"
																id="coffee" >
																
														</div>
								
                                         </div>
                                      
												</div>
											</div>
											</div>
										
                  <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-4">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp4. &nbsp &nbsp &nbspGLASSES OF WATER:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wate"  style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														
															<input type="text" class="form-control"
																placeholder="FREQUENCY/DAY" name="number_of_glassesof_water"
																id="water">
																
														</div>
                                      
												</div>
											</div>
										
                  <!--************************************************************************************-->

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



								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#eat").hide();
												$("#quan").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="1")
											{
											$("#eat").show();
											
											}
											else
											{
									
											$("#eat").hide();
											$("#quan").hide();
											}
											});
											});
</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#quan1").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="daily")
											{
												$("#eat").show();
											$("#quan1").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#quan1").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#quan2").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="week")
											{
											$("#eat").show();
											$("#quan2").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#quan2").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#quan3").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="month")
											{
												$("#eat").show();
											$("#quan3").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#quan3").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#quan4").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="year")
											{
												$("#eat").show();
											$("#quan4").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#quan4").hide();
											}
											});
											});
</script>
<!----*********************************************************************************************-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#eat1").hide();
												$("#fquan1").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="yes")
											{
											$("#eat1").show();
											
											}
											else
											{
									
											$("#eat1").hide();
											$("#fquan1").hide();
											}
											});
											});
</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#fquan1").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="daily1")
											{
												$("#eat1").show();
											$("#fquan1").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#fquan1").hide();
											}
											});
											});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#fquan2").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="week1")
											{
											$("#eat1").show();
											$("#fquan2").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#fquan2").hide();
											}
											});
											});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#fquan3").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="month1")
											{
												$("#eat1").show();
											$("#fquan3").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#fquan3").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#fquan4").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="year1")
											{
												$("#eat1").show();
											$("#fquan4").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#fquan4").hide();
											}
											});
											});
</script>
<!----*********************************************************************************************-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#eat2").hide();
												$("#dquan1").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="ok")
											{
											$("#eat2").show();
											
											}
											else
											{
									
											$("#eat2").hide();
											$("#dquan1").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#dquan1").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="daily2")
											{
												$("#eat2").show();
											$("#dquan1").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#dquan1").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#dquan2").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="week2")
											{
											$("#eat2").show();
											$("#dquan2").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#dquan2").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#dquan3").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="month2")
											{
												$("#eat2").show();
											$("#dquan3").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#dquan3").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#dquan4").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="year2")
											{
												$("#eat2").show();
											$("#dquan4").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#dquan4").hide();
											}
											});
											});
</script>
				
<!----*********************************************************************************************-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#eat3").hide();
												$("#pquan1").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="yes1")
											{
											$("#eat3").show();
											
											}
											else
											{
									
											$("#eat3").hide();
											$("#pquan1").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#pquan1").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="daily3")
											{
												$("#eat3").show();
											$("#pquan1").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#pquan1").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#pquan2").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="week3")
											{
											$("#eat3").show();
											$("#pquan2").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#pquan2").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#pquan3").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="month3")
											{
												$("#eat3").show();
											$("#pquan3").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#pquan3").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#pquan4").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="year3")
											{
												$("#eat3").show();
											$("#pquan4").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#pquan4").hide();
											}
											});
											});
</script>
<!----*********************************************************************************************-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#eat4").hide();
												$("#cquan1").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="yes2")
											{
											$("#eat4").show();
											
											}
											else
											{
									
											$("#eat4").hide();
											$("#cquan1").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#cquan1").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="daily4")
											{
												$("#eat4").show();
											$("#cquan1").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#cquan1").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#cquan2").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="week4")
											{
											$("#eat4").show();
											$("#cquan2").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#cquan2").hide();
											}
											});
											});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#cquan3").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="month4")
											{
												$("#eat4").show();
											$("#cquan3").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#cquan3").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#cquan4").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="year4")
											{
												$("#eat4").show();
											$("#cquan4").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#cquan4").hide();
											}
											});
											});
</script>
<!----*********************************************************************************************-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#eat5").hide();
												$("#ffquan1").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="fried_food")
											{
											$("#eat5").show();
											
											}
											else
											{
									
											$("#eat5").hide();
											$("#ffquan1").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#ffquan1").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="daily5")
											{
												$("#eat5").show();
											$("#ffquan1").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#ffquan1").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#ffquan2").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="week5")
											{
											$("#eat5").show();
											$("#ffquan2").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#ffquan2").hide();
											}
											});
											});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#ffquan3").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="month5")
											{
												$("#eat5").show();
											$("#ffquan3").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#ffquan3").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#ffquan4").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="year5")
											{
												$("#eat5").show();
											$("#ffquan4").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#ffquan4").hide();
											}
											});
											});
</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#water").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="wate")
											{
											$("#water").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#water").hide();
											}
											});
											});
</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#coffee").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="coffee")
											{
											$("#coffee").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#coffee").hide();
											}
											});
											});
</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#tea").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="tea")
											{
											$("#tea").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#tea").hide();
											}
											});
											});
</script>
											
														<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#milk").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="milk")
											{
											$("#milk").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#milk").hide();
											}
											});
											});
</script>


	