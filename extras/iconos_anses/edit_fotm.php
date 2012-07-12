<?php
 
class block_iconos_anses_edit_form extends block_edit_form {
 
    protected function specific_definition($mform) {

        // A sample string variable with a default value.
        $mform->addElement('link', 'config_link', get_string('blockstring', 'block_iconos_anses'));
        $mform->setDefault('config_link', 'default value');
        $mform->setType('config_link', PARAM_MULTILANG);        
 
    }
}
