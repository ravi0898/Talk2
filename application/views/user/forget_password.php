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
    END BREADCRUMB AREA
================================= -->
<section class="form-shared padding-top-100px padding-bottom-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="billing-form-item mb-0">
                    <div class="billing-title-wrap">
                        <h3 class="widget-title font-size-28">Reset Password!</h3>
                        <p class="font-size-15">Enter the email of your account to reset password.
                            Then you will receive a link to email to reset the password.If you have any
                            issue about reset password
                            <a href="<?php echo base_url();?>vendor/contact" class="color-text">Support</a>
                        </p>
                    </div><!-- billing-title-wrap -->
                    <div class="billing-content">
                        <div class="contact-form-action">
                            <?php if($this->session->flashdata('fget')){ ?>
                            <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong><?php echo $this->session->flashdata('fget'); ?></strong> 
                            </div>
                            <?php
                            $this->session->unset_userdata('fget');
                            } ?>

                             <?php if($this->session->flashdata('succ')){ ?>
                            <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong><?php echo $this->session->flashdata('succ'); ?></strong> 
                            </div>
                            <?php
                            $this->session->unset_userdata('succ');
                            } ?>

                            <form method="POST" action="<?php echo base_url();?>user/forgot_pass">
                                <div class="input-box">
                                    <label class="label-text">Your Email</label>
                                    <div class="form-group">
                                        <span class="la la-envelope-o form-icon"></span>
                                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required="">
                                    </div>
                                </div>
                                <div class="btn-box margin-top-20px margin-bottom-20px">
                                    <button class="theme-btn border-0" type="submit" name="submit">Reset Password</button>
                                </div>
                                <p>
                                    <a href="<?php echo base_url();?>user" class="color-text">Login</a>
                                    or
                                    <a href="<?php echo base_url();?>user" class="color-text">Register</a>
                                </p>
                            </form>
                        </div><!-- end contact-form-action -->
                    </div><!-- end billing-content -->
                </div><!-- end billing-form-item -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<div class="section-block"></div>
<!-- ================================
    START CTA AREA
================================= -->
<!-- ================================
    END CAT AREA
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
<!--===============-->
</html>