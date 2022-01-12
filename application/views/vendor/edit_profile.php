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
<?php 

if(!empty($get_skill)){
$vendor_id = $get_skill->vendor_id;
}
?>

<!--== css include ==-->
</head>
<body id="vendor-prof">
<!-- start per-loader -->
<!-- <div class="loader-container">
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
</div> -->
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
<section class="dashboard-area">
<?php include(APPPATH.'views/home/include/dashboard-sidebar.php'); ?>

<div class="dashboard-content-wrap">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
<div class="section-heading">
<h2 class="sec__title">Edit Profile</h2>
</div><!-- end section-heading -->
<ul class="list-items d-flex align-items-center">
<li class="active__list-item"><a href="javascript:void(0)">Home</a></li>
<li>Edit Profile</li>
</ul>
</div><!-- end breadcrumb-content -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
<div class="row mt-5">

<div class="col-lg-6 px-2 py-2">
    
<div class="user-profile-action-wrap mb-5 billing-form-item">
    <h6 class="pt-3 pb-2 pl-2">Upload Profile Photo</h6>
<form method="POST" action="<?php echo base_url('vendor/upd_profile');?>" enctype="multipart/form-data">

<div class="user-profile-action mb-4 px-2 py-2 d-flex align-items-center">
<div class="user-pro-img">
<img src="<?php if(($vendor_img->profile) !='0'){ echo base_url();?>uploads/images/<?php echo $vendor_img->profile; }else{ echo base_url();?>assets/images/cover-img.jpg <?php }?>" alt="user-image" class="img-fluid radius-round border">
</div>
<div class="user-upload-img-wrap">
<div class="file-upload-wrap file-upload-wrap-2">
<input type="file" name="profile" class="multi file-upload-input with-preview" required="">
<span class="file-upload-text"><i class="la la-photo mr-2"></i>Upload Photo</span>
<!-- <p>Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg & .png</p> -->
</div>
<button type="submit" name="submit" class="theme-btn mt-3">Upload</button>
</div>
</div><!-- end user-profile-action -->
</form>


</div><!-- end user-profile-action-wrap -->
</div><!-- end col-lg-6 -->


<div class="col-lg-6 px-2 py-2">

<div class="user-profile-action-wrap mb-5 billing-form-item">
  <h6 class="pt-3 pb-2 pl-2">Upload Cover Photo</h6>

<form method="POST" action="<?php echo base_url('vendor/upd_cover');?>" enctype="multipart/form-data">

<div class="user-profile-action mb-4 px-2 py-2 d-flex align-items-center">
   
<div class="user-pro-img section-bg border radius-round">
<img src="<?php if(($vendor_img->cover) !='0'){ echo base_url();?>uploads/images/<?php echo $vendor_img->cover; }else{ echo base_url();?>assets/images/cover-img.jpg <?php }?>" alt="user-image" class="img-fluid radius-round">
</div>

<div class="user-upload-img-wrap">
<div class="file-upload-wrap file-upload-wrap-2">
<input type="file" name="cover" class="multi file-upload-input with-preview" required="">
<span class="file-upload-text"><i class="la la-photo mr-2"></i>Upload Cover</span>
<!-- <p>Max file size is 5MB, Minimum dimension: 1920x400 And Suitable files are .jpg & .png</p> -->
</div>
<!-- <a href="#" class="theme-btn mt-3">Remove Cover</a> -->
<button type="submit" name="submit" class="theme-btn mt-3">Upload</button>

</div>

</div>
</form>

</div><!-- end user-profile-action-wrap -->
</div><!-- end col-lg-6 -->


