<?php
class Caridokumen extends CI_Model {
	
	var $em;
	public function __construct()
    {
        parent::__construct();
		$this->em = $this->doctrine->em;
    }
	
	public function search($param)
	{	
	
		$find = $param["find"];
		$by = $param["by"];
		
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata("userlogged");
		$userlevel = $this->session->userdata("userlevel");
		$usergroup = $this->session->userdata("usergroup");
		
		$by_group = "";
		
		$publik = 1;
		if($userlogged){
			if($userlevel != "A"){
				$publik = 0;
				$by_group = " and concat(a.groupdok,',') like '%,$usergroup,%'";
			}
		}
				
		$where = "where $by like '%$find%'";
		if(empty($by))
			$where = "where (a.judul like '%$find%' or a.deskripsi like '%$find%' or a.penulis like '%$find%' or b.nama_lengkap like '%$find%')";
			
			
			
		$string_query = "select a.*, substring(a.deskripsi,1,400) as singkatdesk, b.nama_lengkap, c.nama_kategori from mst_dokumen a join mst_user b on a.pengunggah=b.id_user
								join mst_dokumenkat c on a.id_kategori=c.id_kategori $where and a.publik=$publik $by_group";
		
		
		$query          		= $this->db->query($string_query);
		$config['base_url'] 	= base_url()."index.php/dok/pencarian/$find/$by/";
		$config['total_rows']	= $query->num_rows();
		$config['per_page'] 	= '1';
		$config['use_page_numbers'] = TRUE;
		
		$config['cur_tag_open'] = '<b>';
		$config['cur_tag_close'] = '</b>';
		
		
		
		$num            		= $config['per_page'];
		$offset         		= $this->uri->segment(5);
		$offset         		= ( ! is_numeric($offset) || $offset < 1) ? 0 : $offset;  
		//echo $offset;
		if(empty($offset))
		{
			$offset=0;
		}  
		$this->pagination->initialize($config);
		$q = $this->db->query($string_query." limit $offset, $num");
		return $q->result();
		
	}
	
	public function totalsearch($param)
	{	
	
		$find = $param["find"];
		$by = $param["by"];
		
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata("userlogged");
		$userlevel = $this->session->userdata("userlevel");
		$usergroup = $this->session->userdata("usergroup");
		
		$by_group = "";
		
		$publik = 1;
		if($userlogged){
			if($userlevel != "A"){
				$publik = 0;
				$by_group = " and concat(a.groupdok,',') like '%,$usergroup,%'";
			}
		}
				
		$where = "where $by like '%$find%'";
		if(empty($by))
			$where = "where (a.judul like '%$find%' or a.deskripsi like '%$find%' or a.penulis like '%$find%' or b.nama_lengkap like '%$find%')";
			
			
			
		$string_query = "select a.*, substring(a.deskripsi,1,400) as singkatdesk, b.nama_lengkap, c.nama_kategori from mst_dokumen a join mst_user b on a.pengunggah=b.id_user
								join mst_dokumenkat c on a.id_kategori=c.id_kategori $where and a.publik=$publik $by_group";
		
		
		$query          	= $this->db->query($string_query);
		return $query->num_rows();
		
	}
	
}
?>