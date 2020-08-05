<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class detailproject extends CI_Controller {	
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
				$pekerjaan = $this->input->post("pekerjaan");
				$detail = $this->input->post("detail");
				$idProject = $this->input->post("id_project");
				$idBiaya = $this->input->post("biaya");
				$idSet = $this->input->post("id_set");
				
				if (empty($pekerjaan) and empty($detail))
					$this->owner->alert("Isikan Salah Satu (Pekerjaan atau Detail)", "detailproject/setDetail");	
				else {
					$save = $this->projectlayer->savedetail($idProject, $pekerjaan, $detail, $idBiaya, $idSet);
				}				
			}
			
			$segment = $this->uri->segment_array();
			if(isset($segment[3])) 
				$id_project 	= $segment[3];
			else{
				var_dump("No Project data");
				exit();
			}
			
			$biaya = $this->em->getRepository("models\KomponenBiaya")->findAll();
			$project = $this->em->getRepository("models\SetWilayah")->findOneBy(array("id" => $id_project));
			
			
			
			$survey = $this->em->getRepository("models\JenisSurvey")->findOneBy(array("id" => $project->getIdSurvey()));
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
				
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Set wilayah Pekerjaan :: EBTKE",
				"log" => $log,
				"biaya" => $biaya,
				"project" => $project,
				"survey" => $survey,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,							
			);
			$this->twig->display("detailjob",$content);	
		}
		else
			redirect("../");
	}
	
	public function setDetailNew()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			if($_POST)
			{
				$total = $this->input->post("total");
				$idProject = $this->input->post("id_project");
				
				$this->db->where_in('id_project', $idProject);
				$this->db->delete('trans_pekerjaan'); 
				
				for($x = 1; $x <= $total; $x++)
				{
					$pekerjaan = $this->input->post("pekerjaan" . $x);
					$keterangan = $this->input->post("keterangan" . $x);
					$id = $this->input->post("id" . $x);
					$anggaran = $this->input->post("anggaran" . $x);
					
					if (!empty($pekerjaan)) {
						
						$this->db->set("id_project", $idProject);
						$this->db->set("id_pekerjaan", $id);
						$this->db->set("pekerjaan", $pekerjaan);
						$this->db->set("anggaran", (float)$anggaran);		
						$this->db->set("keterangan", $keterangan);		
						$this->db->set("modified_date", date("Y-m-d H:i:s"));
						$this->db->set("modified_user", $this->session->userdata('username'));						
						$valid = $this->db->insert('trans_pekerjaan');
					}
				}
			}
			
			$segment = $this->uri->segment_array();
			if(isset($segment[3]))
			{ 
				$id_project 	= $segment[3];
				
				$project = $this->em->getRepository("models\SetWilayah")->findOneBy(array("id" => $id_project));
				$survey = $this->em->getRepository("models\JenisSurvey")->findOneBy(array("id" => $project->getIdSurvey()));
			
			}
			else{
				$id_project = NULL;
				$project = NULL;
				$survey = NULL;
			}
			
			$q = $this->db->get_where("trans_pekerjaan", array("id_project" => $id_project));
			$job = $q->result();
			
						
			$biaya = $this->em->getRepository("models\KomponenBiaya")->findAll();
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
				
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Set Pekerjaan :: EBTKE",
				"log" => $log,
				"biaya" => $biaya,
				"project" => $project,
				"survey" => $survey,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,
				"job" => $job,							
			);
			$this->twig->display("detailjobnew",$content);	
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
			if(isset($segment[3]) && isset($segment[4])) {
				$idProject 	= $segment[3];
				$idPekerjaan 	= $segment[4];
				$param = array(
					"id_project" => $idProject,
					"id_pekerjaan" => $idPekerjaan,
				);				
				$this->db->where($param);
				$this->db->delete('trans_pekerjaan');
				redirect("../index.php/detailproject/setDetailNew/" . $idProject);
			}
		}
	}
	
	public function listDetail()
	{
		$i=0;
		
		$segment= $this->uri->segment_array();
		$propinsi 	= NULL;
		$param = "";
		
			$id_project 	= $segment[3];
			
		
		if(isset($segment[4])) 
			$key 	= $segment[4];
			
		if(isset($segment[5])) 
			$by 	= $segment[5];
		
		if(!empty($key))
			$param = " and $by like '%$key%'";
		
		$query1 = $this->db->query("SELECT a.*, b.nama_komponen FROM trans_projectplan a JOIN mst_komponenbiaya b ON a.id_komponen=b.id_komponen where a.id_project=$id_project ORDER BY  CAST(a.id_set AS DECIMAL(20,6))  $param");	
						 
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
		
		$query2 = $this->db->query("SELECT a.*, b.nama_komponen FROM trans_projectplan a JOIN mst_komponenbiaya b ON a.id_komponen=b.id_komponen where a.id_project=$id_project $param ORDER BY  CAST(a.id_set AS DECIMAL(20,6)) limit $start , $limit");							
		
		$data 	=  $query2->result();
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		foreach($data as $row) {
		
			$responce->rows[$i]['id'] = $row->id_set;
			$responce->rows[$i]['cell'] = array($row->id_set,
												$row->id_project,
												$row->header_job,
												$row->detail_job,
												$row->id_komponen,
												$row->nama_komponen										  
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
			$this->twig->display("searchproject", $content);	
		}
	}
	
}
?>