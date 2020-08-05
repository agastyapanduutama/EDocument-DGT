<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class surat extends CI_Controller {	
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
			
				$nomor_agenda = $this->contentlayer->nomor_agenda($this->input->post("group"), $this->input->post("jenis"));
				$fk = $this->contentlayer->foreign_key();
				
				$file_surat = "";
				
				$id = (float)$this->input->post("id");	
				
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
							
							if (!$this->upload->do_upload("filesurat")){
								$error =  $this->upload->display_errors();
								$this->owner->alert("Upload File Gagal `".$error."`","surat/form");
								$filesurat = "";
								
							}
							else{
								$upload = true;
								$tipe_file = $arr[1];
							}
						}
						else
						{
							$this->owner->alert("Upload file dengan tipe $arr[$lsc] tidak diperkenankan","surat/form");
						}	
					}
				
					$par["model"] = "models\Surat";
					
					if($id > 0){
						$dok = $em->find($par["model"], $id);
						$par["method"] = "update";
						
						$filesurat = $dok->getFileSurat();
					}
					else{
						$dok = new models\Surat;
						$par["method"] = "new";
					}
					
					$dok->setNoAgenda($nomor_agenda);
					$dok->setFkId($fk);
					$dok->setNoSurat($this->input->post("no_surat"));
					$dok->setTanggal($this->input->post("tanggal"));
					$dok->setAsalSurat($this->input->post("asal_surat"));
					$dok->setIdSifat($this->input->post("sifat"));
					$dok->setIdJenis($this->input->post("jenis"));
					$dok->setLampiran($this->input->post("lampiran"));
					$dok->setTanggalKlar($this->input->post("tanggal_klarifikasi"));
					$dok->setIdAksi($this->input->post("aksi"));
					$dok->setIdGroup($this->input->post("group"));
					$dok->setIdStaff($this->input->post("staff"));
					$dok->setCatatan($this->input->post("catatan"));
					$dok->setHal($this->input->post("hal"));
					$dok->setStatusDis(0);					
					$dok->setFileSurat($filesurat);
					try {
						$this->em->persist($dok);
						$this->em->flush();
						$par["id"] = $dok->getId();
						$this->logupdate->log_table($par);					 
					}
					catch(Exception $err){
						$message = $err->getMessage();
						var_dump($message);
						exit();
					}						
			}
			
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
				"page_title" => "Pengolahan Data Surat Masuk :: EBTKE",
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
			$this->twig->display("suratfrm",$content);	
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
	
	public function listtoselect()
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
									JOIN mst_aksisurat f ON a.id_aksi=f.id_aksi WHERE a.status_disposisi >= 1 ");	
		
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
									JOIN mst_aksisurat f ON a.id_aksi=f.id_aksi WHERE a.status_disposisi >= 1 order by $sidx $sord limit $start , $limit");							
		
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
	public function listsurat(){
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		
		$content = array(
				"base_url" => base_url(),
				
			);
		
		if($userlogged){ 
			$this->twig->display("listsurat", $content);	
		}
		
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