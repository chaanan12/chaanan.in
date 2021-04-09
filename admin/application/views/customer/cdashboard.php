
     
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row ">
          <?php 
           $this->db->distinct();
              $this->db->select("plan_id");
              $this->db->where("employee_id",$this->session->userdata("customer_id"));
              $apl = $this->db->get("assign_plan");
              if($apl->num_rows()>0){
              	foreach($apl->result() as  $row):
              	$this->db->where("id",$row->plan_id);
              	$spd = $this->db->get("study_plan")->row();
              	?>
              	
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-green-dark">
                <div class="card-statistic-3">
                  <div class="card-icon card-icon-large"><i class="fa fa-award"></i></div>
                  <div class="card-content">
                    <h4 class="card-title"> <?php echo $spd->plan_name;?></h4>
                    <span></span>
                    <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-purple" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0 text-sm">
                      <span class="mr-2"><i class="fa fa-arrow-up"></i> </span>
                      <span class="text-nowrap">Pair =</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            
             <?php endforeach;}?>
            
        
           
          </div>
            
           
         
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4></h4>
                </div>
                <div class="card-body">
                 
                  <table class="table table-bordered table-hover table-responsive text-nowrap"> <tr> <thead><th></th><th></th><th></th></tr></thead>
                  
                  
                  <tbody>
                     
                     
                      </tbody>
                  
                  </table>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Achieve</h4>
                </div>
                <div class="card-body">
                  <div class="summary">
                      
                     
                  <table class="table table-bordered table-hover table-responsive text-nowrap"> <tr> <thead><th></th><th></th><th></th></tr></thead>
                  
                  
                  <tbody>
                      
                  
                  </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
          
         