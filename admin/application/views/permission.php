<input type="hidden" id ="eid" value ="<?php echo $eid;?>"/>
<?php	
$sp = $this->db->query('select * from study_plan');
if($sp->num_rows()>0){
	?>
	<table class="table table-striped" id="table-1">
<?php 	foreach($sp->result() as $row):
$plan_recordo = $this->db->query("select distinct plan_id from assign_plan where employee_id ='$eid' and plan_id = '$row->id'");
$sub = $this->db->query("select * from sub_study_plan where plan_id ='$row->id'");
	?>
<tr>
	<td>
			<input type="checkbox" id="plan<?php echo $row->id;?>" <?php if($plan_recordo->num_rows()>0){ echo 'checked';}?> class="form control" value="<?php echo $row->id;?>" >
  	</td>
  	<td><?php echo $row->plan_name;
  	if($sub->num_rows()>0){?>
  	<?php 
  		foreach($sub->result() as $srow):
  	?>
  		<td><input type="checkbox" id="splan<?php echo $srow->id;?>" class="form control" value="<?php echo $srow->id;?>" > </td>
  		<td><?php echo $srow->sub_plan_name;?> </td>
  		<script>
 $("#splan<?php echo $srow->id;?>").change(function(){
               var sp = $("#plan<?php echo $row->id;?>").val();
               var ssp = $("#splan<?php echo $srow->id;?>").val();
               var eid = $("#eid").val();
               

               if ($('#splan<?php echo $srow->id;?>').prop('checked')) {
            	   //alert(sp);
            	   $.ajax({
                       
                       "url": "<?php echo site_url('adminController/supdatePermissionStatus') ?>",
                        "method": 'POST',
                        "data": {sp : sp , eid : eid , ssp : ssp},
                        beforeSend: function(data) {
                           $("#updateBox").html("<center><img src='<?php echo base_url(); ?>assets/images/loading.gif' /></center>")
                        },
                        success: function(data) {
                            $("#updateBox").html(data);
                           
                        },
                        error: function(data) {
                            $("#updateBox").html(data)
                        }
                    })
            	 } else {
            		 //alert("unchecked");
            		 $.ajax({
                         
                         "url": "<?php echo site_url('adminController/sdeletePermissionStatus') ?>",
                          "method": 'POST',
                          "data": {sp : sp , eid : eid , ssp : ssp},
                          beforeSend: function(data) {
                             $("#updateBox").html("<center><img src='<?php echo base_url(); ?>assets/images/loading.gif' /></center>")
                          },
                          success: function(data) {
                              $("#updateBox").html(data);
                             
                          },
                          error: function(data) {
                              $("#updateBox").html(data)
                          }
                      })
            	 }
              

           });

 </script>
  	<?php endforeach ; }?></td>
  	<script>
 $("#plan<?php echo $row->id;?>").change(function(){
               var sp = $("#plan<?php echo $row->id;?>").val();
               var eid = $("#eid").val();
               if ($('#plan<?php echo $row->id;?>').prop('checked')) {
            	  // alert(sp);
            	   $.ajax({
                       "url": "<?php echo site_url('adminController/updatePermissionStatus') ?>",
                        "method": 'POST',
                        "data": {sp : sp , eid : eid},
                        beforeSend: function(data) {
                           $("#updateBox").html("<center><img src='<?php echo base_url(); ?>assets/images/loading.gif' /></center>")
                        },
                        success: function(data) {
                            $("#updateBox").html(data);
                           
                        },
                        error: function(data) {
                            $("#updateBox").html(data)
                        }
                    })
            	 } else {
            		 //alert("unchecked");
            		 $.ajax({
                         
                         "url": "<?php echo site_url('adminController/deletePermissionStatus') ?>",
                          "method": 'POST',
                          "data": {sp : sp , eid : eid},
                          beforeSend: function(data) {
                             $("#updateBox").html("<center><img src='<?php echo base_url(); ?>assets/images/loading.gif' /></center>")
                          },
                          success: function(data) {
                              $("#updateBox").html(data);
                             
                          },
                          error: function(data) {
                              $("#updateBox").html(data)
                          }
                      })
            	 }
              

           });

 </script>
</tr>
<?php endforeach; }
?></table>
<div class="col-xs-12 col-md-12 col-lg-12" id="updateBox"></div>
