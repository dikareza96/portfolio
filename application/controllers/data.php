<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

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
		$this->load->view('f_sidebar');
		$this->load->view('content/index');
		$this->load->view('f_footer');

	}

	public function resume()
	{
		$this->load->view('f_sidebar');
		$this->load->view('content/resume');
		$this->load->view('f_footer');

	}

	public function services()
	{
		$this->load->view('f_sidebar');
		$this->load->view('content/services');
		$this->load->view('f_footer');

	}

	public function post()
	{
		$this->load->view('f_sidebar');
		$this->load->view('content/post');
		$this->load->view('f_footer');

	}

	public function blog()
	{
		$this->load->view('f_sidebar');
		$this->load->view('content/blog');
		$this->load->view('f_footer');

	}

	public function portfolio()
	{
		$this->load->view('f_sidebar');
		$this->load->view('content/portfolio');
		$this->load->view('f_footer');

	}

	public function contact()
	{
		$this->load->view('f_sidebar');
		$this->load->view('content/contact');
		$this->load->view('f_footer');

	}

	public function projects_single()
	{
		$this->load->view('f_sidebar');
		$this->load->view('content/projects_single');
		$this->load->view('f_footer');

	}
}
