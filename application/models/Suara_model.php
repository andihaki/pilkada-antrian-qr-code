<?php
class Suara_model extends CI_Model {
  function get() {
    $result = $this->db->get('suara');
    return $result;
  }

  function save($tps, $status, $ktp) {
    $data = array(
      'tps' => $tps,
      'status' => $status,
      'ktp' => $ktp
    );
    $this->db->insert('suara', $data);
  }

  function present($ktp, $tps) {
    $data = array(
      'ktp' => (int)$ktp,
      'tps' => $tps,
      'status' => 'hadir'
    );

    $this->db->insert('suara', $data);
  }
}
?>