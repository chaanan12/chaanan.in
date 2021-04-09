<?php $uri=$this->uri->segment('3'); ?>
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Patient Coronary Artery Desease Form</h4>

						</div>

						<form method="post"	action="<?php echo base_url()?>index.php/patient/patient_diet" enctype="multipart/Form-data" >
								<input type="hidden" name="id" value="<?php echo $uri; ?>">

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
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="duration" id="daily" value="daily"/>
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
										 <input style="height:20px; width:20px;" class="form-control" placeholder="When Left" type="radio" name="duration" value="week" id="week"/>
										</div>

                                     </div>
                                     <div id="quan2">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="quant1" id=""/>
										</div>
									</div>
									
									</div>
                                       <div class="col-md-3">
									<div class="form-group">
										3.MONTH
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="duration" value="month" id="month"/>
										</div>
									</div>
									<div id="quan3">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="quant1" id=""/>
										</div>
									</div>
									
									</div>

									  <div class="col-md-3">
									<div class="form-group">
										4.YEAR
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="duration" value="year" id="year"/>
										</div>
									</div>
										</div>
										
									
									<div id="quan4">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="quant1" id=""/>
										</div>
									</div>
									</div>
									</div>
								</div>
										<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													
												</br>
												</br>
												</br>
													<div class="col-md-2">
														<div class="form-group">
															<lebel>2.FISH</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="fish" name="fish"
																id="meat" style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="nofish" name="fish"
																id="meat1" style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         	</div>
                                         	<div class="col-xs-6 col-md-6 col-lg-6">
                                         		<div id="eat1">
                                         <div class="col-md-2">
									<div class="form-group">
										1.DAILY
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="fduration" id="daily" value="daily1"/>
										</div>
									</div>
										<div id="fquan">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="fquant1" id=""/>
										</div>
									</div>
									
									</div>
									 <div class="col-md-2">
									<div class="form-group">
										2.WEEK
										 <input style="height:20px; width:20px;" class="form-control" placeholder="When Left" type="radio" name="fduration" value="week1" id="week"/>
										</div>

                                     </div>
                                     <div id="fquan2">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="fquant2" id=""/>
										</div>
									</div>
									
									</div>
                                       <div class="col-md-3">
									<div class="form-group">
										3.MONTH
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="fduration" value="month1" id="month"/>
										</div>
									</div>
									<div id="fquan3">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="fquant3" id=""/>
										</div>
									</div>
									
									</div>

									  <div class="col-md-3">
									<div class="form-group">
										4.YEAR
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="fduration" value="year1" id="year"/>
										</div>
									</div>
										</div>
										
									
									<div id="fquan4">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="fquant4" id=""/>
										</div>
									</div>
									</div>
									</div>
								</div>
                                         		</div>

                                         	</div>



                                         	<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													
												</br>
												</br>
												</br>
													<div class="col-md-2">
														<div class="form-group">
															<lebel>3.DESSERTS</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="dessert" name="dessert"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="nodessert" name="dessert"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>


                                         			<div class="col-xs-6 col-md-6 col-lg-6">
                                         		<div id="eat2">
                                         <div class="col-md-2">
									<div class="form-group">
										1.DAILY
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="dduration" id="daily" value="daily2"/>
										</div>
									</div>
										<div id="dquan1">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="dquant1" id=""/>
										</div>
									</div>
									
									</div>

									 <div class="col-md-2">
									<div class="form-group">
										2.WEEK
										 <input style="height:20px; width:20px;" class="form-control" placeholder="When Left" type="radio" name="dduration" value="week2"/>
										</div>

                                     </div>
                                     <div id="dquan2">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="dquant2" id=""/>
										</div>
									</div>
									
									</div>
                                       <div class="col-md-3">
									<div class="form-group">
										3.MONTH
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="dduration" value="month2"/>
										</div>
									</div>
									<div id="dquan3">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="dquant3" id=""/>
										</div>
									</div>
									
									</div>

									  <div class="col-md-3">
									<div class="form-group">
										4.YEAR
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="dduration" value="year2" />
										</div>
									</div>
										</div>
										
									
									<div id="dquan4">
                                         <div class="col-md-4">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="dquant4" id=""/>
										</div>
									</div>
									</div>
									</div>
								</div>
                                         		</div>

                                         	</div>
                                         	</div>

                                         	<!--*****************************************************************-->
                                         		<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													
												</br>
												</br>
												</br>
													<div class="col-md-2">
														<div class="form-group">
															<lebel>4.PORK</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="pork"
																id="meat"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="pork"
																id="meat1" style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         	</div>
                                     




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
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														
															<input type="text" class="form-control"
																placeholder="FREQUENCY/DAY" name="milk"
																id="milk" required="required">
																
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
																id="t1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="tea1" name="tea"
																id="t2" required="required" style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														
															<input type="text" class="form-control"
																placeholder="FREQUENCY/DAY" name="tea"
																id="tea" required="required" >
																
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
																id="co1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="coffee1" name="coffee"
																id="co2" required="required" style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														
															<input type="text" class="form-control"
																placeholder="FREQUENCY/DAY" name="coffee"
																id="coffee" required="required" >
																
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
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														
															<input type="text" class="form-control"
																placeholder="FREQUENCY/DAY" name="coffee"
																id="water" required="required" >
																
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
															<button type="submit" class="btn btn-primary" form="nameform"
																  style="margin-left:70%;">
																<i class="far fa-edit">&nbsp;Submit</i>
															</button>
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
												$("#fquan").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="fish")
											{
											$("#eat1").show();
											
											}
											else
											{
									
											$("#eat1").hide();
											$("#fquan").hide();
											}
											});
											});
</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#eat1").hide();
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
												$("#eat1").hide();
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
												$("#eat1").hide();
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
												$("#eat1").hide();
												$("#fquan4").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="year")
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
											if($(this).val()=="dessert")
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
												$("#eat2").hide();
												$("#dquan2").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="daily2")
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
												$("#eat2").hide();
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
<!----*********************************************************************************************-->

<!----*********************************************************************************************-->

<!----*********************************************************************************************-->

<!----*********************************************************************************************-->
	