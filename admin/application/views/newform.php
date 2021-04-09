
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Patient Registration  Form</h4>
						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/patient/matchid" enctype="multipart/Form-data" >
							<div class="card-body">
								<div class="row" id="regForm">
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label>Enter Patient ID<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="username"
																id="reg_id" required="required">
														</div>
												 </div>
											</div>
										</div>
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3"></div>
													<div class="col-md-9">
														<div class="form-group">
															<button type="submit" class="btn btn-primary"
																id="regisbtn" style="">
														<i class="fas fa-check">&nbsp;OK</i>
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
	<?php $id=$this->uri->segment(4);
	if($this->uri->segment(3)=="false")
	{?><span style="color:red;font-weight:bold">
		<?php echo "Please Check Your ID";?></span>
<?php	}
if($id){
$this->db->where("username",$id);
$pinfo = $this->db->get("reg_patient_info")->row();

$this->db->where("reg_id",$pinfo->id);
$pdd = $this->db->get("reg_patient_diet");

$this->db->where("reg_id",$pinfo->id);
$rss = $this->db->get("reg_smoking_status");

$this->db->where("reg_id",$pinfo->id);
$ras = $this->db->get("reg_alcohol_status");

$this->db->where("reg_id",$pinfo->id);
$reh = $this->db->get("reg_exercise_habit");

?>
		<div class="col-xs-12 col-md-12 col-lg-12">
										<div class="form-group row">
											<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-2 col-md-3 col-lg-2" style="margin-left: 3%;">
												<div class="form-group row">
											
													<div class="col-md-12">
														<div class="form-group">
															   
															<a href="<?php echo base_url();?>index.php/patient/diet/<?php echo $id;?>"><button type="submit" class="btn btn-primary" id=""><i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp;&nbsp;Diet Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></button></a>
														</div>
													<?php if($pdd->num_rows()>0){
        												$i=1;	foreach($pdd->result() as $pdd1):?>
        													 <tr> <td><?php echo $i;?></td><td><?php echo $pdd1->date;?></td></tr>
        													<?php $i++;endforeach;}?>	
													</div>
												</div>

											</div>
											<div class="col-xs-2 col-md-3 col-lg-2" >
												<div class="form-group row">
												
													<div class="col-md-12">
														<div class="form-group">
															   
															<a href="<?php echo base_url();?>index.php/patient/smoking_status/<?php echo $id;?>"><button type="submit" class="btn btn-primary" id=""><i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp;&nbsp;Smoking Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></button></a>
														</div>
													
													<?php if($rss->num_rows()>0){
        												$i=1;	foreach($rss->result() as $rs):?>
        													 <tr> <td><?php echo $i;?></td><td><?php echo $rs->date;?></td></tr>
        													<?php $i++;endforeach;}?>
        													</div>
												</div>

											</div>
											<div class="col-xs-2 col-md-3 col-lg-2">
												<div class="form-group row">
												
													<div class="col-md-12">
														<div class="form-group">
															   
															<a href="<?php echo base_url();?>index.php/patient/alcohol_status/<?php echo $id;?>"><button type="submit" class="btn btn-primary" id=""><i class="fas fa-arrow-circle-right">&nbsp;&nbsp; &nbsp;&nbsp;Alcohol Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></button></a>
														</div>
															<?php if($ras->num_rows()>0){
        												$i=1;	foreach($ras->result() as $raas):?>
        													 <tr> <td><?php echo $i;?></td><td><?php echo $raas->date;?></td></tr>
        													<?php $i++;endforeach;}?>
													</div>
												</div>

											</div>
											<div class="col-xs-2 col-md-3 col-lg-2" >
												<div class="form-group row">
													
													<div class="col-md-12">
														<div class="form-group">
															   
															<a href="<?php echo base_url();?>index.php/patient/patient_exercise/<?php echo $id;?>"><button type="submit" class="btn btn-primary" id=""><i class="fas fa-arrow-circle-right">&nbsp; &nbsp;&nbsp;&nbsp;Exercise Habit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></button></a>
														</div>
															<?php if($reh->num_rows()>0){
        												$i=1;	foreach($reh->result() as $reha):?>
        													 <tr> <td><?php echo $i;?></td><td><?php echo $reha->date;?></td></tr>
        													<?php $i++;endforeach;}?>
													</div>
												</div>

											</div>
										</div>
									
																</div>
											</div>
										</div>
										<?php	}?>
</div>
	</div>

</div>