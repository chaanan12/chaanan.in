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
                            <th>Employee ID</th>
                            <th>Employee Name</th>
                            <th>Father Name</th>
                            <th>Mobile Number</th>
                            <th>Email Id</th>
                            <th>Address</th>
                            <th>User ID</th>
                            
                            <th>Status</th>
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
                            <td><?php echo $data->employee_iname;?></td>
                            <td><?php echo $data->fname;?></td>
                            <td><?php echo $data->mobilenumber;?></td>
                            <td><?php echo $data->email;?></td>
                            
                            <td><?php echo $data->current_address;?></td>
                    		  <td><?php echo $data->username;?></td>
                    		  
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
