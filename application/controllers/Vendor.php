<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Vendor extends CI_Controller {
	
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
	 
$this->load->view('vendor/vend_reg');
     
}
    
function check_login()
{
    if($this->session->userdata('vend_email') =='')
    {
      redirect('vendor');
    }
}
 
function vend_signup()
{
  $this->form_validation->set_rules('fname', 'First Name', 'required|min_length[5]|max_length[12]');
  $this->form_validation->set_rules('lname', 'Last Name', 'required');
  $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|matches[cpassword]');
  $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|min_length[5]');
  $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[vendor.email]');
  $this->form_validation->set_rules('terms', 'Terms & Condition', 'required');
 
  if ($this->form_validation->run() != FALSE){
    
    $vendor_id = uniqid();
        
    $data = array( 
                    'vendor_id'       => $vendor_id,
                    'fname'           => $this->input->post('fname'),
                    'lname'           => $this->input->post('lname'), 
                    'email'           => $this->input->post('email'), 
                    'password'        => md5($this->input->post('password')),  
                    'date'            => date('Y-m-d H:i:s')
                    );  
        
    $this->Model->insertData('vendor', $data);
    
    $fnm =$this->input->post('fname');
    $lnm =$this->input->post('lname');
    $fullnm = ($fnm." ".$lnm);
    $dataskil = array( 
                    'vendor_id'       => $vendor_id,
                    'fullname'        => $fullnm,
                    'email'           => $this->input->post('email'), 
                    'date'            => date('Y-m-d H:i:s')
                    );  

    $this->Model->insertData('vendor_skill', $dataskil);
   
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

    
    $data['getuser'] = $this->Model->getData('vendor', array('vendor_id'=>$vendor_id));
    //Email content
    $content = $this->load->view('mail/acc_reg',$data,true);
    $mail->MsgHTML($content);
    $mail->IsHTML(true);
    $mail->Send();
    //end
    $this->session->set_flashdata('reg_succ','Register successfully! Please Verify by Mail!');
    redirect('vendor');
   }else{
        $this->load->view('vendor/vend_reg');
   } 
}
    
function loginAction()
{
  $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
  $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
  //$this->form_validation->set_rules('terms', 'Terms & Condition', 'required');
  if ($this->form_validation->run() != FALSE){
    
   $email    = $this->input->post('email');
   $password = md5($this->input->post('password'));
  
   $chklogin = $this->Model->CountWhereRecord('vendor',array('email'=>$email,'password'=>$password,'status'=>1));
   
   if($chklogin > 0){
    $user = $this->Model->getData('vendor',array('email' => $email,'password'=>$password));
    $vid = $user->vendor_id;
    $sess_array = array(
         'vendor_id'       => $user->vendor_id,
         'vend_fname'      => $user->fname,
         'vend_lname'      => $user->lname,
         'vend_email'      => $user->email
          );
    
    $activity = array(
              
               'last_activity'       =>'Online'

                  );
    $this->Model->updateData('vendor', $activity,array('vendor_id'=>$vid));

    $this->session->set_userdata($sess_array);
    //$this->session->set_flashdata('reg_succ','Login successfully!');
    redirect('vendor/dashboard');
   }else{
    $this->session->set_flashdata('login_err','Your Email or Password does not match!');
    redirect('vendor');
    }
   }else{
        $this->load->view('vendor/vend_reg');
    } 
}


