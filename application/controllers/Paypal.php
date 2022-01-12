<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal extends CI_Controller {

function __construct(){

parent::__construct();

$this->load->library('session');
$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');
$this->load->library('paypal_lib');

date_default_timezone_set('Asia/Kolkata');
require_once APPPATH.'third_party/mailer/class.phpmailer.php';

$this->load->database();

$this->load->model('Model');

}

function create_payment_with_paypal(){
$vendor_id   = $this->input->post('vendor_id');
$price   = $this->input->post('price');


$this->form_validation->set_rules('radio', 'Paypal', 'required');
$this->form_validation->set_rules('terms', 'Privacy Policy', 'required');

$user_id    = $this->session->userdata('user_id');
$user_email = $this->session->userdata('user_email');
$user_fname = $this->session->userdata('user_fname');
$order_id  = uniqid();

if ($this->form_validation->run() != FALSE){
$returnURL = base_url().'home/invoice/'.$order_id; //payment success url 
$cancelURL = base_url().'paypal/cancel'; //payment cancel url 



$logo = base_url().'assets/images/talk2-logo.png';
// Add fields to paypal form 
$this->paypal_lib->add_field('return', $returnURL); 
$this->paypal_lib->add_field('cancel_return', $cancelURL); 
$this->paypal_lib->add_field('item_name', 'Talk2expert');
$this->paypal_lib->add_field('custom', $user_id); 
$this->paypal_lib->add_field('item_number',  $vendor_id); 
$this->paypal_lib->add_field('amount',  $price); 
$this->paypal_lib->image($logo);

// Render paypal form 
$this->paypal_lib->paypal_auto_form(); 
}else{
  $data['vname'] = $this->Model->getData('vendor_skill',array('vendor_id' => $vendor_id));
  $this->load->view('home/checkout',$data);    
  }
}

function cancel(){
//if transaction cancelled
$this->load->view('paypal/cancel');
}

}

