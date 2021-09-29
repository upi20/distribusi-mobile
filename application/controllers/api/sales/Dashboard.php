<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Dashboard extends RestController
{
  public function index_get()
  {
    $stok_dibawa = $this->model->api_getStokDibawa($this->id);
    $terjual = $this->model->api_getTerjual($this->id);
    $sisa = $this->model->api_sisaPenjualan($stok_dibawa, $terjual);

    $this->response([
      'status' => true,
      'length' => 3,
      'data' => [
        'stok_dibawa' => $stok_dibawa,
        'terjual' => $terjual,
        'sisa' => $sisa
      ],
    ], RestController::HTTP_OK);
  }

  public function warung_detail_get()
  {
    $id = $this->get('id');
    $data = $this->model->api_warung_detail($this->id, $id);
    $code = $data['data'] == null ?
      RestController::HTTP_NOT_FOUND
      : RestController::HTTP_OK;
    $status = $data['data'] != null;

    // send response
    $this->response([
      'status' => $status,
      'length' => $data['length'],
      'data' => $data['data']
    ], $code);
  }

  public function warung_get()
  {
    $id = $this->get('id');
    $cari = $this->get('cari');
    $data = $this->model->api_warung($this->id, $id, $cari);
    $code = $data['data'] == null ?
      RestController::HTTP_NOT_FOUND
      : RestController::HTTP_OK;
    $status = $data['data'] != null;

    // send response
    $this->response([
      'status' => $status,
      'length' => $data['length'],
      'data' => $data['data']
    ], $code);
  }


  public function beli_post()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('', '');
    $this->form_validation->set_rules('key', 'Key', 'required');
    $this->form_validation->set_rules('id_stok_keluar', 'ID Stok Keluar', 'required');
    $this->form_validation->set_rules('qty', 'Qty', 'required|numeric');
    $this->form_validation->set_rules('id_produk', 'ID Produk', 'required|numeric');
    $this->form_validation->set_rules('id_satuan_harga', 'ID Satuan Harga', 'required|numeric');
    $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
    $this->form_validation->set_rules('total_harga', 'Total Harga', 'required|numeric');
    $this->form_validation->set_rules('dibayar', 'Dibayar', 'required|numeric');
    $this->form_validation->set_rules('sisa', 'Sisa', 'required|numeric');
    $this->form_validation->set_rules('status', 'Status', 'required|numeric');
    if ($this->form_validation->run() == FALSE) {
      $this->response([
        'status' => false,
        'data' => null,
        'message' => validation_errors()
      ], 400);
    } else {
      $id_stok_keluar = $this->input->post('id_stok_keluar');
      $qty = $this->input->post('qty');
      $id_produk = $this->input->post('id_produk');
      $id_satuan_harga = $this->input->post('id_satuan_harga');
      $id_warung = $this->input->post('id_warung');
      $harga = $this->input->post('harga');
      $total_harga = $this->input->post('total_harga');
      $dibayar = $this->input->post('dibayar');
      $sisa = $this->input->post('sisa');
      $status = $this->input->post('status');
      $result = $this->model->api_insertSalesPenjualan(
        $id_stok_keluar,
        $qty,
        $id_produk,
        $id_satuan_harga,
        $id_warung,
        $harga,
        $total_harga,
        $dibayar,
        $sisa,
        $status,
        $this->id
      );

      $status = $result == null;
      $code = $result == null ?
        RestController::HTTP_NOT_FOUND
        : RestController::HTTP_OK;
      $status = $result != null;
      $this->response([
        'status' => $status,
        'length' => 1,
        'data' =>  $result
      ], $code);
    }
  }

  public function list_paket_get()
  {
    $id = $this->get('id');
    $cari = $this->get('cari');
    $data = $this->model->api_listSatuanHarga($id, $cari);
    $code = $data['data'] == null ?
      RestController::HTTP_NOT_FOUND
      : RestController::HTTP_OK;
    $status = $data['data'] != null;
    $this->response([
      'status' => $status,
      'length' => $data['length'],
      'data' => $data['data']
    ], $code);
  }

  public function list_produk_get()
  {
    $id = $this->get('id');
    $cari = $this->get('cari');
    $data = $this->model->api_listProduk($id, $cari);
    $code = $data['data'] == null ?
      RestController::HTTP_NOT_FOUND
      : RestController::HTTP_OK;
    $status = $data['data'] != null;
    $this->response([
      'status' => $status,
      'length' => $data['length'],
      'data' => $data['data']
    ], $code);
  }

  function __construct()
  {
    parent::__construct();
    $key = $this->input->get('key');
    $key = $key ?? $this->input->post('key');
    if ($key == null) {
      $this->response([
        'status' => false,
        'message' => 'Key Tidak Valid'
      ], RestController::HTTP_UNAUTHORIZED);
      exit();
    }

    // cek level
    // Get data
    $userdata = $this->sesion->cek_userdata_api($key);
    $this->level = $userdata['level'];
    $this->id = $userdata['id'];
    if ($this->level != 'Sales') {
      $this->response([
        'status' => false,
        'message' => 'Akses anda ditolak'
      ], RestController::HTTP_FORBIDDEN);
      exit();
    }

    // import model
    $this->load->model('DashboardModel', 'model');
  }

  function validation_get()
  {
    $this->form_validation->set_error_delimiters('', '');
    $this->form_validation->set_rules('fname', 'First Name', 'required');
    $this->form_validation->set_rules('lname', 'Last Name', 'required');
    $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[sec_users.email]');
    if ($this->form_validation->run() == FALSE) {
      echo validation_errors();
    } else {
      // To who are you wanting with input value such to insert as
      $data['frist_name'] = $this->input->post('fname');
      $data['last_name'] = $this->input->post('lname');
      $data['user_name'] = $this->input->post('email');
      // Then pass $data  to Modal to insert bla bla!!
    }
  }
}
