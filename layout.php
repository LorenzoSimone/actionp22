<?php  if ( ! defined('BASEPATH')) trigger_error('No direct script access allowed');
/**
 * Simple CRM
 *
 * @package		Simple CRM
 * @author		karlkori
 * @copyright	Copyright (c) 2012, karlkori.name.
 * @license		
 * @link		https://github.com/karlkori/Simple-CRM
 * @since		Version 1.0
 */

// ------------------------------------------------------------------------

/**
 * Layout Class
 */
class Layout {

	private $CI =& get_instance();

	public function render($part, $data = array())
	{
		if(is_null($CI) === true )
		{
			trigger_error('CI failed to load');
		}
		$data['part_name'] = $part;
		$this->CI->load->view('layout', $data); 
	}

}


/* End of file layout.php */
/* Location: ./application/libraries/layout.php */