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
     <script src="https://use.fontawesome.com/b56f2afb1b.js"></script>
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
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    <!-- ================================
          SIDBAR AREA
================================= -->
    
    <?php include(APPPATH.'views/home/include/user-dashboard-sidebar.php'); ?>

       <!-- ================================
          SIDBAR AREA
================================= -->
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                        <div class="section-heading">
                            <h2 class="sec__title line-height-45">Add Review  </h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="dashboard.php">Home</a></li>
                            <li class="active__list-item">Add Review</li>
                        
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->


            <div class="row mt-5">
            <div class="col-lg-12">

                <div class="billing-form-item">

                    <div class="billing-title-wrap">

                        <h3 class="widget-title pb-0">Add Rating & Review</h3>

                        <div class="title-shape margin-top-10px"></div>

                    </div><!-- billing-title-wrap -->
                    
                     <form method="post" action="<?php echo base_url();?>user/addreview/<?php echo $seg_id; ?>">
                    <div class="row mt-4 mb-4">

                    <div class="col-lg-12">

                    <?php if($this->session->flashdata('review')){ ?>
                    <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong><?php echo $this->session->flashdata('review'); ?></strong> 
                    </div>
                    <?php
                    $this->session->unset_userdata ('review');
                    } ?>
                    <?php if($this->session->flashdata('review_er')){ ?>
                    <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong><?php echo $this->session->flashdata('review_er'); ?></strong> 
                    </div>
                    <?php
                    $this->session->unset_userdata('review_er');
                    } ?>

                    </div>   

             <div class="col-lg-12">
             <?php 
             // $oid = $this->uri->segment(3);
             $getvdata = $this->Model->getData('transaction', array('order_id'=>$seg_id));
             //print_r($getvdata);
             $vendor_id = $getvdata->vendor_id;
             
             ?>     
             <label class="label-text">Rate my work</label><br>
              <div class="ratingsection">
              <div class="star-rating">
                <span class="fa fa-star-o" data-rating="1"></span>
                <span class="fa fa-star-o" data-rating="2"></span>
                <span class="fa fa-star-o" data-rating="3"></span>
                <span class="fa fa-star-o" data-rating="4"></span>
                <span class="fa fa-star-o" data-rating="5"></span>
                <input type="hidden" name="rate" class="rating-value rate" value="1">
                <input type="hidden" name="vendor_id" class="" value="<?php echo $vendor_id; ?>">
         </div> 

            </div>       

                </div> 

                     <div class="col-lg-12">
                        <div class="input-box">

                                    <label class="label-text">Cloase Project</label>

                                    <div class="form-group">

                                    <textarea id="message" name="review" class="message-control form-control textcount" name="message" placeholder="Write your Review" spellcheck="false"></textarea>
                                    <small class="text-danger"><?php echo form_error('review');?></small>

                                    </div>

                                </div>
                     </div> 

                     <div class="col-lg-12">
                          <div class="btn-box">

                                    <button id="send-message-btn" type="submit" class="theme-btn border-0">Send you Review</button>

                                </div>
                     </div> 

                    </div>  
                    </form>  

                
                </div>
            </div>       
            </div> 
         


          
         
            <div class="row">
                <div class="col-lg-12">
                    <div class="copy-right margin-top-40px padding-top-20px padding-bottom-20px">
                        <p class="copy__desc">
                              Copyright &copy; 2021- 2025 Talk2 An Expert all rights reserved| Designed &amp; Developed By
                        <a href="https://www.developerbazaar.com"><span style="color:red;"> Developer </span><span style="color:limegreen;"> Bazaar</span> <span style="color:red;"> Technologies</span></a>
                        </p>
                     
                    </div><!-- end copy-right -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div>
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->
<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->
<!-- Template JS Files -->
<?php include(APPPATH.'views/home/include/js.php'); ?>

<script type="text/javascript">
    var $star_rating = $('.star-rating .fa');

var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating.on('click', function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();
$(document).ready(function() {

});
</script>



</body>
</html>
