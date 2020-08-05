<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class planning extends CI_Controller {	
	var $em;	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('datalayer/logupdate');
		$this->load->model('datalayer/contentlayer');
		$this->load->model('datalayer/projectlayer');
		$this->load->model('datalayer/planninglayer');
		$this->em = $this->doctrine->em;
	}
	
	
	public function listPlanning()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
				
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Set Pekerjaan :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,						
			);
			$this->twig->display("listtoplanning",$content);	
		}
		else
			redirect("../");
	}
	
	public function setWeek()
	{
		
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			
			$val = $this->input->post("val");
			$week = "m" . $this->input->post("week");
			$idProject = $this->input->post("id_project");
			$idPekerjaan = $this->input->post("id_pekerjaan");
			$idDetail = $this->input->post("id_detail");
			
			$param = array(
				"id_project" => $idProject,
				"id_pekerjaan" => $idPekerjaan,
				"id_detail" => $idDetail,
			);
			
			$exist = $this->db->get_where("trans_planning", $param);
			$num = $exist->num_rows();

			$this->db->set("id_project", $idProject);
			$this->db->set("id_pekerjaan", $idPekerjaan);
			$this->db->set("id_detail", $idDetail);
			$this->db->set($week, $val);		
			
			if ($num > 0) {
				$this->db->set("modified_date", date("Y-m-d H:i:s"));
				$this->db->set("modified_user", $this->session->userdata('username'));
				$this->db->where($param);	
				$valid = $this->db->update('trans_planning');					
			}
			else {
				$this->db->set("add_date", date("Y-m-d H:i:s"));
				$this->db->set("add_user", $this->session->userdata('username'));
				$valid = $this->db->insert('trans_planning');
			}
			
			echo $valid;
		}
	}
	
	public function setOutput()
	{
		
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			
			$val = $this->input->post("val");
			$week = "output" . $this->input->post("week");
			$idProject = $this->input->post("id_project");
			$idPekerjaan = $this->input->post("id_pekerjaan");
			$idDetail = $this->input->post("id_detail");
			
			$param = array(
				"id_project" => $idProject,
				"id_pekerjaan" => $idPekerjaan,
				"id_detail" => $idDetail,
			);
			
			$exist = $this->db->get_where("trans_planning", $param);
			$num = $exist->num_rows();

			$this->db->set("id_project", $idProject);
			$this->db->set("id_pekerjaan", $idPekerjaan);
			$this->db->set("id_detail", $idDetail);
			$this->db->set($week, $val);		
			
			if ($num > 0) {
				$this->db->set("modified_date", date("Y-m-d H:i:s"));
				$this->db->set("modified_user", $this->session->userdata('username'));
				$this->db->where($param);	
				$valid = $this->db->update('trans_planning');					
			}
			else {
				$this->db->set("add_date", date("Y-m-d H:i:s"));
				$this->db->set("add_user", $this->session->userdata('username'));
				$valid = $this->db->insert('trans_planning');
			}
			
			echo $valid;
		}
	}
	
	public function setKeterangan()
	{
		
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			
			$val = $this->input->post("val");
			$idProject = $this->input->post("id_project");
			$idPekerjaan = $this->input->post("id_pekerjaan");
			$idDetail = $this->input->post("id_detail");
			
			$param = array(
				"id_project" => $idProject,
				"id_pekerjaan" => $idPekerjaan,
				"id_detail" => $idDetail,
			);
			
			$exist = $this->db->get_where("trans_planning", $param);
			$num = $exist->num_rows();

			$this->db->set("id_project", $idProject);
			$this->db->set("id_pekerjaan", $idPekerjaan);
			$this->db->set("id_detail", $idDetail);
			$this->db->set("keterangan", $val);		
			
			if ($num > 0) {
				$this->db->set("modified_date", date("Y-m-d H:i:s"));
				$this->db->set("modified_user", $this->session->userdata('username'));
				$this->db->where($param);	
				$valid = $this->db->update('trans_planning');					
			}
			else {
				$this->db->set("add_date", date("Y-m-d H:i:s"));
				$this->db->set("add_user", $this->session->userdata('username'));
				$valid = $this->db->insert('trans_planning');
			}
			
			echo $valid;
		}
	}
	
	public function formPlanning()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		
		if ($userlogged) {
			$idProject 	= NULL;
			$segment = $this->uri->segment_array();
			if(isset($segment[3])) 
				$idProject 	= $segment[3];
			
			$qProject = $this->db->get_where("trans_wilayah", array("id_project" => $idProject));
			$project = $qProject->row();
			
			//var_dump($idProject);
			
			if($project->status == "Y")
			{
				echo "The Project has approved and cannot be edit <br />";
				echo "<a href='javascript:window.close()'>Close</a>";
				exit();
			}
			
			$qSurvey = $this->db->get_where("mst_jenissurvey", array("id_jenissurvey" => $project->id_survey));
			$survey = $qSurvey->row();
			
			$detail = $this->planninglayer->listDetail($idProject);
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			
			
			$content = array(
				"base_url" => base_url(),
				"project" => $project,
				"survey" => $survey,
				"detail" => $detail,
				
				"page_title" => "Set wilayah Pekerjaan :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,	
			);
			
			$this->twig->display("planningfrm", $content);	
		}
	}
	
	
	public function listProjectToPlanning()
	{
		$i=0;
		
		$segment= $this->uri->segment_array();
		$propinsi 	= NULL;
		$param = "";
		
		if(isset($segment[3])) 
			$key 	= $segment[3];
			
		if(isset($segment[4])) 
			$by 	= $segment[4];
		
		if(!empty($key))
			$param = " and $by like '%$key%'";
		
		$query1 = $this->db->query("SELECT a.*, b.nama_perusahaan, c.kota_kabupaten, d.propinsi, e.nama_jenissurvey
									FROM trans_wilayah a JOIN mst_perusahaan b ON a.id_perusahaan=b.id_perusahaan
									JOIN mst_kota c ON c.kota_id=a.kota_id
									JOIN mst_jenissurvey e ON e.id_jenissurvey = a.id_survey
									JOIN mst_propinsi d ON c.propinsi_id = d.propinsi_id where a.status='N' $param");	
						 
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
		
		$query2 = $this->db->query("SELECT a.*, b.nama_perusahaan, c.kota_kabupaten, d.propinsi, e.nama_jenissurvey
									FROM trans_wilayah a JOIN mst_perusahaan b ON a.id_perusahaan=b.id_perusahaan
									JOIN mst_kota c ON c.kota_id=a.kota_id
									JOIN mst_jenissurvey e ON e.id_jenissurvey = a.id_survey
									JOIN mst_propinsi d ON c.propinsi_id = d.propinsi_id where a.status='N' $param order by $sidx $sord limit $start , $limit");							
		
		$data 	=  $query2->result();
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		foreach($data as $row) {
		
			$responce->rows[$i]['id'] = $row->id_project;
			$responce->rows[$i]['cell'] = array($row->id_project,
												$row->kode_project,
												$row->propinsi,
												$row->kota_kabupaten,
												$row->id_survey,
												$row->nama_jenissurvey,
												$row->id_perusahaan,
												$row->nama_perusahaan,
												$row->tanggal_awal,
												$row->tanggal_akhir,
												$row->nama_daerah,
												$row->kota_id,
												$row->luas_wilayah,
												$row->sumber_daya,
												$row->cadangan,
												$row->status,
												$row->sk_menteri,
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