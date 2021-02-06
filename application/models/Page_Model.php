<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_Model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function getList(){
		$query =$this->db->get('employees');
		return $query->result_array();
	}
	public function getData($data){
		$this->db->select('*');
		$this->db->from('employees');
		$this->db->where('employee_id',$data);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function insertData($data){
		$query=$this->db->insert('employees',$data);
	}
	public function updateData($data,$id){
		$this->db->where('employee_id', $id);
		$this->db->update('employees', $data);
	}
}