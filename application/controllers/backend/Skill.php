<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skill extends CI_Controller {

	
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Resource');
		

	}

	protected $table = 'skill'; 

	function index()
	{
		$data['skill'] = $this->Resource->show($this->table)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/skill/index',$data);
		$this->load->view('backend/template/footer');
	}
	function create()
	{
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/skill/create');
		$this->load->view('backend/template/footer');
	}
	function store()
	{
		$skill = $this->input->post('skill');
		$experience = $this->input->post('experience');
		$data= array(
			'skill' =>$skill,
			'experience' =>$experience

		);
		$this->Resource->store($data,$this->table);
		redirect('backend/skill/index');
	}
	function edit($id){ 
		$where = array('id' => $id);
	    $data['skill'] = $this->Resource->edit($where,$this->table)->result();
	    $this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/skill/edit',$data);
		$this->load->view('backend/template/footer');
	}
	function update(){
		$id = $this->input->post('id');
		$skill = $this->input->post('skill');
		$experience = $this->input->post('experience');
		$data= array(
			'skill' =>$skill,
			'experience' =>$experience

		);
		$where = array(
			'id' => $id
			);

		$this->Resource->update($where,$data,$this->table);
		redirect('backend/skill/index');

	}

	function destroy ($id){ 
        $where = array('id' => $id); 
        $this->Resource->destroy($where,$this->table);

        redirect('backend/skill/index'); 
    }
	
	

}