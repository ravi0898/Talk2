<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Talk2 an expert</title>
    <!-- Favicon -->
        <?php include(APPPATH.'views/home/include/css.php'); ?>
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
    START INVOICE AREA
================================= -->
<section class="invoice-area section-bg-invoive padding-top-60px padding-bottom-50px">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="invoice-content">
                    <div class="invoice-item">
                        <div class="row align-items-center">
                            <div class="col-lg-6 responsive-column">
                                <div class="invoice-logo">
                                    <img src="<?php echo base_url();?>assets/images/talk2-logo.png" alt="logo">
                                  
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 responsive-column">
                                <?php if(is_array($get_trans)) ?>
                                
                                <?php
                                  foreach($get_trans as $trans){?>
                                    
                                    <ul class="list-items text-right">
    
                                        <li><strong class="color-text-2">Order:</strong>#<?php echo $trans['order_id'];?> </li>
    
                                        <li><strong class="color-text-2">Date:</strong><?php echo $trans['date'];?></li>
    
                                        <!--<li>Due 7 days from date of issue</li>-->
    
                                    </ul>
                               <?php } ?>
                            </div><!-- end col-lg-6 -->
                        </div><!-- end row -->
                    </div><!-- end invoice-item -->
                    <div class="invoice-item">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="invoice-title padding-top-40px padding-bottom-40px">
                                    <h2 class="widget-title">Invoice</h2>
                                </div>
                            </div><!-- end col-lg-12 -->
                            <div class="col-lg-6 responsive-column">
                                <div class="invoice-info">
                                    <strong class="widget-title d-block pb-2">Author:Talk2 Expert</strong>
                                    <ul class="list-items">
                                        <li>Zobstar Ltd.</li>
                                        <li>36 Edgewater Street, Melbourne, AU</li>
                                        <li>Australia, CF44 6ZL, AU</li>
                                    </ul>
                                </div><!-- end invoice-info -->
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 responsive-column">
                                <div class="invoice-info">
                                   
                                       <?php if(is_array($user_detail)) ?>
                                
                                <?php
                                  foreach($user_detail as $u_detail){?>
                                     <strong class="widget-title d-block pb-2">To: <?php echo $u_detail['fname'];?> <?php echo $u_detail['lname'];?></strong>
                                    <ul class="list-items">
    
                                        <li><?php echo $u_detail['address'];?></li>
    
                                    </ul>
                               <?php } ?>
                                </div><!-- end invoice-info -->
                            </div><!-- end col-lg-6 -->
                        </div><!-- end row -->
                    </div><!-- end invoice-item -->
                    <div class="invoice-item padding-top-20px">
                        <div class="row">
                            <!--<div class="col-lg-12">-->
                            <!--    <div class="invoice-table table-responsive">-->
                            <!--        <table class="table-bordered w-100">-->
                            <!--            <thead>-->
                            <!--                <tr>-->
                            <!--                    <th>Description</th>-->
                                                
                            <!--                    <th>Price</th>-->
                                                
                                               
                            <!--                </tr>-->
                            <!--            </thead>-->
                            <!--            <tbody>-->
                            <!--                <tr>-->
                            <!--                    <td>Starter Plan</td>-->
                                               
                            <!--                    <td>$19.00</td>-->
                                                
                                               
                            <!--                </tr>-->
                            <!--                <tr>-->
                            <!--                    <td>Standard Plan</td>-->
                            <!--                    <td>$49.00</td>-->
                                               
                                               
                                               
                            <!--                </tr>-->
                            <!--            </tbody>-->
                            <!--        </table>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="col-lg-4 ml-auto">
                                <div class="invoice-total mt-3">
                                    <?php if(is_array($get_trans)) ?>
                                
                                <?php
                                  foreach($get_trans as $trans){?>
                                    <ul class="list-items">
                                        <li class="d-flex align-items-center justify-content-between"><strong class="color-text-2 font-weight-semi-bold">Subtotal:</strong> <b class="font-weight-semi-bold">$<?php echo $trans['price'];?> </b></li>
                                        <!--<li class="d-flex align-items-center justify-content-between"><strong class="color-text-2 font-weight-semi-bold">Discount:</strong> <b class="font-weight-semi-bold">-2%</b></li>-->
                                        <!--<li class="mt-3 mb-3"><div class="section-block"></div></li>-->
                                        <li class="d-flex align-items-center justify-content-between"><strong class="color-text-2 font-weight-semi-bold">Total Amount:</strong> <b class="font-weight-semi-bold">$<?php echo $trans['price'];?></b></li>
                                        <li><strong class="font-weight-semi-bold">Payment Method:</strong> Paid via Paypal</li>
                                    </ul>
                                     <?php } ?>
                                </div><!-- end invoice-total -->
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-12 mt-4">
                                <div class="btn-box text-center">
                                  <a href="<?php echo base_url();?>home/thankyou">  <span class="theme-btn w-100">Thank You For Your Order!</span>
                                  </a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end invoice-item -->
                </div><!-- end invoice-content -->
            </div><!-- end col-lg-10 -->
        </div><!-- end row -->
 
    </div><!-- end container -->
</section><!-- end invoice-area -->
<!-- ================================
    END INVOICE AREA
================================= -->
<!-- Template JS Files -->
 <?php include(APPPATH.'views/home/include/js.php'); ?>
</body>
</html>