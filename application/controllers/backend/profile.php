<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Resource');
		

	}

	protected $table = 'profile'; 

	function index()
	{
		$data['profile'] = $this->Resource->show($this->table)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/profile/index',$data);
		$this->load->view('backend/template/footer');
	}
	function create()
	{
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/profile/create');
		$this->load->view('backend/template/footer');
	}
	function store()
	{
		$profile_id = $this->input->post('id');
		$content = $this->input->post('content');
		$position = $this->input->post('position');
		$name = $this->input->post('name');
		$profesi = $this->input->post('profesi');
		$data= array(
			'id' =>$profile_id,
			'content' =>$content,
			'position'=>$position,
			'name' =>$name,
			'profesi' =>$profesi

		);

		 print_r($data);


		// $this->Resource->store($data,$this->table);
		// redirect('backend/profile/index');
	}
	function edit($id){ 
		$where = array('id' => $id);
	    $data['experience'] = $this->Resource->edit($where,$this->table)->result();
	    $this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/profile/edit',$data);
		$this->load->view('backend/template/footer');
	}
	function update(){
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

		$this->Resource->update($where,$data,$this->table);
		redirect('backend/profile/index');

	}

	function destroy ($id){ 
        $where = array('id' => $id); 
        $this->Resource->destroy($where,$this->table);

        redirect('backend/profile/index'); 
    }
	
	

}