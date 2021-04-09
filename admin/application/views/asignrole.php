<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?php echo $smallTitle;?></h4>
                  </div>
                  <div class="card-body">
                 
                <div class="col-md-12 col-lg-12 col-xs-12">
					<div class="row">
                     <div class="col-xs-6 col-md-6 col-lg-6">
                     <div class="form-group row">
						<div class="col-md-3">
								<label>Select Employee<span title="Required" style="color: red;">*</span></label>
								</div>
							<div class="col-md-9">
							<div class="form-group">
								 <select class="form-control " name="eid" id="eid" value ="">
							      <option>--Select Employee--</option>
							            <?php
							            if($record->num_rows()>0) {
							            	
										foreach($record->result() as $row):?>
								<option value="<?php echo $row->id;?>">
								<?php echo $row->employee_iname."[".$row->id."]";?></option>
							       <?php endforeach; }?>
							    </select>  
							</div>
								
                       </div>
					</div>
                    </div>
                      
                    <div class="col-xs-6 col-md-6 col-lg-6">
                       <div class="form-group row">
						<div class="col-md-3">
								<label>Employee Name <span title="Required" style="color: red;"></span></label>
								</div>
							<div class="col-md-9">
							<div class="form-group">
                             <input type="text" class="form-control" value="" name="address" id="name" onkeyup="autocomplet()" required="required">               
                                <ul style="list-style: none; padding:0px;" id="student_list_id"> </ul>
                      			</div>
                      		</div>
                      	</div>
                      	</div>
                      </div>
                      <div class="row" id ="setValue">
                      </div>
                  
                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12" id="sms">
                    <div class="alert alert-info"> Plese Select and one Option to set Permission for filling study plan.
                    <br>
                    <br>
                     </div>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                    
                      <br>
                       <br>
                    </div>
                  </div>
                </div>
                  </div>
                </div>
           <script>
           $("#eid").change(function(){
               var eid = $("#eid").val();
               $.ajax({
                        
                          "url": "<?php echo site_url('adminController/getPermissionStatus') ?>",
                           "method": 'POST',
                           "data": {eid : eid},
                           beforeSend: function(data) {
                              $("#setValue").html("<center><img src='<?php echo base_url(); ?>assets/images/loading.gif' /></center>")
                           },
                           success: function(data) {
                               $("#setValue").html(data);
                               $("#sms").hide();
                           },
                           error: function(data) {
                               $("#setValue").html(data)
                           }
                       })

           });

             
           
           	function autocomplet() {
								var min_length = 1; // min caracters to display the autocomplete
								var keyword = $('#name').val();
								if (keyword.length >= min_length) {
									$.ajax({
										url: '<?php echo site_url("adminController/searchEmp");?>',
										type: 'POST',
										data: {keyword:keyword},
										success:function(data){
											$('#student_list_id').show();
											$('#student_list_id').html(data);
										}
									});
								} else {
									$('#student_list_id').hide();
									
									
								}
							}
							function set_item(item) {
							   $('#eid').val(item);
							 var eid = $("#eid").val();
                               $.ajax({
                                        
                                          "url": "<?php echo site_url('adminController/getPermissionStatus') ?>",
                                           "method": 'POST',
                                           "data": {eid : eid},
                                           beforeSend: function(data) {
                                              $("#setValue").html("<center><img src='<?php echo base_url(); ?>assets/images/loading.gif' /></center>")
                                           },
                                           success: function(data) {
                                               $("#setValue").html(data);
                                               $("#sms").hide();
                                           },
                                           error: function(data) {
                                               $("#setValue").html(data)
                                           }
                                       })
								
							}
             </script>   