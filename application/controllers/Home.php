<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

function __construct(){

parent::__construct();

$this->load->library('session');
$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');

date_default_timezone_set('Asia/Kolkata');
require_once APPPATH.'third_party/mailer/class.phpmailer.php';

$this->load->database();

$this->load->model('Model');

}



function index()

{

//get category
$data['cat']       = $this->Model->getAlData('categories');
$data_limit        = "SELECT * FROM categories ORDER BY RAND()LIMIT 6";
$data['cat_limit'] = $this->Model->getSqlData( $data_limit);
$data['country_list']   = $this->Model->getAllData('country');

//get vendor 
$vendors       = "SELECT * FROM vendor_skill WHERE status='1' AND allow='Yes' ORDER BY id DESC LIMIT 6";
$data['get_vend'] = $this->Model->getSqlData($vendors);

$this->load->view('home/index', $data);

}



function about()

{

$this->load->view('home/about');

}



function expert()

{

$getall_vend = "SELECT * FROM `vendor_skill` WHERE status='1' AND allow='Yes' ORDER BY id DESC";
$data['get_vend']       = $this->Model->getSqlData($getall_vend);
$data['getall_cat']     = $this->Model->getAllData('categories');
$data['country_list']   = $this->Model->getAllData('country');
$data['getall_skill']   = $this->Model->getAllData('skills');	    

$this->load->view('home/all-category',$data);


}

//filter start here
function expert_newest()
{

$getall_vend = "SELECT * FROM `vendor_skill` WHERE status='1' AND allow='Yes' ORDER BY id DESC";
$data['get_vend']       = $this->Model->getSqlData($getall_vend);
$data['getall_cat']     = $this->Model->getAllData('categories');
$data['country_list']   = $this->Model->getAllData('country');
$data['getall_skill']   = $this->Model->getAllData('skills');     
      
$this->load->view('home/all-category',$data);


}

function expert_old()
{

$getall_vend = "SELECT * FROM `vendor_skill` WHERE status='1' AND allow='Yes' ORDER BY id ASC";
$data['get_vend']       = $this->Model->getSqlData($getall_vend);
$data['getall_cat']     = $this->Model->getAllData('categories');
$data['country_list']   = $this->Model->getAllData('country');
$data['getall_skill']   = $this->Model->getAllData('skills');     
      
$this->load->view('home/all-category',$data);


}

function expert_random()
{
$getall_vend = "SELECT * FROM `vendor_skill` WHERE status='1' AND allow='Yes' ORDER BY RAND()";
$data['get_vend']       = $this->Model->getSqlData($getall_vend);
$data['getall_cat']     = $this->Model->getAllData('categories');
$data['country_list']   = $this->Model->getAllData('country');
$data['getall_skill']   = $this->Model->getAllData('skills');     
      
$this->load->view('home/all-category',$data);

}

function keywords()
{
  $vname = $this->input->post('vname');

  $getall_vend = "SELECT * FROM `vendor_skill` WHERE fullname LIKE '$vname%'  OR map_address LIKE '$vname%' OR price LIKE '$vname%' OR about LIKE '$vname%' AND status='1' AND allow ='Yes'";

  $data['get_vend']       = $this->Model->getSqlData($getall_vend);
  $data['getall_cat']     = $this->Model->getAllData('categories');
  $data['country_list']   = $this->Model->getAllData('country');
  $data['getall_skill']   = $this->Model->getAllData('skills');     
      
  $this->load->view('home/all-category',$data);
}

function homesearch()
{
  $country = $this->input->post('country');
  $cat     = $this->input->post('cat');

  $getall_vend = "SELECT * FROM `vendor_skill` WHERE country='$country' AND category='$cat' AND status='1' AND allow='Yes'";

  $data['get_vend']       = $this->Model->getSqlData($getall_vend);
  $data['getall_cat']     = $this->Model->getAllData('categories');
  $data['country_list']   = $this->Model->getAllData('country');
  $data['getall_skill']   = $this->Model->getAllData('skills');     
      
  $this->load->view('home/all-category',$data);
}

