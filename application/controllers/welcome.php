<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {	
	var $em;	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->em = $this->doctrine->em;
	}	
	/*
	public function index()
	{
		$mhs = new models\Mahasiswa;
		$mhs->setNim("1200146");
		$mhs->setNama("test");
		$mhs->setAlamat("testig");
		$mhs->setPassword("passtes");
		
		try {
            $this->em->persist($mhs);
            $this->em->flush();
			$message = $mhs->getNim(); 
		}
        catch(Exception $err){
            $message = $err->getMessage();
        }
		
		$param['hewan'] = $message;		
		$this->twig->display("tpl/show", $param);
	}
	*/
	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		if(!$user_id)
		{
			$this->load->view('sma1bekasi/form_login');
		}
		$this->twig->display("home");
	}
	public function coba()
	{
		$mhs = new models\User;
		$mhs->setUsername("1200146");
		$mhs->setPassword("test");
		$mhs->setLevel("a");
		$mhs->setStatus("a");
		
		try {
            $this->em->persist($mhs);
            $this->em->flush();
			$message = $mhs->getID(); 
		}
        catch(Exception $err){
            $message = $err->getMessage();
        }
		
		$param['hewan'] = $message;		
		$this->twig->display("tpl/show", $param);
	}
}
?>