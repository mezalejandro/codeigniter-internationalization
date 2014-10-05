<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Set_language {

  public function __construct() {
    $this->CI = & get_instance();
   
    /*
     * capturar el lenguaje y guardarlo en session
     */
    if ($lang = $this->CI->uri->segment(1)) {
      if (strlen($lang) == 2) {
        $languages = $this->CI->config->item('country_languages');
        if (array_key_exists($lang, $languages)) {
          $this->CI->session->set_userdata('lang', $languages[$lang]);
        }
      }
    }
    if (!$this->CI->session->userdata('lang')) {
      $this->CI->session->set_userdata('lang', 'arg');
    }
    $this->CI->config->set_item('language', $this->CI->session->userdata('lang'));
    $this->CI->lang->load('general', $this->CI->session->userdata('lang'));
  }
}
