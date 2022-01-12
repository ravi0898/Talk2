<header class="header-area">

    <div class="header-menu-wrapper">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="menu-full-width">

                        <div class="logo">

                            <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/talk2-logo.png" alt="logo"></a>

                        </div><!-- end logo -->

                        <div class="main-menu-content">

                            <nav>

                                <ul>

                                    

                <li>

                    <a href="<?php echo base_url();?>">Home </a>

                </li>

                <li>

                    <a href="<?php echo base_url();?>home/about">About us</a>

                </li>

                <li>

                    <a href="<?php echo base_url();?>home/expert">Expert</a>

                </li>

               

                <li>

                    <!-- <a href="<?php echo base_url();?>home/blog">Blog </a> -->
                    <a href="https://sharukh.dbtechserver.online/talk2expert/blog/">
                    Blog</a>

                </li>



                <li>

                     <a href="<?php echo base_url();?>home/support">support</a>

                </li>

                <li>
                    <?php
                    $vendor_id = $this->session->userdata('vendor_id');
                    $user_id   = $this->session->userdata('user_id');
                    
                    if(!empty($user_id)){ ?>
                    
                     <a href="<?php echo base_url();?>user/dashboard">Dashboard</a>
                    
                    <?php } else{ ?>
                    
                     <a href="<?php echo base_url();?>user">Login</a>
                    
                    <?php } ?>
                </li>

               

               

                </ul>

                            </nav>

                        </div><!-- end main-menu-content -->

                        <div class="logo-right-content">

                            <ul class="author-access-list">
<!-- 
                                <li>

                                    <a href="login.php">Login</a>

                                    <span class="or-text">&nbsp;&nbsp;&nbsp;or&nbsp;&nbsp;&nbsp;</span>

                                    <a href="sign-up.php">Sign up</a>

                                </li>-->
                    <li>
                    <?php if(!empty($vendor_id)){ ?>
                    
                     
                     <a href="<?php echo base_url();?>vendor/dashboard" class="theme-btn">Dashboard</a>

                         <?php }else{ ?>
                         <a href="<?php echo base_url();?>vendor" class="theme-btn"><span class="la la-plus"></span>Add Services</a>
                        <?php }?>

                        </li>

                            </ul>

                            <div class="side-menu-open">

                                <span class="menu__bar"></span>

                                <span class="menu__bar"></span>

                                <span class="menu__bar"></span>

                            </div><!-- end side-menu-open -->

                        </div><!-- end logo-right-content -->

                    </div><!-- end menu-full-width -->

                </div><!-- end col-lg-12 -->

            </div><!-- end row -->

        </div><!-- end container-fluid -->

    </div><!-- end header-menu-wrapper -->

    <div class="side-nav-container">

        <div class="humburger-menu">

            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->

        </div><!-- end humburger-menu -->

        <div class="side-menu-wrap">

            <ul class="side-menu-ul">

                 <li>

                    <a href="<?php echo base_url();?>">Home </a>

                </li>

                <li>

                    <a href="<?php echo base_url();?>home/about">About us</a>

                </li>

                <li>

                    <a href="<?php echo base_url();?>home/expert">Expert</a>

                </li>

               

                <li>

                    <a href="https://sharukh.dbtechserver.online/talk2expert/blog/">Blog </a>

                </li>

                

                <li>

                     <a href="<?php echo base_url();?>home/support">support</a>

                </li>


                <li>
                    <?php
                    $vendor_id = $this->session->userdata('vendor_id');
                    $user_id   = $this->session->userdata('user_id');
                    
                    if(!empty($user_id)){ ?>
                    
                     <a href="<?php echo base_url();?>user/dashboard">Dashboard</a>
                    
                    <?php } else{ ?>
                    
                     <a href="<?php echo base_url();?>user">Login</a>
                    
                    <?php } ?>
                </li>



            </ul>

            <div class="side-nav-button">

               <!--  <a href="login.popover-header">Login</a> -->

              <!--   <span class="or-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or&nbsp;&nbsp;&nbsp;</span>

                <a href="sign-up.php">Sign up</a>
 -->
                 <?php if(!empty($vendor_id)){ ?>
                <a href="<?php echo base_url();?>vendor/dashboard" class="theme-btn">Dashboard</a>
                 <?php }else{ ?>
                  <a href="<?php echo base_url();?>vendor" class="theme-btn"><span class="la la-plus"></span>Add Services</a>
                  <?php }?>

            </div><!-- end side-nav-button -->

        </div><!-- end side-menu-wrap -->

    </div><!-- end side-nav-container -->

</header>