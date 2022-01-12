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

                    <li><a href="<?php echo base_url('vendor/dashboard');?>"><i class="la la-dashboard icon-element"></i> Dashboard</a></li>

                    <li><a href="<?php echo base_url('vendor/service');?>"><i class="la la-shopping-cart icon-element"></i> 
                    Services </a></li>



                    <li><a href="<?php echo base_url('vendor/chat');?>"><i class="la la-envelope icon-element"></i> Chat system </a></li>

                    <li><a href="<?php echo base_url('vendor/transaction');?>"><i class="la la-line-chart icon-element"></i>Transactions</a></li>
                     <?php
                    $v_id = $this->session->userdata('vendor_id');
                    $notify = "SELECT COUNT(vid) FROM notification WHERE vid='$v_id' AND status='unseen'";
                    $notify = $this->Model->getSqlData($notify);
                    $notify = $notify[0]['COUNT(vid)'];
                    //print_r($totl_rate);
                    ?>

                    <li><a href="<?php echo base_url('vendor/notification');?>"><i class="la la-bell-o icon-element"></i>Notification(<?php echo $notify; ?>)</a></li>  

                    <li><a href="<?php echo base_url('vendor/profile');?>"><i class="la la-user-plus icon-element"></i> Profile setting </a>
                    </li>

                    <li><a href="<?php echo base_url('vendor/logout');?>"><i class="la la-power-off icon-element"></i> Logout</a></li>

                </ul>

            </div><!-- end side-menu-wrap -->

        </div>

    </div><!-- end dashboard-sidebar -->