<form method="POST" action="<?php echo base_url('vendor/update_profile');?>" enctype="multipart/form-data">
<div class="col-lg-12">
<div class="edit-profile-wrap">
<div class="user-form-action">
<div class="billing-form-item">
<div class="billing-title-wrap">
<h3 class="widget-title pb-0">Company Profile</h3>
<div class="title-shape margin-top-10px"></div>
</div><!-- billing-title-wrap -->
<div class="billing-content">
<div class="contact-form-action">
<div class="row">
 <div class="col-lg-12">
    <?php if($this->session->flashdata('profile')){ ?>
    <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong><?php echo $this->session->flashdata('profile'); ?></strong> 
    </div>
    <?php
    $this->session->unset_userdata ( 'profile' );
    } ?>

 </div>
  
    <div class="col-lg-6">
        <div class="input-box">
            <label class="label-text">Company Name</label>
            <div class="form-group">
                <span class="la la-building-o form-icon"></span>
                <input class="form-control" type="text" name="company" value="<?php if(($get_skill->company)=='0'){ echo set_value('company'); }else{ echo $get_skill->company ; }?>" placeholder="Company name">
                <small class="text-danger"><?php echo form_error('company'); ?></small>

            </div>
        </div><!-- end input-box -->
    </div><!-- end col-lg-6 -->
    <div class="col-lg-6">
        <div class="input-box">
            <label class="label-text">Full Name</label>
            <div class="form-group">
                <span class="la la-user form-icon"></span>
                <input class="form-control" type="text" name="fullname" value="<?php if(($get_skill->fullname)=='0'){ echo set_value('fullname');}else{ echo $get_skill->fullname; } ?>" placeholder="Full Name">
                <small class="text-danger"><?php echo form_error('fullname'); ?></small>

            </div>
        </div><!-- end input-box -->
    </div><!-- end col-lg-6 -->
    <div class="col-lg-6">
        <div class="input-box">
            <label class="label-text">Allow In Search & Listing</label>
            <div class="form-group user-chosen-select-container">
                <select class="user-chosen-select" name="allow">
                     
                    <?php if(($get_skill->allow)=='0'){ ?>
                
                    <option value="<?php echo set_value('allow');?>"><?php echo set_value('allow');?></option>
                    
                    <?php }
                    else if(($get_skill->allow)!='0'){ ?>
                    
                    <option value="<?php echo $get_skill->allow;?>"><?php echo $get_skill->allow;?></option>
                   
                    <?php }else{  ?>
                    
                    <option value="0">Select</option>
                    
                    <?php } ?>

                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <small class="text-danger"><?php echo form_error('allow'); ?></small>

            </div>
        </div><!-- end input-box -->
    </div><!-- end col-lg-6 -->
    <div class="col-lg-6">
        <div class="input-box">
            <label class="label-text">Category</label>
            <div class="form-group user-chosen-select-container">
                <select class="user-chosen-select" name="category">
                    
                <?php 
                //print_r($categories_list);
                foreach($categories_list as $catget){ ?>
                <option value="<?php echo $catget['category_name'];?>" <?php if($catget['category_name'] == $get_skill->category) echo 'selected="selected"'; ?>><?php echo $catget['category_name'];?></option>
                <?php } ?>

                   
                </select>
                <small class="text-danger"><?php echo form_error('category'); ?></small>

            </div>
        </div><!-- end input-box -->
    </div><!-- end col-lg-6 -->
    <div class="col-lg-12">
        <div class="input-box">
            <label class="label-text">About Your Self</label>
            <div class="form-group">
                <textarea class="message-control form-control pt-3 pr-4 pb-3 pl-4" name="about" placeholder="About"><?php if(($get_skill->about)=='0'){ set_value('about'); }else{ echo $get_skill->about; }?></textarea>
                <small class="text-danger"><?php echo form_error('about'); ?></small>

            </div>
        </div><!-- end input-box -->
    </div><!-- end col-lg-12 -->
    <div class="col-lg-12">
        <div class="input-box">
            <label class="label-text">Account Type</label>
            <div class="custom-label">
                <div class="form-group mb-0 d-flex align-items-center">
                    <div class="label-wrap mr-3">
                        <label class="label-container">
                            <input type="radio" name="acc_type" value="Employer"  <?php if(!empty($get_skill)){ echo set_value('acc_type', $get_skill->acc_type) == 'Employer' ? "checked" : ""; }?>>
                            <span class="label-mark"></span>
                            Employer
                        </label>
                    </div>
                    <div class="label-wrap">
                        <label class="label-container">
                            <input type="radio" name="acc_type" value="Freelancer" <?php if(!empty($get_skill)){ echo set_value('acc_type', $get_skill->acc_type) == 'Freelancer' ? "checked" : "";} ?>>
                            <span class="label-mark"></span>
                            Freelancer
                        </label>
                    </div>
                </div>
                <small class="text-danger"><?php echo form_error('acc_type'); ?></small>

            </div><!-- end custom-label -->
        </div><!-- end input-box -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- end contact-form-action -->
