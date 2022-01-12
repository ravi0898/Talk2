<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

public function __construct() 
{
parent::__construct(); 

$this->load->database();
$this->load->model('Model');
$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');
$this->load->library('session');
date_default_timezone_set('Asia/Kolkata');
require_once APPPATH.'third_party/mailer/class.phpmailer.php';


}

public function index()
{  

$this->load->view('user/login');

}

public function transaction()
{ 

$user_id   = $this->session->userdata('user_id');
$transaction = "SELECT * FROM `transaction` WHERE user_id='$user_id' AND status='1' ORDER BY id DESC";
$data['trans'] = $this->Model->getSqlData($transaction);
$this->load->view('user/transactions',$data); 
}

public function notification()
{ 

$user_id   = $this->session->userdata('user_id');

$upd_status =  array('status'=>'seen');
$this->Model->updateData('notification',$upd_status,array('uid'=>$user_id));

$notify    = "SELECT * FROM `notification` WHERE uid='$user_id'";
$data['notifies'] = $this->Model->getSqlData($notify);
$this->load->view('user/notify',$data); 
}

public function user_service()
{  

$user_id   = $this->session->userdata('user_id');

$sql = "SELECT * FROM `transaction` WHERE user_id='$user_id' AND status='1' ORDER BY id ASC";
$data['get_service'] = $this->Model->getSqlData($sql);

$this->load->view('user/user-services',$data);

}

function create_chat()
{
//user session id
$user_id  = $this->session->userdata('user_id');

$chat_id   = uniqid();

//get vendor id here
$vendor_id  = $this->uri->segment(3);
$o_id       = $this->uri->segment(4);


$chat_create = $this->Model->CountWhereRecord('chat_room',array('user_id'=>$user_id,'creator'=>$vendor_id,'order_id'=>$o_id));
$users  = $user_id.",".$vendor_id ;

if($chat_create > 0){

$get_chat_id = $this->Model->getData('chat_room', array('user_id'=>$user_id,'creator'=>$vendor_id,'status'=>1));

$chaid = $get_chat_id->chat_id;

 redirect('user/chat/'.$chaid);
   
}else{

    $add_chat = array( 
                    'date'          => date('Y-m-d H:i:s'),
                    'user_id'       => $user_id,
                    'chat_id'       => $chat_id,
                    'creator'       => $vendor_id,
                    'order_id'      => $o_id,
                    'users'         => $users 
                    );  
        
    $this->Model->insertData('chat_room', $add_chat);
    redirect('user/chat/'.$chat_id);
}

}

function chat(){

$user_id = $this->session->userdata('user_id');

$chat_id = $this->uri->segment(3);

if(!empty($chat_id)){

$data['chatview'] = $this->Model->getData('chat_room', array('chat_id'=>$chat_id,'status'=>1));

$sql = "SELECT * FROM `chat` where chat_id='$chat_id' AND status='1' ORDER BY id ASC";
$data['chat'] = $this->Model->getSqlData($sql);


$chtroom = "SELECT * FROM `chat_room` WHERE user_id='$user_id' AND status='1' ORDER BY id ASC";
$data['chats_list'] = $this->Model->getSqlData($chtroom);


$this->load->view('user/chat',$data);

}else{

$this->load->view('user/chat');

}

}

