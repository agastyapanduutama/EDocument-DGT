<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {	
	var $em;	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->em = $this->doctrine->em;
		$this->load->model('datalayer/authentication');
		$this->load->model('datalayer/contentlayer');
		$this->load->model('datalayer/logupdate');
	}
	
	public function index()
	{
		$userlogged = $this->session->userdata('userlogged');
		$content = NULL;
		if(!$userlogged) {
			if($_POST)
			{
				$param = array(
							"username" => $this->input->post("username"),
							"password" => $this->input->post("password"),					
						);
				$valid = $this->authentication->loginauth($param);
				redirect("../");	
			}
		}
		else {
			$log = $this->session->all_userdata();
			$content = array(
				"log" => $log,
				"base_url" => base_url(),	
			);
			$usermodul = $this->session->userdata('usermodul');
			
			echo $usermodul;
			//var_dump($usermodul);
		}
		$this->twig->display("login", $content);
	}
	public function edoc()
	{
		$userlogged = $this->session->userdata('userlogged');
		if($userlogged) {
			
			$log = $this->session->all_userdata();
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$topdoks = $this->contentlayer->topdoks();
			
			$content = array(
				"base_url" => base_url(),
				"page_title" => "ESDM :: E-Document",
				"log" => $log,		
				
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,
				"topdoks" =>$topdoks,	
			);
			$this->twig->display("homedoc",$content);
		}
		else
			$this->twig->display("login");		
	}
	public function elet()
	{
		$userlogged = $this->session->userdata('userlogged');
		if($userlogged) {
			
			$log = $this->session->all_userdata();
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$topdoks = $this->contentlayer->topdoks();
			
			$content = array(
				"base_url" => base_url(),
				"page_title" => "ESDM :: E-Letter",
				"log" => $log,		
				
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,
				"topdoks" =>$topdoks,	
			);
			$this->twig->display("homelet",$content);
		}
		else
			$this->twig->display("login");		
	}
	public function erep()
	{
		$userlogged = $this->session->userdata('userlogged');
		if($userlogged) {
			
			$log = $this->session->all_userdata();
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$topdoks = $this->contentlayer->topdoks();
			
			$content = array(
				"base_url" => base_url(),
				"page_title" => "ESDM :: E-Reporting",
				"log" => $log,		
				
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,
				"topdoks" =>$topdoks,	
			);
			$this->twig->display("homeerep",$content);
		}
		else
			$this->twig->display("login");		
	}
	public function tentang()
	{
		$log = $this->session->all_userdata();
		
		$ct = $this->contentlayer->contenttext();
		$topnews = $this->contentlayer->topnews();
		$link = $this->contentlayer->linkeks();
		
		$content = array(
			"base_url" => base_url(),
			"page_title" => "Tentang Kami :: EBTKE",
			"log" => $log,		
			
			"ct" =>$ct,
			"news" =>$topnews,
			"links" =>$link,	
		);
		$this->twig->display("tentang",$content);		
	}
	public function kontak()
	{
		$log = $this->session->all_userdata();
		
		$ct = $this->contentlayer->contenttext();
		$topnews = $this->contentlayer->topnews();
		$link = $this->contentlayer->linkeks();
		
		$content = array(
			"base_url" => base_url(),
			"page_title" => "Kontak Kami :: EBTKE",
			"log" => $log,		
			
			"ct" =>$ct,
			"news" =>$topnews,
			"links" =>$link,	
		);
		$this->twig->display("kontakkami",$content);		
	}
	public function cari()
	{
		if($_POST)
		{
			$param = array(
						"username" => $this->input->post("username"),
						"password" => $this->input->post("password"),					
					);
			$valid = $this->authentication->loginauth($param);
			redirect("../");		
		}
		
		
		$ct = $this->contentlayer->contenttext();
		$topnews = $this->contentlayer->topnews();
		$link = $this->contentlayer->linkeks();
		
		$log = $this->session->all_userdata();
		$content = array(
			"base_url" => base_url(),
			"page_title" => "Pencarian Dokumen :: EBTKE",
			"log" => $log,			
			"ct" =>$ct,
			"news" =>$topnews,
			"links" =>$link,
		);
		$this->twig->display("cari",$content);		
	}
	public function gantipass()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$em = $this->em;
			if($_POST)
			{				
				$id = (float)$this->input->post("id");			
				$par["model"] = "models\User";
				$par["method"] = "update";
				$pass0 = md5($this->input->post("pass0"));
				
				if($pass0 == $this->session->userdata('userpassword'))
				{
					$pass1 = $this->input->post("pass1");
					$pass2 = $this->input->post("pass2");
					if($pass1 == $pass2)
					{
						$password = md5($pass2);
						$news = $em->find($par["model"], $id);
						$news->setPassword($password);
						try {
							$this->em->persist($news);
							$this->em->flush();
							$par["id"] = $news->getId();
							$this->logupdate->log_table($par);	
							
							$data = array(
								   'userpassword'   => $password,
							);
							$this->session->set_userdata($data);				 
						}
						catch(Exception $err){
							$message = $err->getMessage();
var_dump($message);
exit();		$this->owner->alert("Terjadi error : ".$message, "home/gantipass");
						}
					}
					else
						$this->owner->alert("Terjadi error : Password 1 dan 2 Berbeda", "home/gantipass");	
				}
				else
					$this->owner->alert("Terjadi error : Password lama tidak sesuai", "home/gantipass");												
			}
			
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Ganti Password :: EBTKE",
				"log" => $log,		
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,	
				"iduser" => $this->session->userdata('userid')
			);
			$this->twig->display("gantipassfrm",$content);	
		}
		else
			redirect("../");
	}
	public function listdok()
	{
		$this->load->library('pagination');
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata("userlogged");
		$userlevel = $this->session->userdata("userlevel");
		$usergroup = $this->session->userdata("usergroup");
		
		if($userlogged){
		
			$publik = 1;
			$by_group = "";
			if($userlogged){
				if($userlevel != "A"){
					$publik = 0;
					$by_group = " where concat(',',a.groupdok,',') like '%$usergroup%'";
				}
			}
			
			$string_query				= "SELECT a.*, substring(a.deskripsi,1,400) as singkatdesk, b.nama_lengkap, c.nama_kategori from mst_dokumen a join mst_user b on a.pengunggah=b.id_user join mst_dokumenkat c on a.id_kategori=c.id_kategori $by_group order by a.tgl_publikasi desc";
			$query          			= $this->db->query($string_query);
			// $config['base_url'] 		= base_url()."index.php/home/listdok/";
			// $config['total_rows']		= $query->num_rows();
			// $totalnum 					= $query->num_rows();
			// $config['per_page'] 		= 10;
			// $config['cur_tag_open'] 	= '<b>';
			// $config['cur_tag_close'] 	= '</b>';
			// $num 						= $config['per_page'];
			// $config['num_links']        = 10;
			// $offset 					= $this->uri->segment(4, 0);
			// $config['uri_segment'] 		= 4;  
			// $config['full_tag_open']  	= '<div class="pagination">';
			// $config['full_tag_close']   = '</div>';
			// $config['next_link']  		= 'Next &raquo;';
			// $config['prev_link']   		= '&laquo; Prev';
			// $config['num_tag_open']  	= '<div class="digit">';
			// $config['num_tag_close']  	= '</div>';
			// $config['cur_tag_open']  	= '<div class="digit current">';
			// $config['cur_tag_close'] 	= '</div>';
			// $config['last_link']   		= '<b>Last &rsaquo;</b>';
			// $config['first_link']  		= '<b>&lsaquo; First</b>';

			$config['base_url'] 	= base_url() . "index.php/home/listdok/";
			$config['total_rows'] 	= $query->num_rows();
			$config['per_page'] 	= 10;
			$num 					= $config['per_page'];
			$offset 				= $this->uri->segment(4, 0);
			

			
			$this->pagination->initialize($config);

			$q = $this->db->query($string_query." limit $offset, $num");
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$topdoks = $this->contentlayer->topdoks();
			
			$halaman = $this->pagination->create_links();
			
			$gr = $this->em->getRepository("models\Group")->find($usergroup);
			
			$content = array(
				"base_url" => base_url(),
				"page_title" => "List Dokumen :: EBTKE",
				"log" => $log,		
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,
				"topdoks" =>$topdoks,	
				"hasil" => $query->result(),
				"halaman" => $halaman,
				"gr" => $gr
			);
			$this->twig->display("listdokumen",$content, $this->pagination->create_links() );

			// $this->load->view('listdokumen', $content);
			
		}	
		else
			redirect("../");
	}

	public function listdokpribadi()
	{
		$this->load->library('pagination');
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata("userlogged");
		$userlevel = $this->session->userdata("userlevel");
		$usergroup = $this->session->userdata("usergroup");
		$userid = $this->session->userdata("userid");

		// print_r($this->session->userdata); 
		

		if ($userlogged) {

			$publik = 1;
			$by_group = "";
			if ($userlogged) {
				if ($userlevel != "A") {
					$publik = 0;
					$by_group = " where concat(',',a.pengunggah,',') like '%$userid%' and publik = 2";
				}
			}

			$string_query = "SELECT a.*, substring(a.deskripsi,1,400) as singkatdesk, b.nama_lengkap, c.nama_kategori from mst_dokumen a join mst_user b on a.pengunggah=b.id_user
									join mst_dokumenkat c on a.id_kategori=c.id_kategori $by_group order by a.tgl_publikasi desc";

			$query          		= $this->db->query($string_query);
			$config['base_url'] 	= base_url() . "index.php/home/listdok/";
			$config['total_rows']	= $query->num_rows();
			$totalnum =  $query->num_rows();
			$config['per_page'] 	= 10;
			$config['cur_tag_open'] = '<b>';
			$config['cur_tag_close'] = '</b>';
			$num            		= $config['per_page'];

			$config['num_links']        = 10;
			$offset = $this->uri->segment(4, 0);
			$config['uri_segment'] = 4;


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
			$q = $this->db->query($string_query . " limit $offset, $num");

			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$topdoks = $this->contentlayer->topdoks();

			$gr = $this->em->getRepository("models\Group")->find($usergroup);

			$content = array(
				"base_url" => base_url(),
				"page_title" => "List Dokumen :: EBTKE",
				"log" => $log,
				"ct" => $ct,
				"news" => $topnews,
				"links" => $link,
				"topdoks" => $topdoks,
				"hasil" => $query->result()	,
				"gr" => $gr
			);
			$this->twig->display("listdokumenpribadi", $content);
		} else
			redirect("../");
	}
	
	

	public function listdokpublik()
	{
		$this->load->library('pagination');
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata("userlogged");
		$userlevel = $this->session->userdata("userlevel");
		$usergroup = $this->session->userdata("usergroup");
		
		if($userlogged){
		
			
				
			$string_query = "SELECT a.*, substring(a.deskripsi,1,400) as singkatdesk, b.nama_lengkap, c.nama_kategori from mst_dokumen a join mst_user b on a.pengunggah=b.id_user
									join mst_dokumenkat c on a.id_kategori=c.id_kategori where a.publik=1 order by a.tgl_publikasi desc";
			
			$query          		= $this->db->query($string_query);
			$config['base_url'] 	= base_url()."index.php/home/listdokpublik/";
			$config['total_rows']	= $query->num_rows();
			$totalnum =  $query->num_rows();
			$config['per_page'] 	= 10;
			$config['cur_tag_open'] = '<b>';
			$config['cur_tag_close'] = '</b>';
			$num            		= $config['per_page'];
			
			$config['num_links']        = 10;
			$offset = $this->uri->segment(4, 0);
			$config['uri_segment'] = 4;  
			
			
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
			$topdoks = $this->contentlayer->topdoks();
			
			$content = array(
				"base_url" => base_url(),
				"page_title" => "List Dokumen :: EBTKE",
				"log" => $log,		
				
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,
				"topdoks" =>$topdoks,	
				"hasil" => $query->result()
			);
			$this->twig->display("listdokumenpublik",$content);
		}	
		else
			redirect("../");
	}
	
	
	public function listberita()
	{
		$this->load->library('pagination');
				
		$string_query = "select * from mst_news order by tgl_publikasi desc";
		$log = $this->session->all_userdata();
		$query          		= $this->db->query($string_query);
		$config['base_url'] 	= base_url()."index.php/home/listberita/";
		$config['total_rows']	= $query->num_rows();
		$totalnum =  $query->num_rows();
		$config['per_page'] 	= 15;
		$config['cur_tag_open'] = '<b>';
		$config['cur_tag_close'] = '</b>';
		$num            		= $config['per_page'];
		
		$config['num_links']        = 10;
		$offset = $this->uri->segment(4, 0);
		$config['uri_segment'] = 4;  
		
		
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
		$topdoks = $this->contentlayer->topdoks();
		
		$content = array(
			"base_url" => base_url(),
			"page_title" => "List Berita :: EBTKE",
			"log" => $log,
			
			"ct" =>$ct,
			"news" =>$topnews,
			"links" =>$link,
			"topdoks" =>$topdoks,	
			"hasil" => $q->result()
		);
		$this->twig->display("listberita",$content);
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect("../");	
	}
}
?>