<?php $this->load->view("headerCss");?>
<?php $this->load->view("header");?>
 <body>
     <section class="headingSpacer bg-img2">
    <div class="auto-container">
      <div class="tc-breadcrumb tc-contrast tc-breadcrumb-center">
       
        <ul class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">pages</a></li>
          <li class="active"><span>Registration</span></li>
        </ul>
      </div>
    </div>
  </section>
    
    <div class="container">  
                      
            <form method="post" action="<?php echo base_url();?>index.php/welcome/legal_form" enctype="multipart/Form-data">
                 <div class="col-md-10 row alert alert-warning">
                           Guardian Form <a href="#" id="hstepv1" class="btn btn-success">Step1</a>-->
                           <a href="#" id="hstepv2" class="btn btn-danger">Step2</a>-->
                            <a href="#" id="hstepv3" class="btn btn-danger">Step3</a>
                        </div>  
                        
              <div class="card-body">
                    
                  <div id="hstep1">
                <div class="alert alert-info col-md-10 row"><b>Note : - Personal Details of Person with Disability.</b></div>
                
               <?php if($this->uri->segment(3)=="success"){
                                        echo '<div class="col-md-10 alert alert-success row">Registration has been done successfully|||</div>';
                                    }
                                    ?>
                                    <div class="col-md-10 row">
                      <label class="col-sm-4 col-form-label required">Name of person with Disabilty<span title="Required" style="color: red;">*</span>
                      </label>
                        <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control"
                                value="" name="name"
                                id="name" required="required">
                            </div>
                        </div>
                    </div>
                
                    <!--<div class="col-md-10 row">
                        <label class="col-sm-4">Admission Date<span title="Required" style="color: red;">*</span></label>
                          
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="date" class="form-control datemask"
                                name="adate" value=""
                                id="adate" required="required">
                            </div> 
                                       
                                          </div>
                                  </div>-->
                                   <div class="col-md-10 row"> 
                            <label class="col-md-4">Date Of Birth<span title="Required" style="color: red;">*</span></label>
                      
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="date" class="form-control datemask" name="dob" value="" id="dob" required="required">
                            </div> 
                                       
                                              </div>

                  </div>
                   <div class="col-md-10 row"> 
                            <label class="col-md-4">Age<span title="Required" style="color: red;">*</span></label>
                      
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control datemask" name="age" value="" id="age" required="required">
                            </div> 
                                       
                                              </div>

                  </div>
                 <div class="col-md-10 row"> 
                            <label class="col-md-4" >Gender<span title="Required" style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                            <div class="form-group row">
                              <div class="col-md-5">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="gender" value="1" name="grnder" required="required" class="custom-control-input"> 
                                    <label class="custom-control-label" for="customRadioInline1">MALE</label>
                                </div>
                              </div>
                              <div class="col-md-5">
                                <div class="custom-control custom-radio custom-control-inline">
                                  
                                  <input type="radio" id="gender" value="2" name="gender" class="custom-control-input">
                                  <label  class="custom-control-label" for="customRadioInline2">FEMALE  </label>
                                </div>
                              </div>
                      
                                                        </div>
                          </div>
                  </div>
                
                                   <div class="col-md-10 row">
                                         <label class="col-sm-4">Marital Status<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group row">
                              <div class="col-md-5">
                                <div
                                  class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="marital_status" value="1"   name="marital_status" required="required" class="custom-control-input"> 
                                  <label class="custom-control-label" for="customRadioInline1">Single</label>
                                </div>
                              </div>
                              <div class="col-md-5">
                                <div
                                  class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="marital_status" value="0" name="marital_status" class="custom-control-input"> 
                                  <label  class="custom-control-label" for="customRadioInline2">Married </label>
                                </div>
                              </div>
                      
                                                    </div>
                          </div>
                        </div>
                      
                      
                            <div class="col-md-10 row">
                            <label class="col-md-4">Father's Name<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control"
                                value="" name="f_name"
                                id="f_name" required="required">
                            </div>
                                   </div>
                        </div>

                            <div class="col-md-10 row">
                            <label class="col-md-4">Mother's Name <span title="Required"
                              style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control"
                                value="" name="m_name"
                                id="m_name" required="required">
                            </div>
                               
                                          </div>
                      </div>

                                            <div class="col-md-10 row">
                            <label class="col-md-4">Address<span title="Required" style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                            <div class="form-group">
                              <textarea type="text" class="form-control" name="address" id="address" required="required"></textarea>
                            </div>
                                 
                                                    </div>
                        </div>
     <div class="col-md-10 row">
                            <label class="col-md-4">State<span title="Required" style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control" name="state"
                                id="state" value=""
                                required="required">
                            </div>
                                                </div>
                        </div>  
                          <div class="col-md-10 row">
                          <label class="col-md-4"> District<span title="Required" style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control" name="district"
                                id="district" value=""
                                required="required">
                            </div>
                          </div> 
                                </div>
                     

                    
                  <div class="col-md-10 row">
                        <label class="col-md-4"> Pincode<span title="Required" style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control" name="pin_code"
                                id="pin_code" value=""
                                maxlenght="6" ninlenght="6" required="required">
                            </div>
                                  
                                          </div>


                  </div>
                 <!-- <div class="col-md-10 row">
                      <label class="col-md-4">Mobile No<span title="Required" style="color: red;">*</span></label>
                    
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control phone-number"
                                name="gua_of_no" value=""
                                id="gua_of_no" required="required">
                            </div>
                                 
                                                </div>
                  </div>-->
                    <div class="col-md-10 row">
                        <label class="col-md-4">Aadhar No<span title="Required" style="color: red;">*</span></label>
                      
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control phone-number"  data-type="adhaar-number" maxLength="14" minlenght="12" name="aadhar" id="aadhar" required="required">
                            </div> 
                                       
                                      </div>

                  </div>
               <!--   <div class="col-md-10 row">
                            <label class="col-md-4">Email Id</label>
                        
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="email" class="form-control phone-number"
                                name="email_id" value=""
                                id="email_id">
                            </div>
                                 
                                                    </div>
                  </div>-->
                 
                  
                   <div class="col-md-12 row">
                                      
                          <div class="col-md-12">
                            
                            </div>
                          <div class="col-md-12">
                          
                                  <a href="#" class="btn btn-primary" id="next1" style="margin-left:90%;">
                                Next
                              </a>
                            
                            </div>
                            
                          </div>
                           
            </div>
            <!--second step of form start-->
            
              <div class="col-md-10 row " id="hstep2">   
                                  <div class="alert alert-info" >Note : PWD Document Details</div> 
                
                        
                           <div class="col-md-10 row"> 
                            <label class="col-md-4 ">Attach Proof Of Residence Of PWD<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="file"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="pwd_file"
                                id="pwd_file">
                            </div>
                          </div>
                         </div>
                                                
                          <div class="col-md-10 row"> 
                            <label class="col-md-4">Disability Type<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="disable"
                                id="disable">
                            </div>
                          </div>
                                                </div>
                                             
                          <div class="col-md-10 row"> 
                            <label class="col-md-4">Percentage<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="percentage"
                                id="percentage">
                            </div>
                          </div>
                          </div>
                          <div class="col-md-10 row"> 
                            <label class="col-md-4">Issuing Authority Of Disability Certificate<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="gua_state"
                                id="gua_state">
                            </div>
                          </div>
                    </div>
                                                
                           <div class="col-md-10 row"> 
                            <label class="col-sm-4" >Issuing Authority Name<span title="Required" style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control phone-number"
                                name="issuing_authority_name" value=""
                                id="issuing_authority_name" required="required">
                            </div>
                                 
                                                    </div>
                    </div>
                    <div class="col-md-10 row"> 
                      <label class="col-md-4 col-form-label required">Authority Designation <span title="Required" style="color: red;">*</span>
                      </label>
                        <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control"
                                value="" name="issuing_designation"
                                id="issuing_designation" required="required">
                            </div>
                            </div>
                    </div>
                    <div class="col-md-10 row"> 
                        
                            <label class="col-md-4">Authority Address<span title="Required" style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control phone-number"
                                name="issuing_address" value=""
                                id="issuing_address" required="required">
                            </div>
                                 
                                                    </div>
                      </div>
                      <div class="col-md-10 row"> 
                            <label class="col-md-4">Authority Contact Number<span title="Required" style="color: red;">*</span></label>
                      
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control phone-number"
                                name="i_contact" value=""
                                id="i_contact" required="required">
                            </div>
                              </div>  
                              </div>
                        <div class="col-md-10 row"> 
                            <label class="col-md-4" >Attach Disability Certificate<span title="Required" style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                        
                            <div class="form-group">
                              <input type="file"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="file"
                                id="file">
                            </div>
                          </div>
                           </div> 
                             
                       <div class="alert alert-info col-md-10 row">
                                            <label class="col-md-8"class="form-check-label" for="gridCheck"> 
                                      Personal with disability assets details.
                                </label>
                                </div>
                        <div class=" col-md-12 row">
                                            <label class="col-md-12"class="form-check-label" for="gridCheck"> <input type="checkbox" name ="accept" required>
                                       PWD does not have moveable property(select this option in case of moveabl property).
                                </label>
                                </div>
                         <div class="col-md-10 row"> 
                            <label class="col-md-4">Details of moveable property on which pwd has shared <span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="password"
                                value=""
                                class="form-control pwstrength"
                                data-indicator="pwindicator" name="mp"
                                id="mp">
                            </div>
                          </div>
                            </div>                  
                                  <br/>
                    <div class="col-md-10 row"> 
                      <label class="col-sm-4 col-form-label required">Attach Proof <span title="Required" style="color: red;">*</span>
                      </label>
                        <div class="col-md-8">
                            <div class="form-group">
                              <input type="file" class="form-control" value="" name="Attach_proof" id="attach_proof" required="required">
                            </div>
                            </div>
                    </div>
                  
                     <div class="col-md-10 row"> 
                            <label class="col-md-4">Details of Imoveable property on which pwd has shared as per format<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                             <input type="checkbox" name ="accept" required>
                                      PWD does not have Imoveable property(select this option in case of imoveabl property). 
                            </div>
                          </div>
                            </div>  
                    <div class="col-md-10 row"> 
                            <label class="col-sm-4" >Survey No<span title="Required" style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control phone-number"
                                name="issuing_authority_name" value=""
                                id="issuing_authority_name" required="required">
                            </div>
                             </div>
                    </div>
                    <div class="col-md-10 row"> 
                      <label class="col-md-4 col-form-label required">Villege/Town  <span title="Required" style="color: red;">*</span>
                      </label>
                        <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control"
                                value="" name="issuing_designation"
                                id="issuing_designation" required="required">
                            </div>
                            </div>
                    </div>
                    <div class="col-md-10 row"> 
                        
                            <label class="col-md-4">Measurement of the immovable property <span title="Required" style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control phone-number"
                                name="issuing_address" value=""
                                id="issuing_address" required="required">
                            </div>
                                </div>
                      </div>
                      <div class="col-md-10 row"> 
                            <label class="col-md-4">other information<span title="Required" style="color: red;">*</span></label>
                      
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control phone-number"
                                name="i_contact" value=""
                                id="i_contact" required="required">
                            </div>
                                   </div>
                        </div>
                   <div class="col-md-10 row">
                          <div class="col-md-4">
                            <a href="#" class="btn btn-primary"
                                id="prv1"  style="margin-left:90%;">
                                Previous
                              </a>
                            
                            </div>
                          <div class="col-md-4" >
                          
                                  <a href="#" class="btn btn-primary"
                                id="next2" style="margin-left:90%;">
                                Next
                              </a>
                            
                            </div>
                          </div>
                    
              </div>      
                
            <!---second step of form end-->    
          <!-- 3thrd step of form start-->  
          <div class="col-md-10 row" id="hstep3">   
                                  <div class="alert alert-info col-md-10" >Note : -  Proposed Guardian's Details</div> 
                 <div class="col-md-10 row"> 
                            <label class="col-md-4" >Proposed guadian<span title="Required" style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                            <div class="form-group row">
                              <div class="col-md-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="gender" value="1" name="gender" required="required" class="custom-control-input"> 
                                    <label class="custom-control-label" for="customRadioInline1">Individual or both guardian</label>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="custom-control custom-radio custom-control-inline">
                                  
                                  <input type="radio" id="gender" value="2" name="gender" class="custom-control-input">
                                  <label  class="custom-control-label" for="customRadioInline2">Organization  </label>
                                </div>
                              </div>
                      
                                                        </div>
                          </div>
                  </div>
                  <div class="col-md-10 row"> 
                            <label class="col-md-4">Guardian's Name<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="guardians_name"
                                id="guardians_name">
                            </div>
                          </div>
                         </div>
                                                
                          <div class="col-md-10 row"> 
                            <label class="col-md-4">Name of Other Parent<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="other_parent_name"
                                id="other_parent_name">
                            </div>
                          </div>
                                                </div>
                                             
                          <div class="col-md-10 row"> 
                            <label class="col-md-4">Address<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="gua_add"
                                id="gua_add">
                            </div>
                          </div>
                          </div>
                          <div class="col-md-10 row"> 
                            <label class="col-md-4">State<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="gua_state"
                                id="gua_state">
                            </div>
                          </div>
                    </div>
                                                
                          <div class="col-md-10 row"> 
                            <label class="col-md-4">District<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="gua_district"
                                id="gua_district">
                            </div>
                          </div>
                        </div>
                                                   
                          <div class="col-md-10 row"> 
                            <label class="col-md-4">Pin Code <span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="gua_pin"
                                id="gua_pin">
                            </div>
                          </div>
                        </div>
                                              
                        <div class="col-md-10 row"> 
                            <label class="col-md-4">Uid Number <span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="gua_uid_no"
                                id="gua_uid_no">
                            </div>
                          </div>
                          </div>
                            <div class="col-md-10 row"> 
                            <label class="col-md-4">Adhar Card Number <span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="gua_adhar"
                                id="gua_adhar">
                            </div>
                          </div>
                       </div>
                        <div class="col-md-10 row"> 
                            <label class="col-md-4" >Relationship of PWD Guardian with proposed guardian<span title="Required" style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                            
                              <div class="col-md-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="relationship_gua" value="1" name="relationship_gua" required="required" class="custom-control-input"> 
                                    <label class="custom-control-label" for="customRadioInline1">Parent</label>
                                </div>
                              </div>
                              
                            
                              <div class="col-md-4">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="relationship_gua" value="2" name="relationship_gua" class="custom-control-input">
                                  <label  class="custom-control-label" for="customRadioInline2">Relative</label>
                                </div>
                              </div>
                       
                       
                              <div class="col-md-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="relationship_gua" value="1" name="relationship_gua" required="required" class="custom-control-input"> 
                                    <label class="custom-control-label" for="customRadioInline1">Registered Organization</label>
                                </div>
                              </div>
                              
                             <div class="col-md-4">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="relationship_gua" value="2" name="relationship_gua" class="custom-control-input">
                                  <label  class="custom-control-label" for="customRadioInline2">Any Other</label>
                                </div>
                              </div>
                            </div>
                            </div>
                           
                         <div class="col-md-10 row"> 
                            <label class="col-md-4">Email ID <span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="email"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="email_id"
                                id="email_id">
                            </div>
                          </div>
                            </div>                  
                                  
                    <div class="col-md-10 row"> 
                      <label class="col-sm-4 col-form-label required">Contact Details <span title="Required" style="color: red;">*</span>
                      </label>
                        <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control" value="" name="pro_guardians" id="pro_guardians" required="required">
                            </div>
                            </div>
                    </div>
                    <div class="col-md-10 row"> 
                            <label class="col-sm-4" >If any other email please specify<span title="Required" style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control phone-number"
                                name="issuing_authority_name" value=""
                                id="issuing_authority_name" required="required">
                            </div>
                                 
                                                    </div>
                    </div>
                    <div class="col-md-10 row"> 
                      <label class="col-md-4 col-form-label required">Combined photo of  proposed guardien width PWD <span title="Required" style="color: red;">*</span>
                      </label>
                        <div class="col-md-8">
                            <div class="form-group">
                              <input type="file" class="form-control"
                                value="" name="issuing_designation"
                                id="issuing_designation" required="required">
                            </div>
                            </div>
                    </div>
                    <div class="col-md-10 row"> 
                        
                            <label class="col-md-4">Consent of the person proposed to be appointed guardian<span title="Required" style="color: red;">*</span></label>
                        
                           <div class="col-md-8">
                            <div class="form-group row">
                              <div class="col-md-5">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="gender" value="1" name="yes" required="required" class="custom-control-input"> 
                                    <label class="custom-control-label" for="customRadioInline1">Yes</label>
                                </div>
                              </div>
                              <div class="col-md-5">
                                <div
                                  class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="gender" value="2" name="no" class="custom-control-input">
                                  <label  class="custom-control-label" for="customRadioInline2">No </label>
                                </div>
                              </div>
                      
                                                        </div>
                          </div>
                      </div>
                      <div class="col-md-10 row"> 
                            <label class="col-md-4">Attach Proof of consent <span title="Required" style="color: red;">*</span></label>
                      
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="file" class="form-control phone-number"
                                name="i_contact" value=""
                                id="i_contact" required="required">
                            </div>
                                 
                                                        </div>
                        </div>
                    <div class="col-md-10 row"> 
                            <label class="col-md-4">Consent if the exiting guardian if any<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group row">
                              <div class="col-md-5">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="gender" value="1" name="yes" required="required" class="custom-control-input"> 
                                    <label class="custom-control-label" for="customRadioInline1">Yes</label>
                                </div>
                              </div>
                              <div class="col-md-5">
                                <div
                                  class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="gender" value="2" name="no" class="custom-control-input">
                                  <label  class="custom-control-label" for="customRadioInline2">No </label>
                                </div>
                              </div>
                      
                                                        </div>
                          </div>
                          </div>
                    
                      <div class="col-md-10 row"> 
                            <label class="col-md-4">Confirm Password<span title="Required"
                              style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="password" class="form-control pwstrength"
                                value=""
                                required="required" data-indicator="pwindicator"
                                name="confirm_pwd" id="confirm_pwd">
                            </div>
                                 
                                                </div>
                       </div>
                    
                       <div class="col-md-10 row">  
                          <label class="col-md-4" for="myfile">Attach Proof Of Residence guardian of proposed guardian:</label>
                                <div class="col-md-8">
                            <div class="form-group">
                                 <input type="file"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="pwd_file"
                                id="pwd_file">
                                               
                                                        </div>
                                                    </div>
                                         </div>
                                     
                                  
                                   <div class="col-md-10 row">
                             <!-- <label class="col-md-4" for="myfile">Attach Proof Of Certificate:</label>-->
                                <div class="col-md-8">
                            <div class="form-group">
                                                             <input type="checkbox" id="attach_proof" name="attach_proof" multiple>A citizen of india.
                                               
                                                        </div>
                                                    </div>
                                   </div>
                                   <div class="col-md-10 row">
                             <!-- <label class="col-md-4" for="myfile">Attach Proof Of Certificate:</label>-->
                                <div class="col-md-10">
                            <div class="form-group">
                                                <input type="checkbox" id="attach_proof" name="attach_proof" multiple>
                                                <label  class="custom-control-label" for="customRadioInline2">Is that unsound mind or is currently undergoging treatment for mental illness.
                                               </label>
                                                        </div>
                                                    </div>
                                   </div>
                                     
                               
                              <div class="col-md-10 row">
                             <!-- <label class="col-md-4" for="myfile">Attach Proof Of Certificate:</label>-->
                                <div class="col-md-10">
                            <div class="form-group">
                                                             <input type="checkbox" id="attach_proof" name="attach_proof" multiple>
                                                             <label  class="custom-control-label" for="customRadioInline2">Does not have a history of criminal conviction.</label>
                                               
                                                        </div>
                                                    </div>
                                   </div>
                                   
                                    <div class="col-md-10 row">
                             <!-- <label class="col-md-4" for="myfile">Attach Proof Of Certificate:</label>-->
                                <div class="col-md-10">
                            <div class="form-group">
                                                             <input type="checkbox" id="attach_proof" name="attach_proof" multiple>
                                                             <label  class="custom-control-label" for="customRadioInline2">Is not a destitute and dependent on (proof of income source  to be attached).
                                               </label>
                                                        </div>
                                                    </div>
                                   </div>
                                    <div class="col-md-10 row">
                             <!-- <label class="col-md-4" for="myfile">Attach Proof Of Certificate:</label>-->
                                <div class="col-md-10">
                            <div class="form-group">
                                                             <input type="checkbox" id="attach_proof" name="attach_proof" multiple>
                                                             <label  class="custom-control-label" for="customRadioInline2">Has not declared  insolvent or bankrupt.</label>
                                               
                                                        </div>
                                                    </div>
                                   </div>
                                    
                   <div class="col-md-12 row">
                                      
                          <div class="col-md-12">
                          
                               <a href="#" class="btn btn-primary"
                                id="prv1" style="margin-left:90%;">
                                Previous
                              </a>
                            
                            </div>
                          <div class="col-md-12">
                          
                                  <a href="#" class="btn btn-primary"
                                id="next2"  style="margin-left:90%;">
                                Next
                              </a>
                            
                            </div>
                          </div>
                    
              </div>      
                <!--3third step of form end-->
                
                <!-----4th step of form start--->
                
                
                  <div class="col-md-12 row" id="hstep4">  
                    <div class="alert alert-info col-md-10" >Note : - Applicant Details</div> 
                  <div class="col-md-10 row"> 
                            <label class="col-md-4">Name of applicent<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="applicent_name"
                                id="guardians_name">
                            </div>
                          </div>
                         </div>
                                                
                          <div class="col-md-10 row"> 
                            <label class="col-md-4">Address<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="applicent_address"
                                id="other_parent_name">
                            </div>
                          </div>
                                                </div>
                                             
                          <div class="col-md-10 row"> 
                            <label class="col-md-4">state<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="applicent_state"
                                id="applicent_state">
                            </div>
                          </div>
                          </div>
                          
                                                
                          <div class="col-md-10 row"> 
                            <label class="col-md-4">District<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="applicent_district"
                                id="gua_district">
                            </div>
                          </div>
                        </div>
                                                   
                          <div class="col-md-10 row"> 
                            <label class="col-md-4">Pin Code <span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="applicent_pincode"
                                id="gua_pin">
                            </div>
                          </div>
                        </div>
                                              
                        <div class="col-md-10 row"> 
                            <label class="col-md-4">Uid Number <span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="app_uid_no"
                                id="appl_uid_no">
                            </div>
                          </div>
                          </div>
                            <div class="col-md-10 row"> 
                            <label class="col-md-4">Adhar Card Number <span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="app_adhar"
                                id="app_adhar">
                            </div>
                          </div>
                       </div>
                        <div class="col-md-10 row"> 
                            <label class="col-md-4" >Relationship of PWD applicent<span title="Required" style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                            
                              <div class="col-md-4">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="relationship_app" value="1" name="relationship_app" required="required" class="custom-control-input"> 
                                    <label class="custom-control-label" for="customRadioInline1">Parent</label>
                                </div>
                              </div>
                              
                            
                              <div class="col-md-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="relationship_app" value="2" name="relationship_app" class="custom-control-input">
                                  <label  class="custom-control-label" for="customRadioInline2">Relative</label>
                                </div>
                              </div>
                       
                       
                              <div class="col-md-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="relationship_app" value="1" name="relationship_app" required="required" class="custom-control-input"> 
                                    <label class="custom-control-label" for="customRadioInline1">Registered Organization</label>
                                </div>
                              </div>
                              
                             <div class="col-md-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="relationship_app" value="2" name="relationship_app" class="custom-control-input">
                                  <label  class="custom-control-label" for="customRadioInline2">Any Other</label>
                                </div>
                              </div>
                            </div>
                            <br/>
                             <br/>
                              <br/>
                            </div>
                            
                            <div class="col-md-10 row"> 
                            <label class="col-md-4" >Tick the obligations for which guardianship is to be given<span title="Required" style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                            
                              <div class="col-md-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="checkbox" id="care" value="1" name="care" required="required" class="custom-control-input"> 
                                    <label class="custom-control-label" for="customRadioInline1">Maintence and residential care</label>
                                </div>
                              </div>
                              
                            
                              <div class="col-md-10">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="checkbox" id="immovable_property" value="2" name="immovable_property" class="custom-control-input">
                                  <label  class="custom-control-label" for="customRadioInline2">Management of immovable property</label>
                                </div>
                              </div>
                       
                       
                              <div class="col-md-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="checkbox" id="movable_property" value="2" name="movable_property" class="custom-control-input">
                                  <label  class="custom-control-label" for="customRadioInline2">Management of Movable property</label>
                                </div>
                              </div>
                              
                             <div class="col-md-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="checkbox" id="other" value="2" name="other" class="custom-control-input">
                                  <label  class="custom-control-label" for="customRadioInline2">Any Other</label>
                                </div>
                              </div>
                            </div>
                            </div>
                            
                            
                           
                         <div class="col-md-10 row"> 
                            <label class="col-md-4">First Witness Name <span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text"
                                value=""
                                required="required" class="form-control pwstrength"
                                data-indicator="pwindicator" name="witness_name"
                                id="witness_name">
                            </div>
                          </div>
                            </div>                  
                                  
                    <div class="col-md-10 row"> 
                      <label class="col-sm-4 col-form-label required">Contact Details <span title="Required" style="color: red;">*</span>
                      </label>
                        <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control" value="" name="app_contact" id="app_contact" required="required">
                            </div>
                            </div>
                    </div>
                    <div class="col-md-10 row"> 
                            <label class="col-sm-4" >Adhar Card No<span title="Required" style="color: red;">*</span></label>
                        
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control phone-number"
                                name="app_adhar" value=""
                                id="app_adhar" required="required">
                            </div>
                                 
                                                    </div>
                    </div>
                    <div class="col-md-10 row"> 
                      <label class="col-md-4 col-form-label required">Second Witness Name <span title="Required" style="color: red;">*</span>
                      </label>
                        <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control"
                                value="" name="second_witness_name"
                                id="second_witness_name" required="required">
                            </div>
                            </div>
                    </div>
                    <div class="col-md-10 row"> 
                      <label class="col-md-4 col-form-label required">Second Witness Address <span title="Required" style="color: red;">*</span>
                      </label>
                        <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control"
                                value="" name="second_witness_address"
                                id="second_witness_address" required="required">
                            </div>
                            </div>
                    </div>
                      <div class="col-md-10 row"> 
                            <label class="col-md-4">Second witness contact <span title="Required" style="color: red;">*</span></label>
                      
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control phone-number"
                                name="second_witness_contact" value=""
                                id="second_witness_contact" required="required">
                            </div>
                                 
                                                        </div>
                        </div>
                        <div class="col-md-10 row"> 
                            <label class="col-md-4">Second witness UID No <span title="Required" style="color: red;">*</span></label>
                      
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control phone-number"
                                name="second_witness_uid" value=""
                                id="second_witness_uid" required="required">
                            </div>
                                 
                                                        </div>
                        </div>
                          <div class="col-md-10 row"> 
                            <label class="col-md-4">Second witness AdharCard No <span title="Required" style="color: red;">*</span></label>
                      
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="text" class="form-control phone-number"
                                name="second_witness_adhar" value=""
                                id="second_witness_adhar" required="required">
                            </div>
                                 
                                                        </div>
                        </div>
                    <div class="col-md-10 row"> 
                            <label class="col-md-4">Guardianship Application is<span title="Required" style="color: red;">*</span></label>
                          <div class="col-md-8">
                            <div class="form-group row">
                              <div class="col-md-5">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="gender" value="1" name="application" required="required" class="custom-control-input"> 
                                    <label class="custom-control-label" for="customRadioInline1">Single Application </label>
                                </div>
                              </div>
                              <div class="col-md-5">
                                <div
                                  class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="gender" value="0" name="application" class="custom-control-input">
                                  <label  class="custom-control-label" for="customRadioInline2">Joint Application</label> </label>
                                </div>
                              </div>
                      
                                                        </div>
                          </div>
                          </div>
                          
                             <div class="col-md-10 row">
                                            <label class="col-md-8"class="form-check-label" for="gridCheck"> <input type="checkbox" name ="accept" required>
                                       I accept Terms And Conditions.
                                </label>
                          <div class="col-md-2">
                          
                               <a href="#" class="btn btn-primary"
                                id="prv2">
                                Previous
                              </a>
                            </div>
                          </div>
                          <div class="col-md-2">
                            
                                <button type="submit" class="btn btn-primary"
                                id="regisbtn">
                                <i class="far fa-edit">&nbsp;Submit</i>
                              </button>
                            </div>
                    
                    <!--  <div class="col-md-10 row"> 
                           <input type="checkbox" name="confirm" id="confirm" >We confirm that all the facts given above by me/us are true and correct to the best of my/our knowledge and as stipulated under the national Trust Acts and its pules and regulations. 
                       </div>-->
                   
                    
              </div>
                            
                            <!---four step of form end -->
                            </div>
                          </div>
                           
          </form>

  </body>
  </section>
  </div>
  </div>
  </div>

