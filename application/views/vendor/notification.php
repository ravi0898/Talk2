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
                            <h2 class="sec__title">Notification</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="#">Home</a></li>
                            <li>Notification</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="billing-form-item">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title pb-0">Notification</h3>
                            <div class="title-shape margin-top-10px"></div>
                        </div><!-- billing-title-wrap -->
                        <div class="billing-content pb-0">
                            <div class="manage-job-wrap">
                                <div class="table-responsive pb-4">
                                    <table class="table" id="notification">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Date</th>
                                           <!--  <th class="text-center">Action</th> -->
                                        </tr>
                                        </thead>
                                        <tbody>
                                    <?php foreach ($notifies as $notify_list) { 
                                        // $uid = $notify_list['uid'];

                                        //$udata = $this->Model->getData('user', array('user_id'=>$uid));
                                       
                                      
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1"><a href="#" class="color-text-2"><?php echo $notify_list['title'];?></a></h2>
                                                    <!-- <p class="mb-2">
                                                        <span><i class="la la-map-marker font-size-16"></i> ind</span>
                                                    </p> -->
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td><?php echo $notify_list['date'];?></td>
                                            <!-- <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="#" ><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td> -->
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
                              Copyright © 2021- 2025 Talk2 An Expert all rights reserved | Designed &amp; Developed By
                        <a href="https://www.developerbazaar.com"><span style="color:red;"> Developer </span><span style="color:limegreen;"> Bazaar</span> <span style="color:red;"> Technologies</span></a>
                        </p>
                     
                    </div><!-- end copy-right -->
                </div>
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

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#notification').DataTable();
    } );
</script>
</body>
</html>