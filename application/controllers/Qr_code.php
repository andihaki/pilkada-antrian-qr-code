<?php
class Qr_code extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('qr_code_model');
  }

  function index() {
    $data['data'] = $this->qr_code_model->get();
    $this->load->view('qr_code_view', $data);
  }

  function save() {
    $ktp = $this->input->post('ktp');
    
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

    $this->qr_code_model->save($image_name, $ktp);
    redirect('qr_code');    
  }
}
?>