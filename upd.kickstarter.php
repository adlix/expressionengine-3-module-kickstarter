<?php

class Bootstrap_upd {

    var $version = '1.0';
    
    public function install() {
        $data = array(
            'module_name' => 'bootstrap' ,
            'module_version' => $this->version,
            'has_cp_backend' => 'n',
            'has_publish_fields' => 'y'
         );

         ee()->db->insert('modules', $data);
    }
    public function uninstall() {
         ee()->db->delete('modules', Array('module_name'=>'bootstrap'));
    }
}