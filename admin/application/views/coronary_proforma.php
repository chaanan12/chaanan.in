
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>CORONARY ARTERY DISEASE PROFORMA</h4>

						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/customer/coronary_proforma" enctype="multipart/Form-data" >
							<div class="card-body">
								<div class="row" id="regForm">


										<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>1.HAS A DOCTOR EVER SAID YOUR BLOOD PRESSURE WAS TOO HIGH?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="bp_low" name="bp_too_low"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="nobp_low" name="bp_too_low"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 											<div class="col-md-3">
														<div class="form-group">
															<textarea name="bp_low_detail" id="bppresshgh" placeholder="" class="form-control"></textarea>

														</div>
														</div>

                                     </div>
                                 </div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#bppresshgh").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="bp_low")
											{
											$("#bppresshgh").show();
											}
											else
											{
											$("#bppresshgh").hide();
											}
											});
											});
</script>	
								
									

			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>2.DO YOU EVER HAVE PAIN IN YOUR CHEST OR HEART ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="pain_in_chest" name="pain_your_chest"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="nopain_in_chest" name="pain_your_chest"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 											<div class="col-md-3">
														<div class="form-group">
															<textarea name="pain_your_chest_detail" id="chestpaindtl" placeholder="" class="form-control"></textarea>

														</div>
														</div>

                                     </div>
                                 </div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#chestpaindtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="pain_in_chest")
											{
											$("#chestpaindtl").show();
											}
											else
											{
											$("#chestpaindtl").hide();
											}
											});
											});
