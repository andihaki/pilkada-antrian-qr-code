<?php
class Suara extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('suara_model');
  }

  function index() {
    $this->load->view('suara_view');
  }

  // menandai peserta telah hadir
  function present() {
    // $ktp = '1234';
    $ktp = $this->input->post('ktp');
    $tps = 'TPS007';

    // print_r($ktp." ~ ".$tps);
    $this->suara_model->present($ktp, $tps);
    redirect('suara');
  }
}
?>