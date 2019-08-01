<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('Resource');
	}


	public function index()
	{
			
		$data['client'] = $this->Resource->show('client')->result();
		$data['testimonials'] = $this->Resource->show('testimonial')->result();
		$data['skill'] = $this->Resource->show('skill')->result();
		$data['profile'] = $this->Resource->show('profile')->result();
		$data['contact'] = $this->Resource->show('contact')->result();
		$this->load->view('f_sidebar',$data);
		$this->load->view('content/index', $data);
		$this->load->view('f_footer');

	}

	public function resume()
	{
		$data['education'] = $this->Resource->show('education')->result();
		$data['experience'] = $this->Resource->show('experience')->result();
		$data['client'] = $this->Resource->show('client')->result();
		$data['testimonials'] = $this->Resource->show('testimonial')->result();
		$data['skill'] = $this->Resource->show('skill')->result();
		$data['profile'] = $this->Resource->show('profile')->result();
		$data['contact'] = $this->Resource->show('contact')->result();
		$this->load->view('f_sidebar', $data);
		$this->load->view('content/resume', $data);
		$this->load->view('f_footer');

	}

	public function services()
	{
		$data['profile'] = $this->Resource->show('profile')->result();
		$data['services'] = $this->Resource->show('services')->result();
		$this->load->view('f_sidebar',$data);
		$this->load->view('content/services',$data);
		$this->load->view('f_footer');

	}

	public function post($id)
	{
		$where = array('id' => $id);
		$data['blog'] = $this->Resource->edit($where,'blog')->result();
		$data['profile'] = $this->Resource->show('profile')->result();
		$this->load->view('f_sidebar',$data);
		$this->load->view('content/post',$data);
		$this->load->view('f_footer');

	}

	public function blog()
	{
		$data['blog'] = $this->Resource->show('blog')->result();
		$data['profile'] = $this->Resource->show('profile')->result();
		$this->load->view('f_sidebar', $data);
		$this->load->view('content/blog', $data);
		$this->load->view('f_footer');

	}

	public function portfolio()
	{
		$data['profile'] = $this->Resource->show('profile')->result();
		$data['portfolio'] = $this->Resource->show('project')->result();
		$this->load->view('f_sidebar', $data);
		$this->load->view('content/portfolio', $data);
		$this->load->view('f_footer');

	}

	public function project_single($id)
	{
		$where = array('id' => $id);
		$data['profile'] = $this->Resource->show('profile')->result();
		$data['project'] = $this->Resource->edit($where,'project')->result();
		$this->load->view('f_sidebar', $data);
		$this->load->view('content/projects_single', $data);
		$this->load->view('f_footer');

	}

	 
	public function contact()
	{

		
		$data['contact'] = $this->Resource->show('contact')->result();
		$data['profile'] = $this->Resource->show('profile')->result();
		$this->load->view('f_sidebar',$data);
		$this->load->view('content/contact', $data);
		$this->load->view('f_footer');

	}

	public function projects_single()
	
	{
		$data['project_single'] = $this->Resource->show('project')->result();
		$this->load->view('f_sidebar');
		$this->load->view('content/projects_single', $data);
		$this->load->view('f_footer');

	}
}
