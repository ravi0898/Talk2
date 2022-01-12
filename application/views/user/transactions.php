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

 <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                        <div class="section-heading">
                            <h2 class="sec__title">Transactions</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="active__list-item">Transaction</li>
                        
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="billing-form-item">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title pb-0">My Transactions</h3>
                            <div class="title-shape margin-top-10px"></div>
                        </div><!-- billing-title-wrap -->
                        <div class="billing-content pb-0">
                            <div class="manage-job-wrap">
                                <div class="table-responsive pb-4">
                                   <table class="table" id="trans">
                                        <thead>
                                        <tr>
                                            <th>Package ID</th>
                                            <th>Fullname</th>
                                            <th>Payment Date</th>
                                            <th>Payment Method</th>
                                            <th>Amount</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($trans as $tr_list) { 
                                        $vid = $tr_list['vendor_id'];

                                        $udata = $this->Model->getData('vendor', array('vendor_id'=>$vid));
                                       
                                      
                                        ?>
                                            <tr>
                                                <td><?php echo $tr_list['order_id'];?></td>
                                                <td>
                                                    <div class="manage-candidate-wrap">
                                                        <h2 class="widget-title pb-0 font-size-15"><?php echo $udata->fname;?> <?php echo $udata->lname;?></h2>
                                                    </div><!-- end manage-candidate-wrap -->
                                                </td>
                                                <td><?php echo $tr_list['date'];?></td>
                                                <td>Paypal</td>
                                                <td class="font-weight-semi-bold">
                                                    $<?php echo $tr_list['price'];?>.00
                                                </td>
                                                <td class="text-center"><span class="badge badge-success p-1">Paid</span></td>
                                            </tr>
                                          <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end billing-content -->
                    </div><!-- end billing-form-item -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->


            <div class="row">
                <div class="col-lg-12">
                    <div class="copy-right margin-top-40px padding-top-20px padding-bottom-20px">
                        <p class="copy__desc">
                              Copyright © 2021- 2025 Talk2 An Expert all rights reserved| Designed &amp; Developed By
                        <a href="https://www.developerbazaar.com"><span style="color:red;"> Developer </span><span style="color:limegreen;"> Bazaar</span> <span style="color:red;"> Technologies</span></a>
                        </p>
                     
                    </div><!-- end copy-right -->
                </div><!-- end col-lg-12 -->
            </div>

<!-- ================================

    START DASHBOARD AREA

================================= -->

  <?php include(APPPATH.'views/home/include/user-dashboard-sidebar.php'); ?>

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
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#trans').DataTable();
    } );
</script>
</body>



</html>