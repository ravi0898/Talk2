<?php 
$reg_id   = $this->uri->segment(2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Talk2 an expert</title>
       <!-- ================================
            CSS
================================= -->
         
        <?php include(APPPATH.'views/home/include/css.php'); ?>
         <!-- ================================
            CSS
================================= -->
</head>
<body>
<!-- start per-loader -->
<div class="loader-container">
    <div class="loader-circle">
        <div class="loader">
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
        </div>
    </div>
</div>
<!-- end per-loader -->
<!-- ================================
            START HEADER AREA
================================= -->
  <?php include(APPPATH.'views/home/include/header.php'); ?>
<!-- ================================
         END HEADER AREA
================================= -->
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                        <div class="section-heading">
                            <h2 class="sec__title mb-0">Login</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="<?php echo base_url();?>">Home</a></li>
                            <li class="active__list-item">Pages</li>
                            <li>Login</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->
<!-- ================================
       START FORM AREA
================================= -->
<section class="form-shared padding-top-100px padding-bottom-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
               
                <div class="user-action-form">
            		<div class="tab-shared tab-shared-3">
            		<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            		<li class="nav-item">
            		<a class="nav-link theme-btn <?php if($reg_id=='' || $reg_id=='loginUser' ){ echo 'active'; }?>" id="login-tab" data-toggle="tab" href="#login-nav" role="tab" aria-controls="login-nav" aria-selected="true">
            		<i class="la la-sign-in"></i> Login to Account
            		</a>
            		</li>
            		<li class="nav-item">
            		<a class="nav-link theme-btn <?php if($reg_id=='user_signup'){ echo 'active'; }?>" id="signup-tab" data-toggle="tab" href="#signup-nav" role="tab" aria-controls="signup-nav" aria-selected="false">
            		<i class="la la-user"></i> Register Account
            		</a>
            		</li>
            		</ul>
            		</div>
            		<div class="tab-content" id="myTabContent">
            		<div class="tab-pane fade <?php if($reg_id=='' || $reg_id=='loginUser'){ echo 'active show'; }?>" id="login-nav" role="tabpanel" aria-labelledby="login-tab">
            		<div class="billing-form-item mb-0">
            		<div class="billing-title-wrap border-bottom-0 text-center">
            		<h3 class="widget-title font-size-28 pb-2">Login to Your Account</h3>
            		</div><!-- billing-title-wrap -->
            		<div class="billing-content px-0">
            		<div class="contact-form-action">
            		<?php if($this->session->flashdata('reg_succ')){ ?>
            		<div class="alert alert-success">
            		<a href="#" class="close" data-dismiss="alert">&times;</a>
            		<strong><?php echo $this->session->flashdata('reg_succ'); ?></strong> 
            		</div>
            		<?php
            		$this->session->unset_userdata ('reg_succ');
            		} ?>
            		<?php if($this->session->flashdata('login_err')){ ?>
            		<div class="alert alert-danger">
            		<a href="#" class="close" data-dismiss="alert">&times;</a>
            		<strong><?php echo $this->session->flashdata('login_err'); ?></strong> 
            		</div>
            		<?php
            		$this->session->unset_userdata('login_err');
            		} ?>
            		<form method="POST" action="<?php echo base_url('user/loginUser');?>">
                		<div class="row">
                		<div class="col-lg-12">
                		<div class="input-box">
                		<label class="label-text">Email Address</label>
                		<div class="form-group">
                		<i class="la la-user form-icon"></i>
                		<input class="form-control" type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="Your email address">
                		<small class="text-danger"><?php echo form_error('email'); ?></small>
                		</div>
                		</div>
                		</div><!-- end col-lg-12 -->
                		<div class="col-lg-12">
                		<div class="input-box">
                		<label class="label-text">Password</label>
                		<div class="form-group">
                		<i class="la la-lock form-icon"></i>
                		<input class="form-control password-field" type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password">
                		<a href="javascript:void(0)" class="btn toggle-password" title="Toggle show/hide password">
                		<i class="la la-eye eye-on"></i>
                		<i class="la la-eye-slash eye-off"></i>
                		</a>
                		<small class="text-danger"><?php echo form_error('password'); ?></small>
                		</div>
                		</div>
                		</div><!-- end col-lg-12 -->
                		<div class="col-lg-12">
                		<div class="account-assist mt-4 mb-4 text-center">
                		<div class="col-lg-12">
                		<div class="form-group">
                		<div class="custom-checkbox mr-0 d-flex align-items-center justify-content-between">
                		<div>
                		<input type="checkbox" name="terms" id="chb1">
                		<label for="chb1">Keep me logged in</label>
                		<small class="text-danger"><?php echo form_error('terms'); ?></small>
                		</div>
                		<div>
                		<a href="<?php echo base_url();?>user/forget" class="color-text">Forgot password?</a>
                		</div>
                		</div>
                		</div>
                		</div><!-- end col-lg-12 -->
                		<div class="col-lg-12">
                		<div class="btn-box margin-top-20px margin-bottom-10px">
                		<button class="theme-btn border-0" type="submit" name="submit">Login Account</button>
                		</div>
                		</div><!-- end col-lg-12 -->
                		<p class="account__desc">or</p>
                		</div>
                		</div><!-- end col-lg-12 -->
                		<div class="col-lg-6 mx-auto text-center responsive-column">
                		<div class="form-group">
                		<a class="theme-btn bg-7 border-0 w-100" href="<?php echo base_url();?>user/login_with_gmail">
                		<i class="la la-google mr-2"></i> Login With Google
                		</a>
                		</div>
                		</div>
                		
                		<div class="col-lg-12">
                		<!-- <p>Don't have an account? <a href="login.php" class="color-text"> Create Account</a></p> -->
                		</div><!-- end col-lg-12 -->
                		</div><!-- end row -->
            		</form>
            		</div><!-- end contact-form-action -->
            		</div><!-- end billing-content -->
            		</div><!-- end billing-form-item -->
            		</div><!-- end tab-pane -->
            		<div class="tab-pane fade <?php if($reg_id=='user_signup'){ echo 'active show'; }?>" id="signup-nav" role="tabpanel" aria-labelledby="signup-tab">
            		<div class="billing-form-item mb-0">
            		<div class="billing-title-wrap border-bottom-0 text-center">
            		<h3 class="widget-title font-size-28 pb-2">Create Your Account!</h3>
            		<p>Create an account to get recommended jobs that matches
            		<br> your resume and apply to multiple jobs in seconds! <br>
            		<strong class="color-text-2 font-weight-medium">Already have an account? <a href="login.php" class="color-text">Sign In</a></strong>
            		</p>
            		</div><!-- billing-title-wrap -->
            		<div class="billing-content">
            		<div class="contact-form-action">
            		<form method="POST" action="<?php echo base_url('user/user_signup');?>">
                		<div class="input-box">
                		<label class="label-text">First name</label>
                		<div class="form-group">
                		<i class="la la-user form-icon"></i>
                		<input class="form-control" type="text" name="fname" value="<?php echo set_value('fname'); ?>" placeholder="First name">
                		<small class="text-danger"><?php echo form_error('fname'); ?></small>
                		</div>
                		</div><!-- input-box -->
                		<div class="input-box">
                		<label class="label-text">Last name</label>
                		<div class="form-group">
                		<i class="la la-user form-icon"></i>
                		<input class="form-control" type="text" name="lname" value="<?php echo set_value('lname'); ?>" placeholder="Last name">
                		<small class="text-danger"><?php echo form_error('lname'); ?></small>
                		</div>
                		</div><!-- input-box -->
                		<div class="input-box">
                		<label class="label-text">Email</label>
                		<div class="form-group">
                		<i class="la la-envelope-o form-icon"></i>
                		<input class="form-control" type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="Enter email address">
                		<small class="text-danger"><?php echo form_error('email'); ?></small>
                		</div>
                		</div><!-- input-box -->
                		<div class="input-box mb-3">
                		<label class="label-text">Password</label>
                		<div class="form-group mb-0">
                		<i class="la la-lock form-icon"></i>
                		<input class="form-control password-field" type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password">
                		<a href="javascript:void(0)" class="btn toggle-password" title="Toggle show/hide password">
                		<i class="la la-eye eye-on"></i>
                		<i class="la la-eye-slash eye-off"></i>
                		</a>
                		<small class="text-danger"><?php echo form_error('password'); ?></small>
                		</div>
                		<!--<span class="mt-1">Must use 5-10 characters</span>-->
                		</div><!-- input-box -->
                		<div class="input-box">
                		<label class="label-text">Confirm Password</label>
                		<div class="form-group">
                		<i class="la la-lock form-icon"></i>
                		<input class="form-control password-field" type="password" name="cpassword" value="<?php echo set_value('cpassword'); ?>" placeholder="Confirm password">
                		<small class="text-danger"><?php echo form_error('cpassword'); ?></small>
                		</div>
                		</div><!-- input-box -->
                		<div class="input-box">
                		<div class="form-group">
                		<div class="custom-checkbox d-block mr-0">
                		<input type="checkbox" name="terms" id="chb3">
                		<label for="chb3">I Agree to Talk2 <a href="<?php echo base_url();?>home/terms" class="color-text">Privacy Policy</a> and <a href="<?php echo base_url();?>home/privacy" class="color-text">Terms and Conditions</a></label>
                		<small class="text-danger"><?php echo form_error('terms'); ?></small>
                		</div><!-- end custom-checkbox -->
                		</div>
                		</div><!-- input-box -->
                		<div class="btn-box margin-top-30px">
                		<button type="submit" name="submit" class="theme-btn border-0" type="submit">Create Account</button>
                		</div>
                		<div class="row pt-2">
                		<div class="col-lg-12">
                		<div class="account-assist mt-4 mb-4 text-center">
                		<p class="account__desc">or</p>
                		</div>
                		</div><!-- end col-lg-12 -->
                		<div class="col-lg-6 mx-auto text-center responsive-column">
                		<div class="form-group">
                		<a class="theme-btn bg-7 border-0 w-100" href="<?php echo base_url();?>user/login_with_gmail">
                		<i class="la la-google mr-2"></i> Login With Google
                		</a>
                		</div>
                		</div><!-- end col-lg-4 -->
                		
                		
                		</div><!-- end row -->
            		</form>
            		</div><!-- end contact-form-action -->
            		</div><!-- end billing-content -->
            		</div><!-- end billing-form-item -->
            		</div><!-- end tab-pane -->
            		</div><!-- end tab-content -->
            	</div>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end form-shared -->
<!-- ================================
       START FORM AREA
================================= -->
<div class="section-block"></div>
<!-- ================================
       START FOOTER AREA
================================= -->
   <?php include(APPPATH.'views/home/include/footer.php'); ?>
<!-- ================================
       START FOOTER AREA
================================= -->
<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->
<!-- Template JS Files -->
   <?php include(APPPATH.'views/home/include/js.php'); ?>
</body>
</html>