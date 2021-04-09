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
                            <th>Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Mobile Number</th>
                            <th>Email Id</th>
                            <th>Pin Code</th>
                            <th>Message</th>
                            <th>Subject</th>
                            <th>Intrested</th>
                            <th>Action</th>
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
                            <td class="align-middle"><?php echo $data->first_name." ".$data->last_name;?></td>
                            <td><?php echo $data->saddress;?></td>
                            <td><?php echo $data->city;?></td>
                            <td><?php echo $data->state;?></td>
                            <td><?php echo $data->mobile;?></td>
                            <td><?php echo $data->email;?></td>
                    		  <td><?php echo $data->pin_code;?></td>
                    		  <td><?php echo $data->msg;?></td>
                    		  <td><?php echo $data->subject;?></td>
                    		  <td><?php echo $data->interested;?></td>
                    		  
                    		
                            <td><button class ="btn btn-danger">Delete</button></td>
              
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
