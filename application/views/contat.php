 <?php $this->load->view("headerCss");?>
<?php $this->load->view("header");?>
<br>

    <section class="segment5 partner-banner text-center space-mini" style="background-image: url('https://pronto-core-cdn.prontomarketing.com/2/wp-content/uploads/sites/2616/2018/03/masthead-contact-us.jpg'); background-repeat: no-repeat; background-position: center center; background-attachment: scroll; background-size: cover;">

		<div class="row">
			<div class="col-md-12">
			    <?php if($this->uri->segment(3)=="success"){?>
			    <div class="alert alert-info">Thans for contact us we will reply soon.</div>
			    <?php }?>
				<h1 >
					<p class="font-24 margin-vertical-1 font-italic">Contact Us
				
				</h1>
				</div>
			
				
				<p class="font-24 margin-vertical-1 font-italic ">If you would have
					a question or would like additional information, please fill in the
					form below and someone from our office will be in contact with you</p>
				<div class="contact-form col-md-6">
					<div class='gf_browser_chrome gform_wrapper' id='gform_wrapper_1'>
						<form method='post' 	action="<?php echo base_url()?>index.php/welcome/contactform/">
						
							<div class='gform_body'>
								<ul id='gform_fields_1'
									class='gform_fields top_label form_sublabel_below description_below'>
									<li id='field_1_7'
										class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'><label
										class='gfield_label gfield_label_before_complex'>Name<span
											class='gfield_required'>*</span></label>
										<div
											class='ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name'
											id='input_1_7'>
											<p>
												<span id='input_1_7_3_container' class='name_first'><br/> 
												<input	type='text' name='firstname' required id='input_1_7_3' value=''	aria-label='First name' tabindex='51' aria-required="true"	aria-invalid="false" placeholder='First Name' /><br /> <label
													for='input_1_7_3'>First Name</label><br /> </span>
											</p>
											<p>
												<span id='input_1_7_6_container' class='name_last'><br /> 
												<input	type='text' name='lastname' required id='input_1_7_6' value=''	aria-label='Last name' tabindex='53' aria-required="true"	aria-invalid="false" placeholder='Last Name' /><br /> <label
													for='input_1_7_6'>Last Name</label><br /> </span>
											</p>
										</div></li>
									<li id='field_1_2'
										class='gfield gf_left_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'><label
										class='gfield_label' for='input_1_2'>Email<span
											class='gfield_required'>*</span></label>
										<div class='ginput_container ginput_container_email'>
											<input name='email' id='input_1_2' required type='email' value=''
												class='large' tabindex='55' placeholder='Email'
												aria-required="true" aria-invalid="false" />
										</div></li>
									<li id='field_1_3'
										class='gfield gf_right_half field_sublabel_below field_description_below gfield_visibility_visible'><label
										class='gfield_label' for='input_1_3'>Contact Number</label>
										<div class='ginput_container ginput_container_phone'>
											<input name='mobile' id='input_1_3' required type='text' value=''
												class='large' tabindex='56' placeholder='Phone'
												aria-invalid="false" />
										</div></li>
									<li id='field_1_9'
										class='gfield field_sublabel_below field_description_below gfield_visibility_visible'><label
										class='gfield_label gfield_label_before_complex'>Address</label>
										<div
											class='ginput_complex ginput_container has_street has_city has_state has_zip ginput_container_address'
											id='input_1_9'>
											<span class='ginput_full address_line_1'
												id='input_1_9_1_container'><br /> 
												<input type='text'	name='saddress' required id='input_1_9_1' value='' tabindex='57'
												placeholder='Street Address' /><br /> <label
												for='input_1_9_1' id='input_1_9_1_label'>Street Address</label><br />
											</span>
											<span class='ginput_left address_city' required	id='input_1_9_3_container'><br /> 
											<input type='text'	name='city' id='input_1_9_3' value='' tabindex='58'	placeholder='City' /><br /> 
											<label for='input_1_9_3'	id='input_1_9_3_label'>City</label><br /> </span><span
												class='ginput_right address_state'
												id='input_1_9_4_container'><br /> 
												<input type='text'
												name='state' id='input_1_9_4' value='' required tabindex='60'
												placeholder='State / Province' /><br /> <label
												for='input_1_9_4' id='input_1_9_4_label'>State / Province /
													Region</label><br /> </span><span
												class='ginput_left address_zip' id='input_1_9_5_container'><br />
												<input type='text' required name='pin_code' id='input_1_9_5'
												value='' tabindex='61' placeholder='ZIP / Postal Code' /><br />
												<label for='input_1_9_5' id='input_1_9_5_label'>ZIP / Postal
													Code</label><br /> </span>
											</p>
											<div class='gf_clear gf_clear_complex'></div>
											</p>
										</div></li>
									<li id='field_1_8'
										class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'><label
										class='gfield_label' for='input_1_8'>I am interested in...<span
											class='gfield_required'>*</span></label>
										<div class='ginput_container ginput_container_select'>
											<select name='interested' id='input_1_8'
												class='large gfield_select' tabindex='62'
												aria-required="true" aria-invalid="false">
											    <option value=''	selected='selected' required class='gf_placeholder'>I am interested
													in...</option>
												<option value=''></option>
												<option value='Psychological or Educational Evaluation'>Psychological
													or Educational Evaluation</option>
												<option value='ABA Clinic'>ABA Clinic</option>
												<option value='Adult Services'>Adult Services</option>
												<option value='School Consultation'>School Consultation</option>
												<option value='Program Evaluation'>Program Evaluation</option>
												<option value='Outpatient Therapy'>Outpatient Therapy</option>
												<option value='Occupational Therapy'>Occupational Therapy</option>
												<option value='Other'>Other</option></select>
										</div></li>
									<li id='field_1_5'
										class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'><label
										class='gfield_label' for='input_1_5'>Subject<span
											class='gfield_required'>*</span></label>
										<div class='ginput_container ginput_container_text'>
											<input name='subject' id='input_1_5' type='text' value=''
												class='large' tabindex='63' placeholder='Subject'
												aria-required="true" aria-invalid="false" />
										</div></li>
									<li id='field_1_6'
										class='gfield field_sublabel_below field_description_below gfield_visibility_visible'><label
										class='gfield_label' for='input_1_6'>Message</label>
										<div class='ginput_container ginput_container_textarea'>
											<textarea name='msg' id='input_1_6' required
												class='textarea medium' tabindex='64' placeholder='Message'
												aria-invalid="false" rows='10' cols='50'></textarea>
										</div></li>
									<li id='field_1_10'
										class='gfield field_sublabel_below field_description_below gfield_visibility_visible'><label
										class='gfield_label'></label>
										<div class='ginput_container ginput_container_checkbox'>
											<ul class='gfield_checkbox' id='input_1_10'>
												<li class='gchoice_1_10_1'><input name='input_10.1'
													type='checkbox' value='Sign up for our email newsletter!'
													id='choice_1_10_1' tabindex='65' /><br /> <label
													for='choice_1_10_1' id='label_1_10_1'>Sign up for our email
														newsletter!</label></li>
											</ul>
										</div></li>
									<li id='field_1_11'
										class='gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_visible'><label
										class='gfield_label' for='input_1_11'>Email</label>
										<div class='ginput_container'>
											<input name='input_11' id='input_1_11' type='text' value='' />
										</div>
										<div class='gfield_description' id='gfield_description__11'>This
											field is for validation purposes and should be left
											unchanged.</div></li>
								</ul>
							</div>
							<div class='gform_footer top_label'>
							<button type="submit" class="btn btn-success">Submit</button>
								
								</p>
							
							</div>
						
						</form>
					
					</div>
				
				</div>
			
			<div class="col-md-6 margin-top-20">
				<div id="map-1044238140" class="google-map margin-bottom-20"></div>
				<div itemscope itemtype="http://schema.org/LocalBusiness">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3407.9250412792117!2d75.60603461449878!3d31.333443181431896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5a3d46f2f7f7%3A0xb50ad58944a844df!2s685%2C%20Guru%20Gobind%20Singh%20Ave%2C%20Guru%20Gobind%20Singh%20Avenue%2C%20Jalandhar%2C%20Punjab%20144009!5e0!3m2!1sen!2sin!4v1598871579014!5m2!1sen!2sin"
						width="600" height="450" frameborder="0" style="border: 0;"
						allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					<div itemprop="geo" itemscope
						itemtype="http://schema.org/GeoCoordinates">
						<meta itemprop="latitude" content="41.7116413" />
					</div>
					<p>
						<script type="text/javascript">var map;jQuery(document).ready(function($){map = new GMaps({div: "#map-1044238140",lat: 41.7116413,lng: -72.6078624,width: "100%",height: "300px"});map.setOptions({ scrollwheel: false });map.addMarker({lat: 41.7116413,lng: -72.6078624,title: "The Center for Children with Special Needs",infoWindow: {content: "The Center for Children with Special Needs"}});});</script>
					</p>
					<div class="contact-title">
						<h2 class="font-24">Contact Info</h2>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div itemscope itemtype="http://schema.org/LocalBusiness">
								<address itemprop="address" itemscope
									itemtype="http://schema.org/PostalAddress">
									<ul class="fa-ul">
										<li><i class="fa fa-map-marker fa-1x fa-li accent"></i><span
											itemprop="streetAddress">Manish Aggarwal </span><br />
										<span itemprop="addressLocality"><p
													class="font-24 margin-vertical-20 font-italic">685, Guru
													Govind Singh Avenue, Jalandhar, Punjab</span>, <span
											itemprop="addressRegion"></span> <span itemprop="postalCode"></span></li>
										<li class="margin-top-10"><i
											class="fa fa-phone fa-1x fa-li accent"></i>Phone: <span
											itemprop="telephone"><p
													class="font-24 margin-vertical-20 font-italic">+91
													9646848565, +91 9815386685</span></li>
										<li><i class="fa fa-print fa-1x fa-li accent"></i> <span
											itemprop="faxNumber"></span></li>
										<li><i class="fa fa-envelope fa-1x fa-li accent"></i>Email: <a
											href="mailto:info@ccsnct.org" itemprop="email"><p
													class="font-24 margin-vertical-20 font-italic">manishjrc685@gmail.com</a></li>
									</ul>
								</address>
								<div itemprop="geo" itemscope
									itemtype="http://schema.org/GeoCoordinates">
									<meta itemprop="latitude" content="41.7116413" />
									<meta itemprop="longitude" content="-72.6078624" />
								</div>
								<p>
									<meta itemprop="image" content="" />
									<meta itemprop="priceRange" content="" />
							
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="social-footer pull-right xs-float-none">
								<a href=""
									onclick="__gaTracker('send', 'event', 'outbound-article');"
									target="_blank"><span class="fa-stack fa-1x ico-facebook"><i
										class="fa fa-circle fa-stack-2x"></i><i
										class="fa fa-facebook fa-inverse fa-stack-1x"></i></span></a><a
									href="#"
									onclick="__gaTracker('send', 'event', 'outbound-article', '#', '');"
									target="_blank"><span class="fa-stack fa-1x ico-linkedin"><i
										class="fa fa-circle fa-stack-2x"></i><i
										class="fa fa-linkedin fa-inverse fa-stack-1x"></i></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
</secion>

<?php $this->load->view("footer");?>
<?php $this->load->view("footerJs");?>
