<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class usergroup extends CI_Controller {	
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
			if($_POST)
			{
				$em = $this->em;
				$id = (float)$this->input->post("id");			
				$par["model"] = "models\Group";
				$exist = false;
				 				
				if($id > 0){
					$group = $em->find($par["model"], $id);
					$par["method"] = "update";
				}
				else{
					$group = new models\Group;
					$par["method"] = "new";
					$exist = $em->getRepository($par["model"])->findOneBy(array("kode_group" => $this->input->post("kode_group")));
				}
				
				if(!$exist){			
					$i = $this->input;
					$levelna = 1;

					if ($i->post('parent') != '') {
						$idna = $i->post('parent');
						while ($this->hai($idna) != '') {
							$levelna++;
							$idna = $this->hai($idna);
						}
						$levelna++;
					}

					$group->setKodeGroup($this->input->post("kode_group"));
					$group->setParent($this->input->post("parent"));
					$group->setNamaGroup($this->input->post("nama_group"));
					$group->setKeterangan($this->input->post("keterangan"));
					
					$data = array(
						'kode_group'	=> $i->post('kode_group'),
						'header_group'	=> '0',
						'nama_group'	=> $i->post('nama_group'),
						'parent'		=> $i->post('parent'),
						'keterangan'	=> $i->post('keterangan'),
						'nama_parent'	=> $i->post('nama_parent'),
						'level'			=> $levelna,
					);

					try {
						$this->db->insert('mst_group', $data);	
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
					$this->owner->alert("Data dengan kode tersebut telah ada, penambahan gagal","usergroup/form");
				}								
			}
			// $group = $this->em->getRepository("models\Group")->findAll();

			$group = $this->db->query("SELECT * FROM mst_group ORDER BY kode_group ASC")->result();
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Pengolahan Data User Group :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,							
				"groups" =>$group,							
			);
			$this->twig->display("usergroupfrm",$content);	
		}
		else
			redirect("../");
	}

	function hai($id) {
		$data = $this->db->get_where('mst_group', ['id_group' => $id])->row();
		return $data->parent;
	}
	
	public function viewdata()
	{
		$i=0;	
		$em = $this->em;
			
		$page 	= $this->input->post("page");
		$limit 	= $this->input->post("rows");
		$sidx 	= $this->input->post("sidx");
		$sord 	= $this->input->post("sord");	
		
		$q = $em->createQuery('SELECT a FROM models\Group a');
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
		
		$query = $em->createQuery('SELECT a FROM models\Group a');
		// $data = $query->getArrayResult();

		$queryna = $this->db->query("SELECT * FROM mst_group ORDER BY kode_group ASC");
		$data = $queryna->result_array();

		// var_dump($data);
		$responce = (Object) [];
		foreach($data as $row)
		{
			if($row["id_group"] > 0){
				$responce->rows[$i]['id_group'] = $row["id_group"];
				$responce->rows[$i]['cell'] = array($row["id_group"],
												  $row["kode_group"],
												  $row["nama_group"],
												  $row["nama_parent"],
												  $row["level"],
												  $row["keterangan"],
												  date( "j F Y", strtotime($row["add_date"])),		  
												  $row["add_user"],
												  date( "j F Y", strtotime($row["modified_user"])),
												  $row["add_user"]
												  
				);
				$i++;	
			}	
				
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
			->add("from", "models\Group a")
			->add("where", $qb->expr()->orx(
			$qb->expr()->like("$by", "?2")
		));
		$qb->setParameter(2, "%".$find."%"); 
		$query = $qb->getQuery();
		$data = $query->getArrayResult();
		$responce = (Object) [];
		foreach ($data as $row)
		{
			
			if($row["id"] > 0){
				$responce->rows[$i]['id'] = $row["id"];
				$responce->rows[$i]['cell'] = array($row["id"],
												  $row["kode_group"],
												  $row["nama_group"],
												  $row["keterangan"],
												  date( "j F Y", strtotime($row["add_date"])),											  
												  $row["add_user"],
												  date( "j F Y", strtotime($row["modified_user"])),
												  $row["add_user"]
												  
				);
				$i++;
			}		
					
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

		$idna = $this->input->post('id');

		// $q = $this->db->query("DELETE * FROM mst_group WHERE id_group = $idna");
		$q = $em->createQuery("delete from models\Group a where a.id in ($t_id) ");
		$numDeleted = $q->execute();
		
	}
}
?>