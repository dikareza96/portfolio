<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

	
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Resource');
	}

	protected $table = 'testimonial';

	
	function index()
	{
		$module = $this->table;
		$data['route'] = $this->table;
		$data[$module] = $this->Resource->show($module)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/'.$module.'/index',$data);
		$this->load->view('backend/template/footer');
	}
	function create()
	{
		$module = $this->table;
		$data['route'] = $this->table;
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/'.$module.'/create', $data);
		$this->load->view('backend/template/footer');
	}
	function store()
	{
		$module = $this->table;
		$name = $this->input->post('name');
		$position = $this->input->post('position');
		$comment = $this->input->post('comment');
		$data= array(
			'name' =>$name,
			'position' =>$position,
			'comment' =>$comment
		);
		$this->Resource->store($data,$module);
		redirect('backend/'.$module.'/index');
	}
	function edit($id){ 
		$module = $this->table;
        $data['route'] = $this->table;
		$where = array('id' => $id);
	    $data[$module] = $this->Resource->edit($where,$module)->result();
	    $this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/'.$module.'/edit',$data);
		$this->load->view('backend/template/footer');
	}
	function update(){
		$module = $this->table;
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$position = $this->input->post('position');
		$comment = $this->input->post('comment');
		$data= array(
			'name' =>$name,
			'position' =>$position,
			'comment' =>$comment
		);
		$where = array(
			'id' => $id
			);

		$this->Resource->update($where,$data,$module);
		redirect('backend/'.$module.'/index');
	}
	function destroy ($id){ 
		$module = $this->table;
        $where = array('id' => $id); 
        $this->Resource->destroy($where,$module);
        redirect('backend/'.$module.'/index'); 
    }
	
	

}