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
    <!-- Navbar-->
   <?php include_once "sidebar.php"; ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-users"></i> Users</h1>
          <!--<p>A free and open source Bootstrap 4 admin template</p>-->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-users"></i></li>
          <li class="breadcrumb-item"><a href="#">Users</a></li>
        </ul>
      </div>
      
      
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="users_list">
                  <thead>
                    <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Last Activity</th>
                    <th>Profile</th>
                    <th>Date</th>
                    <th>Profile Status</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                 <?php foreach ($users as $user) { ?>     
                    <tr>  
                          <td><?php echo $user['fname']; ?></td>
                          <td><?php echo $user['lname']; ?></td>
                          <td><?php echo $user['email']; ?></td>
                          
                          <?php if($user['mobile']){?>
                          <td><?php echo $user['mobile']; ?></td>
                          <?php }else{?>
                          <td><?php echo 'N/A'; ?></td> 
                          <?php }?>
                          
                          <?php if($user['country']){?>
                          <td><?php echo $user['country']; ?></td>
                          <?php }else{?>
                          <td><?php echo 'N/A'; ?></td> 
                           <?php }?>
                          
                          <?php if($user['city']){?>
                          <td><?php echo $user['city']; ?></td>
                          <?php }else{?>
                          <td><?php echo 'N/A'; ?></td> 
                          <?php }?>
                          
                          <?php if($user['address']){?>
                          <td><?php echo $user['address']; ?></td>
                          <?php }else{?>
                          <td><?php echo 'N/A'; ?></td> 
                          <?php }?>
                          
                          
                          <td><?php echo $user['last_activity']; ?></td>
                          
                           <?php if($user['profile']){?>
                           <td><img style="height:80px; width:80px" src="<?php echo base_url('uploads/user_images/'. $user['profile']);?>" /></td>
                           <?php }else{?>
                           <td><?php echo 'N/A'; ?></td> 
                           <?php }?>
                           
                           <td><?php echo $user['date']; ?></td>
                           
                           
                        <?php if($user['profile_status'] == 1){?>
                        <td><?php echo 'Your Profile is updated !';?></td> 
                        <?php }else{?>
                        <td><?php echo 'Please update your profile';?></td> 
                        <?php }?>
                         
                    </tr>
                   <?php } ?>
                   
                  </tbody>
                 
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
        
                                   
                        
                              
    </main>
    <!-- Essential javascripts for application to work-->

    
    <script type="text/javascript" src="<?php echo base_url(); ?>admin_assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>admin_assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    
    
    <script type="text/javascript"> 
    function deleteConfirm(url)
    {
    if(confirm('Do you want to Delete this record ?'))
    {
    window.location.href=url;
    }
    }
    </script>
    
     <?php include_once "script.php"; ?>
     <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#users_list').DataTable();
    } );
</script>
  </body>
</html>