</script>	
								
									

			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>3.DO YOU EVER NOTICE YOU OWN HEART BEAT ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="heart_beat" name="own_heart_beat"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="noheart_beat" name="own_heart_beat"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
              <!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>4.DO YOU EVER NOTICE EXTRA HEARTBEATS OR SKIPPED BEATS ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="extraheartbeat" name="extra_heartbeat"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_extraheartbeat" name="extra_heartbeat"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
          <!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>5.ARE YOUR ANKLES OFTEN BADLY SWOLLEN ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="ankles_badly_swollen" name="ankles_badly_swollen"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="noankles_badly_swollen" name="ankles_badly_swollen"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
           <!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>6. DO COLD HANDS OR FEET TROUBLE YOU EVEN IN HOT WEATHER ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="cold_hand_feet_trouble" name="cold_hand_feet_trouble"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="nocold_hand_feet_trouble" name="cold_hand_feet_trouble"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
        <!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-12">
														<label>7.HAS A DOCTOR EVER SAID THAT YOU HAVE HEART TROUBLE ,AN ABNORMAL ELECTROCARDIOGRAM (ECG OR EKG),HEART ATTACK OR CORONARY HEART DISEASE?</label>
														
													</div>
													<div class="col-md-5">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="coronary_heart_disease" name="coronary_heart_disease"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="nocoronary_heart_disease" name="coronary_heart_disease"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
                   <!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>8.DO YOU FEEL SEVERE BREATHNESS ON EXCRETION AT REST?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="excretion_at_rest" name="excretion_at_rest"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="noexcretion_at_rest" name="excretion_at_rest"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
             <!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>9.DO YOU SOMETHING GET OUT OF BREATH WHEN SITTING STILL OR SLEEPING?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="get_out_of_breath" name="get_out_of_breath"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="noget_out_of_breath" name="get_out_of_breath"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
        <!---***********************************************************************************************************************-->
        	<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>10.HAS A DOCTOR EVER TOLD YOU YOUR CHOLESTROL LEVEL WAS HIGH?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="cholestrol_level_high" name="cholestrol_level_high"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="nocholestrol_level_high" name="cholestrol_level_high"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
                                 <!---***********************************************************************************************************************-->
        	<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-12" style="background-color: lightgray;" >
														<label style="font-size:18px">DO YOU NOW HAVE OR RECENTLY EXPERIENCED:</label>
														
													</div>
												</div>
											</div>
												</br>
												</br>
													<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												
													<div class="col-md-6" style="margin-left:5%;">
														<label>1.Chronic,recurrent or mornings cough ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="morning_cough" name="morning_cough"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="nomorning_cough" name="morning_cough"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
             <!---***********************************************************************************************************************-->
        	<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-6" style="margin-left:5%;">
														<label>2.Episode of coughing up blood ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="coughing_up_blood" name="coughing_up_blood"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="nocoughing_up_blood" name="coughing_up_blood"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
                                   <!---***********************************************************************************************************************-->
        	<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-6" style="margin-left:5%;">
														<label>3.Increased anxiety or depression ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="increased_anxiety" name="increased_anxiety"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="noincreased_anxiety" name="increased_anxiety"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
                                   <!---***********************************************************************************************************************-->
        	<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-6" style="margin-left:5%;">
														<label>4.Problems with recurrent fatigue,trouble sleeping or increased irritability?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="recurrent_fatigue" name="recurrent_fatigue"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="norecurrent_fatigue" name="recurrent_fatigue"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
        <!---***********************************************************************************************************************-->
        <!---***********************************************************************************************************************-->
          <!---***********************************************************************************************************************-->
        	<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-6" style="margin-left:5%;">
														<label>5.Migraine or recurrent headaches ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="migraine" name="migraine"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="nomigraine" name="migraine"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
               <!---***********************************************************************************************************************-->
        	<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-6" style="margin-left:5%;">
														<label>6.Swollen or painful knees or ankles ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="painful_knees" name="painful_knees"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="nopainful_knees" name="painful_knees"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
                                     <!---***********************************************************************************************************************-->
        	<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-6" style="margin-left:5%;">
														<label>7. Swollen,stiff or painful joints(RHD)?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="painful_joint" name="painful_joint"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="nopainful_joint" name="painful_joint"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
        <!---***********************************************************************************************************************-->
        <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-6" style="margin-left:5%;">
														<label>8.Pain in your legs after walking short distances ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="walking_short_distances" name="walking_short_distances"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="nowalking_short_distances" name="walking_short_distances"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
        <!---***********************************************************************************************************************-->
         <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-6" style="margin-left:5%;">
														<label>9.Exposure to loud noises for long periods ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="loudnoise" name="exposure_to_loud_noises"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="noloudnoise" name="exposure_to_loud_noises"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
        <!---***********************************************************************************************************************-->
         <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-6" style="margin-left:5%;">
														<label>10.An infection such as pneumonia accompanied by a fever ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="pneumonia" name="pneumonia_accompanied"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="nopneumonia" name="pneumonia_accompanied"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
        <!---***********************************************************************************************************************-->
          <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-6" style="margin-left:5%;">
														<label >11.Significant unexplained weight loss ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="weightloss" name="weight_loss"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="noweightloss" name="weight_loss"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>

        <!---***********************************************************************************************************************-->
          <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-6" style="margin-left:5%;">
														<label>12.Afever,which can cause dehydration and rapid heartbeat ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="dehydration_rapid_heartbeat" name="dehydration_rapid_heartbeat"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="no_dehydration_rapid_heartbeat" name="dehydration_rapid_heartbeat"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
        <!---***********************************************************************************************************************-->
         <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-6" style="margin-left:5%;">
														<label>13.A deep vein thrombosis (blood clot) ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="vein_thrombosis" name="vein_thrombosis"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="no_vein_thrombosis" name="vein_thrombosis"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
        <!---***********************************************************************************************************************-->
         <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-6" style="margin-left:5%;">
														<label>14.Foot or ankle sores that won't heal (Causes of DM)?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="causes_of_dm" name="causes_of_dm"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="no_causes_of_dm" name="causes_of_dm"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
        <!---***********************************************************************************************************************-->
         <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-6" style="margin-left:5%;">
														<label>14.Eye condition such as bleeding in the retina or detached retina ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="detached_retina" name="detached_retina"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="no_detached_retina" name="detached_retina"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
        <!---***********************************************************************************************************************-->
         <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-6" style="margin-left:5%;">
														<label>16.Cuases of Hypertension?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="cause_of_hypertension" name="cause_of_hypertension"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="no_cause_of_hypertension" name="cause_of_hypertension"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
        <!---***********************************************************************************************************************-->
         <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-6" style="margin-left:5%;">
														<label>17.Cataract or lense transplant (Causes of DM) ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="lens_transplant" name="lens_transplant"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="no_lense_transplant" name="lens_transplant"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
        <!---***********************************************************************************************************************-->
         <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-6" style="margin-left:5%;">
														<label>18.Laser treatment or other eye surgery ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="laser_treatment"1 name="laser_treatment"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="no_laser_treatment" name="laser_treatment"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
        <!---***********************************************************************************************************************-->
        	<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-12" style="background-color: lightgray;">
														<label style="font-size:18px">11.WOMEN ONLY ANSWER THE FOLLOWING. DO YOU HAVE ? </label>
														
													</div>
												
												
 										</div>
                                 </div>
             <!---***********************************************************************************************************************-->
             	<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-4" style="margin-left:5%;">
														<label>1.Menstrual period problems ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="period_problems" name="period_problems"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="no_period_problems" name="period_problems"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
             <!---***********************************************************************************************************************-->
        	<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-4" style="margin-left:5%;">
														<label>2.Significant childbirth-related problems ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="childbirth_related_problem" name="childbirth_related_problem"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="no_childbirth_related_problem" name="childbirth_related_problem"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
                                   <!---***********************************************************************************************************************-->
        	<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-4" style="margin-left:5%;">
														<label>3.Urine loss when you cough,sneeze or laugh ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															Yes<input type="radio" class="form-control"
																value="urine_loss" name="urine_loss"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															No<input type="radio" class="form-control"
																value="no_urine_loss" name="urine_loss"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										</div>
                                 </div>
               <!---***********************************************************************************************************************-->
             <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-4">
														<label>12.DATE OF THE LAST PELVIC EXAM OR PAP SMEAR :</label>
														
													</div>
												
													<div class="col-md-5">
														<div class="form-group">
															<input type="date" class="form-control"
																value="" name="pap_smear">
																
														</div>
								
                                         </div>
                                        
 										</div>
                                 </div>
             <!---***********************************************************************************************************************-->
 <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5">
														<label>13.ARE YOU ON ANY TYPE OF HORMONE REPLACEMENT THERAPY:</label>
														
													</div>
												
													<div class="col-md-5">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="hormone_replacement_therapy">
																
														</div>
								
                                         </div>
                                        
 										</div>
                                 </div>
             <!---***********************************************************************************************************************-->
             		 <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-12" style="background-color: lightgray;">
														<label style="font-size:18px">14.MEN AND WOMEN ANSWER THE FOLLOWING :</label>
														
													</div>
												
                                        
 										</div>
                                 </div>
             <!---***********************************************************************************************************************-->
             	 <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													
												<div class="col-md-4" style="margin-left:5%;">
														<label>LIST ANY PRESCRIPTION YOOU ARE TAKING:</label>
														
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="prescription_taken">
																
														</div>
								
                                         </div>
                                        
 										</div>
                                 </div>
             <!---***********************************************************************************************************************-->
              <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													
												<div class="col-md-8" style="margin-left:5%;">
														<label>LIST ANY SELF-PRESCRIBED MEDICATIONS,DIETARY SUPPLEMENTS OR VITAMINS YOU ARE NOW TAKING:</label>
														
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="self_prescribed_medication">
																
														</div>
								
                                         </div>
                                        
 										</div>
                                 </div>
                                  <!---***********************************************************************************************************************-->
              <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													
												<div class="col-md-4" style="margin-left:5%;">
														<label>DATE OF LAST COMPLETE PHYSICAL EXAMINATION:</label>
														
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="date" class="form-control"
																value="" name="date_of_physical_examination">
																
														</div>
								
                                         </div>
                                        
 										</div>
                                 </div>
             <!---***********************************************************************************************************************-->
	<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
												
													<div class="col-xs-2 col-md-2 col-lg-2" style="margin-left:10%;">
																									<div class="form-group row">
													<div class="col-md-4" style="margin-left:20%;">
														<label>NORMAL</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="physical_examination_result" value="normal"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-2 col-md-2 col-lg-2">
													
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:20%;">
														<label>ABNORMAL</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="abnormal" name="physical_examination_result"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												


											</div>
										</div>
											<div class="col-xs-2 col-md-2 col-lg-2">
													
												<div class="form-group row">
													<div class="col-md-4" style="margin-left:20%;">
														<label>NEVER</label>
													</div>
													<div class="col-md-5">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="never" name="physical_examination_result"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-3 col-md-3 col-lg-3">
													
												<div class="form-group row">
													<div class="col-md-8" style="margin-left:20%;">
														<label>CAN'T REMEMBER</label>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="remember" name="physical_examination_result"
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
													
												<div class="col-md-4" style="margin-left:5%;">
														<label>DATE OF LAST CHEST X-RAY:</label>
														
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="date" class="form-control"
																value="" name="date_of_chest_xray">
																
														</div>
								
                                         </div>
                                        
 										</div>
                                 </div>
             <!---***********************************************************************************************************************-->
	<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
												
													<div class="col-xs-2 col-md-2 col-lg-2" style="margin-left:10%;">
																									<div class="form-group row">
													<div class="col-md-4" style="margin-left:20%;">
														<label>NORMAL</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="normal" value="chest_xray_result"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-2 col-md-2 col-lg-2">
													
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:20%;">
														<label>ABNORMAL</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="abnormal" name="chest_xray_result"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												


											</div>
										</div>
											<div class="col-xs-2 col-md-2 col-lg-2">
													
												<div class="form-group row">
													<div class="col-md-4" style="margin-left:20%;">
														<label>NEVER</label>
													</div>
													<div class="col-md-5">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="never" name="chest_xray_result"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-3 col-md-3 col-lg-3">
													
												<div class="form-group row">
													<div class="col-md-8" style="margin-left:20%;">
														<label>CAN'T REMEMBER</label>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="remember" name="chest_xray_result"
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
													
												<div class="col-md-4" style="margin-left:5%;">
														<label>DATE OF LAST ELECTROCARDIOGRAM(EKG OR ECG):</label>
														
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="date" class="form-control"
																value="" name="date_of_electrocardiogram">
																
														</div>
								
                                         </div>
                                        
 										</div>
                                 </div>
             <!---***********************************************************************************************************************-->
	<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
												
													<div class="col-xs-2 col-md-2 col-lg-2" style="margin-left:10%;">
																									<div class="form-group row">
													<div class="col-md-4" style="margin-left:20%;">
														<label>NORMAL</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="electrocardiogram_result" value="normal"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-2 col-md-2 col-lg-2">
													
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:20%;">
														<label>ABNORMAL</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="electrocardiogram_result" name="abnormal"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												


											</div>
										</div>
											<div class="col-xs-2 col-md-2 col-lg-2">
													
												<div class="form-group row">
													<div class="col-md-4" style="margin-left:20%;">
														<label>NEVER</label>
													</div>
													<div class="col-md-5">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="electrocardiogram_result" name="never"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-3 col-md-3 col-lg-3">
													
												<div class="form-group row">
													<div class="col-md-8" style="margin-left:20%;">
														<label>CAN'T REMEMBER</label>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="remember" name="electrocardiogram_result"
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
													
												<div class="col-md-4" style="margin-left:5%;">
														<label>DATE OF LAST DENTAL CHECK UP:</label>
														
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="date" class="form-control"
																value="" name="date_of_dental_checkup">
																
														</div>
								
                                         </div>
                                        
 										</div>
                                 </div>
             <!---***********************************************************************************************************************-->
	<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
												
													<div class="col-xs-2 col-md-2 col-lg-2" style="margin-left:10%;">
																									<div class="form-group row">
													<div class="col-md-4" style="margin-left:20%;">
														<label>NORMAL</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																 name="dental_checkup_result" value="normal"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-2 col-md-2 col-lg-2">
													
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:20%;">
														<label>ABNORMAL</label>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="abnormal" name="dental_checkup_result"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												


											</div>
										</div>
											<div class="col-xs-2 col-md-2 col-lg-2">
													
												<div class="form-group row">
													<div class="col-md-4" style="margin-left:20%;">
														<label>NEVER</label>
													</div>
													<div class="col-md-5">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="never" name="dental_checkup_result"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-3 col-md-3 col-lg-3">
													
												<div class="form-group row">
													<div class="col-md-8" style="margin-left:20%;">
														<label>CAN'T REMEMBER</label>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															<input type="checkbox" class="form-control"
																value="remember" name="dental_checkup_result"
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
													
												<div class="col-md-8" style="margin-left:5%;">
														<label>LIST ANY OTHER MEDICAL OR DIAGNOSTIC TEST YOU HAVE HAD IN THE PAST TWO YEARS:</label>
														
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<textarea  class="form-control"
																value="" name="diagnostic_test"></textarea>
																
														</div>
								
                                         </div>
                                        
 										</div>
                                 </div>
             <!---***********************************************************************************************************************-->
             <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													
												<div class="col-md-8" style="margin-left:5%;">
														<label>LIST HOSPITALIZATIONS,INCLUDING DATES OF AND REASONS FOR HOSPITALIZATION:</label>
														
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<textarea  class="form-control"
																value="" name="hospitalization"></textarea>
																
														</div>
								
                                         </div>
                                        
 										</div>
                                 </div>
             <!---***********************************************************************************************************************-->
              <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													
												<div class="col-md-4" style="margin-left:5%;">
														<label>LIST ANY DRUG ALLERGIES:</label>
														
													</div>
													<div class="col-md-5">
														<div class="form-group">
															<textarea  class="form-control"
																value="" name="drug_allergies"></textarea>
																
														</div>
								
                                         </div>
                                        
 										</div>
                                 </div>	
        <!---***********************************************************************************************************************-->
        <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>15.ARINE IN PLACE OF HIGH CHOLESTROL SHORTENING OR BUTTER?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="arine_in_place_of_butter" name="arine_in_place_of_butter"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_arine_in_place_of_butter" name="arine_in_place_of_butter"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 											

                                     </div>
                                 </div>
        <!---***********************************************************************************************************************-->
         <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>16.DO YOU USUALLY ABSTAIN FROM EXTRA SUGAR USAGE?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="extra_sugar_usage" name="extra_sugar_usage"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_extra_sugar_usage" name="extra_sugar_usage"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 											

                                     </div>
                                 </div>
        <!---***********************************************************************************************************************-->
         <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>17.DO YOU USUALLY ADD SALT FOOD?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="add_salt_food" name="add_salt_food"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_add_salt_food" name="add_salt_food"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 											

                                     </div>
                                 </div>
        <!---***********************************************************************************************************************-->
         <div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6">
														<label>18.DO YOU EAT DIFFERENTLY ON WEEKENDS AS COMPARED TO WEEKDAYS?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="compared_to_weekdays" name="compared_to_weekdays"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_compared_to_weekdays" name="compared_to_weekdays"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 											

                                     </div>
                                 </div>
        <!---***********************************************************************************************************************-->
        	
