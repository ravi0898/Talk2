<div class="dashboard-sidebar">

        <div class="dashboard-nav-trigger">

           <div class="dashboard-nav-trigger-btn">

               <i class="la la-bars"></i> Dashboard Navigation

           </div>

        </div>

        <div class="dashboard-nav-container">

            <div class="humburger-menu">

                <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->

            </div><!-- end humburger-menu -->

            <div class="side-menu-wrap">

                <ul class="side-menu-ul">

                    <li class="page-active"><a href="<?php echo base_url();?>user/dashboard"><i class="la la-dashboard icon-element"></i> Dashboard</a></li>

                    <li><a href="<?php echo base_url();?>user/user_service"><i class="la la-shopping-cart icon-element"></i> 
                    Bought Services </a></li>



                   <!--  <li><a href="user-dashboard-message.php"><i class="la la-envelope icon-element"></i> Chat system </a></li> -->

                    <li><a href="user-transactions.php"><i class="la la-line-chart icon-element"></i>Transactions</a></li>

                    <li><a href="user-dashboard-notification.php"><i class="la la-bell-o icon-element"></i>Notification</a></li>  

                    <li><a href="<?php echo base_url();?>user/user_profile"><i class="la la-user-plus icon-element"></i> Account setting </a>
                    </li>

                    <li><a href="<?php echo base_url('user/logout');?>"><i class="la la-power-off icon-element"></i> Logout</a></li>

                </ul>

            </div><!-- end side-menu-wrap -->

        </div>

    </div><!-- end dashboard-sidebar -->