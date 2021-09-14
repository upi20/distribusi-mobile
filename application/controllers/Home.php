<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Render_Controller
{

    // dipakai Administrator |
    public function index()
    {
        // Page Settings
        $this->title = 'Home';
        $this->navigation = ['Home'];
        $this->plugins = [];

        // Breadcrumb setting
        $this->breadcrumb_1 = 'Home';
        $this->breadcrumb_1_url = base_url();

        $status = 1;
        $this->data['menu'] = 'home';
        
        if($status == 1){
            $this->content      = 'sales/home';            
        }else{
            $this->content      = 'manager/home';            
        }
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
