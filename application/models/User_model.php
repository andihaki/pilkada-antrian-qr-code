<?php
class User_model extends CI_Model {
  function get() {
    $result = $this->db->get('user');
    return $result;
  }

  function save($ktp, $nama, $nomor_hp, $role, $qr_code) {
    $data = array(
      'ktp' => $ktp,
      'nama' => $nama,
      'nomor_hp' => $nomor_hp,
      'role' => $role,
      'qr_code' => $qr_code
    );
    $this->db->insert('user', $data);
  }

  function present($ktp, $tps) {
    $data = array(
      'ktp' => $ktp,
      'tps' => $tps,
      'status' => 'hadir'
    );

    $this->db->insert('suara', $data);
  }

  function get_present() {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->join('suara', 'user.ktp = suara.ktp');
    $this->db->where('suara.status', 'hadir');

    $result = $this->db->get();
    return $result;
  }

  function update_present($ktp) {
    $this->db->where('ktp', $ktp);
    $this->db->update('suara', array('status' => 'mencoblos'));
    return true;
  }
}
?>