<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct() {
    parent::__construct();
    $this->load->model('user_model');
  }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$data['data'] = $this->user_model->get_present();
		$this->load->view('home_view', $data);
	}


  function save() {
    $ktp = $this->input->post('ktp');   
    

		// print_r('test'.$ktp);
    $this->user_model->update_present($ktp);
    redirect('');
  }
}
