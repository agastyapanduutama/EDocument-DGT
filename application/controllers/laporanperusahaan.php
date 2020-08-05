<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class laporanperusahaan extends CI_Controller {	
	var $em;	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('datalayer/logupdate');
		$this->load->model('datalayer/contentlayer');
		$this->load->model('datalayer/caridokumen');
		$this->load->model('datalayer/logdocument');
		$this->em = $this->doctrine->em;
	}
	public function repPerusahaan()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$em = $this->em;
			
			$usergroup = $this->session->userdata("usergroup");
			$userid = $this->session->userdata("userid");
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Laporan Data Perusahaan :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,
				"usergroup" => $usergroup,	
			);
			$this->twig->display("repperusahaan",$content);	
		}
		else
			redirect("../");
	}
	
	public function repProject()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			
			$segment = $this->uri->segment_array();
			if (isset($segment[3])) {
				$idWilayah = $segment[3];
				$project = $this->em->getRepository("models\SetWilayah")
					->findOneBy(
						array(
							"id" => $idWilayah
					)
				);
				
				$perusahaan = $this->em->getRepository("models\Perusahaan")->findOneBy(array("id" => $project->getIdPerusahaan()));
				$survey = $this->em->getRepository("models\JenisSurvey")->findOneBy(array("id" => $project->getIdSurvey()));
				
				$qk  = $this->db->get_where("mst_kota", array("kota_id" => $project->getKotaId()));
				$kota= $qk->row();
			}
			else{
				$idWilayah = NULL;
				$project = NULL;
				$perusahaan = NULL;
				$survey = NULL;
				$kota = NULL;
			}
			
			$jbt = $this->em->getRepository("models\Jabatan")->findAll();			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
				
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Laporan wilayah Pekerjaan (Project) :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"jbt" => $jbt,
				"news" =>$topnews,
				"links" =>$link,
				"project" =>$project,
				"perusahaan" =>$perusahaan,	
				"survey" =>$survey,	
				"kota" =>$kota,							
			);
			$this->twig->display("repproject",$content);	
		}
		else
			redirect("../");
	}
}
?>