<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KreditModel extends Render_Model
{
  public function api_warung($id_sales, $id = null, $cari): ?array
  {
    $status_kredit = 1;
    $this->db->select("a.id,
      CONCAT(a.nama_pemilik, ' ', '[', a.kode, ']') as nama,
      a.alamat, (
        select sum((c.jumlah_karton * 12) + c.jumlah_renceng)
          from warung_sales_penjualan as c
        join warung as d on d.id = c.id_warung
        where d.id_sales = '$id_sales' and b.status = $status_kredit and d.id = a.id
      ) as renceng");
    $this->db->from('warung a');
    $this->db->join('warung_sales_penjualan b', 'a.id = b.id_warung');
    $this->db->where('a.id_sales', $id_sales);
    $this->db->where('b.status', $status_kredit);

    if ($cari != null) {
      $this->db->where("(
      a.kode LIKE '%$cari%' or
      a.nama_pemilik LIKE '%$cari%' or
      a.alamat LIKE '%$cari%' or
      a.no_hp LIKE '%$cari%' or
      a.patokan LIKE '%$cari%'
      )");
    }

    $this->db->group_by('a.id');
    if ($id == null) {
      $db = $this->db->get();
      $length = $db->num_rows();
      $return = $db->result_array();
    } else {
      $this->db->where('a.id', $id);
      $db = $this->db->get();
      $length = $db->num_rows();
      $return = $db->row_array();
    }
    $return = ['data' => $return, 'length' => $length];
    return $return;
  }
}
