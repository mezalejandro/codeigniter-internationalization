<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct() {
    parent::__construct();
     
     
    $this->load->library(array('form_validation', 'session')); // load form lidation libaray & session library
    $this->load->helper(array('url', 'html', 'form'));  // load url,html,form helpers optional
  }

  public function index() {
    
   
    
$this->load->view($this->session->userdata('template_path') . 'elements/menu');
    // set validation rules
    $this->form_validation->set_rules('name', 'Name', 'required|min_length[4]|max_length[10]');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('number', 'Phone Number', 'required|numeric|max_length[15]');
    $this->form_validation->set_rules('subject', 'Subject', 'required|max_length[10]|alpha');
    $this->form_validation->set_rules('message', 'Message', 'required|min_length[12]|max_length[100]');


    // hold error messages in div
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

    // check for validation
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('form_validation_demo');
    } else {
      $this->session->set_flashdata('item', 'form submitted successfully');
      redirect(current_url());
    }
  }

}

/*
if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct() {
    parent::__construct();
    
    echo '<pre>';
    print_r($this->lang);
    echo '</pre>';
    exit;
  }

  public function index() {
//    $this->CI->lang->load('general',$this->CI->session->userdata('lang'));
    
//    echo lang('general_lang');exit;
    
    $data = array();
    $data['title'] = 'title';
    $data['description'] = 'description';
    $data['keyswords'] = 'keyswords';
    $data['head'] = $this->load->view($this->session->userdata('template_path') . 'elements/head', $data, TRUE);
    $data['header'] = $this->load->view($this->session->userdata('template_path') . 'elements/header', $data, TRUE);
    $data['menu'] = $this->load->view($this->session->userdata('template_path') . 'elements/menu', $data, TRUE);
    $data['footer'] = $this->load->view($this->session->userdata('template_path') . 'elements/footer', $data, TRUE);
    $data['page_content'] = $this->load->view($this->session->userdata('template_path') . 'views/home_view', $data, TRUE);
    $this->load->view($this->session->userdata('template_path') . 'template', $data);
    
  }

  
  
  
  
  
  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */