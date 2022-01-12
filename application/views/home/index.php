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

      

    <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" />

  

</head>

<body id="home-page">

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

    START HERO-WRAPPER AREA

================================= -->

<section class="hero-wrapper add-video">

    <div class="hero-overlay"></div><!-- end hero-overlay -->

     <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">

    <source src="<?php echo base_url();?>assets/images/bg-video.mp4" type="video/mp4">

  </video>

    <div id="particles-bg"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="hero-content-wrapper position-relative z-2">

                    <div class="hero-heading">

                        <div class="section-heading">

                            <h2 class="sec__title line-height-60">FIND YOUR CONSULTANT WORLDWIDE <br>IN A FEW SECONDS</h2>

                            <p class="sec__desc line-height-30 font-weight-medium color-white-rgba pb-3">

                                Talk2 an expert is the leader website for online consultations of any kind

                            </p>

                        </div>

                    </div><!-- end hero-heading -->

                    <div class="hero-form-wrap">
                    <form method="post" action="<?php echo base_url();?>home/homesearch">

                        <div class="main-search-input">

                            <div class="main-search-input-item user-chosen-select-container">

                                <select class="user-chosen-select" name="cat">

                                    <option value="">Select</option>

                                    <?php foreach ($cat as $c) { ?>  

                                    <option value="<?php echo $c->category_name;?>"><?php echo $c->category_name;?></option>

                                    <?php } ?>

                                    

                                </select>

                            </div><!-- end main-search-input-item -->

                            <div class="main-search-input-item user-chosen-select-container">

                            <select class="user-chosen-select" name="country">

                                <option value="">Select</option>
                                <?php foreach ($country_list as $country_val) {
                                ?>
                                <option value="<?php echo $country_val['name']?>"><?php echo $country_val['name']?></option>
                                <?php } ?>

                                </select>

                            </div><!-- end main-search-input-item -->

                            <div class="main-search-input-btn">

                                <button type="submit" class="button theme-btn line-height-50">Find Jobs</button>

                            </div><!-- end main-search-input-btn -->
                         
                        </div><!-- end main-search-input -->
                        </form>
                    </div><!-- end hero-form-wrap -->

                    <div class="hero-tag">

                        <ul class="list-items job-tags d-flex align-items-center mt-4">

                            <li class="text-white font-weight-medium">Popular Searches:</li>

                            <!--<li class="font-size-14"><a href="grid-view.php">Web</a></li>-->

                             <?php foreach($cat_limit as $limit){ ?>

                               <li class="font-size-14"><a href="javascript:void(0)"><?php echo $limit['category_name'];?></a></li>

                             <?php } ?>

                        </ul>

                        <!-- <p class="font-size-14 mt-1 font-weight-medium">320,940 new jobs in the last 7 days</p> -->

                    </div>

                </div><!-- end hero-content-wrapper -->

            </div><!-- end col-lg-12 -->

        </div><!-- end row -->

    </div><!-- end container -->

    <div class="hero-shape"></div>

</section><!-- end hero-wrapper -->

<!-- ================================

    END HERO-WRAPPER AREA

================================= -->





<div class="section-block"></div>





<!-- ================================

    START CARD AREA

================================= -->

<section class="card-area padding-top-10px padding-bottom-20px">

    <div class="container">



          <div class="row mt-5">

            <div class="col-lg-12">

                <div class="section-heading text-center">

                    <h2 class="sec__title">Category</h2>

                    <p class="sec__desc">

                       Click below to find your consultant

                    </p>

                </div><!-- end section-heading -->

            </div>

        </div><!-- end row -->



        <div class="row mt-5">

            

            <?php 
              foreach($cat as $c){
                if($c->cat_img != ''){
            ?>
           

            <div class="col-md-3">

               <div class="category-item" data-aos="zoom-in" data-aos-duration="1000">

            <a href="<?php echo base_url();?>home/filterbycat/<?php echo $c->category_name;?>" class="cat-fig-box d-block p-4">

                <div class="icon-element mb-3">

                    
                      
                     <img class="img-fluid" src="<?php echo base_url('uploads/images/'.$c->cat_img);?>" />
                   
                   

                </div>

                <div class="cat-content">

                    <h4 class="cat__title mb-2"><?php echo $c->category_name;?></h4>

                    <!--<span class="font-weight-medium">(3040)</span>-->

                </div>

            </a>

               </div><!-- end category-item -->

          </div>

            <?php }}?>



          



         

        </div><!---row--->



    </div>



  </div>

