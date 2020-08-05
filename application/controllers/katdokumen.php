<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class katdokumen extends CI_Controller {	
	var $em;	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('datalayer/logupdate');
		$this->load->model('datalayer/contentlayer');
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
				$id = (float)$this->input->post("id");			
				$par["model"] = "models\KategoriDokumen";
				$exist = false;
				 				
				if($id > 0){
					$group = $em->find($par["model"], $id);
					$par["method"] = "update";
				}
				else{
					$group = new models\KategoriDokumen;
					$par["method"] = "new";
					$exist = $em->getRepository($par["model"])->findOneBy(array("kode_kategori" => $this->input->post("kode_kategori")));
				}
				
				if(!$exist){
					// $group->setKodeKategori($this->input->post("kode_kategori"));
					// $group->setNamaKategori($this->input->post("nama_kategori"));
					// $group->setNamaKategori($this->input->post("id_group"));
					// $group->setKeterangan($this->input->post("keterangan"));

					$i = $this->input;
					$data = array(
						'kode_kategori'	=> $i->post('kode_kategori'),
						'nama_kategori'	=> $i->post('nama_kategori'),
						'id_group'		=> $i->post('id_group'),
						'keterangan'	=> $i->post('keterangan'),
					);


					try {
						$this->db->insert('mst_dokumenkat', $data);	
						// $this->em->persist($group);
						// $this->em->flush();
						// $par["id"] = $group->getId();
						// $this->logupdate->log_table($par);					 
					}
					catch(Exception $err){
						$message = $err->getMessage();
						var_dump($message);
						exit();
						}
				}
				else
				{
					$this->owner->alert("Data dengan kode tersebut telah ada, penambahan gagal","katdokumen/form");
				}								
			}

			$group = $this->em->getRepository("models\Group")->findAll();
			$groupna = $this->db->query("SELECT * FROM mst_group ORDER BY kode_group ASC")->result();
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			
			// var_dump($groupna);

			$content = array(
				"base_url" 	=> base_url(),
				"page_title"=> "Pengolahan Data Kategori Dokumen :: EBTKE",
				"log" 		=> $log,
				"ct" 		=> $ct,
				"news" 		=> $topnews,
				"links" 	=> $link,			
				"groups" 	=> $groupna,			
			);
			$this->twig->display("dokumenkatfrm",$content);	
		}
		else
			redirect("../");
	}
	
	public function viewdata()
	{
		$i=0;	
		$em = $this->em;
			
		$page 	= $this->input->post("page");
		$limit 	= $this->input->post("rows");
		$sidx 	= $this->input->post("sidx");
		$sord 	= $this->input->post("sord");	
		
		$q = $em->createQuery('SELECT a FROM models\KategoriDokumen a');
		$count = count($q->getResult());
		
		// if($count>0)
		// 	$total_pages = ceil($count/$limit);
       	// else
		// 	$total_pages = 0;
		
		// if ($page>$total_pages) $page=$total_pages; 
		
		// $start = $limit*$page - $limit;
        // $start = ($start<0)?0:$start; 
		
		// $responce->page = $page;
		// $responce->total = $total_pages;
		// $responce->records = $count;

		$queryna = $this->db->query("SELECT * FROM mst_dokumenkat LEFT JOIN mst_group ON mst_dokumenkat.id_group = mst_group.id_group");
		$data = $queryna->result_array();
		
		// $query = $em->createQuery('SELECT a FROM models\KategoriDokumen a');
		// $data = $query->getArrayResult();
		
		foreach($data as $row)
		{
			
			$responce->rows[$i]['id_kategori'] = $row["id_kategori"];
			$responce->rows[$i]['cell'] = array($row["id_kategori"],
											  $row["kode_kategori"],
											  $row["nama_kategori"],
											  $row["nama_group"],
											  $row["keterangan"],
											  date( "j F Y", strtotime($row["add_date"])),											  
											  $row["add_user"],
											  date( "j F Y", strtotime($row["modified_user"])),
											  $row["add_user"]
											  
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
		$em = $this->em;
		
		$segment = $this->uri->segment_array();	
		
		$by 	= $segment[3];
		$find 	= $segment[4];
		
		$qb = $em->createQueryBuilder();
		$qb->add("select", "a")
			->add("from", "models\KategoriDokumen a")
			->add("where", $qb->expr()->orx(
			$qb->expr()->like("$by", "?2")
		));
		$qb->setParameter(2, "%".$find."%"); 
		$query = $qb->getQuery();
		$data = $query->getArrayResult();
		foreach($data as $row)
		{
			$responce->rows[$i]['id'] = $row["id"];
			$responce->rows[$i]['cell'] = array($row["id"],
											  $row["kode_kategori"],
											  $row["nama_kategori"],
											  $row["keterangan"],
											  date( "j F Y", strtotime($row["add_date"])),											  
											  $row["add_user"],
											  date( "j F Y", strtotime($row["modified_user"])),
											  $row["add_user"]
											  
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
		
		$q = $em->createQuery("delete from models\KategoriDokumen a where a.id in ($t_id) ");

		// $q = $this->db->query("DELETE FROM mst_dokumenkat WHERE id_kategori = $t_id");
		$numDeleted = $q->execute();
		
	}
}
?>