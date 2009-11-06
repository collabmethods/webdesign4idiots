<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Code Igniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		Rick Ellis
 * @copyright	Copyright (c) 2006, pMachine, Inc.
 * @license		http://www.codeignitor.com/user_guide/license.html
 * @link		http://www.codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Code Igniter Prohax Helpers for the excellent projax library by NGCoders
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Ran Aroussi <ran@aroussi.com>
 * @link		http://www.ngcoders.com/projax ~ http://www.aroussi.com/projax
 */

// ------------------------------------------------------------------------


global $Projax;

// Change this if the classes are in a different location!
require_once (BASEPATH. 'projax/JavaScript.php');
require_once (BASEPATH. 'projax/Prototype.php');
require_once (BASEPATH. 'projax/Scriptaculous.php');

// for $projax = new Projax();
class Projax extends Scriptaculous 
{
}

function projax_init()
{
	global $Projax;
	if (!$Projax) {
		$Projax = new Projax();
	}
}


// javascript
function projax_button_to_function($name,$function=null)
{	
	global $Projax;
	projax_init();
	return $Projax->button_to_function($name, $function);
}

function projax_escape($javascript)
{	
	global $Projax;
	projax_init();
	return $Projax->escape($javascript);
}	

function projax_tag($content)
{	
	global $Projax;
	projax_init();
	return $Projax->tag($content);
}

function projax_link_to_function($name,$function,$html_options=null)
{	
	global $Projax;
	projax_init();
	return $Projax->link_to_function($name,$function,$html_options);
}

// prototype

function projax_evaluate_remote_response()
{	
	global $Projax;
	projax_init();
	return $Projax->evaluate_remote_response();
}

function projax_form_remote_tag($options)
{	
	global $Projax;
	projax_init();
	return $Projax->form_remote_tag($options);
}

function projax_link_to_remote($name,$function,$html_options=null)
{	
	global $Projax;
	projax_init();
	return $Projax->link_to_remote($name,$function,$html_options);
}

function projax_observe_field($field_id,$options=null)
{	
	global $Projax;
	projax_init();
	return $Projax->observe_field($field_id,$options);
}

function projax_observe_form($form,$options=null)
{	
	global $Projax;
	projax_init();
	return $Projax->observe_form($form,$options);
}

function projax_periodically_call_remote($options=null)
{	
	global $Projax;
	projax_init();
	return $Projax->periodically_call_remote($options);
}

function projax_remote_function($options)
{	
	global $Projax;
	projax_init();
	return $Projax->remote_function($options);
}

function projax_submit_to_remote($name,$value,$options=null)
{	
	global $Projax;
	projax_init();
	return $Projax->submit_to_remote($name,$value,$options);
}

function projax_dump($javascript)
{	
	global $Projax;
	projax_init();
	return $Projax->dump($javascript);
}

function projax_ID($id,$extend=null)
{	
	global $Projax;
	projax_init();
	return $Projax->ID($id,$extend);
}

function projax_alert($message)
{	
	global $Projax;
	projax_init();
	return $Projax->alert($message);
}

function projax_assign($variable,$value)
{	
	global $Projax;
	projax_init();
	return $Projax->assign($variable,$value);
}

function projax_call($function,$args=null)
{	
	global $Projax;
	projax_init();
	return $Projax->call($function,$args);
}

function projax_delay($seconds=1,$script='')
{	
	global $Projax;
	projax_init();
	return $Projax->delay($seconds,$script);
}

function projax_hide($ids)
{	
	global $Projax;
	projax_init();
	return $Projax->hide($ids);
}

function projax_insert_html($position,$id,$options_for_render=null)
{	
	global $Projax;
	projax_init();
	return $Projax->insert_html($position,$id,$options_for_render);
}

function projax_redirect_to($location)
{	
	global $Projax;
	projax_init();
	return $Projax->redirect_to($location);
}

function projax_remove($ids)
{	
	global $Projax;
	projax_init();
	return $Projax->remove($ids);
}

function projax_replace($id,$options_for_render=null)
{	
	global $Projax;
	projax_init();
	return $Projax->replace($id,$options_for_render);
}

function projax_replace_html($id,$options_for_render=null)
{	
	global $Projax;
	projax_init();
	return $Projax->replace_html($id,$options_for_render);
}

function projax_select($pattern)
{	
	global $Projax;
	projax_init();
	return $Projax->select($pattern);
}

function projax_show($ids)
{	
	global $Projax;
	projax_init();
	return $Projax->show($ids);
}

function projax_toggle($ids)
{	
	global $Projax;
	projax_init();
	return $Projax->toggle($ids);
}


// scriptalaculous

function projax_dragable_element($element_id,$options=null)
{	
	global $Projax;
	projax_init();
	return $Projax->dragable_element($element_id,$options);
}

function projax_drop_receiving_element($element_id,$options=null)
{	
	global $Projax;
	projax_init();
	return $Projax->drop_receiving_element($element_id,$options);
}

function projax_sortable_element($element_id,$options=null)
{	
	global $Projax;
	projax_init();
	return $Projax->sortable_element($element_id,$options);
}

function projax_visual_effect($name,$element_id=false,$js_options=null)
{	
	global $Projax;
	projax_init();
	return $Projax->visual_effect($name,$element_id,$js_options);
}

function projax_auto_complete_field($field_id,$options=null)
{	
	global $Projax;
	projax_init();
	return $Projax->auto_complete_field($field_id,$options);
}

function projax_in_place_editor($field_id,$options=null)
{	
	global $Projax;
	projax_init();
	return $Projax->in_place_editor($field_id, $options);
}

function projax_in_place_editor_field($object, $tag_options=null, $options=null)
{	
	global $Projax;
	projax_init();
	return $Projax->in_place_editor_field($object, $tag_options, $options);
}

function projax_text_field_with_auto_complete($object, $tag_options=null, $options=null)
{	
	global $Projax;
	projax_init();
	return $Projax->text_field_with_auto_complete($object, $tag_options, $options);
}
?>