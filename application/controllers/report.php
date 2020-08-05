<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class report extends CI_Controller {	
	var $em;	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('datalayer/logupdate');
		$this->load->model('datalayer/contentlayer');
		$this->em = $this->doctrine->em;
	}
	
	public function groupreport()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Laporan User Group :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,							
			);
			$this->twig->display("usergrouprpt",$content);	
		}
		else
			redirect("../");
	}
	
	public function userreport()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Laporan Daftar User:: ESDM",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,							
			);
			$this->twig->display("pemakairpt",$content);	
		}
		else
			redirect("../");
	}
	
	public function detailuserreport()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Laporan Detail User:: ESDM",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,							
			);
			$this->twig->display("pemakairpt",$content);	
		}
		else
			redirect("../");
	}
	
	public function dokumenreport()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Laporan Daftar Dokumen :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,							
			);
			$this->twig->display("dokumenrpt",$content);	
		}
		else
			redirect("../");
	}
	
	public function detailview()
	{
		$segment= $this->uri->segment_array();
		$id 	= $segment[3];
		
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata("userlogged");
		
		$query = $this->db->query("select a.*, b.nama_kategori, c.nama_lengkap from mst_dokumen a join mst_dokumenkat b on a.id_kategori=b.id_kategori join mst_user c on c.id_user=a.pengunggah where a.id_dokumen=$id");
		$dok = $query->row();
		
		$ct = $this->contentlayer->contenttext();
		$topnews = $this->contentlayer->topnews();
		$link = $this->contentlayer->linkeks();
			
		$content = array(
			"base_url" => base_url(),
			"page_title" => $dok->judul." :: EBTKE",
			"log" => $log,
			"ct" =>$ct,
			"news" =>$topnews,
			"links" =>$link,
			
			"dok" => $dok,
		);		
		$this->twig->display("detailrpt", $content);
	}
	
	public function dokumenlogreport()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Laporan Daftar Dokumen :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,							
			);
			$this->twig->display("dokumenlogrpt",$content);	
		}
		else
			redirect("../");
	}
	
	public function detailog()
	{
		$segment= $this->uri->segment_array();
		$id 	= $segment[3];
		
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata("userlogged");
		
		$query = $this->db->query("select a.*, b.nama_kategori, c.nama_lengkap from mst_dokumen a join mst_dokumenkat b on a.id_kategori=b.id_kategori join mst_user c on c.id_user=a.pengunggah where a.id_dokumen=$id");
		$dok = $query->row();
		
		$ct = $this->contentlayer->contenttext();
		$topnews = $this->contentlayer->topnews();
		$link = $this->contentlayer->linkeks();
			
		$content = array(
			"base_url" => base_url(),
			"page_title" => $dok->judul." :: EBTKE",
			"log" => $log,
			"ct" =>$ct,
			"news" =>$topnews,
			"links" =>$link,
			
			"dok" => $dok,
		);		
		$this->twig->display("logrpt", $content);
	}
	
	public function viewlog()
	{
		$i=0;
		
		$segment= $this->uri->segment_array();
		$id 	= $segment[3];
		
		$query1 = $this->db->query("SELECT a.*, IFNULL(a.nama_lengkap,'Publik') AS pembaca FROM (
					SELECT a.*, b.nama_lengkap FROM mst_dokumenlog a LEFT JOIN mst_user b ON a.id_user=b.id_user where a.id_dokumen=$id
				) a");	
		
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
		
		$query2 = $this->db->query("SELECT a.*, IFNULL(a.nama_lengkap,'Publik') AS pembaca FROM (
					SELECT a.*, b.nama_lengkap FROM mst_dokumenlog a LEFT JOIN mst_user b ON a.id_user=b.id_user where a.id_dokumen=$id 
				) a order by $sidx $sord limit $start , $limit");
		
		
		$data 	=  $query2->result();
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		foreach($data as $row) {
		
			$responce->rows[$i]['id'] = $row->id_log;
			$responce->rows[$i]['cell'] = array($row->id_log,
											  $row->id_dokumen,
											  $row->id_user,
											  $row->pembaca,
											  $row->ip_address,
											  date( "j F Y", strtotime($row->tgl_baca))
											 										  
											  
			);
			$i++;		
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;	
						
	}
}
?>