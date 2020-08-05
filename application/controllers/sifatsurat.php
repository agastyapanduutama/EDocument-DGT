<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class sifatsurat extends CI_Controller {	
	var $em;	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('datalayer/logupdate');
		$this->load->model('datalayer/contentlayer');
		$this->em = $this->doctrine->em;
	}
	public function form()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			if($_POST)
			{
				$em = $this->em;
				$id = (float)$this->input->post("id");			
				$par["model"] = "models\SifatSurat";
				$exist = false;
				 				
				if($id > 0) {
					$sifat = $em->find($par["model"], $id);
					$par["method"] = "update";
				}
				else {
					$sifat = new models\SifatSurat;
					$par["method"] = "new";
					$exist = $em->getRepository($par["model"])->findOneBy(array("kode_sifat" => $this->input->post("kode_sifat")));
				}
				
				if(!$exist) {				
					$sifat->setKodeSifat($this->input->post("kode_sifat"));
					$sifat->setNamaSifat($this->input->post("nama_sifat"));
					$sifat->setKeterangan($this->input->post("keterangan"));
					try {
						$this->em->persist($sifat);
						$this->em->flush();
						$par["id"] = $sifat->getId();
						$this->logupdate->log_table($par);					 
					}
					catch(Exception $err){
						$message = $err->getMessage();
						var_dump($message);
						exit();
					}
				}
				else {
					$this->owner->alert("Data dengan kode tersebut telah ada, penambahan gagal","sifatsurat/form");
				}								
			}
			$sifat = $this->em->getRepository("models\StatusSurat")->findAll();
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Pengolahan Data Sifat surat :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,							
			);
			$this->twig->display("sifatsuratfrm",$content);	
		}
		else
			redirect("../");
	}
	
	public function viewdata()
	{
		$i=0;	
		$em = $this->em;
			
		$page 	= $this->input->post("page");
		$limit 	= $this->input->post("rows");
		$sidx 	= $this->input->post("sidx");
		$sord 	= $this->input->post("sord");	
		
		$q = $em->createQuery('SELECT a FROM models\SifatSurat a');
		$count = count($q->getResult());
		
		if($count>0)
			$total_pages = ceil($count/$limit);
       	else
			$total_pages = 0;
		
		if ($page>$total_pages) $page=$total_pages; 
		
		$start = $limit*$page - $limit;
        $start = ($start<0)?0:$start; 
		
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		
		$query = $em->createQuery('SELECT a FROM models\SifatSurat a');
		$data = $query->getArrayResult();
		
		foreach($data as $row)
		{
			if($row["id"] > 0){
				$responce->rows[$i]['id'] = $row["id"];
				$responce->rows[$i]['cell'] = array($row["id"],
												  $row["kode_sifat"],
												  $row["nama_sifat"],
												  $row["keterangan"],
												  date( "j F Y", strtotime($row["add_date"])),											  
												  $row["add_user"],
												  date( "j F Y", strtotime($row["modified_user"])),
												  $row["add_user"]
												  
				);
				$i++;	
			}	
				
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;					
	}
	
	public function finddata()
	{
		$i=0;
		$em = $this->em;
		
		$segment = $this->uri->segment_array();	
		
		$by 	= $segment[3];
		$find 	= $segment[4];
		
		$qb = $em->createQueryBuilder();
		$qb->add("select", "a")
			->add("from", "models\SifatSurat a")
			->add("where", $qb->expr()->orx(
			$qb->expr()->like("$by", "?2")
		));
		$qb->setParameter(2, "%".$find."%"); 
		$query = $qb->getQuery();
		$data = $query->getArrayResult();
		foreach($data as $row)
		{
			
			if($row["id"] > 0){
				$responce->rows[$i]['id'] = $row["id"];
				$responce->rows[$i]['cell'] = array($row["id"],
												  $row["kode_sifat"],
												  $row["nama_sifat"],
												  $row["keterangan"],
												  date( "j F Y", strtotime($row["add_date"])),											  
												  $row["add_user"],
												  date( "j F Y", strtotime($row["modified_user"])),
												  $row["add_user"]
												  
				);
				$i++;
			}		
					
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;		
	}
	public function delete_data(){
		$id = $this->input->post('id');
		$em = $this->em;
		
		$t_id="";
		for($x = 0; $x < count($id); $x++)
		{
			if($x < count($id)-1)
				$t_id.= $id[$x].",";
			else
				$t_id.= $id[$x];
		}
		
		$q = $em->createQuery("delete from models\SifatSurat a where a.id in ($t_id) ");
		$numDeleted = $q->execute();
		
	}
}
?>