function filterbycat(){

  $cat = $this->uri->segment(3);

  $getall_vend = "SELECT * FROM `vendor_skill` WHERE category='$cat' AND status='1' AND allow='Yes'";

  $data['get_vend']       = $this->Model->getSqlData($getall_vend);
  $data['getall_cat']     = $this->Model->getAllData('categories');
  $data['country_list']   = $this->Model->getAllData('country');
  $data['getall_skill']   = $this->Model->getAllData('skills');     
      
  $this->load->view('home/all-category',$data);

}

function filterbycountry()
{

  $country = $this->uri->segment(3);

  $getall_vend = "SELECT * FROM `vendor_skill` WHERE country='$country' AND status='1' AND allow='Yes'";

  $data['get_vend']       = $this->Model->getSqlData($getall_vend);
  $data['getall_cat']     = $this->Model->getAllData('categories');
  $data['country_list']   = $this->Model->getAllData('country');
  $data['getall_skill']   = $this->Model->getAllData('skills');     
      
  $this->load->view('home/all-category',$data);

}

function filterbyskill()
{
  
  $skill = $this->input->post('skill');
 
  $this->db->select('*');
  $this->db->where_in('skill', $skill);
  $query = $this->db->get('selected_vend_sklill');

  $res = $query->result(); 
  //$res1 = $query->result_array(); 
  
   foreach($res as $res_val){
   
   $vid     = $res_val->vendor_id;

   

  
  $getall_vend = "SELECT * FROM `vendor_skill` WHERE vendor_id='$vid' AND status='1' AND allow='Yes'";
  
  $data['get_vend']       = $this->Model->getSqlData($getall_vend);
  }
  $data['getall_cat']     = $this->Model->getAllData('categories');
  $data['country_list']   = $this->Model->getAllData('country');
  $data['getall_skill']   = $this->Model->getAllData('skills');     
  $this->load->view('home/all-category',$data);
  
  
}


function blog()

{

$this->load->view('home/blog');

}



function support()

{

$this->load->view('home/contact');

}
function expert_details()

{
$vid      = $this->uri->segment(3);
// add view count
$ip    = $this->input->ip_address();
$chk_ip= $this->Model->CountWhereRecord('profile_views',array('ip'=>$ip,'vid'=>$vid));

if($chk_ip =='0'){
$adview = array('date'=>date('Y-m-d H:i:s'),'ip'=>$ip,'view'=>1,'vid'=>$vid);
$this->Model->insertData('profile_views', $adview);
}


$v_cert = "SELECT * FROM `uploads_certificate` WHERE vendor_id='$vid'";
$data['certificate'] = $this->Model->getSqlData($v_cert);


$data['vdetails'] = $this->Model->getData('vendor_skill',array('vendor_id' => $vid,'status' =>1));


$this->load->view('home/expert_details',$data);

}



function checkout()

{

$vid   = $this->uri->segment(3);
    
 if($this->session->userdata('user_email') =='')
 {
  
  $this->session->set_userdata('vcheckout',$vid);

  redirect('user');
 
 } else{


$data['vname'] = $this->Model->getData('vendor_skill',array('vendor_id' => $vid));

$this->load->view('home/checkout',$data);
 
 }
 
}

public function contact_us()
{
  $this->form_validation->set_rules('fname', 'Full Name', 'required|min_length[5]|max_length[20]');
  $this->form_validation->set_rules('email', 'Email', 'required');
  $this->form_validation->set_rules('phone', 'Phone Number', 'required');
  $this->form_validation->set_rules('subject', 'Subject', 'required');
  $this->form_validation->set_rules('message', 'Message', 'required');
 
  if ($this->form_validation->run() != FALSE){
    
    $msg_id = uniqid();
        
    $data = array( 
                  'msg_id'       => $msg_id,
                  'fname'        => $this->input->post('fname'),
                  'email'        => $this->input->post('email'), 
                  'phone'        => $this->input->post('phone'), 
                  'subject'      => $this->input->post('subject'), 
                  'message'      => $this->input->post('message'), 
                  'date'         => date('Y-m-d H:i:s')
                  );  
        
    $this->Model->insertData('contact_us', $data);
    $data['mail_data'] = $data;
    //mail function 
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port     = 587;  
    $mail->Username = "aqeeqecommerce@gmail.com";
    $mail->Password = "arpit@123";
    $mail->Host     = "smtp.gmail.com";
    $mail->Mailer   = "smtp";
    $mail->SetFrom("db.rahulpatwari@gmail.com",    "Talk2 an expert");
    $mail->AddReplyTo("db.rahulpatwari@gmail.com", "Talk2 an expert");
    $mail->AddAddress($this->input->post('email'));
    $mail->Subject = "Contact Form Enquiry";
    
    //Email content
    $content = $this->load->view('mail/inquiry',$data,true);
    $mail->MsgHTML($content);
    $mail->IsHTML(true);
    $mail->Send();
    //end
    $this->session->set_flashdata('contact','Thank you for contact us,we will get back to you Shortly!');
    redirect('home/support');
   }else{

        $this->load->view('home/contact');
   } 
}

