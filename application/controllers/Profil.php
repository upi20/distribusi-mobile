<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends Render_Controller
{

    // dipakai Administrator |
    public function index()
    {
        // Page Settings
        $this->title = 'Profil';
        $this->navigation = ['Profil'];
        $this->plugins = [];

        // Breadcrumb setting
        $this->breadcrumb_1 = 'Profil';
        $this->breadcrumb_1_url = base_url();

        $status = 1;
        $this->data['menu'] = 'profil';
        if($status == 1){
            $this->content      = 'sales/profil';            
        }else{
            $this->content      = 'manager/profil';            
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
        // var_dump($this->default->menu());
        // exit();

        $this->default_template = 'templates/dashboard';
        $this->load->library('plugin');
        $this->load->helper('url');
    }
}
