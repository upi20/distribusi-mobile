<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Profile extends RestController
{
  public function index_get()
  {
    $profile = $this->model->getProfileBody($this->id);

    $this->response([
      'status' => true,
      'length' => 2,
      'data' => [
        'profile' => $profile,
        'warung' => [
          'warung' => 123,
          'renceng' => 456,
          'bonus' => 789
        ]
      ],
    ], RestController::HTTP_OK);
  }

  public function update_post()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('', '');
    $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
    $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
    $this->form_validation->set_rules('no_hp', 'No HP', 'trim|required');
    $this->form_validation->set_rules('foto', 'Foto', 'trim');
    $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
    if ($this->form_validation->run() == FALSE) {
      $this->response([
        'status' => false,
        'data' => null,
        'message' => validation_errors()
      ], 400);
    } else {
      $user_nama = $this->input->post('nama');
      $user_tgl_lahir = $this->input->post('tanggal_lahir');
      $user_jk = $this->input->post('jenis_kelamin');
      $user_phone = $this->input->post('no_hp');
      $user_foto = $this->input->post('foto');
      $user_email = $this->input->post('email');
      $user_passwoord = $this->input->post('password');
      $result = $this->model->UpdateProfile(
        $this->id,
        $user_nama,
        $user_tgl_lahir,
        $user_jk,
        $user_phone,
        $user_foto,
        $user_email,
        $user_passwoord
      );

      $code = $result['code'] != 1 ?
        409
        : RestController::HTTP_OK;
      $status = $result['code'] != 0;
      $this->response([
        'status' => $status,
        'length' => 1,
        'data' =>  $result
      ], $code);
    }
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
    $this->load->model('api/ProfileModel', 'model');
  }
}
