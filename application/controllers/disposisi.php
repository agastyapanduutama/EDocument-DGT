<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class disposisi extends CI_Controller {	
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
	public function listotdispo()
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
		$idJabatan = $this->session->userdata("userjabatan");
		$lev = $this->session->userdata("userleveljabatan");
		$stat = $lev - 1;
		
		$byJbt = " AND a.status_disposisi = 0";
		if($idJabatan > 0 and $lev != 1)
			$byJbt = "AND a.status_disposisi = $stat AND g.id_staff=$userid";
		
		$query1 = $this->db->query("SELECT a.*, b.kode_group, b.nama_group, c.nama AS nama_staff, d.nama_sifat, e.nama_jenis, f.nama_aksi 
									FROM trans_surat a JOIN mst_group b ON a.id_group=b.id_group
									JOIN mst_staff c ON a.id_staff=c.id_staff
									JOIN mst_sifatsurat d ON a.id_sifat=d.id_sifat
									JOIN mst_jenis e ON a.id_jenissurat=e.id_jenissurat
									LEFT JOIN mst_aksisurat f ON a.id_aksi=f.id_aksi 
									LEFT JOIN trans_disposisi g ON a.id_surat=g.id_surat WHERE 1=1 $byJbt");	
		
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
								LEFT JOIN mst_aksisurat f ON a.id_aksi=f.id_aksi 
								LEFT JOIN trans_disposisi g ON a.id_surat=g.id_surat WHERE 1=1 $byJbt order by $sidx $sord limit $start , $limit");							
										
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
											  $row->tanggal,
											  $row->tanggal_klarifikasi,		
											  $row->asal_surat,							  
											  $row->lampiran,
											  $row->kode_arsip,
											  $row->tunjuk_silang,
											  $row->jadwal_penyusutan,
											  $row->tempat_penyimpanan,
											  $row->indeks,
											  $row->hal,
											  $row->catatan,
											  $row->id_group,
											  $row->id_staff,
											  $row->id_sifat,
											  $row->id_jenissurat,
											  $row->id_aksi,
											  $row->status_disposisi,
											  $row->nama_group,
											  $row->nama_staff,
											  $row->nama_sifat,
											  $row->add_date,											  
											  $row->add_user,
											  $row->modified_user,
											  $row->add_user											  
											  
			);
			$i++;		
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;	
						
	}
	
	public function listdispolevel1()
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
		$idJabatan = $this->session->userdata("userjabatan");
		
		$query1 = $this->db->query("SELECT a.*, b.*, c.nama_sifat 
									FROM trans_disposisi a 
									JOIN trans_surat b ON a.id_surat=b.id_surat
									JOIN mst_sifatsurat c ON b.id_sifat=c.id_sifat
									WHERE a.dispose_by = $userid GROUP BY a.id_surat");	
		
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
		
		$query2 = $this->db->query("SELECT a.*, b.*, c.nama_sifat 
									FROM trans_disposisi a 
									JOIN trans_surat b ON a.id_surat=b.id_surat
									JOIN mst_sifatsurat c ON b.id_sifat=c.id_sifat
									WHERE a.dispose_by = $userid GROUP BY a.id_surat order by $sidx $sord limit $start , $limit");							
										
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
											  $row->tanggal,
											  $row->tanggal_klarifikasi,		
											  $row->asal_surat,							  
											  $row->lampiran,
											  $row->kode_arsip,
											  $row->tunjuk_silang,
											  $row->jadwal_penyusutan,
											  $row->tempat_penyimpanan,
											  $row->indeks,
											  $row->hal,
											  $row->catatan,
											  $row->id_group,
											  $row->id_staff,
											  $row->id_sifat,
											  $row->id_jenissurat,
											  $row->id_aksi,
											  $row->status_disposisi,
											  '',
											  '',
											  $row->nama_sifat,
											  $row->add_date,											  
											  $row->add_user,
											  $row->modified_user,
											  $row->add_user											  
											  
			);
			$i++;		
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;	
						
	}
	
	public function form()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$levelJabatan = $this->session->userdata("userleveljabatan");
			$em = $this->em;
			if($_POST)
			{
					
					$tanggal_penyelesaian = $this->input->post("tanggal_penyelesaian");
					$tanggal_disposisi = $this->input->post("tanggal_disposisi");
					$idSurat = $this->input->post("id_surat");
					$total = $this->input->post("total");
					$keterangan = $this->input->post("keterangan");
					$aksi = $this->input->post("aksi");
					
					if ($levelJabatan == 3) {
						for($x = 1; $x<=$total; $x++)
						{
							$id_staff = $this->input->post("idstaff$x");	
							$exec = $this->disposisilayer->saveDosposisi($idSurat, $id_staff, $tanggal_disposisi, $tanggal_penyelesaian, $keterangan, $aksi);
						}
					}
					else {
						for($x = 1; $x<=$total; $x++)
						{
							$idgroup = $this->input->post("idgroup$x");							
							if(!empty($idgroup)){
								$data = $this->disposisilayer->searchStaff(0, $idgroup);
								if($data->num_rows() > 0) {
									$arr = $data->row();
									$id_staff = $arr->id_staff;
									$exec = $this->disposisilayer->saveDosposisi($idSurat, $id_staff, $tanggal_disposisi, $tanggal_penyelesaian, $keterangan, $aksi);
								}
							}
						}
					}
					
					$this->disposisilayer->remarkSurat($idSurat);
			}
			
			
			$segment= $this->uri->segment_array();
			if(isset($segment[3])){
				$idSurat 	= $segment[3];
			}	
			
			$surat = $this->disposisilayer->detailSurat($idSurat);
			
			$usergroup = $this->session->userdata("usergroup");
			
			
			$sifat = $em->getRepository("models\SifatSurat")->findAll();
			$kat = $em->getRepository("models\KategoriDokumen")->findAll();
			
			$aksi = $em->getRepository("models\AksiSurat")->findAll();
			$jenissurat = $em->getRepository("models\JenisSurat")->findAll();
			
			$group = $em->getRepository("models\Group")->findAll();
			$staff = $this->disposisilayer->staffBawahan();
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$levelJabatan = $this->session->userdata("userleveljabatan");
			
			
			
			
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
				"surat" => $surat,
				"levelJabatan" => $levelJabatan,
			);
			$this->twig->display("disposisifrm",$content);	
		}
		else
			redirect("../");
	}
	
	
	public function listdispo()
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
			);
			$this->twig->display("listsurattodisposse",$content);	
		}
		else
			redirect("../");
	}
	
	public function detailsurat()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$em = $this->em;
			$idSurat = NULL;
			$prev = NULL;
			
			$segment= $this->uri->segment_array();
			if(isset($segment[3])){
				$idSurat 	= $segment[3];
			}	
			
			if(isset($segment[4])){
				$prev 	= $segment[4];
			}	

			
			$surat = $this->disposisilayer->detailSurat($idSurat);
			
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
			
			$dispofor = $this->session->userdata('usernamajabatan');
			
			
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
				"surat" => $surat,
				"kats" => $kat,
				"staff" => $staff,	
				"dispofor" => $dispofor,
				"usergroup" => $usergroup,	
				"jenissurat" => $jenissurat,
				"prev" => $prev,
			);
			$this->twig->display("dispokabagfrm",$content);	
		}
		else
			redirect("../");
	}
	
	
	public function finddata()
	{
		$i=0;
		$segment= $this->uri->segment_array();
		$by 	= $segment[3];
		$find 	= $segment[4];
		
		$query = $this->db->query("select a.*, b.nama_lengkap, c.nama_kategori from mst_dokumen a join mst_user b on a.pengunggah=b.id_user join mst_dokumenkat c on a.id_kategori=c.id_kategori where $by like '%$find%'");	
		
		$var['grid'] 	=  $query->result();
		foreach($var['grid'] as $row) {
				$responce->rows[$i]['id'] = $row->id_dokumen;
				$responce->rows[$i]['cell'] = array($row->id_dokumen,
											  $row->id_kategori,
											  $row->nama_kategori,
											  $row->judul,
											  $row->nama_file_asli,
											  $row->penulis,	
											  $row->terbaca,										  
											  $row->nama_lengkap,
											  $row->publik,
											  $row->deskripsi,
											  $row->groupdok,
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
		
		$q = $em->createQuery("delete from models\Dokumen a where a.id in ($t_id) ");
		$numDeleted = $q->execute();
		
	}
	public function pencarian()
	{	
		$this->load->library('pagination');
		
		$by_temp = $this->input->post("by");
		$find_temp = $this->input->post("find");
		$urut_temp = $this->input->post("urut");
		$sort_temp = $this->input->post("sort");
		
		$segment	= $this->uri->segment_array();
		if(!empty($find_temp))
		{
			$by 	=  $this->input->post("by");	
			$find 	=  $this->input->post("find");
			$urut 	=  $this->input->post("urut");
			$sort 	=  $this->input->post("sort");
		}
		else{
			
			$find 	= $segment[3];
			$by 	= $segment[4];
			$urut 	= $segment[5];
			$sort 	= $segment[6];
		}
			
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata("userlogged");
		$userlevel = $this->session->userdata("userlevel");
		$usergroup = $this->session->userdata("usergroup");
		
		$by_group = "";
		if(!empty($find))
		{
		
			$publik = 1;
			if($userlogged){
				if($userlevel != "A"){
					$publik = 0;
					$by_group = " and concat(',',a.groupdok,',') like '%,$usergroup,%' or a.publik=1";
				}
			}
			
			$order_by = "order by $urut";
			if($urut == "semua")
				$order_by = "";	
				
			$sort_by = "$sort";
			if($sort == "semua")
				$sort_by = "";		
					
			$where = "where $by like '%$find%'";
			if($by == "semua")
				$where = "where (a.judul like '%$find%' or a.deskripsi like '%$find%' or a.penulis like '%$find%' or b.nama_lengkap like '%$find%')";
				
				
				
			$string_query = "select a.*, substring(a.deskripsi,1,400) as singkatdesk, b.nama_lengkap, c.nama_kategori from mst_dokumen a join mst_user b on a.pengunggah=b.id_user
									join mst_dokumenkat c on a.id_kategori=c.id_kategori $where and a.publik=$publik $by_group  $order_by $sort_by";
			
			
			$query          		= $this->db->query($string_query);
			$config['base_url'] 	= base_url()."index.php/dok/pencarian/$find/$by/$urut/$sort/";
			$config['total_rows']	= $query->num_rows();
			$totalnum =  $query->num_rows();
			$config['per_page'] 	= 5;
			$config['cur_tag_open'] = '<b>';
			$config['cur_tag_close'] = '</b>';
			$num            		= $config['per_page'];
			
			$config['num_links']        = 10;
			$offset = $this->uri->segment(7, 0);
			$config['uri_segment'] = 7;  
			
			
			$config['full_tag_open']  = '<div class="pagination">';
			$config['full_tag_close']  = '</div>';
			
			$config['next_link']  = 'Next &raquo;';
			$config['prev_link']   = '&laquo; Prev';
			
			$config['num_tag_open']  = '<div class="digit">';
			$config['num_tag_close']  = '</div>';
			
			$config['cur_tag_open']  = '<div class="digit current">';
			$config['cur_tag_close']  = '</div>';
			$config['last_link']   = '<b>Last &rsaquo;</b>';
			$config['first_link']   = '<b>&lsaquo; First</b>';
			
			$this->pagination->initialize($config);
			$q = $this->db->query($string_query." limit $offset, $num");
		
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			
				
				
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Hasil Pencarian Dokumen :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,
			
				"hasil" => $q->result(),
				"keyword" => $find,
				"jumlah" => $totalnum,
				"by" => $by,
				"pagination" => $this->pagination->create_links(),
				"cariberd" => $by,
				"urutberd" => $urut,
				"sortberd" => $sort,
			);
			$this->twig->display("hasilcari",$content);	
			
		}
		else
		{
			$this->owner->alert("Isian Tidak Boleh Kosong","home/index");
		}	
	}
	
	public function documentview()
	{
		$segment= $this->uri->segment_array();
		$id 	= $segment[3];
		
		$em = $this->em;
		$dok = $em->find("models\Dokumen", $id);
		$file_name = $dok->getNamaAlias();
		
		$ct = $this->contentlayer->contenttext();
		$topnews = $this->contentlayer->topnews();
		$link = $this->contentlayer->linkeks();
		
		$content = array(
			"base_url" => base_url(),
			"page_title" => "Hasil Pencarian Dokumen :: EBTKE",
			"ct" =>$ct,
			"news" =>$topnews,
			"links" =>$link,
			
			"file_name" => $file_name,
		);
		
		$logdok = $this->logdocument->logdok($id);
		if($logdok)
			$this->twig->display("tpl/pdfviewer", $content);
	}
	public function detailview()
	{
		$segment= $this->uri->segment_array();
		$id 	= $segment[3];
		
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata("userlogged");
		
		$em = $this->em;
		$dok = $em->find("models\Dokumen", $id);
		
		$ct = $this->contentlayer->contenttext();
		$topnews = $this->contentlayer->topnews();
		$link = $this->contentlayer->linkeks();
			
		$content = array(
			"base_url" => base_url(),
			"page_title" => $dok->getJudul()." :: EBTKE",
			"log" => $log,
			"ct" =>$ct,
			"news" =>$topnews,
			"links" =>$link,
			
			"dok" => $dok,
		);		
		$this->twig->display("detaildok", $content);
	}
	public function imageview()
	{
		$segment= $this->uri->segment_array();
		$id 	= $segment[3];
		
		$em = $this->em;
		$dok = $em->find("models\Dokumen", $id);
		$file_name = $dok->getNamaAlias();
		
		$ct = $this->contentlayer->contenttext();
		$topnews = $this->contentlayer->topnews();
		$link = $this->contentlayer->linkeks();
		
		$content = array(
			"base_url" => base_url(),
			"page_title" => "Hasil Pencarian Dokumen :: EBTKE",
			"ct" =>$ct,
			"news" =>$topnews,
			"links" =>$link,
			
			"file_name" => base_url()."assets/doc/".$file_name,
		);
		
		$logdok = $this->logdocument->logdok($id);
		if($logdok)
			$this->twig->display("tpl/imageview", $content);
	}
}
?>