function del_chatconversation()
{

 $chat_id       = $this->uri->segment(3);
 $status        = array('status'=>0);
 $this->Model->updateData('chat_room', $status,array('chat_id'=>$chat_id));
 //$this->session->set_flashdata('reg_succ','Account is Successfully Verified!');
 redirect('vendor/chat');

}

 function do_chat()
 {
  
  $user_id = $this->session->userdata('user_id');
  if(isset($_POST)){

    //if(!empty($_FILES['files']['name'])){
    $fname = $_FILES['files']['name'];

    $config['upload_path'] = 'uploads/chat/';
    $config['allowed_types'] = 'jpg|jpeg|png|gif';
    $config['file_name'] = $_FILES['files']['name'];


    //Load upload library and initialize here configuration
    $this->load->library('upload',$config);
    $this->upload->initialize($config);

    if($this->upload->do_upload('files')){
    $uploadData = $this->upload->data();
    $files = $uploadData['file_name'];
    
    $chat_msg2 =  array( 
                    'date'          => date('Y-m-d H:i:s'),
                    'msg'           => $this->input->post('msg_text'),
                    'files'         => $files,
                    'uid'           => $user_id, 
                    'chat_id'       => $this->input->post('chat_id'),
                    'sender_id'     => $user_id
                    ); 
    } 

    $chat_msg = array( 
                    'date'          => date('Y-m-d H:i:s'),
                    'msg'           => $this->input->post('msg_text'),
                    'chat_id'       => $this->input->post('chat_id'),
                    'sender_id'     => $user_id,
                    'uid'           => $user_id 

                    );  
        

    

   if(empty($fname)){

    $this->Model->insertData('chat', $chat_msg);

    $response = array(
        "status" => "success",
        "response" => "Success!"
         );


   }else{

    $this->Model->insertData('chat', $chat_msg2);

    $response = array(
        "status" => "success",
        "response" => "Success!"
         );



   }
    

  
    
   }
    else{
            
            $response = array(
            "status" => "error",
            "response" => "Access Denied!"
             );
           
         }

    echo json_encode($response);
 }



function show_load_chat_fun()
 {

  $chat_id = $this->uri->segment(3);
  $sql     = "SELECT * FROM `chat` WHERE chat_id='$chat_id' AND status='1' ORDER BY id ASC";
  $data['chat'] = $this->Model->getSqlData($sql);
  
  $this->load->view('user/show_load_chat',$data);



 }

function check_login()
{
if($this->session->userdata('user_email') =='')
{
redirect('user');
}
}

function user_signup()
{
$this->form_validation->set_rules('fname', 'First Name', 'required|min_length[5]|max_length[12]');
$this->form_validation->set_rules('lname', 'Last Name', 'required');
$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|matches[cpassword]');
$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|min_length[5]');
$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
$this->form_validation->set_rules('terms', 'Terms & Condition', 'required');

if ($this->form_validation->run() != FALSE){
$user_id = uniqid();

$data = array( 
'user_id'         => $user_id,
'fname'           => $this->input->post('fname'),
'lname'           => $this->input->post('lname'), 
'email'           => $this->input->post('email'), 
'password'        => md5($this->input->post('password')),  
'date'            => date('Y-m-d H:i:s')
);  

$this->Model->insertData('user', $data);

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
$mail->Subject = "Account Verification";


$data['getuser'] = $this->Model->getData('user', array('user_id'=>$user_id));
//Email content
$content = $this->load->view('mail/user_reg',$data,true);
$mail->MsgHTML($content);
$mail->IsHTML(true);
$mail->Send();
//end
$this->session->set_flashdata('reg_succ','Register successfully! Please Verify by Mail!');
redirect('user');
}else{
$this->load->view('user/login');
} 

}

function loginUser()
{
$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
//$this->form_validation->set_rules('terms', 'Terms & Condition', 'required');
if ($this->form_validation->run() != FALSE){

$email    = $this->input->post('email');
$password = md5($this->input->post('password'));

$chklogin = $this->Model->CountWhereRecord('user',array('email'=>$email,'password'=>$password,'status'=>1));

if($chklogin > 0){

$user = $this->Model->getData('user',array('email' => $email,'password'=>$password));
$uid = $user->user_id;

$sess_array = array(
'user_id'         => $user->user_id,
'user_fname'      => $user->fname,
'user_lname'      => $user->lname,
'user_email'      => $user->email
);

$activity = array(
              
               'last_activity'       =>'Online'

                  );
$this->Model->updateData('user', $activity,array('user_id'=>$uid));

$this->session->set_userdata($sess_array);
$check_vend_checkout =  $this->session->userdata('vcheckout');
if(!empty($check_vend_checkout)){

//redirect('user/dashboard');
$data['vname'] = $this->Model->getData('vendor_skill',array('vendor_id' => $check_vend_checkout));

$this->load->view('home/checkout',$data);

}else{

redirect('user/dashboard');

}
}else{
$this->session->set_flashdata('login_err','Your Email or Password does not match!');
redirect('user');
}
}else{
$this->load->view('user/login');
} 

}

