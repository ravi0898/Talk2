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

          <h1><i class="fa fa-address-book"></i> Contact Us</h1>

          <!--<p>A free and open source Bootstrap 4 admin template</p>-->

        </div>

        <ul class="app-breadcrumb breadcrumb">

          <li class="breadcrumb-item"><i class="fa fa-address-book"></i></li>

          <li class="breadcrumb-item"><a href="#">Inquiry List</a></li>

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

                      <th>Fullname</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Subject</th>
                      <th>Message</th>

                    </tr>

                  </thead>

                 

                  <tbody>
                     
                    <?php foreach ($contact as $contactus) { ?>
                       <tr>
                          <td><?php echo $contactus->fname;?> </td>  
                          <td><?php echo $contactus->email;?></td>  
                          <td><?php echo $contactus->phone;?></td>  
                          <td><?php echo $contactus->subject;?></td>  
                          <td><?php echo $contactus->message;?></td>  
                          
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