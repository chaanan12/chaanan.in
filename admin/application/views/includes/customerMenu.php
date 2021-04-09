
<ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="<?php echo base_url()?>index.php/clogin/index" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
              
            </li>
            
             <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i data-feather="user-check"></i><span>Personal</span></a>
              <ul class="dropdown-menu">
                   <li><a href="<?php echo base_url();?>index.php/clogin/customer_profile">View/Edit Profile</a></li>

              </ul>
            </li>
           
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i data-feather="briefcase"></i><span>Sarvy</span></a>
              <ul class="dropdown-menu">
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
                <li><a class="nav-link" href="<?php echo base_url();?>index.php/customer/<?php echo $spd->page_name;?>/<?php echo $row->plan_id;?>"><?php echo $spd->plan_name;?></a></li>
               <?php endforeach;}?>
              </ul>
            </li>
          
             <li class="dropdown">
              	<a href="#" class="nav-link has-dropdown"><i data-feather="anchor"></i><span>Report</span></a>
	              <ul class="dropdown-menu">
	                	<li><a class="nav-link" href="<?php echo base_url();?>index.php/clogin/downline/1">Filled Sarvy</a></li>
	            </ul>
            </li>
 
          </ul>