<?php
 
/**
 * Settings for the anses theme
 */
 
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
 
// Logo file setting
$name = 'theme_anses/logo';
$title = get_string('logo','theme_anses');
$description = get_string('logodesc', 'theme_anses');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);
 
// Block region width
$name = 'theme_anses/regionwidth';
$title = get_string('regionwidth','theme_anses');
$description = get_string('regionwidthdesc', 'theme_anses');
$default = 240;
$choices = array(121=>'121px', 200=>'200px', 240=>'240px', 290=>'290px', 350=>'350px', 420=>'420px');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);
 
// Foot note setting
$name = 'theme_anses/footnote';
$title = get_string('footnote','theme_anses');
$description = get_string('footnotedesc', 'theme_anses');
$setting = new admin_setting_confightmleditor($name, $title, $description, '');
$settings->add($setting);
 
// Custom CSS file
$name = 'theme_anses/customcss';
$title = get_string('customcss','theme_anses');
$description = get_string('customcssdesc', 'theme_anses');
$setting = new admin_setting_configtextarea($name, $title, $description, '');
$settings->add($setting);
 
// Add our page to the structure of the admin tree


}
?>