<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-12" style="background-color: lightgray;">
														<label style="font-size:18px">19.PAST MEDICAL HISTORY</label>
														
													</div>
												</div>
											</div>

											
									

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-5" style="margin-left: 5%;">
														<label>HEART ATTACK IF SO,HOW MANY YEARS AGO?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="heart_attack" name="heart_attack4"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_heart_attack" name="heart_attack4"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 											<div class="col-md-3">
														<div class="form-group">
															<input type="text" name="how_many_time_ago" id="hrtattackdtl" placeholder="" class="form-control">

														</div>
														</div>

                                     </div>
                                 </div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#hrtattackdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="hrtattack1")
											{
											$("#hrtattackdtl").show();
											}
											else
											{
											$("#hrtattackdtl").hide();
											}
											});
											});
</script>	
								
									

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left: 5%;">
														<label>RHEUMATIC FEVER</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="rheumatic_fever" name="rheumatic_fever"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="vo_rheumatic_fever" name="rheumatic_fever"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			
			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left: 5%;">
														<label>DISEASES OF THE ARTERIES</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="disease_of_artries" name="disease_of_artries"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_disease_of_artries" name="disease_of_artries"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left: 5%;">
														<label>VARICOSE VENIS</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="varicose_venis" name="varicose_venis"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_varicose_venis" name="varicose_venis"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left: 5%;">
														<label>ARTHRITISOF LEGS OR ARMS</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="arthritisof_legs" name="arthritisof_legs"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_arthritisof_legs" name="arthritisof_legs"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left: 5%;">
														<label>DIABETES OR ABNORMAL BLOOD -SUGAR TESTS</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="abnormal_blood_sugar_test" name="abnormal_blood_sugar_test"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_abnormal_blood_sugar_test" name="abnormal_blood_sugar_test"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-5" style="margin-left: 5%;">
														<label>PHLEBITIS (INFLAMMATION OF A VEIN)</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="phlebitis" name="phlebitis"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_phlebitis" name="phlebitis"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left: 5%;">
														<label>DIZZINESS OF FAINTING SPELLS</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="faintingspells" name="fainting_spells"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_faintingspells" name="fainting_spells"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left: 5%;">
														<label>EPILEPSY OR SEIZURES</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="epilepsy" name="epilepsy"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_epilepsy" name="epilepsy"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left: 5%;">
														<label>STROKE</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="stroke" name="stroke2"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="stroke" name="stroke2"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left: 5%;">
														<label>DIPHTHERIA</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="diptheria" name="diptheria"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_diptheria" name="diptheria"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left: 5%;">
														<label>SCARLET FEVER</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="scarletfever" name="scarletfever"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_scarletfever" name="scarletfever"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-5" style="margin-left: 5%;">
														<label>INFECTIOUS MONONUCLEOSIS</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="infectious_mononucleosis" name="infectious_mononucleosis"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_infectious_mononucleosis" name="infectious_mononucleosis"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-5" style="margin-left: 5%;">
														<label>NERVOUS OR EMOTIONAL PROBLEMS</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="emotionalprblm" name="emotional_problem"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_emotionalprblm" name="emotional_problem"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left: 5%;">
														<label>ANEMIA</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="anemia" name="anemia"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_anemia" name="anemia"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left: 5%;">
														<label>THYROID DYSFUNCTION</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="dysfunction" name="thyroid_dysfunction"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_dysfunction" name="thyroid_dysfunction"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left: 5%;">
														<label>PNEUMONIA</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="pneumonia" name="pneumonia"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_pneumonia" name="pneumonia"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left: 5%;">
														<label>BRONCHITIS</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="bronchitis" name="bronchitis"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_bronchitis" name="bronchitis"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left: 5%;">
														<label>OTHER LUNG DISEASE</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="lung_disease" name="lung_disease"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_lung_disease" name="lung_disease"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-5" style="margin-left: 5%;">
														<label>INJURIES TO BACK ,ARMS, LEGS OR JOINT</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="injuries_to_back" name="injuries_to_back"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_injuries_to_back" name="injuries_to_back"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										
                                     </div>
                                 </div>
								

			<!---***********************************************************************************************************************-->
		<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-12" style="background-color: lightgray;">
														<label style="font-size:18px">20.CARDIOVASCULAR</label>
														
													</div>
											
                                     </div>
                                 </div>
					<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-12" style="margin-left:5%;">
														<label>a).IS THERE HISTORY OF CARDIAC INFARCTION (CORONARY THROMBOSIS) ANY PERSISTENT ANGINAL PAIN OR CURRENT NEED OF TREATMENT FOR ANGINAL PAIN ?</label>
														
													</div>
													<div class="col-md-3">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="cardiac_infarction" name="cardiac_infarction"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_cardiac_infarction" name="cardiac_infarction"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 											<div class="col-md-4">
														<div class="form-group">
															<textarea name="how_treatment" id="coronarythrombosisdtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>

                                     </div>
                                 </div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#coronarythrombosisdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="cardiac_infarction")
											{
											$("#coronarythrombosisdtl").show();
											}
											else
											{
											$("#coronarythrombosisdtl").hide();
											}
											});
											});
