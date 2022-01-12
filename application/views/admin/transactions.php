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
    
    <!--for export button-->
   
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
   <?php include_once "sidebar.php"; ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-money"></i> Transactions</h1>
          <!--<p>A free and open source Bootstrap 4 admin template</p>-->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-money"></i></li>
          <li class="breadcrumb-item"><a href="#">Transactions</a></li>
        </ul>
      </div>
      
      
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="example">
                  <thead>
                    <tr>
                        <th>Package ID</th>
                        <th>To</th>
                        <th>From</th>
                        <th>Payment Date</th>
                        <th>Payment Method</th>
                        <th>Amount</th>
                        <!--<th class="text-center">Status</th>-->
                     
                    </tr>
                  </thead>
                 
                  <tbody>
                       <?php foreach ($trans as $tr_list) { 
                                        $uid = $tr_list['user_id'];
                                          $vid = $tr_list['vendor_id'];

                                        $udata = $this->Model->getData('user', array('user_id'=>$uid));
                                         $vdata = $this->Model->getData('vendor', array('vendor_id'=>$vid));
                                       
                                      
                                        ?>
                                            <tr>
                                                <td><?php echo $tr_list['order_id'];?></td>
                                                
                                                 <td>
                                                    <?php echo $udata->fname;?> <?php echo $udata->lname;?><span class="badge badge-success ml-2 p-1">Paid</span>
                                                </td>
                                                 <td>
                                                    <?php
                                                       if($tr_list['project']=='Close'){
                                                   
                                                       echo $vdata->fname; echo $vdata->lname; echo '<span class="badge badge-success ml-2 p-1">Paid</span>';
                                                    
                                                       }else{ 
                                                           
                                                           echo $vdata->fname; echo $vdata->lname; echo '<span class="badge badge-danger ml-2 p-1">Pending</span>';
                                                        } 
                                                    ?>
                                                 </td>
                                                <td><?php echo $tr_list['date'];?></td>
                                                <td><?php echo 'Paypal';?></td>
                                                <td class="font-weight-semi-bold">$<?php echo $tr_list['price'];?>.00</td>
                                                <!--<td class="text-center"><span class="badge badge-success p-1">Paid</span></td>-->
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
     
    <!--<script>-->
    <!--    $(document).ready(function() {-->
    <!--    $('#example').DataTable();-->
    <!--    } );-->
    <!--</script>-->
    
   
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    
    <script type="text/javascript">
      $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
    } );
  </script>
  </body>
</html>