<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class disposisidetail extends CI_Controller {	
	var $em;	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('datalayer/logupdate');
		$this->load->model('datalayer/contentlayer');
		$this->load->model('datalayer/disposisilayer');
		$this->load->model('datalayer/caridokumen');
		$this->load->model('datalayer/logdocument');
		$this->em = $this->doctrine->em;
	}
	
	public function detaildispo()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		
		
		if($userlogged){
			$em = $this->em;
			
			$userid = $this->session->userdata("userid");
			$idJabatan = $this->session->userdata("userjabatan");
			$usergroup = $this->session->userdata("usergroup");
			$sifat = $em->getRepository("models\SifatSurat")->findAll();
			$kat = $em->getRepository("models\KategoriDokumen")->findAll();
			$group = $em->getRepository("models\Group")->findAll();
			$aksi = $em->getRepository("models\AksiSurat")->findAll();
			$staff = $em->getRepository("models\Staff")->findAll();
			$jenissurat = $em->getRepository("models\JenisSurat")->findAll();
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			
			$namaJabatan = $this->session->userdata("usernamajabatan");
			$levelJabatan = $this->session->userdata("userleveljabatan");
			
			$segment= $this->uri->segment_array();
			if(isset($segment[3])){
				$idSurat 	= $segment[3];
			}
			
			
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Pengolahan Disposisi Surat :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,
				"sifat" => $sifat,				
				"aksi" => $aksi,
				"groups" => $group,	
				"kats" => $kat,
				"staff" => $staff,	
				"usergroup" => $usergroup,	
				"jenissurat" => $jenissurat,
				"namaJabatan" => $namaJabatan,
				"idSurat" => $idSurat,
				"levelJabatan" => $levelJabatan,
			);
			$this->twig->display("detaildispo",$content);	
		}
		else
			redirect("../");
	}
	
	public function dispokabag()
	{
		$i=0;
		
		
		$segment= $this->uri->segment_array();
		$idSurat 	= NULL;
		if(isset($segment[3])){
			$idSurat 	= $segment[3];
		}	
		
		$usergroup = $this->session->userdata("usergroup");
		$userid = $this->session->userdata("userid");
		$idJabatan = $this->session->userdata("userjabatan");
		
		$query1 = $this->db->query("
				SELECT a.*, b.no_agenda, b.no_surat, b.tanggal_klarifikasi, 
				b.lampiran, b.asal_surat, c.nama_sifat, e.nama, e.no_induk, f.nama_group, g.nama_jabatan 
				FROM trans_disposisi a 
				JOIN trans_surat b ON a.id_surat=b.id_surat
				JOIN mst_sifatsurat c ON b.id_sifat=c.id_sifat
				JOIN mst_staff e ON e.id_staff=a.id_staff
				JOIN mst_group f ON e.id_group=f.id_group
				JOIN mst_jabatan g ON g.id_jabatan=e.id_jabatan
				WHERE g.lev=2 AND b.id_surat=$idSurat");	
		
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
		
		$query2 = $this->db->query("
				SELECT a.*, b.no_agenda, b.no_surat, b.tanggal_klarifikasi, 
				b.lampiran, b.asal_surat, c.nama_sifat, e.nama, e.no_induk, f.nama_group, g.nama_jabatan 
				FROM trans_disposisi a 
				JOIN trans_surat b ON a.id_surat=b.id_surat
				JOIN mst_sifatsurat c ON b.id_sifat=c.id_sifat
				JOIN mst_staff e ON e.id_staff=a.id_staff
				JOIN mst_group f ON e.id_group=f.id_group
				JOIN mst_jabatan g ON g.id_jabatan=e.id_jabatan
				WHERE g.lev=2 AND b.id_surat=$idSurat order by $sidx $sord limit $start , $limit");							
										
		$data 	=  $query2->result();
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		foreach($data as $row) {
		
			$responce->rows[$i]['id'] = $row->id_disposisi;
			$responce->rows[$i]['cell'] = array($row->id_disposisi,
											  $row->no_induk,
											  $row->nama,
											  $row->nama_group,
											  $row->nama_jabatan,
											  $row->tanggal_penyelesaian,
											  $row->no_agenda,
											  $row->no_surat,
											  $row->asal_surat,
											  $row->id_surat										  
											  
			);
			$i++;		
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;	
						
	}
	
	
	public function dispokasubag()
	{
		$i=0;
		
		
		$segment= $this->uri->segment_array();
		$idSurat 	= NULL;
		if(isset($segment[3])){
			$idSurat 	= $segment[3];
		}	
		
		$usergroup = $this->session->userdata("usergroup");
		$userid = $this->session->userdata("userid");
		$idJabatan = $this->session->userdata("userjabatan");
		
		$query1 = $this->db->query("
				SELECT a.*, b.no_agenda, b.no_surat, b.tanggal_klarifikasi, 
				b.lampiran, b.asal_surat, c.nama_sifat, e.nama, e.no_induk, f.nama_group, g.nama_jabatan 
				FROM trans_disposisi a 
				JOIN trans_surat b ON a.id_surat=b.id_surat
				JOIN mst_sifatsurat c ON b.id_sifat=c.id_sifat
				JOIN mst_staff e ON e.id_staff=a.id_staff
				JOIN mst_group f ON e.id_group=f.id_group
				JOIN mst_jabatan g ON g.id_jabatan=e.id_jabatan
				WHERE g.lev=3 AND b.id_surat=$idSurat");	
		
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
		
		$query2 = $this->db->query("
				SELECT a.*, b.no_agenda, b.no_surat, b.tanggal_klarifikasi, 
				b.lampiran, b.asal_surat, c.nama_sifat, e.nama, e.no_induk, f.nama_group, g.nama_jabatan 
				FROM trans_disposisi a 
				JOIN trans_surat b ON a.id_surat=b.id_surat
				JOIN mst_sifatsurat c ON b.id_sifat=c.id_sifat
				JOIN mst_staff e ON e.id_staff=a.id_staff
				JOIN mst_group f ON e.id_group=f.id_group
				JOIN mst_jabatan g ON g.id_jabatan=e.id_jabatan
				WHERE g.lev=3 AND b.id_surat=$idSurat order by $sidx $sord limit $start , $limit");							
										
		$data 	=  $query2->result();
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		foreach($data as $row) {
		
			$responce->rows[$i]['id'] = $row->id_disposisi;
			$responce->rows[$i]['cell'] = array($row->id_disposisi,
											  $row->no_induk,
											  $row->nama,
											  $row->nama_group,
											  $row->nama_jabatan,
											  $row->tanggal_penyelesaian,
											  $row->no_agenda,
											  $row->no_surat,
											  $row->asal_surat,
											  $row->id_surat										  
											  
			);
			$i++;		
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;	
						
	}
	
	public function dispostaff()
	{
		$i=0;
		
		
		$segment= $this->uri->segment_array();
		$idSurat 	= NULL;
		if(isset($segment[3])){
			$idSurat 	= $segment[3];
		}	
		
		$usergroup = $this->session->userdata("usergroup");
		$userid = $this->session->userdata("userid");
		$idJabatan = $this->session->userdata("userjabatan");
		
		$query1 = $this->db->query("
				SELECT a.*, b.no_agenda, b.no_surat, b.tanggal_klarifikasi, 
				b.lampiran, b.asal_surat, c.nama_sifat, e.nama, e.no_induk, f.nama_group, g.nama_jabatan 
				FROM trans_disposisi a 
				JOIN trans_surat b ON a.id_surat=b.id_surat
				JOIN mst_sifatsurat c ON b.id_sifat=c.id_sifat
				JOIN mst_staff e ON e.id_staff=a.id_staff
				JOIN mst_group f ON e.id_group=f.id_group
				JOIN mst_jabatan g ON g.id_jabatan=e.id_jabatan
				WHERE g.lev=4 AND b.id_surat=$idSurat");	
		
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
		
		$query2 = $this->db->query("
				SELECT a.*, b.no_agenda, b.no_surat, b.tanggal_klarifikasi, 
				b.lampiran, b.asal_surat, c.nama_sifat, e.nama, e.no_induk, f.nama_group, g.nama_jabatan 
				FROM trans_disposisi a 
				JOIN trans_surat b ON a.id_surat=b.id_surat
				JOIN mst_sifatsurat c ON b.id_sifat=c.id_sifat
				JOIN mst_staff e ON e.id_staff=a.id_staff
				JOIN mst_group f ON e.id_group=f.id_group
				JOIN mst_jabatan g ON g.id_jabatan=e.id_jabatan
				WHERE g.lev=4 AND b.id_surat=$idSurat order by $sidx $sord limit $start , $limit");							
										
		$data 	=  $query2->result();
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		foreach($data as $row) {
		
			$responce->rows[$i]['id'] = $row->id_disposisi;
			$responce->rows[$i]['cell'] = array($row->id_disposisi,
											  $row->no_induk,
											  $row->nama,
											  $row->nama_group,
											  $row->nama_jabatan,
											  $row->tanggal_penyelesaian,
											  $row->no_agenda,
											  $row->no_surat,
											  $row->asal_surat,
											  $row->id_surat										  
											  
			);
			$i++;		
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;	
						
	}

}
?>