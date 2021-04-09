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
                     <div id="setValue"></div>
                      
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                          <thead>	
                                <tr>
                                                <th>#</th>
                                                <th>Customer Name</th>
                                                <th>Product</td>
                                                <th>Address</th>
                                                 <th>Mobile No.</th>
                                                <th>Total Amount</th>
                                                <th>Email</th>
                                                <th>Invoice Num</th>
                                                <th>Status</th>
                                                 <th>Action</th>
                                                 </tr>
                                 <?php $i = 1;
                                          $od = $this->db->query("select * from day_book where status=0");
                                            if($od->num_rows()>0){
                                                   foreach($od->result() as $row):
                                                     $this->db->where("cid",$row->paid_by);
                                                     $pro= $this->db->get("like_product")->row();
                                                      $this->db->where("id",$row->paid_by);
                                                      $cust1=$this->db->get("costumer");
                                                      if($cust1->num_rows()>0){
                                                       $cust=$cust1->row();
                                                      ?>
                                                 <tr><td><?php echo $i; ?></td>
                                                <td>
                                                    <input type="hidden" value ="<?php echo $row->invoice_no;?>" id ="orderrow<?php echo $i;?>">
                                                    <?php echo $cust->name; ?></td>
                                                    <td><?php $j=1; $this->db->where("invoice_no",$row->invoice_no);
                                                   $pro=$this->db->get("like_product");
                                                   //print_r($pro);
                                                   if($pro->num_rows()>0){
                                                   foreach($pro->result() as $row1):
                                                       
                                                       $this->db->where("id",$row1->product_id);
                                                      $data= $this->db->get("stock_products");
                                                     // print_r($data);
                                                      foreach($data->result() as $row2)
                                                     
                                                     if($row2->file1){?>
                                                     
                                                     <img src="<?php echo base_url();?>assets/images/product/<?php echo $row2->file1;?>" height="50" width="80"><br/>
                                                     <?php }
                                                   
                                                   $j++; endforeach;}?></td>
                                                <td><?php //if($cust->address){echo $cust->address; }
                                                
                                             ?>
                                             </td>
                                                <td><?php echo $cust->mobile; ?></td>
                                                <td><?php echo $row->amount; ?></td>
                                                <td><?php echo $cust->email; ?></td> 
                                                <td><a href="<?php echo base_url()?>apanelForms/invoicedetail/<?php echo $row->invoice_no;  ?>" class="btn btn-blue"><?php echo $row->invoice_no;  ?> </a> </td>
                                                <td><button class="btn btn-danger"   id="inactive<?php echo $i;?>">Pending</button>
                                           <script>
                                            	$("#inactive<?php echo $i;?>").click(function(){
                                                var id = $("#orderrow<?php echo $i;?>").val();
                                                //alert(id);
                                         
												$.post("<?php echo site_url();?>apanelForms/delivered", { id:id }, function(data){
												    alert(data);
													$('#inactive<?php echo $i;?>').html(data);
												});
											});
                                            </script>
                                            </td>
                                                <td><a href="<?php echo base_url();?>apanelForms/deleteCareer1/<?php echo $cust->id;?>">Delete	</a></td>
                                            </tr>
                                            <?php $i++; }?>
                                            <?php endforeach ;}?>
                                        </tbody>
                         </tr>
                       </tbody>
                        
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            	</div>
            	
								</div>
							</div>
