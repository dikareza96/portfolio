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
		$data['testimonial'] = $this->Resource->show($this->table)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/testimonial/index',$data);
		$this->load->view('backend/template/footer');
	}
	function create()
	{
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/testimonial/create');
		$this->load->view('backend/template/footer');
	}
	function store()
	{
		$name = $this->input->post('name');
		$position = $this->input->post('position');
		$comment = $this->input->post('comment');
		$data= array(
			'name' =>$name,
			'position' =>$position,
			'comment' =>$comment
		);
		$this->Resource->store($data,$this->table);
		redirect('backend/testimonial/index');
	}
	function edit($id){ 
		$where = array('id' => $id);
	    $data['testimonial'] = $this->Resource->edit($where,$this->table)->result();
	    $this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/testimonial/edit',$data);
		$this->load->view('backend/template/footer');
	}
	function update(){
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

		$this->Resource->update($where,$data,$this->table);
		redirect('backend/testimonial/index');

	}

	function destroy ($id){ 
        $where = array('id' => $id); 
        $this->Resource->destroy($where,$this->table);

        redirect('backend/testimonial/index'); 
    }
	
	

}