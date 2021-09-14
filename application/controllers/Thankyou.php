<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Thankyou extends Render_Controller
{

	public function index()
	{
		$this->content = 'thankyou';
		$this->render();
	}

	function __construct()
	{
		parent::__construct();
		$this->default_template = 'templates/thankyou';
		$this->load->library('plugin');
		$this->load->helper('url');
	}
}