function invoice($order_id){
 $paypalInfo = $this->input->post(); 
 
 $user_id =     $paypalInfo['custom'];
 $vendor_id =     $paypalInfo['item_number'];
 $price =     $paypalInfo['mc_gross'];
 $payment_date =     $paypalInfo['payment_date'];
 $payment_status =      $paypalInfo['payment_status']; 
 
 //$user_id    = $this->session->userdata('user_id');
 $udata = $this->Model->getData('user', array('user_id'=>$user_id));
 $user_fname = $udata->fname;
 $user_email = $udata->email;
 //$user_email = $this->session->userdata('user_email');
// $user_fname = $this->session->userdata('user_fname');
if(!empty($user_id) && !empty($vendor_id) && !empty($order_id) && !empty($price) ){
$ad_trans = array( 
'user_id'       => $user_id,
'vendor_id'     => $vendor_id,
'order_id'      => $order_id, 
'price'         => $price, 
'status'        => 1,  
'date'          => date('Y-m-d H:i:s'),
); 

 //mail function 
      //$list_email = array($user_email,$vendor_email);
      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->SMTPDebug = 0;
      $mail->SMTPAuth = TRUE;
      $mail->SMTPSecure = "tls";
      $mail->Port     = 587;  
      $mail->Username = "aqeeqecommerce@gmail.com";
      $mail->Password = "arpit@123";
      $mail->Host     = "smtp.gmail.com";
      $mail->Mailer   = "smtp";
      $mail->SetFrom("db.rahulpatwari@gmail.com",    "Talk2 an expert");
      $mail->AddReplyTo("db.rahulpatwari@gmail.com", "Talk2 an expert");
      $mail->AddAddress($user_email);
      $mail->Subject = "Order Successfully";
      
      $data['mail_data'] = array(
                            'user_fname' => $user_fname,
                            'date'       => date('Y-m-d H:i:s'),
                            'order_id'   => $order_id
                            );
      
      //Email content
      $content = $this->load->view('mail/order_mail',$data,true);
      $mail->MsgHTML($content);
      $mail->IsHTML(true);
      $mail->Send();
      //end
      
      $this->Model->insertData('transaction', $ad_trans);
      $get_odata = $this->Model->getData('transaction',array('order_id' => $order_id));  
      $v_id = $get_odata->vendor_id;
    
      $v_odata = $this->Model->getData('vendor',array('vendor_id' => $v_id));  
      $vnd_email = $v_odata->email;
      $vnd_fname = $v_odata->fname;

    //for vendor mail
    $data['mail_data'] = array(
    'vfname'     =>$vnd_fname,
    'user_fname' =>$user_fname,
    'date'       =>date('Y-m-d H:i:s'),
    'order_id'   =>$order_id
       );

     //$list_email = array($user_email,$vendor_email);
      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->SMTPDebug = 0;
      $mail->SMTPAuth = TRUE;
      $mail->SMTPSecure = "tls";
      $mail->Port     = 587;  
      $mail->Username = "aqeeqecommerce@gmail.com";
      $mail->Password = "arpit@123";
      $mail->Host     = "smtp.gmail.com";
      $mail->Mailer   = "smtp";
      $mail->SetFrom("db.rahulpatwari@gmail.com",    "Talk2 an expert");
      $mail->AddReplyTo("db.rahulpatwari@gmail.com", "Talk2 an expert");
      $mail->AddAddress($vnd_email);
      $mail->Subject = "Order Successfully";
      
      
      //Email content
      $content = $this->load->view('mail/vendor_order',$data,true);
      $mail->MsgHTML($content);
      $mail->IsHTML(true);
      $mail->Send();
      //end

     //email code

 //for notification
      $notify_data = array( 
                    'date'       => date('Y-m-d H:i:s'),
                    'title'      => "$user_fname is purchase Talk 2 Service",
                    'vid'        => $vendor_id, 
                    'uid'        => $user_id 
                    );  
 
      $this->Model->insertData('notification',$notify_data);
      //end notification

      //$this->session->unset_userdata('vcheckout');
}


 
 
 /////////////////////////////
 // $user_id    = $this->session->userdata('user_id');
//  $user_email = $this->session->userdata('user_email');
 // $user_fname = $this->session->userdata('user_fname');





$user_detail = "SELECT * FROM `user` where user_id='$user_id'";
$data['user_detail'] = $this->Model->getSqlData($user_detail);

$get_trans = "SELECT * FROM `transaction` where order_id='$order_id'";
$data['get_trans'] = $this->Model->getSqlData($get_trans);
$this->load->view('home/invoice', $data);   

}

