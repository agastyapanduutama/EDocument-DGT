<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class detailpekerjaan extends CI_Controller {	
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
	
	public function setDetail()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			if($_POST)
			{
				$total = $this->input->post("total");
				$idProject = $this->input->post("id_project");
				$idPekerjaan = $this->input->post("id_pekerjaan");
				
				$deleteParam = array(
					"id_project" => $idProject,
					"id_pekerjaan" => $idPekerjaan
				); 
				
				$this->db->where($deleteParam);
				$this->db->delete('trans_pekerjaandet'); 
				
				for($x = 1; $x <= $total; $x++)
				{
					$detail = $this->input->post("detail" . $x);
					$keterangan = $this->input->post("keterangan" . $x);
					$id = $this->input->post("id" . $x);
					
				
					if (!empty($detail)) {					
						$this->db->set("id_project", $idProject);
						$this->db->set("id_pekerjaan", $idPekerjaan);
						$this->db->set("id_detail", $id);
						$this->db->set("detail", $detail);
						$this->db->set("keterangan", $keterangan);		
						$this->db->set("modified_date", date("Y-m-d H:i:s"));
						$this->db->set("modified_user", $this->session->userdata('username'));						
						$valid = $this->db->insert('trans_pekerjaandet');
					}
				}
			}
			
			$segment = $this->uri->segment_array();
			if(isset($segment[3]) and isset($segment[4]))
			{ 
				$id_project 	= $segment[3];
				$id_pekerjaan 	= $segment[4];
				
				$project = $this->em->getRepository("models\SetWilayah")->findOneBy(array("id" => $id_project));
				$survey = $this->em->getRepository("models\JenisSurvey")->findOneBy(array("id" => $project->getIdSurvey()));
				
				
				$qjob = $this->db->get_where("trans_pekerjaan", array("id_project" => $id_project, "id_pekerjaan" => $id_pekerjaan));
				$pekerjaan  = $qjob->row();
			}
			else{
				$id_project = NULL;
				$project = NULL;
				$survey = NULL;
				$pekerjaan = NULL;
				$id_pekerjaan = NULL;
			}
			
			$q = $this->db->get_where("trans_pekerjaandet", array("id_project" => $id_project, "id_pekerjaan" => $id_pekerjaan));
			$detail = $q->result();
			
			//print_r($detail);
			
			$biaya = $this->em->getRepository("models\KomponenBiaya")->findAll();
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
				
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Set Detail Pekerjaan :: EBTKE",
				"log" => $log,
				"biaya" => $biaya,
				"project" => $project,
				"survey" => $survey,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,
				"pkj" => $pekerjaan,
				"detail" => $detail,					
			);
			$this->twig->display("detailpekerjaan",$content);	
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
				$param = array(
					"id_project" => $idProject,
					"id_pekerjaan" => $idPekerjaan,
					"id_detail" => $idDetail,
				);				
				$this->db->where($param);
				$this->db->delete('trans_pekerjaandet');
				redirect("../index.php/detailpekerjaan/setDetail/" . $idProject . "/" . $idPekerjaan);
			}
		}
	}
	
	public function listPekerjaanToDetail()
	{
		$i = 0;
		$segment = $this->uri->segment_array();
		$param = "";
		$idProject = NULL;
		if(isset($segment[3])) {
			$idProject		= $segment[3];
		} 
		
		$query1 = $this->db->query("SELECT a.*, b.kode_project, b.id_project, c.nama_jenissurvey 
									FROM trans_pekerjaan a
									JOIN trans_wilayah b ON a.id_project=b.id_project
									JOIN mst_jenissurvey c ON c.id_jenissurvey=b.id_survey where a.id_project = $idProject ");	
						 
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
		
		$query2 = $this->db->query("SELECT a.*, b.kode_project, b.id_project, c.nama_jenissurvey 
									FROM trans_pekerjaan a
									JOIN trans_wilayah b ON a.id_project=b.id_project
									JOIN mst_jenissurvey c ON c.id_jenissurvey=b.id_survey where a.id_project = $idProject order by $sidx $sord limit $start , $limit");							
		
		$data 	=  $query2->result();
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		foreach($data as $row) {
		
			$responce->rows[$i]['id'] = $row->id_pekerjaan;
			$responce->rows[$i]['cell'] = array($row->id_pekerjaan,
												$row->id_project,
												$row->pekerjaan,
												$row->anggaran,
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
			$this->twig->display("searchpekerjaan", $content);	
		}
	}
	
}
?>