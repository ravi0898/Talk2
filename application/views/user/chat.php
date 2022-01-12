<?php 
date_default_timezone_set("Asia/Kolkata");
$currnt_time  =  date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Talk2 an expert</title>
     
     <!--== css include ==-->
      
    <?php include(APPPATH.'views/home/include/css.php'); ?>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/emojionearea.css">
     <!--== css include ==-->
</head>
<body id="user-chatpage">
<!-- start per-loader -->
<div class="loader-container">
    <div class="loader-circle">
        <div class="loader">
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
        </div>
    </div>
</div>
<!-- end per-loader -->
<!-- ================================
            START HEADER AREA
================================= -->
<?php include(APPPATH.'views/home/include/header.php'); ?>

<!-- ================================
         END HEADER AREA
================================= -->
<!-- ================================
    START DASHBOARD AREA
================================= -->
<?php include(APPPATH.'views/user/include/user-dashboard-sidebar.php'); ?>

<!-- ================================
    END DASHBOARD AREA
================================= -->
<div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                        <div class="section-heading">
                            <h2 class="sec__title">Messages</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="index.html">Home</a></li>
                            <li class="active__list-item"><a href="index.html">Dashboard</a></li>
                            <li>Messages</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
                <div class="col">
                    <div class="dashboard-message-wrapper d-flex">
                        <div class="message-sidebar">
                            <div class="message-search">
                                <div class="contact-form-action">
                                <h5>Chat List</h5>

                                </div>
                            </div><!-- message-search -->
                            <div class="message-inbox-item">
                                <div class="mess__body">
                                <?php 
                                //print_r($chats_list);
                                foreach($chats_list as $chtroomlist){

                                $creator_ids  = $chtroomlist['creator'];
                                $list_date    = $chtroomlist['date'];
                                $list_chat_id = $chtroomlist['chat_id'];
                                
                                $getlist  = $this->Model->getData('vendor', array('vendor_id'=>$creator_ids));
                                //print_r($getlist);
                                // old date from database
                                $t_time   = strtotime($list_date);
                                // current date
                                $f_time = strtotime($currnt_time);

                                $tim_mn = round(($f_time - $t_time) / 60). "minute ago";
                                @$ti_sc = $tim_mn * 60 ;

                                $t_elapsd = timeAgo($ti_sc);

                                ?>

                                    <a href="<?php echo base_url();?>user/chat/<?php echo $list_chat_id;?>" class=" d-block message-inbox message-active">
                                        <div class="mess__item">
                                            <div class="avatar online-status">
                                                <img src="<?php echo base_url();?>uploads/images/<?php  echo $getlist->profile; ?>" alt="Michelle Moreno">
                                            </div>
                                            <div class="content">
                                                <h4 class="widget-title"><?php  echo $getlist->fname; ?></h4>
                                               <!--  <p class="text">How the hell am I supposed to get a jury to believe you when I am not even sure that I do</p> -->
                                                <span class="time color-text-3 font-size-12"><?php  echo $t_elapsd; ?></span>
                                            </div>
                                        </div>
                                    </a>
                                    <?php } ?>
                                    
                                </div><!-- end mess__body -->
                                <div class="msg-action-bar d-flex justify-content-between align-items-centerbg-light">
                                    <!-- <a href="#"><i class="la la-user-plus"></i> <span>Add Contact</span></a>
                                    <a href="#"><i class="la la-cog"></i> <span>Settings</span></a> -->
                                </div>
                                <!-- end msg-action-bar -->
                            </div><!-- end message-inbox-item -->
                        </div><!-- message-sidebar -->
                        <?php 
                        $creator = $this->uri->segment('3');
                        if(!empty($creator)){
                        
                         $vendor_id = $chatview->creator;
                         $chat_id   = $chatview->chat_id;

                         $getu    = $this->Model->getData('vendor', array('vendor_id'=>$vendor_id));

                        ?>
                        
                        <!-- message-content  Online chat -->
                        <div class="message-content flex-grow-1">
                            <div class="message-header">
                                <div class="mess__item justify-content-between align-items-center">
                                    <div class="d-flex">
                                        <div class="avatar">
                                            <img src="<?php echo base_url();?>uploads/images/<?php  echo $getu->profile; ?>" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title font-size-15 mb-0"><?php  echo $getu->fname; ?></h4>
                                            <span class="time color-text font-size-14"><?php  echo $getu->last_activity; ?></span>
                                        </div>
                                    </div>
                                    <!-- <div>
                                        <ul class="info-list">
                                            <li><a href="<?php  echo base_url();?>vendor/del_chatconversation/<?php  echo $chat_id; ?>"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Delete Conversation"></i></a></li>
                                        </ul>
                                    </div> -->
                                </div><!-- mess__item -->
                            </div><!-- message-header -->
                            <div class="conversation-wrap">
                            <div class="conversation-box">
                            <div class="load_chat"></div> 
                           
                            <!-- conversation-box -->
                           </div><!-- conversation-wrap -->  
                            

                            <form id="form_chat" method="post" enctype="multipart/form-data">
                            <div class="message-reply-input d-flex align-items-center">
                                <label class="mb-0 d-block flex-grow-1">
                                    <!-- emoji-picker class -->
                                    <textarea name="msg_text" class="msg_text" placeholder="Type Your Message..."></textarea>
                                    <img src="" class="imgdem" id="img_url" alt="your image" style="display: none;">
                                </label>
                                <div class=""></div>

                                
                                <div class="file-upload-wrap file-upload-wrap-3">
                                    <input type="file" name="files" class=" file-upload-input files" onChange="img_pathUrl(this);">
                                    <span class="file-upload-text"><i class="la la-paperclip"></i></span>
                                </div>
                                <div class="message-send ml-2">
                                    <input type="hidden" name="chat_id" value="<?php echo $chat_id;?>" class="chat_id">

                                    <button type="submit" id="chat_btn" class="chat_btn"><i class="la la-paper-plane"></i></button>
                                </div>
                            </div><!-- message-reply-input -->

                        </form>
                            <div class="px-2 py-1"> <a class="btn btn-info mb-2" href="<?php echo base_url().'user/cht_btw/'.$chat_id;?>" target="_blanck">Create meeting</a><br></div>
                        </div>
                        <!-- message end -->
                        <?php }else{ ?>
                        <img src="<?php echo base_url();?>assets/images/nodata.png" width="100%">
                        <?php } ?>



                    </div><!-- end dashboard-message-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="copy-right margin-top-40px padding-top-20px padding-bottom-20px">
                        <p class="copy__desc">
                              Copyright © 2021- 2025 Talk2 An Expert all rights reserved| Designed &amp; Developed By
                        <a href="https://www.developerbazaar.com"><span style="color:red;"> Developer </span><span style="color:limegreen;"> Bazaar</span> <span style="color:red;"> Technologies</span></a>
                        </p>
                     
                    </div><!-- end copy-right -->
                </div><!-- end col-lg-12 -->
            </div>
        </div><!-- end container-fluid -->
    </div>
