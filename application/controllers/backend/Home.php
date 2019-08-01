<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('level') <> 'admin')
		{
			redirect('backend/login');
		}

	}

	public function index()
	{
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/home');
		$this->load->view('backend/template/footer');
	}
	

}