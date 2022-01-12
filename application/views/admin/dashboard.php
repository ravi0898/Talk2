<!DOCTYPE html>

<html lang="en">

  <head>

    <meta name="description" content="">

    <!-- Twitter meta-->

   

    <title>Talk2 an Expert</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main CSS-->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_assets/css/main.css">

    <!-- Font-icon css-->

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body class="app sidebar-mini">

    

   <?php include_once "sidebar.php"; ?>

    <main class="app-content">

      <div class="app-title">

        <div>

          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>


        </div>

        <ul class="app-breadcrumb breadcrumb">

          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>

          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>

        </ul>

      </div>
      
       <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Users</h4>
              <?php
                   $total_users = "SELECT COUNT(user_id) FROM user WHERE status='1'";
                   $all_users = $this->Model->getSqlData($total_users);
                   $all_users = $all_users[0]['COUNT(user_id)'];
              ?>
              <p><b><?php echo $all_users;?> </b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-users"></i>
            <div class="info">
              <h4>Vendors</h4>
               <?php
                   $total_vendors = "SELECT COUNT(vendor_id) FROM vendor WHERE status='1'";
                   $all_vendors = $this->Model->getSqlData($total_vendors);
                   $all_vendors = $all_vendors[0]['COUNT(vendor_id)'];
              ?>
              <p><b><?php echo $all_vendors;?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-money"></i>
            <div class="info">
              <h4>Transaction</h4>
               <?php
                   $price =  "SELECT SUM(price) FROM transaction WHERE status='1'";
                   $price = $this->Model->getSqlData($price);
                   $price = $price[0]['SUM(price)'];
              ?>
              <p><b><?php echo '$'. $price.' '.'USD';?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-shopping-cart"></i>
            <div class="info">
              <h4>Order</h4>
               <?php
                   $total_transactions = "SELECT COUNT(order_id) FROM transaction WHERE status='1'";
                   $all_transaction = $this->Model->getSqlData($total_transactions);
                   $all_transaction = $all_transaction[0]['COUNT(order_id)'];
              ?>
              <p><b><?php echo $all_transaction;?></b></p>
            </div>
          </div>
        </div>
      </div>
     

     

    </main>

    

    <!-- Essential javascripts for application to work-->

     <?php include_once "script.php"; ?>

  </body>

</html>