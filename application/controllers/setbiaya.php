<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class setbiaya extends CI_Controller {	
	var $em;	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('datalayer/logupdate');
		$this->load->model('datalayer/contentlayer');
		$this->load->model('datalayer/projectlayer');
		$this->em = $this->doctrine->em;
	}
	
	public function setKomponenBiaya()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			if($_POST)
			{
				$total = $this->input->post("total");
				$idProject = $this->input->post("id_project");
				$idPekerjaan = $this->input->post("id_pekerjaan");
				$idDetail = $this->input->post("id_detail");
				
				$deleteParam = array(
					"id_project" => $idProject,
					"id_pekerjaan" => $idPekerjaan,
					"id_detail" => $idDetail
				); 
				
				$this->db->where($deleteParam);
				$this->db->delete('trans_pekerjaanbiaya'); 
				
				for($x = 1; $x <= $total; $x++)
				{
					$nama_biaya = $this->input->post("nama_biaya" . $x);
					$anggaran = $this->input->post("anggaran" . $x);
					$keterangan = $this->input->post("keterangan" . $x);
					$idKomponen = $this->input->post("id_komponen" . $x);
					$id = $this->input->post("id" . $x);
					
				
					if (!empty($nama_biaya)) {					
						$this->db->set("id_project", $idProject);
						$this->db->set("id_komponen", $idKomponen);
						$this->db->set("id_pekerjaan", $idPekerjaan);
						$this->db->set("id_detail", $idDetail);
						$this->db->set("id_biaya", $id);
						$this->db->set("nama_biaya", $nama_biaya);
						$this->db->set("anggaran", (float)$anggaran);
						$this->db->set("keterangan", $keterangan);		
						$this->db->set("modified_date", date("Y-m-d H:i:s"));
						$this->db->set("modified_user", $this->session->userdata('username'));						
						$valid = $this->db->insert('trans_pekerjaanbiaya');
					}
				}
			}
			
			$segment = $this->uri->segment_array();
			if(isset($segment[3]) and isset($segment[4]) and isset($segment[5]))
			{ 
				$id_project 	= $segment[3];
				$id_pekerjaan 	= $segment[4];
				$id_detail 	= $segment[5];
				
				$project = $this->em->getRepository("models\SetWilayah")->findOneBy(array("id" => $id_project));
				$survey = $this->em->getRepository("models\JenisSurvey")->findOneBy(array("id" => $project->getIdSurvey()));
				
				$qjob = $this->db->get_where("trans_pekerjaan", array("id_project" => $id_project, "id_pekerjaan" => $id_pekerjaan));
				$pekerjaan  = $qjob->row();
				
				$qdet = $this->db->get_where("trans_pekerjaandet", array("id_project" => $id_project, "id_pekerjaan" => $id_pekerjaan, "id_detail" => $id_detail));
				$detail  = $qdet->row();
				
			}
			else{
				$id_project = NULL;
				$id_pekerjaan = NULL;	
				$id_detail = NULL;
				$project = NULL;
				$survey = NULL;
				$pekerjaan = NULL;	
				$detail = NULL;							
			}
			
			$qb = $this->db->get_where("trans_pekerjaanbiaya", array("id_project" => $id_project, "id_pekerjaan" => $id_pekerjaan, "id_detail" => $id_detail));
			$detbiaya = $qb->result();
			
			//print_r($detail);
			
			$klpBiaya = $this->em->getRepository("models\KomponenBiaya")->findAll();
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
				
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Set Detail Biaya :: EBTKE",
				"log" => $log,
				"kelompokbiaya" => $klpBiaya,
				"project" => $project,
				"survey" => $survey,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,
				"pkj" => $pekerjaan,
				"id_detail" => $id_detail,
				"detbiaya" => $detbiaya,
				"det" => $detail,					
			);
			$this->twig->display("detailbiaya",$content);	
		}
		else
			redirect("../");
	}
	
	public function deleteDetail()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			
			$segment = $this->uri->segment_array();
			if(isset($segment[3]) && isset($segment[4]) && isset($segment[5])) {
				$idProject 	= $segment[3];
				$idPekerjaan 	= $segment[4];
				$idDetail 	= $segment[5];
				$idBiaya 	= $segment[6];
				$param = array(
					"id_project" => $idProject,
					"id_pekerjaan" => $idPekerjaan,
					"id_detail" => $idDetail,
					"id_biaya" => $idBiaya,
				);				
				$this->db->where($param);
				$this->db->delete('trans_pekerjaanbiaya');
				redirect("../index.php/setbiaya/setKomponenBiaya/" . $idProject . "/" . $idPekerjaan. "/" . $idDetail ."/".idBiaya);
			}
		}
	}
	
	public function listDetailToBiaya()
	{
		$i = 0;
		$segment = $this->uri->segment_array();
		$param = "";
		$idProject = NULL;
		if(isset($segment[3]) && isset($segment[4])) {
			$idProject		= $segment[3];
			$idPekerjaan		= $segment[4];
		} 
		
		$query1 = $this->db->query("SELECT * FROM trans_pekerjaandet WHERE id_project = $idProject AND id_pekerjaan = $idPekerjaan");	
						 
		$page 	= $this->input->post("page");
		$limit 	= $this->input->post("rows");
		$sidx 	= $this->input->post("sidx");
		$sord 	= $this->input->post("sord");		
		$count 	= $query1->num_rows();		
		
		if(!$sidx) $sidx =1;		
		$whole =  $query1->result();
		$count 	= count($whole); 
		
		if($count>0) 
			$total_pages = ceil($count/$limit);
		else 
			$total_pages = 0;
		
		if ($page>$total_pages)
			$page=$total_pages;
		
		$start = $limit*$page - $limit; 
                $start = ($start<0)?0:$start; 
		
		$query2 = $this->db->query("SELECT * FROM trans_pekerjaandet WHERE id_project = $idProject AND id_pekerjaan = $idPekerjaan order by $sidx $sord limit $start , $limit");							
		
		$data 	=  $query2->result();
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		foreach($data as $row) {
		
			$responce->rows[$i]['id'] = $row->id_detail;
			$responce->rows[$i]['cell'] = array($row->id_detail,
												$row->id_pekerjaan,
												$row->id_project,
												$row->detail,
												$row->keterangan,
												date( "j F Y", strtotime($row->add_date)),											  
												$row->add_user,
												date( "j F Y", strtotime($row->modified_date)),
												$row->add_user											  
			);
			$i++;		
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;							
	}
	
	public function searchProject()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$content = array(
				"base_url" => base_url(),
			);
			$this->twig->display("searchproject2", $content);	
		}
	}
	
	public function searchPekerjaan()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$segment = $this->uri->segment_array();
			$idProject = $segment[3];
			$content = array(
				"base_url" => base_url(),
				"id_project" => $idProject,
			);
			$this->twig->display("searchpekerjaan2", $content);	
		}
	}
	
	public function searchDetail()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$segment = $this->uri->segment_array();
			$idProject = $segment[3];
			$idPekerjaan = $segment[4];
			$content = array(
				"base_url" => base_url(),
				"id_project" => $idProject,
				"id_pekerjaan" => $idPekerjaan,
			);
			$this->twig->display("searchdetail", $content);	
		}
	}
	
}
?>