</section>

<div class="section-block"></div>    





<!-- ================================

    START MOBILE-APP AREA

================================= -->

<section class="mobile-app-area padding-top-100px padding-bottom-110px">

    <div class="container">

        <div class="row">

            <div class="col-lg-5">

                <div class="mobile-img" data-aos="fade-right" data-aos-duration="1000">

                    <img src="<?php echo base_url();?>assets/images/why-.png" alt="">

                </div>

            </div><!-- end col-lg-5 -->

            <div class="col-lg-6 ml-auto">

                <div class="mobile-app-content process-right" data-aos="fade-left" data-aos-duration="1000">

                    <div class="section-heading margin-bottom-30px">

                        <h2 class="sec__title">Why choose us</h2>

                    </div><!-- end section-heading -->

                    <ul class="info-list contact-links">

                        <li class="d-flex align-items-center mb-4">

                         

                            <div class="app-title-box">

                                <h4 class="widget-title pb-2 font-weight-bold">VERIFIED INTERNATIONAL CONSULTANTS</h4>

                                <p class="color-text-3">

                                    We have a wide range of consultants in every different field waiting to help you solving your
questions and doubts about anything you are interested in.

                                </p>

                            </div>

                        </li>

                        <li class="d-flex align-items-center mb-4">

                         

                            <div class="app-title-box">

                                <h4 class="widget-title pb-2 font-weight-bold"> ONLINE MEETINGS</h4>

                                <p class="color-text-3">

                                    Thanks to Talk2 an expert you will be able to connect with trained professionals worldwide,
chat with them, undertake a video call and get advised.


                                </p>

                            </div>

                        </li>

                        <li class="d-flex align-items-center mb-4">

                           

                            <div class="app-title-box">

                                <h4 class="widget-title pb-2 font-weight-bold"> GET CONNECTED</h4>

                                <p class="color-text-3">

                                    We help professionals to grow their careers and clients to find solutions to their obstacles.

                                </p>

                            </div>

                        </li>

                    </ul>

                   

                </div>

            </div><!-- end col-lg-6 -->

        </div><!-- end row -->

    </div><!-- end container -->

</section><!-- end mobile-app-area -->

<!-- ================================

    END MOBILE-APP AREA

================================= -->



<!-- ================================

    START HIW AREA

================================= -->

<section class="hiw-area text-center padding-top-30px padding-bottom-30px">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="section-heading">

                    <h2 class="sec__title">How It Works?</h2>

                    <p class="sec__desc">

                       Follow the steps to start your first online consultation.

                    </p>

                </div><!-- end section-heading -->

            </div><!-- end col-lg-12 -->

        </div><!-- end row -->

   </div><!-- end container -->

</section><!-- end hiw-area -->