function thankyou(){
$this->load->view('home/thanks');   
}

function payment(){

$vendor_id   = $this->input->post('vendor_id');

$this->form_validation->set_rules('radio', 'Paypal', 'required');
$this->form_validation->set_rules('terms', 'Privacy Policy', 'required');
  
  $user_id    = $this->session->userdata('user_id');
  $user_email = $this->session->userdata('user_email');
  $user_fname = $this->session->userdata('user_fname');
  $order_id  = uniqid();

  if ($this->form_validation->run() != FALSE){
 
    $ad_trans = array( 
                    'user_id'       => $user_id,
                    'vendor_id'     => $vendor_id,
                    'order_id'      => $order_id, 
                    'price'         => $this->input->post('price'), 
                    'status'        => 1,  
                    'date'          => date('Y-m-d H:i:s')
                    );  

      //mail function 
      //$list_email = array($user_email,$vendor_email);
      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->SMTPDebug = 0;
      $mail->SMTPAuth = TRUE;
      $mail->SMTPSecure = "tls";
      $mail->Port     = 587;  
      $mail->Username = "aqeeqecommerce@gmail.com";
      $mail->Password = "arpit@123";
      $mail->Host     = "smtp.gmail.com";
      $mail->Mailer   = "smtp";
      $mail->SetFrom("db.rahulpatwari@gmail.com",    "Talk2 an expert");
      $mail->AddReplyTo("db.rahulpatwari@gmail.com", "Talk2 an expert");
      $mail->AddAddress($user_email,$vendor_email);
      $mail->Subject = "Order Successfully";
      
      $data['mail_data'] = array(
                            'user_fname' => $user_fname,
                            'date'       => date('Y-m-d H:i:s'),
                            'order_id'   => $order_id
                            );
      
      //Email content
      $content = $this->load->view('mail/order_mail',$data,true);
      $mail->MsgHTML($content);
      $mail->IsHTML(true);
      $mail->Send();
      //end
      
      $this->Model->insertData('transaction', $ad_trans);

      //for notification
      $notify_data = array( 
                    'date'       => date('Y-m-d H:i:s'),
                    'title'      => "$user_fname is purchase Talk 2 Service",
                    'vid'        => $vendor_id, 
                    'uid'        => $user_id 
                    );  
 
       $this->Model->insertData('notification',$notify_data);
      //end notification

      $this->session->unset_userdata('vcheckout');

   redirect('home/invoice/'.$order_id);
}else{
  
  
  $data['vname'] = $this->Model->getData('vendor_skill',array('vendor_id' => $vendor_id));

  $this->load->view('home/checkout',$data);    
}
 
}


function faq()

{

$this->load->view('home/faq');

}

function privacy()

{

$this->load->view('home/privacy');

}


function terms()

{

$this->load->view('home/terms');

}

function contact()

{

$this->load->view('home/contact');

}






}

