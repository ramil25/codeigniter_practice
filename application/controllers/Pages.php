<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 /**
 * 
 */
 class Pages extends CI_Controller
 {
 	public function index()
	{
		$data['title']="Home";
		if(isset($_POST['insert'])){
		$info = array(
			"first_name" =>$this->input->post('first_name'),
			"last_name" =>$this->input->post('last_name'),
			"email_address" =>$this->input->post('email_address'),
			"contact_number" =>$this->input->post('contact_number'),
			"job_title" =>$this->input->post('job_title'),
			"monthly_salary" =>$this->input->post('monthly_salary')
			);
		$this->Page_Model->insertData($info);
		echo "<script>alert('Successfully added')</script>";
		header('refresh:1;url='.base_url().'list');
		
	}
		$this->load->view('header',$data);
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function aboutUs()
	{
		$data['title']="About Us";
		$this->load->view('header',$data);
		$this->load->view('aboutus');
		$this->load->view('footer');
	}
	public function List()
	{
		$data['title']="About Us";
		$data['list'] =$this->Page_Model->getList();
		$this->load->view('header',$data);
		$this->load->view('list',$data);
		$this->load->view('footer');
	}

	public function update()
	{
		$data['title']="Update";
		$data['id'] =$this->Page_Model->getData($_GET['update']);
		$this->load->view('header',$data);
		$this->load->view('update');
		$this->load->view('footer');
		if(isset($_POST['update'])){
		$info = array(
			"first_name" =>$this->input->post('first_name'),
			"last_name" =>$this->input->post('last_name'),
			"email_address" =>$this->input->post('email_address'),
			"contact_number" =>$this->input->post('contact_number'),
			"job_title" =>$this->input->post('job_title'),
			"monthly_salary" =>$this->input->post('monthly_salary')
			);
		$this->Page_Model->updateData($info,$_GET['update']);
		echo "<script>alert('Successfully updated')</script>";
		header('refresh:1;url='.base_url().'list');
		
		}
	}

 }