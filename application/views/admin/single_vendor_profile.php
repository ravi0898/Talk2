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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <style type="text/css">
        .morecontent span {
        display: none;
        }
        .morelink {
        display: block;
        color: red;
        
        }
    </style>
  </head>
  <body class="app sidebar-mini">
   
   <?php include_once "sidebar.php"; ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-user-circle"></i>Vendor detail</h1>
          <!--<p>A free and open source Bootstrap 4 admin template</p>-->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-user-circle"></i></li>
          <li class="breadcrumb-item"><a href="#">Vendor detail</a></li>
        </ul>
      </div>
      
        <div class="card bg-light mb-3" style="max-width: 50rem;">
            <div class="card-header">Vendor Detail</div>
            <div class="card-body">
                <table>
                    <tr>
                    <td>Company</td>
                    <td><?php echo $single_vendor_skill->company;?></td> 
                    </tr>
                    
                    <tr>
                    <td>Full Name</td>
                    <td><?php echo $single_vendor_skill->fullname;?></td> 
                    </tr>
                    
                    <tr>
                    <td>Category</td>
                    <td><?php echo $single_vendor_skill->category;?></td> 
                    </tr>
                    
                    <tr>
                    <td>Email</td>
                    <td><?php echo $single_vendor_skill->email;?></td> 
                    </tr>
                    
                    <tr>
                    <td>Website</td>
                    <td><?php echo $single_vendor_skill->website;?></td> 
                    </tr>
                    
                    <tr>
                    <td>Address</td>
                    <td><?php echo $single_vendor_skill->address;?></td> 
                    </tr>
                    
                    <tr>
                    <td>Mobile</td>
                    <td><?php echo $single_vendor_skill->mobile;?></td> 
                    </tr>
                    
                    <tr>
                    <td>Account Type</td>
                    <td><?php echo $single_vendor_skill->acc_type;?></td> 
                    </tr>
                    
                    <tr>
                    <td>Skills</td>
                    <?php if($single_vendor_skill->skills == 1){?>
                    <td><?php echo 'Defined';?></td> 
                    <?php }else{?>
                    <td><?php echo 'Undefined';?></td> 
                    <?php }?>
                    </tr>
                    
                    <tr>
                    <td>Language</td>
                    <?php if($single_vendor_skill->languag == 1){?>
                    <td><?php echo 'Defined';?></td> 
                    <?php }else{?>
                    <td><?php echo 'Undefined';?></td> 
                    <?php }?>
                    </tr>
                    
                    <tr>
                    <td>Account Holder</td>
                    <td><?php echo $single_vendor_skill->acc_name;?></td> 
                    </tr>
                    
                    <tr>
                    <td>Bank</td>
                    <td><?php echo $single_vendor_skill->bank_name;?></td> 
                    </tr>
                    
                    <tr>
                    <td>IFSC Code</td>
                    <td><?php echo $single_vendor_skill->ifsc;?></td> 
                    </tr>
                    
                    <tr>
                    <td>Account No.</td>
                    <td><?php echo $single_vendor_skill->acc_no;?></td> 
                    </tr>
                    
                    <tr>
                    <td>Price</td>
                    <td><?php echo $single_vendor_skill->price;?></td> 
                    </tr>
                    
                    <tr>
                    <td>Country</td>
                    <td><?php echo $single_vendor_skill->country;?></td> 
                    </tr>
                    
                    <tr>
                    <td>City</td>
                    <td><?php echo $single_vendor_skill->city;?></td> 
                    </tr>
                    
                    <tr>
                    <td>Map Address</td>
                    <td><?php echo $single_vendor_skill->map_address;?></td> 
                    </tr>
                    
                    <tr>
                    <td>Latitude</td>
                    <td><?php echo $single_vendor_skill->lat;?></td> 
                    </tr>
                    
                    <tr>
                    <td>Longitude</td>
                    <td><?php echo $single_vendor_skill->longitude;?></td> 
                    </tr>
                    
                    <tr>
                    <td>About</td>
                    <td><span class="more"><?php echo $single_vendor_skill->about;?></span</td> 
                    </tr>
                    
                    <tr>
                    <td>Allow</td>
                    <td><?php echo $single_vendor_skill->allow;?></td> 
                    </tr>
                    
                    <tr>
                    <td>Status</td>
                    <?php if($single_vendor_skill->status == 1){?>
                    <td><?php echo 'Active';?></td> 
                    <?php }else{?>
                    <td><?php echo 'Inactive';?></td> 
                    <?php }?>
                    </tr>
                    
                    <tr>
                    <td>Profile Status</td>
                    <?php if($single_vendor_skill->alert == 1){?>
                    <td><?php echo 'Your Profile is updated !!';?></td> 
                    <?php }else{?>
                    <td><?php echo 'Your Profile is not updated !!';?></td> 
                    <?php }?>
                    </tr>
                    
                    <tr>
                    <td>Date</td>
                    <td><?php echo $single_vendor_skill->date;?></td> 
                    </tr>
                    
                </table>
            </div>
        </div>
      
     
     
      
        
                                   
                        
                              
    </main>
    <!-- Essential javascripts for application to work-->
 
      <?php include_once "script.php"; ?>
    <script type="text/javascript" src="<?php echo base_url(); ?>admin_assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>admin_assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    
    <script>
        $(document).ready(function() {
        
        // Configure/customize these variables.
        var showChar = 80;  // How many characters are shown by default
        var ellipsestext = "...";
        var moretext = "View more >>";
        var lesstext = "<< View less";
        
        
        $('.more').each(function() {
        var content = $(this).html();
        
        if(content.length > showChar) {
        
        var c = content.substr(0, showChar);
        var h = content.substr(showChar, content.length - showChar);
        
        var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
        
        $(this).html(html);
        }
        
        });
        
        $(".morelink").click(function(){
        if($(this).hasClass("less")) {
        $(this).removeClass("less");
        $(this).html(moretext);
        } else {
        $(this).addClass("less");
        $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
        });
        
        });
    </script>
    
  </body>
</html>