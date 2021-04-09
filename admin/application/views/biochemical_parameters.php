
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 20px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
th {
  background-color: #6A5ACD;
  color: white;
}
</style>
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Biochemical Parameters</h4>

						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/adminController/addemployeeinfo" enctype="multipart/Form-data" >
							<div class="card-body">
								<div class="row" id="regForm">



									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-md-12"  style="background-color: lightgray;">
														<label style="font-size:20px"><b>BLOOD INVESTIGATIONS:-</label>
													</div>
												</div>
											</div>
										</br>
										</br>
							<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">						

										<table>
  <tr>
    <th>S.NO.</th>
    <th>PARAMETER</th>
    <th>LEVEL</th>
    <th>UNIT</th>
  </tr>
  <tr>
  	<td >1</td>
    <td >Hemoglobin</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  
  </tr>
  <tr>
  	<td >2</td>
    <td >Total leucocyte Count (TLC)</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
 
  </tr>
   <tr>
   	<td >3</td>
    <td >Differential leucocyte Count (DLC)
    </br> a)Neutrophils
    </br>  b)Lymphocyte
    </br>  c)Monocyte 
    </br> d)Basophils 
		</br> e)Eosinophils                                          </td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
   <tr>
   	<td >4</td>
    <td >Total Red Blood Cells</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
  <tr>
  	<td >5</td>
    <td>Mean Corpuscular Volume (MCV)</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  
  </tr>
   <tr>
   	<td >6</td>
    <td >Mean Corpuscular Hemoglobin(MCH)</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
   <tr>
   	<td >7</td>
    <td >Mean Corpuscular Hemoglobin  Concentration (MCHC)</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>

  </tr>
   <tr>
   	<td >8</td>
    <td >Red Cell Distribution Width (RDW)</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>

  </tr>
   <tr>
   	<td >9</td>
    <td >Erythrocyte Sedimentation Rate (ESR)</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    
  </tr>
   <tr>
   	<td >10</td>
    <td >Packed Cell Volume</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
   <tr>
   	<td >11</td>
    <td >General Blood Picture</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  
  </tr>

</table>
</div>
</div>
</div>
</br>
</br>

<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-md-12"  style="background-color: lightgray;">
														<label style="font-size:20px">BLOOD INVESTIGATIONS:-</label>
													</div>
												</div>
											</div>
										</br>

												<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
													<table>
	<tr>
    <th>S.NO.</th>
    <th>PARAMETER</th>
    <th>LEVEL</th>
    <th>UNIT</th>
  </tr>

   <tr>
   	<td >12</td>
    <td >Blood Suger Fasting</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
   <tr>
   	<td >13</td>
    <td >Blood Suger Post Prandial</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  
  </tr>
   <tr>
   	<td >14</td>
    <td >Random Blood Suger</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  
  </tr>
   <tr>
   	<td >15</td>
    <td >OGTT</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
   <tr>
   	<td >16</td>
    <td >HbA1C</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
   <tr>
   	<td >17</td>
    <td >S.Total Protine</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
 
  </tr>
   <tr>
   	<td >18</td>
    <td >Micro Protine</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
   <tr>
   	<td >19</td>
    <td >S.Albumin</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  
  </tr>
   <tr>
   	<td >20</td>
    <td >Microalbumin</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
 <tr>
 	<td >21</td>
    <td >A:G Ratio</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  
  </tr>
  <tr>
  	<td >22</td>
    <td >S.Bilirubin(Total)</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  
  </tr>
 <tr>
 	<td >23</td>
    <td >S.Bilirubin(Direct)</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
  <tr>
  	<td >24</td>
    <td >S.Bilirubin(Indirect)
</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>

  </tr>
 <tr>
 	<td >25</td>
    <td >SGOT
</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
  <tr>
  	<td >26</td>
    <td >SGPT
</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  
  </tr>
 <tr>
 	<td >27</td>
    <td >Alkaline Phosphatase (ALP)</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  
  </tr>
  <tr>
  	<td >28</td>
    <td >Lactate dehydrogenase (LDH)</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  
  </tr>
 <tr>
    <td >Na+
