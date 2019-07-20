<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experience extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Resource');

	}

	public function index()
	{
		$data['experience'] = $this->Resource->show('experience')->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/experience/index',$data);
		$this->load->view('backend/template/footer');
	}
	public function create()
	{
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/experience/create');
		$this->load->view('backend/template/footer');
	}

	public function store()
	{
		$date = $this->input->post('date');
		$company = $this->input->post('company');
		$position = $this->input->post('position');
		$description = $this->input->post('description');
		$data= array(
			'date' =>$date,
			'company' =>$company,
			'position' =>$position,
			'description' =>$description

		);
		$this->Resource->store($data,'experience');
		redirect('backend/experience/index');
	}
	public function edit($id){ 
		$where = array('id' => $id);
	    $data['experience'] = $this->Resource->edit($where,'experience')->result();
	    $this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/experience/edit',$data);
		$this->load->view('backend/template/footer');
	}
	public function update(){
		$id = $this->input->post('id');
		$date = $this->input->post('date');
		$company = $this->input->post('company');
		$position = $this->input->post('position');
		$description = $this->input->post('description');
		$data= array(
			'date' =>$date,
			'company' =>$company,
			'position' =>$position,
			'description' =>$description

		);
		$where = array(
			'id' => $id
			);

		$this->Resource->update($where,$data,'experience');
		redirect('backend/experience/index');

	}

	public function destroy ($id){ 
        $where = array('id' => $id); 
        $this->Resource->destroy($where,'experience');

        redirect('backend/experience/index'); 
    }
	
	

}