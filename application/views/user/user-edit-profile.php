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

     <?php include(APPPATH.'views/home/include/user-dashboard-sidebar.php'); ?>

    <div class="dashboard-content-wrap">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12">

                    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">

                        <div class="section-heading">

                            <h2 class="sec__title">Edit Profile</h2>

                        </div><!-- end section-heading -->

                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="javascript:void(0)">Home</a></li>
                            <li>Edit Profile</li>
                        </ul>

                    </div><!-- end breadcrumb-content -->

                </div><!-- end col-lg-12 -->

            </div><!-- end row -->

            <div class="row mt-5">

                <div class="col-lg-12">

                    <div class="user-profile-action-wrap mb-5">
                        <form method="POST" action="<?php echo base_url('user/upd_profile');?>" enctype="multipart/form-data">
                            <div class="user-profile-action mb-4 d-flex align-items-center">
                                <div class="user-pro-img">
                                <img src="<?php if(($user_img->profile) !='0'){ echo base_url();?>uploads/user_images/<?php echo $user_img->profile; }else{ echo base_url();?>assets/images/cover-img.jpg <?php }?>" alt="user-image" class="img-fluid radius-round border">
                                </div>
                                <div class="user-upload-img-wrap">
                                <div class="file-upload-wrap file-upload-wrap-2">
                                <input type="file" name="profile" class="multi file-upload-input with-preview" required="">
                                <span class="file-upload-text"><i class="la la-photo mr-2"></i>Upload Photo</span>
                                <!-- <p>Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg & .png</p> -->
                                </div>
                                <button type="submit" name="submit" class="theme-btn mt-3">Upload</button>
                                </div>
                            </div><!-- end user-profile-action -->
                        </form>
                    </div><!-- end user-profile-action-wrap -->

                </div><!-- end col-lg-12 -->

              

             
              

                <div class="col-lg-12">

                    <div class="user-form-action">

                        <div class="billing-form-item">

                            <div class="billing-title-wrap">

                                <h3 class="widget-title pb-0">Contact Information</h3>

                                <div class="title-shape margin-top-10px"></div>

                            </div><!-- billing-title-wrap -->

                            <div class="billing-content">

                                <div class="contact-form-action">
                                    
                                    
                                     <?php if($this->session->flashdata('profile')){ ?>
                                        <div class="alert alert-success">
                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                        <strong><?php echo $this->session->flashdata('profile'); ?></strong> 
                                        </div>
                                        <?php
                                        $this->session->unset_userdata ( 'profile' );
                                        } ?>

                                    <form method="POST" action="<?php echo base_url('user/update_profile');?>">

                                        <div class="row">
                                              <div class="col-lg-4">

                                                <div class="input-box">

                                                    <label class="label-text">Name</label>

                                                    <div class="form-group">

                                                        <span class="la la-external-link form-icon"></span>
                                                          <?php $f1= $get_skill->fname;
                                                                 $f2= $get_skill->lname;
                                                                 $f3 = $f1." ".$f2;
                                                          ?>
                                                        <input class="form-control" type="text" name="fname" value="<?php if(($get_skill->fname)=='0'){ echo set_value('fname');}else{ echo $f3; } ?>" placeholder="Name">
                                                        <small class="text-danger"><?php echo form_error('fname'); ?></small>

                                                    </div>

                                                </div>

                                            </div><!-- end col-lg-4 -->

                                            <div class="col-lg-4">

                                                <div class="input-box">

                                                    <label class="label-text">Phone number</label>

                                                    <div class="form-group">

                                                        <span class="la la-phone form-icon"></span>

                                                       <input class="form-control" type="text" name="mobile" value="<?php if(($get_skill->mobile)=='0'){ echo set_value('mobile');}else{ echo $get_skill->mobile; } ?>" placeholder="+1 246-345-0695">
                                                        <small class="text-danger"><?php echo form_error('mobile'); ?></small>

                                                    </div>

                                                </div>

                                            </div><!-- end col-lg-4 -->

                                            <div class="col-lg-4">

                                                <div class="input-box">

                                                    <label class="label-text">Email Address</label>

                                                    <div class="form-group">

                                                        <span class="la la-envelope form-icon"></span>

                                                        <input class="form-control" type="text" name="email" value="<?php if(($get_skill->email)=='0'){ echo set_value('email');}else{ echo $get_skill->email; } ?>" placeholder="example@gmail.com">
                                                         <small class="text-danger"><?php echo form_error('email'); ?></small>

                                                    </div>

                                                </div>

                                            </div><!-- end col-lg-4 -->

                                          

                                            <div class="col-lg-4">

                                                <div class="input-box">

                                                    <label class="label-text">Country</label>

                                                    <div class="form-group user-chosen-select-container">

                                                        <select class="user-chosen-select" name="country">
                            
                                                        <?php if(($get_skill->country)=='0'){ ?>
                                                        
                                                        <option value="<?php echo set_value('country');?>"><?php echo set_value('country');?></option>
                                                        
                                                        <?php }else if(!empty($get_skill)){ ?>
                                                        <option value="<?php echo $get_skill->country;?>"><?php echo $get_skill->country;?></option>
                                                       
                                                        <?php }else{  ?>
                                                        
                                                        <option value="0">Select</option>
                                                        
                                                        <?php } ?>
                            
                                                        <?php foreach ($country_list as $countries) { ?>
                                                       
                                                        <option value="<?php echo $countries['name'];?>"><?php echo $countries['name'];?></option>
                                                       
                                                        <?php } ?>
                                                    </select>
                        
                       
                                                   <small class="text-danger"><?php echo form_error('country'); ?></small>

                                                    </div>

                                                </div>

                                            </div><!-- end col-lg-4 -->

                                            <div class="col-lg-4">

                                                <div class="input-box">

                                                    <label class="label-text">City</label>

                                                    <div class="form-group">
                                                         <span class="la la-map-marker form-icon"></span>
                                                         <input class="form-control" type="text" name="city" value="<?php if(($get_skill->city)=='0'){ echo set_value('city');}else{ echo $get_skill->city ;} ?>" placeholder="City">
                                                          <small class="text-danger"><?php echo form_error('city'); ?></small>
                                                    </div>

                                                </div>

                                            </div><!-- end col-lg-4 -->

                                            <div class="col-lg-4">

                                                <div class="input-box">

                                                    <label class="label-text">Complete Address</label>

                                                    <div class="form-group">

                                                        <span class="la la-map-marker form-icon"></span>

                                                        <input class="form-control" type="text" name="address" value="<?php if(($get_skill->address)=='0'){ echo set_value('address');}else{ echo $get_skill->address; } ?>" placeholder="Complete Address">
                                                         <small class="text-danger"><?php echo form_error('address'); ?></small>

                                                    </div>

                                                </div>

                                            </div><!-- end col-lg-4 -->

                                            <!--<div class="col-lg-4">-->

                                            <!--    <div class="input-box">-->

                                            <!--        <label class="label-text">Password</label>-->

                                            <!--        <div class="form-group">-->

                                            <!--            <span class="la la-key form-icon"></span>-->

                                            <!--            <input class="form-control" type="password" name="text" placeholder="Password" value="**********">-->

                                            <!--        </div>-->

                                            <!--    </div>-->

                                            <!--</div>-->
                                            <!-- end col-lg-4 -->

                                           

                                          <!-- end col-lg-12 -->

                                            <!-- <div class="col-lg-12">

                                                <div class="input-box">

                                                    <label class="label-text ">Map location</label>

                                                    <div class="form-group mb-0">

                                                        <div class="gmaps">

                                                            <div id="map" class="radius-round"></div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div> -->

                                        </div><!-- end row -->
                                        
                                         <div class="col-lg-12">

                                                <div class="btn-box">
                            
                                                   <button class="theme-btn border-0" type="submit" name="submit">Update Changes</button>
                            
                                                </div>
                        
                                        </div>

                                    </form>

                                </div><!-- end contact-form-action -->

                            </div><!-- end billing-content -->

                        </div>

                    </div><!-- end user-form-action -->

                </div><!-- end col-lg-12 -->

                <!-- <div class="col-lg-12">

                    <div class="user-form-action">

                        <div class="billing-form-item">

                            <div class="billing-title-wrap">

                                <h3 class="widget-title pb-0">More Information</h3>

                                <div class="title-shape margin-top-10px"></div>

                            </div>

                            <div class="billing-content pb-3">

                                <div class="contact-form-action">

                                    <form method="post">

                                        <div class="row">

                                            <div class="col-lg-4">

                                                <div class="input-box">

                                                    <label class="label-text">Founded in</label>

                                                    <div class="form-group">

                                                        <div class="form-group">

                                                            <span class="la la-building-o form-icon"></span>

                                                            <input class="form-control" type="text" name="text" placeholder="e.g 1998">

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4">

                                                <div class="input-box">

                                                    <label class="label-text">Business Type</label>

                                                    <div class="form-group">

                                                        <div class="form-group user-chosen-select-container">

                                                            <select class="user-chosen-select">

                                                                <option value>Select business type</option>

                                                                <option>Private Limited</option>

                                                                <option>Artitecture</option>

                                                                <option>Limited Company</option>

                                                                <option>C Corporations</option>

                                                                <option>Partnerships</option>

                                                                <option>S Corporations</option>

                                                                <option>Sole Proprietorships</option>

                                                                <option>Software Company</option>

                                                                <option>Marketing</option>

                                                            </select>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4">

                                                <div class="input-box">

                                                    <label class="label-text">Employees</label>

                                                    <div class="form-group">

                                                        <div class="form-group">

                                                            <span class="la la-users form-icon"></span>

                                                            <input class="form-control" type="text" name="text" placeholder="e.g 10,200">

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4">

                                                <div class="input-box">

                                                    <label class="label-text">Viewed</label>

                                                    <div class="form-group">

                                                        <div class="form-group">

                                                            <span class="la la-eye form-icon"></span>

                                                            <input class="form-control" type="text" name="text" placeholder="e.g 1320">

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4">

                                                <div class="input-box">

                                                    <label class="label-text">Posted Jobs</label>

                                                    <div class="form-group">

                                                        <div class="form-group">

                                                            <span class="la la-file-text form-icon"></span>

                                                            <input class="form-control" type="text" name="text" placeholder="e.g 12">

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4">

                                                <div class="input-box">

                                                    <label class="label-text">Followers</label>

                                                    <div class="form-group">

                                                        <div class="form-group">

                                                            <span class="la la-users form-icon"></span>

                                                            <input class="form-control" type="text" name="text" placeholder="e.g 1.2K">

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div> -->

               

            </div><!-- end row -->

            <div class="row">

                <div class="col-lg-12">

                    <div class="copy-right margin-top-30px padding-top-20px padding-bottom-20px">

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

</body>



</html>