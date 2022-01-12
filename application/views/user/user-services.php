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
                            <h2 class="sec__title line-height-45">Services</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="active__list-item">Services</li>
                        
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
             <div class="col-lg-12">
                <div class="table-responsive">
                                    <table class="table" id="servicelist">
                                        <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Service Provided</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                    <th class="text-center">More</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                              <?php 
                              //print_r($get_service);
                              $i=1; 
                              
                              foreach ($get_service as $serv){  
                              
                              $vendor_id = $serv['vendor_id'];
                              $user_id   = $serv['user_id'];
                              $order_id  = $serv['order_id'];

                              $getudata = $this->Model->getData('vendor', array('vendor_id'=>$vendor_id));
                              
                              
                              ?>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1 font-size-15"><a href="#" class="color-text-2"><?php echo $i;?></a></h2>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td class="font-weight-medium"><?php echo $getudata->fname;?></td>
                                             <td class="">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                            <ul class="">
                              <li class="d-inline-block text-success"> 
                               <?php if($serv['project']=='Running'){ ?>
                                <span class="badge badge-success"><?php echo $serv['project'];?></span>
                               <?php }else{ ?>
                                <span class="badge badge-danger"><?php echo $serv['project'];?></span>

                               <?php } ?>
                               </li>
                              <!-- <li class="d-inline-block"><i class="la la-circle text-success"></i>in Active</li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="font-weight-medium text-center">
                                     <?php if($serv['project']=='Running'){ ?>
                                    <a href="<?php echo base_url();?>user/create_chat/<?php echo $getudata->vendor_id;?>/<?php echo $order_id; ?>" class="btn btn-info">Talk2 an Expert</a>
                                     <?php }else{ ?>

                                    <a href="#" class="btn btn-danger">Talk2 an Expert</a>

                                     <?php } ?>

                                   </td>

                                    <td class="font-weight-medium text-center">

                                    <div class="dropdown">
                                    <button class="notification-btn dropdown-toggle" type="button" id="notificationDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-ellipsis-h"></i>

                                    </button>

                                    <div class="dropdown-menu" aria-labelledby="notificationDropdownMenu">
                                    <div class="mess-dropdown">

                                    <div class="">

                                    <div class="mess__item">
                                    <li><a href="<?php echo base_url();?>user/review/<?php echo $order_id;?>"> Close Project </a></li>  
                                    </div><!-- end mess__item -->

                                    <div class="mess__item">
                                    <li><a href="#"> Feedback  </a></li>  
                                    </div><!-- end mess__item -->

                                    </div><!-- end mess-dropdown -->
                                    </div><!-- end dropdown-menu -->
                                    </div><!-- end dropdown -->

                                    </td>
                                           
                                        </tr>
                                    <?php $i++; } ?>
                                        
                                     
                                        </tbody>
                                    </table>
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
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#servicelist').DataTable();
    } );
</script>
</body>
</html>
