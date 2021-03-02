<?php
class Mainmodel extends CI_model
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper(array('form','url'));
	$this->load->library(array('session','form_validation','email'));
	$this->load->model('Mainmodel');
	}
	public function insertdata($a)
	{
		$this->db->insert("details",$a);
	}
	public function shortresume($id)
    {
    $this->db->select('*'); 
    $this->db->from('details'); 
    $this->db->where("did",$id);
    $n=$this->db->get();
    return $n;
    }
    public function candidatelist()
    {
    $this->db->select('*'); 
    $this->db->from('details'); 
    $n=$this->db->get();
    return $n;
    }


}
?>