<section class="our-blog p-0 m-0 bg-silver">

    <div class="container work-process  pb-5 pt-5">

       

        <!-- ============ step 1 =========== -->

        <div class="row">

            <div class="col-md-5">

                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">

                    <div class="row">

                        <div class="col-md-5">

                            <div class="process-step">

                                <p class="m-0 p-0">Step</p>

                                <h2 class="m-0 p-0">01</h2>

                            </div>

                        </div>

                        <div class="col-md-7">

                            <h5>Sign up</h5>

                          <!--   <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p> -->

                        </div>

                    </div>

                    <div class="process-line-l"></div>

                </div>

            </div>

            <div class="col-md-2"></div>

            <div class="col-md-5">

                <div class="process-point-right"></div>

            </div>

        </div>

        <!-- ============ step 2 =========== -->

        <div class="row">

            

            <div class="col-md-5">

                <div class="process-point-left"></div>

            </div>

            <div class="col-md-2"></div>

            <div class="col-md-5">

                <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">

                    <div class="row">

                        <div class="col-md-5">

                            <div class="process-step">

                                <p class="m-0 p-0">Step</p>

                                <h2 class="m-0 p-0">02</h2>

                            </div>

                        </div>

                        <div class="col-md-7">

                            <h5>Get access to our consultants database.</h5>

                           <!--  <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p> -->

                        </div>

                    </div>

                    <div class="process-line-r"></div>

                </div>

            </div>



        </div>

        <!-- ============ step 3 =========== -->

        <div class="row">

            <div class="col-md-5">

                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">

                    <div class="row">

                        <div class="col-md-5">

                            <div class="process-step">

                                <p class="m-0 p-0">Step</p>

                                <h2 class="m-0 p-0">03</h2>

                            </div>

                        </div>

                        <div class="col-md-7">

                            <h5>Search the field you are interested in.</h5>

                            <!-- <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p> -->

                        </div>

                    </div>

                    <div class="process-line-l"></div>

                </div>

            </div>

            <div class="col-md-2"></div>

            <div class="col-md-5">

                <div class="process-point-right"></div>

            </div>

        </div>

        <!-- ============ step 4 =========== -->

        <div class="row">

            <div class="col-md-5">

                <div class="process-point-left"></div>

            </div>

            <div class="col-md-2"></div>

            <div class="col-md-5">

                <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">

                    <div class="row">

                        <div class="col-md-5">

                            <div class="process-step">

                                <p class="m-0 p-0">Step</p>

                                <h2 class="m-0 p-0">04</h2>

                            </div>

                        </div>

                        <div class="col-md-7">

                            <h5>Select the consultant you were looking for.</h5>

                            <!-- <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p> -->

                        </div>

                    </div>

                    <div class="process-line-r"></div>

                </div>

            </div>

            

            

        </div>

        <!-- ============ step 5 =========== -->

        <div class="row">

            <div class="col-md-5">

                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">

                    <div class="row">

                        <div class="col-md-5">

                            <div class="process-step">

                                <p class="m-0 p-0">Step</p>

                                <h2 class="m-0 p-0">05</h2>

                            </div>

                        </div>

                        <div class="col-md-7">

                            <h5>Get connected.</h5>

                           <!--  <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p> -->

                        </div>

                    </div>

                    <div class="process-line-l"></div>

                </div>

            </div>

            <div class="col-md-2"></div>

            <div class="col-md-5">

                <div class="process-point-right process-last"></div>

            </div>

        </div>


         <!-- ============ step 6 =========== -->

        
              <div class="row">

            

            <div class="col-md-5">


            </div>

            <div class="col-md-2"></div>

            <div class="col-md-5">

                <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">

                    <div class="row">

                        <div class="col-md-5">

                            <div class="process-step">

                                <p class="m-0 p-0">Step</p>

                                <h2 class="m-0 p-0">06</h2>

                            </div>

                        </div>

                        <div class="col-md-7">

                            <h5>Chat, have a video call and solve all your questions.</h5>

                           <!--  <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p> -->

                        </div>

                    </div>

                    <div class="process-line-r"></div>

                </div>

            </div>



        </div>


        <!-- ============ -->

    </div>

</section>

   

<!-- ================================

    END HIW AREA

================================= -->





<div class="section-block"></div>

<!-- ================================

       START TESTIMONIAL AREA

================================= -->

<section class="testimonial-area padding-top-100px padding-bottom-100px text-center">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="section-heading">

                    <h2 class="sec__title">Testimonial</h2>

                    <p class="sec__desc">

                        What users are saying about us

                    </p>

                </div><!-- end section-heading -->

            </div><!-- end col-lg-12 -->

        </div><!-- end row -->

        <div class="row mt-5">

            <div class="col-lg-12">



                <div class="testimonial-carousel carousel-item-wrap owl-loaded owl-carousel">



                    <div class="testimonial-item">

                        <div class="testi-content mb-3">

                            <img src="<?php echo base_url();?>assets/images/Jenny.jpg" class="testi__img" alt="testimonial image">

                            <h4 class="tesi__title mt-4">Jenny</h4>

                            <span class="testi__meta">Talent Management & Acquisition</span>

                        </div>

                        <div class="testi-comment">

                            <p class="testi__desc">

                                 Talk2 an expert is literally one of the best things 
                I have recently discovered. I use the platform on 
                a daily basis to advice people how to hire the right person.


                            </p>

                        </div>

                    </div><!-- end testimonial-item -->

                    <div class="testimonial-item">

                        <div class="testi-content mb-3">

                            <img src="<?php echo base_url();?>assets/images/Laura.jpg" class="testi__img" alt="testimonial image">

                            <h4 class="tesi__title mt-4">Laura</h4>

                            <span class="testi__meta">Accountant</span>

                        </div>

                        <div class="testi-comment">

                            <p class="testi__desc">

                                I never thought my profession could be so useful for
                                people. I like the fact that I can help clients with 
                                their accounting working from home!


                            </p>

                        </div>

                    </div><!-- end testimonial-item -->

                    <div class="testimonial-item">

                        <div class="testi-content mb-3">

                            <img src="<?php echo base_url();?>assets/images/Manu.jpg" class="testi__img" alt="testimonial image">

                            <h4 class="tesi__title mt-4">Manu</h4>

                            <span class="testi__meta">Dramatic Art</span>

                        </div>

                        <div class="testi-comment">

                            <p class="testi__desc">

                                Great discovery! I have got already a few clients working