<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->
<!-- Template JS Files -->
<?php include(APPPATH.'views/home/include/js.php'); ?>

<!-- <script src="<?php echo base_url();?>assets//js/jquery.MultiFile.min.js"></script> -->
<script src="<?php echo base_url();?>assets/js/emojionearea.js"></script>

<script>
$(document).ready(function (e) {
  
$("#form_chat").on('submit',(function(e) {
  e.preventDefault();
  
  var msg_text = $('.msg_text').val();
  var files = $('.files').val();
   
  if(msg_text =='' && files ==''){
  
  //alert("Empty Message");
  //$("#chat_btn").attr("disabled", true);
  //$("#chat_btn").attr("disabled", false);
  //echo "empty message";

  }else{
  
  play_notify();
 
  $.ajax({
   url: "<?php echo base_url();?>user/do_chat",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    //$("#err").fadeOut();
   },
   success: function(data)
      {
    if (data.status=='success') {
       
       $('#form_chat').trigger('reset');
       $(".imgdem").hide();
        }else{
       
        $('#form_chat').trigger('reset');
        $(".imgdem").hide();
       
        }
    
      },
             
    });

    }

 }));
});

function play_notify() {
  
  const audio = new Audio("<?php echo base_url();?>assets/msg_alert.mp3");
  audio.play();

    }


</script>

<script> 
  $(document).ready(function(){

    setInterval(function(){
      $('.load_chat').load('<?php echo base_url()?>user/show_load_chat_fun/<?php echo $chat_id;?>')

    }      
                ,1800);
 
  });
</script> 




</body>
</html>

<?php

function timeAgo($time_sec)
{
    $time_elapsed   = $time_sec;
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