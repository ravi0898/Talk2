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
          <h1><i class="fa fa-user-plus"></i> Categories</h1>
          <!--<p>A free and open source Bootstrap 4 admin template</p>-->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-user-plus"></i></li>
          <li class="breadcrumb-item"><a href="#">Categories</a></li>
        </ul>
      </div>
      
      
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="cat_list">
                  <thead>
                    <tr>
                      <th>Category Name</th>
                      <th>Image</th>
                      <th>Action</th>
                     
                    </tr>
                  </thead>
                 
                  <tbody>
                 <?php foreach ($cat as $c) { ?>     
                    <tr>  
                          <td><?php echo $c->category_name; ?></td>
                          
                          <?php if($c->cat_img != '') { ?>
                           <td><img style="height:80px; width:150px" src="<?php echo base_url('uploads/images/'. $c->cat_img);?>" /></td>
                           <?php }
                           else{
                            echo '<td></td>';
                           }
                          
                           ?>
                          
                          <td>
                            <a class="btn btn-danger btn-sm" onclick="javascript:deleteConfirm('<?php echo base_url().'admin/delete/'.$c->id;?>');" deleteConfirm href="#">Delete</a>
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
    $('#cat_list').DataTable();
    } );
</script>
  </body>
</html>