</script>	
								
									

			<!---***********************************************************************************************************************-->
	
								
									<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:5%;">
														<label>b).IS THERE ANY OTHER EVIDENCE ,INCLUDING ECG OF ISCHAEMIC?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="ecg_ischaemic" name="ecg_ischaemic"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_ecg_ischaemic" name="ecg_ischaemic"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-2">
														<div class="form-group">
															<textarea name="ecg_ischaemic_detail" id="ischamicdtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>

                                     </div>
                                 </div>
										<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#ischamicdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="ecg_ischaemic")
											{
											$("#ischamicdtl").show();
											}
											else
											{
											$("#ischamicdtl").hide();
											}
											});
											});
</script>	
									

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-9" style="margin-left:5%;">
														<label>c).IS THERE ANY HISTORY OF EVIDENCE PF ARRHYTHMIA (EXCLUDING EXTRASYSTOLES WHICH DISAPPEAR ON EFFORT)? </label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="pf_arrhythmia" name="pf_arrhythmia"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_pf_arrhythmia" name="pf_arrhythmia"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-6">
														<div class="form-group">
															<textarea name="pf_arrhythmia_detail" id="arrhythmiadtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>

                                     </div>
                                 </div>
										<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#arrhythmiadtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="pf_arrhythmia")
											{
											$("#arrhythmiadtl").show();
											}
											else
											{
											$("#arrhythmiadtl").hide();
											}
											});
											});