</div><!-- end billing-content -->
</div>
</div><!-- end user-form-action -->
</div><!-- end edit-profile-wrap -->
</div><!-- end col-lg-12 -->


<div class="col-lg-12">
<div class="user-form-action">
<div class="billing-form-item">
<div class="billing-title-wrap">
<h3 class="widget-title pb-0">Contact Information</h3>
<div class="title-shape margin-top-10px"></div>
</div><!-- billing-title-wrap -->
<div class="billing-content">
<div class="contact-form-action">

<div class="row">
<div class="col-lg-4">
    <div class="input-box">
        <label class="label-text">Phone number</label>
        <div class="form-group">
            <span class="la la-phone form-icon"></span>
            <input class="form-control" type="text" name="mobile" value="<?php if(($get_skill->mobile)=='0'){ echo set_value('mobile');}else{ echo $get_skill->mobile; } ?>" placeholder="+1 246-345-0695">
            <small class="text-danger"><?php echo form_error('mobile'); ?></small>

        </div>
    </div>
</div><!-- end col-lg-4 -->
<div class="col-lg-4">
    <div class="input-box">
        <label class="label-text">Email Address</label>
        <div class="form-group">
            <span class="la la-envelope form-icon"></span>
            <input class="form-control" type="text" name="email" value="<?php if(($get_skill->email)=='0'){ echo set_value('email');}else{ echo $get_skill->email; } ?>" placeholder="example@gmail.com">
            <small class="text-danger"><?php echo form_error('email'); ?></small>

        </div>
    </div>
</div><!-- end col-lg-4 -->
<div class="col-lg-4">
    <div class="input-box">
        <label class="label-text">Website</label>
        <div class="form-group">
            <span class="la la-external-link form-icon"></span>
            <input class="form-control" type="text" name="website" value="<?php if(($get_skill->website)=='0'){ echo set_value('website'); }else{ echo $get_skill->website; }?>" placeholder="www.bluetechinc.com">
            <small class="text-danger"><?php echo form_error('website'); ?></small>

        </div>
    </div>
</div><!-- end col-lg-4 -->
<div class="col-lg-4">
    <div class="input-box">
        <label class="label-text">Country</label>
        <div class="form-group user-chosen-select-container">

            <select class="user-chosen-select" name="country">

                <?php if(($get_skill->country)=='0'){ ?>
                
                <option value="<?php echo set_value('country');?>"><?php echo set_value('country');?></option>
                
                <?php }else if(($get_skill->country)!='0'){ ?>
                <option value="<?php echo $get_skill->country;?>"><?php echo $get_skill->country;?></option>
               
                <?php }else{  ?>
                
                <option value="0">Select</option>
                
                <?php } ?>

                <?php foreach ($country_list as $countries) { ?>
               
                <option value="<?php echo $countries['name'];?>"><?php echo $countries['name'];?></option>
               
                <?php } ?>
            </select>
            
           
            <small class="text-danger"><?php echo form_error('country'); ?></small>

        </div>
    </div>
</div><!-- end col-lg-4 -->
<div class="col-lg-4">
    <div class="input-box">
        <label class="label-text">City</label>
        <div class="form-group">
            <span class="la la-map-marker form-icon"></span>
            <input class="form-control" type="text" name="city" value="<?php if(($get_skill->city)=='0'){ echo set_value('city');}else{ echo $get_skill->city ;} ?>" placeholder="City">
            <small class="text-danger"><?php echo form_error('city'); ?></small>

        </div>
    </div>
</div><!-- end col-lg-4 -->
<div class="col-lg-4">
    <div class="input-box">
        <label class="label-text">Complete Address</label>
        <div class="form-group">
            <span class="la la-map-marker form-icon"></span>
            <input class="form-control" type="text" name="address" value="<?php if(($get_skill->address)=='0'){ echo set_value('address');}else{ echo $get_skill->address; } ?>" placeholder="Complete Address">
            <small class="text-danger"><?php echo form_error('address'); ?></small>

        </div>
    </div>
