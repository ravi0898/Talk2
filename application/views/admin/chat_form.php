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

          <h1><i class="fa fa-comment"></i> Chat detail</h1>

          <!--<p>A free and open source Bootstrap 4 admin template</p>-->

        </div>

        <ul class="app-breadcrumb breadcrumb">

          <li class="breadcrumb-item"><i class="fa fa-comment"></i></li>

          <li class="breadcrumb-item"><a href="#">Chat detail</a></li>

        </ul>

      </div>

      <div class="row">
          <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Chat</h3>
            <div class="messanger">
                 
                <?php foreach($allchats as $chats){
                    $vid = $chats['vid'];
                    $vdata = $this->Model->getData('vendor', array('vendor_id'=>$vid));
                    $uid = $chats['uid'];
                    $udata = $this->Model->getData('user', array('user_id'=>$uid));
                    
                    $time_ago = $chats['date'];
                    $time_elapsed = timeAgo($time_ago); //The argument $time_ago is in timestamp (Y-m-d H:i:s)format.
                   
                ?>
                        <div class="messages">
                            <?php if($chats['vid']){?>
                                <div class="message"><img src="<?php echo base_url('uploads/images/'.$vdata->profile); ?>" style="height:30px;width:30px;border-radius: 50%;">
                                     
                                    <?php if($chats['msg'] !='') {?>
                                      <p class="info"><b><?php echo $vdata->fname;?></b><br><?php echo $chats['msg'];?><br><b><?php echo $time_elapsed;?></b></p>
                                    <?php }?>
                                   
                                    <?php if($chats['files']) {?>
                                       <p class="info"><b><?php echo $vdata->fname;?></b><br><img src="<?php echo base_url('uploads/chat/'.$chats['files']); ?>" style="height:100px;width:100px;"><br><b><?php echo $time_elapsed;?></b></p>
                                    <?php }?>
                                    
                                </div>
                            <?php }?>
                            
                            <?php if($chats['uid']){?>
                                <div class="message me"><img src="<?php echo base_url('uploads/user_images/'.$udata->profile); ?>" style="height:30px;width:30px;border-radius: 50%;">
                                   
                                    <?php if($chats['msg'] !='') {?>   
                                       <p class="info"><b><?php echo $udata->fname;?></b><br><?php echo $chats['msg'];?><br><b><?php echo $time_elapsed;?></b></p>
                                    <?php }?>  
                                    
                                     <?php if($chats['files']) {?>
                                       <p class="info"><b><?php echo $udata->fname;?></b><br><img src="<?php echo base_url('uploads/chat/'.$chats['files']); ?>" style="height:100px;width:100px;"><br><b><?php echo $time_elapsed;?></b></p>
                                     <?php }?>
                                     
                                </div>
                            <?php }?>
                        </div>
                <?php } ?>
               
            </div>
          </div>
        </div>
      </div>

      

     

    </main>

    <!-- Essential javascripts for application to work-->
    <?php
    function timeAgo($time_ago)
{
    $time_ago = strtotime($time_ago);
    $cur_time   = time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed ;
    $minutes    = round($time_elapsed / 60 );
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400 );
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640 );
    $years      = round($time_elapsed / 31207680 );
    // Seconds
    if($seconds <= 60){
        return "just now";
    }
    //Minutes
    else if($minutes <=60){
        if($minutes==1){
            return "one minute ago";
        }
        else{
            return "$minutes minutes ago";
        }
    }
    //Hours
    else if($hours <=24){
        if($hours==1){
            return "an hour ago";
        }else{
            return "$hours hrs ago";
        }
    }
    //Days
    else if($days <= 7){
        if($days==1){
            return "yesterday";
        }else{
            return "$days days ago";
        }
    }
    //Weeks
    else if($weeks <= 4.3){
        if($weeks==1){
            return "a week ago";
        }else{
            return "$weeks weeks ago";
        }
    }
    //Months
    else if($months <=12){
        if($months==1){
            return "a month ago";
        }else{
            return "$months months ago";
        }
    }
    //Years
    else{
        if($years==1){
            return "one year ago";
        }else{
            return "$years years ago";
        }
    }
}

    ?>

   

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
    $('#skills').DataTable();
    } );
</script>
  </body>

</html>