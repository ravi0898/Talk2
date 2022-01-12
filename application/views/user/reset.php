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
                        <h3 class="widget-title font-size-28">Change Password!</h3>
                        
                    </div><!-- billing-title-wrap -->
                    <div class="billing-content">
                        <div class="contact-form-action">
                            <?php if($this->session->flashdata('succ')){ ?>
                            <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong><?php echo $this->session->flashdata('succ'); ?></strong> 
                            </div>
                            <?php
                            $this->session->unset_userdata('succ');
                            } ?>
                            <form method="POST" action="<?php echo base_url();?>user/upd_pass">
                                
                                <div class="input-box">
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
                                </div><!-- input-box -->
                                <div class="input-box">
                                <label class="label-text">Confirm Password</label>
                                <div class="form-group">
                                <i class="la la-lock form-icon"></i>
                                <input class="form-control password-field" type="password" name="cpassword" value="<?php echo set_value('cpassword'); ?>" placeholder="Confirm password">
                                <small class="text-danger"><?php echo form_error('cpassword'); ?></small>

                                </div>
                                </div><!-- input-box -->
                                <?php  $user_id = $this->uri->segment(3); ?>
                                <div class="btn-box margin-top-20px margin-bottom-20px">
                                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                    <button class="theme-btn border-0" type="submit" name="submit">Update Password</button>
                                </div>
                                
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