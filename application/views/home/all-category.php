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
<body id="expert-page">
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
                            <h2 class="sec__title mb-0">Expert</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="javascript:void(0)">Home</a></li>
                            <li>Expert</li>
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
    START CAT AREA
================================= -->
<!-- ================================
    START CARD AREA
================================= -->
<section class="card-area padding-top-100px padding-bottom-80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="generic-header margin-bottom-30px">
                    <p class="showing__text text-left">Short by</p>
                    <div class="sort-option user-chosen-select-container mr-3">

                        <select class="user-chosen-select" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                            <option value >Select</option>
                            <option value="<?php echo base_url();?>home/expert_newest">Newest</option>
                            <option value="<?php echo base_url();?>home/expert_old">Oldest</option>
                            <option value="<?php echo base_url();?>home/expert_random">Random</option>
                        </select>
                    </div><!-- end sort-option -->
                   
                </div><!-- end generic-header -->
            </div><!-- col-lg-12 -->
            <div class="col-lg-3">
                <div class="sidebar mt-0">
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Keywords</h3>
                        <div class="contact-form-action mb-4">
                            <form method="post" action="<?php echo base_url();?>home/keywords">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="vname" placeholder="Search Freelancer via name" required="">
                                    <button type="submit" name="submit" class="la la-search form-icon"></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-option mb-4">
                            <h3 class="widget-title">Category</h3>
                            <div class="user-chosen-select-container">
                            <select class="user-chosen-select" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                               
                                <option value >Select a category</option>
                                <?php foreach ($getall_cat as $catvalue) {
                                 ?>
                                <option value="<?php echo base_url();?>home/filterbycat/<?php echo $catvalue['category_name']?>"><?php echo $catvalue['category_name']?></option>
                                <?php } ?>
                            </select>
                            </div>
                        </div><!-- end sidebar-option -->
                        <div class="sidebar-option">
                            <h3 class="widget-title">Location</h3>
                            <div class="user-chosen-select-container">
                            <select class="user-chosen-select" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                            <option value>Select</option>
                            <?php foreach ($country_list as $country_val) {
                            ?>
                            <option value="<?php echo base_url();?>home/filterbycountry/<?php echo $country_val['name']?>"><?php echo $country_val['name']?></option>
                            <?php } ?>

                            </select>
                            </div>
                        </div><!-- end sidebar-option -->
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Skills</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <ul> 
                                    <form method="post" action="<?php echo base_url();?>home/filterbyskill">
                                     
                                     <?php foreach ($getall_skill as $skill_val) { ?>
                                    <li>
                                        <div class="custom-checkbox">
                                            
                                            <input type="checkbox" name="skill[]" id="chb<?php echo $skill_val['id'];?>" value="<?php echo $skill_val['skill_name'];?>">
                                            <label for="chb<?php echo $skill_val['id'];?>" class="font-weight-medium"><?php echo $skill_val['skill_name'];?></label>
                                            
                                            
                                        </div>
                                    </li>
                                    <?php } ?>

                                    <button type="submit" class="btn btn-primary">Search</button>
                                    </form>
                                    
                                </ul>
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end sidebar-widget -->
                  
                </div><!-- end sidebar -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-9">
              <div class="employer-post-wrap">
                  <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
                          <?php 
                          if(!empty($get_vend)){
                          foreach($get_vend as $vendor){
                          $vendor_id = $vendor['vendor_id'];
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
                          <div class="job-content">
                              <div class="job-card job-card-layout">
                                  <div class="job-card-details d-flex align-items-center justify-content-between">
                                      <div class="card-head d-flex align-items-center">
                                          <div class="company-avatar mr-3">
                                              <a href="javascript:void(0)" class="d-block">
                                                 <?php if($profile_img =='0'){ ?>
                                                 <img src="<?php echo base_url();?>assets/images/avt2.png" alt="" class="radius--rounded">
                                                 <?php }else{ ?>

                                                <img src="<?php echo base_url();?>uploads/images/<?php echo $profile_img;?>" alt="" class="radius--rounded">

                                                 <?php }?>
                                              </a>
                                          </div>
                                          <div class="company-title-box">
                                              <h4 class="card-title mb-1"><a href="javascript:void(0)"><?php echo ucwords($vendor['fullname']);?> </a> </h4>
                                              <p class="card-sub">
                                                  
                                                  <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i><?php echo $vendor['map_address'];?></span> </p>

                                <p class="card-sub">
                                <span class="mr-2"><i class="la la-money color-text-2 mr-1"></i>$<?php echo $vendor['price'];?>.00 Fixed Price</span> </p>

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

                                <p><?php echo substr($vendor['about'],0,110)."...";?></p>
                                          </div>
                                      </div>
                                      <div class="btn-box">
                                          <a href="<?php echo base_url();?>home/expert_details/<?php echo $vendor_id;?>" class="theme-btn">Details</a>
                                      </div>
                                  </div>

                              </div><!-- end job-card -->
                            
                             
                          
                           
                             
                          </div><!-- end job-content -->
                            <?php } }if(empty($get_vend)){?>

                            <center><img class="img-fluid" width="50%" src="<?php echo base_url();?>assets/images/nodata-found.png"></center>
                           <?php } ?>

                      </div><!-- end tab-pane -->
                     
              </div>
              <!-- <div class="row">
            <div class="col-lg-12">
                <div class="page-navigation-wrap margin-top-40px">
                    <div class="page-navigation mx-auto">
                        <a href="#" class="page-go page-prev">
                            <i class="la la-arrow-left"></i>
                        </a>
                        <ul class="page-navigation-nav">
                            <li><a href="#" class="page-go-link">1</a></li>
                            <li class="active"><a href="#" class="page-go-link">2</a></li>
                            <li><a href="#" class="page-go-link">3</a></li>
                            <li><a href="#" class="page-go-link">4</a></li>
                            <li><a href="#" class="page-go-link">5</a></li>
                        </ul>
                        <a href="#" class="page-go page-next">
                            <i class="la la-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- end row -->
            </div><!-- end col-lg-9 -->
        </div><!-- end row -->
        
    </div><!-- end container -->
</section><!-- end card-area -->
<!-- ================================
    END CARD AREA
================================= -->
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