<script>
 // alert("rahul");
 $('#hstep2').hide();
 $('#hstep3').hide();
 $('#hstep4').hide();
 
  $('#hstepv1').click(function(){
    
      $('#hstep1').show();
       $('#hstep2').hide();
        $('#hstep3').hide();
         $('#hstep4').hide();
 });
 
 
  $('#hstepv2').click(function(){
    /* var name= $('#name').val();
    var age= $('#age').val();
    var f_name= $('#f_name').val();
    var m_name= $('#m_name').val();
    var address= $('#address').val();
    var mobile= $('#gua_of_no').val();
     var pin_code= $('#pin_code').val();
      if((name.length>2) && (age.length>2 ) && (f_name.length>2) && (m_name.length>2) && (address.length>2) && mobile.length>2 && (pin_code.length>2)){
      */
      $('#hstep2').show();
       $('#hstep1').hide();
        $('#hstep3').hide();
     // else{
         //    alert("please fill all required fields");
      //  }
 });
 
 
  $('#hstepv3').click(function(){
      $('#hstep3').show();
       $('#hstep1').hide();
        $('#hstep2').hide();
 });
 
 $('#next1').click(function(){
     /*   var name= $('#name').val();
        var age= $('#age').val();
        var f_name= $('#f_name').val();
        var m_name= $('#m_name').val();
        var address= $('#address').val();
        var mobile= $('#gua_of_no').val();
        var pin_code= $('#pin_code').val();
        if((name.length>2)  && (f_name.length>2) && (m_name.length>2) && (address.length>2) && mobile.length>2 && (pin_code.length>2)){*/
        $('#hstep2').show();
        $('#hstep3').hide();
        $('#hstep1').hide();
    // }else{ alert("please fill all required fields");}
 });
 
 
 $('#next2').click(function(){
      $('#hstep3').show();
       $('#hstep2').hide();
        $('#hstep1').hide();
 });
 $('#prv1').click(function(){
      $('#hstep1').show();
       $('#hstep2').hide();
        $('#hstep2').hide();
 });
 $('#prv2').click(function(){
      $('#hstep2').show();
       $('#hstep3').hide();
        $('#hstep1').hide();
 });
 
  $('#parent_id').keyup(function(){
    var parent_id= $('#parent_id').val();
    $.post("http://umpl.in.net/index.php/pageControllers/checkID",{parent_id : parent_id}, function(data){
      var d = jQuery.parseJSON(data);
    $("#custoStatus").html(d.msg);
 if(d.checkv==true){
   $('#regForm').show();
 }else{
   $('#regForm').show();
 }
   
  
  
  });
  });

$('[data-type="adhaar-number"]').keyup(function() {
  var value = $(this).val();
  value = value.replace(/\D/g, "").split(/(?:([\d]{4}))/g).filter(s => s.length > 0).join("-");
  $(this).val(value);
});

$('[data-type="adhaar-number"]').on("change, blur", function() {
  var value = $(this).val();
  var maxLength = $(this).attr("maxLength");
  if (value.length != maxLength) {
    $(this).addClass("highlight-error");
  } else {
    $(this).removeClass("highlight-error");
  }
});
</script>
<div class="col-md-10 row"></div>
</br>
</br>
<?php $this->load->view("footer");?>
<?php $this->load->view("footerJs");?>