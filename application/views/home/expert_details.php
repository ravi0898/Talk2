<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <meta name="author" content="TechyDevs">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <title>Talk2 an expert</title>

    <!-- Favicon -->



       <!-- ================================

                CSS

================================= -->
<?php include(APPPATH.'views/home/include/css.php'); ?>

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/progresscircle.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.14/css/lightgallery.css">
<!-- ================================
  CSS
================================= -->


<style type="text/css">

</style>
</head>

<body id="details-page">

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

    START BREADCRUMB AREA

================================= -->

<section class="coverphoto" style="background-image: url(https://sharukh.dbtechserver.online/talk2expert/assets/images/new-breadcrumb.jpg);">

    <div class="breadcrumb-wrap">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="breadcrumb-content candidate-breadcrumb d-flex flex-wrap justify-content-between align-items-center">

                        <div class="bread-details">

                            <div class="bread-candidate-detail d-flex align-items-center">
                                <?php
                                 $vendor_id = $vdetails->vendor_id;
                                 $getvendor_img = $this->Model->getData('vendor', array('vendor_id'=>$vendor_id));
                                ?>
                                <div class="bread-img radius--rounded">

                                    <img src="<?php echo base_url(); ?>uploads/images/<?php echo $getvendor_img->profile;?>" alt="" class="radius--rounded">

                                </div>

                                <div class="bread-candidate-inner">

                                    <div class="candidate-content">

                                        <h2 class="widget-title font-size-30 text-white pb-1 d-flex align-items-center"><?php echo ucwords($vdetails->fullname);?> <i class="la la-check verified-badge ml-1" data-toggle="tooltip" data-placement="top" title="Verified"></i></h2>

                                        <p class="font-size-16 line-height-28 text-white">
                                    <?php
                                    $datss = $vdetails->date;
                                    $day   = date('d', strtotime($datss));
                                    $month = date("F", strtotime($datss));
                                    $yr    = date('Y', strtotime($datss));

                                    ?>
                                            <span class="d-block"><i class="la la-calendar color-text-1 mr-1 text-white"></i>  Member Since, <?php echo $month; ?> <?php echo $day; ?>, <?php echo $yr; ?></span>

                                           <span class="d-block font-size-15"><i class="la la-user color-text-1 mr-1 text-white"></i> <?php echo ucwords($vdetails->category);?></span>

                                            <span class="d-block font-size-15"><i class="la la-map-marker color-text-1 mr-1 text-white"></i> <?php echo ucwords($vdetails->map_address);?></span>
                                        </p>

                        <p><div class="hero-tag">
                        <ul class="list-items job-tags d-flex align-items-center mt-1">
                            <li class="text-white font-weight-medium">Skills:</li>
                        <?php 
                        $get_skil = "SELECT * FROM `selected_vend_sklill` WHERE vendor_id='$vendor_id'";
  
                        $get_skil= $this->Model->getSqlData($get_skil);

                        foreach($get_skil as $skil_val){
                        ?>
                        <li class="font-size-14"><a href="#"><?php echo ucwords($skil_val['skill']);?></a></li>
                        <?php } ?>                                    
                                                           
                        </ul>
                        </div></p>

                        </div><!-- end candidate-content -->

                                 
                                </div>

                            </div>

                        </div><!-- end bread-details -->

                        <div class="bread-action">

                            <ul class="listing-info">

                                <li>

                                    <a href="<?php echo base_url().'home/checkout/'.$vendor_id;?>" class="theme-btn mr-1"><i class="la la-cloud-download font-size-16"></i> Hire Expert</a>

                                </li>

                                
                            </ul>

                        </div><!-- end bread-action -->

                    </div><!-- end breadcrumb-content -->

                </div><!-- end col-lg-12 -->

            </div><!-- end row -->

        </div><!-- end container -->

    </div><!-- end breadcrumb-wrap -->

</section><!-- end breadcrumb-area -->

<!-- ================================

    END BREADCRUMB AREA

