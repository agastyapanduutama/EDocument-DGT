<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class project extends CI_Controller {	
	var $em;	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('datalayer/logupdate');
		$this->load->model('datalayer/contentlayer');
		$this->em = $this->doctrine->em;
	}
	public function setwilayah()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			if($_POST)
			{
				$em = $this->em;
				$id = (float)$this->input->post("id");			
				$par["model"] = "models\Setwilayah";
				$exist = false;
				 				
				if($id > 0){
					$obj = $em->find($par["model"], $id);
					$par["method"] = "update";
				}
				else{
					$obj = new models\Setwilayah;
					$par["method"] = "new";
					$exist = $em->getRepository($par["model"])->findOneBy(array("kode_project" => $this->input->post("kode_project")));
				}
				
				if(!$exist){		
					$skMenteri = $this->input->post("sk_menteri");
					
					$status = "N";
					
					if (!empty($skMenteri)) 
						$status = "Y";
						
					$obj->setKodeProject($this->input->post("kode_project"));
					$obj->setIdSurvey($this->input->post("id_survey"));
					$obj->setIdPerusahaan($this->input->post("id_perusahaan"));
					$obj->setTanggalAwal($this->input->post("tanggal_mulai"));
					$obj->setTanggalAkhir($this->input->post("tanggal_akhir"));
					$obj->setNamaDaerah($this->input->post("nama_daerah"));
					$obj->setKotaId($this->input->post("id_kota"));
					$obj->setLuasWilayah($this->input->post("luas_wilayah"));
					$obj->setSumberDaya($this->input->post("sumber_daya"));
					$obj->setCadangan($this->input->post("cadangan"));
					$obj->setStatus($status);
					$obj->setSkMenteri($this->input->post("sk_menteri"));
					$obj->setKeterangan($this->input->post("keterangan"));
					
					try {
						$this->em->persist($obj);
						$this->em->flush();
						$par["id"] = $obj->getId();
						$this->logupdate->log_table($par);					 
					}
					catch(Exception $err){
						$message = $err->getMessage();
						var_dump($message);
						exit();
					}
				}
				else
				{
					$this->owner->alert("Data dengan kode project tersebut telah ada, penambahan gagal","project/setwilayah");
				}								
			}
			
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
				"page_title" => "Set wilayah Pekerjaan :: EBTKE",
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
			$this->twig->display("setwilayahfrm",$content);	
		}
		else
			redirect("../");
	}
	
	public function setpekerjaan()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			if($_POST)
			{
				$em = $this->em;
				$id = (float)$this->input->post("id");			
				$par["model"] = "models\Setwilayah";
				$exist = false;
				 				
				if($id > 0){
					$obj = $em->find($par["model"], $id);
					$par["method"] = "update";
				}
				else{
					$obj = new models\Setwilayah;
					$par["method"] = "new";
					$exist = $em->getRepository($par["model"])->findOneBy(array("kode_project" => $this->input->post("kode_project")));
				}
				
				if(!$exist){		
					$skMenteri = $this->input->post("sk_menteri");
					
					$status = "N";
					
					if (!empty($skMenteri)) 
						$status = "Y";
						
					$obj->setKodeProject($this->input->post("kode_project"));
					$obj->setIdSurvey($this->input->post("id_survey"));
					$obj->setIdPerusahaan($this->input->post("id_perusahaan"));
					$obj->setTanggalAwal($this->input->post("tanggal_mulai"));
					$obj->setTanggalAkhir($this->input->post("tanggal_akhir"));
					$obj->setNamaDaerah($this->input->post("nama_daerah"));
					$obj->setKotaId($this->input->post("id_kota"));
					$obj->setLuasWilayah($this->input->post("luas_wilayah"));
					$obj->setSumberDaya($this->input->post("sumber_daya"));
					$obj->setCadangan($this->input->post("cadangan"));
					$obj->setStatus($status);
					$obj->setSkMenteri($this->input->post("sk_menteri"));
					$obj->setKeterangan($this->input->post("keterangan"));
					
					try {
						$this->em->persist($obj);
						$this->em->flush();
						$par["id"] = $obj->getId();
						$this->logupdate->log_table($par);					 
					}
					catch(Exception $err){
						$message = $err->getMessage();
						var_dump($message);
						exit();
					}
				}
				else
				{
					$this->owner->alert("Data dengan kode project tersebut telah ada, penambahan gagal","project/setwilayah");
				}								
			}
			$jbt = $this->em->getRepository("models\Jabatan")->findAll();
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
				
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Set Detail Pekerjaan :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"jbt" => $jbt,
				"news" =>$topnews,
				"links" =>$link,							
			);
			$this->twig->display("listwilayahfrm",$content);	
		}
		else
			redirect("../");
	}
	
	public function searchPerusahaan()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		$content = array(
				"base_url" => base_url(),
		);
		
		if ($userlogged) 
			$this->twig->display("searchperusahaan",$content);
			
	}
	
	public function searchSurvey()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		$content = array(
				"base_url" => base_url(),
		);
		
		
		if ($userlogged) 
			$this->twig->display("searchsurvey",$content);
			
	}
	public function searchKota()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		$propinsi = $this->contentlayer->listPropinsi();
		$content = array(
				"base_url" => base_url(),
				"propinsi" => $propinsi,
		);
		
		
		if ($userlogged) 
			$this->twig->display("searchkota",$content);
			
	}
	
	public function selectKota()
	{
		$i=0;
		
		$segment= $this->uri->segment_array();
		$propinsi 	= NULL;
		$param = "";
		if(isset($segment[3])) 
			$propinsi 	= $segment[3];
		
		if(!empty($propinsi))
			$param = "where a.propinsi_id=$propinsi";
		
		$query1 = $this->db->query("select a.*, b.propinsi from mst_kota a join mst_propinsi b on a.propinsi_id=b.propinsi_id $param");	
		
		$page 	= $this->input->post("page");
		$limit 	= $this->input->post("rows");
		$sidx 	= $this->input->post("sidx");
		$sord 	= $this->input->post("sord");		
		$count 	= $query1->num_rows();		
		
		if(!$sidx) $sidx =1;		
		$whole =  $query1->result();
		$count 	= count($whole); 
		
		if($count>0) 
			$total_pages = ceil($count/$limit);    //calculating total number of 
		else 
			$total_pages = 0;
		
		if ($page>$total_pages)
			$page=$total_pages; 
		
		$start = $limit*$page - $limit; // do not put $limit*($page - 1)
                $start = ($start<0)?0:$start; 
		
		$query2 = $this->db->query("select a.*, b.propinsi from mst_kota a join mst_propinsi b on a.propinsi_id=b.propinsi_id $param order by $sidx $sord limit $start , $limit");							
		
		$data 	=  $query2->result();
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		foreach($data as $row) {
		
			$responce->rows[$i]['id'] = $row->kota_id;
			$responce->rows[$i]['cell'] = array($row->kota_id,
											  $row->propinsi,
											  $row->kota_kabupaten,
			);
			$i++;		
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;							
	}
	
	public function listProject()
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
			$param = " where $by like '%$key%'";
		
		$query1 = $this->db->query("SELECT a.*, b.nama_perusahaan, c.kota_kabupaten, d.propinsi, e.nama_jenissurvey
									FROM trans_wilayah a JOIN mst_perusahaan b ON a.id_perusahaan=b.id_perusahaan
									JOIN mst_kota c ON c.kota_id=a.kota_id
									JOIN mst_jenissurvey e ON e.id_jenissurvey = a.id_survey
									JOIN mst_propinsi d ON c.propinsi_id = d.propinsi_id $param");	
						 
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
									JOIN mst_propinsi d ON c.propinsi_id = d.propinsi_id $param order by $sidx $sord limit $start , $limit");							
		
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
												//$row->kota_id,
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
	
	public function listProjectToDetail()
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
									JOIN mst_propinsi d ON c.propinsi_id = d.propinsi_id where 1=1 $param");	
						 
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
									JOIN mst_propinsi d ON c.propinsi_id = d.propinsi_id where 1=1 $param order by $sidx $sord limit $start , $limit");							
		
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
}
?>