<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class perusahaan extends CI_Controller {	
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
	public function form()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$em = $this->em;
			if($_POST)
			{
				$publik = $this->input->post("publik");
				$nama_file_asli = "";
				$nama_file_alias = "";
				$group = "";
				$tipe_file = "";
			
				$id = (float)$this->input->post("id");	
				$par["model"] = "models\Perusahaan";
				
				if($id > 0) {
					$obj = $em->find($par["model"], $id);
					$par["method"] = "update";
				}
				else {
					$obj = new models\Perusahaan;
					$par["method"] = "new";
				}
				
				$obj->setNPWP($this->input->post("npwp"));
				$obj->setNamaPerusahaan($this->input->post("nama"));
				$obj->setPimpinan($this->input->post("pimpinan"));
				$obj->setSIUP($this->input->post("siup"));
				$obj->setTglSIUP($this->input->post("tgl_siup"));
				$obj->setAlamat($this->input->post("alamat"));
				$obj->setTelp($this->input->post("telp"));
				$obj->setNotaris($this->input->post("notaris"));
				$obj->setEmail($this->input->post("email"));
				$obj->setKontakPerson($this->input->post("kontak_person"));
				$obj->setStatus(1);
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
			
			$usergroup = $this->session->userdata("usergroup");
			$userid = $this->session->userdata("userid");
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Pengolahan Data Perusahaan :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,
				"usergroup" => $usergroup,	
			);
			$this->twig->display("perusahaanfrm",$content);	
		}
		else
			redirect("../");
	}
	
	public function viewdata()
	{
		$i=0;
		
		$segment= $this->uri->segment_array();
		$field 	= NULL;
		$param 	= NULL;		
		if(isset($segment[4]) and isset($segment[5])){
			$field 	= $segment[4];
			$param 	= $segment[5];		
		}	
		$query1 = $this->db->query("select * from mst_perusahaan");	
		
		$page 	= $this->input->post("page");
		$limit 	= $this->input->post("rows");
		$sidx 	= $this->input->post("sidx");
		$sord 	= $this->input->post("sord");		
		$count 	= $query1->num_rows();		
		
		if(!$sidx) $sidx =1;		
		$whole =  $query1->result();
		$count 	= count($whole); 
		
		if($count>0) 
			$total_pages = ceil($count/$limit);    //calculating total number of pages
                else 
			$total_pages = 0;
		
		if ($page>$total_pages)
			$page=$total_pages; 
		
		$start = $limit*$page - $limit; // do not put $limit*($page - 1)
                $start = ($start<0)?0:$start; 
		
		$query2 = $this->db->query("select * from mst_perusahaan order by $sidx $sord limit $start , $limit");							
		
		$data 	=  $query2->result();
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		foreach($data as $row) {
		
			$responce->rows[$i]['id'] = $row->id_perusahaan;
			$responce->rows[$i]['cell'] = array($row->id_perusahaan,
											  $row->npwp,
											  $row->nama_perusahaan,
											  $row->pimpinan,
											  $row->siup,
											  $row->tgl_siup,
											  $row->alamat_perusahaan,	
											  $row->telp_perusahaan,
											  $row->notaris,
											  $row->kontak_person,
											  $row->email,
											  date( "j F Y", strtotime($row->add_date)),											  
											  $row->add_user,
											  date( "j F Y", strtotime($row->modified_user)),
											  $row->add_user											  
											  
			);
			$i++;		
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;	
						
	}
	
	public function finddata()
	{
		$i=0;
		$segment= $this->uri->segment_array();
		$by 	= $segment[3];
		$find 	= $segment[4];
		
		$query = $this->db->query("select * from mst_perusahaan where $by like '%$find%'");	
		
		$var['grid'] 	=  $query->result();
		foreach($var['grid'] as $row) {
				$responce->rows[$i]['id'] = $row->id_perusahaan;
			$responce->rows[$i]['cell'] = array($row->id_perusahaan,
											  $row->npwp,
											  $row->nama_perusahaan,
											  $row->pimpinan,
											  $row->siup,
											  $row->tgl_siup,
											  $row->alamat_perusahaan,	
											  $row->telp_perusahaan,
											  $row->notaris,
											  $row->kontak_person,
											  $row->email,
											  date( "j F Y", strtotime($row->add_date)),											  
											  $row->add_user,
											  date( "j F Y", strtotime($row->modified_user)),
											  $row->add_user											  
											  										  
											  
			);
			$i++;												  
			
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
		
		$q = $em->createQuery("delete from models\Perusahaan a where a.id in ($t_id) ");
		$numDeleted = $q->execute();
		
	}	
}
?>