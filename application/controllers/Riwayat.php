<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends Render_Controller
{

  public function index()
  {
    // Page Settings
    $this->title = 'Riwayat';
    $this->navigation = ['riwayat'];
    $this->plugins = [];

    // Breadcrumb setting
    $this->breadcrumb_1 = 'riwayat';
    $this->breadcrumb_1_url = base_url();

    $status = 1;
    $this->data['menu'] = 'riwayat';

    if ($status == 1) {
      $this->content      = 'sales/riwayat/list';
    } else {
      $this->content      = 'manager/riwayat/list';
    }
    // content

    // Send data to view
    $this->render();
  }

  public function detail()
  {
    // Page Settings
    $this->title = 'Detail';
    $this->navigation = ['riwayat'];
    $this->plugins = [];

    // Breadcrumb setting
    $this->breadcrumb_1 = 'riwayat';
    $this->breadcrumb_1_url = base_url();

    $status = 1;
    $this->data['menu'] = 'riwayat';

    if ($status == 1) {
      $this->content      = 'sales/riwayat/detail';
    } else {
      $this->content      = 'manager/riwayat/detail';
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