on their dramatic art techniques and overcoming a lot of
social insecurities.


                            </p>

                        </div>

                    </div><!-- end testimonial-item -->


                </div><!-- end testimonial-carousel -->

            </div><!-- end col-lg-12 -->

        </div><!-- end row -->

    </div><!-- end container-fluid -->

</section><!-- end testimonial-area -->

<!-- ================================

       START TESTIMONIAL AREA

================================= -->





<section class="card-area section-bg padding-top-100px padding-bottom-110px">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="section-heading text-center">

                    <h2 class="sec__title">Top listed profile</h2>

                    <p class="sec__desc">

                       Have a look to some of the highest ranked profiles

                    </p>

                </div><!-- end section-heading -->

            </div><!-- end col-lg-12 -->

        </div><!-- end row -->

        <div class="row mt-5">

            <div class="col-lg-12">

                <div class="margin-top-35px">

                        <div class="row" >
                            <?php
                             foreach($get_vend as $vendor_row){

                          $vendor_id = $vendor_row['vendor_id'];
                          $get_profile = $this->Model->getData('vendor', array('vendor_id'=>$vendor_id));

                          $profile_img = $get_profile->profile;
                          
                          //for rating avg
                          $count_review_user = $this->Model->CountWhereRecord('review_vend',array('vendor_id'=>$vendor_id));

                           // sum total review
                          $rate_sum = "SELECT SUM(rate) FROM review_vend WHERE vendor_id='$vendor_id'";
                          $rate_sum  = $this->Model->getSqlData($rate_sum);
                          $totl_rate = $rate_sum[0]['SUM(rate)'];
                          //print_r($totl_rate);

                          @$avg = ($totl_rate)/($count_review_user);
                          $avg = round($avg);
                          $t_avg = 5 - $avg ;

                             ?>
                            <div class="col-lg-4 responsive-column">

                                <div class="job-card">

                                    <div class="job-card-content">

                                        <div class="card-head d-flex align-items-center">

                                            <div class="company-avatar mr-3">

                                                <a href="<?php echo base_url();?>home/expert_details/<?php echo $vendor_row['vendor_id'];?>">

                                                <img src="<?php echo base_url();?>uploads/images/<?php echo $profile_img;?>" class="img-fluid">

                                                </a>

                                            </div>

                                            <div class="company-title-box">

                                                <h4 class="card-title mb-1"><a href="<?php echo base_url();?>home/expert_details/<?php echo $vendor_row['vendor_id'];?>"><?php echo ucwords($vendor_row['fullname']);?></a> </h4>

                                                <p class="card-sub"><i class="la la-map-marker"></i> <?php echo $vendor_row['map_address'];?></p>
                                    <?php if($avg > 0 ){ ?>
                                    <span class="rating-rating">
                                    <span class="rating-count"><?php echo $avg; ?>.0</span>
                                    <?php for($s=0; $s < $avg; $s++ ){ ?>
                                    <span class="la la-star"></span>
                                    <?php } ?>
                                    
                                    <?php for($r=0; $r < $t_avg; $r++ ){ ?>
                                    <span class="la la-star text-secondary"></span>
                                    <?php } ?>

                                    </span> 
                                    <?php } ?>
                                    

                                            </div>

                                        </div>

                                        <div class="mt-4 margin-bottom-30px">

                                            <h4 class="card-title mb-2"><a href="<?php echo base_url();?>home/expert_details/<?php echo $vendor_row['vendor_id'];?>"><?php echo ucwords($vendor_row['category']);?></a> </h4>

                                            <p class="card-sub fix-hide"><?php echo substr($vendor_row['about'],0,180);?></p>

                                        </div>

                                        <div class="section-block-2"></div>

                                        <div class="card-foot d-flex align-items-center justify-content-between mt-4">

                                            <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Fixed Price</span>

                                            <!-- <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span> -->

                                            <span class="color-text-2 font-size-13">$<?php echo $vendor_row['price'];?></span>

                                        </div>

                                    </div><!-- end job-card-content -->

                                </div><!-- end job-card -->

                            </div><!-- end col-lg-4 -->
                          <?php }?>

                          <?php if(empty($get_vend)){?>

                            <center class="mx-auto"><img class="img-fluid" width="40%" src="<?php echo base_url();?>assets/images/nodata-found.png"></center>

                           <?php } ?>

                            

                        </div>

                    </div><!-- end tab-pane -->

                  

                </div><!-- end tab-content -->

            </div><!-- end col-lg-12 -->

        </div><!-- end row -->
       <?php if(!empty($get_vend)){?>
        <div class="row">

            <div class="col-lg-12">

                <div class="btn-box text-center mt-4">

                    <a href="<?php echo base_url();?>home/expert" class="theme-btn">View all Expert</a>

                </div>

            </div><!-- end col-lg-12 -->

        </div><!-- end row -->
        <?php } ?>

    </div><!-- end container -->

