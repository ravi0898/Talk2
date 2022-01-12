<!DOCTYPE html>

<html>

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main CSS-->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_assets/css/main.css">

    <!-- Font-icon css-->

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Admin</title>

  </head>

  <body class="bg-set">

   

    <section class="login-content">

      

      <div class="login-box">

            <?php if($this->session->flashdata('reg_succ')){ ?>

                                    <div class="alert alert-success">

                                    <a href="#" class="close" data-dismiss="alert">&times;</a>

                                    <strong><?php echo $this->session->flashdata('reg_succ'); ?></strong> 

                                    </div>

                                    

                                    <?php

                                    $this->session->unset_userdata ( 'reg_succ' );

                                    } ?>

                                    

                                     <?php if($this->session->flashdata('login_err')){ ?>

                                        <div class="alert alert-danger">

                                        <a href="#" class="close" data-dismiss="alert">&times;</a>

                                        <strong><?php echo $this->session->flashdata('login_err'); ?></strong> 

                                        </div>

                                        

                                        <?php

                                        $this->session->unset_userdata ( 'login_err' );

                                        } ?>

        <form class="login-form" action="<?php echo base_url('admin/post_login');?>" method="post" accept-charset="utf-8">

          <h3 class="login-head">
              <img src="<?php echo base_url('admin_assets/images/talk2-logo.png');?>" width="100px" height="auto">
          </h3>

          <div class="form-group">

            <label class="control-label">Email</label>

            <input class="form-control" type="text" placeholder="Email" autofocus name="email" value="<?php echo set_value('email'); ?>">

             <small class="text-danger"><?php echo form_error('email'); ?></small>

          

          </div>

          <div class="form-group">

            <label class="control-label">PASSWORD</label>

            <input class="form-control" type="password" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>">

             <small class="text-danger"><?php echo form_error('password'); ?></small>

           

          </div>


          <div class="form-group btn-container">

            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>

          </div>

        </form>

       

      </div>

    </section>

    <!-- Essential javascripts for application to work-->

   

  </body>

</html>