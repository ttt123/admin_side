<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create extends CI_Controller {


	public function index()
	{

		$data['messages'] = "";
		$this->load->view('header', $data);
		$this->load->view('leftbar', $data);
			$this->load->view('create_view');
			$this->load->view('footer');
	}

	public function input(){
		
		if(
			$this->input->post('exampleInputEmail1') != "" &&
			$this->input->post('exampleInputPassword1') != "" &&
			$this->input->post('name') != ""
		)
		
		{
			$data['email'] = $this->input->post('exampleInputEmail1');
			$data['password'] = $this->input->post('exampleInputPassword1');
			$data['name'] = $this->input->post('name');
			$data['phone_number'] = $this->input->post('phone_number');
			$data['address'] = $this->input->post('address');
			$this->messages_model->insert_entry($data);

		//	redirect("/home/index?action=success");
			
		}
		
		else
		{

		}
		redirect("/home/index");
	}	
	
	public function add_relation()
	{

		$data['messages'] = "";
		$this->load->view('header', $data);
		$this->load->view('leftbar', $data);
			$this->load->view('relations/create_view');
			$this->load->view('footer');
	}
	
	public function insert_relation(){

		if(
			
			$this->input->post('name') != ""
		)
		{
			
			$data['name'] = $this->input->post('name');
			$this->relations_model->insert_entry($data);

		//	redirect("/home/index?action=success");
		}
		else{
			
		}
		redirect("/home/relation");
	}
}