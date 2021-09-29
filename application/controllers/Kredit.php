<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kredit extends Render_Controller
{

    // dipakai Administrator |
    public function index()
    {
        // Page Settings
        $this->title = 'Kredit';
        $this->navigation = ['Kredit'];
        $this->plugins = [];

        // Breadcrumb setting
        $this->breadcrumb_1 = 'Home';
        $this->breadcrumb_1_url = base_url();

        $status = 1;
        $this->data['menu'] = 'kredit';
        if($status == 1){
            $this->content      = 'sales/kredit';            
        }else{
            $this->content      = 'manager/home';            
        }
        // content

        // Send data to view
        $this->render();
    }

    public function bayar(){
        $this->data['id_stok_keluar'] = $this->input->get('id_stok_keluar');
        $this->data['id_warung'] = $this->input->get('id_warung');

        // Page Settings
        $this->title = 'Kredit';
        $this->navigation = ['Kredit'];
        $this->plugins = [];

        // Breadcrumb setting
        $this->breadcrumb_1 = 'Kredit';
        $this->breadcrumb_1_url = base_url();

        $this->data['menu'] = 'kredit';
        $this->content      = 'sales/kredit-bayar';            
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