================================= -->



<!-- ================================

    START CANDIDATE DETAILS

================================= -->

<section class="candidate-details padding-top-100px padding-bottom-80px">

    <div class="container">

        <div class="row">

            <div class="col-lg-8">

                <div class="single-employer-wrap">

                    <div class="candidate-description padding-bottom-35px">

                        <h2 class="widget-title">About Me</h2>

                        <div class="title-shape"></div>

                        <p class="mb-3">
                        <?php 
                        echo $vdetails->about;
                        ?>

                       <!-- <span class="more"><?php //echo $strings;?></span> -->

                        </p>


                          <div class="candidate-description padding-bottom-35px padding-top-20px">

                        <h2 class="widget-title">Skill</h2>

                        <div class="title-shape"></div>

                        <div class="row mt-4">

                             
                            <?php
                            foreach($get_skil as $skil_val){
                            ?>
                            <span class="badge badge-info note-badge note-badge-bg-2 p-2 mr-2"><?php echo ucwords($skil_val['skill']);?></span>
                            <?php } ?> 

                        </div>    

                         <h2 class="widget-title padding-top-20px">Language </h2>

                        <div class="title-shape"></div>

                        <div class="row mt-4">

                        <?php 
                        $get_lang = "SELECT * FROM `selected_vend_lang` WHERE vendor_id='$vendor_id'";
  
                        $get_lang= $this->Model->getSqlData($get_lang);

                        foreach($get_lang as $lang_val){
                        ?>
                       <span class="badge badge-info note-badge note-badge-bg-2 p-2 mr-2"><?php echo ucwords($lang_val['lang']);?></span> 
                        <?php } ?>  

                            
                        </div>    

                    </div><!-- end candidate-description -->

                    <div class="candidate-education padding-bottom-40px">

                        <h2 class="widget-title">Education</h2>

                        <div class="title-shape"></div>

                        <div class="timeline-dashboard padding-bottom-40px">

                            <div class="timeline-body pt-3">

                                <div class="mess__body">

                                <?php 
                                $getedu = "SELECT * FROM `education` WHERE vendor_id='$vendor_id'";
          
                                $getedu= $this->Model->getSqlData($getedu);

                                foreach($getedu as $edu_val){
                                   
                                $to_date_ed   = $edu_val['to_date'];
                                $from_date_ed = $edu_val['from_date'];
                                
                                //for to
                                $split_date1 = explode("-", $to_date_ed);
                                $year_edto     = $split_date1[0];

                                 //for from date
                                $split_date2 = explode("-", $from_date_ed);
                                $year_edf = $split_date2[0];

                                ?>


                                    <div class="mess__item">

                                        <div class="ring-icon ring-bg-2"></div>

                                        <div class="content">

                                            <p class="color-text-2"><?php echo ucwords($edu_val['edu_title']);?> <span class="color-text-3"><?php echo $year_edto ;?> - <?php echo $year_edf;?></span></p>

                                            <p class="mb-1 font-size-15"><?php echo ucwords($edu_val['org_name']);?></p>

                                            <span class="time color-text-3 d-block line-height-26">
                                            </span>

                                        </div>

                                    </div><!-- end mess__item -->
                                   <?php } ?>
                                    
                               
                                </div><!-- end mess__body -->

                            </div>

                        </div><!-- end timeline-dashboard -->

                        <h2 class="widget-title">Work Experience</h2>

                        <div class="title-shape"></div>

                        <div class="timeline-dashboard">

                            <div class="timeline-body pt-3">

                                <div class="mess__body">

                                <?php 
                                $get_wrk = "SELECT * FROM `work_exp` WHERE vendor_id='$vendor_id'";
          
                                $get_wrk= $this->Model->getSqlData($get_wrk);

                                foreach($get_wrk as $wrk_val){

                                $to_date_wrk   = $wrk_val['to_date'];
                                $from_date_wrk = $wrk_val['from_date'];
                                
                                //for to
                                $split_date3 = explode("-", $to_date_wrk);
                                $year_wto     = $split_date3[0];

                                 //for from date
                                $split_date4 = explode("-", $from_date_wrk);
                                $year_wf = $split_date4[0];


                                ?>

                                    <div class="mess__item">

                                        <div class="ring-icon ring-bg-2"></div>

                                        <div class="content">

                                            <p class="color-text-2"><?php echo ucwords($wrk_val['title']);?> <span class="color-text-3"><?php echo $year_wto ;?> - <?php echo $year_wf;?></span></p>

                                            <p class="mb-1 font-size-15"><?php echo ucwords($wrk_val['org']);?></p>

                                            <span class="time color-text-3 d-block line-height-26">

                                            </span>

                                        </div>

                                    </div><!-- end mess__item -->
                                    <?php } ?>
                                </div><!-- end mess__body -->

                            </div>

                        </div><!-- end timeline-dashboard -->

                    </div><!-- end candidate-education -->

                 



                </div><!-- end single-employer-wrap -->

            </div><!--  -->



            <!--------->
             
             <div class="row">
            
                       <div class="padding-bottom-20px padding-top-20px">
                        <h2 class="widget-title">Certificates</h2>

                        <div class="">
                         
                        </div>
                    </div>

                        

    <div class="col-lg-12">
