codeigniter-internationalization
================================

Simple Multiple languages for Codeigniter


### application/config/autoload.php

- **EN**: Care first call the library session, but will not work
- **ES**: Cuidado llamar primero a la libreria session, sino no funcionará

		$autoload['libraries'] = array('session','set_language');
    
    
    
    
### application/config/config.php

    $config['country_languages'] = array(
		'en' => 'english', 
                'es' => 'spanish'
	);
    
    
    
### application/config/routes.php

    $route['^en/(.+)$'] = "$1";
    $route['^es/(.+)$'] = "$1";

    $route['^en$'] = $route['default_controller'];
    $route['^es$'] = $route['default_controller'];
    
    
    
    
    
    
### application/language/english/home_lang.php    
    
    $lang['home_hello'] = "Hello";
    
    
    
### application/language/spanish/home_lang.php    
    
    $lang['home_hello'] = "Hola";    
    
    
    
    
    
    
### application/libraries/Set_language.php
    
    <?php

    if (!defined('BASEPATH'))
      exit('No direct script access allowed');
    
    class Set_language {
    
      public function __construct() {
        $this->CI = & get_instance();
    
        /*
         * ES: capturar el lenguaje y guardarlo en session
         * EN: language to capture and save the session
         */
        if ($lang = $this->CI->uri->segment(1)) {
          /*
           * ES: si tiene solo dos caracteres
           * EN: if you have only two characters
           */
          if (strlen($lang) == 2) {
            /*
             * array config.php
             */
            $languages = $this->CI->config->item('country_languages');
            if (array_key_exists($lang, $languages)) {
              /*
                * ES: capturar el lenguaje y guardarlo en session
                * EN: language to capture and save the session
                */
              $this->CI->session->set_userdata('lang', $languages[$lang]);
            }
          }
        }
        /*
         * ES: si no existe la session, la creamos con el lenguaje por defecto
         * EN: if there is no session, created with the default language
         */
        if (!$this->CI->session->userdata('lang')) {
          //default
          $this->CI->session->set_userdata('lang', 'english');
        }
        //set config language
        $this->CI->config->set_item('language', $this->CI->session->userdata('lang'));
        //load language file
        $this->CI->lang->load('home', $this->CI->session->userdata('lang'));
      }
    
    }

    
### application/views/home_view.php    

    <?php 
    echo lang('home_hello');
    
