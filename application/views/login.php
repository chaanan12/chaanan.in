<?php $this->load->view("headerCss");?>
<?php $this->load->view("header");?>
 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/color2.css">
     
<style>
.login{
    margin-left:20%;
}

</style>
<section class="login-page section-big-py-space bg-light">
    <div scroll-spy="true" id="our-products" class="chipsofic-content-block section-gray">
    <div class="custom-container">
        
        <div class="row">
            <center>
            <div class="col-xl-6 col-lg-6 col-md-12 offset-xl-4 offset-lg-3 offset-md-2 login">
               
                <div class="theme-card">
                     <?php if($this->uri->segment(3)=="success"){?>
            <div class ="alert alert-info">Registration is Successfully Done. Please Login to your account|||</div>
            <?php }?>
                    <h3 class="text-center">Login</h3>
                    <form class="theme-form" action="<?php echo base_url();?>index.php/welcome/matchdata" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <label for="review">Password</label>
                            <input type="password" class="form-control" id="review" name="password" placeholder="Enter your password" required="">
                        </div>
                        <button class="btn btn-normal">Login</button>
                        <a class="float-right txt-default mt-2" href="<?php echo base_url();?>index.php/welcome/forgetpassword" id="fgpwd">Forgot your password?</a>
                    </form>
                    <p class="mt-3">Sign up for a free account at our store. Registration is quick and easy. It allows you to be able to order from our shop. To start shopping click register.</p>
                    <a href="<?php echo base_url();?>index.php/welcome/registration" class="txt-default pt-3 d-block">Create an Account</a>
                </div>
                </div> 
                </center>
                     
        </div>
        </div>
    </div>
</section>


<?php $this->load->view("footer");?>
<?php $this->load->view("footerJs");?>