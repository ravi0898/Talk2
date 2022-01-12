<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="author" content="TechyDevs">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Talk2 an expert</title>
<!--== css include ==-->
<?php include(APPPATH.'views/home/include/css.php'); ?>
<!--== css include ==-->
</head>
<body id="contact-page">
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
    <h2 class="sec__title mb-2">Contact us</h2>
</div><!-- end section-heading -->
<ul class="list-items d-flex align-items-center mt-2">
    <li class="active__list-item"><a href="index.php">Home</a></li>
    
    <li>support</li>
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
START CONTACT AREA
================================= -->
<section class="contact-area padding-top-100px padding-bottom-85px">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-heading mb-5">
<h2 class="sec__title font-size-28 line-height-35">How can we help you today?</h2>
</div><!-- end section-heading -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
<div class="row">
<div class="col-lg-12">
<div class="alert alert-success alert-message mb-3" role="alert"></div>
</div>
<div class="col-lg-7">
<div class="billing-form-item">
<div class="billing-title-wrap">
<h3 class="widget-title pb-0">Use the form below to get in touch with us</h3>
<div class="title-shape margin-top-10px"></div>
</div><!-- billing-title-wrap -->
<div class="billing-content">
<div class="contact-form-action">

<?php if($this->session->flashdata('contact')){ ?>
<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert">&times;</a>
<strong><?php echo $this->session->flashdata('contact'); ?></strong> 
</div>
<?php
$this->session->unset_userdata ('contact');
} ?>

    <form method="post" action="<?php echo base_url();?>home/contact_us" class="">
        <div class="input-box">
            <label class="label-text">Full Name</label>
            <div class="form-group">
                <span class="la la-user form-icon"></span>
                <input id="name" class="form-control" type="text" name="fname" value="<?php echo set_value('fname');?>" placeholder="Full name">
                <small class="text-danger"><?php echo form_error('fname'); ?></small>

            </div>
        </div><!-- end input-box -->
        <div class="input-box">
            <label class="label-text">Email</label>
            <div class="form-group">
                <span class="la la-envelope-o form-icon"></span>
                <input id="email" value="<?php echo set_value('email');?>" class="form-control" type="email" name="email" placeholder="Email address">
                <small class="text-danger"><?php echo form_error('email'); ?></small>

            </div>
        </div><!-- end input-box -->
        <div class="input-box">
            <label class="label-text">Phone</label>
            <div class="form-group">
                <span class="la la-phone form-icon"></span>
                <input id="phone" class="form-control" type="number" name="phone" min="0" value="<?php echo set_value('phone');?>" placeholder="Phone number">
                <small class="text-danger"><?php echo form_error('phone'); ?></small>

            </div>
        </div><!-- end input-box -->
         <div class="input-box">
            <label class="label-text">Reason for contact</label>
            <div class="form-group">
                <span class="la la-book form-icon"></span>
                <input id="subject" class="form-control" type="text" name="subject" value="<?php echo set_value('subject');?>" placeholder="Subject">
                <small class="text-danger"><?php echo form_error('subject'); ?></small>

            </div>
        </div><!-- end input-box -->
        <div class="input-box">
            <label class="label-text">Message</label>
            <div class="form-group">
                <span class="la la-pencil form-icon"></span>
                <textarea id="message" class="message-control form-control" name="message" placeholder="Write message"><?php echo set_value('message');?></textarea>
                <small class="text-danger"><?php echo form_error('message'); ?></small>

            </div>
        </div>
        <div class="btn-box">
            <button type="submit" name="submit" class="theme-btn border-0">Send Message</button>
        </div>
    </form>
</div><!-- end contact-form-action -->
</div><!-- end billing-content -->
</div><!-- end billing-form-item -->
</div><!-- end col-lg-7 -->
<div class="col-lg-5">
<div class="contact-details margin-bottom-30px">
<div class="contact-details-inner">
<div class="contact-item d-flex align-items-center">
    <div class="contact-icon mr-3">
        <i class="la la-globe icon-element font-size-24"></i>
    </div>
    <div class="contact-address">
        <h4 class="widget-title text-white pb-2">Worldwide located</h4>
        
    </div>
</div>
<div class="contact-item d-flex align-items-center">
    <div class="contact-icon mr-3">
        <i class="la la-envelope icon-element font-size-24"></i>
    </div>
    <div class="contact-address">
        <h4 class="widget-title text-white pb-2">General support</h4>
        <p class="color-white-rgba font-weight-medium"><a href="mailto:supportjob@gmail.com" class="color-white-rgba">support@talk2anexpert.com</a></p>
       
    </div>
</div>
</div>
</div><!-- end contact-details -->
<div class="billing-form-item presentation-box">
<div class="billing-title-wrap">
<h3 class="widget-title">Need Presentation?</h3>
<div class="title-shape"></div>
</div>
<div class="billing-content">
<p>
    You like what we do, but you need to demonstrate your team as well. Easy!
    Directly download, or share the link to a PDF with your colleagues.
</p>
<a href="javascript:void(0)" class="border-0 color-text-2 mt-4 d-flex align-items-center"><i class="la la-download icon-element"></i> Company profile.pdf (6.3 MB)</a>
</div>
</div><!-- end billing-form-item -->
</div><!-- end col-lg-5 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end contact-area -->
<!-- ================================
END CONTACT AREA
================================= -->
<div class="section-block"></div>
<!-- ================================
START LOCATION AREA
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