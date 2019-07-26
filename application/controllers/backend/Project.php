<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url','file', 'text'));
		$this->load->model('Resource');
		if($this->session->userdata('level') <> 'admin')
		{
			redirect('backend/login');
		}

	}

	protected $table = 'project'; 

	function index()
	{
		$module = $this->table;
		$data['route'] = $this->table;
		$data[$module] = $this->Resource->show($this->table)->result();
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
		$this->load->library('upload');
        $nmfile = "file_".time(); 
        $config['upload_path'] = './assets/uploads/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['max_size']             = 2000;
		$config['max_width']            = 2048;
        $config['max_height']           = 2048;
        $config['file_name'] = $nmfile;
        $this->upload->initialize($config);
         if($_FILES['image']['name'])
        {
	        if ($this->upload->do_upload('image'))
	        {
		    $title = $this->input->post('title');
		    $teaser = $this->input->post('teaser');
		    $content = $this->input->post('content');
		  
	        $gbr = $this->upload->data();
	        $data = array(
	        			'title' => $title,
	        			'teaser' => $teaser,
	        			'content' => $content,
	        			'img' =>$gbr['file_name']

	        			);
	        $this->Resource->store($data,$this->table);  
	        } 
	    }
		redirect('backend/'.$module.'/index');
	}
	function edit($id){
	    $module = $this->table;
		$data['route'] = $this->table; 
		$where = array('id' => $id);
	    $data[$module] = $this->Resource->edit($where,$this->table)->result();
	    $this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/'.$module.'/edit',$data);
		$this->load->view('backend/template/footer');
	}
	function update(){
		$module = $this->table;
		
		$this->load->library('upload');
		$id = $this->input->post('id');
        $title = $this->input->post('title');
		 $teaser = $this->input->post('teaser');
		    $content = $this->input->post('content');
		     $data = array(
	        			'title' => $title,
	        			'teaser' => $teaser,
	        			'content' => $content,
	        			);
        $nmfile = "file_".time(); 
        $config['upload_path'] = './assets/uploads/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['max_size']             = 2000;
		$config['max_width']            = 2048;
        $config['max_height']           = 2048;
        $config['file_name'] = $nmfile;
        $this->upload->initialize($config);
        $content = $this->input->post('content');
         if($_FILES['image']['name'])
        {
	        if ($this->upload->do_upload('image'))
	        {

	        $gbr = $this->upload->data();
	        $data['img'] =$gbr['file_name'];
	        
	        } 

	    }
	    $where = array(
			'id' => $id
		);
		
		$this->Resource->update($where,$data,$this->table);
		redirect('backend/'.$module.'/index');

	}

	function destroy ($id){ 
		$module = $this->table;
        $where = array('id' => $id);
        $this->Resource->destroy($where,$this->table);
        
       
        redirect('backend/'.$module.'/index'); 
    }
	
	

}