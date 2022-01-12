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
    
    <?php include(APPPATH.'views/home/include/dashboard-sidebar.php'); ?>
    
       <!-- ================================
    
          SIDBAR AREA
================================= -->
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                        <div class="section-heading">
                            <h2 class="sec__title line-height-45">Welcome, <?php echo $this->session->userdata('vend_fname'); ?>!</h2>
                          
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="active__list-item">Dashboard</li>
                        </ul>
                    </div> <!-- end breadcrumb-content -->

                </div><!-- end col-lg-12 -->

            </div><!-- end row -->
            <?php 
                $do_alert = $alert->alert;
                if($do_alert =='0'){
                ?>
                <div class="row">
                <div class="col-lg-12">
                     <!-- alert dashboard -->
                           <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Please Update Your Profile <a href="<?php echo base_url();?>vendor/profile">click here</a></strong> 
                            </div>
                          <!-- alert dashboard -->
                </div>
                </div>
                <?php } ?>
            <div class="row mt-5">
                <div class="col-lg-3 column-lg-half responsive-column">
                    <div class="overview-item">
                        <div class="icon-box bg-1 mb-0 d-flex align-items-center">
                            <div class="icon-element flex-shrink-0">
                                <i class="la la-shopping-cart"></i>
                            </div><!-- end icon-element-->
                            <div class="info-content">
                                <?php
                                $v_id = $this->session->userdata('vendor_id');
                                $buy = "SELECT COUNT(vendor_id) FROM transaction WHERE vendor_id='$v_id' AND status='1'";
                                $buy = $this->Model->getSqlData($buy);
                                $buy = $buy[0]['COUNT(vendor_id)'];
                                //print_r($totl_rate);
                                ?>
                                <span class="info__count"><?php echo $buy;?></span>
                                <h4 class="info__title font-size-16 mt-2">Buy Services</h4>
                            </div><!-- end info-content -->
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 column-lg-half responsive-column">
                    <div class="overview-item">
                        <div class="icon-box bg-2 mb-0 d-flex align-items-center">
                            <div class="icon-element flex-shrink-0">
                                <i class="la la-money"></i>
                            </div><!-- end icon-element-->
                            <div class="info-content">
                                 <?php
                                $price = "SELECT SUM(price) FROM transaction WHERE vendor_id='$v_id' AND status='1' AND project='Close'";
                                $price = $this->Model->getSqlData($price);
                                $price = $price[0]['SUM(price)'];
                                ?>

                                <span class="info__count">$<?php if(empty($price)){ echo "0";} else{ echo $price;}?></span>
                                <h4 class="info__title font-size-16 mt-2">Earn</h4>
                            </div><!-- end info-content -->
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 column-lg-half responsive-column">
                    <div class="overview-item">
                        <div class="icon-box bg-3 mb-0 d-flex align-items-center">
                            <div class="icon-element flex-shrink-0">
                                <i class="la la-eye"></i>
                            </div><!-- end icon-element-->
                            <div class="info-content">
                                <?php
                                $view = "SELECT COUNT(view) FROM profile_views WHERE vid='$v_id'";
                                $view = $this->Model->getSqlData($view);
                                $view = $view[0]['COUNT(view)'];
                                //print_r($totl_rate);
                                ?>
                                <span class="info__count"><?php echo $view;?></span>
                                <h4 class="info__title font-size-16 mt-2">Profile View</h4>
                            </div><!-- end info-content -->
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 column-lg-half responsive-column">
                    <div class="overview-item">
                        <div class="icon-box bg-4 mb-0 d-flex align-items-center">
                            <div class="icon-element flex-shrink-0">
                                <i class="la la-bell-o"></i>
                            </div><!-- end icon-element-->
                            <div class="info-content">
                                <?php
                                
                                $notify = "SELECT COUNT(vid) FROM notification WHERE vid='$v_id' AND status='unseen'";
                                $notify = $this->Model->getSqlData($notify);
                                $notify = $notify[0]['COUNT(vid)'];
                                //print_r($totl_rate);
                                ?>
                                <span class="info__count"><?php echo $notify;?></span>
                                <h4 class="info__title font-size-16 mt-2">Notification</h4>
                            </div><!-- end info-content -->
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
           
           
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
<script src="<?php echo base_url();?>assets/js/chart.js"></script>
<script src="<?php echo base_url();?>assets/js/line-chart.js"></script>
<script src="<?php echo base_url();?>assets/js/doughutchart.js"></script>
</body>
</html>