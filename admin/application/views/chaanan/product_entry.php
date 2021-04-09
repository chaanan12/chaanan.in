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
                     	<form method="post"	action="<?php echo base_url()?>index.php/adminController/saveGalleryProduct" enctype="multipart/Form-data" >
							<div class="card-body">
								<div class="row" id="regForm">
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										   <?php $id=$this->uri->segment(3);
										   if($id){
										   $this->db->where('id',$id);
										   $pro=$this->db->get("stock_products");
										   foreach($pro->result() as $info):
										   ?><div class="col-xs-6 col-md-6 col-lg-6">
										       	 <input type="hidden" name="pid" value="<?php echo $info->id;?>">
												<div class="form-group row">
													<div class="col-md-5">
														<label>Select Category</label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
                                                            <select class="form-control" id="category" name="category" value="" required="required">
                                                             <?php $pcat=$this->db->get('product_category');
                                                              foreach($pcat->result() as $pc):  ?>
                                                             
                                                              <option value="<?php echo $pc->id;if($pc->id==$info->category){echo 'selected="selected"';}?>"><?php echo $pc->category;?></option>
                                                              <?php endforeach; ?>
                                                            </select>												
                                                        </div>
								                   </div>
											   </div>
                                        	</div>
												<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5"><label>Product Name</label></div>
													<div class="col-md-7">
													    <div class="form-group">
                                                            <input type="text" class="form-control" name="name" value="<?php echo $info->name;?>">
														</div>
								                    </div>
												</div>
                                            </div>
												
										</div>
									</div>
                               
                                <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5"><label>Product Type</label></div>
													<div class="col-md-7">
													    <div class="form-group">
                                                            <input type="text" class="form-control" value="<?php echo $info->p_type;?>" name="type">
														</div>
								                    </div>
												</div>
                                            </div>
                                            	<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5"><label>Mrp Price</label></div>
													<div class="col-md-7">
													    <div class="form-group">
                                                            <input type="text" class="form-control" value="<?php echo $info->mrp_price1;?>" name="my_price">
														</div>
								                    </div>
												</div>
                                            </div>
										</div>
								</div>
								 <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">
                                            	<div class="form-group row">
													<div class="col-md-5"><label>Selling Price</label></div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control" value="<?php echo $info->selling_price1;?>" name="selling_price" >
														</div>
								                    </div>
										       </div>
                                            </div>
                                            <div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5"><label>Product Image1</label></div>
													<div class="col-md-7">
													    <img src="<?php echo base_url();?>assets/images/product/<?php echo $info->file1;?>" alt="member" width="90" height="100">
													    <div class="form-group">
													       <input type="file" class="form-control"   name="selectedStu">
														</div>
								                    </div>
												</div>
                                            </div>
										</div>
								</div>
									 <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5"><label>Discription</label></div>
													<div class="col-md-7">
													    <div class="form-group">
                                                            <input type="text" class="form-control" value="<?php echo $info->discription;?>" name="disc">
														</div>
								                    </div>
												</div>
                                            </div>
                                            	<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5"><label>HSN </label></div>
													<div class="col-md-7">
													    <div class="form-group">
                                                            <input type="text" class="form-control"  value="<?php echo $info->hsn;?>"name="hsn">
														</div>
								                    </div>
												</div>
                                            </div>
                                            	<div class="col-xs-6 col-md-6 col-lg-6">
												    	<div class="form-group row">
													<div class="col-md-5"></div>
													<div class="col-md-7">
														<div class="form-group">
															<button type="submit" class="btn btn-primary">
																<i class="far fa-edit">&nbsp;Submit</i>
															</button>
														</div>
													</div>
												</div>
										 </div>
										       
										 <?php  endforeach;  }else{
										   ?>
										   
												<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5">
														<label>Select Category</label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
                                                            <select class="form-control" id="category" name="category" value="" required="required">
                                                             
                                                              <?php $pcat=$this->db->get('product_category');
                                                              foreach($pcat->result() as $pc): ?>
                                                              <option value="">Select Product Category</option>
                                                              <option value="<?php echo $pc->id;?>"><?php echo $pc->category; ?></option>
                                                              <?php endforeach; ?>
                                                            </select>												
                                                        </div>
								                   </div>
											   </div>
                                        	</div>
												<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5"><label>Product Name</label></div>
													<div class="col-md-7">
													    <div class="form-group">
                                                            <input type="text" class="form-control" name="name">
														</div>
								                    </div>
												</div>
                                            </div>
												
										</div>
									</div>
                               
                                <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5"><label>Product Type</label></div>
													<div class="col-md-7">
													    <div class="form-group">
                                                            <input type="text" class="form-control" name="type">
														</div>
								                    </div>
												</div>
                                            </div>
                                            	<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5"><label>Mrp Price</label></div>
													<div class="col-md-7">
													    <div class="form-group">
                                                            <input type="text" class="form-control" name="my_price">
														</div>
								                    </div>
												</div>
                                            </div>
										</div>
								</div>
								 <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">
                                            	<div class="form-group row">
													<div class="col-md-5"><label>Selling Price</label></div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control" value="" name="selling_price" >
														</div>
								                    </div>
										       </div>
                                            </div>
                                            <div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5"><label>Product Image1</label></div>
													<div class="col-md-7">
													    <div class="form-group">
                                                            <input type="file" class="form-control" name="selectedStu">
														</div>
								                    </div>
												</div>
                                            </div>
										</div>
								</div>
									 <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5"><label>Discription</label></div>
													<div class="col-md-7">
													    <div class="form-group">
                                                            <input type="text" class="form-control" name="disc">
														</div>
								                    </div>
												</div>
                                            </div>
                                            	<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5"><label>HSN </label></div>
													<div class="col-md-7">
													    <div class="form-group">
                                                            <input type="text" class="form-control" name="hsn">
														</div>
								                    </div>
												</div>
                                            </div>
                                            	<div class="col-xs-6 col-md-6 col-lg-6">
												    	<div class="form-group row">
													<div class="col-md-5"></div>
													<div class="col-md-7">
														<div class="form-group">
															<button type="submit" class="btn btn-primary">
																<i class="far fa-edit">&nbsp;Submit</i>
															</button>
														</div>
													</div>
												</div>
										 </div>
										 <?php }?>
                                    </div>
								</div>
					</form>
                  <div id="setValue"></div>
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                      <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Product Name</th>
                            <th>Product Type</th>
                            <th>Product Category</th>
                            <th>Price</th>
                            <th>Selling Price</th>
                            <th>Product Image1</th>
                             <th>Discription</th>
                            <th>HSN</th>
                            <th>Edit</th>
                            <th>Delete</th>
                             </tr>
                           </thead>
                           <tbody>
                          <tr>
                          <?php $sprod=$this->db->get('stock_products');
                                    if($sprod->num_rows()>0){
                                        $i=1;
                                        foreach($sprod->result() as $sp):
                                         $this->db->where("id",$sp->category);
                                        $c= $this->db->get("product_category")->row();?>
                                      <td><?php echo $i;?><input type="hidden" name = "rowid<?php echo $sp->id;?>" id ="rowid<?php echo $sp->id;?>" value = "<?php echo $sp->id;?>"></td>
                                      <td><?php echo $sp->name;?></td>
                                      <td><?php echo $sp->p_type;?></td>
                                      <td><?php echo $c->category;?></td>
                                      <td><?php echo $sp->mrp_price1;?></td>
                                      <td><?php echo $sp->selling_price1;?></td>
                                      <td><img src="<?php echo base_url();?>assets/images/product/<?php echo $sp->file1;?>" alt="member" width="90" height="100"></td>
                                      <td><?php echo $sp->discription;?></td>
                                      <td><?php echo $sp->hsn;?></td>
                                    <td><button type="button" class="btn btn-primary">
                                    <a href="<?php echo base_url();?>adminController/product_entry/<?php echo $sp->id;?>">
                                    <i class="fa fa-edit" style="color:white"></i>
                                    </a></button></td>
                                     <td><button id = "del<?php echo $sp->id;?>" class ="btn btn-danger">Delete</button>
                                    <script>
                                     $("#del<?php echo $sp->id;?>").click(function(){
                                   var rowid = $("#rowid<?php echo $sp->id;?>").val();
                                   $.ajax({
                                     "url": "<?php echo site_url('adminController/delete_entry') ?>",
                                       "method": 'POST',
                                       "data": {rowid : rowid},
                                       beforeSend: function(data) {
                                          $("#setValue").html("<center><img src='<?php echo base_url(); ?>assets/images/loading.gif' /></center>")
                                       },
                                       success: function(data) {
                                           if(data==1){
                                               $("#setValue").html("Deleted Successfully");
                                          $("#del<?php echo $sp->id;?>").html("Deleted")
                                           }else{
                                             $("#del<?php echo $sp->id;?>").html("Not Deleted")
                                           }
                                         },
                                       error: function(data) {
                                             $("#del<?php echo $sp->id;?>").html("Not Deleted")
                                       }
                                   })
            
                             }); </script>
                            </td>
                              </tr>
                               <?php $i++; endforeach; }?>
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