<div class="candidate-item d-flex align-items-center justify-content-between p-4">
   <div class="bread-details d-flex">

    <div class="demo-gallery">

    <ul id="lightgallery">
     
      <?php 
      
      foreach($certificate as $cars_val){ ?>
      
      <li data-responsive="<?php echo base_url(); ?>uploads/images/certificate/<?php echo $cars_val['files'];?>" data-src="<?php echo base_url(); ?>uploads/images/certificate/<?php echo $cars_val['files'];?>"
      data-sub-html="">
        <a href="">
          <img class="img-responsive" src="<?php echo base_url(); ?>uploads/images/certificate/<?php echo $cars_val['files'];?>">
          <div class="demo-gallery-poster">
            <img src="<?php echo base_url(); ?>uploads/images/certificate/<?php echo $cars_val['files'];?>">
          </div>
        </a>
      </li>
      
      <?php } ?>

      <!-- <li data-responsive="<?php echo base_url(); ?>assets/images/certificate-1.jpg" data-src="<?php echo base_url(); ?>assets/images/certificate-1.jpg"-->
      <!--data-sub-html="">-->
      <!--  <a href="">-->
      <!--    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/certificate-1.jpg">-->
      <!--    <div class="demo-gallery-poster">-->
      <!--      <img src="<?php echo base_url(); ?>assets/images/certificate-1.jpg">-->
      <!--    </div>-->
      <!--  </a>-->
      <!--</li>-->

      <!-- <li data-responsive="<?php echo base_url(); ?>assets/images/certificate-1.jpg" data-src="<?php echo base_url(); ?>assets/images/certificate-1.jpg"-->
      <!--data-sub-html="">-->
      <!--  <a href="">-->
      <!--    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/certificate-1.jpg">-->
      <!--    <div class="demo-gallery-poster">-->
      <!--      <img src="<?php echo base_url(); ?>assets/images/certificate-1.jpg">-->
      <!--    </div>-->
      <!--  </a>-->
      <!--</li>-->

     
     
     
    </ul>
   
  </div>
   
    
    </div>
    </div>
    </div><!---card-->
         

    
                
    </div>


            <!--------->

            <div class="row">
            <?php 
            $get_review = "SELECT * FROM `review_vend` WHERE vendor_id='$vendor_id'";

            $get_review = $this->Model->getSqlData($get_review);
            ?>

                       <div class="padding-bottom-20px padding-top-20px">
                        <h2 class="widget-title">Clients Reviews</h2>

                        <div class="">
                         <?php if(empty($get_review)){ echo "No Review Available!"; } ?>

                        </div>
                    </div>

            <?php 
            foreach($get_review as $review_val){
             $userid = $review_val['uid'];
             $u_img = $this->Model->getData('user', array('user_id'=>$userid));
            ?>
            

    <div class="col-lg-12">
<div class="candidate-item d-flex align-items-center justify-content-between p-4">
   <div class="bread-details d-flex">
    <div class="bread-img flex-shrink-0">
     <a href="#" class="d-block">
      <img src="<?php echo base_url(); ?>uploads/user_images/<?php echo $u_img->profile;?>" alt="">
      </a>
    </div>
    <div class="candidate-content-item">
    <h2 class="widget-title pb-2"><a href="#"><?php echo $u_img->fname;?> <?php echo ucwords($u_img->lname);?></a> </h2>
    <p class="font-size-15 color-text-3">
    <span class="mr-2"><i class="la la-map-marker mr-1"></i><?php echo ucwords($u_img->country);?></span>
    <br>
    <span class="rating-rating">
    <span class="rating-count"><?php echo $review_val['rate'];?>.0</span>
    <?php 
    $t_v = (5 - $review_val['rate']);
    for($v=0; $v < ($review_val['rate']) ; $v++) {
    ?>
    <span class="la la-star"></span>
    <?php }?>
    <?php for($r=0; $r < $t_v; $r++ ){ ?>
    <span class="la la-star text-secondary"></span>
    <?php } ?>
    </span>
    </p>
    <p class="mt-1 font-size-15 color-text-3">
    <?php echo ucwords($review_val['review']);?> 
    </p>
    </div><!-- end candidate-content-item -->
    </div>
    </div>
    </div><!---card-->
     <?php } ?>
    

     <!-- <div class="col-lg-12">

      <div class="button-shared padding-top-60px text-center">
                            <button type="button" class="theme-btn border-0">
                                <span class="la la-refresh"></span> View More Review
                            </button>
                        </div>
     </div>    -->
                
    </div> <!--row-->  

           

        </div><!-- end col-lg-8 -->

         <div class="col-lg-4">

                <div class="sidebar">

                   

                

                    <div class="sidebar-widget">

                        <h2 class="widget-title">Let us help you get started </h2>

                        <div class="title-shape margin-bottom-30px"></div>

                        <div class="post-card mb-0 section-bg text-center pb-5 pr-4 pl-4 pt-4">

                            <div class="post-card-content">

                                <img src="<?php echo base_url(); ?>assets/images/search.svg" alt="" class="img-fluid">

                                <h2 class="widget-title mt-3">Hire Me</h2>

                               <strong>
                                 
                          Fixed Price  $<?php echo $vdetails->price;?>.00
                                   
                                </strong>

                            </div><!-- end post-card-content -->

                            <div class="btn-box mt-4 text-center">

                                <a href="<?php echo base_url().'home/checkout/'.$vendor_id;?>" class="theme-btn">Hire Expert</a>

                            </div><!-- end btn-box -->

                        </div>

                    </div><!-- end sidebar-widget -->

                </div><!-- end sidebar -->

            </div><!-- end col-lg-4 -->

    </div><!-- end container -->

</section><!-- end candidate-details -->

<!-- ================================

    END CANDIDATE DETAILS

================================= -->



<div class="section-block"></div>



<!-- ================================

       START FOOTER AREA

================================= -->

<?php include(APPPATH.'views/home/include/footer.php'); ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.14/js/lightgallery-all.min.js"></script>

<!-- ================================

       START FOOTER AREA

================================= -->



<!-- start back-to-top -->

<div id="back-to-top">

    <i class="la la-angle-up" title="Go top"></i>

</div>

<!-- end back-to-top -->



<!-- Template JS Files -->

<?php include(APPPATH.'views/home/include/js.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.14/js/lightgallery-all.min.js"></script>



<script>
$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 250;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Show more";
    var lesstext = "Show less";


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

 <script type="text/javascript">
      $(document).ready(() => {
  $("#lightgallery").lightGallery({
    pager: true
  });
});

    </script>
</body>

</html>