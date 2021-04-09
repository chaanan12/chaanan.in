<?php $this->load->view('headerCss');?>
<?php $this->load->view('header');?>

 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/zoom.css">
<script src="<?php echo base_url();?>assets/js/zoom.js"></script>
<section class="segment1 hp-s3 space-huge">
<div class="container">
<div class="row">
 <?php if($gallery->num_rows()>0){
         foreach( $gallery->result() as $g):?> 
    
<div class="col-md-5 img-zoom-container myDIV">
<img  id="myimage" class="img-responsive aligncenter" src="<?php echo base_url();?>admin/assets/images/product/<?php echo $g->file1; ?>" width="500" alt="img-spectrum-of-care-r0" />
</div>
 <input type ="hidden" name="product_id" id ="product_idv" value = "<?php echo $g->id;?>">
    <div class="col-lg-12 col-md-12 col-sm-12 img-zoom-result" id="myresult">
          </div>
<div class="col-md-6 col-md-offset-1 rtl-text" id="test">
    
<h1 class="font-38"><p class="font-24 margin-vertical-20 font-italic"><?php echo $g->name;?></h1>
<p><?php echo $g->discription;?></p>
<ul class="list-unstyled">
<li>Selling Price:<?php echo $g->selling_price1;?></li>
<li>MRP Price:
<?php echo $g->mrp_price1;?></li>
<?php   $getStatus = $this->Allformmodel->getStatusOfProduct($g->id);
                //echo $getStatus;
                if($getStatus){?> <div class="btn btn-primary btn-sm"> <a href="<?php echo base_url();?>index.php/welcome/loginByOtp/<?php echo $g->id;?>" >Order Now</a></div><br/><?php }else{?>
               
                <div class="col-sm-4" id="heart11">
                     <div class="btn btn-primary btn-sm" > <a href="<?php echo base_url();?>index.php/welcome/loginByOtp/<?php echo $g->id;?>" > Order Now</a></div>
                      <br/>
                      </div>
                     <div class="col-sm-4" id="heart21"> 
                        <button id ="likebutton2" class="btn-sm btn btn-warning">   
                           Add to Cart
                        </button>
                        
                    </div>
                    <br/>
            <?php }if($this->uri->segment(4)=='gv1'){?>
             <form class="theme-form" action="<?php echo base_url();?>index.php/welcome/loginByOtp/"  method="post">
              <br/> <input type="hidden" name="pik" value="<?php echo $g->id;?>">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" style="width:300px;"><br/>
                    <input type="email" class="form-control"  name="email" placeholder="Enter your Email" required="" style="width:300px;"><br/>
                    <input type="text" class="form-control" id="phone" name="mno" placeholder="Enter your Mobile No" required=""  style="width:300px;"><br/>
                    <input class="form-control" type="text" name="otp_1" placeholder="Enter OTP" id="otp" style="width:150px;" />
                    <br/>
			      
                          
                               <button type="submit"style="margin-left:10%;" id="lop" class="btn btn-primary"
                                id="regisbtn">
                                <i class="far fa-edit">&nbsp;Submit</i>
                              </button>
                            
                     </form>
                <?php }?>
                      </div>
                  <?php $i=1;
                      if($getStatus){?>
                                     <script>
                                            $('#heart1').show();
                                            $('#heart2').hide();
                                            $('#heart11').show();
                                            $('#heart21').hide();
                                             </script>
                                                <?php }else{?>
                                                 <script>
                                                 $('#heart1').hide();
                                                $('#heart2').show();
                                                $('#heart11').hide();
                                                $('#heart21').show();
                                                        </script>
                                                <?php }?>
                                                <script>
                                                     $('#likebutton').click(function(){
                                                            var product_id =$('#product_idv').val();
                                                             var cartnumber =parseInt($('#cartnumber').val());
                                                             
                                                              
                                                            $.post("<?php echo site_url(); ?>/product/product_like" ,{ product_id : product_id } ,
                                                            function(data){ 
                                                              
                                                                if(data==1){
                                                                      $('#heart1').show();
                                                                       $('#heart2').hide();
                                                                       $('#cartcv').html(cartnumber+1);
                                                                       $('#cartnumber').val(cartnumber+1);
                                                                       
                                                                }else{
                                                                    alert("Please contact to admin");
                                                                }
                                                              
                                                            });
                                                        });
                                                        
                                                         $('#dislikebutton').click(function(){
                                                            var product_id =$('#product_idv').val();
                                                            var cartnumber =parseInt($('#cartnumber').val());
                                                            $.post("<?php echo site_url(); ?>/product/productDish_like" ,{ product_id : product_id } ,
                                                            function(data){ 
                                                                if(data==1){
                                                                      $('#heart2').show();
                                                                       $('#heart1').hide();
                                                                        $('#cartcv').html(cartnumber-1);
                                                                        $('#cartnumber').val(cartnumber-1);
                                                                }else{
                                                                    alert("Please contact to admin");
                                                                }
                                                              
                                                            });
                                                        });
                                                         $('#likebutton2').click(function(){
                                                            var product_id =$('#product_idv').val();
                                                             var cartnumber =parseInt($('#cartnumber').val());
                                                             
                                                             //alert(product_id) ;
                                                            $.post("<?php echo site_url(); ?>/Product/product_like" ,{ product_id : product_id } ,
                                                            function(data){ 
                                                                //alert(data);
                                                                if(data){
                                                                  alert("successfully added your cart")   
                                                                }
                                                               
                                                                if(data==1){
                                                                      $('#heart11').show();
                                                                       $('#heart21').hide();
                                                                       $('#cartcv').html(cartnumber+1);
                                                                       $('#cartnumber').val(cartnumber+1);
                                                                       
                                                                }else{
                                                                    alert("Please contact to admin");
                                                                }
                                                              
                                                            });
                                                        });
                                                        
                                                         $('#dislikebutton2').click(function(){
                                                            var product_id =$('#product_idv').val();
                                                            var cartnumber =parseInt($('#cartnumber').val());
                                                            $.post("<?php echo site_url(); ?>/product/productDish_like" ,{ product_id : product_id } ,
                                                            function(data){ 
                                                               
                                                                if(data==1){
                                                                      $('#heart21').show();
                                                                       $('#heart11').hide();
                                                                        $('#cartcv').html(cartnumber-1);
                                                                        $('#cartnumber').val(cartnumber-1);
                                                                }else{
                                                                    alert("Please contact to admin");
                                                                }
                                                              
                                                            });
                                                        });
                                                                          
                                                                                                    
                                                </script>   
     
                   </div>
                  <?php $i=1;?>
                  
<script>
// Initiate zoom effect:
$('#myresult').hide();
$('#myimage').mouseover(function() {
  //alert("raj");
  $('#myresult').show();
 // $('#test').hide();
imageZoom("myimage", "myresult");
$('#text').hide();
});
  $('#test').mouseover(function() {
 
  $('#myresult').hide();
  //$('#text').hide();
//imageZoom("myimage", "myresult");
//$('#myresult').hide();
});
//imageZoom("myimage", "myresult");
</script>


<script>

    $(document).ready(function(){
       
          $('#sub').hide();
            $('#otp').hide();
          $('#otplabel').hide();
        
        $('#phone').keyup(function(){
            var mob =$('#phone').val();
           if(mob.length==10){
            alert(mob);
            $.post("<?php echo site_url(); ?>/welcome/sendotp" ,
            { mob : mob } ,
            function(data){
                alert(data);
                if(data=="Please Enter Your OTP"){
                      $('#sub').hide();
                      $('#otp').show();
                      $('#otplabel').show();
                }else{
                      $('#sub').hide();
                      $('#otp').show();
                      $('#otplabel').show();
                }
            });}
        });
           $('#lop').hide();
        $('#otp').keyup(function(){
           var otp= $('#otp').val();
           var mob =$('#phone').val();
          
        //   alert(otp);
           $.post("<?= site_url();?>/welcome/matchotp",
           { mob : mob ,otp : otp},
           function(data){
              // alert(data);
               if(data=="true"){
                     $('#sub').show();
                      $('#lop').show();
                     
               }else{
                     $('#sub').hide();
                     $('#lop').hide();
               }
               
           });
            
        });
    });
</script>
<?php $this->load->view('footer');?>
<?php $this->load->view('footerJs');?>
 <?php  endforeach;
 }?>

</div>
</section>