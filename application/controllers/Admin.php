<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

public function __construct(){
parent::__construct();

date_default_timezone_set('Asia/Kolkata');
$this->load->database();
$this->load->model('Model');
$this->load->library(array('form_validation','session'));
$this->load->helper(array('form','url'));
//$this->user_id = $this->session->userdata('user_id');

}

public function index()
{
$this->load->view('admin/login_form');
} 

function post_login()
{
$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
if ($this->form_validation->run() != FALSE){
$email    = $this->input->post('email');
$password = $this->input->post('password');
$chklogin = $this->Model->CountWhereRecord('admin',array('email'=>$email,'password'=>$password));
// print_r( $chklogin); exit;
if($chklogin > 0){
$user = $this->Model->getData('admin',array('email' => $email,'password'=>$password));
$sess_array = array(
'admin_id'  => $user->id,
'password'  => $user->password,
'email'      => $user->email
);
$this->session->set_userdata($sess_array);
$this->session->set_flashdata('reg_succ','Login successfully!');
redirect('admin/dashboard');
}else{
$this->session->set_flashdata('login_err','Your Email or Password does not match!');
redirect('admin/index');
}
}else{
$this->load->view('admin/login_form');
} 
}

public function dashboard()
{
$this->load->view('admin/dashboard');  
}

public function categories()
{
$data['cat'] = $this->Model->getAlData('categories');
$this->load->view('admin/categories', $data);  
}

public function contact()
{
$data['contact'] = $this->Model->getAlData('contact_us');
$this->load->view('admin/contact', $data);  

}

public function categories_list()
{
$data['cat'] = $this->Model->getAlData('categories');
$this->load->view('admin/categories_list', $data);  
}

public function delete($id)
{
$this->db->delete('categories', array('id' => $id));  // Produces: DELETE FROM mytable WHERE id = $id
redirect('admin/categories_list');
}

public function post_categories()
{
$this->form_validation->set_rules('category_name', 'Category', 'required');
// $this->form_validation->set_rules('cat_img', 'Images', 'required');
if ($this->form_validation->run() != FALSE){
//Check whether Member upload cat_img
if(!empty($_FILES['cat_img']['name'])){
$config['upload_path'] = 'uploads/images/';
$config['allowed_types'] = 'jpg|jpeg|png|gif';
$config['file_name'] = $_FILES['cat_img']['name'];
//Load upload library and initialize here configuration
$this->load->library('upload',$config);
$this->upload->initialize($config);
if($this->upload->do_upload('cat_img')){
$uploadData = $this->upload->data();
$cat_img = $uploadData['file_name'];
$cat_img_id = uniqid();
$data = array( 
'cat_img_id'       => $cat_img_id,
'category_name'           => $this->input->post('category_name'),
'cat_img' => $cat_img,
'date'            => date('Y-m-d H:i:s')
);  
$this->Model->insertData('categories', $data);
$this->session->set_flashdata('reg_succ','Added successfully!');
}
}
redirect('admin/categories');
}else{
$this->load->view('admin/categories');
}
}

public function vendor_profile()
{
// $data['vendor'] = $this->Model->getAlData('vendor_skill');
$vendors       = "SELECT * FROM vendor_skill WHERE category!='0' ORDER BY id DESC";
//print_r($vendors);exit;
$data['vendor'] = $this->Model->getSqlData($vendors);
$this->load->view('admin/vendor_profile', $data);    
}

public function status_update()
{
if ($this->input->is_ajax_request()) {
$vendor_id = $this->input->post('vendor_id');
$update_skill = array( 
'status' => $this->input->post('status'),
'date'            => date('Y-m-d H:i:s')
); 
$this->Model->updateData('vendor_skill', $update_skill,array('vendor_id'=>$vendor_id));
}
}

public function single_vendor_detail($id)
{    
$data['single_vendor_skill'] = $this->Model->getData('vendor_skill', array('vendor_id' => $id));  
$this->load->view('admin/single_vendor_profile', $data);    
}

public function skill()
{    
$data['skills'] = $this->Model->getAlData('skills');
$this->load->view('admin/skills',$data);  
}

public function delete_skills($id)
{
$this->db->delete('skills', array('id' => $id));  // Produces: DELETE FROM mytable WHERE id = $id
redirect('admin/skill');
}

public function post_skills()
{
$this->form_validation->set_rules('skill_name', 'Skill', 'required');
if ($this->form_validation->run() != FALSE){
$data = array( 
'skill_name'           => $this->input->post('skill_name'),
'date'            => date('Y-m-d H:i:s')
);  
$this->Model->insertData('skills', $data);
$this->session->set_flashdata('reg_succ','Added successfully!');
redirect('admin/skill');
}
else{
$data['skills'] = $this->Model->getAlData('skills');
$this->load->view('admin/skills',$data);
}
}

public function language()
{    
$data['languages'] = $this->Model->getAlData('languages');
$this->load->view('admin/languages', $data);  
}

public function delete_language($id)
{
$this->db->delete('languages', array('id' => $id));  // Produces: DELETE FROM mytable WHERE id = $id
redirect('admin/language');
}

public function post_languages()
{    
$this->form_validation->set_rules('languages', 'Languages', 'required');
if ($this->form_validation->run() != FALSE){
$data = array( 
'languages'           => $this->input->post('languages'),
'date'            => date('Y-m-d H:i:s')
);  
$this->Model->insertData('languages', $data);
$this->session->set_flashdata('reg_succ','Added successfully!');
redirect('admin/language');
}
else{
$data['languages'] = $this->Model->getAlData('languages');
$this->load->view('admin/languages',$data);
} 
}

public function logout()
{ 
$this->session->unset_userdata('admin_id');
$this->session->unset_userdata('email');
$this->session->unset_userdata('password');
//$this->session->sess_destroy();
redirect('admin');
}

public function transaction()
{
$transaction = "SELECT * FROM `transaction` WHERE status='1' ORDER BY id DESC";
$data['trans'] = $this->Model->getSqlData($transaction);
$this->load->view('admin/transactions',$data);
}

public function notification()
{
$notify    = "SELECT * FROM `notification`";
$data['notifies'] = $this->Model->getSqlData($notify);
$this->load->view('admin/notifications',$data);
} 

public function chat_list()
{
$chat_data = "SELECT * FROM `chat_room`";
$data['chats'] = $this->Model->getSqlData($chat_data); 
$this->load->view('admin/chat', $data);
} 

public function single_chat_detail($id)
{
//  $data['allchats'] = $this->Model->getData('chat', array('chat_id' => $id));    
    $chattings = "SELECT * FROM `chat` WHERE chat_id='$id'";
    
    $data['allchats'] = $this->Model->getSqlData($chattings); 
    $this->load->view('admin/chat_form', $data);
} 

public function users_list()
{
$all_users = "SELECT * FROM `user`";
$data['users'] = $this->Model->getSqlData($all_users); 
    
   $this->load->view('admin/users_list', $data);  
}

}
