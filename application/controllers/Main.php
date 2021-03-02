<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper(array('form','url'));
	$this->load->library(array('session','form_validation','email'));
	$this->load->model('Mainmodel');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view("home");
	}
  public function insindex()
  {
    $this->load->view("insertdata");
  }
	public function insertdata()
	{
	    $this->load->library('form_validation');
		$this->form_validation->set_rules("candid","CandidateID",'required');
		$this->form_validation->set_rules("name","fullname",'required');
		$this->form_validation->set_rules("batch","Batch",'required');
		$this->form_validation->set_rules("dob","dateofbirth",'required');
		$this->form_validation->set_rules("add","address",'required');
		$this->form_validation->set_rules("num","MobileNumber",'required');
		$this->form_validation->set_rules("lang","LanguageKnown",'required');
		$this->form_validation->set_rules("skill","TechnicalSkill",'required');
		$this->form_validation->set_rules("occ","Occupation",'required');
		$this->form_validation->set_rules("qual","Qualification",'required');
		$this->form_validation->set_rules("email","email",'required');
		if($this->form_validation->run())
		{//echo"hi";exit;
			$this->load->model('Mainmodel');
			    $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('pic'))
                {
                      $error = array('error' => $this->upload->display_errors());
                      $images  = $this->input->post('pic');
        
                }
				else
                {
                       $data = array('images' => $this->upload->data());
                       $images  = $data['images']['file_name'];                       
                }
                $a=array(
                'images' =>$images,
                "candid"=>$this->input->post("candid"),
                "name"=>$this->input->post("name"),
                "batch"=>$this->input->post("batch"),
				"dob"=>$this->input->post("dob"),
				"address"=>$this->input->post("add"),
				"mobile"=>$this->input->post("num"),
				"langknown"=>$this->input->post("lang"),
				"skill"=>$this->input->post("skill"),
				"occupation"=>$this->input->post("occ"),
				"qualification"=>$this->input->post("qual"),
				"emailid"=>$this->input->post("email")
				);
				//print_r($a);exit;
					$this->load->model('Mainmodel');
				  $this->Mainmodel->insertdata($a);
                 
                        redirect('Main/index','refresh');

            }           
	}	
	public function shortresume()
  {
    $this->load->model('Mainmodel');
     $id=$this->uri->segment(3);
      $config['upload_path']          = './upload/';
                //$config['allowed_types']        = 'gif|jpg|png';
                //$config['max_size']             = 1000;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;
                $this->load->library('upload', $config);
                 $data = array('images' => $this->upload->data());
                       $images  = $data['images']['file_name'];
     if(!empty($_POST['submit']))
  {
  
               //$z=$this->upload->do_upload('photo');
                $c=$this->input->post("candid");
                $d=$this->input->post("name");
                $e=$this->input->post("batch");
                $f=$this->input->post("dob");
                $g=$this->input->post("add");
                $h=$this->input->post("num");
                $i=$this->input->post("lang");
                $j=$this->input->post("skill");
                $k=$this->input->post("occ");
                $l=$this->input->post("qual");
                $m=$this->input->post("email");
   
  require("fpdf/fpdf.php");
 // require_once('tcpdf/config/lang/eng.php');
 // require_once('fpdf/ttfparser.php');
  $pdf=new FPDF('P','mm',array(120,120));
  $pdf->AddPage();
  $pdf->SetFont("Arial","b",12);
  $pdf->SetFont("Arial","b",10);
   
 // $pdf->Cell(0,5,"    ",0,1,'C');
  //$pdf->Cell(0,5,"    ",0,1,'C');
 // $pdf->Cell(0,5,"    ",0,1,'C');
  $pdf->Cell(13,10,"                              Short Resume                ",0,1);
  $pdf->Cell(1,10,"                             ",0,0);
  $pdf->Cell(23,10,"Candidate Id:              ",0,0);
  $pdf->Cell(15,10,    "{$c}",0,0);
  // $pdf->Cell(10,10,"Candidate ID:",0,0);
  // $pdf->Cell(100,10,"{$c}",0,1);
//  $pdf->Cell(10,10,"",0,0);
  $pdf->Cell(13,10,"Name:",0,0);
  $pdf->Cell(15,10,"{$d}",0,0);
  $pdf->Cell(10,10,"",0,0);
  $pdf->Cell(13,10,"Batch:",0,0);
  $pdf->Cell(25,10,"{$e}",0,1);
  //$pdf->Cell(10,10,"                             ",0,0);
  $pdf->Cell(10,10,"DOB:",0,0);
  $pdf->Cell(20,10,"{$f}",0,0);
  $pdf->Cell(17,10,"Address:         ",0,0);
  $pdf->Cell(20,10,"{$g}",0,1);
  $pdf->Cell(20,10,"Mobile No:",0,0);
  $pdf->Cell(22,10,"{$h}",0,0);
  $pdf->Cell(32,10,"Language Known:",0,0);
  $pdf->Cell(50,10,"{$i}",0,1);
  $pdf->Cell(30,10,"Technical Skills:",0,0);
  $pdf->Cell(20,10,"{$j}",0,1);
  $pdf->Cell(38,10,"Guardian Occupation:         ",0,0);
  $pdf->Cell(45,10,"{$k}",0,1);
  $pdf->Cell(23,10,"Qualification:",0,0);
  $pdf->Cell(35,10,"{$l}",0,1);
  $pdf->Cell(16,10,"Email ID:",0,0);
  $pdf->Cell(25,10,"{$m}",0,0);

    $pdf->Cell(15,10,"                             ",0,0);
 // $pdf->Image('logo.png',10,10,-300);
   // $pdf->Image("{$images}",75,25,35);
  
  $pdf->output();
}
        $data['n']=$this->Mainmodel->shortresume($id);
        $this->load->view('shortresume',$data);
  }
  public function candidatelist()
  {
    $this->load->model('Mainmodel');
   // $id=$this->uri->segment(3);
    $data['n']=$this->Mainmodel->candidatelist();
    $this->load->view('candidatelist',$data);
  }
}
?>