</section>

</div>



<!-- ================================

    START FUN-FACT AREA

================================= -->

<section class="funfact-area section-bg-2 padding-top-100px padding-bottom-60px margin-bottom-100px text-center" id="num">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="section-heading">

                    <h2 class="sec__title text-white">Numbers talk</h2>

                    <p class="sec__desc color-white-rgba">

                        We grow thanks to our professionals and clients

                    </p>

                </div><!-- end section-heading -->

            </div><!-- end col-lg-12 -->

        </div><!-- end row -->

        <div class="row mt-5">

            <div class="col-lg-3 responsive-column">

                <div class="counter-item">

                    <div class="icon-element">

                        <i class="la la-briefcase"></i>

                    </div>

                    <div class="counter-number">

                        <span data-purecounter-duration="2.5" data-purecounter-end="19.000" class="counter purecounter">0</span>

                    </div><!-- end counter-number -->

                    <div class="counter-content mt-3">

                        <p class="counter__title">Consultants</p>

                    </div><!-- end counter-content -->

                </div><!-- end counter-item -->

            </div><!-- end col-lg-3 -->

            <div class="col-lg-3 responsive-column">

                <div class="counter-item">

                    <div class="icon-element">

                        <i class="la la-users"></i>

                    </div>

                    <div class="counter-number">

                        <span data-purecounter-duration="2.5" data-purecounter-end="120.000" class="counter purecounter">0</span>

                    </div><!-- end counter-number -->

                    <div class="counter-content mt-3">

                        <p class="counter__title">Clients</p>

                    </div><!-- end counter-content -->

                </div><!-- end counter-item -->

            </div><!-- end col-lg-3 -->

            <div class="col-lg-3 responsive-column">

                <div class="counter-item">

                    <div class="icon-element">

                        <i class="la la-black-tie"></i>

                    </div>

                    <div class="counter-number">

                        <span data-purecounter-duration="2.5" data-purecounter-end="4.800" class="counter purecounter">0</span>

                    </div><!-- end counter-number -->

                    <div class="counter-content mt-3">

                        <p class="counter__title">Companies</p>

                    </div><!-- end counter-content -->

                </div><!-- end counter-item -->

            </div><!-- end col-lg-3 -->

            <div class="col-lg-3 responsive-column">

                <div class="counter-item">

                    <div class="icon-element">

                        <i class="la la-file-text-o"></i>

                    </div>

                    <div class="counter-number">

                        <span data-purecounter-duration="2.5" data-purecounter-end="2.000 " class="counter purecounter">0</span>

                    </div><!-- end counter-number -->

                    <div class="counter-content mt-3">

                        <p class="counter__title">Services</p>

                    </div><!-- end counter-content -->

                </div><!-- end counter-item -->

            </div><!-- end col-lg-3 -->

        </div><!-- end row -->

    </div><!-- end container -->

</section><!-- end funfact-area -->

<!-- ================================

    END FUN-FACT AREA

================================= -->


<div class="section-block"></div>



<!-- ================================

       START FOOTER AREA

================================= -->

   

      <?php include(APPPATH.'views/home/include/footer.php'); ?>





<!-- end footer-area -->

<!-- ================================

       START FOOTER AREA

================================= -->



<!-- start back-to-top -->

<div id="back-to-top">

    <i class="la la-angle-up" title="Go top"></i>

</div>

<!-- end back-to-top -->

<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

<script type="text/javascript">

  AOS.init();

</script>



<!-- Template JS Files -->

   

    <?php include(APPPATH.'views/home/include/js.php'); ?>



</body>

</html>