</div><!-- end col-lg-4 -->
<div class="col-lg-4">
    <div class="input-box">
        <label class="label-text">Find On Map</label>
        <div class="form-group">
            <span class="la la-map form-icon"></span>
            <input class="form-control" type="text" id="location" value="<?php if(($get_skill->map_address)=='0'){ echo set_value('map_address');}else{ echo $get_skill->map_address; } ?>" name="map_address" placeholder="Krakowskie Przedmiescie 12/1200-041 Warsaw">
            <small class="text-danger"><?php echo form_error('map_address'); ?></small>

        </div>
    </div>
</div><!-- end col-lg-4 -->
<div class="col-lg-4">
    <div class="input-box">
        <label class="label-text">Latitude</label>
        <div class="form-group">
            <span class="la la-map form-icon"></span>
            <input class="form-control" type="text" id="latitude" name="lat" value="<?php if(($get_skill->lat)!='0'){ echo $get_skill->lat; }?>" placeholder="" readonly="">
        </div>
    </div>
</div><!-- end col-lg-4 -->
<div class="col-lg-4">
    <div class="input-box">
        <label class="label-text">Longitude</label>
        <div class="form-group">
            <span class="la la-map form-icon"></span>
            <input class="form-control" type="text" value="<?php if(($get_skill->longitude)!='0'){ echo $get_skill->longitude; }?>" id="longitude" name="longitude" placeholder="" readonly="">
        </div>
    </div>
</div><!-- end col-lg-4 -->


</div><!-- end row -->

</div><!-- end contact-form-action -->
</div><!-- end billing-content -->
</div>
</div><!-- end user-form-action -->
</div><!-- end col-lg-12 -->


<div class="col-lg-12">
<div class="user-form-action">
<div class="billing-form-item">
<div class="billing-title-wrap">
<h3 class="widget-title pb-0">Add Skills and Language and Price </h3>
<div class="title-shape margin-top-10px"></div>
</div>

<div class="row mt-3">

<div class="col-lg-6">
<div class="input-box">
<label class="label-text">Skills</label>
<?php 
$sel_skil = "SELECT * FROM `selected_vend_sklill` WHERE vendor_id='$vendor_id'";
$sel_skil = $this->Model->getSqlData($sel_skil);

foreach($sel_skil as $get_val_skil){
?>
<span class="badge badge-info"><?php echo $get_val_skil['skill'];?></span>
<?php }?>
<div class="form-group user-chosen-select-container">
<select class="user-chosen-select" name="skills[]" multiple>
<option value="">Select</option>

<?php foreach ($skills_list as $skil_get){ ?>

<option value="<?php echo $skil_get['skill_name'];?>"><?php echo $skil_get['skill_name'];?></option>

<?php } ?>

</select>

</div>
</div>
</div><!-- end input-box -->

<div class="col-lg-6">

    <div class="input-box">

     <label class="label-text">Languages</label>
<?php 
$sel_lang = "SELECT * FROM `selected_vend_lang` WHERE vendor_id='$vendor_id'";
$sel_lang = $this->Model->getSqlData($sel_lang);

foreach($sel_lang as $get_val_lg){
?>
<span class="badge badge-info"><?php echo $get_val_lg['lang'];?></span>
<?php }?>

    <div class="form-group user-chosen-select-container">
<!-- selected="selected" -->
<select class="user-chosen-select" name="languag[]" multiple>

<option value="">Select</option>

<?php foreach ($languages_list as $languages_get){ ?>
<option value="<?php echo $languages_get['languages'];?>"><?php echo $languages_get['languages'];?></option>
<?php } ?>

</select>


</div>

</div><!-- end input-box -->

</div><!-- end col-lg-4 -->
<div class="col-lg-6">
    <div class="input-box">
        <label class="label-text">Fixed Price</label>
        <div class="form-group">
            <input class="form-control" type="text" name="price" value="<?php if(($get_skill->price)=='0'){ echo set_value('price');}else{ echo $get_skill->price ;} ?>" placeholder="Price">
            <small class="text-danger"><?php echo form_error('price'); ?></small>

        </div>
    </div>
</div><!-- end col-lg-4 -->



</div><!---ROW--->
</div>
</div><!-- end col-lg-12 -->
</div>

