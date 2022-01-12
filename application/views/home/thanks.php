

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

            <div class="col-lg-8 mx-auto">

                <div class="invoice-content">

                    <div class="invoice-item">

                        <div class="row align-items-center">

                            <div class="col-lg-12 responsive-column text-center">

                                <div class="invoice-logo text-center mb-4 pb-4">

                                    <img src="<?php echo base_url();?>assets/images/talk2-logo.png" alt="logo">
                  
                                </div>

                                  <img src="<?php echo base_url();?>assets/images/done.gif" alt="logo">
                                  
                                  

                                 

                                <h2 class="text-info mt-3">Thanks</h2> 
                                <h3>
                                Your order has been successfully completed</h3>

                            </div><!-- end col-lg-6 -->

                             <div class="col-lg-12">

                      <div class="btn-box mt-4 text-center">

                   

                    <a href="<?php echo base_url();?>" class="theme-btn ml-2">

                        <span class="la la-reply"></span> Back to Home

                    </a>

                </div><!-- end btn-box -->

            </div><!-- end col-lg-12 -->


                          
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