</script>	
									

			<!---***********************************************************************************************************************-->	
				<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-4" style="margin-left:5%;">
														<label>d).IS THE BLOOD PRESSURE HIGH AT AGE ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="blood_pressure_high_at_age" name="blood_pressure_high_at_age"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_blood_pressure_high_at_age" name="blood_pressure_high_at_age"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-3">
														<div class="form-group">
															<textarea name="bphigh_at_age_detail" id="bphighdtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>

                                     </div>
                                 </div>
										<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#bphighdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="blood_pressure_high_at_age")
											{
											$("#bphighdtl").show();
											}
											else
											{
											$("#bphighdtl").hide();
											}
											});
											});
</script>	
									

			<!---***********************************************************************************************************************-->	
				<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-7" style="margin-left:5%;">
														<label>e).IS HYPERTENSION TREATED BY MEDICATION  OTHER DIURETIC OR BETA BLOCKER ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="beta_blocker" name="beta_blocker"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_beta_blocker" name="beta_blocker"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-2">
														<div class="form-group">
															<textarea name="beta_blocker_detail" id="btablockerdtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>

                                     </div>
                                 </div>
										<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#btablockerdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="beta_blocker")
											{
											$("#btablockerdtl").show();
											}
											else
											{
											$("#btablockerdtl").hide();
											}
											});
											});
</script>	
									

			<!---***********************************************************************************************************************-->
				<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-4" style="margin-left:5%;">
														<label>f).IS A CARDIAC PACEMAKER FITTED ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="pacemakerfit" name="pacemaker_fitted"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_pacemakerfit" name="pacemaker_fitted"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-3">
														<div class="form-group">
															<textarea name="pacemaker_fitted_detail" id="pacemakerdtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>

                                     </div>
                                 </div>
										<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#pacemakerdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="pacemakerfit")
											{
											$("#pacemakerdtl").show();
											}
											else
											{
											$("#pacemakerdtl").hide();
											}
											});
											});
