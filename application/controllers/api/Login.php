<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Login extends RestController
{
  public function index_post()
  {
    $username   = $this->input->post('username');
    $password   = $this->input->post('password');
    $login     = $this->login->cekLogin($username, $password);
    if ($login['status'] == 0) {
      // Set session value
      // akun aktif
      if ($login['data'][0]['user_status'] == 1) {
        // get key
        $id = $login['data'][0]['user_id'];
        $key = $this->getKeyByIdUser($id);

        // cek level
        if ($login['data'][0]['lev_id'] == 6) {
          if ($key != null) {
            $data = [
              'key' => $key['key'],
              'id' => $id,
              'nama' => $login['data'][0]['user_nama'],
              'email' => $login['data'][0]['user_email'],
              'level' => $login['data'][0]['lev_nama'],
              'level_id' => $login['data'][0]['lev_id'],
            ];

            $this->response([
              'status' => true,
              'message' => 'Login berhasil',
              'data' => $data
            ], 200);
          } else {
            // key api tidak ada di table
            $this->response([
              'status' => false,
              'message' => 'Akun tidak di izinkan menggunakan api ini'
            ], 403);
          }
        } else {
          $this->response([
            'status' => false,
            'message' => "Akun dengan level {$login['data'][0]['lev_nama']} tidak di izinkan menggunakan api ini"
          ], 403);
        }
      }
      // akun di nonaktifkan
      else if ($login['data'][0]['user_status'] == 0) {
        $this->response([
          'status' => false,
          'message' => 'Akun di nonaktifkan'
        ], 400);
      }
      // menunggu dikonfirmasi
      else if ($login['data'][0]['user_status'] == 2) {
        $this->response([
          'status' => false,
          'message' => 'Akun di nonaktifkan'
        ], 400);
      }
      // erorr
      else {
        $this->response([
          'status' => false,
          'message' => 'Server error'
        ], 500);
      }
    } else if ($login['status'] == 1) {
      $this->response([
        'status' => false,
        'message' => 'Password salah'
      ], 400);
    } else {
      $this->response([
        'status' => false,
        'message' => 'Akun tidak ditemukan'
      ], 400);
    }
  }

  private function getKeyByIdUser($id_user)
  {
    $return = $this->db->select('key')->get_where('keys', ['user_id' => $id_user])->row_array();
    return $return;
  }

  function __construct()
  {
    parent::__construct();
    $this->load->model('loginModel', 'login');
    $this->check_cors = true;
  }
}
// uniqid("distribusi".Date('Ymdhis'), false); uuid generator
/* End of file Login.php */
/* Location: ./application/controllers/Login.php */