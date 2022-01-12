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
          <h1><i class="fa fa-user-circle"></i> Vendor Profile</h1>
          <!--<p>A free and open source Bootstrap 4 admin template</p>-->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-user-circle"></i></li>
          <li class="breadcrumb-item"><a href="#">Vendor Profile</a></li>
        </ul>
      </div>
      
      
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="vendor_profile">
                  <thead>
                    <tr>
                      <th>Company</th>
                      <th>Full Name</th>
                      <th>Category</th>
                      <th>Email</th>
                      <th>Website</th>
                      <th>Address</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                      <?php foreach($vendor as $v){?>
                     <tr>
                          <td><?php echo $v['company'];?></td>
                          <td><?php echo $v['fullname'];?></td>
                          <td><?php echo $v['category'];?></td>
                          <td><?php echo $v['email'];?></td>
                          <td><?php echo $v['website'];?></td>
                          <td><?php echo $v['address'];?></td>
                        
                          
                     <td><i data-id="<?php echo $v['vendor_id'];?>" class="status_checks btn
  <?php echo ($v['status'])?
  'btn-success': 'btn-danger'?>"><?php echo ($v['status'])? 'Active' : 'Inactive'?>
 </i></td>
                            
                            
                           
                         
                          <td> 
                              <a href=" <?php echo base_url().'admin/single_vendor_detail/'.$v['vendor_id'];?>" class="btn btn-primary a-btn-slide-text">
                              <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                              <span><strong>View</strong></span>    
                          </td>
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
    
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript">
    $(document).on('click','.status_checks',function(){
          var status = ($(this).hasClass("btn-success")) ? '0' : '1';
          var msg = (status=='0')? 'Deactivate' : 'Activate';
          if(confirm("Are you sure to "+ msg)){
            var vendor_id = $(this).data('id'); 
            //alert(vendor_id);
             //alert(status);
            url = "<?php echo base_url(); ?>admin/status_update";
            $.ajax({
              type:"POST",
              url: url,
               data: {'status': status, 'vendor_id': vendor_id},
              success: function(data)
              {   
                location.reload();
              }
            });
          }      
        });
    </script>
    
      <?php include_once "script.php"; ?>
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#vendor_profile').DataTable();
    } );
</script>
    
    
  </body>
</html>