</td>
<td >29</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
  <tr>
  	<td >30</td>
    <td >K+
</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
 <tr>
 	<td >31</td>
    <td >S.Urea
</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
 
  </tr>
  <tr>
  	<td >32</td>
    <td >S.creatinine
</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
 <tr>
 	<td >33</td>
    <td >Urea Bun
</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
  <tr>
  	<td >34</td>
    <td >Lipid Profile
</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
 
  </tr>
 <tr>
 	<td >35</td>
    <td >Total Cholesterol
</td>
   
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  </tr>
  <tr>
  	<td >36</td>
    <td >Triglyceride</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  </tr>
 <tr>
 	<td >37</td>
    <td >High Density Lipoprotein
</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>


   <tr>
   	<td >38</td>
    <td >Low Density Lipoprotein

</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
 <tr>
 	<td >39</td>
    <td >Very Low Density Lipoprotein

</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>

  </tr>
  <tr>
  	<td >40</td>
    <td >S.Amylase
</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
 
  </tr>
 <tr>
 	<td >41</td>
    <td >S.Lipase

</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
   <tr>
   	<td >42</td>
    <td >Uric Acid (Serum)


</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  
  </tr>

</table>
										</div>
									</div>
								</br>
								</br>
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-md-12" style="background-color: lightgray;">
												<label style="font-size:20px">THYROID PROFILE:- </label>
													</div>
												</div>
											</div>
										</br>
													<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
													<table>
	<tr>
    <th>S.NO.</th>
    <th>PARAMETER</th>
    <th>LEVEL</th>
    <th>UNIT</th>
  </tr>
  <tr>
  	<td >43</td>
    <td >Triiodothyronine (T 3)</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    
  </tr>
   <tr>
   	<td >44</td>
    <td >Thyroxine(T4)
</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  
  </tr>
  <tr>
  	<td >45</td>
    <td >Thyroid Stimulating Hormones</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
   <tr>
   	<td >46</td>
    <td >Triiodothyronine, Free (F T 3)</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
  <tr>
  	<td >47</td>
    <td >Thyroxine, Free(FT4)</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  
  </tr>
   <tr>
   	<td >48</td>
    <td >Calcium Total</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
  <tr>
  	<td >49</td>
    <td >Cyanocobalamin (Vitamin B12)</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
   <tr>
   	<td >50</td>
    <td >25- Hydroxy Vitamin D</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    
  </tr>
  
  
</table>
</div>
</div>
</br>
</br>
<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-md-12" style="background-color: lightgray;">
												<label style="font-size:20px">URINE EXAMINATION :- </label>
													</div>
												</div>
											</div>

													</br>
													
													<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
													<table>
	<tr>
    <th>S.NO.</th>
    <th>PARAMETER</th>
    <th>LEVEL</th>
    <th>UNIT</th>
  </tr>
  <tr>
  	<td >51</td>
    <td >URINE EXAMINATION(Routine) PHYSICAL :-  
    </br> COLOUR 
</br>    pH      
</br>     Specific Gravity
</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
   
  </tr>
   <tr>
   	<td >52</td>
    <td >CHEMICAL:- 
    	</br>Suger Glucose            
    	  </br> Ketone     
    	  </br> Protine  
    	  </br>Urobilinogen         
    	   </br> Blood
</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
 
  </tr>
  <tr>
  	<td >53</td>
    <td >MICROSCOPIC: - 
     </br> Leucocytes                                
      </br> RCBs 
       </br>Casts             
        </br>Crystals       
         </br> Epithelial Cells             
         </br>Fungal Budding 
        </br>Differential Leucocytes  Count
</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
  
  </tr>
   <tr>
   	<td >54</td>
    <td >VIRAL MARKER:-  
    </br>HIV
    </br> HBsAg  
    </br> HCV
</td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    <td><input type="text" class="form-control" value="" name="empname" ></td>
    
  </tr>
</table>
</div>
</div>


									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	