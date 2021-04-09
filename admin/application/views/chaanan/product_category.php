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
                     	<form method="post"	action="<?php echo base_url()?>apanelForms/save_category" enctype="multipart/Form-data" >
							<div class="card-body">
								<div class="row" id="regForm">
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										   <?php $id=$this->uri->segment(3);
											if($id){   
											$this->db->where('id',$id);
											$data=$this->db->get('product_category');?>
											    
											    
											    	<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
												    <input type="hidden" value="<?php echo $data->row()->id;?>" name="cid">
													<div class="col-md-5"><label>Category Name</label></div>
													<div class="col-md-7">
													    <div class="form-group">
                                                            <input type="text" class="form-control" value="<?php echo $data->row()->category;?>" name="name">
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
													<div class="col-md-5"><label>Upload Image</label></div>
													<div class="col-md-7">
													    <img src="<?php echo base_url();?>assets/images/product/<?php echo $data->row()->image;?>" height="80px;" width="140px;">
													    <div class="form-group">
                                                            <input type="file" class="form-control" name="selectedStu" value="<?php echo $data->row()->image;?>">
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
											    
										<?php	}else{?>
											
											
											
											
												<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5"><label>Category Name</label></div>
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
													<div class="col-md-5"><label>Upload Image</label></div>
													<div class="col-md-7">
													    <div class="form-group">
                                                            <input type="file" class="form-control" name="selectedStu">
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
							</div>
						</div>
				    </form>
                     <div id="setValue"></div>
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                       <?php $logo=$this->db->get("product_category");?>
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th> Name</th>
                            <th>Logo Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                         
                          </tr>
                            </thead>
                            <tbody>
                           <?php $i=1; foreach($logo->result() as $row):?>
                         <tr>
                             <td><?php echo $i;?></td>
                             <td><?php echo $row->category;?></td>
                             <td><img src="<?php echo base_url();?>assets/images/product/<?php echo $row->image;?>" height="50px;" width="80px;"></td>
                             <td><button type="button" class="btn btn-primary">
                            <a href="<?php echo base_url();?>apanel/product_category/<?php echo $row->id;?>">
                            <i class="fa fa-edit" style="color:white"></i>
                            </a></button></td>
                            <td><button type="button" class="btn btn-danger">
                            <a href="<?php echo base_url();?>apanelForms/deletecategory/<?php echo $row->id;?>">
                            <i class="fa fa-trash" style="color:white"></i>
                            </a></button></td>
                             </tr>
                             <?php $i++; endforeach;?>
                      
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