function login_with_gmail()
{

require_once APPPATH.'third_party/src/Google_Client.php';
require_once APPPATH.'third_party/src/contrib/Google_Oauth2Service.php';

$clientId = '619729182648-cdj4gm7h9rauacqlnlf9dngocsdrjkht.apps.googleusercontent.com'; //Google client ID
$clientSecret = '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'; 
//Google client secret

$redirectURL = base_url() .'user/login_with_gmail';


//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('talk2 user login');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);
$google_oauthV2 = new Google_Oauth2Service($gClient);

if(isset($_GET['code']))
{
$gClient->authenticate($_GET['code']);
$_SESSION['token'] = $gClient->getAccessToken();
header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) 
{
$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {

$userProfile   = $google_oauthV2->userinfo->get();

$gmail_id      = $userProfile['id'];
$gmail_email   = $userProfile['email'];
$gmail_fname   = $userProfile['given_name'];
$gmail_lname   = $userProfile['family_name'];
$gmail_profile = $userProfile['picture'];


// checking user already exists or not

$already = $this->Model->CountWhereRecord('user',array('google_id'=>$gmail_id));

if($already > 0){

$get_user = $this->Model->getData('user',array('google_id'=>$gmail_id));
$guid = $get_user->user_id;

$sess_array = array(
'user_id'         => $get_user->user_id,
'user_fname'      => $get_user->fname,
'user_lname'      => $get_user->lname,
'user_email'      => $get_user->email
);

$this->session->set_userdata($sess_array);
//$this->session->set_flashdata('reg_succ','Login successfully!');
$activity = array(
              
               'last_activity'       =>'Online'

                  );
$this->Model->updateData('user', $activity,array('user_id'=>$guid));


redirect('user/dashboard');
exit;

}else{

$uniqid        = uniqid();
$verify_status = "1";

$data = array( 
'user_id'         => $uniqid,
'fname'           => $gmail_fname,
'lname'           => $gmail_lname, 
'email'           => $gmail_email, 
'status'          => $verify_status,
'google_id'       => $gmail_id,
'last_activity'   => 'Online',
'date'            => date('Y-m-d H:i:s')
);  


$this->Model->insertData('user', $data);

$sess_array = array(
'user_id'       => $uniqid,
'user_fname'      => $gmail_fname,
'user_lname'      => $gmail_lname,
'user_email'      => $gmail_email
);

$this->session->set_userdata($sess_array);

redirect('user/dashboard');
exit;
}


} 
else 
{
$url = $gClient->createAuthUrl();
header("Location: $url");
exit;
}


}


function verify_account()
{
$user_id = $this->uri->segment(3);

if(isset($user_id)){

$status = array( 

'status' => 1 

);  

$this->Model->updateData('user', $status,array('user_id'=>$user_id));
$this->session->set_flashdata('reg_succ','Account is Successfully Verified!');
redirect('user');


}

}

function dashboard()
{
$this->check_login();
//$data['is_sub'] = $this->Model->getData('newsletter',array('subscriber_id' =>$uid));
//$data['title'] = 'Talk2 Dasboard';  
 $user_id     = $this->session->userdata('user_id');
 $data['alert'] = $this->Model->getData('user',array('user_id' =>$user_id));
$this->load->view('user/user-dashboard', $data);
}

function logout()
{   

$user_id  = $this->session->userdata('user_id');
$activity = array(
            'last_activity'       =>'Offline'
            );
$this->Model->updateData('user', $activity,array('user_id'=>$user_id));

$this->session->unset_userdata('user_id');
$this->session->unset_userdata('user_fname');
$this->session->unset_userdata('user_lname');
$this->session->unset_userdata('user_email');
//$this->session->sess_destroy();
redirect('user');

}

function forget(){

$this->load->view('user/forget_password');

}

function forgot_pass(){

$email = $this->input->post('email');

$already = $this->Model->CountWhereRecord('user',array('email'=>$email,'status'=>1,'google_id'=>0));

if($already > 0){

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
$mail->AddAddress($email);
$mail->Subject = "Forgot Password Request";

$data['getuser'] = $this->Model->getData('user', array('email'=>$email));

//Email content
$content = $this->load->view('mail/user_forgot',$data,true);
$mail->MsgHTML($content);
$mail->IsHTML(true);
$mail->Send();

$this->session->set_flashdata('succ','Your Request has been sent on your email!');
redirect('user/forget');

}

else{

$this->session->set_flashdata('fget','Email is does not exist!');

redirect('user/forget');
}


}

function reset(){

$this->load->view('user/reset');

}

function upd_pass(){

$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|matches[cpassword]');
$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|min_length[5]');


if ($this->form_validation->run() != FALSE){

$user_id   = $this->input->post('user_id');
$password    = md5($this->input->post('password'));


$pass_upd = array( 

'password' => $password 

);  



$this->Model->updateData('user', $pass_upd,array('user_id'=>$user_id));

$this->session->set_flashdata('succ','Password Changed Successfully!');

redirect('user/forget');

}else{

$this->load->view('user/reset');

} 

}


function user_profile()
{
$this->check_login();
$user_id = $this->session->userdata('user_id');


$data['get_skill'] = $this->Model->getData('user', array('user_id'=>$user_id));
$data['user_img'] = $this->Model->getData('user', array('user_id'=>$user_id));
$data['country_list'] = $this->Model->getAllData('country');
$this->load->view('user/user-edit-profile',$data);
}

function upd_profile()
{
$user_id = $this->session->userdata('user_id');

//Check whether Member upload profile
if(!empty($_FILES['profile']['name'])){
$config['upload_path'] = 'uploads/user_images/';
$config['allowed_types'] = 'jpg|jpeg|png|gif';
$config['file_name'] = $_FILES['profile']['name'];


//Load upload library and initialize here configuration
$this->load->library('upload',$config);
$this->upload->initialize($config);

if($this->upload->do_upload('profile')){
$uploadData = $this->upload->data();
$profile = $uploadData['file_name'];

$profile = array( 
'profile'            => $profile
); 
$this->Model->updateData('user', $profile,array('user_id'=>$user_id));

}
}


redirect('user/user_profile');

}

function update_profile()
{

$user_id = $this->session->userdata('user_id');
$this->form_validation->set_rules('fname', 'Name', 'required');
$this->form_validation->set_rules('mobile', 'Phone Number', 'required');
$this->form_validation->set_rules('email', 'Email Address', 'required');
$this->form_validation->set_rules('country','Country','required');
$this->form_validation->set_rules('city', 'City', 'required');
$this->form_validation->set_rules('address', 'Complete Address', 'required');


if ($this->form_validation->run() != FALSE){

$alredy    = $this->Model->CountWhereRecord('user',array('user_id'=>$user_id));

$fname= $this->input->post('fname');

$exp = explode(" ",$fname);
$fname = $exp[0];

$lname = $exp[1];

$add_skill = array( 
'user_id'          => $user_id,
'fname'           => $fname,
'lname'           => $lname,
'mobile'             => $this->input->post('mobile'),
'email'              => $this->input->post('email'),
'country'            => $this->input->post('country'),
'city'               => $this->input->post('city'),
'profile_status'              => 1,
'address'            => $this->input->post('address')
); 


if($alredy > 0){

$this->Model->updateData('user', $add_skill,array('user_id'=>$user_id));
//print_r($sql);exit;
$this->session->set_flashdata('profile','Profile Updated Successfully!');

}else{

$this->Model->insertData('user', $add_skill);
$this->session->set_flashdata('profile','Profile Add Successfully!');

}

redirect('user/user_profile');

}else{

$data['get_skill'] = $this->Model->getData('user', array('user_id'=>$user_id));
$data['user_img'] = $this->Model->getData('user', array('user_id'=>$user_id));

$data['country_list'] = $this->Model->getAllData('country');
$this->load->view('user/user-edit-profile',$data);

} 
}

public function review()
{  

$data['seg_id'] = $this->uri->segment(3);

$this->load->view('user/review',$data);

}

public function review_tbl()
{  

$this->load->view('user/review_tbl');

}

function addreview()
{

$oid        = $this->uri->segment(3);

$user_id    = $this->session->userdata('user_id');
$user_fname = $this->session->userdata('user_fname');
$this->form_validation->set_rules('review', 'Review', 'required');


if ($this->form_validation->run() != FALSE){

$alredy    = $this->Model->CountWhereRecord('review_vend',array('order_id'=>$oid));

        $vid       = $this->input->post('vendor_id');
        $getudata  = $this->Model->getData('vendor',array('vendor_id' => $vid));
        $vemail = $getudata->email;
        $vfname = $getudata->fname;
        $add_r = array( 
                'uid'         => $user_id,
                'date'        => date('Y-m-d H:i:s'),
                'rate'        => $this->input->post('rate'),
                'review'      => $this->input->post('review'),
                'vendor_id'   => $vid,
                'order_id'    => $oid
                ); 


if($alredy > 0){

//$this->Model->updateData('user', $add_skill,array('user_id'=>$user_id));
$this->session->set_flashdata('review_er','Rating & Review is Alreay Done!');

}else{

$project = array('project'=>'Close');
$this->Model->insertData('review_vend', $add_r);
$this->Model->updateData('transaction', $project,array('order_id'=>$oid));
$chat_st = array('status'=>'0');
$this->Model->updateData('chat_room', $chat_st,array('order_id'=>$oid));
// add mail function
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
$mail->AddAddress($vemail);
$mail->Subject = "Profile Review";

$data['mail_data'] = array(
                    'vfname'   => $vfname,
                    'date'     => date('Y-m-d H:i:s'),
                    'rate'     => $this->input->post('rate'),
                    'review'   => $this->input->post('review'),
                    'user_fname' => $user_fname
                    );
//Email content
$content = $this->load->view('mail/vend_review_mail',$data,true);
$mail->MsgHTML($content);
$mail->IsHTML(true);
$mail->Send();
// end mail function
$this->session->set_flashdata('review','Add Rating & Review Successfully!');

}

redirect('user/review/'.$oid);

}else{

$data['seg_id'] = $oid;

$this->load->view('user/review',$data);

}

}

public function cht_btw()
{  
$chat_id  = $this->uri->segment(3);

 $cdata = $this->Model->getData('chat_room', array('chat_id'=>$chat_id));
 $user_id = $cdata->user_id;
 $vendor_id = $cdata->creator;
 
 $udata = $this->Model->getData('user', array('user_id'=>$user_id));
 $vdata = $this->Model->getData('vendor', array('vendor_id'=>$vendor_id));
 
 $username = $udata->fname;
 $vendorname = $vdata->fname;
 //echo $vendorname;exit;
 $callback_id   = uniqid();

 $link = base_url().'user/callback/'.$callback_id;
 $msgs = '<b>'.'</b>'.$username." has Create a meeting join  <a href='$link' target='_blank'>here</a>";
 $chat_msg = array( 
                    'date'          => date('Y-m-d H:i:s'),
                    'msg'           => $msgs,
                    'chat_id'       => $chat_id,
                    'sender_id'     => $user_id,
                    'uid'           => $user_id 

                    );

 $this->Model->insertData('chat', $chat_msg);
    

 
 $data = array( 
'user_name'           => $username,
'vendor_name'           => $vendorname, 
'chat_id'          => $chat_id,
'callback_id'          => $callback_id,
'status'           => 1
);  

$this->Model->insertData('chat_btw', $data);
 redirect('user/callback/'.$callback_id);
}

public function callback($callback_id)
{  
$data['callback_id'] = $callback_id;    
$this->load->view('user/callback', $data);
}


}
