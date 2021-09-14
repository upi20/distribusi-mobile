<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LupaPassword extends Render_Controller
{

	public function index()
	{
		$this->content = 'lupa-password';
		$this->render();
	}

	function __construct()
	{
		parent::__construct();
		$this->default_template = 'templates/lupa-password';
		$this->load->library('plugin');
		$this->load->helper('url');
	}
}
