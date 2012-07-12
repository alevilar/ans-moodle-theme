<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Form for editing HELPDESK block instances.
 *
 * @package   block_helpdek
 * @copyright 1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_iconos_anses extends block_base {

    function init() {
        $this->title = get_string('pluginname', 'block_iconos_anses');
    }
         
    public function hide_header() {
      return true;
    }

/*
    public function has_config() {
        return false;
    }
*/
    /**
     * allow more than one instance of the block on a page
     *
     * @return boolean
     */
    public function instance_allow_multiple() {
        //allow more than one instance on a page
        return false;
    }

    /**
     * allow instances to have their own configuration
     *
     * @return boolean
     */
    function instance_allow_config() {
        //allow instances to have their own configuration
        return false;
    }

    /**
     * instance specialisations (must have instance allow config true)
     *
     */
    public function specialization() {
    }

    /**
     * displays instance configuration form
     *
     * @return boolean
     */
    function instance_config_print() {
        return false;

        /*
        global $CFG;

        $form = new block_myprofile.phpConfigForm(null, array($this->config));
        $form->display();

        return true;
        */
    }

    /**
     * locations where block can be displayed
     *
     * @return array
     */
    public function applicable_formats() {
        return array('all'=>true);
    }

    /**
     * post install configurations
     *
     */
    public function after_install() {
    }

    /**
     * post delete configurations
     *	
     */
    public function before_delete() {
    }


    public function html_attributes() {
        $attributes = parent::html_attributes(); // Get default values
        $attributes['class'] .= ' block_'. $this->name(); // Append our class to class attribute
        return $attributes;
    }


    function get_content() {
	global $CFG;

        $this->content         =  new stdClass;
	
    	$url = "$CFG->wwwroot/mod/page/view.php?id=1";

        $this->content->text = '

<div class="box-user-anses">
<ul>
<li><a data-href="block_messages" href="#" class="box-user-mensajes link-user-anses" onclick="">Mensajes</a></li>
<li><a data-href="block_myprofile" href="#" class="box-user-perfil link-user-anses">Perfil</a></li>
<li><a data-href="block_calendar_month" href="#" class="box-user-calendar link-user-anses">Calendario</a></li>
<li><a data-href="block_helpdesk" href="#" class="box-user-helpdesk link-user-anses active">Mesa de Ayuda</a></li>
</ul>
</div>
<script type="text/javascript">// <![CDATA[
YAHOO.util.Event.onDOMReady(function(){
	function esconderLosBoxes() {
			YAHOO.util.Dom.setStyle(YAHOO.util.Dom.getElementsByClassName("block_calendar_month"), "display", "none");
			YAHOO.util.Dom.setStyle(YAHOO.util.Dom.getElementsByClassName("block_messages"), "display", "none");
			YAHOO.util.Dom.setStyle(YAHOO.util.Dom.getElementsByClassName("block_myprofile"), "display", "none");
			YAHOO.util.Dom.setStyle(YAHOO.util.Dom.getElementsByClassName("block_helpdesk"), "display", "none");		
	}

	esconderLosBoxes();

	// El bloque que quiero que este activo por defecto
	YAHOO.util.Dom.setStyle(YAHOO.util.Dom.getElementsByClassName("block_helpdesk"), "display", "block");


	

	
	YUI().use("node", function (Y) {
		
		Y.all(".link-user-anses").on("click", function(e){
			e.preventDefault();
			esconderLosBoxes();
			var block = e.target.getAttribute("data-href");		
			if ( block ) {
				Y.all(".box-user-anses .active").removeClass("active");
				e.target.toggleClass("active");
				YAHOO.util.Dom.setStyle(YAHOO.util.Dom.getElementsByClassName(block), "display", "block");
			}			
		});

	});
});
// ]]></script>


';              

        return $this->content;
    }
    
} 
