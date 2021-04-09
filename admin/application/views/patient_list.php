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
                            <th>Patient ID</th>
                            <th>Patient Name</th>
                            <th>Father Name</th>
                            <th>Mobile Number</th>
                            <th>Email Id</th>
                            <th>Address</th>
                            <th>User ID</th>
                            
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                       if($row->num_rows()>0){
                          $i=1;
                        foreach($row->result() as $data):
                        ?>
                          <tr>
                            <td><?php echo $i;?></td>
                            <td class="align-middle"><a href="<?php echo base_url();?>index.php/clogin/customer_profile/<?php echo $data->id;?>"><?php echo $data->id;?></a></td>
                            <td><?php echo $data->first_name.$data->middle_name.$data->last_name;?></td>
                            <td><?php echo $data->father_name;?></td>
                            <td><?php echo $data->mobile_number;?></td>
                            <td><?php echo $data->email;?></td>
                            <td><?php echo $data->address;?></td>
                    		  <td><?php echo $data->username;?></td>
                    		  
                            <td><div class="badge badge-warning badge-shadow "><a>Edit</a></div><div class="badge badge-danger badge-shadow "><a>Delete</a></div></td>
              
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
