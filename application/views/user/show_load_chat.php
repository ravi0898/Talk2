<?php //print_r($chat);
foreach($chat as $row){
$msg        = $row['msg'];
$files      = $row['files'];
$sender_id  = $row['sender_id'];
$date       = $row['date'];
$uid        = $row['uid'];
$vid        = $row['vid'];

$get_uprofile = $this->Model->getData('user', array('user_id'=>$uid));


$get_vprofile = $this->Model->getData('vendor', array('vendor_id'=>$vid));

date_default_timezone_set("Asia/Kolkata");
$currnt_time  =  date("Y-m-d H:i:s");

// old date from database
$to_time   = strtotime($date);
// current date
$from_time = strtotime($currnt_time);

$time_min = round(($from_time - $to_time) / 60). "minute ago";
@$time_sec = $time_min * 60 ;

$time_elapsed = timeAgo($time_sec);

$user_id = $this->session->userdata('user_id');
if($user_id == $sender_id){
?>
<div class="conversation-item msg-sent">
<div class="mess__body">
<div class="mess__item">
<div class="content">
<p class="text"><?php echo $msg; ?></p>
<?php if($files !='0'){ ?>
<p class="text"><img src="<?php echo base_url();?>uploads/chat/<?php echo $files;?>" alt="Michelle Moreno" width="50%" height="auto"></p>
<a href="<?php echo base_url();?>uploads/chat/<?php echo $files;?>" download="myimage" ><i class="la la-cloud-download text-white"></i></a>

<?php } ?>
<span class="time"><?php echo $time_elapsed;?><i class="fa fa-check"></i></span>
</div>
<div class="avatar">
<img src="<?php echo base_url();?>uploads/user_images/<?php echo $get_uprofile->profile;?>" alt="Michelle Moreno">
</div>
</div><!-- mess__item -->
</div><!-- mess__body -->
</div><!-- conversation-item -->
<?php }else{ ?>

<div class="conversation-item msg-reply">
<div class="mess__body">
<div class="mess__item">
<div class="avatar">
<img src="<?php echo base_url();?>uploads/images/<?php echo $get_vprofile->profile;?>" alt="Michelle Moreno">
</div>
<div class="content">
<p class="text"><?php echo $msg; ?></p>
<?php if($files !='0'){ ?>
<p class="text"><img src="<?php echo base_url();?>uploads/chat/<?php echo $files;?>" alt="Michelle Moreno" width="50%" height="auto"></p>
<a href="<?php echo base_url();?>uploads/chat/<?php echo $files;?>" download="myimage" ><i class="la la-cloud-download text-white"></i></a>

<?php } ?>
<span class="time"><?php echo $time_elapsed;?></span>
</div>
</div><!-- mess__item -->
</div><!-- mess__body -->
</div><!-- conversation-item -->

<script>
      function img_pathUrl(input){
        $(".imgdem").show();

        $('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
    }

</script>
<?php } } ?>

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