<div class="col-lg-12 ">
<div class="user-form-action">
<div class="billing-form-item">
<div class="billing-title-wrap">
<h3 class="widget-title pb-0">Bank Details</h3>
<div class="title-shape margin-top-10px"></div>
</div>

<div class="row mt-3 pb-3">

<div class="col-lg-6">
    <div class="input-box">
        <label class="label-text">Bank Name </label>
        <div class="form-group">
            <input class="form-control" type="text" name="bank_name" value="<?php if(($get_skill->bank_name)=='0'){ echo set_value('bank_name');}else{ echo $get_skill->bank_name ;} ?>" placeholder="Bank Name">
            <small class="text-danger"><?php echo form_error('bank_name'); ?></small>


        </div>
    </div>
</div>
<!-- end input-box -->

<div class="col-lg-6">
    <div class="input-box">
        <label class="label-text">Account Holder Name</label>
        <div class="form-group">
            <input class="form-control" type="text" name="acc_name" value="<?php if(($get_skill->acc_name)=='0'){ echo set_value('acc_name');}else{ echo $get_skill->acc_name ;} ?>" placeholder="Holder Name">
            <small class="text-danger"><?php echo form_error('acc_name'); ?></small>


        </div>
    </div>
</div><!-- end input-box -->

<div class="col-lg-6">
    <div class="input-box">
        <label class="label-text">Account Number</label>
        <div class="form-group">
            <input class="form-control" type="number" min="0" name="acc_no" value="<?php if(($get_skill->acc_no)=='0'){ echo set_value('acc_no');}else{ echo $get_skill->acc_no ;} ?>" placeholder="Account Number">
            <small class="text-danger"><?php echo form_error('acc_no'); ?></small>

        </div>
    </div>
</div>
<!-- end input-box -->

<div class="col-lg-6">
    <div class="input-box">
        <label class="label-text">IFSC Code</label>
        <div class="form-group">
            <input class="form-control" type="text" name="ifsc" value="<?php if(($get_skill->ifsc)=='0'){ echo set_value('ifsc');}else{ echo $get_skill->ifsc ;} ?>" placeholder="IFSC Code">
            <small class="text-danger"><?php echo form_error('ifsc'); ?></small>


        </div>
    </div>
</div>
<!-- end input-box -->


</div><!---ROW--->
</div>
</div><!-- end col-lg-12 -->
</div>

<div class="col-lg-12">
<div class="user-form-action">
<div class="billing-form-item">
<div class="billing-title-wrap">
<h3 class="widget-title pb-0">Education</h3>
<div class="title-shape margin-top-10px"></div>
</div>


<div class="control-group">

 <div class="controlsd">  
   <div class="entry input-group upload-input-group mb-4">  

<?php 
$sel_ed = "SELECT * FROM `education` WHERE vendor_id='$vendor_id'";
$sel_ed = $this->Model->getSqlData($sel_ed);

//for ($i=0; $i <count($sel_ed) ; $i++) { 
foreach($sel_ed as $get_val_ed){
if(!empty($get_val_ed)){
?>  

<!---row--->
<div class="row mt-3 mb-3 mx-3">
<div class="col-lg-6 mb-2 mt-2">
<div class="input-box">
<label class="label-text">Title of education</label>
<div class="form-group">
   <input class="form-control" type="text" name="edu_title[]" value="<?php echo $get_val_ed['edu_title']?>" placeholder="Type here">
 </div>
</div><!-- end input-box -->
</div><!-- end col-lg-4 -->

<div class="col-lg-6 mb-2 mt-2">
<div class="input-box">
<label class="label-text">Name School / College </label>
<div class="form-group">
   <input class="form-control" type="text" name="org_name[]" value="<?php echo $get_val_ed['org_name']?>" placeholder="Type here">
 </div>
</div><!-- end input-box -->
</div><!-- end col-lg-4 -->

<div class="col-lg-6 mb-2 mt-2">
<div class="input-box">
<label class="label-text">From</label>
<div class="form-group">
<input class="form-control" type="date" id="from" name="from_date[]" value="<?php echo $get_val_ed['from_date']?>">
 </div>
</div><!-- end input-box -->
</div><!-- end col-lg-4 -->


<div class="col-lg-6 mb-2 mt-2">
<div class="input-box">
<label class="label-text">To</label>
<div class="form-group">
  <input class="form-control" type="date" id="to" name="to_date[]" value="<?php echo $get_val_ed['to_date']?>">
 </div>
</div><!-- end input-box -->
</div><!-- end col-lg-4 -->

</div>
<!---/row--->
<div class="mx-auto pt-2 pb-3">
<a class="btn rounded btn-danger" href="<?php echo base_url();?>vendor/del_edu/<?php echo $get_val_ed['id']?>"><span class="la la-trash text-white"> </span></a>  
</div>

<?php } }?>
</div>
 </div>

