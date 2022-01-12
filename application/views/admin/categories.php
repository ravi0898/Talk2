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

    

    <!--style for grid images-->

  </head>

  <body class="app sidebar-mini">

    <!-- Navbar-->

  

    <!-- Sidebar menu-->

   

   <?php include_once "sidebar.php"; ?>

    <main class="app-content">

      <div class="app-title">

        <div>

          <h1><i class="fa fa-user-plus"></i> Categories</h1>

          <!--<p>A free and open source Bootstrap 4 admin template</p>-->

        </div>

        <ul class="app-breadcrumb breadcrumb">

          <li class="breadcrumb-item"><i class="fa fa-user-plus"></i></li>

          <li class="breadcrumb-item"><a href="#">Categories</a></li>

        </ul>

      </div>

      

      <div class="col-lg-8 mx-auto">
        <div class="tile">
            <div class="tile-body">


           <h4>Add Categories</h4>

                 <?php if($this->session->flashdata('reg_succ')){ ?>

                                    <div class="alert alert-success">

                                    <a href="#" class="close" data-dismiss="alert">&times;</a>

                                    <strong><?php echo $this->session->flashdata('reg_succ'); ?></strong> 

                                    </div>

                                    

                                    <?php

                                    $this->session->unset_userdata ( 'reg_succ' );

                                    } ?>

                                    

                                    

           <form class="categories-form" action="<?php echo base_url('admin/post_categories');?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

                <div class="form-group">

                    <label class="control-label">Category</label>

                   <input class="form-control" type="text" placeholder="Categories" name="category_name" value="<?php echo set_value('category_name'); ?>">

                   <small class="text-danger"><?php echo form_error('category_name'); ?></small>

                </div>

                

                <div class="form-group">

                    <label class="control-label">Images</label>

                <input class="" type="file" name="cat_img" required/>

                

                </div>

                

                <div class="form-group btn-container" style="width: 16%;">

                  <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Add</button>

                </div>

           </form>
      </div>
    </div>
       </div>

       

     

                                   

                        

                              

    </main>

    <!-- Essential javascripts for application to work-->

     <?php include_once "script.php"; ?>

  </body>

</html>