</script>	
									

			<!---***********************************************************************************************************************-->	
				<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-7" style="margin-left:5%;">
														<label>g).IS THERE A HISTORY OF CURRENT INTERMITTENT CLAUDICATION?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="claudication" name="intermittent_claudication"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_claudication" name="intermittent_claudication"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-2">
														<div class="form-group">
															<textarea name="intermittent_claudication_detail" id="claudication" placeholder="" class="form-control"></textarea>
														</div>
														</div>

                                     </div>
                                 </div>
										<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#claudication").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="claudication")
											{
											$("#claudication").show();
											}
											else
											{
											$("#claudication").hide();
											}
											});
											});
</script>	
									

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-7" style="margin-left:5%;">
														<label>h).IS THERE A HISTORY OF OPEN HEART SURGERY OR VASCULAR?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="heart_surgery" name="heart_surgery"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_heart_surgery" name="heart_surgery"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-2">
														<div class="form-group">
															<textarea name="heart_surgery_detail" id="vasculardtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>

                                     </div>
                                 </div>
										<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#vasculardtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="heart_surgery")
											{
											$("#vasculardtl").show();
											}
											else
											{
											$("#vasculardtl").hide();
											}
											});
											});
</script>	
									

			<!---***********************************************************************************************************************-->
				<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-12" style="background-color: lightgray;">
														<label>21.ENDOCRINE SYSTEM</label>
														
													</div>
												
														</div>
													</div>
													
			<!---***********************************************************************************************************************-->
				<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
												<div class="col-md-5" style="margin-left:5%;">
														<label>a).IS THE APPLICANT A DIABETIC TREATED BY INSULIN INJECTION ?</label>
														
													</div>
													
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="insulin_injection" name="insulin_injection"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_insulin_injection" name="insulin_injection"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 											<div class="col-md-2">
														<div class="form-group">
															<textarea name="insulin_injection_detail" id="injectiondtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>

                                     </div>
                                 </div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#injectiondtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="insulin_injection")
											{
											$("#injectiondtl").show();
											}
											else
											{
											$("#injectiondtl").hide();
											}
											});
											});
</script>	
								
									

			<!---***********************************************************************************************************************-->
	
								
									<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-4" style="margin-left:5%;">
														<label>b).IS THE DIABETES STABLE?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="diabetes_stable" name="diabetes_stable"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_diabetes_stable" name="diabetes_stable"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-3">
														<div class="form-group">
															<textarea name="diabetes_stable_detail" id="diabetesstabledtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>

                                     </div>
                                 </div>
										<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#diabetesstabledtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="diabetes_stable")
											{
											$("#diabetesstabledtl").show();
											}
											else
											{
											$("#diabetesstabledtl").hide();
											}
											});
											});
</script>	
									

			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-5" style="margin-left:5%;">
														<label>c).HAVE THERE BEEN ANY HYPO-GLYCAEMIC EPISODES? </label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="hypoglycaemic" name="hypo_glycaemic_episode"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_hypoglycaemic" name="hypo_glycaemic_episode"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-3">
														<div class="form-group">
															<textarea name="hypo_glycaemic_detail" id="hypoglycaemicdtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>

                                     </div>
                                 </div>
										<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#hypoglycaemicdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="hypoglycaemic")
											{
											$("#hypoglycaemicdtl").show();
											}
											else
											{
											$("#hypoglycaemicdtl").hide();
											}
											});
											});
</script>	
									

			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-12" style="background-color: lightgray;" >
														<label>22.EPILEPSY </label>
														
													</div>
												
                                     </div>
                                 </div>
					<!---***********************************************************************************************************************-->	
				<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-12" style="margin-left:5%;">
														<label>a).HAS THE APPLICANT SUFFERED ANY ATTACK OF EPILEPSY SINCE ATTENDING THE AGE OF 5 YEARS?</label>
														
													</div>
													<div class="col-md-3">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="suffered_any_attack" name="suffered_any_attack"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_suffered_any_attack" name="suffered_any_attack"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 											<div class="col-md-4">
														<div class="form-group">
															<textarea name="suffered_any_attack_detail" id="epilepsydtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>

                                     </div>
                                 </div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#epilepsydtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="suffered_any_attack")
											{
											$("#epilepsydtl").show();
											}
											else
											{
											$("#epilepsydtl").hide();
											}
											});
											});
</script>	
								
									

			<!---***********************************************************************************************************************-->	
			
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-12" style="background-color: lightgray;">
														<label>23.NERVOUS SYSTEM</label>
														
													</div>
												</div>
											</div>
			<!---***********************************************************************************************************************-->	
			<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:5%;">
														<label>a).IS THERE ANY PROGRESSIVE DISORDER OF THE NERVOUS SYSTEM?</label>
														
													</div>
													
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="progressive_disorder" name="progressive_disorder"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_progressive_disorder" name="progressive_disorder"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 											<div class="col-md-3">
														<div class="form-group">
															<textarea name="progressive_disorder_detail" id="nervoussystemdtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>

                                     </div>
                                 </div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#nervoussystemdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="progressive_disorder")
											{
											$("#nervoussystemdtl").show();
											}
											else
											{
											$("#nervoussystemdtl").hide();
											}
											});
											});
</script>	
								
									

			<!---***********************************************************************************************************************-->	
	
		<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-6" style="margin-left:5%;">
													<label>b).IS THERE ANY HISTORY OF ONE OR MORE TRANSIENT ISCHAEMIC?</label>
														
													</div>
												<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="transient_ischaemic" name="transient_ischaemic"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_transient_ischaemic" name="transient_ischaemic"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-3">
														<div class="form-group">
															<textarea name="transient_ischaemic_detail" id="ischaemicdtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>
														 </div>
                                 </div>
												<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#ischaemicdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="transient_ischaemic")
											{
											$("#ischaemicdtl").show();
											}
											else
											{
											$("#ischaemicdtl").hide();
											}
											});
											});