<div class="controls">  
   <div class="entry input-group upload-input-group mb-4">

<!---row--->
<div class="row mt-3 mb-3 mx-3 shadow-ad">
<div class="col-lg-6 mb-2 mt-2">
<div class="input-box">
<label class="label-text">Title of education</label>
<div class="form-group">
   <input class="form-control" type="text" name="edu_title[]" value="" placeholder="Type here">
 </div>
</div><!-- end input-box -->
</div><!-- end col-lg-4 -->

<div class="col-lg-6 mb-2 mt-2">
<div class="input-box">
<label class="label-text">Name School / College </label>
<div class="form-group">
   <input class="form-control" type="text" name="org_name[]" value="" placeholder="Type here">
 </div>
</div><!-- end input-box -->
</div><!-- end col-lg-4 -->

<div class="col-lg-6 mb-2 mt-2">
<div class="input-box">
<label class="label-text">From</label>
<div class="form-group">
<input class="form-control" type="date" id="from" name="from_date[]" value="">
 </div>
</div><!-- end input-box -->
</div><!-- end col-lg-4 -->


<div class="col-lg-6 mb-2 mt-2">
<div class="input-box">
<label class="label-text">To</label>
<div class="form-group">
  <input class="form-control" type="date" id="to" name="to_date[]" value="">
 </div>
</div><!-- end input-box -->
</div><!-- end col-lg-4 -->

</div>
<!---/row--->


<div class="mx-auto pt-2 pb-3">
<button class="btn btn-success rounded btn-add" type="button">  
<i class="la la-plus"> </i>  
</button>  
</div> 

    
  </div>
</div>
</div>
 </div>

</div><!-- end user-form-action -->
</div><!-- end col-lg-12 -->



<div class="col-lg-12">
<div class="user-form-action">
<div class="billing-form-item">
<div class="billing-title-wrap">
<h3 class="widget-title pb-0">Work Experience</h3>
<div class="title-shape margin-top-10px"></div>
</div>

<div class="control-group">  
 <div class="controlssdasd">  
   <div class="entry input-group upload-input-group mb-4">  

<?php 
$sel_w = "SELECT * FROM `work_exp` WHERE vendor_id='$vendor_id'";
$sel_w = $this->Model->getSqlData($sel_w);

//for ($i=0; $i <count($sel_ed) ; $i++) { 
foreach($sel_w as $get_val_w){
if(!empty($get_val_w)){
?>  

<div class="row mt-3 mb-3 mx-3 shadow-ad">
<div class="col-lg-6 mb-2 mt-2">
<div class="input-box">
<label class="label-text">Title</label>
<div class="form-group">
   <input class="form-control" type="text" name="work_title[]" value="<?php echo $get_val_w['title'];?>" placeholder="Type here">
 </div>
</div><!-- end input-box -->
</div><!-- end col-lg-4 -->

<div class="col-lg-6 mb-2 mt-2">
<div class="input-box">
<label class="label-text">Organization</label>
<div class="form-group">
   <input class="form-control" type="text" name="work_org[]" value="<?php echo $get_val_w['org'];?>" placeholder="Type here">
 </div>
</div><!-- end input-box -->
</div><!-- end col-lg-4 -->

<div class="col-lg-6 mb-2 mt-2">
<div class="input-box">
<label class="label-text">From</label>
<div class="form-group">
<input class="form-control" type="date" id="" name="work_from[]" value="<?php echo $get_val_w['to_date'];?>">
 </div>
</div><!-- end input-box -->
</div><!-- end col-lg-4 -->


<div class="col-lg-6 mb-2 mt-2">
<div class="input-box">
<label class="label-text">To</label>
<div class="form-group">
  <input class="form-control" type="date" id="" name="work_to[]" value="<?php echo $get_val_w['from_date'];?>">
 </div>
</div><!-- end input-box -->
</div><!-- end col-lg-4 -->

</div><!---row--->
<div class="mx-auto pt-2 pb-3">
<a class="btn rounded btn-danger" href="<?php echo base_url();?>vendor/del_work/<?php echo $get_val_w['id']?>"><span class="la la-trash text-white"> </span></a>  
</div>

<?php }} ?>

