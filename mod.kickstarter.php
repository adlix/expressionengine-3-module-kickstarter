<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kickstarter {
        var $name           = 'Kickstarter';
        var $version        = '1.0';
        var $description    = 'Kickstarter';
        var $settings_exist = 'y';
        var $docs_url       = ''; // 'https://ellislab.com/expressionengine/user-guide/';
	var $return_data  = '';

        var $settings       = array();

        /**
         * Constructor
         *
         * @param   mixed   Settings array or empty string if none exist.
         */
        function __construct($settings = '')
        {
            $this->settings = $settings;
        }
    
        public function css_tag(){
                     
            return 'It works.';   
        }
     
  }
