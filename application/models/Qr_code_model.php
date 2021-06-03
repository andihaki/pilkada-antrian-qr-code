<?php
class Qr_code_model extends CI_Model {
  function get() {
    $result = $this->db->get('qr_code');
    return $result;
  }

  function save($qr_code, $ktp) {
    $data = array(
      'qr_code' => $qr_code,
      'ktp' => $ktp,
    );
    $this->db->insert('qr_code', $data);
  }
}
?>