</div>
</div>
<div class="controlss">  
   <div class="entry input-group upload-input-group mb-4"> 
   <div class="row mt-3 mb-3 mx-3 shadow-ad">
<div class="col-lg-6 mb-2 mt-2">
<div class="input-box">
<label class="label-text">Title</label>
<div class="form-group">
   <input class="form-control" type="text" name="work_title[]" value="" placeholder="Type here">
 </div>
</div><!-- end input-box -->
</div><!-- end col-lg-4 -->

<div class="col-lg-6 mb-2 mt-2">
<div class="input-box">
<label class="label-text">Organization</label>
<div class="form-group">
   <input class="form-control" type="text" name="work_org[]" value="" placeholder="Type here">
 </div>
</div><!-- end input-box -->
</div><!-- end col-lg-4 -->

<div class="col-lg-6 mb-2 mt-2">
<div class="input-box">
<label class="label-text">From</label>
<div class="form-group">
<input class="form-control" type="date" id="" name="work_from[]" value="">
 </div>
</div><!-- end input-box -->
</div><!-- end col-lg-4 -->


<div class="col-lg-6 mb-2 mt-2">
<div class="input-box">
<label class="label-text">To</label>
<div class="form-group">
  <input class="form-control" type="date" id="" name="work_to[]" value="">
 </div>
</div><!-- end input-box -->
</div><!-- end col-lg-4 -->

</div><!---row---> 

     
      <div class="mx-auto pt-2 pb-3">
      <button class="btn btn-success rounded add-btn" type="button">  

        <i class="la la-plus"> </i>  

      </button>  

    </div>  
  </div>
</div>
</div>



</div>
</div><!-- end user-form-action -->
</div><!-- end col-lg-12 -->




<div class="col-lg-12 ">
<div class="user-form-action">
<div class="billing-form-item">
<div class="billing-title-wrap">
<h3 class="widget-title pb-0">Upload Certificates</h3>
<div class="title-shape margin-top-10px"></div>

<div class="view_certificate mt-2 mb-2"></div>
<div class="control-group mt-3 mb-2" id="">  

  <div class="controlp ">  

    <div class="entry input-group upload-input-group mb-4 pt-3 pb-2">  

      <input class="form-control w-100" type="file" name="files[]" accept="image/png,image/jpg,image/jpeg">  

      <button class="btn btn-success rounded btn-cert" type="button">  

        <i class="la la-plus"> </i>  

      </button>  

    </div>  

  </div>

</div>

</div>

<!-- <div class="row mt-3 pb-3">

<div class="col-lg-12">
    <div class="field" align="left">
  
  <input class="w-100" type="file" id="files" name="files[]" accept="image/x-png,image/gif,image/jpeg"  multiple /><br>

</div>
</div>
</div> -->
<!---row---->


</div><!----12------>







<div class="col-lg-12">
<div class="btn-box">
<button class="theme-btn border-0" type="submit" name="submit">Update Changes</button>
</div>
</div>
</form>
</div><!-- end row -->
<div class="row">
<div class="col-lg-12">
<div class="copy-right margin-top-30px padding-top-20px padding-bottom-20px">
<p class="copy__desc">
Copyright &copy; 2021- 2025 Talk2 An Expert all rights reserved| Designed &amp; Developed By
<a href="https://www.developerbazaar.com"><span style="color:red;"> Developer </span><span style="color:limegreen;"> Bazaar</span> <span style="color:red;"> Technologies</span></a>
</p>

</div><!-- end copy-right -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- end container-fluid -->
</div>
</section><!-- end dashboard-area -->
<!-- ================================
END DASHBOARD AREA
================================= -->
<!-- start back-to-top -->
<div id="back-to-top">
<i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->
<!-- Template JS Files -->

