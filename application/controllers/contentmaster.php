<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class contentmaster extends CI_Controller {	
	var $em;	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('datalayer/logupdate');
		$this->load->model('datalayer/contentlayer');
		$this->em = $this->doctrine->em;
	}
	public function runningtextform()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$em = $this->em;
			$content = $em->getRepository("models\Content")->findOneBy(array("id" => 1));			
			if($_POST)
			{
				$content->setRunningText($this->input->post('runningtext'));
				try {
					$this->em->persist($content);
					$this->em->flush();
				}
				catch(Exception $err){
					$message = $err->getMessage();
var_dump($message);
exit();$this->owner->alert($message);
				}								
			}
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
		
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Kelola Running Text :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,
				
				"content" => $content,
				
			);
			$this->twig->display("runningtext",$content);	
		}
		else
			redirect("../");
	}
	
	public function berandaform()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$em = $this->em;
			$content = $em->getRepository("models\Content")->findOneBy(array("id" => 1));			
			if($_POST)
			{
				$content->setBeranda($this->input->post('beranda'));
				try {
					$this->em->persist($content);
					$this->em->flush();
				}
				catch(Exception $err){
					$message = $err->getMessage();
var_dump($message);
exit();$this->owner->alert($message);
				}								
			}
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Kelola Content Beranda :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,
				
				"content" => $content,
				
			);
			$this->twig->display("berandafrm",$content);	
		}
		else
			redirect("../");
	}
	
	public function tentangform()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$em = $this->em;
			$content = $em->getRepository("models\Content")->findOneBy(array("id" => 1));			
			if($_POST)
			{
				$content->setTentang($this->input->post('tentang'));
				try {
					$this->em->persist($content);
					$this->em->flush();
				}
				catch(Exception $err){
					$message = $err->getMessage();
var_dump($message);
exit();$this->owner->alert($message);
				}								
			}
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Kelola Content Tentang Kami :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,
				
				
				"content" => $content,
				
			);
			$this->twig->display("tentangfrm",$content);	
		}
		else
			redirect("../");
	}
	
	public function kontakform()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$em = $this->em;
			$content = $em->getRepository("models\Content")->findOneBy(array("id" => 1));			
			if($_POST)
			{
				$content->setKontak($this->input->post('kontak'));
				try {
					$this->em->persist($content);
					$this->em->flush();
				}
				catch(Exception $err){
					$message = $err->getMessage();
var_dump($message);
exit();$this->owner->alert($message);
				}								
			}
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Kelola Content Kontak Kami :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,
				
				"content" => $content,
				
			);
			$this->twig->display("kontakfrm",$content);	
		}
		else
			redirect("../");
	}
	public function newsview()
	{
		$segment= $this->uri->segment_array();
		$id 	= $segment[3];
		
		$em = $this->em;
		$detail = $em->find("models\News", $id);
		
		$ct = $this->contentlayer->contenttext();
		$topnews = $this->contentlayer->topnews();
		$link = $this->contentlayer->linkeks();
		
		$log = $this->session->all_userdata();
		
		$ct = $this->contentlayer->contenttext();
		$topnews = $this->contentlayer->topnews();
		$link = $this->contentlayer->linkeks();
		
		$content = array(
			"base_url" => base_url(),
			"page_title" => $detail->getJudul(),			
			"ct" =>$ct,
			"detail" => $detail,
			"log" => $log,
			
			"news" =>$topnews,
			"links" =>$link,
		);
		
		$this->twig->display("detailnews", $content);
	}
}
?>