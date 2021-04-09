<?php $this->load->view("headerCss");?>
<?php $this->load->view("header");?>
  <section class="headingSpacer bg-img2">
    <div class="auto-container">
      <div class="tc-breadcrumb tc-contrast tc-breadcrumb-center">
       
        <ul class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">pages</a></li>
          <li class="active"><span>Registration/SignUp</span></li>
        </ul>
      </div>
    </div>
  </section>
    <section class="segment1 trainings-section space-large">
<div class="container">
<?php if($this->uri->segment(3)=="success"){?>
               <div class="row alert alert-success">Registration is done Successfully</div>
               <?php }?>
 <form method="post" action="<?php echo base_url();?>index.php/welcome/registration" enctype="multipart/Form-data">
   
                  <div class="col-md-10 row"> 
                            <label class="col-md-4 ">Name<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="name"
                                id="name">
                            </div>
                          </div>
                         </div>
                                                
                          <div class="col-md-10 row"> 
                            <label class="col-md-4">Mobile No<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="mobile"
                                id="mobile">
                            </div>
                          </div>
                          </div>
                                             
                          <div class="col-md-10 row"> 
                            <label class="col-md-4">Email<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="email"
                                id="email">
                            </div>
                          </div>
                          </div>
                          <div class="col-md-10 row"> 
                            <label class="col-md-4">Password<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              
                              <input type="password"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="password"
                                id="password">
                            </div>
                          </div>
                    </div>
                 <div class="col-md-10">
                          
                               <button type="submit"style="margin-left:90%;" class="btn btn-primary"
                                id="regisbtn">
                                <i class="far fa-edit">&nbsp;Submit</i>
                              </button>
                            </div>
        </div>
</form>
</section>




<?php $this->load->view("footer");?>
<?php $this->load->view("footerJs");?>