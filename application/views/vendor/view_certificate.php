<ul class="img-upload-view">

<?php 
$vendor_id   = $this->session->userdata('vendor_id');

$certificates = "SELECT * FROM `uploads_certificate` WHERE vendor_id='$vendor_id'";
$certificates = $this->Model->getSqlData($certificates);
foreach($certificates as $cert_val){
if(!empty($cert_val)){
?>  

<li class="pl-2 float-left img-list">

<div>
<img src="<?php echo base_url();?>uploads/images/certificate/<?php echo $cert_val['files'];?>" width="100px" height="100px;">
</div>
<div>
<button type="button" class="trash-btn" onclick="delete_cert(<?php echo $cert_val['id'];?>)"><i class="la la-trash"></i> Remove</button>
</div>
</li>

<?php } } ?>



</ul>




