<?php
class User extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('user_model');
  }

  function index() {
    $data['data'] = $this->user_model->get();
    $this->load->view('user_view', $data);
  }

  function save() {
    $ktp = $this->input->post('ktp');
    $nama = $this->input->post('nama');
    $nomor_hp = $this->input->post('nomor_hp');
    $role = $this->input->post('role');
    
    $this->load->library('ciqrcode');

    $config['cacheable'] = true;
    $config['cachedir'] = './assets/';
    $config['errorlog'] = './assets/';
    $config['imagedir'] = './assets/images/';
    $config['quality'] = true;
    $config['size'] = '1024';
    $config['black'] = array(255, 255, 255);
    $config['white'] = array(70, 130, 170);

    $image_name = $ktp.'.png';

    $params['data'] = $ktp;
    $params['level'] = 'H';
    $params['size'] = 10;
    $params['savename'] = FCPATH.$config['imagedir'].$image_name;
    $this->ciqrcode->generate($params);

    $this->user_model->save($ktp, $nama, $nomor_hp, $role, $image_name);
    redirect('user');    
  }
}
?>