<?php include(APPPATH.'views/home/include/js.php'); ?>


<!-- Google Maps JavaScript library -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyB-l9hZxAvJPDqAHWufmnDgyHVInQJs6Qs&latlng"></script>

<script>
var searchInput = 'location';

$(document).ready(function () {
var autocomplete;
autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
types: ['geocode'],
});

google.maps.event.addListener(autocomplete, 'place_changed', function (){
var near_place = autocomplete.getPlace();
document.getElementById('latitude').value = near_place.geometry.location.lat();
document.getElementById('longitude').value = near_place.geometry.location.lng();
});
});

$(document).on('change', '#'+searchInput, function () {
document.getElementById('latitude').value = '';
document.getElementById('longitude').value = '';
});
</script>

<script type="text/javascript">
$(document).on('click','.a',function(){
  $('.append-elements').append('<button class="b">Remove</button>');
});
$(document).on('click','input[file]',function(){
  $(this).remove();
  $('#files').val('');
});
</script>


<!---== 1 ==---->
<script>
// Write JavaScript here 
// Toggle field step form
$(function() {

  $(document).on('click', '.btn-add', function(e) {

    e.preventDefault();

    var controlForm = $('.controls:first'),

        currentEntry = $(this).parents('.entry:first'),

        newEntry = $(currentEntry.clone()).appendTo(controlForm);

    newEntry.find('input').val('');

    controlForm.find('.entry:not(:last) .btn-add')

      .removeClass('btn-add').addClass('btn-remove')

      .removeClass('btn-success').addClass('btn-danger')

      .html('<span class="la la-trash text-white"> </span>');

  }).on('click', '.btn-remove', function(e) {

    $(this).parents('.entry:first').remove();

    e.preventDefault();

    return false;

  });

});

</script>


<!---== 2 ==---->
<script >
// Write JavaScript here 
// Toggle field step form
$(function() {

  $(document).on('click', '.add-btn', function(e) {

    e.preventDefault();

    var controlForm = $('.controlss:first'),

        currentEntry = $(this).parents('.entry:first'),

        newEntry = $(currentEntry.clone()).appendTo(controlForm);

    newEntry.find('input').val('');

    controlForm.find('.entry:not(:last) .add-btn')

      .removeClass('add-btn').addClass('btn-remove')

      .removeClass('btn-success').addClass('btn-danger')

      .html('<span class="la la-trash text-white"> </span>');

  }).on('click', '.btn-remove', function(e) {

    $(this).parents('.entry:first').remove();

    e.preventDefault();

    return false;

  });

});

</script>
<!---== 2 ==---->

<script type="text/javascript">

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
          
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/
          
        });
        fileReader.readAsDataURL(f);
      }
      console.log(files);
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>
<script>
    // Write JavaScript here 
// Toggle field step form
$(function() {

  $(document).on('click', '.btn-cert', function(e) {

    e.preventDefault();

    var controlForm = $('.controlp:first'),

        currentEntry = $(this).parents('.entry:first'),

        newEntry = $(currentEntry.clone()).appendTo(controlForm);

    newEntry.find('input').val('');

    controlForm.find('.entry:not(:last) .btn-cert')

      .removeClass('btn-cert').addClass('btn-remove')

      .removeClass('btn-success').addClass('btn-danger')

      .html('<span class="la la-trash text-white"> </span>');

  }).on('click', '.btn-remove', function(e) {

    $(this).parents('.entry:first').remove();

    e.preventDefault();

    return false;

  });

});
 
function delete_cert(id) {
    if (confirm("Are you sure?")) {
        $.ajax({
            url: '<?php echo base_url();?>vendor/del_certificate',
            type: 'post',
            data: {id:id},
            success: function () {
            //alert('ajax success');
            
            },
            error: function () {
            //alert('ajax failure');
            }
        });
    } else {
        //alert(id + " not deleted");
    }
}

</script>

<script> 
  $(document).ready(function(){

    setInterval(function(){
      $('.view_certificate').load('<?php echo base_url()?>vendor/show_certificate')

    }      
                ,1800);
 
  });
</script> 

</body>
</html>