</script>	
			<!---***********************************************************************************************************************-->	
		<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-6" style="margin-left:5%;">
													<label>c).ATTACKS OR CEREBROVASCULAR ACCIDENTS?</label>
														
													</div>
												<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="accidents" name="cerebrovascular_accident"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_accidents" name="cerebrovascular_accident"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-3">
														<div class="form-group">
															<textarea name="cerebrovascular_accident_detail" id="accidentsdtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>
														 </div>
                                 </div>
												<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#accidentsdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="accidents")
											{
											$("#accidentsdtl").show();
											}
											else
											{
											$("#accidentsdtl").hide();
											}
											});
											});
</script>	
						
			<!---***********************************************************************************************************************-->
				<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-8" style="margin-left:5%;">
													<label>d).IS THERE ANY HEARING DEFECT TO THE EXTENT OF PREVENTING COMMUNICATION BY TELEPHONE ?</label>
														
													</div>
												<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="preventing_communication" name="preventing_communication"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_preventing_communication" name="preventing_communication"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-12">
														<div class="form-group">
															<textarea name="preventing_communication_detail" id="telephonedtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>
														 </div>
                                 </div>
												<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#telephonedtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="preventing_communication")
											{
											$("#telephonedtl").show();
											}
											else
											{
											$("#telephonedtl").hide();
											}
											});
											});
</script>	
						
			<!---***********************************************************************************************************************-->
				<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-8" style="margin-left:5%;">
													<label>e).IS THEER ANY HEARING DEFECT TO THE EXTENT OF PREVENTING COMMUNICATION BY TELEPHONE ?</label>
														
													</div>
												<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="hearing" name="hearing_defect"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_hearing" name="hearing_defect"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-12">
														<div class="form-group">
															<textarea name="hearing_defect_detail" id="communicatetelephonedtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>
														 </div>
                                 </div>
												<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#communicatetelephonedtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="hearing")
											{
											$("#communicatetelephonedtl").show();
											}
											else
											{
											$("#communicatetelephonedtl").hide();
											}
											});
											});
</script>	
						
			<!---***********************************************************************************************************************-->
				<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-6" style="margin-left:5%;">
													<label>f).IS THERE A HISTORY OF DAYTIME/EXCESSIVE SLEEPINESS?</label>
														
													</div>
												<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="sleepiness" name="sleepiness"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_sleepiness" name="sleepiness"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-3">
														<div class="form-group">
															<textarea name="sleepiness_detail" id="sleepinessdtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>
														 </div>
                                 </div>
												<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#sleepinessdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="sleepiness")
											{
											$("#sleepinessdtl").show();
											}
											else
											{
											$("#sleepinessdtl").hide();
											}
											});
											});
</script>	
						
			<!---***********************************************************************************************************************-->
				<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-12" style="background-color: lightgray;">
														<label>24.PSYCHIATRIC ILLNESS</label>
														
													</div>
											</div>
										</div>
			<!---***********************************************************************************************************************-->	
				<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-6" style="margin-left:5%;">
														<label>a).IS THERE A HISTORY OF PSYCHOSIS ?</label>
														
													</div>
													
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="psychos1is" name="history_of_psychosis"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_psychosis" name="history_of_psychosis"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 											<div class="col-md-3">
														<div class="form-group">
															<textarea name="history_of_psychosis_detail" id="psychosisdtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>

                                     </div>
                                 </div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#psychosisdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="psychos1is")
											{
											$("#psychosisdtl").show();
											}
											else
											{
											$("#psychosisdtl").hide();
											}
											});
											});
</script>	
								
									

			<!---***********************************************************************************************************************-->	
		<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-6" style="margin-left:5%;">
													<label>b).IS THERE ABUSE OF ALCOHOL OR DRUGS?</label>
														
													</div>
												<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="abuse_alcohol" name="abuse_alcohol"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="abuse_alcohol" name="abuse_alcohol"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-3">
														<div class="form-group">
															<textarea name="abuse_alcohol_detail" id="alcdrugdtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>
														 </div>
                                 </div>
												<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#alcdrugdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="alcdrug1")
											{
											$("#alcdrugdtl").show();
											}
											else
											{
											$("#alcdrugdtl").hide();
											}
											});
											});
</script>	
			<!---***********************************************************************************************************************-->	
		<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-6" style="margin-left:5%;">
													<label>c).HAS THE APPLICANT SUFFERED FROM ANY MENTAL DISORDER?</label>
														
													</div>
												<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="mentaldisorder" name="mental_disorder"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_mentaldisorder" name="mental_disorder"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-3">
														<div class="form-group">
															<textarea name="mental_disorder_detail" id="mentaldisorderdtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>
														 </div>
                                 </div>
												<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#mentaldisorderdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="mentaldisorder")
											{
											$("#mentaldisorderdtl").show();
											}
											else
											{
											$("#mentaldisorderdtl").hide();
											}
											});
											});
									</script>	
						
			<!---***********************************************************************************************************************-->
							<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													<div class="col-md-12" style="background-color: lightgray;">
														<label>25.VISION</label>
														
														<label>(If you do not have the equipment to carry out these checks then you should refer the applicant to an opthalmologist or optician):</label>
														
													</div>
											</div>
										</div>
			<!---***********************************************************************************************************************
			*************************************************************************************************************-->
							<div class="col-xs-12 col-md-12 col-lg-12">
													
												<div class="form-group row">
													
													<div class="col-md-6" style="margin-left:5%;">
														<label>a) i).HAS THE APPLICANT HAD A CATARACT REMOVED ?</label>
														
													</div>
													
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="cataract_removed" name="cataract_removed"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_cataract_removed" name="cataract_removed"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 											<div class="col-md-3">
														<div class="form-group">
															<textarea name="cataract_removed_detail" id="cataractremoveddtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>

                                     </div>
                                 </div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#cataractremoveddtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="cataract_removed")
											{
											$("#cataractremoveddtl").show();
											}
											else
											{
											$("#cataractremoveddtl").hide();
											}
											});
											});
