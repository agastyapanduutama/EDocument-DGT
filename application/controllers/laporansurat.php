<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class laporansurat extends CI_Controller {	
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

	public function repSuratMasuk()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$em = $this->em;
			
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
			
			
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Laporan Data Surat Masuk :: EBTKE",
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
				"jenissurat" => $jenissurat
			);
			$this->twig->display("repsuratmasuk",$content);	
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
		
		$usergroup = $this->session->userdata("usergroup");
		$userid = $this->session->userdata("userid");
		
		$query1 = $this->db->query("SELECT a.*, b.kode_group, b.nama_group, c.nama AS nama_staff, d.nama_sifat, e.nama_jenis, f.nama_aksi 
									FROM trans_surat a JOIN mst_group b ON a.id_group=b.id_group
									JOIN mst_staff c ON a.id_staff=c.id_staff
									JOIN mst_sifatsurat d ON a.id_sifat=d.id_sifat
									JOIN mst_jenis e ON a.id_jenissurat=e.id_jenissurat
									JOIN mst_aksisurat f ON a.id_aksi=f.id_aksi WHERE a.status_disposisi=0");	
		
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
		
		$query2 = $this->db->query("SELECT a.*, b.kode_group, b.nama_group, c.nama AS nama_staff, d.nama_sifat, e.nama_jenis, f.nama_aksi 
									FROM trans_surat a JOIN mst_group b ON a.id_group=b.id_group
									JOIN mst_staff c ON a.id_staff=c.id_staff
									JOIN mst_sifatsurat d ON a.id_sifat=d.id_sifat
									JOIN mst_jenis e ON a.id_jenissurat=e.id_jenissurat
									JOIN mst_aksisurat f ON a.id_aksi=f.id_aksi WHERE a.status_disposisi=0 order by $sidx $sord limit $start , $limit");							
		
		$data 	=  $query2->result();
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		foreach($data as $row) {
		
			$responce->rows[$i]['id'] = $row->id_surat;
			$responce->rows[$i]['cell'] = array($row->id_surat,
											  $row->fk_id,
											  $row->no_agenda,
											  $row->no_surat,
											  date( "j F Y", strtotime($row->tanggal)),
											  date( "j F Y", strtotime($row->tanggal_klarifikasi)),		
											  $row->asal_surat,							  
											  $row->lampiran,
											  $row->nama_group,
											  $row->nama_staff,
											  $row->nama_sifat,
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
	
	public function viewdispo()
	{
		$i=0;
		
		$segment= $this->uri->segment_array();
		$field 	= NULL;
		$param 	= NULL;		
		if(isset($segment[4]) and isset($segment[5])){
			$field 	= $segment[4];
			$param 	= $segment[5];		
		}	
		
		$usergroup = $this->session->userdata("usergroup");
		$userid = $this->session->userdata("userid");
		
		$query1 = $this->db->query("select * from trans_surat where status_disposisi <> 0");	
		
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
		
		$query2 = $this->db->query("select * from trans_surat where status_disposisi <> 0 order by $sidx $sord limit $start , $limit");							
		
		$data 	=  $query2->result();
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		foreach($data as $row) {
		
			$responce->rows[$i]['id'] = $row->id_surat;
			$responce->rows[$i]['cell'] = array($row->id_surat,
											  $row->fk_id,
											  $row->no_agenda,
											  $row->no_surat,
											  date( "j F Y", strtotime($row->tanggal)),
											  date( "j F Y", strtotime($row->tanggal_klarifikasi)),		
											  $row->asal_surat,							  
											  $row->lampiran						  
											  
			);
			$i++;		
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;	
						
	}
	
	public function repSuratDispo()
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
				"page_title" => "Laporan Surat Disposisi :: EBTKE",
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
				"levelJabatan" => $levelJabatan,
			);
			$this->twig->display("repsuratdispo",$content);	
		}
		else
			redirect("../");
	}
	
	public function repDispo()
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
				"page_title" => "Laporan Disposisi Surat :: EBTKE",
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
			$this->twig->display("detaildisporeport",$content);	
		}
		else
			redirect("../");
	}
	
}
?>