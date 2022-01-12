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

<body id="checkout-page">

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

                            <h2 class="sec__title mb-0">Checkout</h2>

                        </div><!-- end section-heading -->

                        <ul class="list-items d-flex align-items-center">

                            <li class="active__list-item"><a href="index.html">Home</a></li>

                            <li class="active__list-item">Pages</li>

                            <li>Checkout</li>

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

    START BOOKING AREA

================================= -->

<section class="booking-area padding-top-100px padding-bottom-80px">

    <div class="container">

        <div class="row">

            <div class="col-lg-7">

                <div class="billing-form-item">

                    <div class="billing-title-wrap">

                        <h3 class="widget-title pb-0">Services Select</h3>

                        <div class="title-shape margin-top-10px"></div>

                    </div><!-- billing-title-wrap -->

                    <div class="billing-content">

                        <div class="booking-summary">

                            <ul class="list-items">

                            <li class="d-flex align-items-center justify-content-between font-weight-medium">
                                
                                <?php
                                 $vendor_id = $vname->vendor_id;
                                 $getvendor_img = $this->Model->getData('vendor', array('vendor_id'=>$vendor_id));
                                ?>

                                <img class="sm-img setimgss radius--rounded" src="<?php echo base_url(); ?>uploads/images/<?php echo $getvendor_img->profile;?>">
                                    <?php echo $vname->fullname;?>
                                    <b>$<?php echo $vname->price;?>.00</b></li>
                            <li><div class="section-block-2 mt-4 mb-4"></div></li>


                    <li class="d-flex align-items-center justify-content-between font-weight-medium">
                       <img class="sm-img" src=""> Total 
                      <b class="color-text">$<?php echo $vname->price;?>.00</b></li>

                            </ul>

                        </div><!-- end booking-summary -->

                    </div><!-- end billing-content -->

                </div><!-- end billing-form-item -->

            </div><!-- end col-lg-4 -->

            <div class="col-lg-5">

                <div class="billing-form-item">

                   <div class="payment-option">

                        <div class="billing-title-wrap pt-0">

                            <h3 class="widget-title pb-0 pt-3">Payment Method</h3>

                            <div class="title-shape margin-top-10px"></div>

                        </div><!-- billing-title-wrap -->

                        <!--<div class="payment-method-wrap p-4">-->

                        <!--    <div class="radio-option">-->

                        <!--        <label for="radio-3" class="radio-trigger">-->

                        <!--            <input id="radio-3" type="radio" name="radio">-->

                        <!--            <span class="checkmark"></span>-->

                        <!--            <span>Direct Bank Transfer</span>-->

                        <!--            <p class="payment-content payment-active mt-2 font-size-14 font-weight-regular color-text-3">-->

                        <!--                Make your payment directly into our bank account.-->

                        <!--                Please use your Order ID as the payment reference.-->

                        <!--                Your order won’t be shipped until the funds have cleared in our account.-->

                        <!--            </p>-->

                        <!--        </label>-->

                        <!--    </div>-->

                        <!--    <div class="radio-option">-->

                        <!--        <label for="radio-4" class="radio-trigger d-block">-->

                        <!--            <input type="radio" id="radio-4" name="radio">-->

                        <!--            <span class="checkmark"></span>-->

                        <!--            <span>Credit / Debit Card</span>-->

                        <!--            <span class="card-icon float-right"><img src="<?php echo base_url(); ?>assets/images/payment-img.png" alt=""></span>-->

                        <!--            <div class="payment-content payment-active mt-3">-->

                        <!--                <div class="contact-form-action">-->

                        <!--                    <div class="row">-->

                        <!--                        <div class="col-lg-6">-->

                        <!--                            <div class="input-box">-->

                        <!--                                <label class="label-text">Name on Card</label>-->

                        <!--                                <div class="form-group">-->

                        <!--                                    <span class="la la-pencil form-icon"></span>-->

                        <!--                                    <input class="form-control" placeholder="Card Name" type="text" name="text" required="">-->

                        <!--                                </div>-->

                        <!--                            </div>-->

                        <!--                        </div>-->

                        <!--                        <div class="col-lg-6">-->

                        <!--                            <div class="input-box">-->

                        <!--                                <label class="label-text">Card Number</label>-->

                        <!--                                <div class="form-group">-->

                        <!--                                    <span class="la la-pencil form-icon"></span>-->

                        <!--                                    <input class="form-control" name="text" placeholder="1234  5678  9876  5432" required="" type="text">-->

                        <!--                                </div>-->

                        <!--                            </div>-->

                        <!--                        </div>-->

                        <!--                        <div class="col-lg-4">-->

                        <!--                            <div class="input-box">-->

                        <!--                                <label class="label-text">Expiry Month</label>-->

                        <!--                                <div class="form-group">-->

                        <!--                                    <span class="la la-pencil form-icon"></span>-->

                        <!--                                    <input class="form-control" placeholder="MM" required="" name="text" type="text">-->

                        <!--                                </div>-->

                        <!--                            </div>-->

                        <!--                        </div>-->

                        <!--                        <div class="col-lg-4">-->

                        <!--                            <div class="input-box">-->

                        <!--                                <label class="label-text">Expiry Year</label>-->

                        <!--                                <div class="form-group">-->

                        <!--                                    <span class="la la-pencil form-icon"></span>-->

                        <!--                                    <input class="form-control" placeholder="YY" required="" name="text" type="text">-->

                        <!--                                </div>-->

                        <!--                            </div>-->

                        <!--                        </div>-->

                        <!--                        <div class="col-lg-4">-->

                        <!--                            <div class="input-box">-->

                        <!--                                <label class="label-text">CVV</label>-->

                        <!--                                <div class="form-group">-->

                        <!--                                    <span class="la la-pencil form-icon"></span>-->

                        <!--                                    <input class="form-control" placeholder="CVV" required="" name="text" type="text">-->

                        <!--                                </div>-->

                        <!--                            </div>-->

                        <!--                        </div>-->

                        <!--                    </div>-->

                        <!--                </div>-->

                        <!--            </div>-->

                        <!--        </label>-->

                        <!--    </div>-->

                        <!--    <div class="radio-option">-->

                        <!--        <label for="radio-5" class="radio-trigger paypal-option d-block">-->

                        <!--            <input type="radio" id="radio-5" name="radio">-->

                        <!--            <span class="checkmark"></span>-->

                        <!--            <span>Paypal</span>-->

                        <!--            <span class="card-icon float-right"><img src="<?php echo base_url(); ?>assets/images/paypal.png" alt=""></span>-->

                        <!--            <div class="payment-content payment-active mt-3">-->

                        <!--                <div class="contact-form-action">-->

                        <!--                    <form>-->

                        <!--                        <div class="input-box">-->

                        <!--                            <label class="label-text">Email Address</label>-->

                        <!--                            <div class="form-group">-->

                        <!--                                <span class="la la-pencil form-icon"></span>-->

                        <!--                                <input class="form-control" placeholder="Email Address" type="text" name="text" required="">-->

                        <!--                            </div>-->

                        <!--                        </div>-->

                        <!--                    </form>-->

                        <!--                </div>-->

                        <!--                <p class="color-text-3 font-size-14 font-weight-regular">-->

                        <!--                    You will be redirected to PayPal to complete payment.-->

                        <!--                </p>-->

                        <!--            </div>-->

                        <!--        </label>-->

                        <!--    </div>-->

                        <!--    <div class="section-block-2 mt-4"></div>-->

                        <!--    <div class="btn-box mt-4">-->

                        <!--        <div class="custom-checkbox">-->

                        <!--            <input type="checkbox" id="chb1">-->

                        <!--            <label for="chb1">I agree to the <a href="#" class="color-text">Terms &amp; Conditions</a> and <a href="#" class="color-text">Privacy Policy</a></label>-->

                        <!--        </div>-->

                        <!--        <a href="invoice.php" class="theme-btn border-0 mt-3">Confirm Order</a>-->

                        <!--    </div>-->

                        <!--</div>-->
                        <!--log for payment-->
                       
                        
                        
                            
                            
                           <div class="payment-method-wrap p-4">
                               <form method="POST" action="<?php echo base_url('paypal/create_payment_with_paypal');?>">
                                    <div class="radio-option">

                                        <label for="radio-5" class="radio-trigger paypal-option d-block">
    
                                        <input type="radio" id="radio-5" name="radio" value="yes">
    
                                        <span class="checkmark"></span>
                                       
                                        <span>Paypal</span>
    
                                        <span class="card-icon float-right"><img src="<?php echo base_url();?>assets/images/paypal.png" alt=""></span>
    
                                       
    
                                        </label>
                                        <small class="text-danger"><?php echo form_error('radio');?></small>

                                    </div>
                            
                                    <div class="section-block-2 mt-4"></div>
                            
                                   
                                   <div class="custom-checkbox">
    
                                        <input type="checkbox" id="chb1" name="terms" value="1">
    
                                        <label for="chb1">I agree to the <a href="#" class="color-text">Terms &amp; Conditions</a> and <a href="#" class="color-text">Privacy Policy</a></label>
                                        <small class="text-danger"><?php echo form_error('terms');?></small>
                                    </div>
                                 
                                  <input class="" type="hidden" name="vendor_id" value="<?php echo $vendor_id;?>" />
                                 
                                  <input class="" type="hidden" name="price" value="<?php echo $vname->price;?>" />
                                  <button type="submit" name="submit" class="theme-btn border-0" type="submit">Confirm Order</button>
                               </form>
                           </div>
                        
                        <!--end log for payment-->

                    </div>

                </div><!-- end billing-form-item -->

            </div><!-- end col-lg-8 -->

            

        </div><!-- end row -->

    </div><!-- end container -->

</section><!-- end booking-area-->

<!-- ================================

    END BOOKING AREA

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