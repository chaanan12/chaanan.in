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
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                     
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>Marital_status</th>
                            <th>fathe name</th>
                            <th>Mother name</th>
                            <th>address</th>
                            <th>adhar_number</th>
                            <th>disability_type</th>
                            <th>percentage</th>
                            <th>Mobile No.</th>
                            <th>status</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                       if($crecord->num_rows()>0){
                          $i=1;
                        foreach($crecord->result() as $data):
                        ?>
                          <tr>
                            <td><?php echo $i;?></td>
                            <td class="align-middle"><a href="<?php echo base_url();?>index.php/clogin/customer_profile/<?php echo $data->id;?>"><?php echo $data->id;?></a></td>
                            <td><?php echo $data->name;?></td>
                            <td><?php echo $data->dob;?></td>
                            <td><?php echo $data->gender;?></td>
                            <td><?php echo $data->marital_status;?></td>
                            <td><?php echo $data->f_name;?></td>
                            <td><?php echo $data->address;?></td>
                            <td><?php echo $data->adhar_number;?></td>
                            <td><?php echo $data->disability_type;?></td>
                             <td><?php echo $data->percentage;?></td>
                            <td><?php echo $data->gua_of_no;?></td>
                            <td><?php echo $data->status;?></td>
                          
                    		  
                            <td> <div class="badge badge-success badge-shadow"><?php if($data->status==1){ echo "Active";}else{ "Inactive";}?></div></td>
              
                          </tr>
                          
                          <?php //} 
                          $i++; endforeach; }else{
                          echo "data not found";
                        } ?>
                          
                        </tbody>
                        
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
