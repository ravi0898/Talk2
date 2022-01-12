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

          <h1><i class="fa fa-comment"></i> Chat List</h1>

          <!--<p>A free and open source Bootstrap 4 admin template</p>-->

        </div>

        <ul class="app-breadcrumb breadcrumb">

          <li class="breadcrumb-item"><i class="fa fa-comment"></i></li>

          <li class="breadcrumb-item"><a href="#">Chat List</a></li>

        </ul>

      </div>

      

     

      <div class="row">

        <div class="col-md-12">

          <div class="tile">

            <div class="tile-body">

              <div class="table-responsive">

                <table class="table table-hover table-bordered" id="chats">

                  <thead>

                    <tr>

                      <th>User</th>
                      <th>Vendor</th>
                      <th>Chat ID</th>
                       <th>Date</th>
                      <th>Action</th>

                    </tr>

                  </thead>

                 

                  <tbody>
                     
                          <?php foreach ($chats as $chat) { 
                            $uid = $chat['user_id'];
                            $udata = $this->Model->getData('user', array('user_id'=>$uid));
                            
                             $vid = $chat['creator'];
                             $vdata = $this->Model->getData('vendor', array('vendor_id'=>$vid));
                         
                          ?>
                       <tr>
                         <td><?php echo $udata->fname;?> <?php echo $udata->lname;?></td>  
                          <td><?php echo $vdata->fname;?> <?php echo $vdata->lname;?></td>  
                          <td><?php echo $chat['chat_id'];?></td>  
                          <td><?php echo $chat['date'];?></td>  
                          
                           <td> 
                              <a href=" <?php echo base_url().'admin/single_chat_detail/'.$chat['chat_id'];?>" class="btn btn-primary a-btn-slide-text">
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
    $('#chats').DataTable();
    } );
</script>
  </body>

</html>