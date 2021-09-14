<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ResetPassword extends Render_Controller
{

	public function index()
	{
		$this->content = 'reset-password';
		$this->render();
	}

	function __construct()
	{
		parent::__construct();
		$this->default_template = 'templates/reset-password';
		$this->load->library('plugin');
		$this->load->helper('url');
	}
}
