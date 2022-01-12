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
          <h1><i class="fa fa-language"></i>Languages</h1>
          <!--<p>A free and open source Bootstrap 4 admin template</p>-->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-language"></i></li>
          <li class="breadcrumb-item"><a href="#">Languages</a></li>
        </ul>
      </div>
      
      <div class="col-lg-6">
           <h4>Add Languages</h4>
                 <?php if($this->session->flashdata('reg_succ')){ ?>
                                    <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    <strong><?php echo $this->session->flashdata('reg_succ'); ?></strong> 
                                    </div>
                                    
                                    <?php
                                    $this->session->unset_userdata ( 'reg_succ' );
                                    } ?>
                                    
                                    
           <form class="categories-form" action="<?php echo base_url('admin/post_languages');?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="control-label">Languages</label>
                   <input class="form-control" type="text" placeholder="Languages" name="languages" value="<?php echo set_value('languages'); ?>">
                   <small class="text-danger"><?php echo form_error('languages'); ?></small>
                </div>
                
               
                
                <div class="form-group btn-container" style="width: 16%;">
                  <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Add</button>
                </div>
           </form>
       </div>
       
       
       
       <br><br>
       
         <h4>All languages</h4>
         <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="lang">
                  <thead>
                    <tr>
                      <th>Language</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                       <?php if(is_array($languages)): ?>
                 <?php foreach ($languages as $lang){ if($lang->languages !=''){?>     
                    <tr>  
                          <td><?php echo $lang->languages;?></td>
                          
                          <td>
                            <a class="btn btn-danger btn-sm" onclick="javascript:deleteConfirm('<?php echo base_url().'admin/delete_language/'.$lang->id;?>');" deleteConfirm href="#">Delete</a>
                          </td>
                    </tr>
                  
                   <?php }}?>
                    <?php endif; ?>
                  </tbody>
                 
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
       
     
                                   
                        
                              
    </main>
    <!-- Essential javascripts for application to work-->
  <?php include_once "script.php"; ?>  
<script type="text/javascript"> 
function deleteConfirm(url)
{
if(confirm('Do you want to Delete this record ?'))
{
window.location.href=url;
}
}
</script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#lang').DataTable();
    } );
</script>
  </body>
</html>