function login_with_gmail()
{  
    require_once APPPATH.'third_party/src/Google_Client.php';
    require_once APPPATH.'third_party/src/contrib/Google_Oauth2Service.php';

    $clientId = '567036716140-bfb59if7tcah9e2phl3vd7fat6076jq2.apps.googleusercontent.com'; //Google client ID
    $clientSecret = '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'; //Google client secret
    $redirectURL = base_url() .'vendor/login_with_gmail';
    

    //Call Google API
    $gClient = new Google_Client();
    $gClient->setApplicationName('Talk2 login');
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
        
    $already = $this->Model->CountWhereRecord('vendor',array('google_id'=>$gmail_id));
    
    if($already > 0){

        $get_user = $this->Model->getData('vendor',array('google_id'=>$gmail_id));
            $vend_uniq = $get_user->vendor_id;
            $sess_array = array(
                 'vendor_id'       => $get_user->vendor_id,
                 'vend_fname'      => $get_user->fname,
                 'vend_lname'      => $get_user->lname,
                 'vend_email'      => $get_user->email
                  );
           
            $this->session->set_userdata($sess_array);
            
            $activity = array(
              
               'last_activity'       =>'Online'

                  );
            $this->Model->updateData('vendor', $activity,array('vendor_id'=>$vend_uniq));

            redirect('vendor/dashboard');
            exit;

        }else{
              
            $uniqid        = uniqid();
            $verify_status = "1";

            $data = array( 
                'vendor_id'       => $uniqid,
                'fname'           => $gmail_fname,
                'lname'           => $gmail_lname, 
                'email'           => $gmail_email, 
                'status'          => $verify_status,
                'google_id'       => $gmail_id,
                'last_activity'   =>'Online',
                'date'            => date('Y-m-d H:i:s')
                );  
    
            $this->Model->insertData('vendor', $data);
            //for vendor skill
            $fullnm = ($gmail_fname." ".$gmail_lname);
            $dataskil = array( 
                            'vendor_id'       => $uniqid,
                            'fullname'        => $fullnm,
                            'email'           => $gmail_email, 
                            'date'            => date('Y-m-d H:i:s')
                            );  

            $this->Model->insertData('vendor_skill', $dataskil);
            //end vskill

            $sess_array = array(
                 'vendor_id'       => $uniqid,
                 'vend_fname'      => $gmail_fname,
                 'vend_lname'      => $gmail_lname,
                 'vend_email'      => $gmail_email
                  );
           
            $this->session->set_userdata($sess_array);

            redirect('vendor/dashboard');
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

    
function dashboard()
{
  $this->check_login();
  $vendor_id     = $this->session->userdata('vendor_id');
  $data['alert'] = $this->Model->getData('vendor_skill',array('vendor_id' =>$vendor_id));
  $this->load->view('vendor/dashboard',$data);
}
    
    
function logout()
{   

$vendor_id = $this->session->userdata('vendor_id');
$activity = array(
            'last_activity'       =>'Offline'
            );
  $this->Model->updateData('vendor', $activity,array('vendor_id'=>$vendor_id));

  $this->session->unset_userdata('vendor_id');
  $this->session->unset_userdata('vend_fname');
  $this->session->unset_userdata('vend_lname');
  $this->session->unset_userdata('vend_email');
  //$this->session->sess_destroy();
  redirect('vendor');

}
   
function profile()
{
     
$this->check_login();
$vendor_id = $this->session->userdata('vendor_id');
$data['get_skill'] = $this->Model->getData('vendor_skill', array('vendor_id'=>$vendor_id));
$data['vendor_img'] = $this->Model->getData('vendor', array('vendor_id'=>$vendor_id));


$data['country_list']    = $this->Model->getAllData('country');
$data['languages_list']  = $this->Model->getAllData('languages');
$data['skills_list']     = $this->Model->getAllData('skills');
$data['categories_list'] = $this->Model->getAllData('categories');

$this->load->view('vendor/edit_profile',$data);

}
    
function update_profile()
{
$vendor_id = $this->session->userdata('vendor_id');
$this->form_validation->set_rules('company', 'Company Name', 'required');
$this->form_validation->set_rules('fullname', 'Full Name', 'required');
$this->form_validation->set_rules('allow','Allow In Search','required');
$this->form_validation->set_rules('category','Category','required');
$this->form_validation->set_rules('about', 'About Your Self', 'required|min_length[300]');
$this->form_validation->set_rules('acc_type', 'Account Type', 'required');
$this->form_validation->set_rules('mobile', 'Phone Number', 'required');
$this->form_validation->set_rules('email', 'Email', 'required');
//$this->form_validation->set_rules('website', 'Website', 'required');
$this->form_validation->set_rules('country','Country','required');
$this->form_validation->set_rules('city', 'City', 'required');
$this->form_validation->set_rules('address', 'Complete Address', 'required');
$this->form_validation->set_rules('map_address', 'Find On Map', 'required');
$this->form_validation->set_rules('price', 'Price', 'required');

$this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
$this->form_validation->set_rules('acc_name', 'Account Holder Name
', 'required');
$this->form_validation->set_rules('acc_no', 'Account Number
', 'required');
$this->form_validation->set_rules('ifsc', 'IFSC Code
', 'required');

if ($this->form_validation->run() != FALSE){

$alredy    = $this->Model->CountWhereRecord('vendor_skill',array('vendor_id'=>$vendor_id));

$skills  = $this->input->post('skills');
$languag = $this->input->post('languag');

//explode func for sklill and lang
// $mul_skil = implode(",", $skills);
// $mul_lang = implode(",", $languag);

// for name short
$fullname  = explode(" ", $this->input->post('fullname'));
$fname     = $fullname[0];
$lname     = $fullname[1];
$vend_name = array('fname'=>$fname,'lname'=>$lname,'email'=>$this->input->post('email'));

//for education
$edu_title =  $this->input->post('edu_title');
$org_name  =  $this->input->post('org_name');
$from_date =  $this->input->post('from_date');
$to_date   =  $this->input->post('to_date');

// for work exp
$work_title = $this->input->post('work_title');
$work_org   = $this->input->post('work_org');
$work_from  = $this->input->post('work_from');
$work_to    = $this->input->post('work_to');

$add_skill = array( 
'vendor_id'          => $vendor_id,
'company'            => $this->input->post('company'),
'fullname'           => $this->input->post('fullname'),
'allow'              => $this->input->post('allow'),
'category'           => $this->input->post('category'),
'about'              => $this->input->post('about'),
'acc_type'           => $this->input->post('acc_type'),
'mobile'             => $this->input->post('mobile'),
'email'              => $this->input->post('email'),
'website'            => $this->input->post('website'),
'country'            => $this->input->post('country'),
'city'               => $this->input->post('city'),
'address'            => $this->input->post('address'),
'map_address'        => $this->input->post('map_address'),
'lat'                => $this->input->post('lat'),
'longitude'          => $this->input->post('longitude'),
'alert'              => 1,
'price'              => $this->input->post('price'),
'bank_name'          => $this->input->post('bank_name'),
'acc_name'           => $this->input->post('acc_name'),
'acc_no'             => $this->input->post('acc_no'),
'ifsc'               => $this->input->post('ifsc')
); 

//start here upload certificate
$certificate = $_FILES['files']['name'];

if(!empty($certificate)){
    $this->load->library('upload');
    $dataInfo = array();
    $files = $_FILES;
    $cpt = count($certificate);

    //$check_cert = $this->Model->CountWhereRecord('uploads_certificate',array('vendor_id'=>$vendor_id));

    //if($check_cert > 0){

    //delete image when already

    //$this->Model->deleteData('uploads_certificate',array('vendor_id' => $vendor_id));

    //}

    for($i=0; $i<$cpt; $i++)
    {           
        $fname = $files['files']['name'][$i];
        $_FILES['files']['name']= $files['files']['name'][$i];
        $_FILES['files']['type']= $files['files']['type'][$i];
        $_FILES['files']['tmp_name']= $files['files']['tmp_name'][$i];
        $_FILES['files']['error']= $files['files']['error'][$i];
        $_FILES['files']['size']= $files['files']['size'][$i];    

        $this->upload->initialize($this->set_upload_options());
        $this->upload->do_upload('files');
        $dataInfo = $this->upload->data();
        
        if(!empty($fname)){
        
        $data = array(
            'vendor_id'  => $vendor_id,
            'files'      => $fname
           );

        $this->Model->insertData('uploads_certificate', $data);

        }
        
    }

 }  
//end certificate 

if($alredy > 0){

$this->Model->updateData('vendor', $vend_name,array('vendor_id'=>$vendor_id));

$this->Model->updateData('vendor_skill', $add_skill,array('vendor_id'=>$vendor_id));

if(!empty($skills)){
    
    $this->Model->deleteData('selected_vend_sklill',array('vendor_id' => $vendor_id));
    for ($i=0; $i < count($skills) ; $i++) { 
    
    $vd =  array('skill'=>$skills[$i],'vendor_id'=>$vendor_id);

    $this->Model->insertData('selected_vend_sklill', $vd);

        
    }
}

if(!empty($languag)){
    
    $this->Model->deleteData('selected_vend_lang',array('vendor_id' => $vendor_id));
    for ($j=0; $j < count($languag) ; $j++) { 
    
    $lang =  array('lang'=>$languag[$j],'vendor_id'=>$vendor_id);

    $this->Model->insertData('selected_vend_lang', $lang);

        
    }
}

if(!empty($edu_title)){
    
    $this->Model->deleteData('education',array('vendor_id' => $vendor_id));

    for ($k=0; $k < count($edu_title) ; $k++) { 
    $chks = $edu_title[$k];
    if(!empty($chks)){

    $education =  array(
        
        'edu_title' => $edu_title[$k],
        'org_name'  => $org_name[$k],
        'from_date' => $from_date[$k],
        'to_date'   => $to_date[$k],
        'vendor_id' => $vendor_id

         );

    $this->Model->insertData('education', $education);
    }
        
    }

}

if(!empty($work_title)){
    
    $this->Model->deleteData('work_exp',array('vendor_id' => $vendor_id));

    for ($n=0; $n < count($work_title) ; $n++) { 
   
    $chk = $work_title[$n];
    if(!empty($chk)){
    
    $workexp =  array(
        
        'title'     => $work_title[$n],
        'org'       => $work_org[$n],
        'to_date'   => $work_to[$n],
        'from_date' => $work_from[$n],
        'vendor_id' => $vendor_id

         );
    
    $this->Model->insertData('work_exp', $workexp);


    }
    
        
    }

}

$this->session->set_flashdata('profile','Profile Updated Successfully!');
//call function for upload certificate
//$this->multiple_files_certificate($certificate);

}else{

$this->Model->updateData('vendor', $vend_name,array('vendor_id'=>$vendor_id));
$this->Model->insertData('vendor_skill', $add_skill);

if(!empty($skills)){

    for ($i=0; $i < count($skills) ; $i++) { 
    
    $vd =  array('skill'=>$skills[$i],'vendor_id'=>$vendor_id);
    $this->Model->insertData('selected_vend_sklill', $vd);
 
 
    }
}

if(!empty($languag)){
    
    for ($j=0; $j < count($languag) ; $j++) { 
    
    $lang =  array('lang'=>$languag[$j],'vendor_id'=>$vendor_id);

    $this->Model->insertData('selected_vend_lang', $lang);

        
    }
}
if(!empty($edu_title)){

    for ($k=0; $k < count($edu_title) ; $k++) { 
    
    $education =  array(
        
        'edu_title' => $edu_title[$k],
        'org_name'  => $edu_title[$k],
        'from_date' => $edu_title[$k],
        'to_date'   => $edu_title[$k],
        'vendor_id' => $vendor_id

         );

    $this->Model->insertData('education', $education);

        
    }

}

if(!empty($work_title)){
    

    for ($n=0; $n < count($work_title); $n++) { 
    
    $workexp =  array(
        
        'title'     => $work_title[$n],
        'org'       => $work_org[$n],
        'to_date'   => $work_to[$n],
        'from_date' => $work_from[$n],
        'vendor_id' => $vendor_id

         );
    
    $this->Model->insertData('work_exp', $workexp);

        
    }

}



$this->session->set_flashdata('profile','Profile Add Successfully!');

//call function for upload certificate
//$this->multiple_files_certificate($certificate);

}

redirect('vendor/profile');

}else{

$data['get_skill'] = $this->Model->getData('vendor_skill', array('vendor_id'=>$vendor_id));
$data['vendor_img'] = $this->Model->getData('vendor', array('vendor_id'=>$vendor_id));

$data['country_list']    = $this->Model->getAllData('country');
$data['languages_list']  = $this->Model->getAllData('languages');
$data['skills_list']     = $this->Model->getAllData('skills');
$data['categories_list'] = $this->Model->getAllData('categories');

$this->load->view('vendor/edit_profile',$data);

} 
}

function del_certificate()
{

$id = $this->input->post('id');
$this->Model->deleteData('uploads_certificate',array('id' => $id));

// $vendor_id = $this->session->userdata('vendor_id');
// $id = $this->uri->segment(3);

// $this->Model->deleteData('uploads_certificate',array('id' => $id));

// $data['get_skill'] = $this->Model->getData('vendor_skill', array('vendor_id'=>$vendor_id));
// $data['vendor_img'] = $this->Model->getData('vendor', array('vendor_id'=>$vendor_id));

// $data['country_list']    = $this->Model->getAllData('country');
// $data['languages_list']  = $this->Model->getAllData('languages');
// $data['skills_list']     = $this->Model->getAllData('skills');
// $data['categories_list'] = $this->Model->getAllData('categories');

// $this->load->view('vendor/edit_profile',$data);
// //redirect('vendor/profile');

}

function upd_profile()
{

$vendor_id = $this->session->userdata('vendor_id');

//Check whether Member upload profile
if(!empty($_FILES['profile']['name'])){

$config['upload_path'] = 'uploads/images/';
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
$this->Model->updateData('vendor', $profile,array('vendor_id'=>$vendor_id));

}
}


redirect('vendor/profile');

}

public function multiple_files_certificate($files){
    
    //print_r($files); die;
    
}

private function set_upload_options()
{   
    //upload an image options
    $config = array();
    $config['upload_path'] = 'uploads/images/certificate/';
    $config['allowed_types'] = 'jpg|jpeg|png|gif';
    $config['max_size']      = '0';
    $config['overwrite']     = FALSE;

    return $config;
}

function upd_cover()
{

$vendor_id = $this->session->userdata('vendor_id');
//Check whether Member upload cover

if(!empty($_FILES['cover']['name'])){
$config['upload_path'] = 'uploads/images/';
$config['allowed_types'] = 'jpg|jpeg|png|gif';
$config['file_name'] = $_FILES['cover']['name'];


//Load upload library and initialize here configuration
$this->load->library('upload',$config);
$this->upload->initialize($config);

if($this->upload->do_upload('cover')){
$uploadData = $this->upload->data();
$cover = $uploadData['file_name'];

$profile = array( 
'cover'            => $cover
); 
$this->Model->updateData('vendor', $profile,array('vendor_id'=>$vendor_id));

}
}


redirect('vendor/profile');

}

function forget(){

$this->load->view('vendor/forget_password');

}

function contact(){

$this->load->view('vendor/contact_us');

}

function forgot_pass(){

$email = $this->input->post('email');

$already = $this->Model->CountWhereRecord('vendor',array('email'=>$email,'status'=>1,'google_id'=>0));

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

$data['getuser'] = $this->Model->getData('vendor', array('email'=>$email));
     
//Email content
$content = $this->load->view('mail/forgot',$data,true);
$mail->MsgHTML($content);
$mail->IsHTML(true);
$mail->Send();

$this->session->set_flashdata('succ','Your Request has been sent on your email!');
redirect('vendor/forget');

}

else{

$this->session->set_flashdata('fget','Email is does not exist!');

redirect('vendor/forget');
}


}

function reset(){

$this->load->view('vendor/reset');

}

function upd_pass(){

$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|matches[cpassword]');
$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|min_length[5]');


if ($this->form_validation->run() != FALSE){

$vendor_id   = $this->input->post('vendor_id');
$password    = md5($this->input->post('password'));


$pass_upd = array( 

'password' => $password 

);  



$this->Model->updateData('vendor', $pass_upd,array('vendor_id'=>$vendor_id));

$this->session->set_flashdata('succ','Password Changed Successfully!');

redirect('vendor/forget');

}else{

$this->load->view('vendor/reset');

} 

}

function verify_account()
{
$vendor_id = $this->uri->segment(3);

if(isset($vendor_id)){

$status = array( 

'status' => 1 

);  

$this->Model->updateData('vendor', $status,array('vendor_id'=>$vendor_id));
$this->session->set_flashdata('reg_succ','Account is Successfully Verified!');
redirect('vendor');


}

}

function service(){

$this->check_login();
$vendor_id = $this->session->userdata('vendor_id');

$sql = "SELECT * FROM `transaction` where vendor_id='$vendor_id' AND status='1' ORDER BY id ASC";
$data['get_service'] = $this->Model->getSqlData($sql);

$this->load->view('vendor/service_list',$data);

}

function chat(){
$this->check_login();
$vendor_id = $this->session->userdata('vendor_id');

$chat_id = $this->uri->segment(3);

if(!empty($chat_id)){

$data['chatview'] = $this->Model->getData('chat_room', array('chat_id'=>$chat_id,'status'=>1));

$sql = "SELECT * FROM `chat` WHERE chat_id='$chat_id' AND status='1' ORDER BY id ASC";
$data['chat'] = $this->Model->getSqlData($sql);


$chtroom = "SELECT * FROM `chat_room` WHERE creator='$vendor_id' AND status='1' ORDER BY id DESC";
$data['chats_list'] = $this->Model->getSqlData($chtroom);

$this->load->view('vendor/chat-view',$data);

}else{

$chtroom = "SELECT * FROM `chat_room` WHERE creator='$vendor_id' AND status='1' ORDER BY id DESC";
$data['chats_list'] = $this->Model->getSqlData($chtroom);


$this->load->view('vendor/chat-view',$data);

}

}

function filter_chat()
{
  // $id     = $this->input->post('id');
  // $search = $this->input->post('search');
  // $chtroom = "SELECT * FROM `chat_room` WHERE creator='$vendor_id' AND status='1' ORDER BY id ASC";
  // $data['chats_list'] = $this->Model->getSqlData($chtroom);
  // $this->load->view('vendor/chat-view',$data);

}

function transaction(){
$this->check_login();
$vendor_id = $this->session->userdata('vendor_id');
$transaction = "SELECT * FROM `transaction` WHERE vendor_id='$vendor_id' AND status='1' ORDER BY id DESC";
$data['trans'] = $this->Model->getSqlData($transaction);


$this->load->view('vendor/transactions',$data);

}

function notification(){
$this->check_login();
$vendor_id = $this->session->userdata('vendor_id');
$upd_status =  array('status'=>'seen');
$this->Model->updateData('notification',$upd_status,array('vid'=>$vendor_id));


$notify    = "SELECT * FROM `notification` WHERE vid='$vendor_id'";
$data['notifies'] = $this->Model->getSqlData($notify);

$this->load->view('vendor/notification',$data);

}

function create_chat()
{

$vendor_id   = $this->session->userdata('vendor_id');
$chat_id     = uniqid();
$user_id     = $this->uri->segment(3);
$o_id        = $this->uri->segment(4);

$chat_create = $this->Model->CountWhereRecord('chat_room',array('user_id'=>$user_id,'creator'=>$vendor_id,'order_id'=>$o_id));
$users  = $vendor_id.",".$user_id ;

if($chat_create > 0){

$get_chat_id = $this->Model->getData('chat_room', array('user_id'=>$user_id,'creator'=>$vendor_id,'status'=>1));
$chaid = $get_chat_id->chat_id;

 redirect('vendor/chat/'.$chaid);
   
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
    redirect('vendor/chat/'.$chat_id);
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
  
  $vendor_id = $this->session->userdata('vendor_id');
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
                    'vid'           => $vendor_id, 
                    'chat_id'       => $this->input->post('chat_id'),
                    'sender_id'     => $vendor_id 
                    ); 
    } 

    $chat_msg = array( 
                    'date'          => date('Y-m-d H:i:s'),
                    'msg'           => $this->input->post('msg_text'),
                    'vid'           => $vendor_id, 
                    'chat_id'       => $this->input->post('chat_id'),
                    'sender_id'     => $vendor_id 
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


 function show_load_chat()
 {

  $chat_id       = $this->uri->segment(3);
  $sql = "SELECT * FROM `chat` WHERE chat_id='$chat_id' AND status='1' ORDER BY id ASC";
  $data['chat'] = $this->Model->getSqlData($sql);
  
  $this->load->view('vendor/chat_msg',$data);



 }

 function show_certificate()
 {

  
  $this->load->view('vendor/view_certificate');



 }

 // function notifications_alert(){

 // $notify_data = array( 
 //                    'date'       => date('Y-m-d H:i:s'),
 //                    'title'      => 'Someone Sent you message',
 //                    'url'        => 'url',
 //                    'sender'     => '$vendor_id', 
 //                    'receiver'   => '$vendor_id' 
 //                    );  
 
 // $this->Model->insertData('notification',$notify_data);
 // redirect('vendor/notification');
 // }

 function del_edu()
 {
  $id  = $this->uri->segment(3);
  $this->Model->deleteData('education',array('id' => $id));
  redirect('vendor/profile');

 }

 function del_work()
 {
  $id  = $this->uri->segment(3);
  $this->Model->deleteData('work_exp',array('id' => $id));
  redirect('vendor/profile');

 }

 function create_meeting()
 {
 
 $chat_id  = $this->uri->segment(3);
 $cdata    = $this->Model->getData('chat_room', array('chat_id'=>$chat_id));
 $user_id   = $cdata->user_id;
 $vendor_id = $cdata->creator;
 
 $udata = $this->Model->getData('user', array('user_id'=>$user_id));
 $vdata = $this->Model->getData('vendor', array('vendor_id'=>$vendor_id));
 
 $username = $udata->fname;
 $vendorname = $vdata->fname;
 //echo $vendorname;exit;
 $callback_id   = uniqid();
 $link = base_url().'vendor/callback/'.$callback_id;
 $msgs = '<b>'.'</b>'.$vendorname." has Create a meeting join  <a href='$link' target='_blank'>here</a>";
 $chat_msg = array( 
                    'date'          => date('Y-m-d H:i:s'),
                    'msg'           => $msgs,
                    'chat_id'       => $chat_id,
                    'sender_id'     => $vendor_id,
                    'vid'           => $vendor_id 

                    );

 $this->Model->insertData('chat', $chat_msg);
    

 $data = array( 
'user_name'        => $username,
'vendor_name'      => $vendorname, 
'chat_id'          => $chat_id,
'callback_id'      => $callback_id,
'status'           => 1
);  



$this->Model->insertData('chat_btw', $data);
redirect('vendor/callback/'.$callback_id);

 }

public function callback($callback_id)
{  
$data['callback_id'] = $callback_id;    
$this->load->view('vendor/callback', $data);
}




}