</script>	
								
									

			<!---***********************************************************************************************************************-->	
		<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-7" style="margin-left:5%;">
													<label>a) ii).WITHOUT CORRECTION IS ACUITY WORSE THAN 3/60 (Snelling) IN EITHER EYE ?</label>
														
													</div>
												<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="snelling" name="snelling"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_snelling" name="snelling"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-2">
														<div class="form-group">
															<textarea name="snelling_detail" id="snellingdtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>
														 </div>
                                 </div>
												<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#snellingdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="snelling")
											{
											$("#snellingdtl").show();
											}
											else
											{
											$("#snellingdtl").hide();
											}
											});
											});
</script>	
			<!---***********************************************************************************************************************-->	
		<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-12" style="background-color: lightgray;">
													<label>b) IS THE VISUAL ACUITY,USING CORRECTIVE LENSES IF WORN:</label>
														
													</div>
											</div>
										</div>
						
			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													
													<div class="col-md-5" style="margin-left:5%;">
													<label>i).Worse than 6/9 in the stronger or 6/12 in the weaker eye ?</label>
														
													</div>
												<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="weaker_eye" name="weaker_eye"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_weaker_eye" name="weaker_eye"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-4">
														<div class="form-group">
															<textarea name="weaker_eye_detail" id="weakereyedtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>
														 </div>
                                 </div>
												<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#weakereyedtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="weaker_eye")
											{
											$("#weakereyedtl").show();
											}
											else
											{
											$("#weakereyedtl").hide();
											}
											});
											});
									</script>	
						
			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-4" style="margin-left:5%;">
													<label>ii).Worse than 6/12 or 6/36 respectively ?</label>
														
													</div>
												<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="6/36_respectively" name="6/36_respectively"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_6/36_respectively" name="6/36_respectively"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-4">
														<div class="form-group">
															<textarea name="6/36_respectively_detail" id="respectivelydtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>
														 </div>
                                 </div>
												<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#respectivelydtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="6/36_respectively")
											{
											$("#respectivelydtl").show();
											}
											else
											{
											$("#respectivelydtl").hide();
											}
											});
											});
									</script>	
						
			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-4" style="margin-left:5%;">
													<label>iii).HAS THE PATIENT MONOCULAR VISION ?</label>
														
													</div>
												<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="monocular_vision" name="monocular_vision"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_monocular_vision" name="monocular_vision"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-4">
														<div class="form-group">
															<textarea name="monocular_vision_detail" id="monocularvisiondtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>
														 </div>
                                 </div>
												<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#monocularvisiondtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="monocularvision1")
											{
											$("#monocularvisiondtl").show();
											}
											else
											{
											$("#monocularvisiondtl").hide();
											}
											});
											});
									</script>	
						
			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
													<div class="col-md-6" style="margin-left:5%;">
													<label>iv).IS THERE DOUBLE DIVISION OR A PATHOLOGICAL FIELD DEFECT ?</label>
														
													</div>
												<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="pathological" name="pathological_field_defect"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_pathological" name="pathological_field_defect"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-4">
														<div class="form-group">
															<textarea name="pathological_detail" id="pathologicaldtl" placeholder="" class="form-control"></textarea>
														</div>
														</div>
														 </div>
                                 </div>
												<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#pathologicaldtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="pathological")
											{
											$("#pathologicaldtl").show();
											}
											else
											{
											$("#pathologicaldtl").hide();
											}
											});
											});
									</script>	
						
			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
												<div class="col-md-12" style="background-color: lightgray;">
													<label>26.MUSCULOSKELETAL SYSTEM</label>
														
													</div>
												</div>
											</div>
			<!---***********************************************************************************************************************-->
			<div class="col-xs-12 col-md-12 col-lg-12">
											<div class="form-group row">
											<div class="col-md-12">
													<label>a).HAS THE APPLICANT ANY DEFORMITY , LOSS OF LIMBS OR PHYSICAL DISABILITY(with special attention paid to the condition of the arms,legs,hands and joints) WHICH IS LIKELY TO INTERFERE WITH THE EFFICIENT DISCHARGE OF HIS OR HER DUTIES AS A VOCATIONAL DRIVER ?</label>
														
													</div>
													<div class="col-md-1">
														<div class="form-group">
														</div>
													</div>
												<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="physical_disability" name="physical_disability"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no_physical_disability" name="physical_disability"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
 										<div class="col-md-6">
														<div class="form-group">
															<textarea name="physical_disability_detail" id="efficientdischargedtl" placeholder="PLEASE SPECIFY" class="form-control"></textarea>
														</div>
														</div>
														 </div>
                                 </div>
												<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												
											$("#efficientdischargedtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="physical_disability")
											{
											$("#efficientdischargedtl").show();
											}
											else
											{
											$("#efficientdischargedtl").hide();
											}
											});
											});
									</script>	
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

