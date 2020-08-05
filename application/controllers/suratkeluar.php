<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class suratkeluar extends CI_Controller {	
	var $em;	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('datalayer/logupdate');
		$this->load->model('datalayer/contentlayer');
		$this->load->model('datalayer/suratkeluarlayer');
		$this->load->model('datalayer/logdocument');
		$this->em = $this->doctrine->em;
	}
	public function form()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$usergroup = $this->session->userdata("usergroup");		
			$em = $this->em;
			if($_POST)
			{
				$jenisSurat = $this->input->post("jenis");
				$noSurat = $this->input->post("no_surat");
				$tglBuat = $this->input->post("tanggal");
				$idSifat = $this->input->post("sifat");
				$lampiran = $this->input->post("lampiran");
				$tglSelesai = $this->input->post("tanggal_klarifikasi");
				$idAksi = $this->input->post("aksi");
				$catatan = $this->input->post("catatan");
				$perihal = $this->input->post("hal");
				$idStaff = $this->session->userdata("userid");	
			
				if (!empty($noSurat) and !empty($tglBuat) and !empty($tglSelesai) and !empty($perihal)) {
						
					$nomor_agenda = $this->contentlayer->nomor_agenda($usergroup, $jenisSurat );
					$fk = $this->contentlayer->foreign_key();
					$id = (float)$this->input->post("id");
					$filesurat = "";
					
					if($id > 0)
						$upload = true;
					else
						$upload = false;
						
					if(!empty($_FILES["filesurat"]["name"])){
						$arr = explode('.',$_FILES["filesurat"]["name"]);
						$allow = $this->config->item("filetypes");
						$validfile = false;
						$lsc = count($arr) - 1;
						for($c=0; $c < count($allow); $c++)
						{
							if(strtolower($arr[$lsc]) == strtolower($allow[$c]))
							$validfile = true;
						}
						if($validfile)
						{	
							$filesurat = $fk.".".$arr[$lsc];
							$config['upload_path'] = APPPATH."../assets/surat/";
							$config['file_name'] = $filesurat;
							$config['allowed_types'] = '*';
							$this->load->library('upload', $config);
							
							if (!$this->upload->do_upload("filesurat")) {
								$error =  $this->upload->display_errors();
								$this->owner->alert("Upload File Gagal `".$error."`","surat/form");
								$filesurat = "";
							}
							else {
								$upload = true;
								$tipe_file = $arr[1];
							}
						}
						else
						{
							$this->owner->alert("Upload file dengan tipe $arr[$lsc] tidak diperkenankan","suratkeluar/form");
						}	
					}
					$idSurat = $this->suratkeluarlayer->saveSurat($noSurat, $nomor_agenda, $tglBuat, $tglSelesai, $filesurat, $perihal, $catatan, $idAksi, $idSifat, $jenisSurat, $lampiran);
					
					if ($idSurat > 0) {
						$idAtasan = $this->suratkeluarlayer->getAtasan($idStaff);
						$valid = $this->suratkeluarlayer->saveKeluarSurat($idSurat, $idAtasan, $tglBuat, $tglSelesai, $idAksi, $perihal, $catatan, 0);
					}
					
				}							
			}
			
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
				"page_title" => "Pengolahan Data Surat Keluar :: EBTKE",
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
			$this->twig->display("suratkeluarfrm",$content);	
		}
		else
			redirect("../");
	}
	
	public function nonStaff()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$usergroup = $this->session->userdata("usergroup");		
			$em = $this->em;
			
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
				"page_title" => "Pengolahan Data Surat Keluar :: EBTKE",
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
			$this->twig->display("suratkeluarnonstaff",$content);	
		}
		else
			redirect("../");
	}
	
	public function approvalSurat()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$usergroup = $this->session->userdata("usergroup");		
			$em = $this->em;
			
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
				"page_title" => "Pengolahan Data Surat Keluar :: EBTKE",
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
			$this->twig->display("suratkeluarapp",$content);	
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
		$userlevel = $this->session->userdata("userlevel");
		
		$byUser = "";
		if($userlevel != 'A')
			$byUser = "AND a.id_staff=$userid";
		
		$query1 = $this->db->query("select a.*, b.nama_sifat, c.nama_aksi, d.nama_jenis, e.nama
									from trans_suratkeluar a join mst_sifatsurat b on a.id_sifat=b.id_sifat
									left join mst_aksisurat c on a.id_aksi=c.id_aksi
									join mst_jenis d on a.id_jenissurat=d.id_jenissurat
									left join mst_staff e on a.id_staff=e.id_staff
									WHERE 1=1 $byUser");	
		
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
		
		$query2 = $this->db->query("select a.*, b.nama_sifat, c.nama_aksi, d.nama_jenis, e.nama
									from trans_suratkeluar a join mst_sifatsurat b on a.id_sifat=b.id_sifat
									left join mst_aksisurat c on a.id_aksi=c.id_aksi
									join mst_jenis d on a.id_jenissurat=d.id_jenissurat
									left join mst_staff e on a.id_staff=e.id_staff
									WHERE 1=1 $byUser order by $sidx $sord limit $start , $limit");							
		
		$data 	=  $query2->result();
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		foreach($data as $row) {
		
			$responce->rows[$i]['id'] = $row->id_surat;
			$responce->rows[$i]['cell'] = array
			(
				$row->id_surat,
				$row->no_surat,
				$row->no_agenda,
				date( "j F Y", strtotime($row->tanggal_buat)),
				date( "j F Y", strtotime($row->tanggal_selesai)),		
				$row->perihal,							  
				$row->catatan,
				$row->nama_aksi,
				$row->nama_jenis,
				$row->nama_sifat,											  
			);
			$i++;		
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;	
						
	}
	
	public function listKasubag()
	{
		$i=0;
		
		$segment= $this->uri->segment_array();
		$lev 	= NULL;
		if(isset($segment[3])){
			$lev 	= $segment[3];		
		}	
		
		$usergroup = $this->session->userdata("usergroup");
		$userid = $this->session->userdata("userid");
		$userlevel = $this->session->userdata("userlevel");
		$levnya = $this->session->userdata("userleveljabatan");
		
		
		$byLev = "";
		
		if($levnya > 1 and $lev > 1) {		
			$byLev = "id_group=$usergroup and";
		}
		
		
		$byUser = "";
		if($userlevel != 'A')
			$byUser = "AND a.id_staff=$userid";
		
		$query1 = $this->db->query("select a.*, if(a.status_keluar=1,'Teruskan',if(a.status_keluar=2,'Teruskan Dengan Catatan',if(a.status_keluar=3,'Tolak','Baru Dibuat'))) as nama_status, b.nama as pembuat, b.no_induk as noinduk_pembuat, c.nama_aksi, d.nama_sifat, e.nama_jenis, f.no_surat, f.no_agenda 
									from trans_keluar a 
									join mst_staff b on a.id_pembuat=b.id_staff
									join trans_suratkeluar f on f.id_surat=a.id_surat
									left join mst_aksisurat c on f.id_aksi=c.id_aksi
									join mst_sifatsurat d on d.id_sifat=f.id_sifat
									join mst_jenis e on f.id_jenissurat=e.id_jenissurat 
									where a.id_staff in (
										select id_staff from mst_staff 
										where $byLev id_jabatan in (
											select id_jabatan from mst_jabatan where lev=$lev 
										)
									)");	
		
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
		
		$query2 = $this->db->query("select a.*, if(a.status_keluar=1,'Teruskan',if(a.status_keluar=2,'Teruskan Dengan Catatan',if(a.status_keluar=3,'Tolak','Baru Dibuat'))) as nama_status, b.nama as pembuat, b.no_induk as noinduk_pembuat, c.nama_aksi, d.nama_sifat, e.nama_jenis, f.no_surat, f.no_agenda 
									from trans_keluar a 
									join mst_staff b on a.id_pembuat=b.id_staff
									join trans_suratkeluar f on f.id_surat=a.id_surat
									left join mst_aksisurat c on f.id_aksi=c.id_aksi
									join mst_sifatsurat d on d.id_sifat=f.id_sifat
									join mst_jenis e on f.id_jenissurat=e.id_jenissurat 
									where a.id_staff in (
										select id_staff from mst_staff 
										where $byLev id_jabatan in (
											select id_jabatan from mst_jabatan where lev=$lev 
										)
									) order by $sidx $sord limit $start , $limit");							
		
		$data 	=  $query2->result();
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		foreach($data as $row) {
		
			$responce->rows[$i]['id'] = $row->id_surat;
			$responce->rows[$i]['cell'] = array
			(
				$row->id_surat,
				$row->no_surat,
				$row->no_agenda,
				date( "j F Y", strtotime($row->tanggal_buat)),
				date( "j F Y", strtotime($row->tanggal_selesai)),		
				$row->perihal,							  
				$row->catatan,
				$row->pembuat,
				$row->noinduk_pembuat,
				$row->id_keluar,
				$row->nama_status										  
			);
			$i++;		
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;	
						
	}
	public function suratLanjut()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$usergroup = $this->session->userdata("usergroup");		
			$em = $this->em;
			$segment= $this->uri->segment_array();
			
			$idKeluar 	= NULL;
			if(isset($segment[4])){
				$idKeluar 	= $segment[4];		
			}
			
			if ($_POST) {
				$idSurat = $this->input->post("id_surat");
				$jenisSurat = $this->input->post("jenis");
				$noSurat = $this->input->post("no_surat");
				$tglBuat = $this->input->post("tanggal");
				$idSifat = $this->input->post("sifat");
				$lampiran = $this->input->post("lampiran");
				$tglSelesai = $this->input->post("tanggal_klarifikasi");
				$idAksi = $this->input->post("aksi");
				$catatan = $this->input->post("catatan");
				$perihal = $this->input->post("perihal");
				$idStaff = $this->session->userdata("userid");	
				$status_keluar = $this->input->post("status_keluar");
				
				if (!empty($noSurat) and !empty($tglBuat) and !empty($tglSelesai) and !empty($perihal)) {
					$idAtasan = $this->suratkeluarlayer->getAtasan($idStaff);
					
					if ($status_keluar < 3) {
						$this->suratkeluarlayer->saveKeluarSurat($idSurat, $idAtasan, $tglBuat, $tglSelesai, $idAksi, $perihal, $catatan, $status_keluar);
					}
					$this->suratkeluarlayer->remarkSurat($idKeluar, $status_keluar);
					echo "<script>window.close();</script>";
					
				}							
			}
			
			
			
			$idSurat 	= NULL;
			if(isset($segment[3])){
				$idSurat 	= $segment[3];		
			}	
			
			$sifat = $em->getRepository("models\SifatSurat")->findAll();
			$kat = $em->getRepository("models\KategoriDokumen")->findAll();
			$group = $em->getRepository("models\Group")->findAll();
			$aksi = $em->getRepository("models\AksiSurat")->findAll();
			$staff = $em->getRepository("models\Staff")->findAll();
			$jenissurat = $em->getRepository("models\JenisSurat")->findAll();
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$surat = $this->suratkeluarlayer->detailSurat2($idSurat, $idKeluar);		
			
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Pengolahan Data Surat Keluar Lanjut :: EBTKE",
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
				"surat" => $surat,
			);
			$this->twig->display("suratkeluarlanjutfrm",$content);	
		}
		else
			redirect("../");
	}
	
	public function suratView()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$usergroup = $this->session->userdata("usergroup");		
			$em = $this->em;
			$segment= $this->uri->segment_array();
			
			$idSurat 	= NULL;
			if(isset($segment[3])){
				$idSurat 	= $segment[3];		
			}	
			
			$idKeluar 	= NULL;
			if(isset($segment[4])){
				$idKeluar 	= $segment[4];		
			}
			
			$sifat = $em->getRepository("models\SifatSurat")->findAll();
			$kat = $em->getRepository("models\KategoriDokumen")->findAll();
			$group = $em->getRepository("models\Group")->findAll();
			$aksi = $em->getRepository("models\AksiSurat")->findAll();
			$staff = $em->getRepository("models\Staff")->findAll();
			$jenissurat = $em->getRepository("models\JenisSurat")->findAll();
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$surat = $this->suratkeluarlayer->detailSurat2($idSurat, $idKeluar);				
			
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Pengolahan Data Surat Keluar Lanjut :: EBTKE",
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
				"surat" => $surat,
			);
			$this->twig->display("suratkeluarviewfrm",$content);	
		}
		else
			redirect("../");
	}
	
	
	public function suratEnd()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$usergroup = $this->session->userdata("usergroup");		
			$em = $this->em;
			$segment= $this->uri->segment_array();
			
			$idSurat 	= NULL;
			if(isset($segment[3])){
				$idSurat 	= $segment[3];		
			}	
			
			$idKeluar 	= NULL;
			if(isset($segment[4])){
				$idKeluar 	= $segment[4];		
			}
			
			$sifat = $em->getRepository("models\SifatSurat")->findAll();
			$kat = $em->getRepository("models\KategoriDokumen")->findAll();
			$group = $em->getRepository("models\Group")->findAll();
			$aksi = $em->getRepository("models\AksiSurat")->findAll();
			$staff = $em->getRepository("models\Staff")->findAll();
			$jenissurat = $em->getRepository("models\JenisSurat")->findAll();
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$surat = $this->suratkeluarlayer->detailSurat2($idSurat, $idKeluar);				
			
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Pengolahan Data Surat Keluar Lanjut :: EBTKE",
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
				"surat" => $surat,
			);
			$this->twig->display("suratkeluarendfrm",$content);	
		}
		else
			redirect("../");
	}
	
	public function listToapprove()
	{
		$i=0;
		
		$segment= $this->uri->segment_array();
		
		$stat 	= "and a.status_keluar <> 4";
		if(isset($segment[3])){
			$stat 	= " and a.status_keluar=4";		
		}	
		
		$usergroup = $this->session->userdata("usergroup");
		$userid = $this->session->userdata("userid");
		$userlevel = $this->session->userdata("userlevel");
		$levnya = $this->session->userdata("userleveljabatan");
		
		
		$query1 = $this->db->query("select a.*, if(a.status_keluar=1,'Teruskan',if(a.status_keluar=2,'Teruskan Dengan Catatan',if(a.status_keluar=3,'Tolak','Baru Dibuat'))) as nama_status, b.nama as pembuat, b.no_induk as noinduk_pembuat, c.nama_aksi, d.nama_sifat, e.nama_jenis, f.no_surat, f.no_agenda 
									from trans_keluar a 
									join mst_staff b on a.id_pembuat=b.id_staff
									join trans_suratkeluar f on f.id_surat=a.id_surat
									join mst_aksisurat c on f.id_aksi=c.id_aksi
									join mst_sifatsurat d on d.id_sifat=f.id_sifat
									join mst_jenis e on f.id_jenissurat=e.id_jenissurat 
									where a.id_staff in (
										select id_staff from mst_staff 
										where id_jabatan in (
											select id_jabatan from mst_jabatan where lev=1 
										)
									) and b.id_group=$usergroup $stat ");	
		
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
		
		$query2 = $this->db->query("select a.*, if(a.status_keluar=1,'Teruskan',if(a.status_keluar=2,'Teruskan Dengan Catatan',if(a.status_keluar=3,'Tolak','Baru Dibuat'))) as nama_status, b.nama as pembuat, b.no_induk as noinduk_pembuat, c.nama_aksi, d.nama_sifat, e.nama_jenis, f.no_surat, f.no_agenda 
									from trans_keluar a 
									join mst_staff b on a.id_pembuat=b.id_staff
									join trans_suratkeluar f on f.id_surat=a.id_surat
									join mst_aksisurat c on f.id_aksi=c.id_aksi
									join mst_sifatsurat d on d.id_sifat=f.id_sifat
									join mst_jenis e on f.id_jenissurat=e.id_jenissurat 
									where a.id_staff in (
										select id_staff from mst_staff 
										where id_jabatan in (
											select id_jabatan from mst_jabatan where lev=1 
										)
									) and b.id_group=$usergroup $stat order by $sidx $sord limit $start , $limit");							
		
		$data 	=  $query2->result();
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		foreach($data as $row) {
		
			$responce->rows[$i]['id'] = $row->id_surat;
			$responce->rows[$i]['cell'] = array
			(
				$row->id_surat,
				$row->no_surat,
				$row->no_agenda,
				date( "j F Y", strtotime($row->tanggal_buat)),
				date( "j F Y", strtotime($row->tanggal_selesai)),		
				$row->perihal,							  
				$row->catatan,
				$row->pembuat,
				$row->noinduk_pembuat,
				$row->id_keluar,
				$row->nama_status										  
			);
			$i++;		
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;	
						
	}
	public function formApprove()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$usergroup = $this->session->userdata("usergroup");		
			$em = $this->em;
			$segment= $this->uri->segment_array();
			
			$idKeluar 	= NULL;
			if(isset($segment[4])){
				$idKeluar 	= $segment[4];		
			}
			
			if ($_POST) {
				$idSurat = $this->input->post("id_surat");
				$jenisSurat = $this->input->post("jenis");
				$noSurat = $this->input->post("no_surat");
				$tglBuat = $this->input->post("tanggal");
				$idSifat = $this->input->post("sifat");
				$lampiran = $this->input->post("lampiran");
				$tglSelesai = $this->input->post("tanggal_klarifikasi");
				$idAksi = $this->input->post("aksi");
				$catatan = $this->input->post("catatan");
				$perihal = $this->input->post("perihal");
				$idStaff = $this->session->userdata("userid");	
				$status_keluar = $this->input->post("status_keluar");
				
				if (!empty($noSurat) and !empty($tglBuat) and !empty($tglSelesai) and !empty($perihal)) {
					
					$this->db->set("tanggal_selesai", $tglSelesai);
					$this->db->set("perihal", $perihal);
					$this->db->set("catatan", $catatan);
					$this->db->set("modified_date", date("Y-m-d H:i:s"));
					$this->db->set("modified_user", $this->session->userdata('username'));
					$this->db->set("status_keluar", 4);
					$this->db->where("id_keluar", $idKeluar);
					$valid = $this->db->update('trans_keluar');
					
					echo "<script>window.close();</script>";
					
				}							
			}
			
			
			
			$idSurat 	= NULL;
			if(isset($segment[3])){
				$idSurat 	= $segment[3];		
			}	
			
			$sifat = $em->getRepository("models\SifatSurat")->findAll();
			$kat = $em->getRepository("models\KategoriDokumen")->findAll();
			$group = $em->getRepository("models\Group")->findAll();
			$aksi = $em->getRepository("models\AksiSurat")->findAll();
			$staff = $em->getRepository("models\Staff")->findAll();
			$jenissurat = $em->getRepository("models\JenisSurat")->findAll();
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$surat = $this->suratkeluarlayer->detailSurat2($idSurat, $idKeluar);		
			
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Pengolahan Data Surat Keluar Lanjut :: EBTKE",
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
				"surat" => $surat,
			);
			$this->twig->display("suratkeluarapprovefrm",$content);	
		}
		else
			redirect("../");
	}
}
?>