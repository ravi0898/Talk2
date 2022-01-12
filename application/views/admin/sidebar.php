  <header class="app-header"><a class="app-header__logo" href="<?php echo base_url();?>admin/dashboard"> <img src="<?php echo base_url('admin_assets/images/talk2-logo.png');?>" width="100px" height="auto"></a>

      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>

      <!-- Navbar Right Menu-->

      <ul class="app-nav">

        <!-- <li class="app-search">

          <input class="app-search__input" type="search" placeholder="Search">

          <button class="app-search__button"><i class="fa fa-search"></i></button>

        </li> -->

        <!--Notification Menu-->

        <!-- <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a> -->

          <ul class="app-notification dropdown-menu dropdown-menu-right">

            <li class="app-notification__title">You have 4 new notifications.</li>

            <div class="app-notification__content">

              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>

                  <div>

                    <p class="app-notification__message">Lisa sent you a mail</p>

                    <p class="app-notification__meta">2 min ago</p>

                  </div></a></li>

              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>

                  <div>

                    <p class="app-notification__message">Mail server not working</p>

                    <p class="app-notification__meta">5 min ago</p>

                  </div></a></li>

              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>

                  <div>

                    <p class="app-notification__message">Transaction complete</p>

                    <p class="app-notification__meta">2 days ago</p>

                  </div></a></li>

              <div class="app-notification__content">

                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>

                    <div>

                      <p class="app-notification__message">Lisa sent you a mail</p>

                      <p class="app-notification__meta">2 min ago</p>

                    </div></a></li>

                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>

                    <div>

                      <p class="app-notification__message">Mail server not working</p>

                      <p class="app-notification__meta">5 min ago</p>

                    </div></a></li>

                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>

                    <div>

                      <p class="app-notification__message">Transaction complete</p>

                      <p class="app-notification__meta">2 days ago</p>

                    </div></a></li>

              </div>

            </div>

            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>

          </ul>

        <!-- </li> -->

        <!-- User Menu-->

       <!--  <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>

          <ul class="dropdown-menu settings-menu dropdown-menu-right">

            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>

            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>

            <li><a class="dropdown-item" href="<?php echo base_url('admin/logout');?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>

          </ul>

        </li> -->

      </ul>

    </header>

    <!-- Sidebar menu-->

    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

<aside class="app-sidebar">

      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?php echo base_url();?>uploads/user_images/user.png" alt="User Image" width="60px" height="60px">

        <div>

          <p class="app-sidebar__user-name">Admin</p>

          <!-- <p class="app-sidebar__user-designation">Frontend Developer</p> -->

        </div>

      </div>

      <ul class="app-menu">

        <li><a class="app-menu__item" href="<?php echo base_url('admin/dashboard');?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

 

        <!--<li><a class="app-menu__item" href="<?php echo base_url('admin/categories');?>"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">Categories</span></a></li>-->

      

         <li class="treeview "><a class="app-menu__item" href="<?php echo base_url('admin/categories');?>" data-toggle="treeview"><i class="app-menu__icon fa fa-user-plus"></i><span class="app-menu__label">Categories</span><i class="treeview-indicator fa fa-angle-right"></i></a>

          <ul class="treeview-menu">

            <li><a class="treeview-item" href="<?php echo base_url('admin/categories');?>"><i class="icon fa fa-circle-o"></i> Add Categories</a></li>

            <li><a class="treeview-item" href="<?php echo base_url('admin/categories_list');?>"><i class="icon fa fa-circle-o"></i> Categories List</a></li>

          </ul>

        </li>

        

         <li><a class="app-menu__item" href="<?php echo base_url('admin/vendor_profile');?>"><i class="app-menu__icon fa fa-user-circle"></i><span class="app-menu__label">Vendor Profile</span></a></li>
         
          <li><a class="app-menu__item" href="<?php echo base_url('admin/users_list');?>"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Users</span></a></li>

          <li><a class="app-menu__item" href="<?php echo base_url('admin/skill');?>"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Skill</span></a></li>

           <li><a class="app-menu__item" href="<?php echo base_url('admin/language');?>"><i class="app-menu__icon fa fa-language"></i><span class="app-menu__label">Language</span></a></li>

            <li><a class="app-menu__item" href="<?php echo base_url('admin/transaction');?>"><i class="app-menu__icon fa fa-history"></i><span class="app-menu__label">Transaction</span></a></li>

             <li><a class="app-menu__item" href="<?php echo base_url('admin/notification');?>"><i class="app-menu__icon fa fa-bell"></i><span class="app-menu__label">Notification</span></a></li>
             
             <li><a class="app-menu__item" href="<?php echo base_url('admin/chat_list');?>"><i class="app-menu__icon fa fa-comment"></i><span class="app-menu__label">Chat</span></a></li>

             <li><a class="app-menu__item" href="<?php echo base_url('admin/contact');?>"><i class="app-menu__icon fa fa-address-book"></i><span class="app-menu__label">Contact Inquiry</span></a></li>

            <li><a class="app-menu__item" href="<?php echo base_url('admin/logout');?>"><i class="app-menu__icon fa fa-power-off"></i><span class="app-menu__label">Logout</span></a></li>

      

      </ul>

    </aside>