<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('welcome');
		$this->load->view('templates/footer');
	}

	public function auth()
	{
		$this->load->model('code_model');

		$code = $this->input->post('code');
		$res = $this->code_model->getCode($code);

		if ($res != NULL) {
			$this->session->set_userdata('code', $res);
			redirect('welcome/video');
		} else {
			redirect('/');
		}
	}

	public function video()
	{
		$this->load->view('templates/header');
		$this->load->view('video');
		$this->load->view('templates/footer');
	}

	public function reception()
	{
		$data = array(
			'code' => $this->session->userdata('code'),
		);
		$this->load->view('templates/header');
		$this->load->view('reception', $data);
		$this->load->view('templates/footer');
	}
}
