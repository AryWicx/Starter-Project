<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class MY_Controller extends CI_Controller {
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function admin_view($view, $data)
	{
		$this->load->view('admin_header', $data, FALSE);
		$this->load->view('admin/'.$view, $data, FALSE);
		$this->load->view('admin_footer', $data, FALSE);
	}

	function user_view($view, $data)
	{
		$this->load->view('View File', $data, FALSE);
		$this->load->view('View File', $data, FALSE);
		$this->load->view('View File', $data, FALSE);
	}

}
?>