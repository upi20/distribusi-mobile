<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NewOutlet extends Render_Controller
{

    // dipakai Administrator |
    public function index()
    {
        // Page Settings
        $this->title = 'New Outlet';
        $this->navigation = ['New Outlet'];
        $this->plugins = [];

        // Breadcrumb setting
        $this->breadcrumb_1 = 'New Outlet';
        $this->breadcrumb_1_url = base_url();

        $this->data['menu'] = 'New Outlet';
        $this->content      = 'sales/new-outlet';            
        
        // content

        // Send data to view
        $this->render();
    }

    function __construct()
    {
        parent::__construct();
        // Cek session
        // $this->sesion->cek_session();
        // if ($this->session->userdata('data')['level'] != 'Administrator') {
        //     redirect('my404', 'refresh');
        // }

        $this->default_template = 'templates/dashboard';
        $this->load->library('plugin');
        $this->load->helper('url');
    }
}
