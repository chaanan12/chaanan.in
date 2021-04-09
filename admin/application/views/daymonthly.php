<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Monthly Statement</h4>
						</div>
						<div class="row">
							<div class="col-md-12" id="adminPasswordAlert"></div>
						</div>
					
							<div class="card-body">
							    	<form class="theme-form" action="<?php echo base_url();?>index.php/daybookController/getdata" method="post">
								<div class="row" >
											<div class="col-xs-5 col-md-5 col-lg-5">
												<div class="form-group row">
													<div class="col-md-3">
														<label>Start Date<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="date" class="form-control" id="sdate"  name="sdate">
														</div>
													</div>
												</div>
											</div>
										
											<div class="col-xs-5 col-md-5 col-lg-5">
												<div class="form-group row">
													<div class="col-md-3">
														<label>End Date<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
																<input type="date" class="form-control" id="edate" name="edate">
														</div>
													</div>
												</div>
											</div>
											<div class="col-xs-2 col-md-2 col-lg-2">
												<div class="col-md-9">
														<div class="form-group">
															<button type="submit" class="btn btn-primary"
																id="changePassword">
																<i class="far fa-edit">&nbsp;Submit</i>
															</button>
														</div>
													</div>
											</div>
										</div>
										</form>
									
									
									<?php if($camount>0){?>
        								
        								    
        								<div class="row" >
									    
									    <div class ="alert alert-info">Total monthly collection from <?php echo $sdate;?> to <?php echo $edate;?>  is =<?php echo $camount;?></div>
									    <table class="table table-bordered table-hover table-responsive text-nowrap">
									         <thead>
									             <tr> <th>Sno</th>
									             <th> Username[Name]</th>
									              <th> Total Direct</th>
									              <th> Tranfer club</th>
									               <th> Month</th>
									                <th> transfer Amount</th>
									                <th> status</th>
									                <th>Activity</th>
									             </tr>
									         </thead>
									         <tbody>
									             <?php 
									             $travel=array();
									             $car=array();
									             $diamond=array();
									             $ambassador = array();
									             $house=array();
									             $royalty =array();
									             $lic=array();
									             $directleft=0;
									             $getc = $this->db->get("customer_info");
									            $i=0; foreach($getc->result() as $cid):
									                 	$d11= $this->db->query("select * from silver_tree where  silver_tree.rightjoiner='$cid->id'")->num_rows();
                                                        	$d12=$this->db->query("select * from silver_tree where  silver_tree.leftjoiner='$cid->id' ")->num_rows();
                                                        	$directleft=$d11+$d12;
                                                        	if($directleft>19){
                                                        	    $travel[$i]=$cid->id;
                                                        	}
                                                        	if($directleft>34){
                                                        	    $car[$i]=$cid->id;
                                                        	}
                                                        	if($directleft>55){
                                                        	    $diamond[$i]=$cid->id;
                                                        	}
                                                        	if($directleft>85){
                                                        	    $ambassador[$i]=$cid->id;
                                                        	}
                                                        		if($directleft>130){
                                                        	    $house[$i]=$cid->id;
                                                        	}
                                                        		if($directleft>205){
                                                        	    $royalty[$i]=$cid->id;
                                                        	}
                                                        //	echo $directleft;
									                $i++; endforeach;?>
									       </tbody>
									       <?php $j=1; if($travel){
									          $perh =  ($camount*1)/100;
									           foreach($travel as $t):
									               	$d11= $this->db->query("select * from silver_tree where  silver_tree.rightjoiner='$t'")->num_rows();
                                                        	$d12=$this->db->query("select * from silver_tree where  silver_tree.leftjoiner='$t' ")->num_rows();
                                                        	$directleft=$d11+$d12;
									       $this->db->where("id",$t);
									       $getrow = $this->db->get("customer_info")->row();?>
									           <tr><td><?php echo $j;?></td>
									           <td><?php echo $getrow->username."[ ".$getrow->customer_name."]";?></td>
									            <td><?php echo $directleft;?></td>
									           <td>Travel Club</td>
									           <td><?php echo date("Y-m",strtotime($edate));?></td>
									           <td><?php echo $perh;?></td>
									            <td><?php $this->db->where("paid_to",$t);
									            $this->db->where("date1 >",$sdate);
									              $this->db->where("date1 <",$edate);
									              $this->db->where("transaction_type",5);
									           $oldr = $this->db->get("inner_daybook");
									           if($oldr->num_rows()>0){echo "paid";}else{ echo "Pending";}?></td>
									           <td><button class ="btn btn-success">Pay</button></td>
									           </tr>
									          <?php $j++; endforeach; } 
									          //
									          if($car){
									          $perh =  ($camount*2)/100;
									           foreach($car as $t):
									               $d11= $this->db->query("select * from silver_tree where  silver_tree.rightjoiner='$t'")->num_rows();
                                                        	$d12=$this->db->query("select * from silver_tree where  silver_tree.leftjoiner='$t' ")->num_rows();
                                                        	$directleft=$d11+$d12;
									       $this->db->where("id",$t);
									       $getrow = $this->db->get("customer_info")->row();?>
									           <tr><td><?php echo $j;?></td>
									           <td><?php echo $getrow->username."[ ".$getrow->customer_name."]";?></td>
									            <td><?php echo $directleft;?></td>
									           <td>Car Club</td>
									           <td><?php echo date("Y-m",strtotime($edate));?></td>
									           <td><?php echo $perh;?></td>
									            <td><?php $this->db->where("paid_to",$t);
									            $this->db->where("date1 >",$sdate);
									              $this->db->where("date1 <",$edate);
									               $this->db->where("transaction_type",6);
									           $oldr = $this->db->get("inner_daybook");
									           if($oldr->num_rows()>0){echo "paid";}else{ echo "Pending";}?></td>
									           <td><button class ="btn btn-success">Pay</button></td>
									           </tr>
									          <?php $j++; endforeach; }
									          //
									           if($diamond){
									               
									          $perh =  ($camount*2)/100;
									           foreach($diamond as $t):
									               $d11= $this->db->query("select * from silver_tree where  silver_tree.rightjoiner='$t'")->num_rows();
                                                        	$d12=$this->db->query("select * from silver_tree where  silver_tree.leftjoiner='$t' ")->num_rows();
                                                        	$directleft=$d11+$d12;
									       $this->db->where("id",$t);
									       $getrow = $this->db->get("customer_info")->row();?>
									           <tr><td><?php echo $j;?></td>
									           <td><?php echo $getrow->username."[ ".$getrow->customer_name."]";?></td>
									            <td><?php echo $directleft;?></td>
									           <td>Diamond Club</td>
									           <td><?php echo date("Y-m",strtotime($edate));?></td>
									           <td><?php echo $perh;?></td>
									            <td><?php $this->db->where("paid_to",$t);
									            $this->db->where("date1 >",$sdate);
									              $this->db->where("date1 <",$edate);
									               $this->db->where("transaction_type",7);
									           $oldr = $this->db->get("inner_daybook");
									           if($oldr->num_rows()>0){echo "paid";}else{ echo "Pending";}?></td>
									           <td><button class ="btn btn-success">Pay</button></td>
									           </tr>
									          <?php $j++; endforeach; }
									          //
									           if($ambassador){
									          $perh =  ($camount*3)/100;
									           foreach($ambassador as $t):
									               $d11= $this->db->query("select * from silver_tree where  silver_tree.rightjoiner='$t'")->num_rows();
                                                        	$d12=$this->db->query("select * from silver_tree where  silver_tree.leftjoiner='$t' ")->num_rows();
                                                        	$directleft=$d11+$d12;
									       $this->db->where("id",$t);
									       $getrow = $this->db->get("customer_info")->row();?>
									           <tr><td><?php echo $j;?></td>
									           <td><?php echo $getrow->username."[ ".$getrow->customer_name."]";?></td>
									            <td><?php echo $directleft;?></td>
									           <td>Ambassador  Club</td>
									           <td><?php echo date("Y-m",strtotime($edate));?></td>
									           <td><?php echo $perh;?></td>
									            <td><?php $this->db->where("paid_to",$t);
									            $this->db->where("date1 >",$sdate);
									              $this->db->where("date1 <",$edate);
									               $this->db->where("transaction_type",8);
									           $oldr = $this->db->get("inner_daybook");
									           if($oldr->num_rows()>0){echo "paid";}else{ echo "Pending";}?></td>
									           <td><button class ="btn btn-success">Pay</button></td>
									           </tr>
									          <?php $j++; endforeach; }
									          
									          if($house){
									          $perh =  ($camount*4)/100;
									           foreach($houser as $t):
									       $this->db->where("id",$t);
									       $getrow = $this->db->get("customer_info")->row();?>
									           <tr><td><?php echo $j;?></td>
									           <td><?php echo $getrow->username."[ ".$getrow->customer_name."]";?></td>
									            <td><?php echo $directleft;?></td>
									           <td>House  Club</td>
									           <td><?php echo date("Y-m",strtotime($edate));?></td>
									           <td><?php echo $perh;?></td>
									            <td><?php $this->db->where("paid_to",$t);
									            $this->db->where("date1 >",$sdate);
									              $this->db->where("date1 <",$edate);
									               $this->db->where("transaction_type",9);
									           $oldr = $this->db->get("inner_daybook");
									           if($oldr->num_rows()>0){echo "paid";}else{ echo "Pending";}?></td>
									           <td><button class ="btn btn-success">Pay</button></td>
									           </tr>
									          <?php $j++; endforeach;}
									          ?>
									    </table>
									</div>
									<?php }?>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
